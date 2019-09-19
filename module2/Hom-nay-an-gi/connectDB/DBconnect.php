<?php


class DBconnect
{
    public $dsn;
    public $userName;
    public $password;

    public function __construct()
    {
        $this->dsn = 'mysql:host=localhost;dbname=student_manager';
        $this->userName = 'root';
        $this->password = '123456@Abc';
    }

    public function connect()
    {
        $conn = null;
        try {
            $conn = new PDO($this->dsn, $this->userName, $this->password);
            echo "dsfsfsdfs";
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
        return $conn;
    }
}

$connect = new DBconnect;
echo $connect->connect();