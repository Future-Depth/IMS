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
          <a href="#l" class="logo">
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
              <b>About Us</b>
            </h1>
          
          </div>
    
        </header>
        
        <!-- Section 1 -->
        <section class="section-top-padding">      
          <div class="line">
            <div class="margin2x">         
              <div class="m-12 l-6">
                <h2 class="text-extra-strong text-size-80 text-m-size-40">Why choose us?</h2>
                
                <p class="text-dark text-size-25 margin-bottom-30">
                Online courses use computer technologies that translate traditional classroom instruction into learning in new and innovative ways.
                </p>
                
                <p class="text-strong text-size-25 margin-bottom-30">Through creative problem solving, collaboration, and reflection we provide an environment for growth in teaching and learning in an effort to best support our students, faculty and staff.</p>

              </div>
              
              <div class="m-12 l-6 margin-m-top-30">
                <!-- Image --> 
                <img src="img/img-01.jpg" alt="">
              </div> 
            </div>    
          </div>      
        </section>
        
        <!-- Section 2 -->
        <section class="section">      
          <div class="line">
            <div class="margin2x">              
              <div class="m-12 l-6 margin-m-top-30">
                <!-- Image --> 
                <img src="img/img-15.jpg" alt="">
              </div> 
                       
              <div class="m-12 l-6">
                <h2 class="text-extra-strong text-size-80 text-m-size-40">Who we are?</h2>
               <p>Braintech Technologies is the company whose main motive is to train the people of the world with some more knowledge in various courses thrugh online medium.
                </p>
              
                <p class="padding background-orange text-white">
                The Braintech Technologies conduct various examinations in order to test the intelligence on a particular course(s) chosen by the student who are pusuing the courses with us. 
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
            <p class="text-white"></p>
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