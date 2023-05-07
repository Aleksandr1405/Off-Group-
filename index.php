<?php
session_start();

    if ($_SESSION['user']) 
    {
        header('Location: profile.php');
    }
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Varkan App</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="/assets/css/style.css">
</head>
<body>
    
    <!-- Форма авторизации -->

    <form class="loginform">
    <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Email or Login</label>
          <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="login">
          <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>

          <label for="exampleInputPassword1" class="form-label">Password</label>
          <input type="password" class="form-control" id="exampleInputPassword1" name="password">
        </div>
        <button type="submit" class="login-btn">Sing in</button>
        <p>
        Don't have an account <a href="/register.php">Sing up!</a>
        </p>
        <p class="msg none">Hello</p>
    </form>

    <script src="assets/js/jquery-3.4.1.min.js"></script>
    <script src="assets/js/main.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>