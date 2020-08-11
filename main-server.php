<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $to = "ambrosemwaka@gmail.com";
    $subject = $_POST['subject'];
    $message = "Name: {$_POST['name']}, \n\n {$_POST['message']}";
    
    $header = "From:{$_POST['from']} \r\n";
    $header .= "MIME-Version: 1.0\r\n";

    die($message);
    
    $retval = mail($to, $subject, $message, $header);
    
    if( $retval == true ) {
        echo "Message sent successfully...";
    }else {
        echo "Message could not be sent...";
    }
}