<?php
date_default_timezone_set("UTC");
session_start();

if(!isset($_COOKIE['id'])){
    $_SESSION['flash']="Erreur 403 unauthorized";
    header("location:/index.php");
    die();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Account</title>
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
    <form action="logout.php" method="post" >
        <div style="text-align: center; background-color:lightcoral;"><?= $_SESSION['flash']??'';unset($_SESSION['flash'])?></div>

        <div>
            <button type="submit" class="btn">Logout</button>
        </div>
    </form>

</div>
</body>
</html>