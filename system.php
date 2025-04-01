<?php 
	Session_start();

	$name = $_SESSION['name']; 

	include "dbcon.php";

	$qry="Select * from tbl";
	$cmd=mysqli_query($con, $qry);

?>
<html>
<head>
    <title>Menu</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="css/style.css">
    <style>
		* {
	padding: 0;
	margin: 0;
	box-sizing: border-box;
	font-family: arial, sans-serif;
}
.header {
	display: flex;
	justify-content: space-between;
	align-items: center;
	padding: 15px 30px;
	background: #23242b;
	color: #fff;
}
.u-name {
	font-size: 20px;
	padding-left: 17px;
}
.u-name b {
	color: #127b8e;
}
.header i {
	font-size: 30px;
	cursor: pointer;
	color: #fff;
}
.header i:hover {
	color: #127b8e;
}
.user-p {
	text-align: center;
	padding-left: 10px;
	padding-top: 25px;
}
.user-p img {
	width: 100px;
	border-radius: 50%;
}
.user-p h4 {
	color: #ccc;
	padding: 5px 0;

}
.side-bar {
	width: 250px;
	background: #262931;
	min-height: 100vh;
	transition: 500ms width;
}
.body {
	display: flex;
}
.section-1 {
	width: 100%;
	/* background-image: url("1.jpg"); */
	background:rgb(108,108,108);
	background-size: cover;
	background-position: center;
	display: flex;
	justify-content: center;
	align-items: center;
	flex-direction: column;
}
.section-1 h1 {
	color: #fff;
	font-size: 60px;
}
.section-1 p {
	color: #127b8e;
	font-size: 20px;
	background: #fff;
	padding: 7px;
	border-radius: 5px;
}
.side-bar ul {
	margin-top: 20px;
	list-style: none;
}
.side-bar ul li {
	font-size: 16px;
	padding: 15px 0px;
	padding-left: 15px;
	transition: 500ms background;
	white-space: nowrap;
	overflow: hidden;
	text-overflow: ellipsis;
    /* justify-content:center;
    display:flex; */
}
.side-bar ul li:hover {
	background: #127b8e;
}
.system{
    background: #127b8e;
    font-size: 16px;
	padding: 35px 98px 25px 0px;
	padding-left: 25px;
	transition: 500ms background;
	overflow: hidden;
	text-overflow: ellipsis;
}
.side-bar ul li a {
	text-decoration: none;
	color: #eee;
	cursor: pointer;
	letter-spacing: 1px;
}
.side-bar ul li a i {
	display: inline-block;
	padding-right: 10px;
	font-size: 23px;
}
.tables{
	/* border: 1px red solid; */
	border-top:1px solid white;
	border-bottom:1px solid white;
	border-radius:3xp;
	margin-top:20px;
	margin-bottom:20px;
	display:flex;
	height:70px;
	width:auto;
	background-color:rgba(255, 255, 255, 0.568);
}
.tables .tbl_no{
	margin-top:20px;
	margin-left:20px;
	width:50px;
	/* color:white; */
}
.tables .capacity{
	margin-top:20px;
	margin-left:20px;
	width:50px;
	/* color:white; */
}
.tables .edit_btn{
	margin-top:25px;
	margin-left:10px;
	height:30px;
	width:60px;
	text-decoration:none;
	color:black;
	/* background-color:white; */
}
.tables .edit_btn a{
	padding:10px;
	text-decoration:none;
	color:black;
	background-color:white;
}
.tables .delete_btn{
	margin-top:25px;
	margin-left:15px;
	margin-right:15px;
	height:30px;
	width:60px;
	text-decoration:none;
	color:black;
	/* background-color:white; */
}

.tables .delete_btn a{
	padding:10px;
	text-decoration:none;
	color:black;
	background-color:white;
}

form{
	background-color:rgba(54, 63, 63, 0.7);
	margin-top:50px;
	margin-left:00px;
	padding-top:50px;
	height:300px;
	width:500px;
	font-size:25px;
	color:white;
}

