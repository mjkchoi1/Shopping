<?php
require(__DIR__ . "/../../partials/nav.php");

if (!isset($_GET['id']) || !is_numeric($_GET['id'])) {
    flash("Order not found", "danger");
    header("Location: /Project/cart.php");
    exit;
}

$db = getDB();

$query = "SELECT id, user_id, payment_method, paid_amount, shipping_name, shipping_address, shipping_city, shipping_state, shipping_zip
          FROM Orders
          WHERE user_id = :uid AND id = :oid";
$stmt = $db->prepare($query);
$stmt->bindValue(':uid', get_user_id(), PDO::PARAM_INT);
$stmt->bindValue(':oid', $_GET['id'], PDO::PARAM_INT);
$stmt->execute();
$order = $stmt->fetch(PDO::FETCH_ASSOC);

if (!$order) {
    flash("Order not found", "danger");
    header("Location: /Project/cart.php");
    exit;
}

$query = "SELECT item_name, unit_price, quantity, subtotal
          FROM OrderItems
          WHERE order_id = :oid";
$stmt = $db->prepare($query);
$stmt->bindValue(':oid', $_GET['id'], PDO::PARAM_INT);
$stmt->execute();
$orderItems = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<div class="container">
    <h1>Order Confirmation</h1>
    <p>Thank you for shopping with us! We hope you enjoy your purchase!</p>
    <h2>Order Details</h2>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Item</th>
                <th>Price</th>
                <th>Quantity</th>
                <th>Subtotal</th>
            </tr>
        </thead>
        <tbody>
         <?php foreach ($orderItems as $o) : ?>
            <tr>
                <td><?= $o['item_name'] ?></td>
                <td>$<?= number_format($o['unit_price'], 2) ?></td>
                <td><?= $o['quantity'] ?></td>
                <td>$<?= number_format($o['subtotal'], 2) ?></td>
            </tr>
        <?php endforeach; ?>
        <tr>
            <td colspan="3">Total:</td>
            <td>$<?= number_format(array_reduce($orderItems, function($carry, $item) {
                    return $carry + $item['subtotal'];
                }, 0), 2) ?></td>
        </tr>
        </tbody>
    </table>
    <h2>Payment Details</h2>
    <p>Payment Method: <?= $order['payment_method'] ?></p>
    <p>Paid Amount: $<?= number_format($order['paid_amount'], 2) ?></p>
    <h2>Shipping Details</h2>
    <p>Name: <?= $order['shipping_name'] ?></p>
    <p>Address: <?= $order['shipping_address'] ?></p>
    <p>City: <?= $order['shipping_city'] ?></p>
    <p>State: <?= $order['shipping_state'] ?></p>
    <p>Zip: <?= $order['shipping_zip'] ?></p>
</div>
<?php
require(__DIR__ . "/../../partials/footer.php");
?>
