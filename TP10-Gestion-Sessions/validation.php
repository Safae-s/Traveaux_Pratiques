<?php
session_start();
require('config.php');


define("USERLOGIN", "safae");
define("USERPASS", "0000");


if (isset($_GET['afaire']) && $_GET['afaire'] == 'deconnexion') {
    session_destroy();
    header("Location: login.php?erreur=3");
    exit();
}


if (empty($_POST['login']) || empty($_POST['password'])) {
    header("Location: login.php?erreur=1");
    exit();
}

$login = $_POST['login'];
$pwd = $_POST['password'];

if ($login === USERLOGIN && $pwd === USERPASS) {
    $_SESSION['CONNECT'] = 'OK';
    $_SESSION['login'] = $login;
    header("Location: index.php");
} else {
    header("Location: login.php?erreur=2");
}
