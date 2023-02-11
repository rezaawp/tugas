<?php

if (isset($_COOKIE['ssid'])) {
    setcookie('ssid', "", -1, '/');
    header('Location: index.php');
}
