<?php
require(__DIR__ . "/../../partials/nav.php");

// Set default filter values
$filter_by = "cost";
$sort_order = "ASC";

// Check if form was submitted
if (isset($_POST['filter'])) {
    // Get filter values from form submission
    $filter_by = $_POST['filter_by'];
    $sort_order = $_POST['sort_order'];
}

$results = [];
$db = getDB();

// Add filter to SQL query
$stmt = $db->prepare("SELECT id, name, description, cost, stock, image FROM Products WHERE stock > 0 ORDER BY $filter_by $sort_order LIMIT 50");

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
    <h1>Shop</h1>
    <form method="POST">
        <div class="form-group">
            <label for="filter_by">Filter By:</label>
            <select class="form-control" name="filter_by" id="filter_by">
                <option value="cost"<?php echo $filter_by === 'cost' ? ' selected' : ''; ?>>Cost</option>
                <option value="name"<?php echo $filter_by === 'name' ? ' selected' : ''; ?>>Name</option>
            </select>
        </div>
        <div class="form-group">
            <label for="sort_order">Sort Order:</label>
            <select class="form-control" name="sort_order" id="sort_order">
                <option value="ASC"<?php echo $sort_order === 'ASC' ? ' selected' : ''; ?>>Ascending</option>
                <option value="DESC"<?php echo $sort_order === 'DESC' ? ' selected' : ''; ?>>Descending</option>
            </select>
        </div>
        <div class="form-group">
            <input type="submit" name="filter" class="btn btn-primary" value="Filter">
        </div>
    </form>
    <div class="row row-cols-sm-2 row-cols-xs-1 row-cols-md-3 row-cols-lg-6 g-4">
        <?php foreach ($results as $item) : ?>
            <div class="col">
                <div class="card bg-light">
                    <div class="card-header">
                        RM Placeholder
                    </div>
                    <?php if (se($item, "image", "", false)) : ?>
                        <img src="<?php se($item, "image"); ?>" class="card-img-top" alt="...">
                    <?php endif; ?>
                    <div class="card-body">
                        <h5 class="card-title">Name: <?php se($item, "name"); ?></h5>
                        <p class="card-text">Description: <?php se($item, "description"); ?></p>
                    </div>
                    <div class="card-footer">
                        Cost: <?php se($item, "cost"); ?>
                        <form method="POST" action="cart.php">
                            <input type="hidden" name="item_id" value="<?php se($item, "id");?>"/>
                            <input type="hidden" name="action" value="add"/>
                            <input type="number" name="desired_quantity" value="1" min="1" max="<?php se($item, "stock");?>"/>
                            <input type="submit" class="btn btn-primary" value="Add to Cart"/>
                        </form>
                        <a href="product.php?id=<?php se($item, "id"); ?>" class="btn btn-secondary">View Details</a>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>
<?php
require(__DIR__ . "/../../partials/footer.php");
?>