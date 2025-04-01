<?php
    session_start();
    $tno = $_SESSION['tb_no'];
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
			<h2>Item Inserted Succesfull</h2>
            <a href="waiter_table_order.php?tid=<?php echo $tno?>">Back</a>
	</section>
    </div>      
</body>      
</html>
<?php
        