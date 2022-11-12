<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo BASE_URL ?>Assets/css/register.css">
    <link href="<?php echo BASE_URL; ?>assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo BASE_URL; ?>assets/css/bootstrap-extended.css" rel="stylesheet">
    <title>Registrar</title>
</head>

<body>



    <div class="form-group">
        <div class="card">
            <div class="card-header">
                Registrar usuario
            </div>
            <div class="card-body">


                <form action="" method="POST" id="frmSignIn" autocomplete="off">
                    <div class="row">
                        <div class="col-4">
                            <label for="my-input">Nombre</label>
                            <input id="my-input" class="form-control" type="text" name="nombre" placeholder="Nombre completo">
                        </div>
                        <div class="col-4">
                            <label for="my-input">Apellidos</label>
                            <input id="my-input" class="form-control" type="text" name="apellido" placeholder="Apellido completo">
                        </div>
                        <div class="col-4">
                            <label for="my-input">Usuario</label>
                            <input id="my-input" class="form-control" type="text" name="usuario" placeholder="Usuario">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <label for="my-input">Correo electrónico</label>
                            <input id="my-input" class="form-control" type="text" name="mail" placeholder="Correo electrónico">
                        </div>
                        <div class="col-6">
                            <label for="my-input">Telefono</label>
                            <input id="my-input" class="form-control" type="text" name="telefono" placeholder="Telefono">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-4">
                            <label for="my-input">DNI</label>
                            <input id="my-input" class="form-control" type="text" name="dni" placeholder="Documento de identidad">
                        </div>
                        <div class="col-4">
                            <label for="my-input">Contraseña</label>
                            <input id="my-input" class="form-control" type="password" name="clave" placeholder="Contraseña">
                        </div>
                        <div class="col-4">
                            <label for="my-input">Confirmar Contraseña</label>
                            <input id="my-input" class="form-control" type="password" name="claveConfirm" placeholder="Confirmar contraseña">
                        </div>
                    </div>

                    <div class="row">
                        <label for="my-input">Dirección</label>

                        <div class="form-floating">

                            <textarea class="form-control" placeholder="Dirección" id="direccion" style="height: 100px" name="direccion"></textarea>

                        </div>
                    </div>
                    <div class="row mt-4">
                        <div class="btn-group col-6" role="group" aria-label="">
                            <input class="btn btn-primary" type="submit" value="registrar">
                        </div>
                        <div class="btn-group col-6" role="group" aria-label="">
                            <input class="btn btn-primary" type="Reset">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>


    <script>
        const base_url = "<?php echo BASE_URL ?>";
    </script>
    <script src="<?php echo BASE_URL; ?>Assets/js/modulos/register.js"></script>
    <script src="<?php echo BASE_URL; ?>Assets/js/sweetalert.min.js"></script>

</body>

</html>