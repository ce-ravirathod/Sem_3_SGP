<?php 
	session_start();

	$name = $_SESSION['name']; 

	$tb_no = $_GET['tid'];
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
	position: fixed;
	width:1480px;
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
	width: 380px;
	height:700;
	background: #262931;
	transition: 500ms width;
	position: fixed;
	margin-top:70px;
	padding-top: 10px;
	color: white;
	font-size:10px;
	overflow-y: auto;
}
.body {
	display: flex;
	height:auto;
}
.section-1 {
	width: 100%;
	background-color:rgb(108,108,108);
	background-size: cover;
	background-position: center;
	display: flex;
	justify-content: center;
	align-items: center;
	flex-direction: column;
}
.section-1 h1 {
	margin-top:100px;
	margin-left:200px;
	color: white;
	font-size: 60px;
}
/* .section-1 h2 {
	margin-top:100px;
	margin-left:200px;
	color: white;
	font-size: 20px;
} */
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
.menu{
    background: #127b8e;
    font-size: 16px;
	padding: 35px 112px 25px 0px;
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


input[type=number]{
	font-size:25px;
	padding-left:20px;
	/* margin-left:50px; */
	/* width: 100%; */
  	border-radius: 5px;
  	box-sizing: border-box;
}


/* Side bar css */
.side-bar .item_name{
	/* border: 2px solid red; */
	margin-top:20px;
    margin-bottom:25px;
	margin-left:10px;
	margin-right:10px;
	color:white;
	width:180px;
	display:inline;
	position: absolute;
}

.side-bar .quantity{
	/* border: 1px solid red; */
	width: 20px;
	margin-left: 200px;
	margin-top: 11px;
	display: inline;
	position: absolute;
}

.side-bar .price{
	/* border: 2px solid red; */
	/* margin-top:7px; */
	margin-left:230px;
	/* margin-right:10px; */
	width:40px;
	display: inline;
	position: absolute;
}

.side-bar .net_price{
	width: 40px;
	/* margin-top: 7px; */
	margin-left: 270px;
	display: inline;
	position: absolute;
}
.side-bar .pencil{
	/* border:1px solid red; */
	display: inline;
	position: absolute;
	/* margin-top:7px; */
	margin-left: 320px;
	/* height:10px; */
	width:auto;
	font-size:13px;
	color:white;
}

.side-bar .trash{
	/* border:1px solid red; */
	margin-top:30px;
	margin-left: 350px;
	/* height:10px; */
	width:auto;
	font-size:15px;
	color:white;
}

.total{
	/* border: 2px solid red; */
	width: 120px;
	margin-top: 20px;
	margin-left:260px;
	font-size:20px;
}

.side-bar .checkout a{
	/* border:1px solid red; */
	position: absolute;
	/* bottom: 0; */
	font-size:25px;
	text-decoration:none;
	padding:7px;
	margin-left:130px;
	margin-top:40px;
	/* margin-bottom:20px; */
	color:white;
	background-color:green;
	/* left: 50%; */
	/* transform: translateX(50%); */
}

/* Side bar css */

.menuitem {
	width:700px;
	height:auto;
	display:flex;
	border-top:1px solid black;
	border-bottom:1px solid black;
	margin-top:15px;
	margin-left:200px;
	margin-bottom:10px;
	background-color:rgba(255, 255, 255, 0.568);
}

form{
    width:700px;
	display:flex;
}

.menuitem .name{
	margin-top:25px;
	margin-left:30px;
	margin-right:10px;
	width:280px
}

.menuitem .price{
	margin-top:25px; 
	margin-left:30px;
	margin-right:10px;
	margin-bottom:25px;
	width: 50px;
}
.menuitem .quantity input{
	margin-top:23px;
	margin-left:30px;
	margin-right:30px;
	width:100px;
}
.menuitem .add_btn{ 
	text-align:right;	
	float:right;
	align-items:right;
	margin-top:18px;
} 

.menuitem .add_btn button{
	border:1px solid;
	font-size:15px;
	color:black;
	width:80px;
	height:40px;
	text-align:center;
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
<?php
include "dbcon.php";
$qry="select * from cart where table_id='$tb_no'";
$cmd1=mysqli_query($con, $qry);
$num=mysqli_num_rows($cmd1);
if($num>0)
{
$total=0;
if($cmd1)
{
    while($row=mysqli_fetch_array($cmd1)){
		$order_id=$row['oder_id'];
        $item_name=$row['item_name'];
		$qty=$row['quantity'];
        $price=$row['price'];
    ?>
			<div class="item_name"><h2><?php echo $item_name;?></h2></div><br>
			<div class="quantity"><h2><?php echo $qty;?></h2></div><br>
			<div class="price"><h2><?php echo $price;?></h2></div>
			<div class="net_price"><h2><?php $netprice = $qty*$price; echo $netprice?></h2></div>
			<a href="edit_cart.php?oid=<?php echo $order_id;?>&tb_no=<?php echo $tb_no; ?>" class="pencil"><i class="fa fa-pencil fa-lg"></i></a>
			<a href="delete_cart.php?oid=<?php echo $order_id;?>&tb_no=<?php echo $tb_no; ?>" class="trash"><i class="fa fa-trash-o"></i><br></a>
			<!-- <div class="net1_price"><h2><?php ?></h2></div> -->
			<?php
$sql = "SELECT price*quantity AS total_price FROM cart where table_id='$tb_no'";
$result = mysqli_query($con, $sql);
	
	}
	if (mysqli_num_rows($result) > 0) {
		while ($row = mysqli_fetch_assoc($result)) {
			// echo $row["total_price"];
			$total=$total+$row["total_price"];
		}
	} 
	else {
		echo "No rows found";
	}
}else{
	echo "query not found";
}?>
<div class="total"><?php echo "Total : "; echo $total; ?></div>
	<div class="checkout"><a href="checkout.php?tid=<?php echo $tb_no?>">Checkout</a></div>
	<?php
}else{
	echo " ";
}?>

		</nav>
	
<section class="section-1">
			<h1>Order</h1>
<?php
include "dbcon.php";
$qry="select * from menu";
$cmd1=mysqli_query($con, $qry);
if($cmd1)
{
    while($row=mysqli_fetch_array($cmd1)){
        $item_name=$row['item_name'];
        $price=$row['price'];
		$cat=$row['categories'];
		$sts=0;
    ?>
<!-- <div class="menu_item">	 -->
	<div class="menuitem">
	<form action="add_cart_query.php" method="post">
		<div class="name">
			<h2><?php echo $item_name;?></h2>
    	</div>
		<div class="price">
        	<h2>&#x20B9;<?php echo $price?></h2>
    	</div>
        <input type="hidden" name="item_name" value="<?php echo $item_name;?>">
		<input type="hidden" name="tid" value="<?php echo $tb_no;?>">
		<input type="hidden" name="sts" value="<?php if($cat=='Drinks'){$sts=1;}else{$sts=0;} echo $sts;?>">
        <div class="quantity">
        	<input type="number" name="qty">
    	</div>
		<div class="add_btn">
		<button>ADD</button>
		</div>	
    </form>
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