.wid{
	width:300px;
	margin-top: 20px;
	padding-left: 5px;
}

.wpass{
	width:200px;
	margin-top: 20px;
	padding-left: 5px;
}

.wname{
	width:200px;
	margin-top: 20px;
	padding-left: 5px;
}
.wcity{
	width:200px;
	margin-top: 20px;
	padding-left: 5px;
}

.wcon{
	width:150px;
	margin-top: 20px;
	padding-left: 5px;
}

.chef_id{
	width:300px;
	margin-top: 20px;
	padding-left: 5px;
}

.chef_pass{
	width:200px;
	margin-top: 20px;
	padding-left: 5px;
}

.chef_name{
	width:200px;
	margin-top: 20px;
	padding-left: 5px;
}
.chef_city{
	width:200px;
	margin-top: 20px;
	padding-left: 5px;
}

.chef_con{
	width:150px;
	margin-top: 20px;
	padding-left: 5px;
}

input[type=text]{
	font-size:25px;
	padding-left:20px;
	/* margin-left:50px; */
	/* width: 100%; */
  	border-radius: 5px;
  	box-sizing: border-box;
}

input[type=number]{
	font-size:25px;
	padding-left:20px;
	margin-left:10px;
	/* width: 100%; */
  	border-radius: 5px;
  	box-sizing: border-box;
}

button{
	font-size:25px;
	border-radius: 5px;
	/* margin-bottom:30px; */
	padding-top:15px;
	padding-left:15px;
	padding-right:15px;
	padding-bottom:10px;
}
#navbtn {
	display: inline-block;
	margin-left: 70px;
	font-size: 20px;
	transition: 500ms color;
}
#checkbox {
	display: none;
}
#checkbox:checked ~ .body .side-bar {
	width: 60px;
}
#checkbox:checked ~ .body .side-bar .user-p{
	visibility: hidden;
}
#checkbox:checked ~ .body .side-bar a span{
	display: none;
}

	</style>
</head>
<body><input type="checkbox" id="checkbox">
	<header class="header">
		<h2 class="u-name">SIDE <b>BAR</b>
			<label for="checkbox">
				<i id="navbtn" class="fa fa-bars" aria-hidden="true"></i>
			</label>
		</h2>
		<i class="fa fa-user" aria-hidden="true"></i>
	</header>
	<div class="body">
		<nav class="side-bar">
			<div class="user-p">
				<img src="user.png">
				<h4><?php echo $name;?></h4>
			</div>
			<ul>
				<li>
					<a href="adminwelcome.php">
						<i class="fa fa-desktop" aria-hidden="true"></i>
						<span>Dashboard</span>
					</a>
				</li>
				<li>
					<a href="order.php">
						<i class="fa fa-cutlery" aria-hidden="true"></i>
						<span>Order</span>
					</a>
				</li>
				<li>
					<a href="menu.php" class="menu">
						<i class="fa fa-book" aria-hidden="true"></i>
						<span>Menu</span>
					</a>
				</li>
				<li>
					<a href="analysis.php">
						<i class="fa fa-bar-chart" aria-hidden="true"></i>
						<span>Analysis</span>
					</a>
				</li>
				<li>
					<a href="system.php" class="system">
						<i class="fa fa-cog" aria-hidden="true"></i>
						<span>System</span>
					</a>
				</li>
				<li>
					<a href="logout.php">
						<i class="fa fa-power-off" aria-hidden="true"></i>
						<span>Logout</span>
					</a>
				</li>
			</ul>
		</nav>
		<section class="section-1">
			<h1>Add Table</h1><br>
