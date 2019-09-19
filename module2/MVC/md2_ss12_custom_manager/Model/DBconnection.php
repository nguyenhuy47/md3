<?php

class DBconnection
{
    public $dns;
    public $user;
    public $password;

    public function __construct($dns,$user,$password)
    {
        $this->dns = $dns;
        $this->user = $user;
        $this->password = $password;
    }

    public function connect(){
        $conn = NULL;
        $conn = new PDO($this->dns,$this->user,$this->password);
        echo "dasdasdada";
    }
}
$a = new DBconnection('mysql:host=localhost;dbname=manager_customer','root','123456@Abc');
echo $a->connect();