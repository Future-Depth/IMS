<?php
//$con=mysqli_connect("sql113.ezyro.com","ezyro_28159409","z7n0ky94i","ezyro_28159409_ims");
$con=mysqli_connect("localhost","root","","braintech");
session_start();
include 'session_check.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Braintech Technologies</title>
	<link rel="icon" href="assets/img/icon.png" sizes="32x32" type="image/png">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
	<script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
	<link href="assets/style/style.css" rel="stylesheet">
	<style>
	    .kera .tooltiptext {
          visibility: hidden;
          width: 50vw;
          height:auto;
          background-color: black;
          color: #fff;
          text-align: center;
          border-radius: 6px;
          padding: 5px 0;
          /* Position the tooltip */
          position: absolute;
          z-index: 1;
          top: 100%;
          left: 50%;
          margin-left: -60px;
          cursor:pointer;
        }
        
        .kera:hover .tooltiptext {
          visibility: visible;
          cursor:pointer;
        }
        .mela .tooltiptext2 {
          visibility: hidden;
          width: 50vw;
          height:auto;
          background-color: black;
          color: #fff;
          text-align: center;
          border-radius: 6px;
          padding: 5px 0;
        
          /* Position the tooltip */
          position: absolute;
          z-index: 1;
          top: 100%;
          left: 50%;
          margin-left: -60px;
          cursor:pointer;
        }
        
        .mela:hover .tooltiptext2 {
          visibility: visible;
          cursor:pointer;
        }
        .dropdown .dropbtn {
            border: none;
            font-size: 17.6px;
            outline: none;
            color: #00000080;
            padding: 9px 16px 10px 0px;
            background-color: inherit;
            font-family: inherit;
            margin: 0;
            }


            .dropdown-content {
            display: none;
            position: absolute;
            background-color: #f9f9f9;
            min-width: 160px;
            box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
            z-index: 1;
            }

            .dropdown-content a {
            float: none;
            color: black;
            padding: 12px 16px;
            text-decoration: none;
            display: block;
            text-align: left;
            }

            .dropdown-content a:hover {
            background-color: #ddd;
            }

            .dropdown:hover .dropdown-content {
            display: block;
            }
	</style>
</head>
<body>

<!-- Navigation -->
<nav class="navbar navbar-expand-md navbar-light bg-light sticky-top">
	<div class="container-fluid">
		<a class="navbar-brand" href="#"><img src="assets/img/icon.png" height="200px" width="150px"></a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarResponsive">
			<ul class="navbar-nav ml-auto">
				<li class="nav-item active">
					<a class="nav-link" href="index.php">Dashboard</a>
				</li>
				<li class="nav-item dropdown">
					<p class="dropbtn">Manage Teacher 
                    <i class="fa fa-caret-down"></i>
                    </p>
                    <div class="dropdown-content">
                    <a href="teacherlist.php">View Teacher List</a>
                    <a href="teacherinsert.php">Insert Teacher Data</a>
                    <a href="teacheredit.php">Modify Teacher Data</a>
                    <a href="courseteachenl.php">Assign Teacher for a course</a>
                    </div>
				</li>
				<li class="nav-item dropdown">
					<p class="dropbtn">Manage Student 
                    <i class="fa fa-caret-down"></i>
                    </p>
                    <div class="dropdown-content">
                    <a href="studentlist.php">View Student List</a>
                    <a href="studentedit.php">Modify Student Data</a>
                    </div>
				</li>
				<li class="nav-item dropdown">
					<p class="dropbtn">Manage Course 
                    <i class="fa fa-caret-down"></i>
                    </p>
                    <div class="dropdown-content">
                    <a href="courselist.php">View Course List</a>
                    <a href="courseinsert.php">Insert a Course Data</a>
                    <a href="courseedit.php">Update a Course Data</a>
                    <a href="coursedelete.php">Delete a Course Data</a>
                    </div>
				</li>
                <li class="nav-item dropdown">
					<p class="dropbtn">Manage Account 
                    <i class="fa fa-caret-down"></i>
                    </p>
                    <div class="dropdown-content">
                    <a href="stu_acc.php">Student Payment details</a>
                    <a href="tea_acc.php">Teacher Salary details</a>
                    <a href="tea_sal.php">Pay Teacher Salary</a>
                    </div>
				</li>
                <li class="nav-item">
					<a class="nav-link" href="logout.php">Logout</a>
				</li>
			</ul>
		</div>
	</div>
</nav>

