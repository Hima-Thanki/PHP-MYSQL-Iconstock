<!DOCTYPE html>
<html style="font-size: 16px;" lang="en"><head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="Send us a message, Contact Info">
    <meta name="description" content="">
    <title>iconDetail</title>
    <link rel="stylesheet" href="nicepage.css" media="screen">
<link rel="stylesheet" href="iconDetail.css" media="screen">
    <script class="u-script" type="text/javascript" src="jquery.js" defer=""></script>
    <script class="u-script" type="text/javascript" src="nicepage.js" defer=""></script>
    <meta name="generator" content="Nicepage 4.21.5, nicepage.com">
    <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i">
    <link id="u-page-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i|PT+Sans:400,400i,700,700i|Montserrat:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i">
    
    
    <script type="application/ld+json">{
		"@context": "http://schema.org",
		"@type": "Organization",
		"name": "",
		"logo": "images/layers-unscreen.gif",
		"sameAs": []
}</script>
    <meta name="theme-color" content="#478ac9">
    <meta property="og:title" content="iconDetail">
    <meta property="og:type" content="website">
  </head>
  <body class="u-body u-xl-mode" data-lang="en">
      <?php
include("header.php");
$db = mysqli_connect('localhost','root','','iconstock_db');
$id=$_GET['id'];
$query = "select * from item where i_id=$id";
$result = mysqli_query($db,$query);
$row=mysqli_fetch_assoc($result)
?>

    <section class="u-clearfix u-white u-section-1" id="sec-9c62">
      <div class="u-clearfix u-sheet u-sheet-1">
        <h2 class="u-custom-font u-font-open-sans u-text u-text-default u-text-1"><?php echo $row['i_name'];?>&nbsp;</h2>
        <img style="padding: 20px" class="u-border-2 u-border-grey-75 u-image u-image-contain u-image-default u-preserve-proportions u-image-1" src="images/<?php echo $row['i_img'];?>" alt="" data-image-width="128" data-image-height="128">
        <a style="margin-left:450px;" href="https://nicepage.com/wordpress-themes" class="u-border-2 u-border-black u-btn u-button-style u-hover-black u-text-hover-white u-white u-btn-1">Download</a>
        <a style="margin-left:700px;" href="https://nicepage.com/wordpress-themes" class="u-border-2 u-border-black u-btn u-button-style u-text-hover-white u-white u-btn-2">customize</a>
      </div>
    </section>
    
    
   <?php 
    include("footer.php");
   ?>
  
</body></html>