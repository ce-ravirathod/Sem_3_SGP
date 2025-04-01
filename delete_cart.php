<?php
    $order_id=$_GET['oid'];
    $tno= $_GET['tb_no'];

    include "dbcon.php";
    $qry="delete from cart where oder_id='$order_id'";
    $cmd=mysqli_query($con, $qry);
    if($qry)
    {
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
	/* min-height: 100vh; */
	transition: 500ms width;
	position: fixed;
	margin-top:60px;
	padding-top: 10px;
	color: white;
	font-size:10px;
	overflow-y: auto;
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
    margin-left:200px;
}
.section-1 h2 {
	margin-top:100px;
	margin-left:00px;
	color: #fff;
	font-size: 50px;
}
.section-1 p {
	color: #127b8e;
	font-size: 20px;
	background: #fff;
	padding: 7px;
	border-radius: 5px;
}

.section-1 a{
	height:50px;
	width:100px;
	text-align:center;
	background-color:white;
	padding-top:16px;
	border-radius:10px;
    text-decoration:none;
    margin-top:20px;
    color:black;
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
			<a href="table_order.php?tid=<?php echo $tno?>">Back</a>
		</div>
		<i class="fa fa-user" aria-hidden="true"></i>
	</header>
	<div class="body">
		<nav class="side-bar">
		</nav>
		<section class="section-1">
			<h2>Item Deleted Succesfull</h2>
            <a href="table_order.php?tid=<?php echo $tno?>">Back</a>
            <?php
        }
        else 
        {
            echo " Item Not Deleted";
        }
            ?>
	</section>
    </div>      
</body>      
</html>
<?php
        