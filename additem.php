<?php
    $name = $_POST['name'];
    $price = $_POST['price'];
    $img=$_FILES['image']['name'];
	$cat=$_POST['catagory'];

    include "dbcon.php";
		if($db)
			echo "Database selected successfully";
		else
			echo "Database not selected";

			$qry="insert into menu values ('$name','$price','$img','$cat')";
			//$qry="insert into customer values ('dhruveshpatel2005@gmail.com','321','dhruv',8746316145,'02-12-2023','dsad','anand','DJ');";
	   		$cmd=mysqli_query($con, $qry);
			if($cmd)
			{
                ?>
                <script>
                    alert("Item Added Successful");
                </script>
                <?php
				move_uploaded_file($_FILES["image"]["tmp_name"], "itemdetail/".$_FILES["image"]["name"]);
                header("location:menu.php");
            }
			else
			{
				echo "Record not";
			}

?>