<?php
  session_start();
  if(isset($_SESSION['username']))
{
?>
<!DOCTYPE html>
<html style="font-size: 16px;" lang="en"><head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="Icon name">
    <meta name="description" content="">
    <title>Page 1</title>
    <link rel="stylesheet" href="nicepage.css" media="screen">
<link rel="stylesheet" href="Page-1.css" media="screen">
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
    <meta property="og:title" content="Page 1">
    <meta property="og:type" content="website">
  </head>
  <body class="u-body u-xl-mode" data-lang="en">


<?php
    include("header.php");
    $db = mysqli_connect('localhost','root','','iconstock_db');
    $id=$_GET['id'];
    $query = "select * from item where i_id=$id";
    $result = mysqli_query($db,$query);
    $row=mysqli_fetch_assoc($result);
?>

    <section class="u-clearfix u-gradient u-section-1" id="sec-7589">
      <div class="u-clearfix u-sheet u-sheet-1">
        <div class="u-border-6 u-border-palette-2-base u-container-style u-group u-preserve-proportions u-radius-15 u-shape-round u-white u-group-1">
          <div class="u-container-layout u-valign-middle u-container-layout-1">
            <img class="u-image u-image-contain u-image-default u-preserve-proportions u-image-1" src="images/<?php echo $row['i_img'];?>" title="image" data-image-width="128" data-image-height="128">
          </div>
        </div>
        <h3 class="u-text u-text-default u-text-1"><?php echo $row['i_name'];?>&nbsp;</h3>
        <h5 class="u-text u-text-default u-text-2">Developer</h5>
        <h5 class="u-custom-item u-text u-text-default u-text-3">Created By :&nbsp;</h5>
        <h3 class="u-text u-text-4"><?php echo $row['i_desc'];?>&nbsp;<br>
        </h3>
        <br>
        <a href="images/<?php echo $row['i_img'];?>" download class="u-active-palette-2-base u-border-5 u-border-active-white u-border-hover-grey-10 u-border-palette-2-base u-btn u-btn-round u-button-style u-hover-grey-10 u-radius-13 u-text-active-white u-text-hover-black u-white u-btn-1">Download</a>
        <h5 class="u-text u-text-default u-text-5">Rating..<span style="font-weight: 700;"></span>
        </h5>
        <a href="custom_icon.php?id=<?php echo $row['i_id']; ?>" class="u-active-palette-2-base u-border-5 u-border-active-white u-border-hover-grey-10 u-border-palette-2-base u-btn u-btn-round u-button-style u-hover-grey-10 u-radius-13 u-text-active-white u-text-hover-black u-white u-btn-2">Customize</a>
      </div>
    </section>
    
    
    <?php 
    include("footer.php");
   ?>
  
</body></html>

<?php
}
else
{
    header("location:index.php?set=1");
}
?>