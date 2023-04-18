<?php
  require_once('../../private/initialize.php');

  $id = $_GET['id'] ?? '1'; 

  if(is_post_request()){
    $salamander = [];
    $salamander['id'] = $id;
    $salamander['name'] = $_POST['name'] ?? '';
    $salamander['habitat'] = $_POST['habitat'] ?? '';
    $salamander['description'] = $_POST['description'] ?? '';

    $result = update_salamander($salamander);
    redirect_to(url_for('salamanders/show.php?id=' . $id));
  }
  else {
    $salamander = find_salamander_by_id($id);
    $salamander_set = find_all_salamanders();
    $salamander_count = mysqli_num_rows($salamander_set);
    mysqli_free_result($salamander_set);
  }
  include(SHARED_PATH . '/salamander-header.php'); ?>

<div id="content">
  <div class="salamander edit">
    <h1>Create Salamander</h1>
    <form action="edit.php?id=<?= $id ?>" method="post">
      <label for="name"><strong>Salamander Name:</strong></label><br>
      <input type="text" id="name" name="name" value="<?= $salamander['name'] ?>"><br><br>

      <label for="habitat"><strong>Habitat:</strong></label><br>
      <textarea rows="4" cols="50" id="habitat" name="habitat"><?= $salamander['habitat'] ?></textarea><br><br>

      <label for="description"><strong>Description:</strong></label><br>
      <textarea rows="4" cols="50" id="description" name="description"><?= $salamander['description'] ?></textarea><br><br>

      <input type="submit" value="Edit Salamander"><br><br>
    </form>
  </div>
</div>
  <?php include(SHARED_PATH . '/salamander-footer.php'); ?>
