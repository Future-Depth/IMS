<?php 
//$con=mysqli_connect("sql113.ezyro.com","ezyro_28159409","z7n0ky94i","ezyro_28159409_ims");
$con=mysqli_connect("localhost","root","","braintech");
?>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Braintech Technologies</title>
	<link rel="icon" href="../admin_area/assets/img/icon.png" sizes="32x32" type="image/png">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
	<script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
	<link href="../admin_area/assets/style/style.css" rel="stylesheet">
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
        .quiz-page
        {
            background-image: url('img1/quiz.jpg');
            background-attachment: fixed;
            height:100vh;
        }
        .quiz-page .quiz-inner ol li
        {
            list-style-type: none;
        }
        .quiz-page .quiz-inner
        {
            background-color: rgba(0,0,0,0.5);
            padding-top:200px;
            text-align: center;
            height:100vh;
        }
        .quiz-page .quiz-inner .div-quiz-outer
        {
            animation: animate 5s infinite;
            width: 50%;
            padding-left: 0px;
            height: 7vh;
            text-align: center;
        }
        .quiz-page .quiz-inner .name-quiz-time
        {
            font-size: 24px;
            color: #f6f5f5;
            font-weight: bold;
            padding-top: 10px;
            
        }
        form{
            margin-bottom:0px;
        }
        @keyframes animate
        {
            0%
            {
                background-color: #2a3d66;
            }
            25%
            {
                background-color: #5d54a4;
            }
            50%
            {
                background-color: #9d65c9;
            }
            75%
            {
                background-color: #d291bc;
            }
            100%
            {
                background-color: #d789d7;
            }
        }
        .quiz-page .quiz-inner label
        {
            color: #fff;
        }
        .quiz-page .quiz-inner h1
        {
            color: #f6f5f5;
        }
        .quiz-page .quiz-inner h3
        {
            color: #fcdada;
        }
        .quiz-page .quiz-inner .quiz-btn
        {
            border:none;
            border-radius: 20px;
            height: 40px;
            width:150px;
            background-color: #f51167;
            color: #fff;
            font-weight: bold;
        }
    </style>
    </head>
<body>

	<div id="page-wrap" class="quiz-page">
        <div class="quiz-inner">
		<h1 >Result | Sample test</h1>
		
        <?php

        
		if(isset($_POST['question-1-answers'])){
			$answer1 = $_POST['question-1-answers'];
		}else{
			$answer1 = "E";
		}
		if(isset($_POST['question-2-answers'])){
			$answer2 = $_POST['question-2-answers'];
		}else{
			$answer2 = "E";
		}
		if(isset($_POST['question-3-answers'])){
			$answer3 = $_POST['question-3-answers'];
		}else{
			$answer3 = "E";
		}
		if(isset($_POST['question-4-answers'])){
			$answer4 = $_POST['question-4-answers'];
		}else{
			$answer4 = "E";
		}
		if(isset($_POST['question-5-answers'])){
			$answer5 = $_POST['question-5-answers'];
		}else{
			$answer5 = "E";
		}
            
     
        
            $totalCorrect = 0;
            
            if ($answer1 == "C") { $totalCorrect++; }
            if ($answer2 == "D") { $totalCorrect++; }
            if ($answer3 == "D") { $totalCorrect++; }
            if ($answer4 == "B") { $totalCorrect++; }
            if ($answer5 == "D") { $totalCorrect++; }
            ?><div class="results"><?php
            echo "<div id='results' ><h3>$totalCorrect / 5 correct</h3></div>";
			$percent=($totalCorrect/5)*100;
            $sid=$_POST['sid'];
            $cname='BTT/CRS/101';
            $s=mysqli_query($con,"insert into marks(stu_id,marks,c_id) values('$sid','$percent','$cname')");
            mysqli_query($con,"update studentcourse set status='Complete' where c_id='$cname' and stu_id='$sid'");
			 echo "<div id='results' ><h3>$percent % percent correct</h3></div>"
            ?></div><?php
    
            
        ?></div></div>
        <footer id="contact">
	<div class="container-fluid padding">
		<div class="row text-center">
			<div class="col-md-4">
				<br>
				<br>
				<img src="../admin_area/assets/img/blackcoders.png">
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
				<p>Phone Number : 1234567890</p>
				<p>Email Address : braintechtechno.contacts@tutanota.com</p>
				<p>Address : The Narula Institute of Technology, Nilganj Road, Agarpara, North 24 Parganas, Kolkata-700109, WB, India</p>
			</div>
			<div class="col-12">
				<hr class="light-100">
				<h5>blackcoders.com</h5>
			</div>
		</div>
	</div>
</footer>
</body>

</html>
		

