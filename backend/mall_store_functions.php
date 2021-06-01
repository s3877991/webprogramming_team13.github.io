<?php
// If file 'install.php' still exists, the current PHP script in this file will be terminated
if (file_exists('install.php')) {
  die("You have to delete <code>'install.php'</code> file manually to activate the System");
} 

function read_all_stores() {
  $file_name = 'csv_files/stores.csv';
  $fp = fopen($file_name, 'r');
  $first = fgetcsv($fp);
  $stores = [];
  while ($row = fgetcsv($fp)) {
    $i = 0;
    $store = [];
    foreach ($first as $col_name) {
      $store[$col_name] =  $row[$i];
      $i++;
    }
    $stores[] = $store;
  }
  return $stores;
}

function get_store($store_id) {
  $stores = read_all_stores();
  foreach ($stores as $s) {
    if ($s['id'] == $store_id) {
      return $s;
    }
  }
  return false;
}
