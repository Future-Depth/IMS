<?php
//$con=mysqli_connect("sql113.ezyro.com","ezyro_28159409","z7n0ky94i","ezyro_28159409_ims");
$con=mysqli_connect("localhost","root","","braintech");
?>
<?php
require_once('phpmailer/PHPMailerAutoload.php');
$n=$_POST['n'];
$uid=$_POST['uid'];
$phn=$_POST['phn'];
$add=$_POST['add'];
$eml=$_POST['eml'];

$mail=new PHPMailer();
$mail->isSMTP();
$mail->Host='smtp.gmail.com';
$maul->Port='465';
$mail->SMTPAuth=true;
$mail->SMTPSecure='tls';
$mail->Username="braintechtechno.info@gmail.com";
$mail->Password="braintech@2021";

$mail->SetFrom('braintechtechno.info@gmail.com');
$mail->AddAddress('tirthadeepb22081999@gmail.com');
//$mail->addReplyTo('braintechtechno.info@gmail.com');
$mail->isHTML();
$mail->Subject='Your Updated Details';
$mail->Body='<h1>Your Updated Details are</h1><br><table align="center" border=2><tr><td>User ID:</td><td> "$uid" </td></tr><tr><td>Email ID:</td><td> "$eml" </td></tr><tr><td>Phone Number:</td><td> "$phn" </td></tr><tr><td>Address:</td><td> "$add" </td></tr></table>';

$s=mysqli_query($con,"update student set phone=$phn,address='$add',email='$eml' where stu_id='$uid'");

//$mail->Send();
if($s==1 and $mail->Send())
{
	header("location:studentedit.php?ms=done");
}
else
{
	header("location:studentedit.php?ms=not_done");
}
?>