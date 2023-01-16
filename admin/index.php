<?php
session_start();

if ($_POST) {
    if (($_POST['usuario'] == "admin") && ($_POST['contrasenia'] == "123")) {
        $_SESSION['usuario'] = "ok";
        $_SESSION['nombreUsuario'] = "admin";

        header('Location:inicio.php');
    } else {
        $mensaje = "El usuario o contraseña incorrecto";
    }
}
?>


<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>

    <div class="container">
        <div class="row">

            <div class="col-md-4">

            </div>
            <div class="col-md-4">

                <br><br><br>

                <div class="card">

                    <div class="alert alert-info" role="alert">
                        <strong>El usuario y contraseña estan entre ( )</strong>
                    </div>

                    <div class="card-body">

                        <div class="card-header">
                            Login
                        </div>
                        <div class="card-body">

                            <?php if (isset($mensaje)) { ?>
                                <div class="alert alert-danger" role="alert">
                                    <?php echo $mensaje; ?>
                                </div>
                            <?php } ?>


                            <form method="POST">

                                <div class="form-group">
                                    <label> Usuario: (admin) </label>
                                    <input type="text" class="form-control" name="usuario" placeholder="Escribir usuario">

                                </div>

                                <div class="form-group">

                                    <label> Contraseña: (123)</label>
                                    <input type="password" class="form-control" name="contrasenia" placeholder="Escribir contraseña">

                                </div>
                                <button type="submit" class="btn btn-primary" onclick="inicio()">Entrar al administrador</button>

                                <script type="text/javascript">
                                    function inicio() {

                                        alert('Bienvenido, un placer tenerte aquí!!');
                                    }
                                </script>


                            </form>


                        </div>


                    </div>

                </div>

            </div>
        </div>

</body>

</html>