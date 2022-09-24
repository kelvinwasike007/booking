<?php

    $Title=$_POST['Title'];
    $sname=$_POST['sname'];
    $fname=$_POST['fname'];
    $location=$_POST['location'];
    $Phone=$_POST['Phone'];
    $email=$_POST['email'];
    $country=$_POST['country'];
    $date=$_POST['date'];
    $Services=$_POST['Services'];
    $message=$_POST['message'];
   
    
    require "vendor/autoload.php";

    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\SMTP;

    $mail=new PHPMailer(true);

    $mail->isSMTP();
    $mail->SMTPAuth=true;

    $mail->Host="mail.wesempire.co.ke";
    $mail->SMTPSecure=PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Port=465;

    $mail->Username="wesley@wesempire.co.ke";
    $mail->Password="Wesley_Nyandika1";

    $mail->setFrom($email,$sname);
    $mail->addAddress("info@wesempire.co.ke");

    $mail->Subject=$Title;
    $mail->Body=$sname;
    $mail->Body=$fname;
    $mail->Body=$location;
    $mail->Body=$Phone;
    $mail->$country; 
    $mail->$date;
    $mail->$Services;
    $mail->$message;

    $mail->send();
    echo "email sent";

    // header("Location:index.html");
?>