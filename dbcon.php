<?php 
    $server ="localhost";
    $user="root";
    $password="";
    $db="restaurant";

    $con= mysqli_connect($server,$user,$password,$db);

    if($con){
        ?>
        
        <?php
    }
    else{
        ?>
        <script>
            alert("connection unsuccesful");
        </script>
        <?php
    }
?>