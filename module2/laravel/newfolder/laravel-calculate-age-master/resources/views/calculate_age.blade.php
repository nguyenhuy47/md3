<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Caculate age</title>

</head>
<body>

<span>Ngày sinh: </span>
<input type="date" name="birthday" id="birthday" onchange="chooseBirthday()">

<script>

    function chooseBirthday() {
        let birthday = document.getElementById("birthday").value;
        window.location.href = birthday;
    }
</script>
</body>
</html>
