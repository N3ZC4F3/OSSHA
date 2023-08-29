<?php

session_start();

include("includes/db.php");
include("includes/header.php");
include("functions/functions.php");
include("includes/main.php");

?>


  <!-- Cover -->
  <main>
    <div class="hero">
      <a href="shop.php" class="btn1">Ver Todos los Productos
</a>
    </div>
    <!-- Main -->
    <div class="wrapper">
            <h1>Colección Destacada<h1>
            
      </div>



    <div id="content" class="container"><!-- container Starts -->

    <div class="row"><!-- row Starts -->

    <?php

    getPro();

    ?>

    </div><!-- row Ends -->

    </div><!-- container Ends -->
    <!-- FOOTER -->
    <footer class="page-footer">

      <div class="footer-nav">
        <div class="container clearfix">

          <div class="footer-nav__col footer-nav__col--info">
            <div class="footer-nav__heading">Información</div>
            <ul class="footer-nav__list">
              <li class="footer-nav__item">
                <a href="#" class="footer-nav__link">La marca</a>
              </li>
              <li class="footer-nav__item">
                <a href="#" class="footer-nav__link">Tiendas Locales</a>
              </li>
              <li class="footer-nav__item">
                <a href="#" class="footer-nav__link">Servicio al Cliente</a>
              </li>
              <li class="footer-nav__item">
                <a href="#" class="footer-nav__link">Cookies &amp; Privacidad </a>
              </li>
              <li class="footer-nav__item">
                <a href="#" class="footer-nav__link">Mapa del Sitio</a>
              </li>
            </ul>
          </div>

          <div class="footer-nav__col footer-nav__col--whybuy">
            <div class="footer-nav__heading">¿Por qué Comprar en OSSHA?</div>
            <ul class="footer-nav__list">
              <li class="footer-nav__item">
                <a href="#" class="footer-nav__link">Envío &amp; Devoluciones</a>
              </li>
              <li class="footer-nav__item">
                <a href="#" class="footer-nav__link">Envío Seguro</a>
              </li>
              <li class="footer-nav__item">
                <a href="#" class="footer-nav__link">Testimonios</a>
              </li>
              <li class="footer-nav__item">
                <a href="#" class="footer-nav__link">Premiado</a>
              </li>
              <li class="footer-nav__item">
                <a href="#" class="footer-nav__link">Comercio Ético</a>
              </li>
            </ul>
          </div>

          <div class="footer-nav__col footer-nav__col--account">
            <div class="footer-nav__heading">Tu Cuenta</div>
            <ul class="footer-nav__list">
              <li class="footer-nav__item">
                <a href="#" class="footer-nav__link">Iniciar sesión</a>
              </li>
              <li class="footer-nav__item">
                <a href="#" class="footer-nav__link">Registrarse</a>
              </li>
              <li class="footer-nav__item">
                <a href="#" class="footer-nav__link">Ver Carrito</a>
              </li>
              <li class="footer-nav__item">
                <a href="#" class="footer-nav__link">Ver Tu Catálogo</a>
              </li>
              <li class="footer-nav__item">
                <a href="#" class="footer-nav__link">Seguimiento de Pedido</a>
              </li>
              <li class="footer-nav__item">
                <a href="#" class="footer-nav__link">Actualizar Información</a>
              </li>
            </ul>
          </div>


          <div class="footer-nav__col footer-nav__col--contacts">
            <div class="footer-nav__heading">Detalles de Contacto</div>
            <address class="address">
            Calle Simón Rodríguez, P.B, local 40.<br>
            Puerto La Cruz, Estado Anzoategui. 
          </address>
            <div class="phone">
              Teléfono:
              <a class="phone__number" href="tel:0123456789">0281-265-3354</a>
            </div>
            <div class="email">
              Correo:
              <a href="mailto:support@yourwebsite.com" class="email__addr">ossha2031@gmail.com</a>
            </div>
          </div>

        </div>
      </div>

      <!-- <div class="banners">
        <div class="container clearfix">

          <div class="banner-award">
            <span>Award winner</span><br> Fashion awards 2016
          </div>

          <div class="banner-social">
            <a href="#" class="banner-social__link">
            <i class="icon-facebook"></i>
          </a>
            <a href="#" class="banner-social__link">
            <i class="icon-twitter"></i>
          </a>
            <a href="#" class="banner-social__link">
            <i class="icon-instagram"></i>
          </a>
            <a href="#" class="banner-social__link">
            <i class="icon-pinterest-circled"></i>
          </a>
          </div>

        </div>
      </div> -->

      <div class="page-footer__subline">
        <div class="container clearfix">

          <div class="copyright">
            &copy; <?php echo date("Y");?> Ecommerce Website-PHP&trade;
          </div>

          <div class="developer">
           Diseñado Por Nadgirah Salazar
          </div>

          <div class="designby">
            Diseñado Por Nadgirah Salazar
          </div>

        </div>
      </div>
    </footer>
</body>

</html>
