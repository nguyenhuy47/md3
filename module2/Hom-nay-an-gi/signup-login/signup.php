<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign up</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

<?php
$userName1 = NULL;
$email = NULL;
$userPassword1 = NULL;
$passConfirm = NULL;
$height = NULL;
$weight = NULL;
$gender = NULL;

$userNameErr = NULL;
$emailErr = NULL;
$userPasswordErr = NULL;
$passConfirmErr = NULL;
$heightErr = NULL;
$weightErr = NULL;
$genderErr = NULL;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $userName1 = $_POST["username"];
    $email = $_POST["email"];
    $userPassword1 = $_POST["password"];
    $passConfirm = $_POST["passConfirm"];
    $height = $_POST["height"];
    $weight = $_POST["weight"];
    $gender = $_POST["gender"];
    $has_error = false;


    if (empty($userName1)) {
        $userNameErr = "Enter your name!";
        $has_error = true;
        $has_error = true;
    }
    if (empty($email)) {
        $emailErr = "Enter your email!";
        $has_error = true;
    } else {
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $emailErr = "Wrong email format (xxx@xxx.xxx.xxx)!";
            $has_error = true;
        }
    }
    if (empty($userPassword1)) {
        $userPasswordErr = " Enter your password!";
        $has_error = true;
    }
    if (empty($passConfirm) || $userPassword1 != $passConfirm) {
        $passConfirmErr = " Password do not match!";
        $has_error = true;
    }
    if (empty($height)) {
        $heightErr = " Enter your height!";
        $has_error = true;
    }
    if (empty($weight)) {
        $weightErr = " Enter your weight!";
        $has_error = true;
    }
    if (empty($gender)) {
        $genderErr = " Choose gender!";
        $has_error = true;
    }
    if (!$has_error) {

        include_once '../connectDB/connectDB.php';

        $sql = "INSERT INTO dataUsers (`userName`, `userPassword`, `email`, `height`, `weight`, `gender`)
               VALUES ('$userName1', '$userPassword1', '$email', '$height', '$weight', '$gender')";
        $conn->exec($sql);
        $conn = null;

        $userName1 = NULL;
        $email = NULL;
        $userPassword1 = NULL;
        $passConfirm = NULL;
        $height = NULL;
        $weight = NULL;
        $gender = NULL;


    }else {

    }




}
?>

<form method="post">
    <table cellpadding="5">
        <tr>
            <th colspan="2" bgcolor="aqua">Register</th>
        </tr>

        <tr>
            <td class="label">Username <span class="required">*</span></td>
            <td><input type="text" name="username" value="<?php echo $userName1; ?>" /><br>
                <span class="error"><?php echo $userNameErr; ?></span>
            </td>
        </tr>

        <tr>
            <td class="label">Email <span class="required">*</span></td>
            <td>
                <input type="text" name="email" value="<?php echo $email; ?>" /><br>
                <span class="error"><?php echo $emailErr; ?></span>
            </td>
        </tr>

        <tr>
            <td class="label">Password <span class="required">*</span></td>
            <td>
                <input type="password" name="password" value="<?php echo $userPassword1; ?>" /><br>
                <span class="error"><?php echo $userPasswordErr; ?></span>
            </td>
        </tr>

        <tr>
            <td class="label">Confirm Password <span class="required">*</span></td>
            <td>
                <input type="password" name="passConfirm" value="<?php echo $passConfirm; ?>" /><br>
                <span class="error"><?php echo $passConfirmErr; ?></span>
            </td>
        </tr>

        <tr>
            <td class="lable">Height <span class="required">*</span></td>
            <td><input type="text" name="height" placeholder="meter" value="<?php echo $height; ?>" /><br>
            <span class="error"><?php echo $heightErr; ?></span>
            </td>
        </tr>

        <tr>
            <td class="label">Weight <span class="required">*</span></td>
            <td><input type="text" name="weight" placeholder="kg" value="<?php echo $weight; ?>" /><br>
            <span class="error"><?php echo $weightErr; ?></span>
            </td>
        </tr>

        <tr>
            <td class="label">Gender <span class="required">*</span></td>
            <td>
                <label><input class="label" type="radio" name="gender" value="male">Male</label>
                <label><input class="label" type="radio" name="gender" value="female">Female</label><br>
                <span class="error"><?php echo $genderErr; ?></span>
            </td>
        </tr>
    </table>
    <p><input class="input" type="submit" name="submit" value="Register"/></p>
</form>

</body>
</html>

