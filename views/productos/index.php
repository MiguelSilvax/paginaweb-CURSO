<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo BASE_URL ?>Assets/css/producto.css">
    <link rel="stylesheet" href="<?php echo BASE_URL ?>Assets/css/bootstrap.min.css">


    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    <title><?php echo $data['title']; ?></title>
</head>

<body>

    <main id="bar">
        <div class="mainBar ani">
            <ul class="listaProductos ">
                <li>
                    <a href="">Android</a>

                    <ul class="modelo">
                        <li><a href="">Samsung</a></li>
                    </ul>

                </li>
                <li><a href="">IOS</a>
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
        </div>

        <div class="gridContainer">
            <div class="gridItem">

                <div class="btn-group" role="group" aria-label="Button group">
                    <button class="btn btn-primary" type="button">Text</button>
                </div>

            </div>
            <div class="gridItem">2</div>
            <div class="gridItem">3</div>
            <div class="gridItem">4</div>
            <div class="gridItem">5</div>
            <div class="gridItem">6</div>
            <div class="gridItem">7</div>
            <div class="gridItem">8</div>
            <div class="gridItem">9</div>
        </div>
    </section>




    <script>
        let bar = document.getElementById("sliderBar");
    </script>


    <script src="<?php echo BASE_URL ?>Assets/js/barProductos.js"></script>

</body>


<footer>
    <!--CHAT BOT -->
    <script>
        window.addEventListener('mouseover', initLandbot, {
            once: true
        });
        window.addEventListener('touchstart', initLandbot, {
            once: true
        });
        var myLandbot;

        function initLandbot() {
            if (!myLandbot) {
                var s = document.createElement('script');
                s.type = 'text/javascript';
                s.async = true;
                s.addEventListener('load', function() {
                    var myLandbot = new Landbot.Livechat({
                        configUrl: 'https://storage.googleapis.com/landbot.online/v3/H-1411224-FC2T7TSBWKVT2ZFB/index.json',
                    });
                });
                s.src = 'https://cdn.landbot.io/landbot-3/landbot-3.0.0.js';
                var x = document.getElementsByTagName('script')[0];
                x.parentNode.insertBefore(s, x);
            }
        }
    </script>

</footer>

</html>