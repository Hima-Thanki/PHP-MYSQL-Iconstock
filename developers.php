<?php
session_start();
?>

<!DOCTYPE html>
<html style="font-size: 16px;" lang="en"><head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="See All Design, ​See All Design, ​See All Design">
    <meta name="description" content="">
    <title>developers</title>
    <link rel="stylesheet" href="nicepage.css" media="screen">
<link rel="stylesheet" href="developers.css" media="screen">
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
    <meta property="og:title" content="developers">
    <meta property="og:type" content="website">
  </head>
  <body class="u-body u-xl-mode" data-lang="en">


<?php
    include("header.php");
    $db = mysqli_connect('localhost','root','','iconstock_db');
    $query = "select * from user where u_type = 'd'";
    $result = mysqli_query($db,$query);
?>

    <section class="u-clearfix u-image u-section-1" id="sec-b272" data-image-width="800" data-image-height="600">
      <div class="u-clearfix u-sheet u-valign-middle-xs u-sheet-1">
        <div class="u-expanded-width u-list u-list-1">
          <div class="u-repeater u-repeater-1">
              <?php
            while($row=mysqli_fetch_assoc($result))
            {    
            ?>
            
            <div class="u-container-style u-hover-feature u-list-item u-repeater-item u-shape-rectangle u-list-item-1" title="developerProfile">
              <div class="u-container-layout u-similar-container u-valign-top-xs u-container-layout-1">
                <div class="u-border-2 u-border-grey-75 u-container-style u-group u-white u-group-1">
                  <div class="u-container-layout u-container-layout-2">
                    <a href="developerProfile.php?id1=<?php echo $row['reg_id']; ?>">
                    <span class="u-file-icon u-icon u-icon-1"><img src="images/1144760.png" alt=""></span>
                  </a>
                    <h5 class="u-text u-text-default u-text-1"><?php echo $row['name'];?></h5>
                  </div>
                </div>
                <div class="u-black u-container-style u-expanded-width-sm u-group u-hidden-xs u-opacity u-opacity-25 u-shape-rectangle u-group-2" title="developerProfile">
                  <div class="u-container-layout u-container-layout-3">
                    <?php
                       $imgquery = "select i_img from item where dev_name = '".$row['name']."'";
                       $imgresult = mysqli_query($db,$imgquery);

                       $row1=mysqli_fetch_row($imgresult);
                    
                        if($row1) 
                        {
                          $img = $row1[0];
                    ?>
                          <span class="u-file-icon u-icon u-icon-rectangle u-opacity u-opacity-90 u-white u-icon-2">
                      <img src="images/<?php echo $img;?>" alt=""></span>
                    <?php
                        }
                        else
                        {
                          ?>
                         <span class="u-file-icon u-icon u-icon-rectangle u-opacity u-opacity-90 u-white u-icon-2">
                      <img style="align-items: center;justify-content: space-evenly;display: flex;" src="" alt="Image"></span> 
                     
                    <?php
                        }
                    ?>
                  <a href="developerProfile.php?id1=<?php echo $row['reg_id']; ?>">
                      <h3 class="u-text u-text-default u-text-2">See All Design</h3></a>
                    <?php
                       $imgquery2 = "select i_img from item where dev_name = '".$row['name']."' LIMIT 1,1";
                       $imgresult2 = mysqli_query($db,$imgquery2);

                       $row2=mysqli_fetch_row($imgresult2);
                       

                        if ($row2) 
                        {
                          $img2 = $row2[0];
                    ?>
                    <span class="u-file-icon u-icon u-icon-rectangle u-opacity u-opacity-90 u-white u-icon-3">
                      <img src="images/<?php echo $img2;?>" alt=""></span>
                      <?php
                        }
                        else
                        {
                          ?>
                         <span class="u-file-icon u-icon u-icon-rectangle u-opacity u-opacity-90 u-white u-icon-3">
                      <img style="align-items: center;justify-content: space-evenly;display: flex;" src="" alt="Image"></span>
                     
                    <?php
                        }
                    ?>
                  </div>
                </div>
              </div>
            </div>
               <?php
           }
            ?>
             </div>
        </div>
      </div>
      
    </section>
    
<?php 
  include("footer.php");
?>  
  
</body></html>