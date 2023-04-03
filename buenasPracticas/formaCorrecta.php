<?php

$tabla_del_9 = [];

for ($i = 1; $i <= 10; $i++) {
    $resultado = 9*$i;
    array_push($tabla_del_9, $resultado);
}




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

    <h1>
        tabla del 9
    </h1>

    <ul>
        <?php foreach ($tabla_del_9 as $index => $value) : ?>


            <li> 9 * <?= $index +1 ?> = <?= $value?></li>
        <?php endforeach; ?>
    </ul>
</body>

</html>