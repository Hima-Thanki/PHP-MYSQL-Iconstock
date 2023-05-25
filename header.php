
<header class="u-border-2 u-border-black u-border-no-left u-border-no-right u-border-no-top u-clearfix u-header u-sticky u-sticky-d2b0 u-white u-header" id="sec-a00a">
   <style class="u-sticky-style" data-style-id="d2b0">
      .u-sticky-fixed.u-sticky-d2b0:before, .u-body.u-sticky-fixed .u-sticky-d2b0:before 
      {
      borders: top right bottom left !important
      }
   </style>
   <div class="u-clearfix u-sheet u-sheet-1" style="width: 1200px; margin-right: 30px;">
      <a href="index.php" class="u-image u-logo u-image-1" data-image-width="0" data-image-height="0" title="Home" style="display: inline-block;margin: 4px auto 0 -180px;">
      <img src="images/layers-unscreen.gif" class="u-logo-image u-logo-image-1">
      </a><a href="index.php" style="font-size:20px;color: black;letter-spacing:3px;margin-right: 40px;"> IconStock</a>
      <?php
         if(isset($_SESSION['username']))
         {
            $username = $_SESSION['username'];
         
         ?>
      <a href="logout.php" style="border:3px solid brown;border-radius: 5px;margin-right: 70px;" class="u-border-2 u-border-active-black u-border-hover-black u-border-palette-2-base u-btn u-btn-round u-button-style u-hover-palette-5-light-1 u-radius-13 u-text-active-black u-text-body-color u-text-hover-black u-btn-1"> <?php echo $username; ?></a>
      <?php
         }
         else
         { 
         ?>
      <button onclick="document.getElementById('id01').style.display='block'" style="border:3px solid brown; border-radius: 5px;" class="u-active-white u-border-2 u-border-active-black u-border-hover-black u-border-palette-2-base u-btn u-btn-round u-button-style u-hover-palette-5-light-1 u-radius-13 u-text-active-black u-text-body-color u-text-hover-black u-white u-btn-1"> Sign In</button>
      <?php
         }
         ?>
      <button onclick="document.getElementById('id04').style.display='block'" style="border:3px solid brown; border-radius: 5px;" class="u-active-white u-border-2 u-border-active-black u-border-hover-black u-border-palette-2-base u-btn u-btn-round u-button-style u-dialog-link u-hover-palette-5-light-1 u-radius-13 u-text-active-black u-text-body-color u-text-hover-black u-white u-btn-2">Contact Us</button>
      
   <?php
        $db = mysqli_connect('localhost','root','','iconstock_db');
         if(isset($_SESSION['username']))
         {
            $name = $_SESSION['username'];
            $query2 = "select u_type from user where username='".$name."'";
            $result2 = mysqli_query($db,$query2);
            $row2=mysqli_fetch_row($result2);

            if($row2[0] == 'd')
            {
   ?>
      <a style="height:50px;width: 50px;" class="u-btn u-white u-btn-3" href="developerPersnalProfile.php"></a>
   <?php
            }
         }
   ?>
      
      <nav class="u-dropdown-icon u-menu u-menu-dropdown u-offcanvas u-menu-1" data-responsive-from="MD" style="margin-left:240px;margin-top:-45px">
         <div class="menu-collapse u-custom-font u-font-pt-sans" style="font-size: 1.25rem; letter-spacing: 0px; font-weight: 500;">
            <a class="u-button-style u-custom-active-border-color u-custom-active-color u-custom-border u-custom-border-color u-custom-border-radius u-custom-borders u-custom-color u-custom-hover-border-color u-custom-hover-color u-custom-left-right-menu-spacing u-custom-padding-bottom u-custom-text-active-color u-custom-text-color u-custom-text-decoration u-custom-text-hover-color u-custom-text-shadow u-custom-text-shadow-blur u-custom-text-shadow-color u-custom-text-shadow-transparency u-custom-text-shadow-x u-custom-text-shadow-y u-custom-top-bottom-menu-spacing u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="#" style="text-shadow: -2px 0 0 rgba(0,0,0,0); padding: 2px 10px; font-size: calc(1em + 4px);">
               <svg class="u-svg-link" viewBox="0 0 24 24">
                  <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#menu-hamburger"></use>
               </svg>
               <svg class="u-svg-content" version="1.1" id="menu-hamburger" viewBox="0 0 16 16" x="0px" y="0px" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg">
                  <g>
                     <rect y="1" width="16" height="2"></rect>
                     <rect y="7" width="16" height="2"></rect>
                     <rect y="13" width="16" height="2"></rect>
                  </g>
               </svg>
            </a>
         </div>
         <div class="u-custom-menu u-nav-container">
            <ul class="u-custom-font u-font-pt-sans u-nav u-spacing-6 u-unstyled u-nav-1">
               <li class="u-nav-item"><a class="u-active-palette-2-light-1 u-border-active-black u-border-hover-black u-button-style u-hover-palette-5-light-1 u-nav-link u-radius-10 u-text-active-white u-text-black u-text-hover-black u-white" href="index.php" style="padding: 12px 22px;">Home</a></li>
               <li class="u-nav-item"><a class="u-active-palette-2-light-1 u-border-active-black u-border-hover-black u-button-style u-hover-palette-5-light-1 u-nav-link u-radius-10 u-text-active-white u-text-black u-text-hover-black u-white" href="category.php" style="padding: 12px 22px;">Categories</a></li>
               <li class="u-nav-item"><a class="u-active-palette-2-light-1 u-border-active-black u-border-hover-black u-button-style u-hover-palette-5-light-1 u-nav-link u-radius-10 u-text-active-white u-text-black u-text-hover-black u-white" href="developers.php" style="padding: 12px 22px;">Developers</a></li>
               <li class="u-nav-item"><a class="u-active-palette-2-light-1 u-border-active-black u-border-hover-black u-button-style u-hover-palette-5-light-1 u-nav-link u-radius-10 u-text-active-white u-text-black u-text-hover-black u-white" href="forum.php" style="padding: 12px 22px">Forum</a></li>
            </ul>
         </div>
   </div>
   <div id="id01" class="modal" style="display: none;
      position: fixed;
      z-index: 1;
      left: 0;
      top: 0;
      width: 100%;
      height: 100%;
      overflow: auto;
      background-color:rgba(0, 0, 0, 0.8);
      padding-top: 50px;">
   <form id="myFrom" action="server.php" method="post" style="padding-top: 5px; background: transparent;text-align: center; margin: 50px auto;width: 470px; height: 400px; font-family: sans-serif;font-size: 20px;">
   <h1 style="font-size:30px;background-color:white;margin-left: 20px;margin-bottom: 5px;border-radius: 30px;padding: 20px;width: 430px;font-family: fantasy;font-weight: bolder;border: 1px solid;">Log In</h1>
   <div style="border-radius: 30px;border: 1px solid;padding: 20px;width: 430px;margin-left: 20px;background-color:white;">
   <div class="input-group">
   <br><br>
   <input style="height:30px; width: 370px; border: none;padding-left: 10px;" type="text" name="unm" placeholder="Enter Username" required>
   <div style="position: absolute;content: '';height: 2px;margin-left:20px;width:350px ;background: #ccc;"></div>
   </div>
   <br><br>
   <div class="input-group">
   <input style="height:30px; width: 370px;border: none;padding-left: 10px;" type="password" name="pwd" placeholder="Enter Password" required>
   <div style="position: absolute;content: '';height: 2px;margin-left:20px;width:350px ;background: #ccc;"></div>
   </div>
   <br><br>
   <div class="input-group" style="margin-bottom: 20px;">
   <button type="submit" name="login" class="btn" style="font-size:18px; height: 50px;width: 150px;border-radius: 10px;border: 2px solid;background: transparent;">Login</button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
   <button  style="font-size:18px; height: 50px;width: 150px;border-radius: 10px;border: 2px solid;background-image:;" onclick="document.getElementById('id01').style.display='none'">Close</button>
   </div>  
   <h5 align="center" id="register" style="font-size:16px;font-family: fantasy;">create a new account ..? 
   <button class="sign up" style="font-weight: bolder;font-size: 22px ;background: none;right: 20px;top: 10px;width: 100px;height: 50px;border: none;cursor: pointer;" onclick="document.getElementById('id02').style.display='block';document.getElementById('id01').style.display='none'">Sign up</button>
   </h5>  
   </div>
   </form>
   <script>
      var modal=document.getElementById('id01');
      window.onclick= function(event) 
      {
        if(event.target == modal)
        {
          modal.style.display='none';
        }
      }
   </script>
   </div>
   <div id="id02" class="modal2" style="display: none;
      position: fixed;
      z-index: 1;
      left: 0;
      top: 0;
      width: 100%;
      height: 100%;
      overflow: auto;
      background-color:rgba(0, 0, 0, 0.8);
      padding-top: px;">
   <form action="server.php" method="post" style="background: transparent;margin: 50px auto;width: 600px;font-family: sans-serif;font-size: 18px;margin-top: 10px;">
   <h1 style="background-color:white;margin-left: 20px;margin-bottom: 1px;border-radius: 30px;padding: 20px;text-align: center;font-size:35px;font-family: fantasy;font-weight: bolder;">Sign up</h1><br>
   <div style="border-radius: 30px;border: 1px solid;padding: 1px 50px 0 50px;width: 580px;margin-left: 20px;background-color:white;">
   <h4 align="center" id="register" style="font-size:20px;font-family: fantasy;text-transform: none;">Are you Developer..? 
   <button class="sign up" style="font-weight: bolder;font-size: 24px ;background: none;right: 20px;top: 5px;width: 100px;height: 30px;border: none;cursor: pointer;" onclick="document.getElementById('id03').style.display='block';document.getElementById('id02').style.display='none'">Sign up</button>
   </h4><hr>
   <div class="input-group" style="margin-bottom:5px;padding-top: 20px;">
   <label style="text-transform: none;">Name : </label>
   <input style="width: 300px; float: right;border: 1px solid;padding-left: 10px;" type="text" name="name" placeholder="Enter Name" required>
   </div>
   <br>
   <div class="input-group" style="margin-bottom:5px">
   <label style="text-transform: none;">Username : </label>
   <input style="width: 300px; float: right;border: 1px solid;padding-left: 10px;" type="text" name="uname" placeholder="Enter Username"required>
   </div><br>
   <div class="input-group" style="margin-bottom:5px">
   <label style="text-transform: none;">Mobile no. : </label>
   <input style="width: 300px; float: right;border: 1px solid;padding-left: 10px;" type="tel" name="no" placeholder="Enter Mobile no" maxlength="10" minlength="10" required>
   </div>
   <br>
   <div class="input-group" style="margin-bottom:5px">
   <label style="text-transform: none;">Email ID : </label>
   <input style="width: 300px; float: right; border: 1px solid;padding-left: 10px;" type="email" name="email" placeholder="example@gmail.com"required>
   </div>
   <br>
   <div class="input-group" style="margin-bottom:5px">
   <label style="text-transform: none;">Password : </label>
   <input style="width: 300px; float: right;border: 1px solid; padding-left: 10px;" type="password" name="password_1" placeholder="******"required>
   </div>
   <br>
   <div class="input-group" style="margin-bottom:2px">
   <label style="text-transform: none;">Confirm Password : </label>
   <input style="width: 300px; float: right; border: 1px solid;padding-left: 10px;" type="password" name="password_2" placeholder="******"required>
   </div>
   <br><br>
   <div  align="center" style="margin-bottom:5px">
   <button type="submit" name="reguser" class="btn-reg" style="font-size:18px;border-radius: 10px;height:50px;width:200px;border:2px solid;">Register As Buyer</button>
   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
   <button style="font-size:18px;height:50px;width:200px;border-radius: 10px;border:2px solid;"onclick="document.getElementById('id02').style.display='none'">Close</button>
   <h4 align="center" id="register" style="font-size:20px;font-family: fantasy;text-transform: none;">Already Registered ..?
   <button class="sign up" style="font-weight: bolder;font-size: 24px ;background: none;right: 15px;top: 5px;width: 90px;height: 25px;border : none;cursor: pointer;" onclick="document.getElementById('id01').style.display='block';document.getElementById('id02').style.display='none'">Log in</button>
   </h4>
   </div><br>
   </div> 
   </form>     
   <script>
      var modal2=document.getElementById('id02');
      window.onclick= function(event) 
      {
        if(event.target == modal2)
        {
          modal2.style.display='none';
        }
      }
   </script>  
   </div>
   <div id="id03" class="modal3" style="display: none;
      position: fixed;
      z-index: 1;
      left: 0;
      top: 0;
      width: 100%;
      height: 100%;
      overflow: auto;
      background-color:rgba(0, 0, 0, 0.8);
      padding-top: px;">
   <form action="server.php" method="post" style="background: transparent;margin: 50px auto;width: 600px;font-family: sans-serif;font-size: 18px;margin-top: 10px;">
   <h1 style="background-color:white;margin-left: 20px;margin-bottom: 1px;border-radius: 30px;padding: 20px;text-align: center;font-size:35px;font-family: fantasy;font-weight: bolder;">Sign up</h1><br>
   <div style="border-radius: 30px;border: 1px solid;padding: 1px 50px 0 50px;width: 580px;margin-left: 20px;background-color:white;">
   <div class="input-group" style="margin-bottom:5px;padding-top: 30px;">
   <label style="text-transform: none;">Name : </label>
   <input style="width: 300px; float: right;border: 1px solid;padding-left: 10px;" type="text" name="name" placeholder="Enter Name" required>
   </div>
   <br>
   <div class="input-group" style="margin-bottom:5px">
   <label style="text-transform: none;">Username : </label>
   <input style="width: 300px; float: right;border: 1px solid;padding-left: 10px;" type="text" name="uname" placeholder="Enter Username"required>
   </div><br>
   <div class="input-group" style="margin-bottom:5px">
   <label style="text-transform: none;">Mobile no. : </label>
   <input style="width: 300px; float: right;border: 1px solid;padding-left: 10px;" type="tel" name="no" placeholder="Enter Mobile no" maxlength="10" minlength="10" required>
   </div>
   <br>
   <div class="input-group" style="margin-bottom:5px">
   <label style="text-transform: none;">Email ID : </label>
   <input style="width: 300px; float: right; border: 1px solid;padding-left: 10px;" type="email" name="email" placeholder="example@gmail.com"required>
   </div>
   <br>
   <div class="input-group" style="margin-bottom:5px">
   <label style="text-transform: none;">Password : </label>
   <input style="width: 300px; float: right;border: 1px solid; padding-left: 10px;" type="password" name="password_1" placeholder="******"required>
   </div>
   <br>
   <div class="input-group" style="margin-bottom:2px">
   <label style="text-transform: none;">Confirm Password : </label>
   <input style="width: 300px; float: right; border: 1px solid;padding-left: 10px;" type="password" name="password_2" placeholder="******"required>
   </div>
   <br>
   <div class="input-group">
   <label style="text-transform: none;">Bio : </label>
   <textarea name="bio" style="float: right; height: 50px; width: 300px;border: 1px solid;padding-left: 10px;" required></textarea>
   </div>
   <br>
   <div  align="center" style="margin-bottom:5px;margin-top: 30px">
   <button type="submit" name="regdev" class="btn-reg" style="font-size:18px;border-radius: 10px;height:50px;width:200px;border:2px solid;">Register As Seller</button>
   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
   <button style="font-size:18px;height:50px;width:200px;border-radius: 10px;border:2px solid;"onclick="document.getElementById('id03').style.display='none'">Close</button>
   <h4 align="center" id="register" style="font-size:20px;font-family: fantasy;text-transform: none;">Already Registered ..?
   <button class="sign up" style="font-weight: bolder;font-size: 24px ;background: none;right: 15px;top: 5px;width: 90px;height: 25px;border : none;cursor: pointer;" onclick="document.getElementById('id01').style.display='block';document.getElementById('id03').style.display='none'">Log in</button>
   </h4>
   </div><br>
   </div> 
   </form>     
   <script>
      var modal3=document.getElementById('id03');
      window.onclick= function(event) 
      {
        if(event.target == modal3)
        {
          modal3.style.display='none';
        }
      }
   </script>  
   </div>
   <div id="id04" class="modal4" style="display: none;
      position: fixed;
      z-index: 1;
      left: 0;
      top: 0;
      width: 100%;
      height: 100%;
      overflow: auto;
      background-color:rgba(0, 0, 0, 0.8);
      padding-top: px;">
   <form action="server.php" method="post" style="background: transparent;width: 600px;font-family: sans-serif;font-size: 18px;margin-top: 10px;" >
   <h1 style="background-color:white;margin-left: 330px;margin-bottom: 1px;border-radius: 30px;padding: 20px;text-align: center;font-size:35px;font-family: fantasy;font-weight: bolder;width: 700px;text-transform: none;">Send us a Message</h1><br>
   <div style="border-radius: 30px;border: 1px solid;padding: 40px;width: 700px;margin-top: 10px;margin-left: 330px;background-color:white;">
   <div class="u-form-group u-form-name u-label-none">
   <input type="text" style="margin-bottom:20px;" placeholder="Enter your Name" id="name-fb95" name="name" class="u-border-2 u-border-grey-25 u-border-no-top u-input u-input-rectangle u-radius-10 u-white u-input-1" required>
   </div>
   <div class="u-form-email u-form-group u-label-none">
   <input type="email" style="margin-bottom:20px;" placeholder="Enter a valid email address" id="email-fb95" name="email" class="u-border-2 u-border-grey-25 u-border-no-top u-input u-input-rectangle u-radius-10 u-white u-input-2" required>
   </div>
   <div class="u-form-group u-form-message u-label-none">
   <textarea style="margin-bottom:20px;" placeholder="Enter your message" rows="5" cols="50" id="message-fb95" name="message" class="u-border-2 u-border-grey-25 u-border-no-top u-input u-input-rectangle u-radius-10 u-white" required></textarea>
   </div>
   <div>
   
   <button type="submit" name="contact" class="btn-reg" style="font-size:18px;border-radius: 10px;height:50px;width:300px;border:2px solid;margin-left: 150px;">Submit</button>
   </div>
   </div>
   </form>
   <script>
      var modal4=document.getElementById('id04');
      window.onclick= function(event) 
      {
        if(event.target == modal4)
        {
          modal4.style.display='none';
        }
      }
   </script>  
   </div>
   <div class="u-custom-menu u-nav-container-collapse">
   <div class="u-container-style u-inner-container-layout u-opacity u-opacity-75 u-palette-1-dark-3 u-sidenav u-sidenav-1" data-offcanvas-width="440.7694">
   <div class="u-inner-container-layout u-sidenav-overflow">
   <div class="u-menu-close"></div>
   <ul class="u-align-center u-nav u-popupmenu-items u-spacing-54 u-unstyled u-nav-2">
   <li class="u-nav-item"><a class="u-button-style u-nav-link" href="index.html">Home</a></li>
   <li class="u-nav-item"><a class="u-button-style u-nav-link" href="category.php">Categories</a></li>
   <li class="u-nav-item"><a class="u-button-style u-nav-link">Developers</a></li>
   <li class="u-nav-item"><a class="u-button-style u-nav-link">Forum</a></li>
   </ul>
   </div>
   </div>
   <div class="u-menu-overlay u-opacity u-opacity-0 u-palette-3-base"></div>
   </div>
   </nav>
   </div>
</header>
