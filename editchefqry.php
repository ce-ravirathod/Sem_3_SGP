<?php

$wname=$_POST['wname'];
$cid=$_POST['cid'];
$ecid=$_POST['ecid'];
$cpass=$_POST['cpass'];
$ccity=$_POST['ccity'];
$ccon=$_POST['ccon'];

include "dbcon.php";
    // if($db)
    //     echo "Database selected successfully";
    // else
    //     echo "Database not selected";

        $qry="update waiter set chef_id='$cid',chef_password='$cpass', chef_name='$cname', chef_city='$ccity',chef_cno='$ccon' where chef_id='$ecid'";
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