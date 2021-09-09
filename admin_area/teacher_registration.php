<?php

//$con=mysqli_connect("sql113.ezyro.com","ezyro_28159409","z7n0ky94i","ezyro_28159409_ims");
$con=mysqli_connect("localhost","root","","braintech");

?>

<?php

$n=$_POST['n'];

$em=$_POST['em'];

$no=$_POST['no'];

$add=$_POST['add'];

$pwd=$_POST['pwd'];

$gen=$_POST['gen'];

$hql=$_POST['hql'];

$fname=$_FILES['pht']['name'];

$file_temp_loc =$_FILES['pht']['tmp_name'];

$file_store="uploadtch/".$fname;

$c=mysqli_query($con,"select count(*) from teacher where email='$em'");

$cot=mysqli_fetch_array($c);

$val=$cot['count(*)'];

if($val>=1){

    header("location:teacherinsert.php?ms=present");

}

else{

    move_uploaded_file($file_temp_loc,$file_store);

    $s=mysqli_query($con,"insert into teacher(name,email,phone,address,pwd,photo,gender,high_qual) values('$n','$em',$no,'$add','$pwd','$file_store','$gen','$hql')");

    if($s==1)

    {

        $i=mysqli_query($con,"select id from teacher where email='$em'");

        $a=mysqli_fetch_array($i);

        $id=$a['id'];

        $id=100+$id;

        $uid="BTT/TCH/".$id;

        mysqli_query($con,"update teacher set tea_id='BTT/TCH/$id' where email='$em'");

        header("location:teacherinsert.php?ms=done&id=$uid");

    }

    else

    {

        header("location:teacherinsert.php?ms=not_done");

    }

}

?>