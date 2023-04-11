<?php

function find_all_salamanders() {
  global $db;
  $query = "SELECT * FROM salamander ";
  $query .= "ORDER BY id ASC";
  $result = mysqli_query($db, $query);
  return $result;
}