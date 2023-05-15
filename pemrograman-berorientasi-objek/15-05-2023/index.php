<?php
class Mahasiswa
{
    public $nim = "001";
    public $nama = "Reza Khoirul Wijaya Putra";
    public $jurusan = "PPLG";

    function tampil_biodata()
    {
        echo $this->nim . '<br>';
        echo $this->nama . '<br>';
        echo $this->jurusan . '<br>';
    }
}
$mahasiswa = new Mahasiswa();

$mahasiswa->tampil_biodata();
