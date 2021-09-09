<?php

//$con=mysqli_connect("sql113.ezyro.com","ezyro_28159409","z7n0ky94i","ezyro_28159409_ims");
$con=mysqli_connect("localhost","root","","braintech");

?>

<?php

$uid=$_POST['sid'];

$cid=$_POST['cid'];

$q=mysqli_query($con,"select * from course where c_id='$cid'");

$r=mysqli_fetch_array($q);

$tf=$r['fees'];

$check=mysqli_query($con,"select * from studentcourse where stu_id='$uid' and c_id='$cid'");

$row=mysqli_num_rows($check);

if($row<1){

$s=mysqli_query($con,"insert into studentcourse(stu_id,c_id,total_fee,pending_fee) values('$uid','$cid',$tf,$tf)");

if($s==1)

{

	header("location:welcome.php?ms=done");

}

else

{

	header("location:welcome.php?ms=not_done");

}

}

else{

    header("location:enrollcourse.php?ms=not_done");

}

?>