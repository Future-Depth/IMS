<?php

//$con=mysqli_connect("sql113.ezyro.com","ezyro_28159409","z7n0ky94i","ezyro_28159409_ims");
$con=mysqli_connect("localhost","root","","braintech");

?>

<?php

//require 'phpmailer/PHPMailerAutoload.php'

$nsst="Not Genrated";

$uid=$_POST['uid'];

$n=$_POST['n'];

$eml=$_POST['eml'];

$sal=$_POST['sal'];

$tid=date("dmY-His-").uniqid();





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



    $sql="insert into account(stu_id,cou_id,amount,trans_id,trans_date,type) values ('$uid','NONE','$sal','$tid',convert_tz(sysdate(),'+00:00','+09:30'),'Teacher Salary')";

if(mysqli_query($con,$sql))

{

	header("location:tea_sal.php?ms=done&tid=$tid&amt=$sal");

}

else

{

	header("location:tea_sal.php?ms=not_done&tid=$nsst&amt=$sal");

}

?>