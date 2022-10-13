<?php 

class Siswa {
    public $nama = "Reza";
    public $kelas = "10";
    protected $jurusan = "RPL";
    private $nis = "100.1.20";
   
    function tampilkanDataSiswa(){
        echo "nama : $this->nama <br>";
        echo "kelas : $this->kelas <br>";
        echo "jurusan : $this->jurusan <br>";
        echo "nis : $this->nis";
    }
}