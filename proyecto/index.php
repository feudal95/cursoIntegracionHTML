<?php

require("mail.php");

function validate($form, $name, $email, $subject, $message)
{

    return !empty($name) && !empty($email) && !empty($subject) && !empty($message);
}

$status = "";

if (isset($_POST["form"])) {

    if (validate(...$_POST)) {
        $name = $_POST["name"];
        $email = $_POST["email"];
        $subject = $_POST["subject"];
        $mensaje = $_POST["message"];

        $body = "$name <$email> te envia el siguiente mensaje <br><br>
        $mensaje";

        // implementar logica para mandar el correo

        sendMail($subject, $body, $email, $name, true);

        $status = "success";
    } else {

        $status = "danger";
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/styles.css" rel="stylesheet">
    <title>Document</title>
</head>
</head>

<body>


    <h1>
        Formulario de contacto
    </h1>

    <?php if ($status == "danger") : ?>

        <div class="alert alert-danger" role="alert">
            <span>Surgio algo</span>
        </div>
    <?php endif; ?>

    <?php if ($status == "success") : ?>
        <div class="alert alert-success" role="alert">
            <span>Se envio bien</span>
        </div>
    <?php endif; ?>
    <div class="container">
        <div class="d-flex flex-column min-vh-100 justify-content-center align-items-center">




            <div class="row">
                <div class="col-md-12">
                    <label class="mt-4 mb-4">Contactanos!</label>
                    <form action="./" method="post" class="">
                        <div class="form-row mb-4">
                            <div class="form-group col-12">
                                <label for="name">Nombre</label>
                                <input type="text" name="name" class="form-control" id="name" placeholder="Nombre">
                            </div>

                        </div>
                        <div class="form-group mb-4">
                            <label for="email">Email</label>
                            <input type="email" name="email" class="form-control" id="email" placeholder="email">
                        </div>


                        <div class="form-group mb-4">
                            <label for="subject">Asunto</label>
                            <input type="text" name="subject" class="form-control" id="subject" placeholder="Asunto">
                        </div>


                        <div class="form-group mb-4">
                            <label for="message">Mensaje</label>
                            <textarea name="message" class="form-control" id="message"></textarea>
                        </div>



                        <button name="form" class="button">Enviar</button>

                    </form>

                </div>

            </div>

        </div>
    </div>

    <script src="js/bootstrap.bundle.min.js"></script>
</body>

</html>