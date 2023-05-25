<?php
include('conn.php');

	session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<style type="text/css">
		body
		{


			background-image: url(images/bg_bggenerator_com.png);
			background-size: cover;
			background-repeat: no-repeat;
			font-family: sans-serif;
		}
		.user
		{
			height: 200px;
			width: 300px;
			background-color: white;
			border-radius: 100%;
			float: left;
			margin: 40px 50px auto 160px;
			text-align: center;
			padding-top: 50px;
		}
		.products
		{
			height: 200px;
			width: 300px;
			background-color: white;
			border-radius: 100%;
			float: left;
			margin: 40px 50px auto 100px;
			text-align: center;
			padding-top: 50px;
		}
		.order
		{
			height: 200px;
			width: 300px;
			background-color: white;
			border-radius:100%;
			float: right;
			margin: 70px 200px auto 50px;
			text-align: center;
			padding-top: 50px;
		}
		.contact
		{
			height: 200px;
			width: 300px;
			background-color: white;
			border-radius:100%;
			float: right;
			margin: 70px 100px auto 50px;
			text-align: center;
			padding-top: 50px;
		}
		h3
		{
			color: darkgray;
		}
	</style>
</head>
<body>
	<div class="user">
		<h1>
			<strong>
			  <!-- add total product -->
			  <?php
			  $query = "select * from user";
			  $result=mysqli_query($con,$query);
			   $count=mysqli_num_rows($result);
			   echo $count;
			  ?>  
			</strong>
		</h1>
		<h3>Total Users</h3>
	</div>
	<div class="products">
		<h1>
			<strong>
			  <!-- add total product -->
			  <?php
			  $query = "select * from item";
			  $result=mysqli_query($con,$query);
			   $count=mysqli_num_rows($result);
			   echo $count;
			  ?>  
			</strong>
		</h1>
		<h3>Total Items</h3>
	</div>
	<div class="order">
		<h1>
			<strong>
			  <!-- add total product -->
			  <?php
			  $query = "select * from user where u_type='d'";
			  $result=mysqli_query($con,$query);
			   $count=mysqli_num_rows($result);
			   echo $count;
			  ?>  
			</strong>
		</h1>
		<h3>Total Developers</h3>
	</div>
	<div class="contact">
		<h1>
			<strong>
			  <!-- add total product -->
			  <?php
			  $query = "select * from contact_us";
			  $result=mysqli_query($con,$query);
			   $count=mysqli_num_rows($result);
			   echo $count;
			  ?>  
			</strong>
		</h1>
		<h3>Total Conact</h3>
	</div>
</body>
</html>