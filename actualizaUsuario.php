<?php

session_start();

	$mysqli = new mysqli("localhost", "root", "", "bdpersona");	
	
	$nombre = $_POST['nombre'];
	$apellido = $_POST['apellido'];
	$correo =  $_POST['correo'];
	$pass =  $_POST['pass'];	

	$sql = $mysqli->query("update tbusuarios set nombre='$nombre', apellido='$apellido', clave='$pass' where correo='$correo'");
?>	


     <META HTTP-EQUIV="Refresh" CONTENT="0; URL=usuarios.php">

 
    