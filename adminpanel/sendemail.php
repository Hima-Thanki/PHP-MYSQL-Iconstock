<?php

    $receiver = "hima1006thanki@gmail.com";
    $subject = "Simple Email Test";
    $body = "Good morning...hi..";
    $sender = "From: thankihima1006@gmail.com";
    if (mail($receiver, $subject, $body, $sender)) 
    {
        echo "Email successfully sent to $receiver....";
    } 
    else 
    {
        echo "Email sending failed...";
    }	
?>