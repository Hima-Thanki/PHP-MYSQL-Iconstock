<?php
session_start();

//connect to database

$db = mysqli_connect('localhost','root','','iconstock_db');


//admin registration
if (isset($_POST['register-admin'])) 
{
	$fname = $_POST['fname'];
	$lname = $_POST['lname'];
	$email = $_POST['email'];
	$password_1 = $_POST['password_1'];
	$password_2 = $_POST['password_2'];

	
	$q="select * from admin where fname='$fname'";
	$re=mysqli_query($db,$q); 

	if((mysqli_num_rows($re))>0)
	{
			header('location:adminsign-up.php?er=1');
	}
	
	if ($password_1 != $password_2) 
	{
	
			header("location:adminsign-up.php?err2=1");
	}
else
	{
		$password = md5($password_1);
		$sql = "INSERT INTO admin(fname,lname,email,password) VALUES ('$fname','$lname','$email','$password')";
		mysqli_query($db,$sql);
		header('location:adminlogin.php?suc=1');
	}
}
//log admin in from login page
	if (isset($_POST['login-admin'])) 
	{
		$username = $_POST['unm'];
		$password = $_POST['pwd'];

			$password = md5($password); //encrypt the password
			$query = "select * from admin where fname='$username' AND password='$password'";
			$result = mysqli_query($db,$query);
			
			if (mysqli_num_rows($result) == 1) 
			{
				$_SESSION['adminuser'] = $username;
				
				$_SESSION['success'] = "you are now logged in";

				header('location: index.php');
			}
			else
			{
				header("location:adminlogin.php?err=1");
			}
	}
?>