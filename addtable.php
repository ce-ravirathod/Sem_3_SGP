<?php
    // $tbl_no = $_POST['tbl_no'];
    $cap = $_POST['cap'];

    include "dbcon.php";
	$qry="Select * from tbl";
	$cmd=mysqli_query($con, $qry);
	$num =mysqli_num_rows($cmd);
	
	$tmp=$num +1;
	$tn="T".$tmp;

	$qry="insert into tbl values ('$tn','$cap')";
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