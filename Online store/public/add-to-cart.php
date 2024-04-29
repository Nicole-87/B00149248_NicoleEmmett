<?php
require_once '../templates/header.php';
require "../common.php";
require_once '../src/DBconnect.php';
?>

<style>
    @import "css/mystyle.css";
</style>

<?php
// Initialize $_SESSION['cart'] if it's empty
if (empty($_SESSION['sale'])) {
    $_SESSION['sale'] = array();
}

array_push($_SESSION['sale'], $_GET['productID']);

// Validate and sanitize the product ID
$productID = isset($_GET['productID']) ? filter_var($_GET['productID'], FILTER_SANITIZE_NUMBER_INT) : null;
?>

<p>Product was successfully added to your cart. <a href='shopping-cart.php'>View Shopping Cart</a></p>
