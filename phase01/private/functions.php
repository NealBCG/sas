<?php

function urlFor($scriptPath) {
  // add the leading '/' if not present
  if($scriptPath[0] != '/') {
    $scriptPath = "/" . $scriptPath;
  }
  return WWW_ROOT . $scriptPath;
}

function u($string="") {
  return urlencode($string);
}

function rawU($string="") {
  return rawurlencode($string);
}

function h($string="") {
  return htmlspecialchars($string);
}

?>
