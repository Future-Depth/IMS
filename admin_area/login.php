<!DOCTYPE html>
<html>
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
	<link rel="stylesheet" type="text/css" href="assets/style/style2.css">
	<style>
	    .adminpanel
	        {
	            height:100vh;
	        }
	    @media (min-width:295px) and (max-width:767px)
	    {
	        @media (min-width:295px) and (max-width:468px)
	        {
	           	.adminpanel table input
    	        {
    	            width:45vw;
    	        } 
	        }
	        .adminpanel
	        {
	            height:108vh;
	        }
	    }
	</style>
</head>
<body>
	<section class="adminpanel">
		<h1 align="center"><font color="#fff">Admin Login</font></h1>
		<table align="center">
			<form action="login_transfer.php" method="post">
				<tr><td><b><font color="#fff">Admin ID</font></b></td><td><input type="text" name="ad" required="" autocomplete="off" style="border-radius:5px;"></td></tr>
				<tr><td><b><font color="#fff">Password</font></b></td><td><input type="password" name="pwd" required="" autocomplete="off" style="border-radius:5px;"></td></tr>
				<tr><td></td><td><button type="submit" name="" style="border-radius:8px;background-color:#ffffff;color:black;">Login</button></td></tr>
			</form>
		</table>
	</section>
</body>
</html>