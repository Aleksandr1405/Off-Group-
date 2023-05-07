<?php

    $connect = mysqli_connect('localhost','root','root','TEST_DB');

    if (!$connect) {
        die('Error connect to DataBase');
    }