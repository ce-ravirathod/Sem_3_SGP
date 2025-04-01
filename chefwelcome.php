<?php 
	Session_start();

	$name = $_SESSION['cname']; 
?>

<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="refresh" content="10">
	<title>Dashboard</title>
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
	padding-left: 20px;
	transition: 500ms background;
	white-space: nowrap;
	overflow: hidden;
	text-overflow: ellipsis;
}
.side-bar ul li:hover {
	background: #127b8e;
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

.list {
	width:auto;
	height:auto;
	display:flex;
	border-top:1px solid white;
	border-bottom:1px solid white;
	/* margin-top:30px; */
	margin-left:00px;
	margin-bottom:10px;
	text-align:center;
	background-color:rgba(255, 255, 255, 0.568);
	font-size:20px;
}

.list .tbl_no{
	/* border:1px red solid; */
	width:50px;
	margin:15px;
	margin-top:21px;
	/* margin-right:30px;
	margin-left:30px; */
}

.list .itm_name{
	/* border:1px red solid; */
	width:200px;
	margin:15px;
	margin-top:21px;
	/* margin-right:30px;
	margin-left:30px; */
}

.list .qty{
	/* border:1px red solid; */
	width:50px;
	margin:15px;
	margin-top:21px;
	/* margin-right:30px;
	margin-left:30px; */
}

.list .done_btn{
	width:auto;
	margin:15px;
	text-decoration:none;
	background:white;
	padding:5px;
	color:black;
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
<body>
	<input type="checkbox" id="checkbox">
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
					<a href="#">
						<i class="fa fa-desktop" aria-hidden="true"></i>
						<span>Dashboard</span>
					</a>
				</li>
				<li>
					<a href="cheflogin.html">
						<i class="fa fa-power-off" aria-hidden="true"></i>
						<span>Logout</span>
					</a>
				</li>
			</ul>
		</nav>
		<section class="section-1">
		<?php
			include "dbcon.php";

			$qry="select * from cart where status='0'";
			$cmd=mysqli_query($con, $qry);
			if($cmd){
				while($row=mysqli_fetch_array($cmd)){
					$oid=$row['oder_id'];
					$tbl_no=$row['table_id'];
					$itm_name=$row['item_name'];
					$qty=$row['quantity'];
					$sts=$row['status'];
					if($sts==0){
			?>
			<div class="list">
			<div class="tbl_no"><?php echo $tbl_no;?></div>
			<div class="itm_name"><?php echo $itm_name;?></div>
			<div class="qty"><?php echo $qty;?></div><br>
			<a href="status.php?oid=<?php echo $oid;?>" class="done_btn">Done</a>
			</div><br>
			<?php
					}
				}
			}
			?>
		</section>
	</div>
</body>
</html>