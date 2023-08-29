<div class="box" ><!-- box Starts -->

<div class="box-header" ><!-- box-header Starts -->

<center>

<h1>Acceso</h1>

<p class="lead" >Nuestro Cliente</p>


</center>

<p class="text-muted" >
OSSHA C.A, se dedica a la fabricación, venta y distribución de artículos y productos para la limpieza del hogar y la industria (higiene industrial). Asimismo, presta servicios de limpieza para empresas, hogares, oficinas, colegios, sanitarios, hospitales, etc. Así como la distribución, compra y venta de accesorios necesarios para llevar adelante procesos de limpieza y desinfección de: carros de limpieza baldes, cepillos de todo tipo, bolsas de residuos, guantes de goma, esponjas metálicas, artículos para barrido de calles y aceras, artículos y elementos para la limpieza de piletas de natación o piscinas, equipo para aromatización ambiental y, distribución y venta de todo tipo de envases plásticos. 

</p>




</div><!-- box-header Ends -->

<form action="checkout.php" method="post" ><!--form Starts -->

<div class="form-group" ><!-- form-group Starts -->

<label>Correo</label>

<input type="text" class="form-control" name="c_email" required >

</div><!-- form-group Ends -->

<div class="form-group" ><!-- form-group Starts -->

<label>Contraseña</label>

<input type="password" class="form-control" name="c_pass" required >

<h4 align="center">

<a href="forgot_pass.php"> Has olvidado tu contraseña </a>

</h4>

</div><!-- form-group Ends -->

<div class="text-center" ><!-- text-center Starts -->

<button name="login" value="Login" class="btn btn-primary" >

<i class="fa fa-sign-in" ></i> Ingresar


</button>

</div><!-- text-center Ends -->


</form><!--form Ends -->

<center><!-- center Starts -->

<a href="customer_register.php" >

<h3>¿Eres Nuevo/a? Registrate Aquí</h3>

</a>


</center><!-- center Ends -->


</div><!-- box Ends -->

<?php

if(isset($_POST['login'])){

$customer_email = $_POST['c_email'];

$customer_pass = $_POST['c_pass'];

$select_customer = "select * from customers where customer_email='$customer_email' AND customer_pass='$customer_pass'";

$run_customer = mysqli_query($con,$select_customer);

$get_ip = getRealUserIp();

$check_customer = mysqli_num_rows($run_customer);

$select_cart = "select * from cart where ip_add='$get_ip'";

$run_cart = mysqli_query($con,$select_cart);

$check_cart = mysqli_num_rows($run_cart);

if($check_customer==0){

echo "<script>alert('El Correo o Contraseña es incorrecto')</script>";

exit();

}

if($check_customer==1 AND $check_cart==0){

$_SESSION['customer_email']=$customer_email;

echo "<script>alert('Has iniciado sesión')</script>";

echo "<script>window.open('customer/my_account.php?my_orders','_self')</script>";

}
else {

$_SESSION['customer_email']=$customer_email;

echo "<script>alert('Has iniciado sesión')</script>";

echo "<script>window.open('checkout.php','_self')</script>";

} 


}

?>