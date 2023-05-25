<?php
  session_start();
?>
<!DOCTYPE html>
<html style="font-size: 16px;">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="Login Form">
    <meta name="description" content="">
    <meta name="page_type" content="np-template-header-footer-from-plugin">
    <title>Login</title>
<link rel="stylesheet" href="Login.css" media="screen">
    <script class="u-script" type="text/javascript" src="jquery.js" defer=""></script>
    <script class="u-script" type="text/javascript" src="nicepage.js" defer=""></script>
    <meta name="generator" content="Nicepage 4.7.1, nicepage.com">
    <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i">
    <link id="u-page-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i">
    <link rel="stylesheet" type="text/css" href="css/account.css">
    
    <script type="application/ld+json">{
		"@context": "http://schema.org",
		"@type": "Organization",
		"name": "",
		"logo": "images/logo1.png",
		"sameAs": []
}</script>
    <meta name="theme-color" content="#478ac9">
    <meta property="og:title" content="Login">
    <meta property="og:type" content="website">
  </head>
  <body class="u-body u-xl-mode" background="images/bg_bggenerator_com.png">
<?php
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
?>
    <section class="u-align-center u-clearfix u-image u-section-1" id="carousel_6fc1" data-image-width="1920" data-image-height="1080">
      <div class="form" style="width: 33%;">
    <h2 align="center"><b>Login</b></h2>
    <br>
    <form action="adminserver.php" method="post">
      <div class="input-group">
        <label style="margin-left: 13px;">Username</label>
        <input style="height:40px;" type="text" name="unm">
      </div>
      <br>
      <div class="input-group">
        <label style="margin-left: 13px;">Password</label>
        <input style="height:40px;" type="password" name="pwd">
      </div>
      <br>
      <div class="input-group">
        <button style="background-color: #000080; color: white; font-weight: bold;" type="submit" name="login-admin" class="btn">Login</button>
      </div>
        <h5 align="center" id="register">create a new account ..? <a style="color: #000080;" href="adminsign-up.php">sign up</a></h5>
    </form>
  </div>

    </section>
</body>
</html>
