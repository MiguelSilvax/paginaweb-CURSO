 <style>
     @import url("https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap");


     .header {
         top: 0;
         height: 8vh;
         width: 100%;
         background-color: #ffffff;
         box-shadow: 0 3px 20px rgba(0, 0, 0, 0.2);
         display: flex;
         position: fixed;
         z-index: 10;
         color: #fafbfb;
         align-items: center;
     }

     .nav-links {
         margin: auto;
         display: flex;
         list-style: none;
         padding: 0 0.7vw;
         gap: 20px;
         align-items: center;
     }

     .nav-links li .btn {
         text-decoration: none;
         margin: 0 0.7vw;
         color: #131418;
         font-size: 1rem;
     }

     .nav-links li .btn:hover {
         color: #0d6efd;
     }

     .nav-links li {
         position: relative;
     }

     .nav-links li .btn::before {
         content: "";
         display: block;
         height: 3px;
         width: 0%;
         background-color: #171717;
         position: absolute;
         transition: all ease-in-out 250ms;
         margin: 0 0 0 10%;
     }

     .nav-links li a:hover::before {
         width: 80%;
     }

     .login-button {
         padding: 1vh 1vw;
         margin-left: 2vw;
         font-size: 1rem;
         cursor: pointer;
         text-decoration: none;
         border: none;
         background: #f2f5f7;
         align-items: center;
         display: flex;
         justify-content: center;
         user-select: none;
     }

     .login-button:hover {
         color: #0d6efd;
         background-color: transparent;
         border: 1.5px solid #f2f5f7;
         transition: all ease-in-out 350ms;
         user-select: none;
     }

     .login-button:visited {
         user-select: none;
         color: #171717;
     }

     .join-button {
         color: #131418;
         padding: 1vh 1vw;
         font-size: 1rem;
         cursor: pointer;
         border: none;
         background: #f2f5f7;

     }

     .join-button:hover {
         color: #0d6efd;
         background-color: transparent;
         border: 1.5px solid #f2f5f7;
         transition: all ease-in-out 350ms;
     }

     .hamburger div {
         width: 30px;
         height: 3px;
         background: #171717;
         margin: 5px;
         transition: all 0.3s ease;
     }

     .hamburger {
         display: none;
     }







     @media screen and (max-width: 992px) {
         * {
             padding: 0;
             margin: 0;
             box-sizing: border-box;
             background-color: #0d6efd;
             position: 0;
         }

         .titleInit {
             margin: auto;
             text-align: center;
             width: 100vw;
             padding: 300px 12vw;
         }

         nav {
             position: fixed;
             z-index: 3;
         }

         .hamburger {
             display: block;
             position: absolute;
             cursor: pointer;
             right: 32vw;
             top: 50%;
             transform: translate(-5%, -50%);
             z-index: 2;
             transition: all 0.7s ease;
         }

         .nav-links {
             position: fixed;
             background: salmons;
             height: 100vh;
             width: 100%;
             flex-direction: column;
             clip-path: circle(50px at 90% -20%);
             -webkit-clip-path: circle(50px at 90% -10%);
             transition: all 1s ease-out;
             pointer-events: none;
             color: #171717;
         }

         .nav-links.open {
             clip-path: circle(1000px at 90% -10%);
             -webkit-clip-path: circle(1000px at 90% -10%);
             pointer-events: all;
         }

         .landing {
             flex-direction: column;
         }

         .nav-links li {
             opacity: 0;
         }

         .nav-links li:nth-child(1) {
             transition: all 0.5s ease 0.2s;
         }

         .nav-links li:nth-child(2) {
             transition: all 0.5s ease 0.4s;
         }

         .nav-links li:nth-child(3) {
             transition: all 0.5s ease 0.6s;
         }

         .nav-links li:nth-child(4) {
             transition: all 0.5s ease 0.7s;
         }

         .nav-links li:nth-child(5) {
             transition: all 0.5s ease 0.8s;
         }

         .nav-links li:nth-child(6) {
             transition: all 0.5s ease 0.9s;
             margin: 0;
         }

         .nav-links li:nth-child(7) {
             transition: all 0.5s ease 1s;
             margin: 0;
         }

         li.fade {
             opacity: 1;
         }
     }

     .toggle .line1 {
         transform: rotate(-45deg) translate(-5px, 6px);
     }

     .toggle .line2 {
         transition: all 0.7s ease;
         width: 0;
     }

     .toggle .line3 {
         transform: rotate(45deg) translate(-5px, -6px);
     }

     html {
         scroll-behavior: smooth;
     }
 </style>

 <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
 <nav class="header">

     <div class="hamburger">
         <div class="line1"></div>
         <div class="line2"></div>
         <div class="line3"></div>
     </div>


     <ul class="nav-links">
         <li><a class="btn" href="<?php echo BASE_URL ?>">inicio</a></li>
         <li><a class="btn" href="<?php echo BASE_URL . "productos" ?>">Productos</a></li>
         <li><a class="btn" href="<?php echo BASE_URL . "nosotros" ?>">Quienes somos </a></li>
         <li><a class="btn" href="<?php echo BASE_URL . "nosotros/" ?>#contacto">Contactanos</a></li>
         <li><a href="<?php echo BASE_URL . "login"; ?>" type="button" class="login-button"><span class="material-symbols-outlined">person</span></a></li>
         <li><a class="join-button" href="<?php echo BASE_URL . "register" ?>">Sign in</a></li>
     </ul>
 </nav>
 <script src="<?php echo BASE_URL; ?>Assets/js/fontawesome.min.js"></script>
 <script src="<?php echo BASE_URL; ?>Assets/js/stickyNavBar.js"></script>