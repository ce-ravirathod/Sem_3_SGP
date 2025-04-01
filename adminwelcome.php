<?php 
	Session_start();

	$name = $_SESSION['name']; 
	date_default_timezone_set('Asia/Kolkata');
?>

<!DOCTYPE html>
<html>
<head>
	<title>Dashboard</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<!-- <script type="text/javascript">
        function preventBack(){
            window.history.forward()
        };
        setTimeout("preventBack()",0);
        window.onunload=function(){null;}
    </script> -->
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
	background-size: cover;
	background-position: center;
	display: flex;
	/* justify-content: center; */
	/* align-items: center; */
	/* flex-direction: column; */
}
.section-1 h2 {
	color: #fff;
	font-family: 'Courier New', Courier, monospace;
}
.section-1 p {
	color: #127b8e;
	font-size: 20px;
	background: #fff;
	padding: 7px;
	border-radius: 5px;
}

.section-1 .s1{
	border: 1px solid whitesmoke;
	height: 130px;
	width: 270px;
	display: flex;
	margin-top: 100px;
	margin-left: 100px;
	background-color: rgba(255,87,34,255);
}

.section-1 .s1 .txt{
	display: block;
}

.section-1 .s1 h2{
	/* margin-top: 20px; */
	font-size: 22px;
	/* margin-left: 20px; */
	padding-top: 20px;
	padding-left: 20px;
}
.section-1 .s1 i{
	/* border-right: 1px solid whitesmoke; */
	width: 70px;
	padding: 20px;
	padding-top: 40px;
	font-size: 35px;
	color: #fff;
	background-color: rgba(230,74,25,255);
}
.section-1 .s2{
	height: 130px;
	width: 270px;
	display: flex;
	margin-top: 100px;
	margin-left: 50px;
	background-color: rgba(0,188,212,255);
}
.section-1 .s2 h2{
	/* margin-top: 20px; */
	font-size: 22px;
	/* margin-left: 20px; */
	padding-top: 20px;
	padding-left: 20px;
}
.section-1 .s2 i{
	width: 70px;
	padding: 20px;
	padding-top: 40px;
	font-size: 35px;
	color: #fff;
	background-color: rgba(0,151,167,255);
}
.section-1 .s3{
	height: 130px;
	width: 270px;
	display: flex;
	margin-top: 100px;
	margin-left: 50px;
	background-color: rgba(0,150,136,255);
}
.section-1 .s3 h2{
	/* margin-top: 20px; */
	font-size: 22px;
	/* margin-left: 20px; */
	padding-top: 20px;
	padding-left: 20px;
}
.section-1 .s3 i{
	/* border-right: 1px solid whitesmoke; */
	width: 70px;
	padding: 20px;
	padding-top: 40px;
	font-size: 35px;
	color: #fff;
	background-color: rgba(0,121,107,255);
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
.dashbd{
    background: #127b8e;
    font-size: 16px;
	padding: 25px 65px 15px 0px;
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
	<?php
		$tdate = date('j/F/Y');
		// echo $tdate;
		include "dbcon.php";
		$total=0;
		$sql = "SELECT total_amount AS total_sale FROM bill where date='$tdate'";
		$result = mysqli_query($con, $sql);
		if (mysqli_num_rows($result) > 0) {
			while ($row = mysqli_fetch_assoc($result)) {
				$total=$total+$row["total_sale"];
			}
		} 

		$qry="select * from tbl";
		$cmd= mysqli_query($con, $qry);
		$ttbl=mysqli_num_rows($cmd);


		$sql = "SELECT * FROM cart";
		$result = mysqli_query($con, $sql);
		$values = array();
		$temp=0;
		while ($row = mysqli_fetch_assoc($result)) {
			$value = $row['table_id'];
    		if (!in_array($value, $values)) {
        	$values[] = $value;
			$temp=$temp+1;
    		}
		}

		$qur="select * from bill where date='$tdate'";
		$result = mysqli_query($con, $qur);
		$num =mysqli_num_rows($result);
	?>
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
					<a href="adminwelcome.php" class="dashbd">
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
					<a href="menu.php">
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
					<a href="system.php">
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
			<!-- <h1>WELCOME</h1> -->
			<!-- <label for="date">Select a date:</label> -->
			<section class="s1">
				<i class="fa fa-money"></i>
				<div class="txt">
					<h2>Collection</h2>
					<h2><?php echo $total;?></h2>
				</div>
			</section>
			<section class="s2">
				<i class="fa fa-cutlery"></i>
				<div class="txt">
					<h2>Tables</h2>
					<h2><?php echo $temp."/".$ttbl?></h2>
				</div>
			</section>
			<section class="s3">
				<i class="fa fa-bar-chart"></i>
				<div class="txt" >
					<h2>Total Sale</h2>
					<h2><?php echo $num?></h2>
				</div>
			</section>
		</section>
	</div>

</body>
</html>