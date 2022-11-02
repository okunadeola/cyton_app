<?php
// Get data from form

$paymentType = '';
$email= $_POST['email'];
$username= $_POST['username'];
$password= $_POST['password'];
$amount= $_POST['amount'];

foreach($_POST['checkbox'] as $checkbox){
    $paymentType =  $checkbox . ' ';

}


echo $amount, $paymentType ;

// $to = "olaokunade@gmail.com";
// $subject = "This is the subject line";

// // The following text will be sent
// // Name = user entered name
// // Email = user entered email
// // Message = user entered message
// $txt ="Name = ". $name . "\r\n Email = "
// 	. $email . "\r\n Amount =" . $amount;

// $headers = "From: noreply@demosite.com" . "\r\n" .
// 			"CC: olaokunade@example.com";

// if($email != NULL) {
// 	mail($to, $subject, $txt, $headers);
// }

// Redirect to
header("Location:success.html");
?>
