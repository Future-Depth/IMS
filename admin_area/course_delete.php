<?php
//$con=mysqli_connect("sql113.ezyro.com","ezyro_28159409","z7n0ky94i","ezyro_28159409_ims");
$con=mysqli_connect("localhost","root","","braintech");
?>
<?php
$cid=$_POST['cid'];//cid is used for course id

$c=mysqli_query($con,"select * from course where c_id='$cid'");
$val=mysqli_num_rows($c);
if($val<1){
    header("location:coursedelete.php?ms=not_present");
}
else{
    $s=mysqli_query($con,"update course set status='Inactive' where c_id='$cid'");
    if($s==1)
    {
        
        header("location:coursedelete.php?ms=done");
    }
    else
    {
        header("location:coursedelete.php?ms=not_done");
    }
}
?>