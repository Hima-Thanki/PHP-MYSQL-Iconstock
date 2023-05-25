<?php 
  $con = mysqli_connect('localhost','root','','iconstock_db');

  if (!$con) 
  {
    die("connection failed..");
  }

if (isset($_POST['add']))
{
  $i_id=$_POST['i_id'];
  $i_name = $_POST['i_name'];
  $i_desc = $_POST['i_desc'];
  $i_img = $_POST['i_img'];
  $i_cat = $_POST['i_cat'];
  $i_type = $_POST['i_type'];
  $i_style = $_POST['i_style'];

  if($i_style == 'Filled')
    $i_style = 'f';
  if($i_style == 'Colored')
    $i_style = 'c';
  if($i_style == 'Lined')
    $i_style = 'l';


  if($i_type == 'Static')
    $i_type = 's';
  if($i_type == 'Animated')
    $i_type = 'a';


  if($i_cat == 'Social Media Icons')
    $i_cat = 'sm';
  if($i_cat == 'Shape Icons')
    $i_cat = 'shape';
  if($i_cat == 'Arrow Icons')
    $i_cat = 'arrow';
  if($i_cat == 'Ecommerce Icons')
    $i_cat = 'eco';
  if($i_cat == 'Database Icons')
    $i_cat = 'db';
  if($i_cat == 'File Icons')
    $i_cat = 'file';
  if($i_cat == 'Accessories Icons')
    $i_cat = 'acc';
  if($i_cat == 'Food Icons')
    $i_cat = 'food';


  $query = "update item set i_name='$i_name',i_desc='$i_desc',i_img='$i_img',i_cat='$i_cat',i_type='$i_type',i_style='$i_style' where i_id ='$i_id'";

  $result = mysqli_query($con,$query);
}
else
{
  echo "hello...........";
}

  if(!$result) 
  {
    header('location:developerPersnalProfile.php');
  }
  
  if($result) 
  {
    header('location:developerPersnalProfile.php');
  }
?>