<?php
include "dbcon.php";

	$qry="Select * from tbl";
	$cmd=mysqli_query($con, $qry);
	if($cmd)
	{
    while($row=mysqli_fetch_array($cmd)){
        $tbl_no=$row['table_no'];
        $cpt=$row['capacity'];
    ?>
<!-- <div class="menu_item">	 -->
	<div class="tables">
		<div class="tbl_no">
        	<h2><?php echo $tbl_no?></h2>
    	</div>
		<div class="capacity">
        	<h2><?php echo $cpt?></h2>
    	</div>
		<div class="edit_btn">
		<a href="edittbl.php?tbl_no=<?php echo $tbl_no?>&cap=<?php echo $cpt?>">Edit</a>
		</div>
		<div class="delete_btn">
		<a href="deletetbl.php?tbl_no=<?php echo $tbl_no?>">Delete</a>
		</div>	
	</div>
<!-- </div>	 -->
<?php
}
}
else{
	echo "Query not run";
}
?>
	<form action="addtable.php" method="post" enctype="multipart/form-data" >
		<center>
    	<!-- Table No : <input type="text" placeholder="Enter Table No" name="tbl_no" required><br><br> -->
    	Capacity :<input type="number" placeholder="Enter Table Capacity" name="cap" required><br><br>
    	<br><br><button type="submit" >Add</button>
		</center>		
    </form>

	<h1>Manage Waiter</h1>
	<?php
include "dbcon.php";

	$qry="Select * from waiter";
	$cmd=mysqli_query($con, $qry);
	if($cmd)
	{
    while($row=mysqli_fetch_array($cmd)){
        $wid=$row['wid'];
        $wpass=$row['wpassword'];
		$wname=$row['wname'];
		$wcity=$row['wcity'];
		$wcon=$row['w_con'];
    ?>
<!-- <div class="menu_item">	 -->
	<div class="tables">
		<div class="wid">
        	<h2><?php echo $wid?></h2>
    	</div>
		<div class="wpass">
        	<h2><?php echo $wpass?></h2>
    	</div>
		<div class="wname">
        	<h2><?php echo $wname?></h2>
    	</div>
		<div class="wcity">
        	<h2><?php echo $wcity?></h2>
    	</div>
		<div class="wcon">
        	<h2><?php echo $wcon?></h2>
    	</div>
		<div class="edit_btn">
		<a href="editwaiter.php?name=<?php echo $wname?>&wid=<?php echo $wid?>&wpass=<?php echo $wpass?>&wcity=<?php echo $wcity?>&wcon=<?php echo $wcon?>">Edit</a>
		</div>
		<div class="delete_btn">
		<a href="deletewaiter.php?name=<?php echo $wname?>">Delete</a>
		</div>	
	</div>
<!-- </div>	 -->
<?php
}
}
else{
	echo "Query not run";
}
?>


	<h1>Manage Chef</h1>
	<?php
include "dbcon.php";

	$qry="Select * from chef";
	$cmd=mysqli_query($con, $qry);
	if($cmd)
	{
    while($row=mysqli_fetch_array($cmd)){
        $cid=$row['chef_id'];
        $cpass=$row['chef_password'];
		$cname=$row['chef_name'];
		$ccity=$row['chef_city'];
		$ccon=$row['chef_cno'];
    ?>
<!-- <div class="menu_item">	 -->
	<div class="tables">
		<div class="chef_id">
        	<h2><?php echo $cid?></h2>
    	</div>
		<div class="chef_pass">
        	<h2><?php echo $cpass?></h2>
    	</div>
		<div class="chef_name">
        	<h2><?php echo $cname?></h2>
    	</div>
		<div class="chef_city">
        	<h2><?php echo $ccity?></h2>
    	</div>
		<div class="chef_con">
        	<h2><?php echo $ccon?></h2>
    	</div>
		<div class="edit_btn">
		<a href="editchef.php?name=<?php echo $cname?>&cid=<?php echo $cid?>&cpass=<?php echo $cpass?>&ccity=<?php echo $ccity?>&ccon=<?php echo $ccon?>">Edit</a>
		</div>
		<div class="delete_btn">
		<a href="deletechef.php?name=<?php echo $cname?>">Delete</a>
		</div>	
	</div>
<!-- </div>	 -->
<?php
}
}
else{
	echo "Query not run";
}
?>

	</section>
    </div>      
</body>      
</html>