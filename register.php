<?php
    session_start();
    if ($_SESSION['user']) {
        header('Location: profile.php');
    }
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Registration</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous"> 
    <link rel="stylesheet" href="/assets/css/style.css">
</head>
<body>

    <!-- Форма регистрации -->

    <form>
        <div class="mb-3" style="width: 400px; margin-top: 70px;">
            <label for="exampleInputEmail1" class="form-label">Full name &#42;</label>
            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="full_name">

            <label for="exampleInputEmail1" class="form-label">Login &#42;</label>
            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="login">
        
            <label for="exampleInputEmail1" class="form-label">Email</label>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email">

            <label for="exampleInputEmail1" class="form-label">Avatar</label>
            <input type="file" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="avatar">
            
            <label for="exampleInputPassword1" class="form-label">Password &#42;</label>
            <input type="password" class="form-control" id="exampleInputPassword1" name="password">

            <label for="exampleInputPassword1" class="form-label">Confirm password &#42;</label>
            <input type="password" class="form-control" id="exampleInputPassword1" name="password_confirm"> 
          <div id="emailHelp" class="form-text">Fields marked with a symbol &#42; are required!</div>

        </div>
        <button type="submit" class="register-btn">Register</button>
        <p>
          Do you already have an account? <a href="/index.php"> Sing in</a>
        </p> 
            <p class="msg none">hi</p>
      </form>

    <script src="assets/js/jquery-3.4.1.min.js"></script>
    <script src="assets/js/main.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>