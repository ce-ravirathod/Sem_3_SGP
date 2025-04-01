<?php
		$name=$_POST['fname'];
		$city=$_POST['city'];
		$num=$_POST['mobile'];
		$email=$_POST['email'];
		$pass=$_POST['pwd'];

		echo $name." ".$city." ".$num." ".$email." ".$pass;

		// $con=mysqli_connect("localhost","id20387000_root","=OzTpX78M15d{gWw");
		// $db=mysqli_select_db($con,"id20387000_restaurant");
		include "dbcon.php";
		if($db)
			echo "Database selected successfully ";
			//echo "----";
		else
			echo "Database not selected";

		$qry="insert into chef values ('$email','$pass','$name','$city','$num');";
		// $qry="insert into waiter values ('hitsavaliya52005@gmail.com','HIT123','hit','surat','6355872849');";
	   	$cmd=mysqli_query($con,$qry);
		if($cmd)
		{
			header("location:cheflogin.html");	
			//echo "Record insert successfully";

		}
		else
		{
			echo "Record not inserted";
		}
	
?>