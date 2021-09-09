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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
        .showlist table tr th
        {
        background-color: #d44000;
        color: white;
        }
        .showlist table tr:nth-child(even)
        {
        background-color: #ffefcf;
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




<!--- Welcome Section -->
<div class="container-fluid padding">
	<div class="row welcome text-center">
		<div class="col-12">
			<h1 class="display-4">The Course Management System</h1>
		</div>
		<hr>
		<div class="col-12">
			<p class="lead"><font size="4"  color="black"><b>The Course List:</b></font></p>
            <!--<p class="lead">1. View the complete student list.</p>
            <p class="lead">2. Modify the student details.</p>-->
		</div>
	</div>
</div>
<section class="showlist">
<table border=2 align="center">
                                        <tr><th>COURSE ID</th>
                                            <th>COURSE NAME</th>
                                            <th>COURSE DURATION</th>
                                            <th>COURSE FEES</th>
                                            </tr>
                                            <?php $s=mysqli_query($con,"select * from course where status='Active'");
                                        while($r=mysqli_fetch_array($s))
                                        {
                                            ?>
                                            <tr><td><?php echo($r['c_id']);?></td>
                                                <td><?php echo($r['c_name']);?></td>
                                                <td><?php echo($r['duration']);?></td>
                                                <td><?php echo($r['fees']);?></td>
                                                </tr>
                                            <?php
                                        }
                                        ?>
                                        </table>
                                        </section>


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