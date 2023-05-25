<?php 
ini_set("SMTP","localhost");
ini_set("sendmail_from","thankikrupa6@gmail.com");

$name = $_POST['name'];
$from = $_POST['email'];
$msg = $_POST['message'];

$to = "hima1006thanki@gmail.com";
$subject = "Contact mail from $name";

if (mail($to, $subject, $msg, $from)) 
{
    echo "Email successfully sent to $to....";
} 
else 
{
    echo "Email sending failed...";
}   

?>