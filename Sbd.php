<?php
if (isset($_GET['selected-date'])) {
  $selected_date = $_GET['selected-date'];
  $sdate = date('d/F/Y', strtotime($selected_date));
}
?>

<?php 
	Session_start();

	$name = $_SESSION['name']; 
?>
<html>
<head>
    <title>Menu</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
	background-image: url("1.jpg");
	background-size: cover;
	background-position: center;
	display: flex;
	justify-content: center;
	align-items: center;
	flex-direction: column;
}
.section-1 h1 {
	color: white;
	font-size: 60px;
}
.section-1 h2 {
	color: black;
	font-size: 30px;
    margin-top: 30px;
    background-color: rgb(255, 255, 255, .568);
    padding: 10px;
    border-radius: 10px;
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
.analysis{
    background: #127b8e;
    font-size: 16px;
	padding: 35px 84px 25px 0px;
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
.container{
	background-color:#1e202cb6;
	display: flex;
	width: 500px;
	margin-top: 30px;
	height: 50px;
	color: white;
}

.container .bid{
	width: 100px;
	margin-top: 12px;
	margin-bottom: 12px;
	/* margin-left: 10px; */
	/* margin-right: 10px; */
	border-right: 1px solid whitesmoke;
	text-align: center;
	padding: 5px;
}
.container .date{
	width: 150px;
	margin-top: 12px;
	border-right: 1px solid whitesmoke;
	margin-bottom: 12px;
	/* margin-right: 10px; */
	/* margin-left: 10px; */
	text-align: center;
	padding: 5px;
}
.container .ttl{
	width: 100px;
	margin-top: 12px;
	border-right: 1px solid whitesmoke;
	margin-bottom: 12px;
	/* margin-right: 10px; */
	/* margin-left: 10px; */
	text-align: center;
	padding: 5px;
}
.container .tid{
	width: 50px;
	margin-top: 12px;
	border-right: 1px solid whitesmoke;
	margin-bottom: 12px;
	/* margin-right: 10px; */
	/* margin-left: 10px; */
	padding: 5px;
	text-align: center;
}
.container .bill{
	width: 100px;
	margin-top: 12px;
	margin-right: 10px;
	margin-bottom: 12px;
	/* margin-left: 10px;
	padding-left: 30px; */
	padding-top: 5px;
	text-align: center;
	color: #fff;
}
.container .bill a{
	color: #fff;
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
			<a href="analysis.php">Back</a>
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
					<a href="analysis.php" class="analysis">
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
			<h1>Bill History</h1>
			<?php
				include "dbcon.php";
				$qry="Select * from bill where date='$sdate'";
				$cmd=mysqli_query($con, $qry);
				if($cmd){
                    if(mysqli_num_rows($cmd) > 0){
					    while($row=mysqli_fetch_array($cmd)){
						    $bid=$row['bid'];
        				    $date=$row['date'];
						    $ttl=$row['total_amount'];
						    $tid=$row['tid'];
						    $bill=$row['Bill_name'];
						    ?>
						    <div class="container">
						    	<div class="bid"><?php echo $bid?></div>
						    	<div class="date"><?php echo $date?></div>
						    	<div class="ttl"><?php echo $ttl?></div>
						    	<div class="tid"><?php echo $tid?></div>
						    	<?php $show_bill = "bill/".$bill; ?>
						    	<div class="bill"><a href="<?php echo $show_bill;?>"><i class="fa fa-eye"></i></a></div>
						    </div>
<?php
                        }
				    }
                    else
                    {
                        ?>
                            <h2 class="ndf">No Bill Found For <?php echo $sdate?></h2>
                        <?php
                    }
				}	
			?>
	</section>
    </div>      
</body>      
</html>
