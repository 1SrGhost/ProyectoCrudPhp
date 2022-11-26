<?php

//obtengo los datos del formulario
$nom=$_POST['nom'];
$ape=$_POST['ape'];
$cor=$_POST['cor'];
$pas=$_POST['pas'];

//conectar con la base de datos
 
 $conexion = mysqli_connect("localhost", "root", "", "bdpersona");	
//$conexion=mysqli_connect("localhost","root","","login");
//colsulto que no este registrado
//$consulta= mysqli_query($conexion,"SELECT * FROM usuarios WHERE correo='$cor'");
$consulta=mysqli_query($conexion,"SELECT * FROM tbusuarios WHERE correo='$cor'");
if(mysqli_num_rows($consulta)>0){
            echo'<SCRIPT>  
            alert("el usuario ya existe");
            window.history.go(-1);
            </SCRIPT>';
       
            exit;
}
    else {
 
        
        
               echo'<SCRIPT>  
            alert("el usuario fue creado de forma exitosa");
                    window.location.assign("http://localhost/proyectos/index.html")
                </SCRIPT>';
    }

//guardo los datos en la bd
$ing="INSERT INTO tbusuarios (nombre, apellido, correo, clave) VALUES ('$nom', '$ape', '$cor', '$pas')";
//ejecuto la orden
$resultado=mysqli_query($conexion,$ing);

//cerramos conexion
mysqli_close($conexion);
?>