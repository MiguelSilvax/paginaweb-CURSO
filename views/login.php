<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="Content-Language" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar sesión</title>
    <link rel="stylesheet" href="<?php echo BASE_URL ?>Assets/css/estilo-login.css">
    <link rel="stylesheet" href="<?php echo BASE_URL ?>Assets/css/bootstrap.min.css">
</head>

<body>

   
            <section>
                <hgroup>
                    <h2><?php echo $data['title']; ?></h2>
                    <p>Inicia sesión para acceder al carrito</p>
                </hgroup>
    
                <form method="post" class="log-form">

                    <div class="group log-input">
                        <input type="text" id="username" name="username" placeholder="Username">
                    </div>

                    <div class="group log-input">
                        <input type="password" id="password" name="password" placeholder="Password">
                    </div>

                    <div class="col-12">
                        <div class="d-grid">
                            <button type="submit" class="btn btn-primary"><i class="bx bxs-lock-open"></i>Acceso</button>
                        </div>
                        <div class="d-grid mt-2">
                            <button type="Reset" class="btn btn-danger"><i class="bx bxs-lock-open"></i>Limpiar</button>

                        </div>
                    </div>
                </form>
                <div class="sign-in">
                    <span>No cuento con una cuenta <a href="<?php echo BASE_URL . "register" ?>">Registrar</a></span>
                </div>
            </section>

       







</body>

</html>