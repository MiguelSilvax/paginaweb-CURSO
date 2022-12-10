   <?php include_once "views/templates/header.php" ?>


   <div class="nosotros">
       <div class="imgBanner">
           <img src="<?php echo BASE_URL ?>Assets/img/nosotros/img.png" alt="">
       </div>


       <div class="bloqueDescription">
           <h1>¿Qué es Smartshop?</h1>
           <p>Smartshop Informática Para Tu Negocio, IPTN… puedes llamarnos como tú quieras.
               Somos una plataforma online que comercializa productos y servicios de tecnologías digitales pensados, seleccionados, diseñados y adaptados a autónomos,
               y pequeñas y medianas empresas.</p>
       </div>
   </div>



   <div class="contacto">
       <div class="bloqueDescription" id="contacto">
           <h1>Contáctanos</h1>
           <div class="information">
               <span class="span">
                   <i class="fa-solid fa-location-dot"></i>
                   <p> 91, Ram Nagar, Ram Mandir, Delhi</p>
               </span>
               <span class="span">
                   <i class="fa-solid fa-phone"></i>
                   <p>+51 987654321</p>
               </span class="span">
               <span class="span">
                   <i class="fa-regular fa-envelope"></i>
                   <p>profeUn20@mail.com</p>
               </span>
               <span class="span">
                   <i class="fa-brands fa-facebook"></i>
                   <i class="fa-brands fa-instagram"></i>
                   <i class="fa-solid fa-truck-fast"></i>
               </span>
           </div>
       </div>
       <div class="bloqueForm">
           <form method="POST" action="#####" id="formCsontacto">
               <div class="fila0">
                   <h1>Escríbenos</h1>
               </div>
               <div class="fila1">
                   <input type="text" name="nombre" id="nombre" placeholder="Nombre" class="inputForm">
                   <input type="text" name="mail" id="mail" placeholder="Mail" class="inputForm">
               </div>
               <div class="fila2">
                   <input type="text" name="numero" id="numero" placeholder="Número" class="inputForm">
                   <input type="text" name="direccion" id="direccion" placeholder="Dirección" class="inputForm">
               </div>
               <div class="fila3">
                   <textarea name="asunto" id="asunto" cols="30" rows="10"></textarea>
               </div>
               <div class="fila4">
                   <button type="submit">Enviar</button>
               </div>
           </form>
       </div>
   </div>

   <script src="<?php echo BASE_URL?>Assets/js/sweetalert.min.js"></script>
   <?php include_once "views/templates/footer.php" ?>