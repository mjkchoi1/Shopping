<?php
require(__DIR__ . "/../../partials/nav.php");
require_once(__DIR__ . "/../../lib/checkout.php");
require_once(__DIR__ . "/../../lib/db.php");

$first_name = $_POST['first_name'] ?? '';
$shipping_name = $_POST['shipping_name'] ?? '';
$shipping_address = $_POST['shipping_address'] ?? '';
$shipping_city = $_POST['shipping_city'] ?? '';
$shipping_state = $_POST['shipping_state'] ?? '';
$shipping_zip = $_POST['shipping_zip'] ?? '';
checkout($payment_method, $first_name, $shipping_name, $shipping_address, $shipping_city, $shipping_state, $shipping_zip);

header("Location: confirmation.php");
exit();
?>
