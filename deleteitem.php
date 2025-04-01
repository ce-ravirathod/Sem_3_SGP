<?php
    $name = $_GET['name'];
    // $price = $_POST['price'];
    // $img=$_FILES['image']['name'];

    include "dbcon.php";
		if($db)
			echo "Database selected successfully";
		else
			echo "Database not selected";

			$qry="delete from menu where item_name='$name'";
			//$qry="insert into customer values ('dhruveshpatel2005@gmail.com','321','dhruv',8746316145,'02-12-2023','dsad','anand','DJ');";
	   		$cmd=mysqli_query($con, $qry);
			if($cmd)
			{
                ?>
                <script>
                    alert("Item deleted Successful");
                </script>
                <?php
                header("location:menu.php");
            }
			else
			{
				echo "Record not";
			}

?>