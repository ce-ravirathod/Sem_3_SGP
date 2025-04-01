<?php
if(isset($_POST['submit'])){
	$npass=$_POST['npass'];
	$cpass=$_POST['cpass'];
	$name=$_POST['admin'];
  echo $cpass;
	if($npass==$cpass){
		// $con=mysqli_connect("localhost","id20387000_root","=OzTpX78M15d{gWw");
		// $db=mysqli_select_db($con,"id20387000_restaurant");
		include "dbcon.php";
		$query="update admin set apassword='$cpass' where aname='$name';"; //"delete from admin(apassword) where aname=$name";
		$cmd=mysqli_query($con,$query);
		if($cmd)
			echo "Data update successfully";
		else
			echo "data not update";
		// $qry="insert into admin(apassword) values ('$npass');";
		// $cmd=mysql_query($qry,$con);
		// if($cmd)
		// 	echo "Password changed successfully";
		// else
		// 	echo "Password not changed";
	}
}


?>