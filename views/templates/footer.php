
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


</main>


<script>
    const base_url = <?php echo BASE_URL ?>;
</script>
<!--JAVASCRIPT-->
<script src="<?php echo BASE_URL; ?>Assets/js/script.js"></script>
<script src="<?php echo BASE_URL; ?>Assets/js/scroll.js"></script>
<script src="<?php echo BASE_URL; ?>Assets/js/mouse.js"></script>
<script src="<?php echo BASE_URL; ?>Assets/js/swiper.js"></script>
<script src="<?php echo BASE_URL; ?>Assets/js/stickyNavBar.js"></script>
<script src="<?php echo BASE_URL; ?>Assets/js/sliderNews.js"></script>
<script src="<?php echo BASE_URL; ?>assets/js/bootstrap.bundle.min.js"></script>
<script src="<?php echo BASE_URL; ?>Assets/js/sweetalert.min.js"></script>


</body>

</html>