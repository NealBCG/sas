<?php require_once('../../private/initialize.php');

$id = $_GET['id'] ?? '1'; 
$page_title = 'Edit Salamander';

if(is_post_request())
  echo "Salamander Name: " . $_POST['editedSal'];

include(SHARED_PATH . '/salamander-header.php'); ?>

<h1>Edit Salamander <?= h($id); ?></h1>
<form method="post" action="edit.php">
  <label for="name">Name:</label><br>
  <input type="text" id="editedSal" name="editedSal"><br>
  <Input type="submit" value="edit salamander">
</form>

<p><a href="<?= url_for('/salamanders/index.php'); ?>">&laquo; Back to Salamander List</a></p>
<?php include(SHARED_PATH . '/salamander-footer.php'); ?>
