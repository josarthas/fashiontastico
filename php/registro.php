<?php 

include '../php/conexion.php';
$nombre = $_POST["nombre"];
$email = $_POST["email"];
$usuario = $_POST["usuario"];
$password = $_POST["password"];

        


$link = Conectarse();

$query = "SELECT email FROM usuarios WHERE email = '$email' ";
$r=mysqli_query($link,$query);
echo mysqli_error($link);


if( $r->num_rows == 0){		
	$query_2 = "INSERT INTO usuarios (nombre,usuario,email,contrasena,tipo) VALUES ('$nombre','$usuario','$email','$password','1')";

	$result=mysqli_query($link,$query_2);
	echo mysqli_error($link);
			
	if($result){
		echo '<script type="text/javascript">
			alert("¡Te has registrado de manera exitosa!");
			window.location.assign("../Principal_Usuario.html");
			</script>';
	}else{
		echo '<script type="text/javascript">
			alert("Error al registro´, por favor intentalo de nuevo");
			window.location.assign("../Registro.html");
			</script>';
	}

}else{
		echo '<script type="text/javascript">
			alert("Usuario Existente");
			window.location.assign("../Registro.html");
			</script>';

}



?> 