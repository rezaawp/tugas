<?php

session_start();

// Cara membuat session
$_SESSION['username'] = $_POST['username'];
$_SESSION['password'] = md5($_POST['password']);

echo $_SESSION['username'] . "<br>";
echo $_SESSION['password'];

header("Location: beranda.php");
