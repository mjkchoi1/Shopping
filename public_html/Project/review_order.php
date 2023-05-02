<?php
require(__DIR__ . "/../../partials/nav.php");

is_logged_in(true);

// Fetch the cart items
$query = "SELECT cart.id, item.name, item.cost as unit_cost, cart.unit_price, 
          (cart.unit_price * cart.desired_quantity) as subtotal, cart.desired_quantity, 
          (cart.unit_price - item.cost) / item.cost * 100 as price_difference
          FROM Products as item JOIN Cart as cart on item.id = cart.item_id
          WHERE cart.user_id = :uid";
$db = getDB();
$stmt = $db->prepare($query);
$cart = [];
try {
    $stmt->execute([":uid" => get_user_id()]);
    $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
    if ($results) {
        $cart = $results;
    }
} catch (PDOException $e) {
    flash($e->getMessage(), "danger");
    flash("Error fetching cart", "danger");
}

$total = array_reduce($cart, function($carry, $item) {
    return $carry + $item['subtotal'];
}, 0);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    checkout();
    header("Location: cart.php");
    exit;
}
?>

<div class="container-fluid">
    <h1>Review Order</h1>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Item</th>
                <th>Price</th>
                <th>Quantity</th>
                <th>Subtotal</th>
                <th>Price Change</th>
            </tr>
        </thead>
        <tbody>
        <?php foreach ($cart as $c) : ?>
            <tr>
                <td><?php se($c, "name"); ?></td>
                <td><?php se($c, "unit_price"); ?></td>
                <td><?php se($c, "desired_quantity"); ?></td>
                <td><?php se($c, "subtotal"); ?></td>
                <td>
                    <?php
                    $price_difference = se($c, "price_difference", 0, false);
                    if ($price_difference != 0) {
                        echo ($price_difference > 0 ? "+" : "") . number_format($price_difference, 2) . "%";
                    } else {
                        echo "-";
                    }
                    ?>
                </td>
            </tr>
        <?php endforeach; ?>
        <?php if (count($cart) == 0) : ?>
            <tr>
                <td colspan="100%">No items in cart</td>
            </tr>
        <?php endif; ?>
        <tr>
            <td colspan="100%">Total: <?php se($total, null, 0); ?></td>
        </tr>
        </tbody>
    </table>
    <form method="post">
        <button type="submit" class="btn btn-primary">Checkout</button>
    </form>
    <a href="cart.php" class="btn btn-secondary">Back to Cart</a>
</div>

<?php
require(__DIR__ . "/../../partials/footer.php");
?>
