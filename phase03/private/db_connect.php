<?php

  if($_SERVER['SERVER_NAME'] == 'localhost')
  {
  // localhost Credentials
  $dbhost = 'localhost';
  $dbuser = 'sally';
  $dbpass = 'P@ssword1234';
  $dbname = 'salamanders';
  }
  // elseif($_SERVER['SERVER_NAME'] == 'nealgraves.site')
  // {
  // // SiteGround Credentials
  // $dbhost = 'localhost';
  // $dbuser = 'uvgyddxrkjbwe';
  // $dbpass = '_drQ$32d;@)2';
  // $dbname = 'dbvyuubzssqcu8';
  // }
  else
    echo "not a valid website!";
?>
