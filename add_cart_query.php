<?php
    session_start();
    $tb_no=$_POST['tid'];
    $_SESSION['tb_no']=$tb_no;
    $name =$_POST['item_name'];
    $qty = $_POST['qty'];
    $sts = $_POST['sts'];
    // echo $tb_no." ".$name." ".$qty." ".$sts;
    include "dbcon.php";
            $qur="select * from menu where item_name='$name'";
            $cmd=mysqli_query($con,$qur);
            if($cmd){
                while($row=mysqli_fetch_array($cmd)){
                    $price=$row['price'];
                }
                $qry="Select * from cart where table_id='$tb_no' && item_name='$name'";
                $cmd1=mysqli_query($con,$qry);
                if($cmd1){
                    while($row=mysqli_fetch_array($cmd1)){
                        $qunt=$row['quantity'];
                        echo $qunt;
                    }
                }    
                $num = mysqli_num_rows($cmd1);
                if($num==1)
                {   
                    $temp = $qty + $qunt;
                    $updt_qry="update cart set quantity='$temp' where item_name='$name'";
                    $cmd2=mysqli_query($con,$updt_qry);
                    $cqur="insert into chef_cart values('$tb_no','$name','$qty','$sts')";
                    $result=mysqli_query($con,$cqur);
                    if($cmd2)
                    {   
                        header('location:admin_update_cart.php?tid='.$_SESSION['tb_no']);
                        echo "updated";
                    }
                    else
                    {
                        echo "Not Updated";
                    }
                }
                else
                {
                    $add_qry="insert into cart(table_id, item_name, quantity, price, status) values ('$tb_no','$name','$qty','$price','$sts')";
                    $cmd3=mysqli_query($con,$add_qry);
                    $cqur="insert into chef_cart(table_no, item_name, quantity, status, ) values('$tb_no','$name','$qty','$sts','')";
                    $result=mysqli_query($con,$cqur);
                    if($cmd3)
                    {
                        header('location:admin_update_cart.php?tid='.$_SESSION['tb_no']);
                        echo "Inserted";
                    }
                    else
                    {
                        echo " not inserted";
                    }
                }
            }    
            else{
            echo "not";
        }
?>