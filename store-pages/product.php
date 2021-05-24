<?php
session_start();
require 'product_functions.php';

$id = $_GET['id'];

$_SESSION['visited_products'][] = $id;

$product = get_product($id);

echo '<pre>';
print_r($product);
echo '</pre>';