<?php
session_start();
?>
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
  </head>

  <body class="size-1280 primary-color-red">
    <!-- PREMIUM FEATURES BUTTON -->
  	
    
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
          <a href="#" class="logo">
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
            <?php
            if(isset($_SESSION['btt']['stu_id']))
            {?>
                <li><a><?php echo $_SESSION['btt']['name']?></a>
                    <ul>
                        <li><a href="welcome.php">My Profile</a></li>
                        <li><a href="courseregister.php">Register in course</a></li>
                        <li><a href="http://braintechtechno.ezyro.com/payment" target="blank">Course Payment</a></li>
                        <li><a href="logout.php">logout</a></li>
                    </ul>
                </li>
            <?php
            }
            else if(isset($_SESSION['bttt']['tea_id']))
            {?>
                <li><a><?php echo $_SESSION['bttt']['name']?></a>
                    <ul>
                        <li><a href="teacherwelcome.php">My Profile</a></li>
                        <li><a href="#">View score of the students</a></li>
                        <li><a href="logout.php">logout</a></li>
                    </ul>
                </li>
            <?php
            }
            else{?>
            <li><a href="login.php">Login/Registration</a></li>
            <?php
            }?>
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
              <b>Contact Us</b>
            </h1>
          
          </div>
    
        </header>
        
        <!-- Section 1 -->
        <section class="full-width background-white">
          <div class="s-12 m-12 l-4">
            <!-- Change the background image -->  
            <div style="background-image: url(img/img-09.jpg);" class="contact-image" ></div>
          </div>
          <div class="s-12 m-12 l-4 text-center">
            <div class="padding-2x">
              <i class="icon-sli-location-pin text-primary text-size-30 center"></i>
              <h2 class="text-size-20 margin-bottom-0 text-strong">Company Address</h2>                
              <p>
                 Narula Institute of Technology<br>
                 Nilgunj Road, North 24 Parganas<br>
                 Kolkata - 700109.
              </p> 
              
              <i class="icon-sli-envelope text-primary text-size-30 center margin-top-20"></i>
              <h2 class="text-size-20 margin-bottom-0 text-strong">E-mail</h2>                
              <a class="text-primary-hover" href="mailto:braitechtechno.info@gmail.com">braitechtechno.info@gmail.com</a><br>
              
              <i class="icon-sli-earphones-alt text-primary text-size-30 center margin-top-20"></i>
              <h2 class="text-size-20 margin-bottom-0 text-strong">Phone Numbers</h2>                
              <p>
                +91 9874563210
              </p> 
            </div>
          </div>
          <div class="s-12 m-12 l-4">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3681.2137093301153!2d88.38303181491291!3d22.683086985126042!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39f89d6226bd0b6d%3A0xb7e64f045fb2d026!2sNarula%20Institute%20Of%20Techonology!5e0!3m2!1sen!2sin!4v1619878665666!5m2!1sen!2sin" width="100%" height="600" style="border:0;" allowfullscreen="" loading="lazy" frameborder="0"></iframe>
            <!--<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d1459734.5702753505!2d16.91089086619977!3d48.577103681657675!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1ssk!2ssk!4v1457640551761" width="100%" height="600" frameborder="0" style="border:0"></iframe>-->
          </div>
        </section>
        
        <!-- Section 3 -->
        <section class="section background-image" style="background-image:url(img/parallax-02.jpg)">
          
          
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
    <link rel="stylesheet" href="css/leaflet.css"/>
    <script src="js/leaflet.js"></script>
    
    <script type="text/javascript" src="js/responsee.js"></script>
    <script type="text/javascript" src="js/plugins.min.js"></script>
    <script type="text/javascript" src="owl-carousel/owl.carousel.js"></script>
    <script type="text/javascript" src="js/jquery.easypiechart.min.js"></script>
    <script type="text/javascript" src="js/template-scripts.js"></script> 
    
  </body>
</html>