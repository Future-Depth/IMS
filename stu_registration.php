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
$fname=$_FILES['pht']['name'];
$file_temp_loc =$_FILES['pht']['tmp_name'];
$file_store="upload/".$fname;
$c=mysqli_query($con,"select count(*) from student where email='$em'");
$cot=mysqli_fetch_array($c);
$val=$cot['count(*)'];
if($val>=1){
    header("location:login.php?msg=present");
}
else{
    move_uploaded_file($file_temp_loc,$file_store);
    $s=mysqli_query($con,"insert into student(name,email,phone,address,pwd,photo,gender) values('$n','$em',$no,'$add','$pwd','$file_store','$gen')");
    if($s==1)
    {
        $i=mysqli_query($con,"select id from student where email='$em'");
        $a=mysqli_fetch_array($i);
        $id=$a['id'];
        $id=100+$id;
        $uid="BTT/STU/".$id;
        mysqli_query($con,"update student set stu_id='BTT/STU/$id' where email='$em'");
        header("location:login.php?msg=done&id=$uid");
    }
    else
    {
        header("location:index.php?msg=not_done");
    }
}
?>