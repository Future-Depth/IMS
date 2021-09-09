<?php

//$con=mysqli_connect("sql113.ezyro.com","ezyro_28159409","z7n0ky94i","ezyro_28159409_ims");
$con=mysqli_connect("localhost","root","","braintech");

?>

<?php

$n=$_POST['n'];

$uid=$_POST['uid'];

$phn=$_POST['phn'];

$add=$_POST['add'];

$pwd=$_POST['pwd'];

$pro=$_POST['pro'];

$s=mysqli_query($con,"update student set phone=$phn,address='$add',pwd='$pwd',profile='$pro' where stu_id='$uid'");

if($s==1)

{

	header("location:login_page.php?uid=$uid&des=student&pwd=$pwd");

}

else

{

	header("location:welcome.php?ms=not_done");

}

?>