<?php
session_start();

    $id = filter_var(trim($_POST['id']));
   
    $mysql = new mysqli('localhost','root','root','TEST_DB');

    $mysql->query("DELETE FROM `oders_info` WHERE `id` = '$id'");

    $mysql->close();

    header('Location: ../orders.php'); 
?>
