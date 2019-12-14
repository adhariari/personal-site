<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;

require 'src/Exception.php';
require 'src/PHPMailer.php';
require 'src/SMTP.php';


// Instantiation and passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    //Server settings
    // $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      // Enable verbose debug output
    $mail->isSMTP();                                            // Send using SMTP
    $mail->Host       = 'mail.adhari.my.id';                    // Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
    $mail->Username   = 'adhari@adhari.my.id';                     // SMTP username
    $mail->Password   = 'Bondol312@';                               // SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` also accepted
    $mail->Port       = 587;                                    // TCP port to connect to

    //Recipients
    $mail->setFrom('adhari@adhari.my.id', 'Adhari');
    // $mail->addAddress('adhari.ariari@gmail.com', 'Joe User');     // Add a recipient
    $mail->addAddress('adhari.ariari@gmail.com');               // Name is optional
    // $mail->addReplyTo('info@example.com', 'Information');
    // $mail->addCC('cc@example.com');
    // $mail->addBCC('bcc@example.com');

    // Attachments
    // $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
    // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

    // Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'Pesan Baru dari '.$_POST['inputName'].' - Website Pribadi';
    $mail->Body    = 'Email: ' . $_POST['inputEmail'] . '<br>Name: ' . $_POST['inputName'] . '<br><br>Message: ' . stripslashes($_POST['inputMessage']);
    // $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    if($mail->send()){
        $data = array('success' => true, 'message' => 'Thanks! We have received your message.');
    echo json_encode($data);
        
    };
    // echo 'Message has been sent';
} catch (Exception $e) {
        $data = array('success' => false, 'message' => 'Message could not be sent. Mailer Error: ' . $mail->ErrorInfo);
        echo json_encode($data);
        exit;
    
}
