<?php 
    $order_id=$_GET['oid'];
    $tno= $_GET['tb_no'];
    // $name= $_GET['name'];
	
    // echo $tno;

    include "dbcon.php";
	$qry="select * from cart where oder_id='$order_id'";
	$cmd=mysqli_query($con,$qry);
	$num=mysqli_num_rows($cmd);
	if($num==0){
    	echo "Please enter correct id";
	}
	while($row=mysqli_fetch_array($cmd)){
    	$item_name=$row['item_name'];
    	$qty=$row['quantity'];
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

.body {
	display: flex;
	height:745px;
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
    width:600px;
    margin-left:00px;
    /* border:1px solid red; */
	background:rgba(255, 255, 255, 0.568);
	font-size:25px;
}




input[type=number]{
	font-size:25px;
	padding-left:20px;
	margin-left:50px;
	width: 300px;
  	border-radius: 5px;
  	box-sizing: border-box;
}

input[type=text]{
	font-size:25px;
	padding-left:20px;
	margin-left:80px;
	margin-top:50px;
	width: 300px;
  	border-radius: 5px;
  	box-sizing: border-box;
}

button[type=submit]{
	font-size:25px;
	/* padding-left:20px; */
	margin-left:0px;
	width: 150px;
  	border-radius: 5px;
  	box-sizing: border-box;
	margin-bottom:30px;
}


/* Side bar css */

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
		</nav>
		<section class="section-1">
        <form action="edit_item_qry.php" method="post" enctype="multipart/form-data" >
		<center>
    	<div class="name">Name: <input type="text" name="name" value="<?php echo $item_name?>" required><br><br></div>
    	Quantity:&nbsp; <input type="number" name="quantity" value="<?php echo $qty?>" required><br><br>
        <input type="hidden" name="oid" value="<?php echo $order_id;?>">
        <input type="hidden" name="tb_no" value="<?php echo $tno;?>">
    	<br><br><button type="submit" >Edit</button>
		</center>		
    </form>

    <?php } ?>
	</section>
    </div>      
</body>      
</html>    
