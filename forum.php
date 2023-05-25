<?php
session_start();
if(isset($_SESSION['username']))
{
?>
<!DOCTYPE html>
<html style="font-size: 16px;" lang="en"><head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="Ask a Question">
    <meta name="description" content="">
    <title>forum</title>
    <link rel="stylesheet" href="nicepage.css" media="screen">
    <link rel="stylesheet" href="forum.css" media="screen">
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
    <meta property="og:title" content="forum">
    <meta property="og:type" content="website">
  </head>
  <body class="u-body u-xl-mode" data-lang="en">

    <?php
      include("header.php");

      $db = mysqli_connect('localhost','root','','iconstock_db');
      $query = "select * from forum_q ORDER BY id DESC;";
      $result = mysqli_query($db,$query);
      ?>
    
    <section class="u-align-center u-clearfix u-image u-section-1" id="sec-de44" data-image-width="800" data-image-height="600">
      <div class="u-clearfix u-sheet u-sheet-1">
        <h3 class="u-align-left u-text u-text-default u-text-1">Ask a Question</h3>
        <div class="u-form u-form-1">
          <form action="faq.php" method="POST" style="display: inline-flex;">
            <div class="u-form-group u-label-none">
              <input style="width:900px" type="text" class="u-border-2 u-border-black u-input u-input-rectangle u-radius-6 u-white u-input-1" name="question" placeholder="Enter Your Question" required>
              </div>
              <input style="padding: 5px 35px 5px 35px;margin-left: 10px; border: 4px solid black; border-radius: 5px; background: none;font-weight: bolder;" type="submit" value="submit" name="q_btn">
          </form>
        </div>
      </div>
    </section>


    <section class="u-clearfix u-section-2" id="sec-be09" style="background-color: white;">
      <div class="u-clearfix u-sheet u-sheet-1">
        <div class="u-expanded-width-lg u-expanded-width-md u-expanded-width-sm u-expanded-width-xs u-list u-list-1">
          <div class="u-repeater u-repeater-1">
          
          <?php
            while($row=mysqli_fetch_assoc($result))
            {
                //find user
                $uid = $row['uid'];
                $query1 = "select name from user where reg_id=".$uid;
                $result1 = mysqli_query($db,$query1);    
                $row1 = mysqli_fetch_row($result1);

                //count question reply
                $count = mysqli_query($db,"SELECT COUNT(id) from forum_answer WHERE que_id =".$row['id']);
                 $count_row = mysqli_fetch_row($count);
          ?>
            <div class="u-border-2 u-border-grey-75 u-container-style u-gradient u-hover-feature u-list-item u-repeater-item u-shape-rectangle u-list-item-1" data-href="message.php?qid=<?php echo $row['id']; ?>" title="developers">
              <div class="u-container-layout u-similar-container u-container-layout-1"><span class="u-file-icon u-icon u-icon-1"><img src="images/1144760.png" alt=""></span>
                <h4 class="u-text u-text-default u-text-1">
                  <a class="u-active-none u-border-1 u-border-hover-grey-75 u-border-no-left u-border-no-right u-border-no-top u-bottom-left-radius-0 u-bottom-right-radius-0 u-btn u-button-link u-button-style u-hover-none u-none u-radius-0 u-text-black u-top-left-radius-0 u-top-right-radius-0 u-btn-1"><?php echo $row1[0]; ?></a>
                </h4>
                <h6 class="u-text u-text-default-lg u-text-default-md u-text-default-sm u-text-default-xl u-text-2"><?php echo $row['question']; ?></h6>
                <div class="u-border-1 u-border-grey-dark-1 u-line u-line-horizontal u-line-1"></div>
                <p class="u-text u-text-default-lg u-text-default-md u-text-default-sm u-text-default-xl u-text-3"><?php echo $count_row[0];?> reply</p><span class="u-file-icon u-icon u-icon-2"><img src="images/1380338.png" alt=""></span>
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