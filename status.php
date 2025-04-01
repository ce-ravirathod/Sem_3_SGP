<?php
include "dbcon.php";

$oid=$_GET['oid'];
echo  $oid;
$qry="update cart set status='1' where oder_id='$oid'";
$cmd=mysqli_query($con, $qry);
if($cmd){
    header('location:chefwelcome.php');
}else{
    echo "hello";
}
?>