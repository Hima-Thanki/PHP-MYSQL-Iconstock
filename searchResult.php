<?php
session_start();
?>
<!DOCTYPE html>
<html style="font-size: 16px;" lang="en"><head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="Static Icons​">
    <meta name="description" content="">
    <title>Search Result</title>
    <link rel="stylesheet" href="nicepage.css" media="screen">
<link rel="stylesheet" href="social-media.css" media="screen">
    <script class="u-script" type="text/javascript" src="jquery.js" defer=""></script>
    <script class="u-script" type="text/javascript" src="nicepage.js" defer=""></script>
    <meta name="generator" content="Nicepage 4.21.5, nicepage.com">
    <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i">
    <link id="u-page-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=PT+Sans:400,400i,700,700i|Montserrat:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i">
    
    
    <script type="application/ld+json">{
		"@context": "http://schema.org",
		"@type": "Organization",
		"name": "",
		"logo": "images/layers-unscreen.gif",
		"sameAs": []
}</script>
    <meta name="theme-color" content="#478ac9">
    <meta property="og:title" content="social media">
    <meta property="og:type" content="website">
  </head>
  <body class="u-body u-xl-mode" data-lang="en">

    <?php
      include("header.php");
      $i = $_POST['search'];
      $db = mysqli_connect('localhost','root','','iconstock_db');
      
      $query = "select * from item where i_name LIKE '%".$i."%'";
      $result = mysqli_query($db,$query);
      ?>

    <section class="u-clearfix u-white u-section-1" id="sec-5cd5">
      <div class="u-custom-color-3 u-expanded-width u-shape u-shape-rectangle u-shape-1" style="height: 150px; background-image: linear-gradient(to bottom right, lightblue,lightpink,lawngreen);"></div>
      <br><br>
      <h2 class="u-text u-text-1" align="center">Search Result</h2>
      <div class="u-clearfix u-gutter-36 u-layout-wrap u-layout-wrap-1">
        <div class="u-gutter-0 u-layout">
          <div class="u-layout-col">
            <div class="u-size-30">
              <div class="u-layout-row">
                <?php
            while($row=mysqli_fetch_assoc($result)){    
            ?>
               
                <div class="u-container-style u-layout-cell u-size-8 u-layout-cell-1">
                  <div class="u-container-layout u-valign-middle u-container-layout-1">
                    <img class="u-image u-image-contain u-image-default u-preserve-proportions u-image-1" src="images/<?php echo $row['i_img'];?>" alt="" data-image-width="128" data-image-height="128" data-href="iconDetail.php?id=<?php echo $row['i_id']; ?>">
                  </div>
                </div>
                <?php
           }
            ?>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    
    
    <?php
      include("footer.php");
      ?>
  
</body></html>