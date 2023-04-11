<?php
require_once('db_connect.php');

function dbConnect() {
  global $dbhost, $dbuser, $dbpass, $dbname;
  $connection = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
  return $connection;
}

function dbDisconnect() {
  if(isset($connection))
    mysqli_close($connection);
}
?>