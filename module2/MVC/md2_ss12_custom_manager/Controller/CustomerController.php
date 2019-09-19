<?php

namespace Controller;

use Model\customerDB;
use Model\DBconnection;

class CustomerController
{
    public $customerDB;

    public function __construct()
    {
        $conn = new DBconnection('mysql:host=localhost;dbname=customer_manager','root','123456@Abc');
        $this->customerDB = new CustomerDB($conn->connect());
        echo "ket noi thanh cong";


    }
}
$a = new CustomerController();
echo $a;