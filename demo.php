<?php
	session_start();
if(isset($_SESSION['username']))
{
	echo "string";
}
else
{
	header("location:index.php");
}
?>