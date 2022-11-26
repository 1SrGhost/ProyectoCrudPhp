<?php
	

    $mysqli = new mysqli("localhost", "root", "", "bdpersona");	
    $nom = $_GET['nombre'];
    $apellido = $_GET['apellido'];
    $correo = $_GET['correo'];	
    $pass = $_GET['pass'];					
    $sql = $mysqli->query("insert into tbusuarios (apellido,clave,correo,nombre) values ( '$apellido','$pass', '$correo','$nom') ");			
    
?>	

    <SCRIPT LANGUAGE="javascript"> 
    alert("Usuario Registrado"); 
    </SCRIPT> 
    <META HTTP-EQUIV="Refresh" CONTENT="0; URL=usuarios.php">
