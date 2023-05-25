<?php
session_start();

?>
<!DOCTYPE html>
<html style="font-size: 16px;" lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="Welcome, Our Product​, Design Perfection, Design Perfection">
    <meta name="description" content="">
    <title>Home</title>
    <link rel="stylesheet" href="nicepage.css" media="screen">
<link rel="stylesheet" href="Home.css" media="screen">
    <script class="u-script" type="text/javascript" src="jquery.js" defer=""></script>
    <script class="u-script" type="text/javascript" src="nicepage.js" defer=""></script>
    <meta name="generator" content="Nicepage 4.20.1, nicepage.com">
    <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i">
    <link id="u-page-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lobster:400|Montserrat:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i|PT+Sans:400,400i,700,700i|Open+Sans:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i">
    
    
    <script type="application/ld+json">{
		"@context": "http://schema.org",
		"@type": "Organization",
		"name": "",
		"logo": "images/layers-unscreen.gif",
		"sameAs": []
}</script>
    <meta name="theme-color" content="#478ac9">
    <meta property="og:title" content="Home">
    <meta property="og:type" content="website">
    <link rel="stylesheet" type="text/css" href="style.css">

<?php
if(isset($_GET['set']))
{
  echo "<script>"."alert('Please login');"."</script>";
}
?>



     </head>
  <body data-home-page="index.php" data-home-page-title="Home" class="u-body u-overlap u-stick-footer u-xl-mode" data-lang="en">


    <?php
      include("header.php");
if(isset($_GET['proEr']))
      {
  echo '<script>';
   echo 'alert(" You are not a developer..")';
   echo '</script>';
}
if(isset($_GET['Succ_contact']))
      {
  echo '<script>';
   echo 'alert(" Your message Send Succesfully.....")';
   echo '</script>';
}
if(isset($_GET['err']))
{
  echo '<script>';
   echo 'alert("username or password is incorrect..")';
   echo '</script>';
}
if(isset($_GET['suc']))
{
  echo '<script>';
   echo 'alert("user succesfully register..")';
   echo '</script>';
}
if(isset($_GET['err2']))
{
  echo '<script>';
   echo 'alert("Password & Confirm Password must be same.")';
   echo '</script>';
}
if(isset($_GET['er']))
{
  echo '<script>';
   echo 'alert("Username must be unique ...")';
   echo '</script>';
}
    ?>

    <section class="u-align-center u-border-5 u-border-grey-75 u-clearfix u-image u-lightbox u-uploaded-video u-section-1" src="" id="sec-3338" data-image-width="800" data-image-height="600">
      <div class="u-clearfix u-sheet u-sheet-1">
        <h1 style= "background-image: linear-gradient(to right,red,#b63e24,#b91493,#b63e24,darkviolet,red);
        -webkit-background-clip: text;
        -moz-background-clip: text;
        background-clip: text;
        color: transparent;font-weight: bolder;line-height: 80px;letter-spacing:0px;word-spacing: 5px;" class="u-custom-font u-font-lobster u-text u-title u-text-1">Icons Speak Icon Language.</h1>
        <p style="font-size:18px;font-weight:bold;">Icons are pictorial representations as part of the visual identity of a program and also usefull for shorthand conveying </p>
 
    <div class="wrapper" style="margin-left: 100px; margin-top: 60px; border: 2px solid black; width: 920px; border-radius: 10px;">
      <div class="search-input">
        <a href="" target="_blank" hidden></a>
        <form action="searchResult.php" method="POST">
            <input type="search-input" name="search" placeholder="Type to search..">
        </form>
        <div class="autocom-box">
          <!--here list are inserted from javascript-->
        </div>
        <div class="icon"></div>
      </div>
    </div>
     <script src="js/suggestions.js"></script> 
     <script src="js/script.js"></script> 

     <!--div class="wrapper">
      <div class="search-input">
        <a href="" target="_blank" hidden></a>
        <input type="text" placeholder="Type to search..">
        <div class="autocom-box">
          < here list are inserted from javascript >
        </div>
        <div class="icon"><i class="fas fa-search"></i></div>
      </div>
    </div>
    <script src="js/suggestions.js"></script>
    <script src="js/script.js"></script-->
      <p style="font-size:20px;color:red; letter-spacing:0.9px;">Top Searches : 
        <a href="social-media.php" onmouseover="this.style.color='blue'" onmouseout="this.style.color='red'" style="color:red;">Social Media Icons ,</a> 
        <a onmouseover="this.style.color='blue'" onmouseout="this.style.color='red'"href="food.php" style="color:red;">Food Icons , </a>
        <a href="arrow.php" onmouseover="this.style.color='blue'" onmouseout="this.style.color='red'" style="color:red;">Arrow Icons , </a>
        <a href="file.php" style="color:red;" onmouseover="this.style.color='blue'" onmouseout="this.style.color='red'">File Icons</a></p>
      </div>
    </section>



    <section class="u-align-center u-clearfix u-white u-section-2" id="carousel_9e14">
      <div class="u-clearfix u-sheet u-sheet-1">
        <h1 class="u-text u-text-default u-title u-text-1">
          <span style="font-size: 36px;"><b>Our Product</b>
          </span>
        </h1>
        <div class="u-layout-grid u-list u-list-1">
          <div class="u-repeater u-repeater-1">
            <div class="u-container-style u-custom-border u-custom-color-10 u-list-item u-radius-50 u-repeater-item u-shape-round u-list-item-1" data-animation-name="customAnimationIn" data-animation-duration="1250" data-animation-direction="X" data-animation-delay="0">
              <div class="u-container-layout u-similar-container u-container-layout-1" style=" background-image: linear-gradient(to bottom right, lightblue,lightpink,lawngreen);">
                <h4 class="u-align-center u-custom-font u-font-montserrat u-text u-text-default u-text-2">Static Icons</h4><span class="u-border-10 u-border-grey-90 u-hover-feature u-icon u-icon-circle u-text-black u-white u-icon-1" data-href="static_product.php" data-animation-name="" data-animation-duration="0" data-animation-delay="0" data-animation-direction=""><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 512 512" style=""><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-2e2d"></use></svg><svg class="u-svg-content" viewBox="0 0 512 512" id="svg-2e2d"><g><path d="m193.29 395.63c-42.64 0-77.33-34.69-77.33-77.33v-25.59c-62.506-3.875-116.177 46.692-115.959 109.34 0 60.4 49.14 109.53 109.53 109.53 62.65.217 113.214-53.436 109.34-115.95z"></path><path d="m262.94 146.56h-69.65c-26.1 0-47.33 21.24-47.33 47.33-.042 16.556.03 110.208 0 124.41 0 26.09 21.23 47.33 47.33 47.33 14.916-.029 107.366.021 124.4 0 26.1 0 47.33-21.24 47.33-47.33v-68.81h-102.08z"></path><path d="m292.94.42v219.07h219.06v-219.07z"></path>
