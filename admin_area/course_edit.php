<?php

//$con=mysqli_connect("sql113.ezyro.com","ezyro_28159409","z7n0ky94i","ezyro_28159409_ims");
$con=mysqli_connect("localhost","root","","braintech");

?>

<?php

$c_id=$_POST['uid'];//cid is used for course id

$c_name=$_POST['n'];//cname is used for course name

$duration=$_POST['dur'];//drn is used for duration 

$fees=$_POST['fee'];//fs is used for fees

    $s=mysqli_query($con,"update course set c_name='$c_name', duration='$duration',fees='$fees' where c_id='$c_id'");

    if($s==1)

    {

        

        header("location:courseedit.php?ms=done");

    }

    else

    {

        header("location:courseedit.php?ms=not_done");

    }



?>

