<?php
// If file 'install.php' still exists, the current PHP script in this file will be terminated
if (file_exists('../admin/install.php')) {
  die("You have to delete <code>'install.php'</code> file manually to activate the System");
} 

function read_all_products() {
  $file_name = 'csv_files/products.csv';
  $fp = fopen($file_name, 'r');
  $first = fgetcsv($fp);
  $products = [];
  while ($row = fgetcsv($fp)) {
    $i = 0;
    $product = [];
    foreach ($first as $col_name) {
      $product[$col_name] =  $row[$i];
      $i++;
    }
    $products[] = $product;
  }
  return $products;
}

function get_product($product_id) {
  $products = read_all_products();
  foreach ($products as $p) {
    if ($p['id'] == $product_id) {
      return $p;
    }
  }
  return false;
}

function read_store_products($storeid) {
  $file_name = 'csv_files/products.csv';
  $fp = fopen($file_name, 'r');
  $first = fgetcsv($fp);
  $products = [];
  while ($row = fgetcsv($fp)) {
    $i = 0;
    $product = [];
    foreach ($first as $col_name) {
      $product[$col_name] =  $row[$i];
      $i++;
    }
    if ($product['store_id'] == $storeid) {
      $products[] = $product;
    }
  }
  return $products;
}