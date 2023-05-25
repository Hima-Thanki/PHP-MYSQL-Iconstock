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
        
        <a id="rbtn" onclick="rotateImageClockWise()" class="u-border-2 u-border-black u-border-hover-palette-2-base u-btn u-button-style u-white u-btn-1">&nbsp; <span class="u-file-icon u-icon u-text-palette-4-base u-icon-1">
          <img src="images/opacity.png" alt=""></span>&nbsp;
        </a>
        
        <a  onclick="flipV()" class="u-border-2 u-border-black u-border-hover-palette-2-base u-btn u-button-style u-hover-white u-white u-btn-2">&nbsp; <span class="u-file-icon u-icon u-icon-2"><img src="images/brightness.png" alt=""></span>&nbsp;
        </a>
        
        <a href="#" class="u-border-2 u-border-grey-75 u-border-hover-palette-2-base u-btn u-button-style u-hover-white u-white u-btn-3">&nbsp;​&nbsp;</a>
        
        <div class="u-border-4 u-border-palette-2-base u-container-style u-group u-preserve-proportions u-shape-rectangle u-white u-group-2">
          <div class="u-container-layout u-valign-middle u-container-layout-1">
            <img id="img1" class="u-image u-image-default u-preserve-proportions u-image-1" src="images/<?php echo $row['i_img'];?>" alt="" data-image-width="128" data-image-height="128">
          </div>
        </div>
        
        <a onclick="flipH()" class="u-border-2 u-border-black u-border-hover-palette-2-base u-btn u-button-style u-hover-white u-white u-btn-4">&nbsp; <span class="u-file-icon u-icon u-icon-3"><img src="images/blur.png" alt=""></span>&nbsp;
        </a>
        <h3 class="u-text u-text-1">color</h3>
        
        <div onclick="colorBlue()" class="u-custom-color-8 u-hover-feature u-preserve-proportions u-shape u-shape-rectangle u-shape-1" ></div>
        <a href="#" class="u-border-2 u-border-grey-75 u-border-hover-palette-2-base u-btn u-button-style u-hover-white u-white u-btn-5">&nbsp;​&nbsp;</a>
        <h6 class="u-text u-text-2">Background</h6>
        <a href="https://nicepage.com/c/blog-posts-website-mockup" class="u-border-2 u-border-black u-border-hover-black u-btn u-button-style u-hover-white u-none u-text-hover-black u-btn-6">Clear&nbsp;editing</a>
        
        <a onclick="downloadImage(img)" download class="u-border-4 u-border-hover-white u-border-palette-2-base u-btn u-btn-round u-button-style u-hover-white u-radius-17 u-text-body-color u-text-hover-black u-white u-btn-8">Download</a>
        
        <div data-href="customize.php?img=<?php echo $row['i_img'];?>" class="u-custom-color-3 u-hover-feature u-preserve-proportions u-shape u-shape-rectangle u-shape-2" ></div>
        
        <div class="u-custom-color-11 u-hover-feature u-preserve-proportions u-shape u-shape-rectangle u-shape-3"></div>
        <div class="u-custom-color-11 u-hover-feature u-preserve-proportions u-shape u-shape-rectangle u-shape-3" style="background-color: gray;"></div>
        
        <div class="u-border-2 u-border-grey-75 u-custom-color-8 u-hover-feature u-preserve-proportions u-shape u-shape-rectangle u-shape-4" data-href="https://nicepage.com"></div>

        <div class="u-border-2 u-border-grey-75 u-grey-5 u-hover-feature u-preserve-proportions u-shape u-shape-rectangle u-shape-5" data-href="https://nicepage.com"></div>

        <div class="u-border-2 u-border-grey-75 u-hover-feature u-palette-4-base u-preserve-proportions u-shape u-shape-rectangle u-shape-6" data-href="https://nicepage.com"></div>

        <div class="u-border-2 u-border-grey-75 u-custom-color-3 u-hover-feature u-preserve-proportions u-shape u-shape-rectangle u-shape-7" data-href="https://nicepage.com"></div>

        <div class="u-border-2 u-border-grey-75 u-custom-color-11 u-hover-feature u-preserve-proportions u-shape u-shape-rectangle u-shape-8" data-href="https://nicepage.com"></div>
      </div>    
    </section>
    <script type="text/javascript">
      var myImage = document.getElementById("img1");
      function rotateImageClockWise() 
      {
        return myImage.style.transform = 'rotate(90deg)';
      }
       function flipH() 
      {
        return myImage.style.transform = 'scaleX(-1)';
      }
       function flipV() 
      {
        return myImage.style.transform = 'scaleY(-1)';
      }
      function colorBlue() 
      {
        return myImage.style.filter = 'sepia(100%) hue-rotate(190deg) saturate(500%)';
      }
      function colorRed() 
      {
        return myImage.style.color = "red";
      }
      function colorGreen() 
      {
        return myImage.style.filter = 'GREEN';
      }
      async function downloadImage(imageSrc) 
      {
        const image = await fetch(myImage);
      const imageBlog = await image.blob();
      const imageURL = URL.createObjectURL(imageBlog);

        const link = document.createElement('a');
        link.href = imageURL;
        link.download = '';
  document.body.appendChild(link);
  link.click();
  document.body.removeChild(link); 
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