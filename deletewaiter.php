<?php
    $wname = $_GET['name'];

    include "dbcon.php";
		// if($db)
		// 	echo "Database selected successfully";
		// else
		// 	echo "Database not selected";

			$qry="delete from waiter where wname='$wname'";
			//$qry="insert into customer values ('dhruveshpatel2005@gmail.com','321','dhruv',8746316145,'02-12-2023','dsad','anand','DJ');";
	   		$cmd=mysqli_query($con, $qry);
			if($cmd)
			{
                header("location:system.php");
            }
			else
			{
				echo "Record not";
			}

?>