<?php

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

function get_featured_store() {
    $stores = read_all_stores();
    $feature = [];
    foreach ($stores as $s) {
      if ($s['featured'] == 'TRUE') {
        $feature[] = $s;
      }
    }
    return $feature ? $feature : false;
  }
?>