<!--- Image Slider -->
<!-- <div id="slides" class="carousel slide" data-ride="carousel">
	<ul class="carousel-indicators">
		<li data-target="#slides" data-slide-to="0" class="active"></li>
		<li data-target="#slides" data-slide-to="1"></li>
		<li data-target="#slides" data-slide-to="2"></li>
	</ul>
	<div class="carousel-inner">
		<div class="carousel-item active">
			<img src="assets/img/image1.png"> -->
			<!-- <div class="carousel-caption">
				<h1 class="display-2">Bootstrap</h1>
				<h3>Complete Website Layout</h3>
				<button type="button" class="btn btn-outline-light btn-lg">View Demo</button>
				<button type="button" class="btn btn-primary btn-lg">Get Started</button>
			</div> -->
		<!-- </div>
		<div class="carousel-item">
			<img src="assets/img/image2_new.png">
		</div>
		<div class="carousel-item">
			<img src="assets/img/image3.png">
		</div>
	</div>
</div> -->

<!--- Jumbotron -->
<!-- <div class="container-fluid">
	<div class="row jumbotron">
		<div class="col-xs-12 col-sm-12 col-md-9 col-lg-9 col-xl-10">
			<p class="lead">Don't worry just check and confirm youself!!!</p>
		</div>
		<div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 col-xl-2">
			<a href="predictor.html"><button type="button" class="btn btn-outline-secondary btn-lg">Get Started</button></a>
		</div>
	</div>
</div> -->

<!--- Welcome Section -->
<div class="container-fluid padding">
	<div class="row welcome text-center">
		<div class="col-12">
			<h1 class="display-4">Welcome</h1>
		</div>
		<hr>
		<div class="col-12">
			<p class="lead"><?php echo $_SESSION['bttadmin']['name'] ?></p>
		</div>
	</div>
</div>

<!--- Three Column Section -->
<!-- <div class="container-fluid padding">
	<div class="row text-center padding">
		<div class="col-xs-12 col-sm-6 col-md-4">
			<i class="fas fa-code"></i>
			<h3>HTML</h3>
		</div>
		<div class="col-xs-12 col-sm-6 col-md-4">
			<i class="fas fa-bold"></i>
			<h3>BOOTSTRAP</h3>
		</div>
		<div class="col-sm-12 col-md-4">
			<i class="fab fa-css3"></i>
			<h3>CSS</h3>
		</div>
	</div>
	<hr class="my-4">
</div>
 -->
<!--- Two Column Section -->
<div class="container-fluid padding">
	<div class="row padding">
		<div class="col-lg-6">
			<h2>Admin Details</h2>
			<table>
            <tr><td class="lead"><h4>NAME :</h4></td><td><h4><?php echo $_SESSION['bttadmin']['name'] ?></h4></td></tr>
            <tr><td class="lead"><h4>ADMIN ID :</h4></td><td><h4><?php echo $_SESSION['bttadmin']['admin_id'] ?></h4></td></tr>
            </table>
			<br>
			<!-- <a href="#" class="btn btn-primary">Learn more</a> -->
		</div>
		<div class="col-lg-6">
			<img src="<?php echo $_SESSION['bttadmin']['photo'] ?>" class="img-fluid" alt="Image of Admin : <?php echo $_SESSION['bttadmin']['name'] ?>" style="width: 70%;height:auto;">
		</div>
	</div>
</div>
<hr class="my-4">
<!--- Fixed background -->

<!--- Emoji Section -->
<!-- <button class="fun" data-toggle="collapse" data-target="#emoji">Click For fun</button>
<div id="emoji" class="collapse">
	<div class="container-fluid padding">
		<div class="row text-center">
			<div class="col-sm-6 col-md-3">
				<img class="gif" src="img/gif/panda.gif">
			</div>
			<div class="col-sm-6 col-md-3">
				<img class="gif" src="img/gif/poo.gif">
			</div>
			<div class="col-sm-6 col-md-3">
				<img class="gif" src="img/gif/unicorn.gif">
			</div>
			<div class="col-sm-6 col-md-3">
				<img class="gif" src="img/gif/chicken.gif">
			</div>
		</div>
	</div>
</div> -->
  
<!--- Meet the team -->
<!-- <div class="container-fluid padding">
	<div class="row welcome text-center">
		<div class="col-12">
			<h1 class="display-4">More About The Tabs</h1>
		</div>
		<hr>
	</div>
</div> -->

