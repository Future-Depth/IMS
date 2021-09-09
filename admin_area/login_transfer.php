<?php
//$con=mysqli_connect("sql113.ezyro.com","ezyro_28159409","z7n0ky94i","ezyro_28159409_ims");
$con=mysqli_connect("localhost","root","","braintech");
session_start();
?>
<?php

$ad=$_POST['ad'];
$pwd=$_POST['pwd'];


    $s=mysqli_query($con,"select * from admin where admin_id='$ad' and pwd='$pwd'");
    $r=mysqli_fetch_array($s);
    $_SESSION['bttadmin']=$r;
    if(mysqli_num_rows($s))
    {
	header("location:index.php?");
    } 
    else
    {
        header("location:login.php?");
    }

?>