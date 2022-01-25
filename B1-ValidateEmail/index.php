<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_REQUEST["email"];
    $emailErr = "";
    $pattern = '/^[A-Za-z0-9]+[A-Za-z0-9]*@[A-Za-z0-9]+(\.[A-Za-z0-9]+)$/';
//    if (!filter_var( $email,FILTER_VALIDATE_EMAIL)) {
//        $emailErr = "Email is required";
//    }
    if (!preg_match($pattern,$email)){
        $emailErr = "Invalid email";
    }
    if (empty($emailErr)) {
        $emailErr = "Valid email";
    }
}

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<form action="" method="post">
    <input type="text" name="email" placeholder="Nhập email vào đây">
    <p style="color: red"> <?php echo $emailErr ?? "" ?></p>
    <button>Nhập</button>
</form>
</body>
</html>
