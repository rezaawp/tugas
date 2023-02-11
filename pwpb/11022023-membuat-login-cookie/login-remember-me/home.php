<?php
if (!isset($_COOKIE['ssid'])) {
    header("Location: index.php");
}
?>

Hai, <?= $_COOKIE['username'] ?> Selamat Datang.
<form action="proses_logout.php">
    <button type="submit">Logout</button>
</form>