</g></svg>
            
            
          </span>
              </div>
            </div>
            <div class="u-container-style u-custom-border u-custom-color-10 u-list-item u-radius-50 u-repeater-item u-shape-round u-list-item-2" data-animation-name="customAnimationIn" data-animation-duration="1250" data-animation-direction="X" data-animation-delay="0">
              <div class="u-container-layout u-similar-container u-container-layout-2" style=" background-image: linear-gradient(to bottom right, lightblue,lightpink,lawngreen);">
                <h4 class="u-align-center u-custom-font u-font-montserrat u-text u-text-default u-text-3"> Animated Icons</h4><span class="u-border-10 u-border-grey-90 u-hover-feature u-icon u-icon-circle u-text-black u-white u-icon-2" data-href="animated_product.php"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 512.001 512.001" style=""><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-38fc"></use></svg><svg class="u-svg-content" viewBox="0 0 512.001 512.001" x="0px" y="0px" id="svg-38fc" style="enable-background:new 0 0 512.001 512.001;"><g><g><path d="M502.979,317.996L230.502,199.598c26.679-30.977,43.37-68.952,48.104-109.598h16.395c8.284,0,15-6.716,15-15V15    c0-8.284-6.716-15-15-15h-60c-8.284,0-15,6.716-15,15v60c0,8.284,6.716,15,15,15h13.362    c-5.335,38.976-23.597,74.898-52.382,102.447c-29.08,27.831-66.261,44.536-105.98,47.907v-9.265c0-8.284-6.716-15-15-15h-60    c-8.284,0-15,6.716-15,15v60c0,8.284,6.716,15,15,15h60c8.284,0,15-6.716,15-15v-20.631    c39.772-2.876,77.462-17.167,109.042-41.233l118.953,273.754c2.391,5.5,7.81,9.022,13.753,9.022c0.283,0,0.567-0.008,0.853-0.024    c6.272-0.355,11.659-4.582,13.496-10.589l27.229-89.03c5.725-18.716,20.315-33.307,39.03-39.031l89.03-27.229    c6.008-1.837,10.234-7.224,10.589-13.497C512.332,326.329,508.741,320.5,502.979,317.996z"></path>
