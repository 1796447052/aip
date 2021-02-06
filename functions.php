<?php

function sendMail($to,$title,$content){

    require_once("phpmailer/class.phpmailer.php"); 
    require_once("phpmailer/class.smtp.php");
    
    $mail = new PHPMailer();
    
    $mail->SMTPDebug = 1;

    $mail->isSMTP();

    $mail->SMTPAuth=true;
    
    $mail->Host = 'smtp.163.com';

    $mail->SMTPSecure = 'ssl';

    $mail->Port = 465;

    $mail->Hostname = 'localhost';

    $mail->CharSet = 'UTF-8';

    $mail->FromName = '';

    $mail->Username ='senlon1@163.com';

    $mail->Password = 'ISJLPACSJNUWRSGO';

    $mail->From = 'senlon1@163.com';

    $mail->isHTML(true); 

    $mail->addAddress($to,'邮箱反馈');
    
    $mail->Subject = $title;

    $mail->Body = $content;

    $status = $mail->send();

    if($status) {
        return true;
    }else{
        return false;
    }
}

?>