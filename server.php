<?php
	session_start();

	// connect to database

	$db = mysqli_connect('localhost','root','','iconstock_db');

	if(!$db)
	{
		echo "not Connect";
	} 

	// Registrasion for developers 

	if (isset($_POST['regdev'])) 
	{
		$name = $_POST['name'];
		$uname = $_POST['uname'];
		$no = $_POST['no'];
		$email = $_POST['email'];
		$password_1 = $_POST['password_1'];
		$password_2 = $_POST['password_2'];
		$bio = $_POST['bio'];

		$q="select * from user where username='$uname'";
		$re=mysqli_query($db,$q); 
		//$count=0;
		//$count=mysqli_num_rows($re);
		if((mysqli_num_rows($re))>0)
		{
			header('location:index.php?er=1');
		}

		if ($password_1 != $password_2) 
		{
			header('location:index.php?err2=1');			
		}
		else
		{
			$sql = "INSERT INTO user(name,username,password,email,mobile_no,bio,u_type) VALUES ('$name','$uname','$password_1','$email',$no,'$bio','d')";
			mysqli_query($db,$sql);
			header('location:index.php?suc=1');
		}
	}

	// Registrasion for guest user

	if (isset($_POST['reguser'])) 
	{
		$name = $_POST['name'];
		$uname = $_POST['uname'];
		$no = $_POST['no'];
		$email = $_POST['email'];
		$password_1 = $_POST['password_1'];
		$password_2 = $_POST['password_2'];

		$q="select * from user where username='$uname'";
		$re=mysqli_query($db,$q); 
		//$count=0;
		//$count=mysqli_num_rows($re);
		if((mysqli_num_rows($re))>0)
		{
			header('location:index.php?er=1');
		}


		if ($password_1 != $password_2) 
		{
		
			header('location:index.php?err2=1');
		}
		else
		{
		$sql = "INSERT INTO user(name,username,password,email,mobile_no,u_type) VALUES ('$name','$uname','$password_1','$email',$no,'r')";
			mysqli_query($db,$sql);
			header('location:index.php?suc=1');
		}
	}

	// login user

	if (isset($_POST['login'])) 
	{
		$username = $_POST['unm'];
		$password = $_POST['pwd'];

			$query = "select * from user where username='$username' AND password='$password'";
			$result = mysqli_query($db,$query);

			if (mysqli_num_rows($result) == 1) 
			{
				$_SESSION['username'] = $username;
				$_SESSION['success'] = "you are now logged in";
				header('location: index.php?id1=');
			}
			else
			{
				header('location:index.php?err=1');
			}
	}

//Contact us

	if (isset($_POST['contact'])) 
	{
         if(isset($_SESSION['username']))
         {
         	$uname = $_SESSION['username'];
         	$query = "select reg_id from user where username='$uname'";
			$result = mysqli_query($db,$query);

			if ($row = mysqli_fetch_row($result))
			{
				$uid = $row[0];
				$name = $_POST['name'];
				$email = $_POST['email'];
				$mess = $_POST['message'];

				$sql = "INSERT INTO contact_us(uid,name,email,message) VALUES ($uid,'$name','$email','$mess')";
				mysqli_query($db,$sql);
				header('location:index.php?Succ_contact=1');	
			}
		}
		else
		{
			header("location:index.php?set=1");
		}
	}

?>
