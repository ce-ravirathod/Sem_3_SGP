<?php 
	Session_start();

	$name = $_SESSION['name']; 
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
	position: fixed;
	width:1470px;
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
	width: 233px;
	background: #262931;
	min-height: 100vh;
	transition: 500ms width;
	position: fixed;
	margin-top:60px;
}
.body {
	display: flex;
	height:auto;
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
	margin-top:100px;
	margin-left:200px;
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

form{
	background-color:rgba(255, 255, 255, 0.4);
	margin-top:50px;
	margin-left:200px;
	padding-top:50px;
	height:350px;
	width:500px;
	font-size:25px;
	/* color:white; */
}

input[type=text]{
	font-size:25px;
	padding-left:20px;
	margin-left:50px;
	/* width: 100%; */
  	border-radius: 5px;
  	box-sizing: border-box;
}

input[type=number]{
	font-size:25px;
	padding-left:20px;
	margin-left:50px;
	/* width: 100%; */
  	border-radius: 5px;
  	box-sizing: border-box;
}

input[type=file]{
	font-size:18px;
	/* padding-left:20px; */
	margin-left:50px;
	/* width: 100%; */
  	border-radius: 5px;
  	box-sizing: border-box;
}

button[type=submit]{
	font-size:25px;
	padding:5px;
	background-color:#127b8e;
}

.menuitem {
	width:850px;
	height:auto;
	display:flex;
	border-top:1px solid black;
	border-bottom:1px solid black;
	/* border:1px solid red; */
	margin-top:30px;
	margin-left:200px;
	/* color:white; */
	background-color:rgba(255, 255, 255, 0.568);
}

.img img{
	height: 100px;
	width:100px;
	margin-top:10px;
	margin-bottom:10px;
	margin-left:20px;
	/* display:inline; */
}

.menuitem .name{
	margin-top:45px;
	margin-left:30px;
	margin-right:10px;
	width:300px
}

.menuitem .price{
	margin-top:50px;
	margin-left:30px;
	margin-right:10px;
	width:100px
}

.menuitem .categories{
	margin-top:50px;
	margin-left:30px;
	margin-right:10px;
	width:100px

}
.menuitem .edit_btn .delete_btn{
	border:1px solid;
	display:inline;
	position:absolute;
	margin-top:400px;
	margin-left:500px;
}

.menuitem .edit_btn{
	/* text-align:right; */
	/* float:right; */
	align-items:right;
	margin-top:45px;
}

.menuitem .edit_btn button{
	border:1px solid;
	font-size:15px;
	color:none;
	width:80px;
	height:40px;
	margin-left:15px;
	text-align:center;
}

.menuitem .delete_btn{
	/* text-align:right; */
	/* float:right; */
	align-items:right;
	margin-top:45px;
}

.menuitem .delete_btn button{
	border:1px solid;
	font-size:15px;
	color:none;
	width:80px;
	height:40px;
	margin-left:15px;
	margin-right:10px;
	float:right;
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
					<a href="order.php" id="order">
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
			<h1>WELCOME <?php echo $name;?></h1>
			<h1>Food Items</h1>
<?php
include "dbcon.php";
$qry="select * from menu";
$cmd1=mysqli_query($con, $qry);
if($cmd1)
{
    while($row=mysqli_fetch_array($cmd1)){
        $item_name=$row['item_name'];
        $price=$row['price'];
        $img=$row['img'];
		$cat=$row['categories'];
    ?>
<!-- <div class="menu_item">	 -->
	<div class="menuitem">
		<div class="img">
        	<img src=" <?php echo "itemdetail/".$img ?>" alt="image not found" >
    	</div> 
		<div class="name">
        	<h2><?php echo $item_name?></h2>
    	</div>
		<div class="price">
        	<h2>&#x20B9;<?php echo $price?></h2>
    	</div>
		<div class="categories">
        	<h2><?php echo $cat?></h2>
    	</div>
		<div class="edit_btn">
		<a href="edititem.php?name=<?php echo $item_name?>"><button>Edit</button></a>
		</div>
		<div class="delete_btn">
		<a href="deleteitem.php?name=<?php echo $item_name?>"><button>Delete</button></a>
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

    		<h1>Add Food Item</h1>

    <form action="additem.php" method="post" enctype="multipart/form-data" >
		<center>
    	Name: <input type="text" placeholder="Enter name" name="name" required><br><br>
    	Price:&nbsp; <input type="number" placeholder="Enter Price" name="price" required><br><br>
		Catagory:<input type="text" placeholder="Enter Catagory" name="catagory" required><br><br>
    	Image: <input type="file" placeholder="Upload Image" name="image" required>
    	<br><br><button type="submit" >Submit</button>
		</center>		
    </form>
	</section>
    </div>      
</body>      
</html>