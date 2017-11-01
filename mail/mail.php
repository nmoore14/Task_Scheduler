<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;


require 'mailerconfig.php';
require './PHPMailer-master/src/Exception.php';
require './PHPMailer-master/src/PHPMailer.php';
require './PHPMailer-master/src/SMTP.php';


$mail = new PHPMailer(true);                              // Passing `true` enables exceptions

try {
    //Server settings
    $mail->SMTPDebug = 2;                                 // Enable verbose debug output
    $mail->isSMTP();                                      // Set mailer to use SMTP
    $mail->Host = 'smtp.outlook.com';//;smtp2.example.com';  // Specify main and backup SMTP servers
    $mail->SMTPAuth = true;                               // Enable SMTP authentication
    $mail->Username = EMAIL;                            // SMTP username - create an outlook account
    $mail->Password = PASSWORD;                          // SMTP password
    $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
    $mail->Port = 587;                                    // TCP port to connect to

    //Recipients
    $mail->setFrom(EMAIL, 'Mailer');
    $mail->addAddress('sendto@email.com', 'Name');    // Add a recipient
    //$mail->addAddress('ellen@example.com');             // Name is optional
    $mail->addReplyTo(EMAIL, 'Information'); //can be different than the sender. Populates the reply email address.
    //$mail->addCC('cc@example.com');
    //$mail->addBCC('bcc@example.com');

    //Attachments
    //$mail->addAttachment('/var/tmp/file.tar.gz');       // Add attachments
    //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');  // Optional name

    //Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'Activation request for your new NE Blog Account';

    $msg = "<i>Thanks for joining. You must activate your account before you can use it:</i><br><a href='http://cscilinux.northeaststate.edu/~robowman'>Click here to activate your account</a>";
    $mail->Body    = $msg;

    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
}

?>
