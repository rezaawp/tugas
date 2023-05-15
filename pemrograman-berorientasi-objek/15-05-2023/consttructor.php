<?php
class Mahasiswa
{
    public $nim = "001";
    public $nama = "Reza Khoirul Wijaya Putra";
    public $jurusan = "PPLG";

    function __construct($nim, $nama, $jurusan)
    {
        $this->nim = $nim;
        $this->nama = $nama;
        $this->jurusan = $jurusan;
    }

    function tampil_biodata()
    {
        echo "NIM : " . $this->nim . '<br>';
        echo "Nama : " . $this->nama . '<br>';
        echo "Jurusan : " . $this->jurusan . '<br>';
    }
}
$mahasiswa = new Mahasiswa($_POST['nim'], $_POST['nama'], $_POST['jurusan']);

$mahasiswa->tampil_biodata();
