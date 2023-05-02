<?php



require_once(__DIR__."/../../partials/nav.php");
require_once(__DIR__ . "/../../lib/db.php");

if (!is_logged_in()) {
    flash("You must be logged in to checkout", "danger");
    header("Location: /Project/login.php");
    exit;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['payment_method'], $_POST['paid_amount'], $_POST['address'], $_POST['first_name'], $_POST['last_name'])) {
        $payment_method = $_POST['payment_method'];
        $paid_amount = $_POST['paid_amount'];
        $address = $_POST['address'];
        $first_name = $_POST['first_name'];
        $last_name = $_POST['last_name'];

        // Call the checkout function with the provided parameters
        checkout($payment_method, $paid_amount, $address, $first_name, $last_name);
    } else {
        flash("Payment method, paid amount, address, first name, or last name not provided", "danger");
        header("Location: /Project/checkout_form.html");
        exit;
    }
}
?>
