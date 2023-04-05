<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="server.php" method="post" enctype="multipart/form-data">
        <!--
        <label for="nombre">Nombre:</label>
        <input type="text" name="nombre" id="nombre"> 
        -->

        <!-- Arreglos -->
        <!-- 
            <label for="personas">Personas:</label>
        <input type="text" name="personas[]" id="">
        <input type="text" name="personas[]" id="">
        <input type="text" name="personas[]" id="">
     -->

        <!-- <label for="persona">Personas:</label>
        <input type="text" name="persona[nombre]" id="">
        <input type="email" name="persona[email]" id="">
        <input type="number" name="persona[edad]" id=""> -->

        <!-- <input type="checkbox" name="list1">
        <input type="checkbox" name="list2" value="este valor fue clicado">
        <input type="checkbox" name="list3"> -->

        <!-- <label for="mexico"> Mexico </label>
        <input type="radio" name="pais" value="Mexico" id="mexico">
        <label for="colombia"> Colombia </label>
        <input type="radio" name="pais" value="Colombia" id="colombia">
        <label for="peru"> Peru </label>
        <input type="radio" name="pais" value="Peru" id="peru">
         -->

        <label for="galeria"> Carga tus imagenes </label>
        <input type="file" multiple name="galeria[]" id="galeria">

        <button type="submit">Mandar Formulario</button>
    </form>
</body>

</html>