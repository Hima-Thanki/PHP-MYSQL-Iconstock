<?php
session_start();
 if(isset($_SESSION['username']))
{
  $uname = $_SESSION['username'];
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
    <style type="text/css">
      body
{
  font-family: fantasy;
  margin: 0px;
  padding: 0px;
}
.btn
{
  padding: 10px 15px 10px 15px;
  border: none;
  border-radius: 5px;
  color: white;
  font-weight: bold;
}
table 
{
  border-collapse: collapse;
  width: 100%;
  background-color: white;
}

th
{
  padding: 15px;
  text-align: left;
  border-bottom: 1px solid #DDD;
  background-color: black;
  color: white;
}
td
{
  padding: 10px;
  text-align: left;
  border-bottom: 1px solid #DDD;
}

img
{
  width: 100px;
  height: 100px;
}
.scroll
{
  width: 300px;
  height: 100px;
  text-align: justify;
  margin: 0;
  padding: 0;
  overflow-y: scroll;
}
.del-edit
{
  border: none;
  background-color: powderblue;
  padding: 3px;
  cursor: pointer;
}
textarea 
{
  vertical-align: top;
}

    </style>
  </head>
  <body class="u-body u-xl-mode" data-lang="en">

<?php
    include("header.php");
    $db = mysqli_connect('localhost','root','','iconstock_db');

    $query = "select * from user where username ='".$uname."'";
    $result = mysqli_query($db,$query);
    $row=mysqli_fetch_assoc($result);

    $name=$_SESSION['username'];
    $query2 = "select u_type from user where username='".$name."'";
    $result2 = mysqli_query($db,$query2);
    $row2=mysqli_fetch_row($result2);

    $dname = $row['name'];
    $query1 = "select * from item where dev_name='".$dname."' ORDER BY i_id DESC";
    $result1 = mysqli_query($db,$query1);

    if($row2[0] == 'd')
    {
?>

    <section class="u-clearfix u-white u-section-1" id="sec-575a">
      <div class="u-clearfix u-sheet u-sheet-1"><span class="u-file-icon u-icon u-icon-1"><img src="images/1144760.png" alt=""></span>
        <h3 class="u-text u-text-1"><?php echo $row['name'];?></h3>
        <p class="u-align-justify u-text u-text-2"> <?php echo $row['bio'];?>&nbsp;</p>
      </div>
    </section>
  
    <?php

  if (mysqli_num_rows($result1)>0) 
  {
    echo "<table>";
    echo "<tr>";
    echo "<th></th>";
    echo "<th></th>";
    echo "<th>ID</th>";
    echo "<th>Name</th>";
    echo "<th>Image</th>";
    echo "<th>Description</th>";
    echo "<th>Category</th>";
    echo "<th>Icon style</th>";
    echo "<th>Icon type</th></tr>";
    $i = 0;
    while ($row1=mysqli_fetch_assoc($result1)) 
    {
      echo "<tr>";
    ?>
    
      <form action="delete.php" method="post">
        <input type="hidden" name="item_id" value="<?php echo $row1['i_id']; ?>">
        <td>
          <input type="submit" name="btn_delete" class="btn" value="DELETE" style="background-color: #000080;" />
        </td>
      </form>
      <form action="edit.php" method="post">
        <input type="hidden" name="i_id" value="<?php echo $row1['i_id']; ?>">
        <td>
          <input type="submit" name="btn_UPDATE" class="btn" value="EDIT" style="background-color: #000080;" />
        </td>
      </form>
    <?php
    $i = $i + 1;
      echo "<td>".$i."</td>";
      echo "<td>".$row1["i_name"]."</td>";
      echo "<td><img name='img-nm' style='object-fit: contain;' src='./images/".$row1["i_img"]."'></td>";
      echo "<td>".$row1["i_desc"]."</td>";
      echo "<td>".$row1["i_cat"]."</td>";
      echo "<td>".$row1["i_style"]."</td>";
      echo "<td>".$row1["i_type"]."</td>";
      echo "<tr>";
    }
    echo "</table>";
  }
include("footer.php");
?>  
</body></html>

<?php
  }
  else
  {
    header("location:index.php?proEr=1");
  }
}
else
    header("location:index.php?set=1");
?>