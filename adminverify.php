<?php 
Session_start();

$uname = $_POST["aname"];
$pass = $_POST["pwd"];
// echo $uname;
// echo $pass;
include "dbcon.php";
// $con=mysqli_connect("localhost","id20387000_root","=OzTpX78M15d{gWw");
// $db=mysqli_select_db($con,"id20387000_restaurant");
$query="select * from admin where aid='$uname'and apassword='$pass';";
$cmd=mysqli_query($con,$query);
$num=mysqli_num_rows($cmd);
if($num==0){
    echo "Please Enter Correct Email Or Password";
}
while($row=mysqli_fetch_array($cmd))
{
    $pwd=$row['apassword'];
    $name=$row['aname'];
?>
<?php 
if($pass==$pwd){
	$_SESSION['name']=$name;
	header("location:adminwelcome.php?un=".$_SESSION['name']);
}
else{	
	echo "Please enter correct password";
}
?>

<?php } ?>