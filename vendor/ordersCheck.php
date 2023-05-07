<?php
session_start();

    $description = filter_var(trim($_POST['description']));
    $contact_info = filter_var(trim($_POST['contact_info']));
    $price = filter_var(trim($_POST['price']));
    $user_id = filter_var(trim($_SESSION['user']['id']));
    

    $mysql = new mysqli('localhost','root','root','TEST_DB');

    $mysql->query("INSERT INTO `oders_info` (`id`, `user_id`, `description`, `contact_info`, `price`) 
    VALUES (NULL, '$user_id', '$description', '$contact_info', '$price')");

    $mysql->close();

    header('Location: ../orders.php'); 
?>
