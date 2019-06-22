<?php
date_default_timezone_set("UTC");
session_start();
if(isset($_COOKIE['id'])){
    $_SESSION['flash']="Already logged";
    header("location:/account.php");
    die();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>login</title>
    <link rel="stylesheet" href="styles/main.css">
</head>
<body>
<header>
    <ul class="navbar">
        <li>
            <a href="account.php">account</a>
        </li>
        <li>
            <a href="index.php">Login</a>
        </li>
    </ul>
</header>

<div class="container">
    <form action="login.php" method="post" class="form">
        <div style="text-align: center; background-color:lightcoral;"><?= $_SESSION['flash']??'';unset($_SESSION['flash'])?></div>
        <div>
            <label for="username">Username</label>
            <input placeholder="username" type="text" name="username" id="username">
        </div>

        <div>
            <label for="password">Password</label>
            <input type="password" placeholder="password" name="password" id="password">
        </div>

        <div>
            <button type="submit" class="btn">Login</button>
        </div>
    </form>

</div>
</body>
</html>