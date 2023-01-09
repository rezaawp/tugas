<?php 

class Jurusan {

    private $jurusans = [
        'RPL',
        'TKJ',
        'OTKP'      
    ];

    public function getDataJurusan()
    {
        return $this->jurusans;
    }
}

// class Siswa adalah turunan dari class Jurusan
class Siswa extends Jurusan 
{
    private $nama_siswa = "Reza Khoirul Wijaya Putra"; // Ini adalah enkapsulasi
    private $jurusan = null; // Ini adalah enkapsulasi

    public function getDataSiswa() // Ini adalah enkapsulasi
    {
        return $this->nama_siswa;
    }
    
    public function setNamaSiswa($nama) // Ini adalah enkapsulasi
    {
        $this->nama_siswa = $nama;
        
        return;
    }

    public function setJurusanSiswa($jurusan) // Ini adalah enkapsulasi
    {
        $jurusans = parent::getDataJurusan();     
        foreach($jurusans as $j) {
            if (strtolower($j) === strtolower($jurusan)){
                $this->jurusan = $jurusan;
                return;
                break;
            }
        }

        echo "Jurusan tidak terdaftar di database";

        return;
    }

    public function getJurusan() // Ini adalah enkapsulasi
    {
        return $this->jurusan;
    }

    public function display()
    {
        echo "Nama : " . $this->nama_siswa . "<br>";
        echo "Kelas : " . strtoupper($this->jurusan);

        return;
    }

}

$siswa = new Siswa(); // Ini adalah cara membuat object
$siswa->setNamaSiswa("Abdul");
$siswa->setJurusanSiswa("Rpl");

$siswa->display();
