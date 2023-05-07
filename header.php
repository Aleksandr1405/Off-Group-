<div class="header">
        <ul class="menu-bar">
            <li> <a href="/orders.php" class="logout">Orders </a></li>
            <li> <a href="/profile.php" class="logout">Profile</a></li>
        </ul>
            <h2 class="username"><?= $_SESSION['user']['full_name'] ?></h2>
            <img class="avatar" src="<?= $_SESSION['user']['avatar'] ?>" width="200" alt="">
        <ul class="menu-bar">
            <li> <a href="/vendor/logout.php" class="logout">Logout</a></li>
        </ul>
    </div>