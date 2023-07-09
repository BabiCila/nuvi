<?php
    
    $to = 'viviandhj@gmail.com';
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
        header("Location: http://nuvi.studio", true, 301);
        echo "Message sent successfully...";
        exit();
    }else {
       echo "Message could not be sent...";
    }





