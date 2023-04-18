<?php require_once('../../private/initialize.php');

$id = $_GET['id'] ?? '1'; // PHP > 7.0

$salamander = find_salamander_by_id($id);

$page_title = 'View Salamander';
include(SHARED_PATH . '/salamander-header.php'); 
?>

<a href="<?= url_for('/salamanders/index.php'); ?>">&laquo; Back to List</a>
<p> Page ID: <?= h($id); ?> </p>

<div class="salamander show">
  <h2>Salamander Details</h2>
  <div class="attributes">
    <dl>
      <dt><strong>Name:</strong></dt>
      <dd><?php echo h($salamander['name']) ?></dd>
    </dl>
    <dl>
      <dt><strong>Habitat:</strong></dt>
      <dd><?php echo h($salamander['habitat']) ?></dd>
    </dl>
    <dl>
      <dt><strong>Description:</strong></dt>
      <dd><?php echo $salamander['description'] ?></dd>
    </dl>
  </div>
</div>

<?php include(SHARED_PATH . '/salamander-footer.php'); ?>
