<?php 
session_start();
$id=$_POST["fname"];
$pass=$_POST["pwd"];

// echo $id;
// echo $pass;
// $con=mysqli_connect("localhost","id20387000_root","=OzTpX78M15d{gWw");
// $db=mysqli_select_db($con,"id20387000_restaurant");
include "dbcon.php";
$query="select * from chef where chef_id='$id'";
$cmd=mysqli_query($con,$query);
$num=mysqli_num_rows($cmd);
if($num==0){
    echo "Please enter correct id";
    
}
while($row=mysqli_fetch_array($cmd)){
    $pwd=$row["chef_password"];
    $name=$row["chef_name"];
?>
<?php 
if($pass==$pwd){
    $_SESSION['cname']=$name;
    header("location:chefwelcome.php");
    
}
else{
    echo "Please enter correct password";
}
?>
<?php } ?>