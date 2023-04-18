<?php require_once('../../private/initialize.php'); 

$salamander_set = find_all_salamanders();
$salamander_count = mysqli_num_rows($salamander_set) +1;
mysqli_free_result($salamander_set);

$salamander = [];
$salamander["position"] = $salamander_count;

include(SHARED_PATH . '/salamander-header.php'); ?>

<div id="content">
  <div class="salamander new">
    <h1>Create Salamander</h1>
    <form action="create.php" method="post">
      <label for="name"><strong>Salamander Name:</strong></label><br>
      <input type="text" id="name" name="name"><br><br>

      <label for="habitat"><strong>Habitat:</strong></label><br>
      <textarea rows="4" cols="50" id="habitat" name="habitat"></textarea><br><br>

      <label for="description"><strong>Description:</strong></label><br>
      <textarea rows="4" cols="50" id="description" name="description"></textarea><br><br>

      <input type="submit" value="Create Salamander"><br><br>
    </form>
  </div>
</div>

<?php include(SHARED_PATH . '/salamander-footer.php'); ?>