<!--- Cards -->
<!-- <div class="container-fluid padding">
	<div class="row padding">
		<div class="col-md-4">
			<div class="card">
				<img class="card-img-top" src="assets/img/tabs/predictor.png" alt="">
				<div class="card-body">
					<h5 class="card-title">Predictor</h5>
					<p>The Detector Tab</p>
					<a class="btn btn-outline-secondary2" >Know More</a>
				</div>
			</div>
			<div  class="modal modal_multi"> -->

		        <!-- Modal content -->
		        <!-- <div class="modal-content">
		            <span class="close close_multi"></span>
		            <p><font size="4"  color="black"><b>The Predictor tab contains two features- the Scan Predictor and the Symptoms Predictor. The Scan Predictor will contain the Detector where the user can upload photo of their skin problem and check whether that problem is Skin Cancer or not. The Detector will give a probability of predicting the Skin Cancer Disease. The Symptoms Predictor part will contain some set of questions where the user will be asked to fill those questions and based on his/her response the Model will give an immediate reply whether those Symptoms are of Skin Cancer or not.</b></font></p>
		        </div>

		    </div>
			
		</div>
		<div class="col-md-4">
			<div class="card">
				<img class="card-img-top" src="assets/img/tabs/tracker.png" alt="">
				<div class="card-body">
					<h5 class="card-title">Tracker</h5>
					<p>The Hospitals Finding Tab</p>
					<a  class="btn btn-outline-secondary2" >Know More</a>
				</div>
			</div>
			<div  class="modal modal_multi"> -->

		        <!-- Modal content -->
		        <!-- <div class="modal-content">
		            <span class="close close_multi"></span>
		            <p><font size="4"  color="black"><b>It contains a map showing the different Cancer Treatment Hospitals of India and also the World which will allow the patient to know about the different Cancer Treatment Hospitals with their Location so that they can use that Information for the treatment.</b></font></p>
		        </div>

		    </div>
		</div>
		<div class="col-md-4">
			<div class="card">
				<img class="card-img-top" src="assets/img/tabs/helpline.png" alt="">
				<div class="card-body">
					<h5 class="card-title">Helpline</h5>
					<p>The Assistant Tab</p>
					<a class="btn btn-outline-secondary2">Know More</a>
				</div>
			</div>
			<div  class="modal modal_multi"> -->

		        <!-- Modal content -->
		       <!--  <div class="modal-content">
		            <span class="close close_multi"></span>
		            <p><font size="4"  color="black"><b> It contains a list of all Renowned Dermatologist of India with their location of practice and also the Doctor’s Background. In this Tab we will also provide some safety measures to be taken care in case of skin cancer. We will also provide some Online Pharmaceutical Stores which the patients can use it to book the medicines required for their treatment.</b></font></p>
		        </div>
		    </div>
		</div>
	</div>
</div>
<script type="text/javascript" src="assets/scripts/script.js"></script> -->

<!--- Two Column Section -->
<!-- <div class="container-fluid padding">
	<div class="row padding">
		<div class="col-lg-6">
			<h2>Our Main Motive</h2>
			<p>There are various Skin Problems but you don't gets confirmed whether it is Skin Cancer Or an ordinay Skin Cancer.</p>
			<p>The Skin Cancer Detector will give us an early prediction of the skin disease i.e. either Skin Cancer or not and with that information the sufferers can treat it quickly.</p>
			<br>
		</div>
		<div class="col-lg-6">
			<img src="img/image1.png" class="img-fluid">
		</div>
	</div>
	<hr class="my-4">
</div> -->

<!--- Connect -->
<!-- <div class="container-fluid padding">
	<div class="row text-center padding">
		<div class="col-12">
			<h2>Connect</h2>
		</div>
		<div class="col-12 social padding">
			<a href="#"><i class="fab fa-facebook"></i></a>
			<a href="#"><i class="fab fa-twitter"></i></a>
			<a href="#"><i class="fab fa-google-plus-g"></i></a>
			<a href="#"><i class="fab fa-instagram"></i></a>
			<a href="#"><i class="fab fa-youtube"></i></a>
		</div>
	</div>
</div> -->


<!--- Footer -->
<footer id="contact">
	<div class="container-fluid padding">
		<div class="row text-center">
			<div class="col-md-4">
				<br>
				<br>
				<img src="assets/img/logoblack.png" height="100px" width="auto">
			</div>
			<div class="col-md-4">
				<hr class="light">
				<h5>Our Hours</h5>
				<hr class="light">
				<p>We are ready to serve you anythime</p>
				<p>We are availabe for 24X7 Hours</p>
			</div>
			<div class="col-md-4">
				<hr class="light">
				<h5>Contact Us</h5>
				<hr class="light">
				<p>Phone Number : +91 9874563210</p>
				<p>Email Address : braintech-technologies-admin@googlegroups.com</p>
				<p>Address : The Narula Institute of Technology, Nilganj Road, Agarpara, North 24 Parganas, Kolkata-700109, WB, India</p>
			</div>
			<div class="col-12">
				<hr class="light-100">
				<h5>braintechtechno.ezyro.com</h5>
			</div>
		</div>
	</div>
</footer>

</body>
</html>