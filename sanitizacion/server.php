<?php

echo "<pre>";


$name = ($_POST["nombre"]);
$username = ($_POST["username"]);
$email = ($_POST["email"]);
$age = ($_POST["age"]);


$htmlentities = htmlentities($name);

$addslashes = addslashes($username);

$onlywords = preg_replace("/\d/", "", $username);

$onlynumbers = preg_replace("/\D/", "", $username);


$email = filter_var($email, FILTER_SANITIZE_EMAIL);


$saniInt = filter_var($age, FILTER_SANITIZE_NUMBER_INT);

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

    <p>Username: </p>
    <?= $addslashes ?>


    <p>onlywords: </p>
    <?= $onlywords ?>

    <p>onlynumbers: </p>
    <?= $onlynumbers ?>


    <p>email: </p>
    <?= $email ?>


    <p>age: </p>
    <?= $age ?>


    <p>SANITIZE_NUMBER: </p>
    <?= $saniInt ?>



</body>

</html>