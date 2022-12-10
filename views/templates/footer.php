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

<footer>
    <div class="grid-footer">
        <div class="gridFotterItem">
            <h1>SMARTSHOP</h1><br>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing <br> elit. Dignissimos natus maiores  eveniet dolor</p>
        </div>
        <div class="gridFotterItem fotterItem2">
            <h1>Productos</h1>
            <br>
            <ul>
                <li>Smartphones</li>
                <li>IOS</li>
                <li>Android</li>
            </ul>
        </div>
        <div class="gridFotterItem fotterItem3">
            <h1>Mi cuenta</h1>
            <ul>
                <li>Mi cuenta</li>
                <li>Pedidos</li>
                <li>Lista favoritos</li>
            </ul>
        </div>
        <div class="gridFotterItem">
            <i class="fa-brands fa-instagram"></i>
            <i class="fa-brands fa-facebook"></i>
        </div>


    </div>
</footer>
</main>


<script>
    const base_url = "<?php echo BASE_URL ?>";
</script>
<!--JAVASCRIPT-->

<script src="<?php echo BASE_URL; ?>Assets/js/modulos/<?php echo $data['js'] ?>"></script>
<script src="<?php echo BASE_URL; ?>Assets/js/<?php echo $data['js'] ?>"></script>
<script src="<?php echo BASE_URL; ?>Assets/js/fontawesome.min.js"></script>
<script src="<?php echo BASE_URL; ?>Assets/js/all.min.js"></script>

</body>

</html>