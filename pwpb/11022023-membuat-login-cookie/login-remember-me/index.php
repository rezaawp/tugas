<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>

<?php

if (isset($_COOKIE['ssid'])) {
    header("Location: home.php");
}
?>

<body>
    Username : reza <br>
    Password : 123 <br> <br>
    <form action="proses_login.php" method="post">
        Username : <input type="text" name="username"> <br>
        Password : <input type="password" name="password" id=""> <br>

        <input type="checkbox" id="remember" name="remember_me"> <label for="remember">Remember Me</label> <br>

        <button type="submit" name="submit">Login</button>
    </form>
</body>

</html>