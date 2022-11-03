<?php
if (isset ($_POST['submit']) ) {
    $name     =$_POST['name'];
    $email    =$_POST['email'];
    $subject  =$_POST['subject'];
    $message   =$_POST['message'];


    $to              = 'liyanadileesha1226@gmail.com';
    $email_subject   = 'Message from website';
    $email_body      = "Message from Contact us page of website: <br>";
    $email_body     .= "<b>From:</b> {$name} <br>";
    $email_body     .= "<b>subject:</b> {$subject} <br>";
    $email_body     .= "<br>Message:</b><br>". nl2br(strip_tags($message));


    $header = "From: {$email} \r\n ";


    mail($to,$email_subject,$email_body,$header);


}

?>