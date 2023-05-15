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
        echo $this->nim . '<br>';
        echo $this->nama . '<br>';
        echo $this->jurusan . '<br>';
    }
}
$mahasiswa = new Mahasiswa("011", "Reza Khoirul Wijaya Putra", "PPLG");

$mahasiswa->tampil_biodata();
