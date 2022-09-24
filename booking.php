<?php
extract($_POST);

require "vendor/autoload.php";

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;

$mail=new PHPMailer(true);

$mail->SMTPDebug = 2;   
$mail->isSMTP();
$mail->SMTPAuth=true;

$mail->Host="mail.wesempire.co.ke";
$mail->SMTPSecure='ssl';
$mail->Port=465;

$mail->Username="wasike@wesempire.co.ke";
$mail->Password="45454245Kelvin";

$mail->setFrom("wasike@wesempire.co.ke", "Wasike");
$mail->addAddress("kelvinwasike007@gmail.com");

$mail->Subject='Booking';
$mail->isHTML(true);
$headline=$title.' '.$sname.' '.$fname.', your booking has been made for '.$country.'. You will be expected on <b>'.$date.'</b><br/>'  ;  
$msg_title='Here are the list of estimated box size you choose:';
$boxes .= $box1 == '' ? '' : '<li>'.$box1.'</li>';
$boxes .= $box2 == '' ? '' : '<li>'.$box2.'</li>';
$boxes .= $box3 == '' ? '' : '<li>'.$box3.'</li>';
$boxes .= $box4 == '' ? '' : '<li>'.$box4.'</li>';
$boxes .= $box5 == '' ? '' : '<li>'.$box5.'</li>';
$mail->Body=$headline.$msg_title.$boxes.'<br>We Have Taken note of your comment too: . <b>'.$message.'</b>';
try {
    $mail->send();
    echo "Sent";
}catch (Exception $e){
    echo $mail->ErrorInfo;
}
//echo "email sent";
// 
header("Location:index.html");
?>