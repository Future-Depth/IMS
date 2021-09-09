<?php
//$con=mysqli_connect("sql113.ezyro.com","ezyro_28159409","z7n0ky94i","ezyro_28159409_ims");
$con=mysqli_connect("localhost","root","","braintech");
?>
<?php
//require 'phpmailer/PHPMailerAutoload.php'
$nsst="Not Genrated";
$sid=$_POST['sid'];
$cid=$_POST['cid'];
$amu=$_POST['amu'];
$tid=date("dmY-His-").uniqid();


$chk="select * from student where stu_id='$sid'";
$q=mysqli_query($con,$chk);
$rows=mysqli_num_rows($q);
/*$mail=new PHPMailer;
$mail->Host='smtp.gmail.com';
$maul->Port=587;
$mail->SMTPAuth=true;
$mail->SMTPSecure='tls';

$mail->Username="braintechtechno.info@gmail.com";
$mail->Password="braintech@2021";

$mail->setFrom('braintechtechno.info@gmail.com','Braintech Technologies');
$mail->addAddress('$eml');
$mail->addReplyTo('braintechtechno.info@gmail.com');
$mail->isHTML(true);
$mail->Subject='Your Updated Details';
$mail->Body='<h1>Your Updated Details are</h1><br><table align="center" border=2><tr><td>User ID:</td><td> "$uid" </td></tr><tr><td>Email ID:</td><td> "$eml" </td></tr><tr><td>Phone Number:</td><td> "$phn" </td></tr><tr><td>Address:</td><td> "$add" </td></tr></table>'*/

if($rows>=1){
    $sql="insert into account(stu_id,cou_id,amount,trans_id,trans_date,type) values ('$sid','$cid','$amu','$tid',convert_tz(sysdate(),'+00:00','+09:30'),'Student Payment')";
if(mysqli_query($con,$sql))
{
    $sq="select total_fee,pending_fee from studentcourse where stu_id='$sid' and c_id='$cid' and status='Ongoing'";
    $s=mysqli_query($con,$sq);
    $r=mysqli_fetch_array($s);
    $pf=$r['pending_fee'];
    $tf=$r['total_fee'];
    $pf=$pf-$amu;
    mysqli_query($con,"update studentcourse set pending_fee=$pf where stu_id='$sid' and c_id='$cid' and status='Ongoing'");
	header("location:status.php?ms=done&tid=$tid&amu=$amu&sid=$sid&cid=$cid");
}
else
{
	header("location:status.php?ms=not_done&tid=$nsst&amu=$amu&sid=$sid&cid=$cid");
}
}
else
{
	header("location:index.php?ms=not_present&tid=$nsst&amu=$amu&sid=$sid&cid=$cid");
}
?>