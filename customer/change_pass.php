
<h1 align="center">Cambiar Contraseña </h1>

<form action="" method="post"><!-- form Starts -->

<div class="form-group"><!-- form-group Starts -->

<label>Introduzca su Contraseña Actual</label>

<input type="text" name="old_pass" class="form-control" required>

</div><!-- form-group Ends -->


<div class="form-group"><!-- form-group Starts -->

<label>Introduzca su Nueva Contraseña</label>

<input type="text" name="new_pass" class="form-control" required>

</div><!-- form-group Ends -->


<div class="form-group"><!-- form-group Starts -->

<label>Confirme su Nueva Contraseña</label>

<input type="text" name="new_pass_again" class="form-control" required>

</div><!-- form-group Ends -->

<div class="text-center"><!-- text-center Starts -->

<button type="submit" name="submit" class="btn btn-primary">

<i class="fa fa-user-md"> </i> Cambiar la contraseña

</button>

</div><!-- text-center Ends -->

</form><!-- form Ends -->
<?php

if(isset($_POST['submit'])){

$c_email = $_SESSION['customer_email'];

$old_pass = $_POST['old_pass'];

$new_pass = $_POST['new_pass'];

$new_pass_again = $_POST['new_pass_again'];

$sel_old_pass = "select * from customers where customer_pass='$old_pass'";

$run_old_pass = mysqli_query($con,$sel_old_pass);

$check_old_pass = mysqli_num_rows($run_old_pass);

if($check_old_pass==0){

echo "<script>alert('Su contraseña actual no es válida. Inténtelo de nuevo')</script>";

exit();

}

if($new_pass!=$new_pass_again){

echo "<script>alert('Tu nueva contraseña no coincide')</script>";

exit();

}

$update_pass = "update customers set customer_pass='$new_pass' where customer_email='$c_email'";

$run_pass = mysqli_query($con,$update_pass);

if($run_pass){

echo "<script>alert('Tu Contraseña ha sido cambiada satisfactoriamente')</script>";

echo "<script>window.open('my_account.php?my_orders','_self')</script>";


}




}



?>







