<?php 
class DB {
    private $host = "localhost";
    private $database = "belajar_rezawp";
    private $username = "root";
    private $password = "";
    private $mysqli = "";
    private $table = "belajar_rezawp";

    function __construct()
    {
        $this->mysqli = mysqli_connect($this->host, $this->username, $this->password, $this->database);
        // $this->table = $table;
    }

    private function query($q)
    {
        return mysqli_query($this->mysqli, $q);
    }
    
    public function create($table, $kolom, $data)
    {
        
        $field = "";
        for($x=0;$x<$kolom;$x++)
        {
            if ($x == $kolom - 1)
            {
                $field = $field . "'$data[$x]'";
                break;
            }
            $field = $field . "'$data[$x]',";
        }
        return $this->query("INSERT INTO $table VALUES ($field)");
    }
}