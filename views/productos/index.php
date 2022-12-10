<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo BASE_URL ?>Assets/css/producto.css">
    <link rel="stylesheet" href="<?php echo BASE_URL ?>Assets/css/footer.css">
    <link rel="stylesheet" href="<?php echo BASE_URL ?>Assets/css/all.min.css">


    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    <title><?php echo $data['title']; ?></title>
</head>

<body>

    <main id="bar">
        <div class="mainBar ani">
            <ul class="listaProductos ">
                <li>
                    <div class="">Android</div>
                    <ul class="modelo">
                        <li><a href="">Samsung</a></li>
                    </ul>
                </li>
                <li>
                    <div class="">IOS</div>
                    <ul class="modelo">
                        <li><a href="">Iphone 13 Pro</a></li>
                    </ul>
                </li>
            </ul>
        </div>
        <div class="btnDisplay">
            <a id="btnMove"> <span class=" material-symbols-outlined">
                    chevron_right
                </span>
            </a>
        </div>
    </main>


    <section>

        <div class="cardTitle">
            <h2>Samsung</h2>
            <span>Todos los modelos de Samsung</span>
        </div>

        <div class="gridContainer">
            <div class="gridItem">
                <div class="card mt-5">
                    <div class="card-body">
                        <img src="<?php echo IMG_SAM ?>galaxyS20FE/3.png" alt="">
                        <div class="title">
                            <h1 class="marca">Samsung</h1>
                            <p class="SistemaOper">Android</p>
                            <h1 class="modeloProducto">Galaxy S20 FE</h1>
                        </div>
                    </div>

                    <div class="card-footer">
                        <div class="btn-group" role="group" aria-label="Button group">
                            <button class="btn btn-success" type="button" id="myBtn" onclick="mostrarPasarela(0);">Agregar carrito</button>

                        </div>
                    </div>
                </div>


            </div>


            <div class="gridItem">
                <div class="card mt-5">
                    <div class="card-body">
                        <img src="<?php echo IMG_SAM ?>galaxys215g/1.png" alt="">
                        <div class="title">
                            <h1 class="marca">Samsung</h1>
                            <p class="SistemaOper">Android</p>
                            <h1 class="modeloProducto">Galaxy S21 5GB</h1>

                        </div>
                    </div>
                    <div class="card-footer">
                        <div class="btn-group" role="group" aria-label="Button group">
                            <button class="btn btn-success" type="button" id="myBtn" onclick="mostrarPasarela(1);">Agregar carrito</button>

                        </div>
                    </div>
                </div>
            </div>
            <div class="gridItem">
                <div class="card mt-5">
                    <div class="card-body">
                        <img src="<?php echo IMG_SAM ?>galaxy-s22/1.png" alt="">
                        <div class="title">
                            <h1 class="marca">Samsung</h1>
                            <p class="SistemaOper">Android</p>
                            <h1 class="modeloProducto">Galaxy S22</h1>

                        </div>
                    </div>
                    <div class="card-footer">
                        <div class="btn-group" role="group" aria-label="Button group">
                            <button class="btn btn-success" type="button" id="myBtn" onclick="mostrarPasarela(2);">Agregar carrito</button>

                        </div>
                    </div>
                </div>
            </div>
            <div class="gridItem">
                <div class="card mt-5">
                    <div class="card-body">
                        <img src="<?php echo IMG_SAM ?>galaxy-fold/2.png" alt="">
                        <div class="title">
                            <h1 class="marca">Samsung</h1>
                            <p class="SistemaOper">Android</p>
                            <h1 class="modeloProducto">Galaxy Fold</h1>

                        </div>
                    </div>
                    <div class="card-footer">
                        <div class="btn-group" role="group" aria-label="Button group">
                            <button class="btn btn-success" type="button" id="myBtn" onclick="mostrarPasarela(3);">Agregar carrito</button>

                        </div>
                    </div>
                </div>
            </div>
            <div class="gridItem">
                <div class="card mt-5">
                    <div class="card-body">
                        <img src="<?php echo IMG_SAM ?>galaxy-flip/1.png" alt="">
                        <div class="title">
                            <h1 class="marca">Samsung</h1>
                            <p class="SistemaOper">Android</p>
                            <h1 class="modeloProducto">Galaxy Flip z4</h1>

                        </div>
                    </div>
                    <div class="card-footer">
                        <div class="btn-group" role="group" aria-label="Button group">
                            <button class="btn btn-success" type="button" id="myBtn" onclick="mostrarPasarela(4);">Agregar carrito</button>

                        </div>
                    </div>
                </div>
            </div>
            <div class="gridItem">
                <div class="card mt-5">
                    <div class="card-body">
                        <img src="<?php echo IMG_SAM ?>galaxyS22Ultra/1.png" alt="">
                        <div class="title">
                            <h1 class="marca">Samsung</h1>
                            <p class="SistemaOper">Android</p>
                            <h1 class="modeloProducto">Galaxy S22 Ultra</h1>

                        </div>
                    </div>
                    <div class="card-footer">
                        <div class="btn-group" role="group" aria-label="Button group">
                            <button class="btn btn-success" type="button" id="myBtn" onclick="mostrarPasarela(5);">Agregar carrito</button>

                        </div>
                    </div>
                </div>
            </div>
            <div class="gridItem">
                <div class="card mt-5">
                    <div class="card-body">
                        <img src="<?php echo IMG_SAM ?>galaxyA71/img1.png" alt="">
                        <div class="title">
                            <h1 class="marca">Samsung</h1>
                            <p class="SistemaOper">Android</p>
                            <h1 class="modeloProducto">Galaxy A71</h1>

                        </div>
                    </div>
                    <div class="card-footer">
                        <div class="btn-group" role="group" aria-label="Button group">
                            <button class="btn btn-success" type="button" id="myBtn" onclick="mostrarPasarela(6);">Agregar carrito</button>

                        </div>
                    </div>
                </div>
            </div>
            <div class="gridItem">
                <div class="card mt-5">
                    <div class="card-body">
                        <img src="<?php echo IMG_SAM ?>galaxym32/img1.png" alt="">
                        <div class="title">
                            <h1 class="marca">Samsung</h1>
                            <p class="SistemaOper">Android</p>
                            <h1 class="modeloProducto">Galaxy M32</h1>

                        </div>
                    </div>
                    <div class="card-footer">
                        <div class="btn-group" role="group" aria-label="Button group">
                            <button class="btn btn-success" type="button" id="myBtn" onclick="mostrarPasarela(7);">Agregar carrito</button>

                        </div>
                    </div>
                </div>
            </div>
            <div class="gridItem">
                <div class="card mt-5">
                    <div class="card-body">
                        <img src="<?php echo IMG_SAM ?>galaxym12/img1.png" alt="">
                        <div class="title">
                            <h1 class="marca">Samsung</h1>
                            <p class="SistemaOper">Android</p>
                            <h1 class="modeloProducto">Galaxy M12</h1>

                        </div>
                    </div>
                    <div class="card-footer">
                        <div class="btn-group" role="group" aria-label="Button group">
                            <button class="btn btn-success" type="button" id="myBtn" onclick="mostrarPasarela(8);">Agregar carrito</button>

                        </div>
                    </div>
                </div>
            </div>
        </div>


        <!-- The Modal -->
        <div id="myModal" class="modal">
            <!-- Modal content -->
            <div class="modal-content">
                <span class="close">&times;</span>
                <div class="pasalera">
                    <div class="columna1">
                        <img src="" alt="" id="imgPasarela">
                    </div>
                    <div class="columna2">
                        <h1>marca</h1>
                        <p class="marcaPasarela"></p>
                        <h1>Sistema operativo</h1>
                        <p class="sistemaOperativoPasarela"></p>
                        <h1>Modelo</h1>
                        <p class="modeloPasarela"></p>
                        <button type="button" id="save" class="guardar" onclick="save();">Comprar</button>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <script>
        const img_sam = "<?php echo IMG_SAM ?>";
    </script>

    <script src="<?php echo BASE_URL ?>Assets/js/barProductos.js"></script>
    <script src="<?php echo BASE_URL ?>Assets/js/jquery-3.3.1.min.js"></script>


    <?php include "views/templates/footer.php"; ?>