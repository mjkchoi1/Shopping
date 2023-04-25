<?php
require_once(__DIR__ . "/../../../partials/nav.php");
require_once(__DIR__ . "/../../../partials/nav.php");
require_once(__DIR__ . "/../../../partials/get_columns.php");
require_once(__DIR__ . "/../../../lib/functions.php");

// Check user's role before displaying page
if (!has_role("Admin") && !has_role("Shop Owner")) {
    flash("You don't have permission to view this page", "warning");
    die(header("Location: $BASE_PATH/home.php"));
}

$results = [];
$db = getDB();
$stmt = $db->prepare("SELECT id, name, description, cost, stock, image FROM Products");
try {
    $stmt->execute();
    $r = $stmt->fetchAll(PDO::FETCH_ASSOC);
    if ($r) {
        $results = $r;
    }
} catch (PDOException $e) {
    flash("Error fetching items", "danger");
    flash($e->getMessage(), "danger");
}
?>

<div class="container-fluid">
    <h1>Product List</h1>
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Description</th>
                <th>Cost</th>
                <th>Stock</th>
                <th>Image</th>
                <th>Visible</th>
                <th>Edit</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($results as $item) : ?>
                <tr>
                    <td><?php se($item, "id"); ?></td>
                    <td><?php se($item, "name"); ?></td>
                    <td><?php se($item, "description"); ?></td>
                    <td><?php se($item, "cost"); ?></td>
                    <td><?php se($item, "stock"); ?></td>
                    <td><?php if (se($item, "image", "", false)) : ?><img src="<?php se($item, "image"); ?>" alt=""><?php endif; ?></td>
                    <td><?php se($item, "visible"); ?></td>
                    <td><a href="<?php echo $BASE_PATH ?>/admin/edit_product.php?id=<?php se($item, "id"); ?>">Edit</a></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>

<?php
require_once(__DIR__ . "/../../../partials/footer.php");
?>
