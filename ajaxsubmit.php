<?php
    $name=$_POST['name'];
    $email=$_POST['email'];
    $mobile=$_POST['mobile'];
    $message1=$_POST['message'];
    $message = "<h1><b>Name:".$name."</b></h1>";
    $message .= "<h1>Email:".$email."</h1>";
    $message .= "<h1>Mobile:".$mobile."</h1>";
    $message .= "<h1>Message:".$message1."</h1>";
    $to_email_address="cmanna7@gmail.com";
    //$to_email_address="info.nrsbs@gmail.com";
    $subject="Contact from ".$name;
    $header = "From:".$email."\r\n";
    $header .= "Cc:cmanna7@gmail.com \r\n";
    $header .= "MIME-Version: 1.0\r\n";
    $header .= "Content-type: text/html\r\n";
    if ( mail($to_email_address,$subject,$message,$header)) {
        echo("Email successfully sent to $to_email_address...");
     } else {
        echo("Email sending failed...");
     }
?>