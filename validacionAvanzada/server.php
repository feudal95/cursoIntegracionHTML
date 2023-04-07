<?php

echo "<pre>";


$name = ($_POST["nombre"]);
$username = ($_POST["username"]);
$email = ($_POST["email"]);
$age = ($_POST["age"]);



$is_float = filter_var("esto no es un float", FILTER_VALIDATE_FLOAT, FILTER_FLAG_ALLOW_THOUSAND);

$is_int= filter_var("asda", FILTER_VALIDATE_INT);

$is_ip= filter_var("0.0.0.0", FILTER_VALIDATE_IP);

$is_url= filter_var("http://.platzi.com", FILTER_VALIDATE_URL);

$is_email = filter_var("estp@com.com", FILTER_VALIDATE_EMAIL);


var_dump($is_email);

echo "</pre>";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>



</body>

</html>