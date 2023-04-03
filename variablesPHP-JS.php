<?php
$usuarios = array(
    array(
        "id" => 0,
        "username" => "feudal",
    ),

    array(
        "id" => 1,
        "username" => "master",
    ),

    array(
        "id" => 2,
        "username" => "hex",
    ),
);

$edad_de_feudal = 27;
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


    <script>
        let users = JSON.parse('<?= json_encode($usuarios)?>');
     //   console.log(users);
        let edadDeFeudal = <?= $edad_de_feudal ?>;
        //console.log(edadDeFeudal);



    </script>
    <script src="js/index.js"></script>
</body>


</html>