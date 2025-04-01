<?php 
	Session_start();

	$name = $_SESSION['name']; 
	$cname=$_GET['name'];
    $cid=$_GET['cid'];
    $cpass=$_GET['cpass'];
    $ccity=$_GET['ccity'];
    $ccon=$_GET['ccon'];
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
	background-image: url("1.jpg");
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
	display:flex;
	height:70px;
	width:auto;
}
.tables .tbl_no{
	margin-top:20px;
	margin-left:20px;
	width:50px;
	color:white;
}
.tables .capacity{
	margin-top:20px;
	margin-left:20px;
	width:50px;
	color:white;
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
	height:500px;
	width:700px;
	font-size:25px;
	color:white;
}

input[type=text]{
	font-size:25px;
	padding-left:20px;
	/* margin-left:50px; */
	/* width: 100%; */
  	border-radius: 5px;
  	box-sizing: border-box;
    height:auto;
    width:300px;
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
			<h1>Edit Chef</h1><br>
	<form action="editwaiterqry.php" method="post" enctype="multipart/form-data" >
		<center>
    	Chef id : <input type="text" value="<?php echo $cid?>" name="cid" required><br><br>
    	Chef  passsword :<input type="text" value="<?php echo $cpass?>" name="cpass" required><br><br>
		Chef  name : <input type="text" value="<?php echo $cname?>" name="cname" required><br><br>
    	City :<input type="text" value="<?php echo $ccity?>" name="ccity" required><br><br>
		Contact : <input type="text" value="<?php echo $ccon?>" name="ccon" required><br><br>
        <input type="hidden" name="ecid" value="<?php echo $cid;?>">
    	<br><br><button type="submit" >Add</button>
		</center>		
    </form>
	</section>
    </div>      
</body>      
</html>