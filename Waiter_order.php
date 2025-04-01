<?php 
	Session_start();

	$name = $_SESSION['wname']; 
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
.header .back_btn{
	/* border: 2px solid red; */
	height:40px;
	width:90px;
	text-align:center;
	background-color:white;
	padding-top:11px;
	border-radius:10px;
}

.header .back_btn a{
	text-decoration:none;
	color:black;	
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
	/* background-image: urrgb(216, 216, 216)l("bg.jpg"); */
	background:rgb(108,108,108);
	background-size: cover;
	background-position: center;
	display: inline-flex;
	/* justify-content: center; */
	/* align-items: center; */
	/* flex-direction: column; */
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
.order{
    background: #127b8e;
    font-size: 16px;
	padding: 35px 113px 25px 0px;
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

.table{
	background-color:#1e202cb6;
	height:150px;
	width:150px;
	text-decoration:none;
	margin-left:15px;
	margin-top:15px;
}

.table a{
	text-align:center;
	align-items: center;
	text-decoration:none;
	
}

.table .tb_no h2{
	/* text-align:center; */
	margin-top:45px;
	color:white;
	font-size:55px;
	text-decoration:none;
	align-items: center;
}

.state{
	height:13px;
	width:13px;
	margin-top:22px;
	margin-left:130px;
	background-color:green;
	align-items: end;
	border-radius:100%;
}

.menu_item{
	width:2000px;
	height:auto;
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
@media only screen and (max-width: 480px) {
	.section-1 {
	width: 100%;
	display: block;
}
.table .tb_no h2{
	/* text-align:center; */
	padding-top:45px;
}
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
		<div class="back_btn">
			<a href="waiterwelcome.php">Back</a>
		</div>
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
					<a href="waiter_order.php" class="order">
						<i class="fa fa-cutlery" aria-hidden="true"></i>
						<span>Order</span>
					</a>
				</li>
				<li>
					<a href="Waiterlogin.html">
						<i class="fa fa-power-off" aria-hidden="true"></i>
						<span>Logout</span>
					</a>
				</li>
			</ul>
		</nav>
		<section class="section-1">
			
<?php
include "dbcon.php";
$qry="select * from tbl";
$cmd=mysqli_query($con,$qry);
$tbl=1;
if($cmd)
{
    while($row=mysqli_fetch_array($cmd)){
        $tblno=$row['table_no'];
        $cap=$row['capacity'];
    ?>
<!-- <div class="menu_item">	 -->
	<div class="table">
		<a href="waiter_table_order.php?tid=<?php echo $tblno;?>">
			<div class="tb_no">
        		<h2><?php echo $tbl; $tbl=$tbl+1; ?></h2>
    		</div>
			<div class="state">
				<h1> </h1>
    		</div>
		</a>
	</div>
<!-- </div>	 -->
<?php
}
}
else{
	echo "Query not";
}
?>		
	</section>
    </div>      
</body>      
</html>