<?php
  session_start();
  
?>
 <!DOCTYPE html> 
 <html style="font-size: 16px;" lang="en">
 <head> 
  
  <title>custom_icon</title>
  <link rel="stylesheet" href="nicepage.css" media="screen"> 
<link rel="stylesheet" href="category.css" media="screen">
<link rel="stylesheet" href="custom_icon.css" media="screen">
    <script class="u-script" type="text/javascript" src="jquery.js" defer=""></script>
    <script class="u-script" type="text/javascript" src="nicepage.js" defer=""></script>
    <meta name="generator" content="Nicepage 4.21.5, nicepage.com">
   <link id="u-theme-google-font" rel="stylesheet"
   href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i">
   <link id="u-page-google-font" rel="stylesheet"
   href="https://fonts.googleapis.com/css?family=Montserrat:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i">
    
    
    <script type="application/ld+json">{
    "@context": "http://schema.org",
    "@type": "Organization",
    "name": "",
    "logo": "images/layers-unscreen.gif",
    "sameAs": []
}</script>
</head>
<?php
if(isset($_SESSION['username']))
  {
    include("header.php");
    $db = mysqli_connect('localhost','root','','iconstock_db');
    $id=$_GET['id'];
    $query = "select * from item where i_id=$id";
    $result = mysqli_query($db,$query);
    $row=mysqli_fetch_assoc($result)
?>
  <body class="u-body u-xl-mode" data-lang="en">


<section class="u-clearfix u-white u-section-1" id="sec-4f42">
      <div class="u-clearfix u-sheet u-sheet-1">
        <div class="u-border-4 u-border-grey-75 u-container-style u-expanded-width-lg u-grey-5 u-group u-radius-50 u-shape-round u-group-1"></div>
        
        <a id="rbtn" onclick="c_opacity()" class="u-border-2 u-border-black u-border-hover-palette-2-base u-btn u-button-style u-white u-btn-1">&nbsp; <span class="u-file-icon u-icon u-text-palette-4-base u-icon-1">
          <img src="images/opacity.png" alt=""></span>&nbsp;
        </a>
        
        <a  onclick="c_bright()" class="u-border-2 u-border-black u-border-hover-palette-2-base u-btn u-button-style u-hover-white u-white u-btn-2">&nbsp; <span class="u-file-icon u-icon u-icon-2"><img src="images/brightness.png" alt=""></span>&nbsp;
        </a>
        
        <a href="#" class="u-border-2 u-border-grey-75 u-border-hover-palette-2-base u-btn u-button-style u-hover-white u-white u-btn-3">&nbsp;​&nbsp;</a>
        
        <div class="u-border-4 u-border-palette-2-base u-container-style u-group u-preserve-proportions u-shape-rectangle u-white u-group-2">
          <div class="u-container-layout u-valign-middle u-container-layout-1">
            <img id="cimg" onload="drawc()" class="u-image u-image-default u-preserve-proportions u-image-1" src="images/<?php echo $row['i_img'];?>" alt="" data-image-width="128" data-image-height="128" style="Display:none" hidden>
             <canvas id="myCanvas" width="300" height="277" >
              Your browser does not support the HTML5 canvas tag.
            </canvas>
          </div>
        </div>
        
        <a onclick="c_blur()" class="u-border-2 u-border-black u-border-hover-palette-2-base u-btn u-button-style u-hover-white u-white u-btn-4">&nbsp; <span class="u-file-icon u-icon u-icon-3"><img src="images/blur.png" alt=""></span>&nbsp;
        </a>
        <h3 class="u-text u-text-1">color</h3>
        
        <div onclick="blue()" class="u-custom-color-8 u-hover-feature u-preserve-proportions u-shape u-shape-rectangle u-shape-1" ></div>
        <a href="#" class="u-border-2 u-border-grey-75 u-border-hover-palette-2-base u-btn u-button-style u-hover-white u-white u-btn-5">&nbsp;​&nbsp;</a>
        <h6 class="u-text u-text-2">Background</h6>
        <a  class="u-border-2 u-border-black u-border-hover-black u-btn u-button-style u-hover-white u-none u-text-hover-black u-btn-6" onclick="re()">Clear&nbsp;editing</a>
        
        <a onclick="img_download()" download class="u-border-4 u-border-hover-white u-border-palette-2-base u-btn u-btn-round u-button-style u-hover-white u-radius-17 u-text-body-color u-text-hover-black u-white u-btn-8">Download</a>
        
        <div class="u-custom-color-3 u-hover-feature u-preserve-proportions u-shape u-shape-rectangle u-shape-2" onclick="green()" ></div>
        
        <div class="u-custom-color-11 u-hover-feature u-preserve-proportions u-shape u-shape-rectangle u-shape-3" onclick="yellow()"></div>
        <div class="u-custom-color-11 u-hover-feature u-preserve-proportions u-shape u-shape-rectangle u-shape-3" style="background-color: gray;" onclick="gray()"></div>
        
        <div class="u-border-2 u-border-grey-75 u-custom-color-8 u-hover-feature u-preserve-proportions u-shape u-shape-rectangle u-shape-4" onclick="back_red()" ></div>

        <div class="u-border-2 u-border-grey-75 u-grey-5 u-hover-feature u-preserve-proportions u-shape u-shape-rectangle u-shape-5" onclick="back_pink()" ></div>

        <div class="u-border-2 u-border-grey-75 u-hover-feature u-palette-4-base u-preserve-proportions u-shape u-shape-rectangle u-shape-6" onclick="back_lightblue()" ></div>

        <div class="u-border-2 u-border-grey-75 u-custom-color-3 u-hover-feature u-preserve-proportions u-shape u-shape-rectangle u-shape-7" onclick="back_green()"></div>

        <div class="u-border-2 u-border-grey-75 u-custom-color-11 u-hover-feature u-preserve-proportions u-shape u-shape-rectangle u-shape-8" onclick="back_pur()" >
        </div>
      </div>    
    </section>
   

   


    <script type="text/javascript">
      var c = document.getElementById("myCanvas");
      var ctx = c.getContext("2d");
      var img = document.getElementById("cimg");
      img.crossOrigin = "Anonymous";

        function drawc()
      {
       
        ctx.drawImage(img, 0, 0,300,277);

          //console.log("Drawc");
      }
      function re()
      {
          //console.log("re");
        c.style.backgroundColor = 'white';
        ctx.clearRect(0,0,300,277);
        ctx.filter = 'none';
        ctx.drawImage(img, 0, 0,300,277);
      }
      function gray()
      {
          //console.log("gray");
        ctx.clearRect(0,0,300,277);
        ctx.filter = 'sepia(100%) hue-rotate(190deg) saturate(10%)';
        ctx.drawImage(img, 0, 0,300,277);
      }
      function blue()
      {
          //console.log("blue");
        ctx.clearRect(0,0,300,277);
        ctx.filter = 'sepia(100%) hue-rotate(160deg) saturate(200%)';
        ctx.drawImage(img, 0, 0,300,277);
      }
      function green()
      {
          //console.log("green");
        ctx.clearRect(0,0,300,277);
        ctx.filter = 'sepia(100%) hue-rotate(110deg) saturate(200%)';
        ctx.drawImage(img, 0, 0,300,277);
      }
      function yellow()
      {
          //console.log("yellow");
        ctx.clearRect(0,0,300,277);
        ctx.filter = 'sepia(100%) hue-rotate(10deg) saturate(200%)';
        ctx.drawImage(img, 0, 0,300,277);
      }

      function back_red()
      {
          //console.log("back_red");
        c.style.backgroundColor = 'red';
        alert("its Premium Feature.You cannot download image with Background !!!!");
      } 
      function back_pink()
      {
          //console.log("back_green");
        c.style.backgroundColor = 'pink';
        alert("its Premium Feature.You cannot download image with Background !!!!");
      } 
      function back_pur()
      {
          //console.log("back_yellow");
        c.style.backgroundColor = 'Purple';
        alert("its Premium Feature.You cannot download image with Background !!!!");
      }
       function back_lightblue()
      {
         c.style.backgroundColor = 'LightBlue';
         alert("its Premium Feature.You cannot download image with Background !!!!");
          //console.log("back_yellow");
      }
       function back_green()
      {
          //console.log("back_yellow");
         c.style.backgroundColor = 'LightGreen';
        alert("its Premium Feature.You cannot download image with Background !!!!");
      }
      function c_bright()
      {
          //console.log("c_bright");
         ctx.filter ='brightness(1.1)';
        ctx.drawImage(img, 0, 0,300,277);
      }
      function c_opacity()
      {
        ctx.filter='drop-shadow(-5px 10px 4px #4444dd)';
          //console.log("c_opacity");
        // ctx.filter ='opacity(20%)';  
        ctx.drawImage(img, 0, 0,300,277);
      } 
      function c_blur()
      {
          //console.log("c_blur");
        ctx.filter ='blur(5px)';
        ctx.drawImage(img, 0, 0,300,277);
      }
      function img_download()
      {
          //console.log("img_download");
        var path    = c.toDataURL("image/png");
        var a = document.createElement('a');
        a.href = path;
        a.download = 'image.jpeg';
        a.click();
      }


          </script>
 <?php
      include("footer.php");

      
  ?>  



</body>
</html>

<?php
}
else
{
    header("location:index.php?set=1");
}
?>