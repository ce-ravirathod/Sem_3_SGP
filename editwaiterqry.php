<?php

$wname=$_POST['wname'];
$wid=$_POST['wid'];
$ewid=$_POST['ewid'];
$wpass=$_POST['wpass'];
$wcity=$_POST['wcity'];
$wcon=$_POST['wcon'];

include "dbcon.php";
    // if($db)
    //     echo "Database selected successfully";
    // else
    //     echo "Database not selected";

        $qry="update waiter set wid='$wid',wpassword='$wpass', wname='$wname', wcity='$wcity',w_con='$wcon' where wid='$ewid'";
        //$qry="insert into customer values ('dhruveshpatel2005@gmail.com','321','dhruv',8746316145,'02-12-2023','dsad','anand','DJ');";
           $cmd=mysqli_query($con, $qry);
        if($cmd)
        {
            header("location:system.php");
        }
        else
        {
            echo "Record not inserted"; 
        }

?>