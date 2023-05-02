<?php
require(__DIR__ . "/../../partials/nav.php");

if (!is_logged_in() || !has_role("admin")) {
    flash("You don't have permission to access this page", "warning");
    header("Location: /Project/home.php");
    exit;
}

$db = getDB();

$query = "SELECT o.id, o.created, o.payment_method, o.paid_amount, u.username
          FROM Orders o
          JOIN Users u ON o.user_id = u.id
          ORDER BY o.created DESC";
$stmt = $db->prepare($query);
$stmt->execute();
$orders = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<div class="container">
    <h1>Purchase History</h1>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Order ID</th>
                <th>Date</th>
                <th>Username</th>
                <th>Payment Method</th>
                <th>Paid Amount</th>
                <th>Details</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($orders as $o) : ?>
                <tr>
                    <td><?= $o['id'] ?></td>
                    <td><?= $o['created'] ?></td>
                    <td><?= $o['username'] ?></td>
                    <td><?= $o['payment_method'] ?></td>
                    <td>$<?= number_format($o['paid_amount'], 2) ?></td>
                    <td><a href="order_confirmation.php?id=<?= $o['id'] ?>">View Details</a></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>

<?php
require(__DIR__ . "/../../partials/footer.php");
?>