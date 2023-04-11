<?php require_once('../../private/initialize.php'); 

include(SHARED_PATH . '/salamander-header.php'); ?>

<h1>Create Salamander</h1>
<form method="post" action="create.php">
  <label for="name">Name:</label><br>
  <input type="text" id="newSal" name="newSal"><br>
  <Input type="submit" value="create salamander">
</form>

<p><a href="<?= url_for('/salamanders/index.php'); ?>">&laquo; Back to Salamander List</a></p>
<?php include(SHARED_PATH . '/salamander-footer.php'); ?>
