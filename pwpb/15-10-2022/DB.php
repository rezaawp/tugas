<?php 
class DB {
    private $host = "localhost";
    private $database = "belajar_rezawp";
    private $username = "root";
    private $password = "";

    private $mysqli = "";
    private $table = ""; 
    private $jumlahKolom = null;
    
    private $dataTunggal = null;
    private $keyUpdate;
    private $valueUpdate;

    function __construct($table = null)
    {
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
        foreach($field as $f)
        {
            // $indexOf = strpos($pisahkan, $f . '=');
            
        }
        return str_replace(" ", "'Value',", $pisahkan);;

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
