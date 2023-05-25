<?php
  session_start();
?>
<!DOCTYPE html>
<html style="font-size: 16px;" lang="en"><head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="Static Icons​">
    <meta name="description" content="">
    <title>product</title>
    <link rel="stylesheet" href="nicepage.css" media="screen">
<link rel="stylesheet" href="product.css" media="screen">
    <script class="u-script" type="text/javascript" src="jquery.js" defer=""></script>
    <script class="u-script" type="text/javascript" src="nicepage.js" defer=""></script>
    <meta name="generator" content="Nicepage 4.19.3, nicepage.com">
    <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i">
    <link id="u-page-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto+Slab:100,200,300,400,500,600,700,800,900|Montserrat:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i">
    
    
    <script type="application/ld+json">{
		"@context": "http://schema.org",
		"@type": "Organization",
		"name": "",
		"logo": "images/layers-unscreen.gif",
		"sameAs": []
}</script>
    <meta name="theme-color" content="#478ac9">
    <meta property="og:title" content="product">
    <meta property="og:type" content="website">
  </head>
  <body class="u-body u-xl-mode" data-lang="en">

<?php
      include("header.php");
      $db = mysqli_connect('localhost','root','','iconstock_db');
      
      if(isset($_GET['style']))
      {
          $query = "select * from item where i_type='s' and i_style='".$_GET['style']."'";
      }
      else
      {
      $query = "select * from item where i_type='s'";
      }      

      $result = mysqli_query($db,$query);
    ?>

    <section class="u-clearfix u-white u-section-1" id="sec-5cd5">
      <div class="u-clearfix u-sheet u-sheet-1">
        <h1 style="text-align: center; font-weight: bold;" class="u-text u-text-default u-text-1">Static Icons </h1>
        <div class="u-form u-form-1">
          <form action="fillter.php" method="POST" class="u-clearfix u-form-spacing-50 u-inner-form" style="display: flex;flex-flow: row;align-items: center;flex-grow: 1;">
          <div class="u-form-group u-form-select u-label-none u-form-group-1" style="padding:10px;width:650px">
            <label for="select-288e" class="u-label u-label-1">Style</label>
            <div class="u-form-select-wrapper">
              <select id="select" name="select" class="u-border-2 u-border-black u-custom-font u-font-pt-sans u-input u-input-rectangle u-radius-14 u-white u-input-1">
                <option value="Filled">Filled</option>
                <option value="Lined">Lined</option>
                <option value="Colored">Colored</option>
              </select>
              <svg class="u-caret u-caret-svg" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="16px" height="16px" viewBox="0 0 16 16" style="fill:currentColor;" xml:space="preserve"><polygon class="st0" points="8,12 2,4 14,4 "></polygon></svg>
            </div>
          </div>
            <input style="margin-left: 20px;" type="submit" value="Filter" name="filters" class="u-border-2 u-border-black u-btn u-btn-submit u-button-style u-hover-black u-none u-text-black u-text-hover-white u-btn-1">
            
            <a href="reset.php?r=static" name="reset" style="margin-left: 20px;" class="u-border-2 u-border-black u-btn u-btn-submit u-button-style u-hover-black u-none u-text-black u-text-hover-white u-btn-1">reset</a>
        </form>
        </div>
        <div style="margin: 50px 30px 60px auto;" class="u-clearfix u-gutter-36 u-layout-wrap u-layout-wrap-1">
          <div class="u-gutter-0 u-layout">
            <div class="u-layout-col">
              <div class="u-size-30">
                <div class="u-layout-row">
                  <?php
            while($row=mysqli_fetch_assoc($result)){    
            ?>
                  <div class="u-container-style u-layout-cell u-size-8 u-layout-cell-1">
                    <div class="u-container-layout u-valign-middle u-container-layout-1">
                      <img  class="u-image u-image-contain u-image-default u-preserve-proportions u-image-1" src="images/<?php echo $row['i_img'];?>" alt="" data-image-width="128" data-image-height="128" data-href="iconDetail.php?id=<?php echo $row['i_id']; ?>">
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
      </div>
    </section>
    
    
    <?php
      include("footer.php");
    ?>

</body></html>