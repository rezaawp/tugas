<?php 
    include './proses/RegisterProses.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include './plugins/css_bootstrap.php' ?>
    <title>Register</title>
</head>
<body>
    <div class="container mt-5" style="width: 30rem;">
        <div class="container-fluid d-flex justify-content-center">
            <h1 class="fw-bold">Register</h1>
        </div>
        <?php 
            if (isset($store) && $store) {
                echo <<<ALERT
                <div class="alert alert-success mt-2 alert-dismissible fade show" role="alert">
                    <strong>Berhasil!</strong> Silahkan melakukan login untuk memulai masuk
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                ALERT;
            }
        ?>
        <form action="" method="post">
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Username</label>
                <input type="text" name="username" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <input type="password" name="password" class="form-control" id="exampleInputPassword1">
            </div>
            <div class="row">
                <div class="col-6">
                    <p>Sudah punya akun ? <a href="" class="text-decoration-none">Login</a></p>
                </div>
                <div class="col-6 d-flex justify-content-end">
                    <button type="submit" name="submit" class="btn btn-primary">Register</button>
                </div>
            </div>
        </form>
    </div>
    <?php include './plugins/js_bootstrap.php' ?>
</body>
</html>