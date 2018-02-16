<?php
  $data = [];

  header("Content-Type: application/json");
  if(file_get_contents("cache.txt") == "") {
    $file = fopen("cache.txt", "w");
    $time = time();
    fwrite($file, $time);
    $data["time"] = $time;
  } else {
    $time = file_get_contents("cache.txt");
    $data["time"] = (int)($time);
  }

  echo json_encode($data);
?>
