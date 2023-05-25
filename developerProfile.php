<?php
session_start();
 if(isset($_SESSION['username']))
{
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
    $db = mysqli_connect('localhost','root','','iconstock_db');
    $id = $_GET['id1'];
    $query = "select * from user where reg_id =".$id;
    $result = mysqli_query($db,$query);
    $row=mysqli_fetch_assoc($result);

    $dname = $row['name'];
    $query1 = "select * from item where dev_name='".$dname."'";
    $result1 = mysqli_query($db,$query1);
    $row1=mysqli_fetch_assoc($result1);
?>

    <section class="u-clearfix u-white u-section-1" id="sec-575a">
      <div class="u-clearfix u-sheet u-sheet-1"><span class="u-file-icon u-icon u-icon-1"><img src="images/1144760.png" alt=""></span>
        <h3 class="u-text u-text-1"><?php echo $row['name'];?></h3>
        <p class="u-align-justify u-text u-text-2"> <?php echo $row['bio'];?>&nbsp;</p>
      </div>
    </section>
    <section class="u-clearfix u-gradient u-section-2" id="sec-15cb">
      <div class="u-clearfix u-sheet u-sheet-1">
        <a class="u-active-none u-border-1 u-border-no-left u-border-no-right u-border-no-top u-bottom-left-radius-0 u-bottom-right-radius-0 u-btn u-button-link u-button-style u-hover-none u-none u-radius-0 u-text-black u-top-left-radius-0 u-top-right-radius-0 u-btn-1"
        >Designs<span style="font-size: 1.875rem;"></span>
        </a>
        <?php
         if(isset($_SESSION['username']))
         {
            $name=$_SESSION['username'];
            $query2 = "select u_type from user where username='".$name."'";
            $result2 = mysqli_query($db,$query2);
            $row2=mysqli_fetch_row($result2);

            if($row2[0] == 'd')
            {
              if($row['username']==$name)
              {
         ?>
        <a href="add_design.php?id1=<?php echo $id; ?>" class="u-border-4 u-border-hover-white u-border-palette-2-base u-btn u-btn-round u-button-style u-hover-palette-2-base u-radius-9 u-text-hover-white u-white u-btn-2">Add Design</a>
        <?php
              }
            }
         }
         ?>
          <div class="u-clearfix u-gutter-36 u-layout-wrap u-layout-wrap-1" style="margin-top: 50px;">
        <div class="u-gutter-0 u-layout">
          <div class="u-layout-col">
            <div class="u-size-30">
              <div class="u-layout-row">
                <?php
            while($row1=mysqli_fetch_array($result1)){    
            ?>
               
                <div class="u-container-style u-layout-cell u-size-8 u-layout-cell-1" style="background-color: white; border-radius: 50px;">
                  <div class="u-container-layout u-valign-middle u-container-layout-1">
                    <img class="u-image u-image-contain u-image-default u-preserve-proportions u-image-1" 
                    src="<?php echo "images/".$row1[3];?>" alt="" data-image-width="128" data-image-height="128">
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

<?php
}
else
{
    header("location:index.php?set=1");
}
?>