</g>
</g></svg>
            
            
          </span>
              </div>
            </div>
          </div>
        </div>
      </div>
      
      
    </section>

    <section class="u-align-center u-clearfix u-image u-section-3" style="background-image: linear-gradient(to bottom right, lightblue,lightpink,lawngreen);" id="carousel_57fc" data-image-width="1500" data-image-height="1000">
      
      
      
      <div class="u-clearfix u-sheet u-valign-middle-sm u-valign-middle-xs u-sheet-1">
        <h1 class="u-text u-text-default u-text-palette-2-dark-2 u-title u-text-1">
          <span style="font-size: 36px;"><b>What we do ...</b>
          </span>
        </h1>
        <div class="u-expanded-width-lg u-list u-list-1">
          <div class="u-repeater u-repeater-1">
            <div class="u-container-style u-gradient u-hover-feature u-list-item u-radius-50 u-repeater-item u-shape-round u-list-item-1" data-animation-name="customAnimationIn" data-animation-duration="1500" data-animation-direction="" data-animation-delay="250">
              <a href="about.php#one">
              <div class="u-container-layout u-similar-container u-valign-bottom-lg u-valign-bottom-md u-container-layout-1" style="background-color: white;" >
                  <img class="u-image u-image-contain u-image-default u-preserve-proportions u-image-1" alt="" data-image-width="128" data-image-height="128" src="images/all in one.png">
                <h2 class="u-align-center u-custom-font u-font-pt-sans u-text u-text-palette-2-dark-1 u-text-2" data-animation-name="" data-animation-duration="0" data-animation-direction="">All in&nbsp;one<br>
                </h2>
                <p class="u-align-justify u-custom-font u-font-open-sans u-text u-text-3"> All icons at one place. Iconstock provides all types of icons with,all extension...</p>
                <a href="about.php#one" class="u-active-palette-2-base u-border-2 u-border-active-black u-border-hover-black u-border-palette-2-base u-btn u-btn-round u-button-style u-hover-palette-5-base u-radius-50 u-text-active-white u-text-black u-text-hover-black u-white u-btn-1" style="background-image: linear-gradient(to bottom right, lightblue,lightpink,lawngreen)"  data-animation-name="" data-animation-duration="0" data-animation-delay="0" data-animation-direction="">more</a>
              </div>
               </a>
            </div>
            <div class="u-container-style u-gradient u-hover-feature u-list-item u-radius-50 u-repeater-item u-shape-round u-video-cover u-list-item-2" data-animation-name="customAnimationIn" data-animation-duration="1500" data-animation-direction="" data-animation-delay="250">
              <a href="about.php#two">
              <div class="u-container-layout u-similar-container u-valign-bottom-lg u-valign-bottom-md u-container-layout-2" style="background-color: white;">
                <img class="u-image u-image-contain u-image-default u-preserve-proportions u-image-2" alt="" data-image-width="128" data-image-height="128" src="images/profile.png">
                <h2 class="u-align-center u-custom-font u-font-pt-sans u-text u-text-palette-2-dark-1 u-text-4" data-animation-name="" data-animation-duration="0" data-animation-direction="">Profile Management</h2>
                <p class="u-align-justify u-custom-font u-font-open-sans u-text u-text-5"> In iconstock all individual user able to mange their personal profile,User can perform....&nbsp;</p>
                <a href="about.php#two" class="u-active-palette-2-base u-border-2 u-border-active-black u-border-hover-black u-border-palette-2-base u-btn u-btn-round u-button-style u-hover-palette-5-base u-radius-50 u-text-active-white u-text-black u-text-hover-black u-white u-btn-2" style="background-image: linear-gradient(to bottom right, lightblue,lightpink,lawngreen)" data-animation-name="" data-animation-duration="0" data-animation-delay="0" data-animation-direction="">more</a>
              </div></a>
            </div>
            <div class="u-container-style u-gradient u-hover-feature u-list-item u-radius-50 u-repeater-item u-shape-round u-video-cover u-list-item-3" data-animation-name="customAnimationIn" data-animation-duration="1500" data-animation-direction="" data-animation-delay="250">
              <a href="about.php#three">
              <div class="u-container-layout u-similar-container u-valign-bottom-lg u-valign-bottom-md u-container-layout-3" style="background-color: white;">
                <img class="u-image u-image-contain u-image-default u-preserve-proportions u-image-3" alt="" data-image-width="128" data-image-height="128" src="images/dev.png">
                <h2 class="u-align-center u-custom-font u-font-pt-sans u-text u-text-palette-2-dark-1 u-text-6" data-animation-name="" data-animation-duration="0" data-animation-direction="">Developer's platform</h2>
                <p class="u-align-justify u-custom-font u-font-open-sans u-text u-text-7"> In iconstock user able to hire developer to create their custom icon and animation...&nbsp;</p>
                <a href="about.php#three" class="u-active-palette-2-base u-border-2 u-border-active-black u-border-hover-black u-border-palette-2-base u-btn u-btn-round u-button-style u-hover-palette-5-base u-radius-50 u-text-active-white u-text-black u-text-hover-black u-white u-btn-3" style="background-image: linear-gradient(to bottom right, lightblue,lightpink,lawngreen)"data-animation-name="" data-animation-duration="0" data-animation-delay="0" data-animation-direction="">more</a>
              </div></a>
            </div>
          </div>
        </div>
      </div>
    </section>
    <style class="u-overlap-style">.u-overlap:not(.u-sticky-scroll) .u-header {
background-color: #ffffff !important
}</style>

    <?php
      include ("footer.php");
    ?>
  
</body></html>