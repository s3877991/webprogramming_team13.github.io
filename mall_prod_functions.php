<?php
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

function get_featured_product() {
  $products = read_all_products();
  $feature_prod = [];
  foreach ($products as $p) {
    if ($p['featured_in_mall'] == 'TRUE') {
      $feature_prod[] = $p;
    }
  }
  return $feature_prod ? $feature_prod : false;
}
/*
$products = read_all_products();
$feature_prod = get_featured_product();

echo '<pre>';
print_r($feature_prod);
echo '</pre>'*/
?>