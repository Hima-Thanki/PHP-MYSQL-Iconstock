<?php
session_start();
 if(isset($_SESSION['username']))
{
  $uname = $_SESSION['username'];
  $con = mysqli_connect('localhost','root','','iconstock_db');
  $id=$_POST['i_id'];
  $query = "select * from item where i_id=".$id;  
  $result = mysqli_query($con,$query);
  $row=mysqli_fetch_assoc($result);

?>
<!DOCTYPE html>
<html style="font-size: 16px;" lang="en"><head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <title>developerProfile</title>
    <link rel="stylesheet" href="nicepage.css" media="screen">
    <link rel="stylesheet" href="developerProfile.css" media="screen">
    <script class="u-script" type="text/javascript" src="jquery.js" defer=""></script>
    <script class="u-script" type="text/javascript" src="nicepage.js" defer=""></script>
    <meta name="generator" content="Nicepage 5.3.2, nicepage.com">
    <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i">

    
    
    
    <script type="application/ld+json">{
    "@context": "http://schema.org",
    "@type": "Organization",
    "name": "",
    "logo": "images/default-logo.png"
}</script>
    <meta name="theme-color" content="#478ac9">
    <meta property="og:title" content="developerProfile">
    <meta property="og:type" content="website">
 
  </head>
  <body class="u-body u-xl-mode" data-lang="en">
    <?php 
    include("header.php");
 ?>
<form action="update.php"  style="height: 800px;background-color: white;width: 650px;border: 2px solid black;border-radius: 5px;margin: 0 auto 20px 370px;padding: 20px;" id="form"  method="post">

    <label style="margin: 15px;font-size: 20px;display: inline-block;">Item Name : </label>
    <input style="width: 400px;float: right;font-size: 20px;margin-right: 50px;margin-top: 10px;" type="text" name="i_name" value="<?php echo $row['i_name'];?>">
    <br>
  
    <label style="margin: 15px;font-size: 20px;display: inline-block;">Item Image :</label>
    <input style="width: 400px;float: right;font-size: 20px;margin-right: 50px;margin-top: 10px;" style="margin-right: 60px;" id="img-upload" name="i_img" type="file" value="images/<?php echo $row['i_img'];?>" onchange="loadFile(event)">
    <br><br>
    <img style="border: 2px solid gray;padding: 15px;margin-left: 140px;height: 170px;width: 170px;object-fit: contain;" class="pro-image" id="output" src="images/<?php echo $row['i_img'];?>" alt="Image Preview">
    <br><br>
  
    <label style="margin: 15px;font-size: 20px;display: inline-block;">Item Type : </label>
    <select name="i_type">
      <option>Static</option>
      <option>Animated</option>
    </select>
    <br>

    <label style="margin: 15px;font-size: 20px;display: inline-block;">Item Style : </label>
    <select name="i_style">
      <option>Filled</option>
      <option>Colored</option>
      <option>Lined</option>
    </select>
    <br>

    <label style="margin: 15px;font-size: 20px;display: inline-block;">Item Category : </label>
    <select name="i_cat" >
      <option>Social Media Icons</option>
      <option>Shape Icons</option>
      <option>Arrow Icons</option>
      <option>Ecommerce Icons</option>
      <option>Database Icons</option>
      <option>File Icons</option>
      <option>Accessories Icons</option>
      <option>Food Icons</option>
    </select>
    <br>

    <label style="margin: 15px;font-size: 20px;display: inline-block;">Description</label>
    <textarea name="i_desc"><?php echo $row['i_desc'];?>"</textarea>
    <br>
    <br><br>
    <input type="hidden" name="i_id" value="<?php echo $id; ?>">
    <input style="border: 2px solid black;background-color: lightgray;width: 200px;float: right;font-size: 20px;margin-right: 50px;margin-top: 10px;padding: 5px 10px 5px 10px;" id="add" type="submit" name="add" value="Add">
   
    <a id="cancle" style="color: black;text-align: center;border: 2px solid black;background-color: lightgray;text-decoration: none;width: 200px;float: left;font-size: 20px;margin-right: 50px;margin-top: 10px;padding: 5px 10px 5px 10px;" href="developerPersnalProfile.php">Cancle</a>
</form>
<script>
    var loadFile = function(event)
    {
      var output = document.getElementById('output');
      output.src = URL.createObjectURL(event.target.files[0]);
      output.onload = function()
      {
        URL.revokeObjectURL(output.src)
      }
    };

    function clear()
    {
      document.getElementById("form").reset();
    }
  </script>

  <?php
include("footer.php");
  ?>

</body></html>
<?php 
    }
 ?>