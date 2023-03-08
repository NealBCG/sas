<?php

  require('../../private/initialize.php');

  $salamanders = [
    ['id' => '1', 'salamanderName' => "Red-Legged Salamander"],
    ['id' => '2', 'salamanderName' => "Pigeon Mountain Salamander"],
    ['id' => '3', 'salamanderName' => "ZigZag Salamander"],
    ['id' => '4', 'salamanderName' => "Slimy Salamander"],
  ];

include('../../private/shared/salamander-header.php');

?>

<h1>Salamanders</h1>

  <a href="#">Create Salamander</a>

<table>
  <tr>
    <th>ID</th>
    <th>Name</th>
    <th>&nbsp;</th>
    <th>&nbsp;</th>
    <th>&nbsp;</th>
  </tr>

      <?php foreach($salamanders as $salamander) { ?>
        <tr>
          <td><?php echo $salamander['id']; ?></td>
    	    <td><?php echo $salamander['salamanderName']; ?></td>
          <td><a href=<?php echo urlFor('salamanders/show.php?id=' . h($salamander['id'])); ?>>Show</td>
          <td><a href="#">Edit</a></td>
          <td><a href="#">Delete</a></td>
    	  </tr>
      <?php } ?>
  	</table>

<?php include('../../private/shared/salamander-footer.php')?>
