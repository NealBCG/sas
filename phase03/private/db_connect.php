<?php

  if($_SERVER['SERVER_NAME'] == 'localhost')
  {
  // localhost Credentials
  $dbhost = 'localhost';
  $dbuser = 'sally';
  $dbpass = 'P@ssword1234';
  $dbname = 'salamanders';
  }
  elseif($_SERVER['SERVER_NAME'] == 'nealgraves.site')
  {
   // SiteGround Credentials
   $dbhost = '';
   $dbuser = '';
   $dbpass = '';
   $dbname = '';
   }
  else
    echo "not a valid website!";
?>
