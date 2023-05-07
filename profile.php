<?php
session_start();
if (!$_SESSION['user']) {
    header('Location: /');
}

require_once 'header.php';
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?=$_SESSION['user']['full_name']?> - личный кабинет</title>
    <link rel="stylesheet" href="/assets/css/style.css">
</head>
<body>
   
    <!-- Профиль -->

    <form>
        <img src="<?= $_SESSION['user']['avatar'] ?>" width="200" alt="">
        <h2 style="margin: 10px 0;"><?= $_SESSION['user']['full_name'] ?></h2>
        <h2 style="margin: 10px 0;"><?= $_SESSION['user']['login'] ?></h2>
        <h2 href="#"><?= $_SESSION['user']['email'] ?></h2>
    </form>

    <script src="assets/js/jquery-3.4.1.min.js"></script>
    <script src="assets/js/main.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>