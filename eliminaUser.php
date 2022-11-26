<?php

$correo = $_GET['correo'];
	$mysqli = new mysqli("localhost", "root", "", "bdpersona");		
	$sql = $mysqli->query("delete from tbusuarios where correo='$correo'");	
	echo "eliminando";
	echo"<META HTTP-EQUIV='Refresh' CONTENT='0; URL=usuarios.php'>";
	 

?>