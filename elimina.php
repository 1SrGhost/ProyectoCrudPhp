<?php

$id = $_GET['id'];
	$mysqli = new mysqli("localhost", "root", "", "bdpersona");		
	$sql = $mysqli->query("delete from tbcontactos where id='$id'");	
	echo "eliminando";
	echo"<META HTTP-EQUIV='Refresh' CONTENT='0; URL=contactos.php'>";
	 

?>