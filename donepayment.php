<?php
    $sm = $_POST['dropdown'];
    $tid = $_POST['tid'];
    $Bid = $_POST['bid'];
    // echo $sm;

    include "dbcon.php";
    $qry="Update bill set P_Method='$sm' where bid='$Bid'";
    $cmd=mysqli_query($con, $qry);
    if($cmd){
        $qry1="Delete from cart where table_id='$tid'";
        $cmd1=mysqli_query($con, $qry1);
        if($cmd1)
        {
            // $_SESSION['tdid'] = $tid;
            header("location:order.php");
        }
        else{
            echo "query not run";
        }
    }
?>