<?php 
class DB {
    private $host = "localhost";
    private $database = "belajar_rezawp";
    private $username = "root";
    private $password = "";

    private $mysqli = "";
    private $table = ""; 
    private $jumlahKolom = null;

    function __construct($table)
    {
        $this->mysqli = mysqli_connect($this->host, $this->username, $this->password, $this->database);
        $this->jumlahKolom = mysqli_num_rows(mysqli_query($this->mysqli,"describe $table"));
        $this->table = $table;
    }

    private function query($q)
    {
        return mysqli_query($this->mysqli, $q);
    }
    
    public function field()
    {
        $result = mysqli_query($this->mysqli,"SELECT * FROM $this->table");

        $fieldName = [];
        while($data = $result->fetch_field())
        {
            array_push($fieldName, "$data->name");
        }

        return $fieldName;
    }

    public function create($data)
    {
        $field = $this->field();
        $fields = implode(",", $field);
        $value = [];
        for($x=0;$x<$this->jumlahKolom;$x++)
        {
            if (!array_key_exists($field[$x], $data))
            {
                die("Diatas " . '<b>"' . $field[$x - 1] . '"' . "=>" . '"' . $data[$field[$x - 1]] . '"</b>' ." Ada kolom yang tidak sesuai. Mungkin maksud kamu itu adalah kolom <b> $field[$x] </b> ?");
            }
            array_push($value, "'" . $data[$field[$x]] . "'");
        }

        $value = implode(",", $value);
        echo "INSERT INTO $this->table ($fields) VALUES ($value)";
        return $this->query("INSERT INTO $this->table ($fields) VALUES ($value)");
    }
   
}   