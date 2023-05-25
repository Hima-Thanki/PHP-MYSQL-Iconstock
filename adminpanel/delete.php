<?php

session_start();

if(isset($_POST['product_id']))
{
	$delete_id = $_POST['product_id'];
	$con = mysqli_connect('localhost','root','','iconstock_db');
	$q= "delete from item where i_id = $delete_id";
	$result = mysqli_query($con,$q);
	mysqli_close($con);
	header("location:product.php");	
}

if(isset($_POST['developer_id']))
{
	$delete_id = $_POST['developer_id'];
	$con = mysqli_connect('localhost','root','','iconstock_db');
	$q= "delete from user where reg_id = $delete_id";
	$result = mysqli_query($con,$q);
	mysqli_close($con);
	header("location:order.php");	
}


 
?>