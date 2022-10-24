<?php
//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

function sendMail(string $toEmail = "", string $toName = "", string $subject = "", string $body = "")
{
     //Create an instance; passing `true` enables exceptions
     $mail = new PHPMailer(true);

     try {
          //Server settings
          //$mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
          $mail->isSMTP();                                            //Send using SMTP
          $mail->Host       = 'mail.yourgiro.com';                     //Set the SMTP server to send through
          $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
          $mail->Username   = 'customerservice@yourgiro.com';                     //SMTP username
          $mail->Password   = 'g5aFGjX@w@hqRtD';                               //SMTP password
          $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
          $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

          //Recipients
          $mail->setFrom('customerservice@yourgiro.com', 'Giro Banking Customer Service');

          $mail->addAddress($toEmail, $toName);     //Add a recipient
          /*$mail->addAddress('ellen@example.com');               //Name is optional
          $mail->addReplyTo('info@example.com', 'Information');
          $mail->addCC('cc@example.com');
          $mail->addBCC('bcc@example.com');

          //Attachments
          $mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
          $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name
*/
          //Content
          $mail->isHTML(true);                                  //Set email format to HTML
          $mail->Subject = $subject;
          $mail->Body    = $body;
          //$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

          $mail->send();

          return true;
     } catch (Exception $e) {
          echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
          return false;
     }
}

//var_dump(sendMail("ugorji757@gmail.com", "simon", "Test", "Hello human"));
