<?php

$usuarios = ["pedro", "juan", "pablo"];

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
    <ul>
        <?php for ($i = 0; $i < 10; $i++) : ?>
            <li><?= $i ?></li>
        <?php endfor; ?>


    </ul>

    <ul>
        <?php foreach ($usuarios as $key) : ?>
            
            <li>
                <?= $key ?>
            </li>

        <?php endforeach ?>
    </ul>
</body>

</html>