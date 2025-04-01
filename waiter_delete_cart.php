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
	<?php
	include "tem_head.php"
	?>
<body><input type="checkbox" id="checkbox">
	<header class="header">
		<h2 class="u-name">SIDE <b>BAR</b>
			<label for="checkbox">
				<i id="navbtn" class="fa fa-bars" aria-hidden="true"></i>
			</label>
		</h2>
		<div class="back_btn">
			<a href="waiter_table_order.php?tid=<?php echo $tno?>">Back</a>
		</div>
		<i class="fa fa-user" aria-hidden="true"></i>
	</header>
	<div class="body">
		<nav class="side-bar">
		</nav>
		<section class="section-1">
			<h2>Item Deleted Succesfull</h2>
            <a href="waiter_table_order.php?tid=<?php echo $tno?>">Back</a>
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
        