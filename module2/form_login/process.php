<?php
//if (!isset($_POST["txtUsername"])) {
//    die("");
//}
include "DBconnect.php";
$username = NULL;
$email = NULL;
$password = NULL;
$passConfirm = NULL;
$fullName = NULL;
$birthday = NULL;
$gender = NULL;
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["txtUsername"];
    $password = $_POST["txtPassword"];
    $passConfirm = $_POST["txtPassConfirm"];
    $email = $_POST["txtEmail"];
    $fullName = $_POST["txtFullname"];
    $birthday = $_POST["txtBirthday"];
    $gender = $_POST["txtGender"];

   $addMember = mysql_query("INSERT INTO member VALUE('$username', '$password', '$passConfirm', '$email', '$fullName', '$birthday', '$gender')");
   echo $addMember;
//    $addMember = "INSERT INTO member VALUE('$username', '$password', '$passConfirm', '$email', '$fullName', '$birthday', '$gender')";
//    $conn->exec($addMember);
//    $conn = null;
    var_dump($addMember);

//    if (!$username || !$password || !$passConfirm || !$email || !$fullName || !$birthday || !$gender) {
//        echo "enter full info";
//        exit;
//    }
////    $password = md5($password);
//
//
//    if (mysql_num_rows(mysql_query("SELECT username FROM member WHERE username ='$username' ")) > 0) {
//        echo "username already existed";
//        exit;
//    }
//
//    if (!eregi("^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,4})$", $email)) {
//        echo "Email này không hợp lệ. Vui long nhập email khác. <a href='javascript: history.go(-1)'>Trở lại</a>";
//        exit;
//    }
//
//    if (mysql_num_rows(mysql_query("SELECT email FROM member WHERE email='$email'")) > 0) {
//        echo "Email này đã có người dùng. Vui lòng chọn Email khác. <a href='javascript: history.go(-1)'>Trở lại</a>";
//        exit;
//    }
//    if (!ereg("^[0-9]+/[0-9]+/[0-9]{2,4}", $birthday)) {
//        echo "Ngày tháng năm sinh không hợp lệ. Vui long nhập lại. <a href='javascript: history.go(-1)'>Trở lại</a>";
//        exit;
//    }
//    $addMember = mysql_query("INSERT INTO member VALUE('$username', '$password', '$passConfirm', '$email', '$fullName', '$birthday', '$gender')");
//
//    if ($addMember) {
//        echo 'success <a></a>';
//    } else {
//        echo "404";
//    }
}
