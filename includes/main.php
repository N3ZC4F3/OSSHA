</head>

<body>

  <header class="page-header">
    <!-- topline -->
    <div class="page-header__topline">
      <div class="container clearfix">

        <div class="currency">
          <a class="currency__change" href="customer/my_account.php?my_orders">
          <?php
          if(!isset($_SESSION['customer_email'])){
          echo "Bienvenido/a :Visitante"; 
          }
          else
          { 
              echo "Bienvenido/a : " . $_SESSION['customer_email'] . "";
            }
?>
          </a>
        </div>

        <div class="basket">
          <a href="cart.php" class="btn btn--basket">
            <i class="icon-basket"></i>
            <?php items(); ?> Compras
          </a>
        </div>
        
        
        <ul class="login">

<li class="login__item">
<?php
if(!isset($_SESSION['customer_email'])){
  echo '<a href="customer_register.php" class="login__link">Registrarse</a>';
} 
  else
  { 
      echo '<a href="customer/my_account.php?my_orders" class="login__link">Mi Cuenta</a>';
  }   
?>  
</li>


<li class="login__item">
<?php
if(!isset($_SESSION['customer_email'])){
  echo '<a href="checkout.php" class="login__link">Iniciar Sesión</a>';
} 
  else
  { 
      echo '<a href="./logout.php" class="login__link">Cerrar Sesión</a>';
  }   
?>  
  
</li>
</ul>
      
      </div>
    </div>
    <!-- bottomline -->
    <div class="page-header__bottomline">
      <div class="container clearfix">

        <div class="logo">
          <a class="logo__link" href="index.php">
            <img class="logo__img" src="images/logo.png" alt="OSSHA, C.A" width="237" height="19">
          </a>
        </div>

        <nav class="main-nav">
          <ul class="categories">

            <li class="categories__item">
              <a class="categories__link" href="#">
                OSSHA
               
              </a>
              </li>

            <li class="categories__item">
              <a class="categories__link" href="#">
                Artículos de Limpieza
              
               
              </a>
            </li>

            <li class="categories__item">
              <a class="categories__link categories__link--active" href="shop.php">
               Productos
              </a>
            </li>

            <li class="categories__item">
              <a class="categories__link" href="localstore.php">
                Sucursales
              </a>
            </li>

          <li class="categories__item">
              <a class="categories__link" href="customer/my_account.php?my_orders">
                Mi Cuenta
                <i class="icon-down-open-1"></i>
              </a>
              <div class="dropdown dropdown--lookbook">
                <div class="clearfix">
                  <div class="dropdown__half">
                    <div class="dropdown__heading">Configuraciones de la cuenta</div>
                    <ul class="dropdown__items">
                      <li class="dropdown__item">
                        <a href="#" class="dropdown__link">Mi Lista de Deseos</a>
                      </li>
                      <li class="dropdown__item">
                        <a href="#" class="dropdown__link">Mis Pedidos</a>
                      </li>
                      <li class="dropdown__item">
                        <a href="#" class="dropdown__link">Vista del carrito de compras</a>
                      </li>
                    </ul>
                  </div>
                  <div class="dropdown__half">
                    <div class="dropdown__heading"></div>
                    <ul class="dropdown__items">
                      <li class="dropdown__item">
                        <a href="#" class="dropdown__link">Editar tu Cuenta</a>
                      </li>
                      <li class="dropdown__item">
                        <a href="#" class="dropdown__link">Cambiar Contraseña</a>
                      </li>
                      <li class="dropdown__item">
                        <a href="#" class="dropdown__link">Borrar Cuenta</a>
                      </li>
                    </ul>
                  </div>
                </div>
             

              </div>

            </li>

          </ul>
        </nav>
      </div>
    </div>
  </header>