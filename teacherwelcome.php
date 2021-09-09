<?php
session_start();
//$con=mysqli_connect("sql113.ezyro.com","ezyro_28159409","z7n0ky94i","ezyro_28159409_ims");
$con=mysqli_connect("localhost","root","","braintech");
include 'session_checkteacher.php';
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
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
	<script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
	<link href="css/bootstrap.css" rel="stylesheet">
    
    <!-- CUSTOM STYLE -->      
    <link rel="stylesheet" href="css/template-style.css">
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Mrs+Saint+Delafield&display=swap" rel="stylesheet">  
    <script type="text/javascript" src="js/jquery-1.8.3.min.js"></script>
    <script type="text/javascript" src="js/jquery-ui.min.js"></script> 
    <style>
        .profileimg img
        {
            width:250px;
            height:auto;
            border-radius:100%;
        }
        .profileimg
        {
            text-align:center;
        } 
        .courseimg img{
            filter: brightness(40%);
            width:50vw;
            height:60vh;
        }  
        </style>
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
          
          <ul class="right chevron" method="post">
            <li><a href="index.php" name="ms" value="continue">Home</a></li>
            <li><a href="aboutus.php" name="ms" value="continue">About</a></li>
            <li><a href="contact.php" name="ms" value="continue">Contact</a></li>
            <li><a><?php echo $_SESSION['bttt']['name']?></a>
                    <ul>
                        <li><a href="teacherwelcome.php">My Profile</a></li>
                        <li><a href="viewmarks.php">View score of the students</a></li>
                        <li><a href="logout.php">logout</a></li>
                    </ul>
                </li>
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
              <b>Welcome</b>
            </h1>
          
          </div>
    
        </header>
      
            <div class="profileimg">
              <!-- Image --> 
              <center><img src="admin_area/<?php echo $_SESSION['bttt']['photo'] ?>" alt=""></center>
              <div class="line">
                <h2 class="text-extra-strong text-size-80 text-m-size-40 margin-bottom-40">Welcome <?php echo $_SESSION['bttt']['name'] ?></h2>
              </div>
              
             </div>


             <!--<div class="container-fluid">
            <div class="row jumbotron">
                <div class="col-xs-12 col-sm-12 col-md-9 col-lg-9 col-xl-10">
                    <p class="lead">Complete your Profile.</p>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 col-xl-2">
                    <a href="#"><button type="button" class="btn btn-outline-secondary btn-lg">Edit Profile</button></a>
                </div>
            </div>
        </div>-->

      <!-- Section 1 -->
      
      
      <!-- Section 3 -->
      <!--<section class="full-width background-grey">
        <div class="s-12 m-12 l-6">
          <!-- Image  
          <img src="img/img-09.jpg" alt="">
        </div>
        <div class="s-12 m-12 l-6">
          <!-- Texts 
          <div class="padding-2x">
            <div class="line"> 
                <h2 class="text-extra-strong text-size-80 text-m-size-40 margin-bottom-40">What about Accordion?</h2>
                <p class="text-dark text-size-20 margin-bottom-30">Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum. Mirum est notare quam littera gothica. Dolor in hendrerit in vulputate velit esse molestie consequat.</p>
                
                <!-- Accordion 
                <div class="accordion">
                  <!-- Accordion section     
                  <div class="accordion-section">		
                      <h2 class="accordion-title background-primary text-white">Interdum volutpat dis eget eligendi?</h2>								
                      <div class="accordion-content"> 
                        <p class="text-dark">At aenean etiam suspendisse ultricies auctor per nihil nisi. Ullam fermentum urna varius et saepe labore dignissim consectetuer fusce elementum. Lorem ipsum dolor si amet taciti sunt torquent ipsam proin montes quia netus quo minima sint.</p>								                     	    		
                      </div>
                  </div>
                  <!-- Accordion section 
                  <div class="accordion-section">		
                      <h2 class="accordion-title background-primary text-white">Claritas est etiam processus dynamicus?</h2>								
                      <div class="accordion-content"> 
                        <p class="text-dark">Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum. Mirum est notare quam littera gothica. Dolor in hendrerit in vulputate velit esse molestie consequat. Con nonummy sem integer interdum volutpat dis eget eligendi aliquip dolorum magnam. Lorem ipsum dolor si amet taciti sunt torquent ipsam proin montes quia netus quo minima sint. At aenean etiam suspendisse ultricies auctor per nihil nisi. Ullam fermentum urna varius et saepe labore dignissim consectetuer fusce elementum.</p>								                     	    		
                      </div>
                  </div>
                  <!-- Accordion section 
                  <div class="accordion-section">		
                      <h2 class="accordion-title background-primary text-white">Mutationem consuetudium lectorum?</h2>								
                      <div class="accordion-content"> 
                        <p class="text-dark">Con nonummy sem integer interdum volutpat dis eget eligendi aliquip dolorum magnam. Lorem ipsum dolor si amet taciti sunt torquent ipsam proin montes quia netus quo minima sint. At aenean etiam suspendisse ultricies auctor per nihil nisi. Ullam fermentum urna varius et saepe labore dignissim consectetuer fusce elementum.</p>								                     	    		
                      </div>
                  </div>
               </div>
              
            </div>
          </div>
        </div>
      </section>-->
      
      <!-- Section 4 -->
      <section class="section background-dark">  
        <div class="line">
          <h2 class="text-white text-extra-strong text-size-80 text-m-size-40 margin-bottom-40">Your Details</h2>
        </div>
        <div class="line">
          <div class="margin">
            <div class="s-12 m-12 l-3">
              <div class="block">
                <div class="count-to">
                  <span class="timer h1 text-size-30 text-orange">Email ID</span>
                  <p class="h1 text-size-20 margin-top-10 text-white text-thin"><?php echo $_SESSION['bttt']['email'] ?></p> 
                </div>
              </div>
            </div>
            <div class="s-12 m-12 l-3">
              <div class="block">
                <div class="count-to">
                  <span class="timer h1 text-size-30 text-green">Phone Number</span>
                  <p class="h1 text-size-20 margin-top-10 text-white text-thin"><?php echo $_SESSION['bttt']['phone'] ?></p> 
                </div>
              </div>
            </div>
            <div class="s-12 m-12 l-3">
              <div class="block">
                <div class="count-to">
                  <span class="timer h1 text-size-30 text-light-blue">Address</span>
                  <p class="h1 text-size-20 margin-top-10 text-white text-thin"><?php echo $_SESSION['bttt']['address'] ?></p> 
                </div>
              </div>
            </div>
            <div class="s-12 m-12 l-3">
              <div class="block">
                <div class="count-to">
                  <span class="timer h1 text-size-30 text-red">Edit Details</span>
                  <p class="h1 text-size-20 margin-top-10 text-white text-thin"><a class="button text-white background-primary margin-bottom-60" href="edit_tea.php">Edit</a></p> 
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      
      
      <!-- Section 5 -->
      <section class="section-top-bottom-padding">  
        <div class="line">
          <h2 class="text-extra-strong text-size-80 text-m-size-40 margin-bottom-40">My Teaching Courses</h2>
        </div>
        
        <!-- Image / Text Carousel -->
        <div class="carousel-center owl-carousel carousel-main carousel-hide-pagination nav-bottom text-center">
        
        <?php
        $i=1;
        $tid=$_SESSION['bttt']['tea_id'];
        $sql="SELECT * from teachercourse INNER JOIN course ON course.c_id = teachercourse.c_id WHERE teachercourse.tea_id='$tid'";
        $s=mysqli_query($con,$sql);
       while($r=mysqli_fetch_array($s))
        {?>
          <div class="item">
            <div class="image-with-text-overlay">
              <div class="image-text-overlay"> 
                <div class="image-text-overlay-content padding-2x">
                  <!-- Text -->
                  <p class="text-orange text-size-30 margin-bottom-10"><?php echo($i) ?></p>
                  <h3 class="text-white text-size-30 text-strong"><?php echo($r['c_name']) ?></h3>
                  <p class="text-white"></p> 
                </div> 
              </div>  
              <!-- Photo -->
              <span class="courseimg">
              <img src="admin_area/<?php echo($r['photo']) ?>" ></span>
            </div>                                                                                                                                                                          
          </div>
          <?php
            $i=$i+1;   
             }?>
          
          </div>
      </section>        
              
              
      
      <!-- Section 6 -->
      
      
      <!-- Section 6 -->
      <section class="section background-image" style="background-image:url(img/parallax-04.jpg)">  
        <div class="line">
          <h2 class="text-white text-extra-strong text-size-80 text-m-size-40 margin-bottom-40"><span class="text-orange">Without Teachers,</span> Life would have no CLASS</h2>
          <p class="text-white text-size-20 margin-bottom-30">
            <font size="5">The fact that you worry about being a good teacher, means that you already are one.</font>
          </p>
          <p class="text-white text-size-20 margin-bottom-30">
            <font size="5">"The art of Teaching is the art of Assisting Discovery" - by Mark Van Doren</font>
          </p>
           
        </div>
      </section>
      <br><br>
      <!-- Section 7 -->
      

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