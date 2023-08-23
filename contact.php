<?php
include 'settings.php';
    
    $captcha = isset($_POST['g-recaptcha-response']) ? $_POST['g-recaptcha-response'] : null;

    if(!is_null($captcha)){
        $res = json_decode(file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=".$captchaKeyPrivate."&response=".$captcha."&remoteip=".$_SERVER['REMOTE_ADDR']));
        if($res->success !== true){
            header("Location: " . $_SERVER['HTTP_REFERER'] . "?contact_form=error#contact", true, 301);
            echo "Message could not be sent.";
            exit();
        }
    } else {
        header("Location: " . $_SERVER['HTTP_REFERER'] . "?contact_form=error#contact", true, 301);
        echo "Message could not be sent.";
        exit();
    }



    $to = 'nubia@nuvi.studio, vitor@nuvi.studio';
    $subject = 'Nuvi Contact - ' . $_POST['from_name'];
    $message = $_POST['message'];
    $from_name = $_POST['from_name'];
    $from_email = $_POST['from_email'];
    $body = "\r\n
    Name: $from_name\r\n
    E-mail: $from_email\r\n
    Message: $message";
    $email = mail ($to,$subject,$body);
         
    if( $email == true ) {
        header("Location: " . $_SERVER['HTTP_REFERER'] . "?contact_form#contact", true, 301);
        echo "Message sent successfully.";
        exit();
    }else {
        header("Location: " . $_SERVER['HTTP_REFERER'] . "?contact_form=error#contact", true, 301);
        echo "Message could not be sent.";
        exit();
    }





