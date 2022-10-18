<?php

//obtengo los datos del formulario
$nom=$_POST['nom'];
$ape=$_POST['ape'];
$cor=$_POST['cor'];
$pas=$_POST['pas'];
//encripto la contraseña
$encript=sha1($pas);
//conectar con la base de datos
 $conexion=pg_connect("host='127.0.0.1' dbname='login' user='postgres' port='5432' password='1234'")or die("Cannnot db,please check your connection string");

//$conexion=mysqli_connect("localhost","root","","login");
//colsulto que no este registrado
//$consulta= mysqli_query($conexion,"SELECT * FROM usuarios WHERE correo='$cor'");
$consulta=pg_query($conexion,"SELECT * FROM usuarios WHERE correo='$cor'");
if(pg_num_rows($consulta)>0){
            echo'<SCRIPT>  
            alert("el usuario ya existe");
            window.history.go(-1);
            </SCRIPT>';
       
            exit;
}
    else {
 
        
        
               echo'<SCRIPT>  
            alert("el usuario fue creado de forma exitosa");
                    window.location.assign("http://localhost/proyect/login.html")
                </SCRIPT>';
    }

//guardo los datos en la bd
$ing="INSERT INTO usuarios (nombre, apellido, correo, clave) VALUES ('$nom', '$ape', '$cor', '$encript')";
//ejecuto la orden
$resultado=pg_query($conexion,$ing);

//cerramos conexion
pg_close($conexion);
?>