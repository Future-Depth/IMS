<?php
session_start();
include 'session_check.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Braintech Technologies</title>
	<link rel="icon" href="admin_area/assets/img/icon.png" sizes="32x32" type="image/png">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
	<script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
	<link href="css/bootstrap.css" rel="stylesheet">
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
<body><center>
<div class="container-fluid padding">
	<div class="row padding">
		<div class="col-lg-6">
        <div class="line">
          <h2 class="text-extra-strong text-size-80 text-m-size-40 margin-bottom-40">Edit Details</h2>
        </div>
			<p><table><form method="post" action="editable_stu.php">
            <tr><td>USER ID:</td><td><input type="text" name="uid" value="<?php echo($_SESSION['btt']['stu_id'])?>" readonly></td></tr>
            <tr><td>NAME:</td><td><input type="text" name="n" value="<?php echo($_SESSION['btt']['name'])?>" readonly></td></tr>
            <tr><td>ADDRESS:</td><td><textarea name="add"><?php echo($_SESSION['btt']['address'])?></textarea></td></tr>
            <tr><td>PASSWORD:</td><td><input type="password" name="pwd" value="<?php echo($_SESSION['btt']['pwd'])?>"></td></tr>
            <tr><td>PHONE NUMBER:</td><td><input type="text" name="phn" value="<?php echo($_SESSION['btt']['phone'])?>"></td></tr>
            <tr><td>PROFILE:</td><td><textarea name="pro"><?php echo($_SESSION['btt']['profile'])?></textarea></td></tr>
            <tr><td></td><td><button class="button text-white background-primary margin-bottom-60">Edit</button></td></tr>
            </form></p>
			<br>
			
		</div>
		<div class="col-lg-6">
			<img src="<?php echo($_SESSION['btt']['photo'])?>" class="img-fluid" width="300px" height="auto">
		</div>
	</div>
</div></center>
<script type="text/javascript" src="js/responsee.js"></script>
    <script type="text/javascript" src="owl-carousel/owl.carousel.js"></script>
    <script type="text/javascript" src="js/template-scripts.js"></script> 
</body>
</html>