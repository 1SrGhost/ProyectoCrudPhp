<?php
//obtengo los datos del formulario
$correo=$_POST['correo'];
$clave=$_POST['clave'];
//encripto la contraseña
$encript=sha1($clave);
//conectar a la base de datos
$conexion=pg_connect("host='127.0.0.1' dbname='login' user='postgres' port='5432' password='1234'")or die("Cannnot db,please check your connection string");
//valido el usuario y contraseña
$consulta="SELECT * FROM usuarios WHERE correo='$correo' and clave='$encript'";
//ejecuto lo anterior obtenido
$resultado=pg_query($conexion, $consulta);
//si el dato se obtiene tenemor 1 valor, de lo contrario tenemos 0
//validamos apoyandonos en eso
$filas=pg_num_rows($resultado);
    if($filas>0){
        //redireccionamos en caso de que la informacion sea correcta
        header("location:index.php");
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
pg_free_result($resultado);
//cerramos conexion
pg_close($conexion);
?>