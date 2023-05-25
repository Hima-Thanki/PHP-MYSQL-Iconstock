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
    <title>message</title>
    <link rel="stylesheet" href="nicepage.css" media="screen">
<link rel="stylesheet" href="message.css" media="screen">
    <script class="u-script" type="text/javascript" src="jquery.js" defer=""></script>
    <script class="u-script" type="text/javascript" src="nicepage.js" defer=""></script>
    <meta name="generator" content="Nicepage 5.3.2, nicepage.com">
    <meta name="referrer" content="origin">
    <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i">
    
    
    
    <script type="application/ld+json">{
		"@context": "http://schema.org",
		"@type": "Organization",
		"name": "",
		"logo": "images/default-logo.png"
}</script>
    <meta name="theme-color" content="#478ac9">
    <meta property="og:title" content="message">
    <meta property="og:type" content="website">
  </head>
  <body class="u-body u-xl-mode" data-lang="en">

<?php
    include("header.php");

    $db = mysqli_connect('localhost','root','','iconstock_db');

    $qid = $_GET['qid'];
    $query = "select * from forum_q where id =".$qid;
    $result = mysqli_query($db,$query);
    $row = mysqli_fetch_row($result);


    $uid = $row[1];
    $query1 = "select name from user where reg_id=".$uid;
    $result1 = mysqli_query($db,$query1);    
    $row1 = mysqli_fetch_row($result1);
?>


    <section class="u-align-center u-clearfix u-gradient u-section-1" id="sec-68c6">
      <div class="u-clearfix u-sheet u-sheet-1">
        <div class="u-list u-list-1">
          <div class="u-repeater u-repeater-1">
            <div class="u-border-2 u-border-black u-container-style u-hover-feature u-list-item u-radius-7 u-repeater-item u-shape-rectangle u-white u-list-item-1"  data-href="forum.php">
              <div class="u-container-layout u-similar-container u-container-layout-1">
                <div class="u-clearfix u-group-elements u-group-elements-1" title="Contact"><span class="u-file-icon u-icon u-icon-1"><img src="images/1144760.png" alt=""></span>
                  <h4 style="margin-left: 50px;" class="u-text u-text-default u-text-1">
                    <a class="u-active-none u-border-1 u-border-hover-grey-75 u-border-no-left u-border-no-right u-border-no-top u-bottom-left-radius-0 u-bottom-right-radius-0 u-btn u-button-link u-button-style u-hover-none u-none u-radius-0 u-text-black u-top-left-radius-0 u-top-right-radius-0 u-btn-1"><?php echo $row1[0]; ?></a>
                  </h4>
                </div>
                <h6 class="u-text u-text-default u-text-2"><?php echo $row[2]; ?></h6>
                <div style="width:1030px" class="u-border-1 u-border-grey-dark-1 u-line u-line-horizontal u-line-1"></div>
              </div>
            </div>
          </div>
        </div>

          <form action="faq.php?qid=<?php echo $qid; ?>" style="display: inline-flex;margin-top: 30px;" method="POST">
            <div class="u-form-group u-label-none">
              <input style="width:900px" type="text" class="u-border-2 u-border-black u-input u-input-rectangle u-radius-6 u-white u-input-1" name="answer" placeholder="Enter Your Answer" required>
              </div>
              <input style="padding: 5px 30px 5px 30px;margin-left: 10px; border: 4px solid black; border-radius: 5px; background: none;font-weight: bolder;" type="submit" value="submit" name="ans_btn">
          </form>
      </div>      
    </section>


    <section class="u-clearfix u-section-2" id="sec-21c0" style="background-color: white;">
      <div class="u-clearfix u-sheet u-sheet-1">
        <h3 class="u-align-left u-text u-text-default u-text-1">Answers :</h3>
        <div class="u-list u-list-1">
          <div class="u-repeater u-repeater-1">

            <?php
                $query2 = "select * from forum_answer where que_id=".$qid." ORDER BY id DESC";
                $result2 = mysqli_query($db,$query2);    

                while($row2=mysqli_fetch_assoc($result2))
              {
                $uname = $row2['uid'];
                $query3 = "select name from user where reg_id=".$uname;
                $result3 = mysqli_query($db,$query3);    
                $row3 = mysqli_fetch_row($result3);
            ?>
            <div class="u-border-2 u-border-grey-75 u-container-style u-gradient u-hover-feature u-list-item u-repeater-item u-shape-rectangle u-list-item-1" title="developers">
              <div class="u-container-layout u-similar-container u-container-layout-1">
                <div class="u-clearfix u-group-elements u-group-elements-1"><span class="u-file-icon u-icon u-icon-1"><img src="images/1144760.png" alt=""></span>
                  <h4 class="u-text u-text-default u-text-2" style="margin-left: 50px;">
                    <a class="u-active-none u-border-1 u-border-hover-grey-75 u-border-no-left u-border-no-right u-border-no-top u-bottom-left-radius-0 u-bottom-right-radius-0 u-btn u-button-link u-button-style u-hover-none u-none u-radius-0 u-text-black u-top-left-radius-0 u-top-right-radius-0 u-btn-1"><?php echo $row3[0]; ?></a>
                  </h4>
                </div>
                <div class="u-border-1 u-border-grey-dark-1 u-line u-line-horizontal u-line-1"></div>
                <h6 class="u-text u-text-default u-text-3"><?php echo $row2['answer']; ?></h6>
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

<?php
}
else
{
  header("location:index.php?set=1");
}
?>