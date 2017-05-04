<?php 

include '../conexion.php';
$Nombren = $_POST["Nombre"];
$Usuarion = $_POST["Usuario"];
$Passwordn = $_POST["Password"];
$Direccionn = $_POST["Direccion"];
        
$Sql = 'INSERT INTO usuarios VALUES (NULL,"","","'.$Usuarion.'","'.$Passwordn.'","","'.$Direccionn.'","","")';

$resultado = mysqli_query($con,$Sql);
$error = mysqli_error($con);
header("Location: ../login.php");

?> 