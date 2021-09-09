<?php

require('config.php');
session_start();
//db connection
//$conn = mysqli_connect($host, $username, $password, $dbname);

require('razorpay-php/Razorpay.php');
use Razorpay\Api\Api;
use Razorpay\Api\Errors\SignatureVerificationError;

$success = true;

$error = "Payment Failed";

if (empty($_POST['razorpay_payment_id']) === false)
{
    $api = new Api($keyId, $keySecret);

    try
    {
        // Please note that the razorpay order ID must
        // come from a trusted source (session here, but
        // could be database or something else)
        $attributes = array(
            'razorpay_order_id' => $_SESSION['razorpay_order_id'],
            'razorpay_payment_id' => $_POST['razorpay_payment_id'],
            'razorpay_signature' => $_POST['razorpay_signature']
        );

        $api->utility->verifyPaymentSignature($attributes);
    }
    catch(SignatureVerificationError $e)
    {
        $success = false;
        $error = 'Razorpay Error : ' . $e->getMessage();
    }
}

if ($success === true)
{
    $razorpay_order_id = $_SESSION['razorpay_order_id'];
    $razorpay_payment_id = $_POST['razorpay_payment_id'];
    $name= $_SESSION['customername'];
    $email = $_SESSION['email'];
    $cid = $_SESSION['cid'];
    $sid = $_SESSION['sid'];
    $price = $_SESSION['price'];
    $sql = "insert into account(stu_id,cou_id,amount,trans_id,trans_date,type) values ('$sid','$cid',$price,'$razorpay_order_id',convert_tz(sysdate(),'+00:00','+09:30'),'Student Payment')";
    if(mysqli_query($con, $sql)){
        header("location:status.php?ms=done&tid=$razorpay_order_id&pid=$razorpay_payment_id&amu=$price&sid=$sid&cid=$cid");
    }

    else{
        $nsst="Not Genrated";
        header("location:status.php?ms=not_done&tid=$nsst&pid=$nsst&amu=$price&sid=$sid&cid=$cid");
    }

    
}
else
{
    $nsst="Not Genrated";
    header("location:index.php?ms=not_done&tid=$nsst&pid=$nsst&amu=$price&sid=$sid&cid=$cid");
}

?>