<?php
    Session_start();
    $otp=$_POST['otp'];
    $otp1=$_SESSION['otpx'];
    if($otp==$otp1)
    {
        header("location:newpass.php");
    }
    else
    {
        echo "Wrong OTP";
    }
?>