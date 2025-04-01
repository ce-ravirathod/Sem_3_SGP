<?php 
    session_start();
    unset($_SESSION['name']); 
    if(isset($_SESSION['name'])){
        echo "Something went wrong. Not able to logout";
    }
    else{
        header('location:index.html');
    }
?>