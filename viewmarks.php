<?php
//$con=mysqli_connect("sql113.ezyro.com","ezyro_28159409","z7n0ky94i","ezyro_28159409_ims");
$con=mysqli_connect("localhost","root","","braintech");
session_start();
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
        .markslist table tr th
        {
        background-color: #194350;
        color: white;
        }
        .markslist table tr:nth-child(even)
        {
        background-color: #e4fbff;
        }
        .markslist img
        {
            height:80px;
            width:80px;
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
      
        <!-- Header -->
        <header class="section-head background-image" style="background-image:url(img/banner.png)">
          <div class="line">
  
            <h1 class="text-white text-s-size-30 text-m-size-40 text-l-size-50 text-size-70 headline">
              <b>Marks</b>
            </h1>
          
          </div>
    
        </header>
      
            <div class="profileimg">
              <!-- Image --> 
              <div class="line">
                <h2 class="text-extra-strong text-size-80 text-m-size-40 margin-bottom-40">Welcome <?php echo $_SESSION['bttt']['name'] ?></h2>
              </div>
              
             </div>
      
      <!-- Section 3 -->
      <section>
        <center><font size="5"  color="black">View the marks of Students by the Course Id</font></center>
            <table border='2' align="center"><form method="post" action="">
                               <tr><td>COURSE ID : </td><td><input type="text" name="cid" required="" autocomplete="off"></td></tr>
                               <tr><td></td><td><button class="btn btn-primary btn-lg">Search</button></td></tr>
                                        </form></table>
                                        <br><br>

        <?php
$cid=$_POST['cid'];
$s=mysqli_query($con,"select s.name,c.c_name,m.marks,s.photo from marks as m inner join course as c on m.c_id=c.c_id inner join student as s on s.stu_id=m.stu_id where m.c_id='$cid'");
if(mysqli_num_rows($s)>0)
{  
?>
<center>
<p><h2>SEARCH FOUND</h2></p></center>

          <center><h2 class="text-extra-strong text-size-80 text-m-size-40 margin-bottom-40">Marks List</h2></center>
          <div class="markslist">
<table border=2 align="center">
                                        <tr><th>STUDENT NAME</th>
                                            <th>COURSE NAME</th>
                                            <th>MARKS</th>
                                            <th>PHOTO</th>
                                            </tr>
                                            <?php 
                                        while($r=mysqli_fetch_array($s))
                                        {
                                            ?>
                                            <tr><td><?php echo($r['name']);?></td>
                                                <td><?php echo($r['c_name']);?></td>
                                                <td><?php echo($r['marks']);?></td>
                                                <td><img src="<?php echo($r['photo']);?>" ></td>
                                                </tr>
                                            <?php
                                        }
                                        ?>
                                        </table></div>
			
			


<?php 
}
else if(mysqli_num_rows($s)<=0)
{
    ?><center>
<p><h2>SEARCH NOT FOUND</h2></p></center><?php
}
?>
<br>
      </section>
      
      <!-- Section 4 -->
      
      
      
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
      
      
      <!-- Section 7 -->

      
      <!-- Section 8 -->
      
          
        <!-- red full width arrow object -->
        
     

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