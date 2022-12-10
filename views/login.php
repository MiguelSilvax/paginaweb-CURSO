    <?php include_once "views/templates/header.php" ?>


    <section>
        <hgroup>
            <h2><?php echo $data['title']; ?></h2>
            <p>Inicia sesión para acceder al carrito</p>
        </hgroup>

        <form method="post" class="log-form" autocomplete="off" id="formularioLogin">

            <div class="group log-input">
                <input type="text" id="username" name="username" placeholder="Username">
            </div>

            <div class="group log-input">
                <input type="password" id="clave" name="clave" placeholder="Password">
            </div>

            <div class="col-12">
                <div class="d-grid">
                    <button type="submit" class="btn btn-primary">Acceso</button>
                </div>
                <div class="d-grid mt-2">
                    <button type="Reset" class="btn btn-danger">Limpiar</button>
                </div>
            </div>
        </form>
        <div class="sign-in">
            <span>No cuento con una cuenta <a href="<?php echo BASE_URL . "register" ?>">Registrar</a></span>
        </div>
    </section>




    <script src="<?php echo BASE_URL; ?>Assets/js/sweetalert.min.js"></script>
    



    <?php include_once "views/templates/footer.php" ?>