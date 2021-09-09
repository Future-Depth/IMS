<?php

require('config.php');
require('razorpay-php/Razorpay.php');
session_start();

// Create the Razorpay Order

use Razorpay\Api\Api;

$api = new Api($keyId, $keySecret);

//
// We create an razorpay order using orders api
// Docs: https://docs.razorpay.com/docs/orders

$c=$_POST['cid'];
$s=mysqli_query($con,"select c_name from course where c_id='$c'");
$rr=mysqli_fetch_array($s);
$_SESSION['cid'] = $c;
$si=$_POST['sid'];
$_SESSION['sid'] = $si;
$s=mysqli_query($con,"select fees from course where c_id='$c'");
$r=mysqli_fetch_array($s);
$price = $r['fees'];
$_SESSION['price'] = $price;
$s=mysqli_query($con,"select name,phone,email from student where stu_id='$si'");
$r=mysqli_fetch_array($s);
$customername = $r['name'];
$_SESSION['customername'] = $customername;
$email = $r['email'];
$_SESSION['email'] = $email;
$contactno = $r['phone'];
$fdrn=mt_rand(1000,9999);
$orderData = [
    'receipt'         => $fdrn,
    'amount'          => $price * 100, // 2000 rupees in paise
    'currency'        => 'INR',
    'payment_capture' => 1 // auto capture
];

$razorpayOrder = $api->order->create($orderData);

$razorpayOrderId = $razorpayOrder['id'];

$_SESSION['razorpay_order_id'] = $razorpayOrderId;

$displayAmount = $amount = $orderData['amount'];

if ($displayCurrency !== 'INR')
{
    $url = "https://api.fixer.io/latest?symbols=$displayCurrency&base=INR";
    $exchange = json_decode(file_get_contents($url), true);

    $displayAmount = $exchange['rates'][$displayCurrency] * $amount / 100;
}

$data = [
    "key"               => $keyId,
    "amount"            => $amount,
    "name"              => "Braintech Technologies",
    "description"       => "Ideal site for E-Knowledge",
    "image"             => "https://lh3.googleusercontent.com/-yJrbcTHNeeg/AAAAAAAAAAI/AAAAAAAAAAA/AMZuucmEZQjLKQZ3RGfAjlfwi__hP9PJNg/s48-c/photo.jpg",
    "prefill"           => [
    "name"              => $customername,
    "email"             => $email,
    "contact"           => $contactno,
    ],
    "notes"             => [
    "address"           => "Braintech Technologies",
    "merchant_order_id" => "12312321",
    ],
    "theme"             => [
    "color"             => "#CE1212"
    ],
    "order_id"          => $razorpayOrderId,
];

if ($displayCurrency !== 'INR')
{
    $data['display_currency']  = $displayCurrency;
    $data['display_amount']    = $displayAmount;
}

$json = json_encode($data);
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Braintech Technologies</title>
	<link rel="icon" href="../admin_area/assets/img/icon.png" sizes="32x32" type="image/png">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
	<script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
	<link href="../css/bootstrap.css" rel="stylesheet">
    <link rel="stylesheet" href="../css/components.css">
    <link rel="stylesheet" href="../css/icons.css">
    <link rel="stylesheet" href="../css/responsee.css">
    <link rel="stylesheet" href="../owl-carousel/owl.carousel.css">
    <link rel="stylesheet" href="../owl-carousel/owl.theme.css">
    
    <!-- CUSTOM STYLE -->      
    <link rel="stylesheet" href="../css/template-style.css">
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Mrs+Saint+Delafield&display=swap" rel="stylesheet">  
    <script type="text/javascript" src="js/jquery-1.8.3.min.js"></script>
    <script type="text/javascript" src="js/jquery-ui.min.js"></script> 

    <style>
    .razorpay-payment-button
    {
        background-color:#ce1212;
        color:#ffffff;
        height:50px;
        width:auto;

    }
    </style>
</head>
<body><center>
<div class="container-fluid padding">
	<div class="row padding">
		<div class="col-lg-6">
        <div class="line">
          <h2 class="text-extra-strong text-size-80 text-m-size-40 margin-bottom-40">Complete your Payment</h2>
        </div>
        <form action="trans.php" method="POST">
        <h4><b>STUDENT NAME : <?php echo $customername?></b></h4>
        <h4><b>COURSE NAME : <?php echo $rr['c_name']?></b></h4>
        <h4><b>AMOUNT : Rs.<?php echo $data['amount']/100?></b></h4>
  <script
    src="https://checkout.razorpay.com/v1/checkout.js"
    data-key="<?php echo $data['key']?>"
    data-amount="<?php echo $data['amount']?>"
    data-currency="INR"
    data-buttontext="Pay Now"
    data-name="<?php echo $data['name']?>"
    data-image="<?php echo $data['image']?>"
    data-description="<?php echo $data['description']?>"
    data-prefill.name="<?php echo $data['prefill']['name']?>"
    data-prefill.email="<?php echo $data['prefill']['email']?>"
    data-prefill.contact="<?php echo $data['prefill']['contact']?>"
    data-notes.shopping_order_id="<?php echo($fdrn); ?>"
    data-order_id="<?php echo $data['order_id']?>"
    data-theme.color="#ce1212"
    <?php if ($displayCurrency !== 'INR') { ?> data-display_amount="<?php echo $data['display_amount']?>" <?php } ?>
    <?php if ($displayCurrency !== 'INR') { ?> data-display_currency="<?php echo $data['display_currency']?>" <?php } ?>
  >
  </script>
  
  <!-- Any extra fields to be submitted with the form but not sent to Razorpay -->
  <input type="hidden" name="shopping_order_id" value="<?php echo($fdrn); ?>">
</form>
        </div>
        </div></div></center>

<script type="text/javascript" src="js/responsee.js"></script>
    <script type="text/javascript" src="owl-carousel/owl.carousel.js"></script>
    <script type="text/javascript" src="js/template-scripts.js"></script> 
</body>
</html>