<?php
class Mahasiswa
{
    public $nim = "001";
    public $nama = "Reza Khoirul Wijaya Putra";
    public $jurusan = "PPLG";
    private $errNim = "";
    private $errNama = "";
    private $errJurusan = "";

    function __construct($nim, $nama, $jurusan)
    {
        $this->nim = $nim;
        $this->nama = $nama;
        $this->jurusan = $jurusan;
    }

    function validasi()
    {
        $status = true;
        if ($this->nim == "") {
            $this->errNim = "Nim harus di isi";
            $status = false;
        }
        if ($this->nama == "") {
            $this->errNama = "Nama harus di isi";
            $status = false;
        }
        if ($this->jurusan == "") {
            $this->errJurusan = "Jurusan harus di isi";
            $status = false;
        }

        return $status;
    }

    function errorr_messages()
    {
        echo $this->errNim . '<br>';
        echo $this->errNama . '<br>';
        echo $this->errJurusan . '<br>';
    }

    function tampil_biodata()
    {
        echo "NIM : " . $this->nim . '<br>';
        echo "Nama : " . $this->nama . '<br>';
        echo "Jurusan : " . $this->jurusan . '<br>';
    }
}
$mahasiswa = new Mahasiswa($_POST['nim'], $_POST['nama'], $_POST['jurusan']);

if ($mahasiswa->validasi()) {
    $mahasiswa->tampil_biodata();
} else {
    $mahasiswa->errorr_messages();
}
