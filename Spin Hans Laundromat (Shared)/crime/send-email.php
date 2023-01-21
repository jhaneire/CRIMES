<?php


    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["Message"];
    $phone = $_POST["name2"];
    $subject = $_POST["email2"];

    $mailTo = "lagunacrimereporting@corpostocksemail.com";
    $headers ="From: ".$email;
    $subject ="Subject: ".$subject;
    $txt = "You have received an e-mail from ".$name.
            ".\n\n Message: ".$message.".\n\n Contact me here: ".$phone;

mail($mailTo,$subject, $txt, $headers) or die ("Error! ");

header("Location: indexs.php?mailsend");



?>
<!-- <?php

require 'vendor/autoload.php';

$name = $_POST["name"];
$email = $_POST["email"];
$message = $_POST["Message"];
$phone = $_POST["name2"];
$subject = $_POST["email2"];

$mail = new PHPMailer;

//Tell PHPMailer to use SMTP
$mail->isSMTP();

//Enable SMTP debugging
// 0 = off (for production use)
// 1 = client messages
// 2 = client and server messages
$mail->SMTPDebug = 2;

//Ask for HTML-friendly debug output
$mail->Debugoutput = 'html';

//Set the hostname of the mail server
$mail->Host = "smtp.hostinger.com";

//Set the SMTP port number - likely to be 25, 465 or 587
$mail->Port = 465;

//Whether to use SMTP authentication
$mail->SMTPAuth = true;

//Username to use for SMTP authentication
$mail->Username = "lagunacrimereporting@corpostocksemail.com";

//Password to use for SMTP authentication
$mail->Password = "&M0mgMV8z";

//Set who the message is to be sent from
$mail->setFrom('capstone@corpostocksemail.com', 'Capstone');

//Set who the message is to be sent to
$mail->addAddress('lagunacrimereporting@corpostocksemail.com', 'Send to');

//Set an alternative reply-to address
$mail->addReplyTo($email, $name);



//Set the subject line
$mail->Subject = $subject;

//Read an HTML message body from an external file, convert referenced images to embedded,
//convert HTML into a basic plain-text alternative body
$mail->msgHTML($message);

//Replace the plain text body with one created manually
$mail->AltBody = 'This is a plain-text message body';

//send the message, check for errors
if (!$mail->send()) {
    echo "Mailer Error: " . $mail->ErrorInfo;
} else {
    echo "Message sent!";
}

?> -->
