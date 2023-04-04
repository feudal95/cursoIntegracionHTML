<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="serverImage.php" method="post" enctype="multipart/form-data">
        <label for="nombre">nombre</label>
        <input type="text" name="nombre" id="nombre">

        <label for="image">imagen</label>
        <input type="file" name="image" id="image">
        <button>mandar formulario</button>


    </form>
</body>

</html>