<?php

//$con=mysqli_connect("sql113.ezyro.com","ezyro_28159409","z7n0ky94i","ezyro_28159409_ims");
$con=mysqli_connect("localhost","root","","braintech");

?>

<?php

$cid=$_POST['cid'];//cid is used for course id

$tid=$_POST['tid'];



$c=mysqli_query($con,"select * from course where c_id='$cid'");

$val=mysqli_num_rows($c);

if($val<1){

    header("location:courseteachenl.php?ms=not_present");

}

else{

    $s=mysqli_query($con,"insert into teachercourse(tea_id,c_id) values('$tid','$cid')");

    if($s==1)

    {

        

        header("location:courseteachenl.php?ms=done");

    }

    else

    {

        header("location:courseteachenl.php?ms=not_done");

    }

}

?>