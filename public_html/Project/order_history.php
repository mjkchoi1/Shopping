<?php
require(__DIR__ . "/../../partials/nav.php");

if (!is_logged_in()) {
    flash("You must be logged in to view this page", "warning");
    header("Location: /Project/login.php");
    exit;
}

$db = getDB();

$query = "SELECT id, created, payment_method, paid_amount
          FROM Orders
          WHERE user_id = :uid
          ORDER BY created DESC";
$stmt = $db->prepare($query);
$stmt->bindValue(':uid', get_user_id(), PDO::PARAM_INT);
$stmt->execute();
$orders = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<div class="container">
    <h1>Order History</h1>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Order ID</th>
                <th>Date</th>
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
