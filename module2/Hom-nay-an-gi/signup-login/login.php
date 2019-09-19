<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Log in</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<?php
include_once '../connectDB/connectDB.php';

$userName1 = NULL;
$userPassword1 = NULL;

$userNameErr = NULL;
$userPasswordErr = NULL;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $userName1 = $_POST["username"];
    $userPassword1 = $_POST["password"];

    $stmt = $conn->prepare("SELECT userName, userPassword FROM dataUsers WHERE userName ='" . $userName1. "'");
    $stmt->execute();
    $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $result = $stmt->fetchAll();
    $conn = null;
    $has_error = false;
    if(count($result)!=0){
        if($userPassword1 == $result[0]['userPassword']){
            echo 'Successed';
        } else {
            echo 'Wrong password';
        }
    } else {
        echo 'Username do not exist';
    }


    if (empty($userName1)) {
        $userNameErr = "Enter your name!";
        $has_error = true;
    }

    if (empty($userPassword1)) {
        $userPasswordErr = " Enter your password!";
        $has_error = true;
    }

}
?>
<form action=" " method="post">
    <table cellpadding="3">
        <tr>
            <th colspan="2" bgcolor="#00ffff">Login</th>
        </tr>

        <tr>
            <td class="label">Username<span class="required">*</span></td>
            <td>
                <input type="text" name="username" placeholder="Your name"
                       value="<?php echo $userName1; ?>"/><br>
                <span class="error"><?php echo $userNameErr; ?></span>
            </td>
        </tr>

        <tr>
            <td class="label">Password<span class="required">*</span></td>
            <td>
                <input type="password" name="password" placeholder="Your password"
                       value="<?php echo $userPassword1; ?>"/><br>
                <span class="error"><?php echo $userPasswordErr; ?></span>
            </td>
        </tr>

    </table>
    <p><input class="input" type="submit" name="submit" value="Login"/></p><br>
    <a href="signup.php">Register</a>

</form>
</body>
</html>
