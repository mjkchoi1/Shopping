<?php
require(__DIR__ . "/../../partials/nav.php");

$id = isset($_GET['id']) ? $_GET['id'] : null;
if (!$id) {
    http_response_code(400);
    die("Product ID not provided.");
}

$db = getDB();
$stmt = $db->prepare("SELECT * FROM Products WHERE id = :id");
$stmt->bindValue(":id", $id, PDO::PARAM_INT);
$stmt->execute();
$product = $stmt->fetch(PDO::FETCH_ASSOC);
if (!$product) {
    http_response_code(404);
    die("Product not found.");
}

?>

<div class="container-fluid">
    <div class="row">
        <div class="col-md-6">
            <img src="<?php se($product, "image_url"); ?>" alt="<?php se($product, "name"); ?>" class="img-fluid">
        </div>
        <div class="col-md-6">
            <h1><?php se($product, "name"); ?></h1>
            <p><?php se($product, "description"); ?></p>
            <p>Price: <?php se($product, "price"); ?></p>
            <p>Stock: <?php se($product, "stock"); ?></p>
            <form method="POST" action="add_to_cart.php">
                <input type="hidden" name="item_id" value="<?php se($product, "id"); ?>">
                <input type="number" name="desired_quantity" value="1" min="1" max="<?php se($product, "stock"); ?>">
                <input type="submit" class="btn btn-primary" value="Add to Cart">
            </form>
            <?php if (has_role("Admin")): ?>
                <a href="/Project/admin/edit_item.php?id=<?php echo $product['id']; ?>">Edit</a>
            <?php endif; ?>
        </div>
    </div>
</div>

<?php
require(__DIR__ . "/../../partials/footer.php");
?>
