<?php
	session_start();
	$delete_id = $_POST['item_id'];
	$con = mysqli_connect('localhost','root','','iconstock_db');
	$q= "delete from item where i_id = $delete_id";
	$result = mysqli_query($con,$q);
	mysqli_close($con);
	header("location:developerPersnalProfile.php");
?>