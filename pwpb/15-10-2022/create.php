<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <?php include './bootstrap/css.php' ?>
</head>

<body>
    <div class="container py-3">

        <a href="./index.php">Home</a>

        <div class="card">
            <div class="card-header">
                <h2 class="text-center fw-bold">Input Data</h2>
            </div>

            <div class="card-body">
                <form action="./proses/add.php" method="POST">
                    <input type="text" name="nama" class="form-control" placeholder="Nama"> <br>
                    <input type="text" name="makanan_favorit" class="form-control" placeholder="Makanan Favorit">

                    <button class="btn btn-primary mt-2" type="submit">ADD</button>
                </form>
            </div>
        </div>
    </div>
    <?php include './bootstrap/js.php' ?>
</body>

</html>