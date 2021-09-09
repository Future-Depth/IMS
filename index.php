<?php
session_start();
//$con=mysqli_connect("sql113.ezyro.com","ezyro_28159409","z7n0ky94i","ezyro_28159409_ims");
$con=mysqli_connect("localhost","root","","braintech");
$s=mysqli_query($con,"select * from course");
$cn=mysqli_num_rows($s);
$s=mysqli_query($con,"select * from student");
$sn=mysqli_num_rows($s);
$s=mysqli_query($con,"select * from teacher");
$tn=mysqli_num_rows($s);
$succ=($cn/$sn)*100;
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
    <style>
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
      <!-- Main Carousel -->
      <header class="carousel-default owl-carousel carousel-main carousel-nav-white background-dark">
        
        <div class="item">
          <div class="s-12 center">
            <!-- For ZOOM effect add classes "background-image-zoom-out" or "background-image-zoom-in" -->
            <div class="section background-image-zoom-out">
              <!-- ZOOMED Carousel Image -->
              <div class="background-image background-image-object" style="background-image:url(img/front1.png);filter: brightness(50%)"></div>
                            
              <div class="line">
                <p class="animated-carousel-element text-strong text-white text-s-size-30 text-m-size-40 text-l-size-50 text-size-80 text-line-height-1 margin-bottom-40 margin-top-130">
                  Braintech <span class="text-orange animated-carousel-element">Technologies</span><br>
                </p>
                <div class="m-12 l-8">
                  <p class="animated-carousel-element text-white text-size-20 margin-bottom-30">
                    <b><font size='5'>An investment in KNOWLEDGE always pays the best INTEREST.</font></b>
                  </p>
                  <a class="button text-white background-primary margin-bottom-60" href="aboutus.php">About Us</a> <a class="button text-white background-orange margin-bottom-60" href="contact.php">Contact Us</a>
                </div>
              </div>

            </div>
          </div>
        </div>
        
        <div class="item">
          <div class="s-12 center">
            <!-- For ZOOM effect add classes "background-image-zoom-out" or "background-image-zoom-in" -->
            <div class="section background-image-zoom-out">
              <!-- ZOOMED Carousel Image -->
              <div class="background-image background-image-object" style="background-image:url(img/front2.png);filter: brightness(70%)"></div>
              
              <div class="line">
                <p class="animated-carousel-element text-strong text-white text-s-size-30 text-m-size-40 text-l-size-50 text-size-80 text-line-height-1 margin-bottom-40 margin-top-130">
                  With the <span class="text-orange animated-carousel-element">Many</span> Variants<br> 
                  of Courses
                </p>
                <div class="m-12 l-8">
                  <p class="animated-carousel-element text-white text-size-20 margin-bottom-30">
                    <font size='5'>We provide the students a scope to enroll in multiple courses.</font> 
                  </p>
                  <a class="button text-white background-primary margin-bottom-60" href="aboutus.php">About Us</a> <a class="button text-white background-orange margin-bottom-60" href="contact.php">Contact Us</a> 
                </div>
              </div>

            </div>
          </div>
        </div>
        
        <div class="item">
          <div class="s-12 center">
            <!-- For ZOOM effect add classes "background-image-zoom-out" or "background-image-zoom-in" -->
            <div class="section background-image-zoom-out">
              <!-- ZOOMED Carousel Image -->
              <div class="background-image background-image-object" style="background-image:url(img/front3.png);filter: brightness(70%)"></div>
              
              <div class="line">
                <p class="animated-carousel-element text-strong text-white text-s-size-30 text-m-size-40 text-l-size-50 text-size-80 text-line-height-1 margin-bottom-40 margin-top-130">
                  And <span class="text-orange animated-carousel-element">Tons</span> of Recycled<br>
                  Knowledge
                </p>
                <div class="m-12 l-8">
                  <p class="animated-carousel-element text-white text-size-20 margin-bottom-30">
                    <!--An investment in KNOWLEDGE always pays the best INTEREST.-->
                    <font size='5'>We should be flexible enough so that everyday we are in a position to learn and recycle the knowledge we have.</font>
                  </p>
                  <a class="button text-white background-primary margin-bottom-60" href="aboutus.php">About Us</a> <a class="button text-white background-orange margin-bottom-60" href="contact.php">Contact Us</a> 
                </div>
              </div>

            </div>
          </div>
        </div>
                     
      </header>
      
      <!-- Section 1 -->
      <section class="section-top-padding background-white">      
        <div class="line">
          <h2 class="text-extra-strong text-size-80 text-m-size-40 margin-bottom-40">Our Team</h2>
        </div>
        <div class="line">
          <div class="margin2x">
             <!-- Image 1 -->
             <div class="s-12 m-6 l-3 margin-m-bottom-30">
                <div class="image-with-hover-overlay">
                  <div class="image-hover-overlay background-dark"> 
                    <div class="image-hover-overlay-content padding">
                      <!-- Text -->
                      <p class="text-white">B.Tech -- CSE -- Narula Institute of Technology</p>
                    </div> 
                  </div>  
                  <!-- Photo -->
                  <img src="img/bidisa.png"/>
                </div>                                                                                                                                                                                                              
                <div class="margin-top">                          
                  <!-- Title -->
                  <h3 class="text-strong">Bidisa Saha</h3>                                                                                                                                                                                                                                                                                                                                                                                
                </div>
             </div>
             
             <!-- Image 2 -->
             <div class="s-12 m-6 l-3 margin-m-bottom-30">
                <div class="image-with-hover-overlay">
                  <div class="image-hover-overlay background-dark"> 
                    <div class="image-hover-overlay-content padding">
                      <!-- Text -->
                      <p class="text-white">B.Tech -- CSE -- Narula Institute of Technology</p>
                    </div> 
                  </div>  
                  <!-- Photo -->
                  <img src="img/shrayanika.png"/>
                </div>                                                                                                                                                                                                              
                <div class="margin-top">                          
                  <!-- Title -->
                  <h3 class="text-strong">Shrayanika Saha</h3>                                                                                                                                                                                                                                                                                                                                                                                
                </div>
             </div>
             
             <!-- Image 3 -->
             <div class="s-12 m-6 l-3 margin-m-bottom-30">
                <div class="image-with-hover-overlay">
                  <div class="image-hover-overlay background-dark"> 
                    <div class="image-hover-overlay-content padding">
                      <!-- Text -->
                      <p class="text-white">B.Tech -- CSE -- Narula Institute of Technology</p>
                    </div> 
                  </div>  
                  <!-- Photo -->
                  <img src="img/tirthadeep2.png"/>
                </div>                                                                                                                                                                                                              
                <div class="margin-top">                          
                  <!-- Title -->
                  <h3 class="text-strong">Tirthadeep Basak</h3>                                                                                                                                                                                                                                                                                                                                                                                
                </div>
             </div>
             
             <!-- Image 4 -->
             <div class="s-12 m-6 l-3 margin-m-bottom-30">
                <div class="image-with-hover-overlay">
                  <div class="image-hover-overlay background-dark"> 
                    <div class="image-hover-overlay-content padding">
                      <!-- Text -->
                      <p class="text-white">B.Tech -- CSE -- Narula Institute of Technology</p>
                    </div> 
                  </div>  
                  <!-- Photo -->
                  <img src="img/soham.png"/>
                </div>                                                                                                                                                                                                              
                <div class="margin-top">                          
                  <!-- Title -->
                  <h3 class="text-strong">Soham Mukhopadhyay</h3>                                                                                                                                                                                                                                                                                                                                                                                
                </div>
             </div>
          </div>                                                                                                
        </div>       
      </section>
      
      <!-- Section 2 -->
      <section class="section background-white">
        <div class="line">
          <h2 class="text-extra-strong text-size-80 text-m-size-40 margin-bottom-40">Who We Are?</h2>
        </div>
        <div class="line">
          <div class="margin2x">
            <div class="m-12 l-6">
              <h3 class="text-strong">Ideal site for E-Knowledge</h3>
              <p class="margin-bottom-30">Braintech Technologies brings a brand new way of thinking for the students. We prepare our students as per the Real-life Industry Requirements. Students experience a pre-launch environment in Braintech Technologies and become potential Industry leaders. Here, their future will be shaped by Experienced Trainers, Industry leaders, and Engineers. We feed their hidden X-factor and cultivate them to bloom like never before. </p>
              
              <!-- Icons -->              
              <div class="line">
                <div class="float-left">
                  <i class="icon-sli-cup icon2x text-primary"></i>
                </div>
                <div class="margin-left-50 margin-bottom-30">
                  <h3 class="text-strong">Real Time Solution</h3>
                  <p>Questions from the students are solved within 24 hours.</p>            
                </div>
              </div>
              
              <div class="line">
                <div class="float-left">
                  <i class="icon-sli-puzzle icon2x text-primary"></i>
                </div>
                <div class="margin-left-50 margin-bottom-30">
                  <h3 class="text-strong">Platform for Competitive Programming</h3>
                  <p>In addition to online courses we also provide a platform for competitive programming.</p>            
                </div>
              </div>

            </div>
          
            <div class="m-12 l-6 margin-m-bottom-30">
              <!-- Image --> 
              <img src="img/e-learning.png" alt="">
            </div>          
            
          </div>    
        </div>  
      </section>
      
      <!-- Section 3 -->
      <section class="full-width background-grey">
        <div class="s-12 m-12 l-6">
          <!-- Image -->  
          <img src="img/img-09.jpg" alt="">
        </div>
        <div class="s-12 m-12 l-6">
          <!-- Texts -->
          <div class="padding-2x">
            <div class="line"> 
                <h2 class="text-extra-strong text-size-80 text-m-size-40 margin-bottom-40">FAQ</h2>
                <p class="text-dark text-size-20 margin-bottom-30">The various questions that were asked.</p>
                
                <!-- Accordion -->
                <div class="accordion">
                  <!-- Accordion section -->    
                  <div class="accordion-section">		
                      <h2 class="accordion-title background-primary text-white">What Kind of courses are taught?</h2>								
                      <div class="accordion-content"> 
                        <p class="text-dark">We provide different types of courses to the students which will helpful in building their career and also provide students with a hand-on project on the respective course that they choose.</p>								                     	    		
                      </div>
                  </div>
                  <!-- Accordion section -->
                  <div class="accordion-section">		
                      <h2 class="accordion-title background-primary text-white">What is the duration of course?</h2>								
                      <div class="accordion-content"> 
                        <p class="text-dark">Normally the course duration varies from 6 weeks to 8 weeks.</p>								                     	    		
                      </div>
                  </div>
                  <!-- Accordion section -->
                  <div class="accordion-section">		
                      <h2 class="accordion-title background-primary text-white">Will there be any exam for the course?</h2>								
                      <div class="accordion-content"> 
                        <p class="text-dark">Yes, the students have to give the exam before they participate in the hand-on project week.</p>								                     	    		
                      </div>
                  </div>
               </div>
              
            </div>
          </div>
        </div>
      </section>
      <br>
    <br>
    <br>
      <!-- Section 4 -->
      <section class="section background-dark">  
        <div class="line">
          <h2 class="text-white text-extra-strong text-size-80 text-m-size-40 margin-bottom-40">Our Numbers</h2>
        </div>
        <div class="line">
          <div class="margin">
            <div class="s-12 m-12 l-3">
              <div class="block">
                <div class="count-to">
                  <span class="timer h1 text-size-60 text-orange"><b><?php echo($cn); ?></b></span>
                  <p class="h1 text-size-20 margin-top-10 text-white text-thin"><b>Number of Courses offered</b></p> 
                </div>
              </div>
            </div>
            <div class="s-12 m-12 l-3">
              <div class="block">
                <div class="count-to">
                  <span class="timer h1 text-size-60 text-green"><b><?php echo($tn); ?></b></span> 
                  <p class="h1 text-size-20 margin-top-10 text-white text-thin"><b>Number of Faculty Members</b></p> 
                </div>
              </div>
            </div>
            <div class="s-12 m-12 l-3">
              <div class="block">
                <div class="count-to">
                  <span class="timer h1 text-size-60 text-light-blue"><b><?php echo($sn); ?></b></span>
                  <p class="h1 text-size-20 margin-top-10 text-white text-thin"><b>Number of Students enrolled</b></p> 
                </div>
              </div>
            </div>
            <div class="s-12 m-12 l-3">
              <div class="block">
                <div class="count-to">
                  <span class="timer h1 text-size-60 text-red"><b><?php echo(number_format($succ,2)); ?></b></span> <span class="h1 text-size-60 text-red"><b>%</b></span>
                  <p class="h1 text-size-20 margin-top-10 text-white text-thin"><b>Success Rate</b></p> 
                </div>
              </div>
            </div> 
          </div>
        </div>
      </section>
      
      
      <!-- Section 5 -->
      <section class="section-top-bottom-padding">  
        <div class="line">
          <h2 class="text-extra-strong text-size-80 text-m-size-40 margin-bottom-40">Our Courses</h2>
        </div>
        
        <!-- Image / Text Carousel -->
        <div class="carousel-center owl-carousel carousel-main carousel-hide-pagination nav-bottom text-center">
        
        <?php
        $i=1;
        $sql="select * from course where status='Active'";
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
                  <p class="text-white">Learn <?php echo($r['c_name']) ?> with proper application based project within <?php echo($r['duration']) ?> only at Rs.<?php echo($r['fees']) ?>.</p> 
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
      

    </main>
    <br>
    <br>
    <br>
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