<?php

session_start();

$delete_id = $_POST['id'];

$con = mysqli_connect('localhost','root','','iconstock_db');

$q= "delete from user where reg_id = $delete_id";

$result = mysqli_query($con,$q);

mysqli_close($con);

header("location:user.php");
 
?>