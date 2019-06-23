<?php
/**
 * Created by IntelliJ IDEA.
 * User: KamarMEDDAH
 * Date: 22/06/2019
 * Time: 01:46
 */
date_default_timezone_set("UTC");
session_start();

$pdo = new PDO("mysql:host=localhost;dbname=tpweb;port=3306;charset=utf8", "root", "root");
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);

/*
$pdo->beginTransaction();
$pass = password_hash("123456", PASSWORD_BCRYPT, ["cost" => 12]);
$statement=$pdo->prepare("INSERT INTO users SET username=?,password=?");
$statement->execute(['kamar', $pass]);
$pdo->commit();
*/

$pdo->beginTransaction();
$req = $pdo->prepare("SELECT * FROM users WHERE username=?");
$req->execute([$_POST['username']]);
$pdo->commit();

$res = $req->fetch();

if (!is_null($res)) {
    if (password_verify($_POST['password'], $res['password'])) {
        setcookie('id', $res['id'], time() + (24 * 60 * 60));
        echo json_encode(true);
        die();
    }
}
echo json_encode(false);
die();
