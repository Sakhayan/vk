<?php 
	$con = mysqli_connect('127.0.0.1', 'root','','vk');
	mysqli_query($con, "DELETE FROM friends WHERE id = '{$_GET['id']}' ");
	header('Location: index.php');
 ?>
