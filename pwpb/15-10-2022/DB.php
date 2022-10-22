<?php 

include 'config.php';

class DB {
    private $host;
    private $database;
    private $username;
    private $password;

    private $mysqli;
    private $table; 
    private $jumlahKolom;
    
    private $dataTunggal;
    private $keyUpdate;
    private $valueUpdate;

    function __construct($table = null)
    {
        global $db_host; global $db_database; global $db_username; global $db_password;
        $this->host = $db_host;
        $this->database = $db_database;
        $this->username = $db_username;
        $this->password = $db_password;
        $this->mysqli = mysqli_connect($this->host, $this->username, $this->password, $this->database);
        $this->jumlahKolom = mysqli_num_rows(mysqli_query($this->mysqli,"describe $table"));
        $this->table = $table;
    }

    private function query($q)
    {
        return mysqli_query($this->mysqli, $q);
    }
    
    private function field()
    {
        $result = $this->query("SELECT * FROM $this->table");

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
        return $this->query("INSERT INTO $this->table ($fields) VALUES ($value)");
    }
   
    public function delete($data)
    {
        $field = $this->field();
        $count = count($data);
        if($count > 1)
        {
            die("Untuk menghapus data, masukan 1 kriteria saja");
        }
        
        foreach($field as $f)
        {
            if (array_key_exists($f, $data))
            {
                // hapus
                return $this->query("DELETE FROM $this->table WHERE $f = '$data[$f]'");
            }
        }
    }

    public function where($key, $value)
    {
        $this->keyUpdate = $key;
        $this->valueUpdate = $value; 
        return $this->dataTunggal = mysqli_fetch_array($this->query("SELECT * FROM $this->table WHERE $key = '$value'"));
    }

    public function update($data)
    {
        $field = $this->field();
        $pisahkan = implode('= ', $field);
        $pisahkan .= "= ";
        $length = strlen($pisahkan);
        $update = null;
        $indexOf = [];

        foreach($field as $f)
        {
            $cariIndex = (int)strpos($pisahkan, $f . '=') + strlen($f) + 1;
            $pisahkan = substr_replace($pisahkan, "'" . $data[$f] . "',",$cariIndex,1);
            array_push($indexOf,["field" => $f, "index" => "$cariIndex"]);
        }
        $indexAkhir = (int)strlen($pisahkan) - 1;
        $pisahkan = substr_replace($pisahkan, "",$indexAkhir);

        $fieldUpdate = $pisahkan;

        // return str_replace(" ", "'Value',", $pisahkan);
        return $this->query("UPDATE $this->table SET $fieldUpdate WHERE $this->keyUpdate = '$this->valueUpdate'");

    }

    public function all()
    {   
        $query = $this->query("SELECT * FROM $this->table");
        $result = [];
        while ($data = mysqli_fetch_array($query))
        {
            array_push($result, $data);
        }

        return $result;
    }
}   
