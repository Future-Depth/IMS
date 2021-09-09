<!DOCTYPE html>
<html lang="en-US">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Braintech Technologies</title>
	<link rel="icon" href="admin_area/assets/img/icon.png" sizes="32x32" type="image/png">
    <link rel="stylesheet" href="css/components.css">
    <link rel="stylesheet" href="css/icons.css">
    <link rel="stylesheet" href="css/responsee.css">
    <link rel="stylesheet" href="owl-carousel/owl.carousel.css">
    <link rel="stylesheet" href="owl-carousel/owl.theme.css">
    <!-- CUSTOM STYLE -->      
    <link rel="stylesheet" href="css/template-style.css">
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Mrs+Saint+Delafield&display=swap" rel="stylesheet">  
    <script type="text/javascript" src="js/jquery-1.8.3.min.js"></script>
    <script type="text/javascript" src="js/jquery-ui.min.js"></script> 
    <style type="text/css">
      a.move
      {
        color: #bd2000;
      }
      a.move:hover
      {
        color:black;
      }
      @media
    </style>  
  </head>

  <body class="size-1280 primary-color-red">
    <!-- PREMIUM FEATURES BUTTON -->
  	<!-- <a target="_blank" class="hide-s" href="../template/financer-premium-responsive-business-template/" style="position:fixed;top:140px;right:-14px;z-index:10;"><img src="img/premium-features.png" alt=""></a> -->
    
    <!-- HEADER -->
    <header role="banner" class="position-absolute">
      <!-- Top Bar -->
      <div class="top-bar full-width hide-s hide-m">
        <div class="right">
            <a href="tel:9874563210" class="text-white text-primary-hover">more info: 9874 563 210</a> <span class="sep text-white">|</span> <a href="mailto:braintechtechno.info@gmail.com" class="text-white text-primary-hover">write us: braintechtechno.info@gmail.com</a>
        </div>  
      </div>    
      <!-- Top Navigation -->
      <nav class="background-transparent background-transparent-hightlight full-width sticky">
        <div class="s-12 l-2">
          <a href="index.html" class="logo">
            <!-- Logo White Version -->
            <img class="logo-white" src="img/logoblack.png" alt="">
            <!-- Logo Dark Version -->
            <img class="logo-dark" src="img/logo.png" alt="">
          </a>
        </div>
        <div class="top-nav s-12 l-10">
          
          <ul class="right chevron">
            <li><a href="index.php">Home</a></li>
            <li><a href="aboutus.php">About</a></li>
            <li><a href="contact.php">Contact</a></li>
            <li><a href="login.php">Login/Registration</a></li>
          </ul>
        </div>
      </nav>
    </header>
    
    <!-- MAIN -->
    <main role="main">    
      <article>
        <!-- Header -->
        <header class="section-head background-image" style="background-image:url(img/banner.png)">
          <div class="line">
  
            <h1 class="text-white text-s-size-30 text-m-size-40 text-l-size-50 text-size-70 headline">
              <b>Login</b>
            </h1>
          
          </div>
    
        </header>
        
        <!-- Section 1 -->
        <section class="section-top-padding" id="login">      
          <div class="line">
            <div class="margin2x">              
              <div class="m-12 l-6 margin-m-top-30">
                <!-- Image --> 
                <img src="img/login.jpeg" alt="" >
              </div> 
                       
              <div class="m-12 l-6" style="padding-left: 9px">
                <h2 class="text-extra-strong text-size-50 text-m-size-40">Login Into Your Account</h2>
                <p>Login into your account, and view your details. Both Teachers and Students can login in from here.
                </p>
              
                <p>
                 <table align="center">
                  <form method="get" action="login_page.php">
                    <tr><td>DESIGNATION:</td><td><select name="des" required="" autocomplete="off">
                          <option value="">--Select--</option>
                          <option value="student">Student</option>
                          <option value="teacher">Teacher</option>
                        </select>
                      </td></tr>
                  <tr><td>USER ID:</td><td><input type="text" name="uid" required="" autocomplete="off"></td></tr>
                  <tr><td>PASSWORD:</td><td><input type="password" name="pwd" required="" autocomplete="off"></td></tr>
                  <tr><td></td><td><button class="button text-white background-orange margin-bottom-10">Login</button></td></tr>

                  <tr><td>Don't have an account?</td><td><a href="#register" class="move">Create One</a></td></tr>
                </form>
                </table>
                </p>
              </div>
            </div>    
          </div>      
        </section>



        
        
        
        <!-- Section 2 -->
        <section class="section" id="register">      
          <div class="line">
            <div class="margin2x">              
              <div class="m-12 l-6 margin-m-top-30">
                <!-- Image --> 
                <img src="img/register.jpeg" alt="">
              </div> 
                       
              <div class="m-12 l-6" style="padding-left: 9px">
                <h2 class="text-extra-strong text-size-50 text-m-size-40">Register Youself</h2>
                <p>Only Students are requested to register themselves
                </p>
              
                <p >
                 <table align="center">
                  <form method="post" action="stu_registration.php"  enctype="multipart/form-data">
                  <tr><td>NAME:</td><td><input type="text" name="n" required="" autocomplete="off"></td></tr>
                  <tr><td>EMAIL ID:</td><td><input type="email" name="em" required="" autocomplete="off"></td></tr>
                  <tr><td>CONTACT NUMBER:</td><td><input type="number" name="no" required="" autocomplete="off"></td></tr>
                  <tr><td>ADDRESS:</td><td><textarea name="add" required="" autocomplete="off"></textarea></td></tr>
                  <tr><td>CREATE PASSWORD:</td><td><input type="password" name="pwd" required="" autocomplete="off"></td></tr>
                  <tr><td>GENDER:</td><td><select name="gen" required="" autocomplete="off">
                          <option value="">--Select--</option>
                          <option value="Male">Male</option>
                          <option value="Female">Female</option>
                          <option value="Others">Others</option>
                        </select>
                      </td></tr>
                  <tr><td>UPLOAD PHOTO:</td><td><input type="file" name="pht" required="" autocomplete="off"></td></tr>
                  <tr><td></td><td><button class="button text-white background-orange margin-bottom-10">Register</button></td></tr>
                    <?php
                    if(isset($_GET['msg'])){
                        $msg=$_GET['msg'];
                        if($msg=="done")
                        {
                            $id=$_GET['id'];
                            ?><tr><td>STATUS:</td><td>Registration Sussesful</td></tr>
                            <tr><td>YOUR USER ID:</td><td><?php echo $id?></td></tr>
                            <?php
                        }
                        else if($msg="prsent")
                        {
                            ?><tr><td>STATUS:</td><td>Id is already present. Please Login using the User ID</td></tr><?php
                        }
                        else
                        {
                            ?><tr><td>STATUS:</td><td>Registration Not Sussesful</td></tr><?php
                        }
                    }?>
                  <tr><td>Already have an account?</td><td><a href="#login" class="move">Login Now</a></td></tr>
                </form>
                </table>
                </p>
              </div>
            </div>    
          </div>      
        </section>
        
        <!-- Section 3 -->
        <section class="section text-center background-primary">  
          <div class="line">
            <p class="text-white text-handwrite text-size-90 margin-bottom-20 text-line-height-1">Dream bigger. Do bigger.</p>
            <p class="text-white">
               
            </p>
          </div>
        </section>
        
        
        <!-- Section 4 -->
        <section class="section background-image" style="background-image:url(img/parallax-06.jpg)">
          <div class="line text-center">
            <h2 class="text-white text-extra-strong text-size-80 text-m-size-40">Do you need help?</h2>
            <p class="text-white"> </p>
          </div>            
          <div class="line">  
            <div class="s-12 m-12 l-3 center">
              <a href="contact.php" class="s-12 button border-radius background-primary text-size-20 text-white">Contact Us</a>
            </div>
          </div>
            
          <!-- red full width arrow object -->
          <img class="arrow-object" src="img/object-red.svg" alt="">
        </section>
      </article>  

    </main>
    
    <!-- FOOTER -->
    <footer>
      <!-- Social -->
      <div class="background-primary padding text-center">
        <a href="/"><i class="icon-facebook_circle text-size-30 text-white"></i></a> 
        <a href="/"><i class="icon-twitter_circle text-size-30 text-white"></i></a>
        <a href="/"><i class="icon-google_plus_circle text-size-30 text-white"></i></a>
        <a href="/"><i class="icon-instagram_circle text-size-30 text-white"></i></a> 
        <a href="/"><i class="icon-linked_in_circle text-size-30 text-white"></i></a>                                                                       
      </div>
      <!-- Main Footer -->
      <section class="section background-dark">
        <div class="line"> 
          <div class="margin2x">
            <div class="hide-s hide-m hide-l xl-2">
               <img src="img/footer.jpg" alt="">
            </div>
            <div class="s-12 m-6 l-3 xl-3">
               <h4 class="text-white text-strong">Our Mission</h4>
               <p>
                 Our Road Map starts with our mission, which is providing knowledge. It declares our purpose as a company and serves as the standard against which we weigh our actions and decisions.
               </p>
            </div>
            <div class="s-12 m-6 l-3 xl-2">
               <h4 class="text-white text-strong margin-m-top-30">Useful Links</h4>
               <a class="text-primary-hover" href="aboutus.php">About us</a><br>      
               <a class="text-primary-hover" href="contact.php">Contact Us</a><br>
               
            </div>
            
            <div class="s-12 m-6 l-3 xl-3">
               <h4 class="text-white text-strong margin-m-top-30">Contact Us</h4>
                <a class="text-primary-hover" href="tel:9874563210"><i class="icon-sli-screen-smartphone text-primary"></i> 9874 563 210</a><br>
                <a class="text-primary-hover" href="mailto:braintechtechno.info@gmail.com"><i class="icon-sli-mouse text-primary"></i> braintechtechno.info@gmail.com</a><br>
                <a class="text-primary-hover" href="mailto:braintechtechno.info@protonmail.com"><i class="icon-sli-mouse text-primary"></i> braintechtechno.info@protonmail.com</a>
            </div>
          </div>  
        </div>    
      </section>
      <div class="background-dark">
        <hr class="break margin-top-bottom-0" style="border-color: #777;">
      </div>
      <!-- Bottom Footer -->
      
    </footer>
    <script type="text/javascript" src="js/responsee.js"></script>
    <script type="text/javascript" src="owl-carousel/owl.carousel.js"></script>
    <script type="text/javascript" src="js/template-scripts.js"></script> 
    
  </body>
</html>