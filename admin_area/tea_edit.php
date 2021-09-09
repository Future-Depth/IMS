<?php

//$con=mysqli_connect("sql113.ezyro.com","ezyro_28159409","z7n0ky94i","ezyro_28159409_ims");
$con=mysqli_connect("localhost","root","","braintech");

?>

<?php

$n=$_POST['n'];

$uid=$_POST['uid'];

$phn=$_POST['phn'];

$add=$_POST['add'];

$eml=$_POST['eml'];



$s=mysqli_query($con,"update teacher set phone=$phn,address='$add',email='$eml' where tea_id='$uid'");



//$mail->Send();

if($s==1)

{

	header("location:teacheredit.php?ms=done");

}

else

{

	header("location:teacheredit.php?ms=not_done");

}

?>