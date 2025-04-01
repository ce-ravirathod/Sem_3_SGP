
<?php 
	Session_start();
	error_reporting(0);
	$name = $_SESSION['name']; 
	$tno = $_SESSION['tid'];
	// echo $stid;
	if($tno)
	{
		$tid = $tno;
	}
	else 
	{
		$tid = $_GET['tid'];
	}
	date_default_timezone_set('Asia/Kolkata');
	$currentDate = date('j/F/Y');
	$tdate = date("hi"); 
	$bill= "B".$tdate;	
	include "dbcon.php";
			$sql = "SELECT * FROM cart where table_id='$tid'";
			$result = mysqli_query($con, $sql);
			$total=0;
			if (mysqli_num_rows($result) <= 0) {
				$bill=0;
			} 
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
	height: auto;
}
.section-1 {
	width: 100%;
	/* background-image: urrgb(216, 216, 216)l("bg.jpg"); */
	background:rgb(108,108,108);
	background-size: cover;
	background-position: center;
	display: flex;
	justify-content: center;
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

.section-1 .aside-1{
	/* border: 1px solid red; */
	margin-left: 30px;
	margin-top: 50px;
	margin-bottom: 50px;
	width: 300px;
	height: auto;
	background-color: whitesmoke;
	text-align: center;
}
.section-1 .aside-1 label{
	font-size: 20px;
	margin: 20px;
}

.section-1 .aside-1 select{
	font-size: 20px;
	margin: 20px;
	width: 200px;
	height: 35px;
	border: 2px solid black;
}

.section-1 .aside-1 form input[type=submit]{
	font-size: 20px;
	height: 40px;
	width: 130px;
	padding: 10px;
	/* margin-left: 85px; */
	margin-bottom: 40px;
	background-color: green;
	border-radius: 10px;
	border: none;
	/* text-decoration: none;
	color: black;
	background-color: green;
	border-radius: 10px; */
}

.section-1 .aside-1 form a{
	font-size: 20px;
	height: 40px;
	width: 200px;
	padding: 10px;
	text-decoration: none;
	color: black;
	background-color: green;
	border-radius: 10px;
}
.side-bar ul {
	margin-top: 20px;
	list-style: none;
}
.side-bar ul li {
	font-size: 16px;
	padding: 15px 0px;
	padding-left: 25px;
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
    /* background: #127b8e; */
    font-size: 16px;
	padding: 35px 113px 25px 0px;
	/* padding-left: 25px; */
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


.bill {
	border:1px solid white;
	width:auto;
	/* height:300px; */
	background-color: white;
	margin-top: 50px;
	margin-bottom: 50px;
}

.bill .print{
	font-size: 20px;
	height: 40px;
	width: 130px;
	padding: 10px;
	margin-left: 340px;
	margin-top: 100px;
	margin-bottom: 40px;
	background-color: green;
	border-radius: 10px;
}

.bill .print a{
	text-decoration: none;
	color:black;
}

.bill h3{
	margin-left: 40px;
}

.bill .bill-title{
	margin-top: 50px;
}
.bill .billno{
	margin-left:40px;
}

.title{
	margin-left: 40px;
}

.today_date{
	margin-left: 40px;
}

.bill label{
	font-size: 35px;
}

.bill .items{
	display: flex;
}
.name{
	width:400px;
	border: 1px solid black;
	margin-left: 40px;
}
.qty{
	width:100px;
	border: 1px solid black;
	text-align: end;
}
.price{
	width:100px;
	border: 1px solid black;
	text-align: end;
}
.total{
	width:130px;
	border: 1px solid black;
	text-align: end;
	margin-right: 40px;
}
.netprice{
	width:730px;
	border: 1px solid black;
	text-align: end;
	margin-right: 40px;
	margin-left: 40px;
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
		<div class="back_btn">
			<a href="order.php">Back</a>
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
					<a href="adminwelcome.php">
						<i class="fa fa-desktop" aria-hidden="true"></i>
						<span>Dashboard</span>
					</a>
				</li>
				<li>
					<a href="order.php" class="order">
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
        <div class="bill">
			<center><label class="bill-title">Bill</label></center>
            <div class="title">Table No. : <?php echo $tid;?></div><br><br>
			<div class="line-1">
				<div class="today_date">Date : <?php echo " ".$currentDate." ";?></div><br><br>
				<div class="billno"><?php echo "Bill No: ".$bill; ?></div><br>
			</div>
			<?php
			include "dbcon.php";
			$sql = "SELECT price*quantity AS total_price FROM cart where table_id='$tid'";
			$result = mysqli_query($con, $sql);
			$total=0;
			if (mysqli_num_rows($result) > 0) {
				while ($row = mysqli_fetch_assoc($result)) {
					// echo $row["total_price"];
					$total=$total+$row["total_price"];
				}
			} 
			else {
				$rs="No Data Found";
				?><h3><?php echo $rs?></h3><?php
			}
			$qry="select * from cart where table_id='$tid'";
			$cmd1=mysqli_query($con, $qry);
			if($cmd1)
			{
    			while($row=mysqli_fetch_array($cmd1)){
        			$item_name=$row['item_name'];
        			$price=$row['price'];
					$qty=$row['quantity'];
					$ttl= $qty * $price;
        		?>
			<div class="items">
				<h2 class="name"><?php echo $item_name;?></h2>
				<h2 class="qty"><?php echo $qty;?></h2>
				<h2 class="price"><?php echo $price;?></h2>
				<h2 class="total"><?php echo $ttl;?></h2>
			</div>
	<?php       
    }
    }?>
			<div class="netprice">Net Price :<?php echo $total;?></div>
			<div class="print">
			<center><a href="temppdf.php?tid=<?php echo $tid?>&total=<?php echo $total?>&tdate=<?php echo $currentDate?>&billno=<?php echo $bill?>">Print</a></center>
			</div>
        </div>
		<aside class="aside-1">
		<form action="donepayment.php" method="post">
			<br>
  			<label for="dropdown">Select Payment Option:</label><br><br>
  			<select id="dropdown" name="dropdown">
    			<option value="Cash">Cash</option>
    			<option value="Card">Card</option>
    			<option value="UPI">UPI</option>
  			</select><br><br>
			<input type="hidden" name="tid" value="<?php echo $tid?>">
			<input type="hidden" name="bid" value="<?php echo $bill?>">
  			<input type="submit" value="Save">
			  
		</form>
		</aside>
	    </section>
    </div>      
</body>      
</html>