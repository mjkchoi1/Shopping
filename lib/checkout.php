<?php
function checkout($payment_method, $paid_amount, $address, $first_name, $last_name) {

    $db = getDB();
    require_once(__DIR__ . "/user_helpers.php");
    $user_id = get_user_id();
    if (!$user_id) {
        die("User ID not found");
    } else {
        echo "User ID: " . $user_id;
    }

    if (isset($_POST['payment_method'])) {
        $payment_method = $_POST['payment_method'];
    } else {
        flash("Payment method not provided", "danger");
        header("Location: /Project/checkout_form.html");
        exit;
    }

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

    $query = "INSERT INTO Orders (user_id, total_price, address, payment_method, money_received, first_name, last_name)
    VALUES (:user_id, :total_price, :address, :payment_method, 1, :first_name, :last_name)";
    $stmt = $db->prepare($query);
    $stmt->bindValue(':user_id', $user_id, PDO::PARAM_INT);
    $stmt->bindValue(':total_price', $cart_total, PDO::PARAM_STR);
    $stmt->bindValue(':address', $address, PDO::PARAM_STR);
    $stmt->bindValue(':payment_method', $payment_method, PDO::PARAM_STR);
    $stmt->bindValue(':first_name', $first_name, PDO::PARAM_STR);
    $stmt->bindValue(':last_name', $last_name, PDO::PARAM_STR);
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

$query = "UPDATE Products SET stock = stock - :quantity WHERE id = :item_id";
$stmt = $db->prepare($query);
$stmt->bindValue(':item_id', $item['item_id'], PDO::PARAM_INT);
$stmt->bindValue(':quantity', $item['desired_quantity'], PDO::PARAM_INT);
$stmt->execute();


// Empty the user's cart
$query = "DELETE FROM Cart WHERE user_id = :user_id";
$stmt = $db->prepare($query);
$stmt->bindValue(':user_id', $user_id, PDO::PARAM_INT);
$stmt->execute();


if (isset($_POST['payment_method']) && isset($_POST['paid_amount']) && isset($_POST['address']) && isset($_POST['first_name']) && isset($_POST['last_name'])) {
    checkout($_POST['payment_method'], $_POST['paid_amount'], $_POST['address'], $_POST['first_name'], $_POST['last_name']);
} else {
    flash("Required information not provided", "danger");
    header("Location: /Project/checkout_form.html");
    exit;
}
flash("Checkout successful", "success");
header("Location: /Project/confirmation.php?id=" . $order_id);
exit;

}
}
?>