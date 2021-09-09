<?php
//$con=mysqli_connect("sql113.ezyro.com","ezyro_28159409","z7n0ky94i","ezyro_28159409_ims");
$con=mysqli_connect("localhost","root","","braintech");
?>
<?php

$cname=$_POST['cname'];//cname is used for course name
$drn=$_POST['drn'];//drn is used for duration 
$fee=$_POST['fee'];//fs is used for fees
$fname=$_FILES['pht']['name'];
$file_temp_loc =$_FILES['pht']['tmp_name'];
$file_store="courseimg/".$fname;
move_uploaded_file($file_temp_loc,$file_store);
    $s=mysqli_query($con,"insert into course(c_name,duration,fees,photo) values('$cname','$drn','$fee','$file_store')");
    if($s==1)
    {
        $t=mysqli_query($con,"select * from course where c_name='$cname'");
        $r=mysqli_fetch_array($t);
        $id=$r['id'];
        $i=100+$id;
        $uid="BTT/CRS/".$i;
        $udt=mysqli_query($con,"update course set c_id='$uid' where c_name='$cname'");
        header("location:courseinsert.php?ms=done");
    }
    else
    {
        header("location:courseinsert.php?ms=not_done");
    }
?>