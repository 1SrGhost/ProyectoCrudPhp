<?php
//obtengo los datos del formulario
$correo=$_POST['correo'];
$clave=$_POST['clave'];


$conexion=mysqli_connect("localhost", "root", "", "bdpersona");	
//valido el usuario y contraseña
$consulta="SELECT * FROM tbusuarios WHERE correo='$correo' and clave='$clave'";
//ejecuto lo anterior obtenido
$resultado=mysqli_query($conexion, $consulta);
//si el dato se obtiene tenemor 1 valor, de lo contrario tenemos 0
//validamos apoyandonos en eso
$filas=mysqli_num_rows($resultado);
    if($filas>0){
        //redireccionamos en caso de que la informacion sea correcta
        header("location:contactos.php");
    }
//si la informacion es incorrecta 
    else{
         echo'<SCRIPT>  
            alert("error en autenticacion");
            window.history.go(-1);
            </SCRIPT>';
       
            exit;
    }
//con los datos obtenidos,liberamos memoria
mysqli_free_result($resultado);
//cerramos conexion
mysqli_close($conexion);
?>