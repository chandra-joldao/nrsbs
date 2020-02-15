<?php
    $name=$_POST['name'];
    $email=$_POST['email'];
    $mobile=$_POST['mobile'];
    $message1=$_POST['message'];
    $message = "<h1><b>Name:".$name."</b></h1>";
    $message .= "<h1>Email:".$email."</h1>";
    $message .= "<h1>MObile:".$mobile."</h1>";
    $message .= "<h1>Message:".$message1."</h1>";
    $to_email_address="cmanna7@gmail.com";
    $subject="Contact from ".$name;
    $headers = "From: chandramanna@yahoo.com";
    mail($to_email_address,$subject,$message,[$headers]);
?>