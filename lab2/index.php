<?php 
    if(!empty($_SESSION['user'])){
        header('location:wellcom.php');
    }else{
    header('location:login.php');
    } 
?>