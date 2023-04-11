<?php require_once('../../private/initialize.php');

  if(is_post_request()) {
    $newSal = $_POST['newSal'] ?? '';

    echo "New Salamander: " . $newSal; } 
  else
    redirect_to(url_for('/salamanders/new.php'));

  echo "<p><a href=" . url_for('/salamanders/index.php') . ">Back to Salamander List</a></p>";
?>
