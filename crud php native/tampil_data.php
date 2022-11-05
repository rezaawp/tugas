<?php
include './proses/DataSiswaProses.php';
?>

<?php foreach ($data as $siswa) { ?>
    <a href="data_siswa.php?nis=<?= $siswa['nis'] ?>"><?= $siswa['nama'] ?></a> <br>
<?php } ?>