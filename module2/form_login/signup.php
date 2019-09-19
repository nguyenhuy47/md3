<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign up</title>
</head>
<body>
<h1>Registration</h1>
<form action="" method="POST">
    <table cellpadding="0" cellspacing="0" border="1">
        <tr>
            <td>
                Username :
            </td>
            <td>
                <input type="text" name="txtUsername" size="50" />
            </td>
        </tr>
        <tr>
            <td>
                Password :
            </td>
            <td>
                <input type="password" name="txtPassword" size="50" />
            </td>
        </tr>
        <tr>
            <td>
                Confirm Password :
            </td>
            <td>
                <input type="password" name="txtPassConfirm" size="50" />
            </td>
        </tr>
        <tr>
            <td>
                Email :
            </td>
            <td>
                <input type="text" name="txtEmail" size="50" />
            </td>
        </tr>
        <tr>
            <td>
                Fullname :
            </td>
            <td>
                <input type="text" name="txtFullname" size="50" />
            </td>
        </tr>
        <tr>
            <td>
                Birthday :
            </td>
            <td>
                <input type="text" name="txtBirthday" size="50" />
            </td>
        </tr>
        <tr>
            <td>
                Gender :
            </td>
            <td>
                <select name="txtGender">
                    <option value=""></option>
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                </select>
            </td>
        </tr>
    </table>
    <input type="submit" value="Register" />
    <input type="reset" value="Reset" />
</form>
</body>
</html>

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

//$addMember = mysql_query("INSERT INTO member VALUE('$username', '$password', '$passConfirm', '$email', '$fullName', '$birthday', '$gender')");