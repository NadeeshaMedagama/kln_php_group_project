<?php 

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;


require 'vendor/autoload.php';

class mail{
    public $to;
    public $message;

    function __construct($to , $message){
        $this->to = $to;
        $this->message = $message;
    }

    public function send(){

        $mail = new PHPMailer(true);
        try{
            $mail->SMTPDebug = 0; // Enable verbose debug output
            $mail->isSMTP(); // Set mailer to use SMTP
            $mail->Host = 'smtp.gmail.com'; // Specify main and backup SMTP servers
            $mail->SMTPAuth = true; // Enable SMTP authentication
            $mail->Username = 'thushanmadusanka456@gmail.com'; // SMTP username
            $mail->Password = ''; // SMTP password
            $mail->SMTPSecure = 'tls'; // Enable TLS encryption, `ssl` also accepted
            $mail->Port = 587; // TCP port to connect to

            $mail->setFrom('your_email@gmail.com', 'Mailer');
            $mail->addAddress('recipient@example.com', 'Joe User');

            $mail->isHTML(true); // Set email format to HTML
            $mail->Subject = 'Here is the subject';
            $mail->Body = 'This is the HTML message body <b>in bold!</b>';
            $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

            $mail->send();
        }catch(Exception $e){
            echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
        }
    }
}






?>