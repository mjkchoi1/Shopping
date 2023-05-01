<?php
function checkout($payment_method, $paid_amount, $shipping_name, $shipping_address, $shipping_city, $shipping_state, $shipping_zip) {
    $db = getDB();
    $user_id = get_user_id();
    


    // Get all items in the cart
    $query = "SELECT * FROM Cart WHERE user_id = :uid";
    $stmt = $db->prepare($query);
    $stmt->bindValue(':uid', $user_id, PDO::PARAM_INT);
    $stmt->execute();
    $cart_items = $stmt->fetchAll(PDO::FETCH_ASSOC);

    // Verify payment method
    if ($payment_method != "credit_card" && $payment_method != "paypal" && $payment_method != "cash") {
        flash("Invalid payment method selected", "danger");
        return;
    }

    // Verify paid amount vs cart amount
    $cart_total = array_reduce($cart_items, function ($carry, $item) {
        return $carry + ($item['unit_price'] * $item['desired_quantity']);
    }, 0);
    if ($paid_amount != $cart_total) {
        flash("Paid amount does not match cart total", "danger");
        return;
    }

    // Verify address
    if (!$address) {
        flash("Invalid address provided", "danger");
        return;
    }

    // Verify stock/price of items
    foreach ($cart_items as $item) {
        $query = "SELECT stock, cost FROM Products WHERE id = :item_id";
        $stmt = $db->prepare($query);
        $stmt->bindValue(':item_id', $item['item_id'], PDO::PARAM_INT);
        $stmt->execute();
        $product = $stmt->fetch(PDO::FETCH_ASSOC);
        if ($product['stock'] < $item['desired_quantity'] || $product['cost'] != $item['unit_price']) {
            flash("Invalid item stock/price detected", "danger");
            return;
        }
    }

    // Create an order in the Orders table
    $query = "INSERT INTO Orders (user_id, total_price, address, payment_method, money_received)
              VALUES (:user_id, :total_price, :address, :payment_method, 1)";
    $stmt = $db->prepare($query);
    $stmt->bindValue(':user_id', $user_id, PDO::PARAM_INT);
    $stmt->bindValue(':total_price', $cart_total, PDO::PARAM_STR);
    $stmt->bindValue(':address', $address, PDO::PARAM_STR);
    $stmt->bindValue(':payment_method', $payment_method, PDO::PARAM_STR);
    $stmt->execute();
    $order_id = $db->lastInsertId();

    // Insert items into the OrderItems table
foreach ($cart_items as $item) {
    $query = "INSERT INTO OrderItems (order_id, product_id, unit_price, quantity, subtotal)
              VALUES (:order_id, :product_id, :unit_price, :quantity, :subtotal)";
    $stmt = $db->prepare($query);
    $stmt->bindValue(':order_id', $order_id, PDO::PARAM_INT);
    $stmt->bindValue(':product_id', $item['item_id'], PDO::PARAM_INT);
    $stmt->bindValue(':unit_price', $item['unit_price'], PDO::PARAM_STR);
    $stmt->bindValue(':quantity', $item['desired_quantity'], PDO::PARAM_INT);
    $stmt->bindValue(':subtotal', $item['unit_price'] * $item['desired_quantity'], PDO::PARAM_STR);
    $stmt->execute();

    // Update the stock of the item in the Products table
    $query = "UPDATE Products SET stock = stock - :quantity WHERE id = :item_id";
    $stmt = $db->prepare($query);
    $stmt->bindValue(':item_id', $item['item_id'], PDO::PARAM_INT);
    $stmt->bindValue(':quantity', $item['desired_quantity'], PDO::PARAM_INT);
    $stmt->execute();
}


// Empty the user's cart
$query = "DELETE FROM Cart WHERE user_id = :user_id";
$stmt = $db->prepare($query);
$stmt->bindValue(':user_id', $user_id, PDO::PARAM_INT);
$stmt->execute();

flash("Checkout successful", "success");
}
?>