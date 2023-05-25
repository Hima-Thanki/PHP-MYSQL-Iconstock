<?php
	session_start();

	$con = mysqli_connect('localhost','root','','iconstock_db');

	if (!$con) 
	{
		die("connection failed..");
	}

	$i_id = $_POST['i_id'];
	$i_name = $_POST['i_name'];
	$i_img = $_POST['i_img'];
	$i_desc = $_POST['i_desc'];
	$i_type = $_POST['i_type'];
	$i_cat = $_POST['i_cat'];
	$i_style = $_POST['i_style'];

	if ($i_type == "Static") 
	{
		$type="s";
	}
	if ($i_type == "Animated") 
	{
		$type="a";
	}

 if($i_style == 'Filled')
    $i_style = 'f';
  if($i_style == 'Colored')
    $i_style = 'c';
  if($i_style == 'Lined')
    $i_style = 'l';


	if ($i_cat == "Social Media Icons") 
	{
		$cat="sm";
	}
	if ($i_cat == "Shape Icons") 
	{
		$cat="shape";
	}
	if ($i_cat == "Arrow Icons") 
	{
		$cat="arrow";
	}
	if ($i_cat == "Ecommerce Icons") 
	{
		$cat="eco";
	}
	if ($i_cat == "Database Icons") 
	{
		$cat="db";
	}
	if ($i_cat == "File Icons") 
	{
		$cat="file";
	}
	if ($i_cat == "Accessories Icons") 
	{
		$cat="acc";
	}
	if ($i_cat == "Food Icons") 
	{
		$cat="food";
	}

	$dev=$_SESSION['usename'];

	

	$q="insert into item(i_name,i_desc,i_img,i_cat,i_type,i_style,dev_name) values('$i_name','$i_desc','$i_img','$cat','$type','$i_style','Admin')";

	$result = mysqli_query($con,$q);

	if($result)
	{
		header("location:Product.php");
	}
	else
	{
		echo "not inserted successfully";
	}
?>