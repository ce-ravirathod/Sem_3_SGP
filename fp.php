<?php
    Session_start();
    
    $mail=$_POST['mail'];
    // echo $email;

    //$mail = "nikedobariya12@gmail.com";
    $pwd = rand(100000,999999);
    // echo $pwd;
    mail($mail,"Subject",$pwd);
    header("location:OTPform.php");
    $_SESSION['otpx']=$pwd;
?>