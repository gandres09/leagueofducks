<?php
include("con_db.php");

if (isset($_POST['enviar'])) {
    if (strlen($_POST['name']) >= 1 && strlen($_POST['email']) >= 1 && strlen($_POST['pass']) >= 1){
	    $name = trim($_POST['name']);
	    $email = trim($_POST['email']);
	    $pass = trim($_POST['pass']);

	    $fecha_reg = date("d/m/y");
	    $consulta = "INSERT INTO datos(nombre, email, fecha_reg, password) VALUES ('$name','$email','$fecha_reg','$pass')";
	    $resultado = mysqli_query($conex,$consulta);
	    if ($resultado) {
	    	?>
	    	<h3 class="ok">¡Te has registrado correctamente!</h3>
           <?php
	    } else{
	    	?>
	    	<h3 class="bad">¡Ups ha ocurrido un error!</h3>
           <?php
        }
	}else {
		?>
		<h3 class="bad">¡Por favor complete todos los campos!</h3>
		<?php
	}
}
?>