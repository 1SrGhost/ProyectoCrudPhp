<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <title>Crud</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/estilos.css">
    <script src="js/metodos.js"></script>
</head>

<body>
    <header>
        <nav class="navbar navbar-default navbar-static-top" role="navigation">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                        data-target="#navegacion-fm">
                        <span class="sr-only">Desplegar / Ocultar Menu</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand">Usuarios</a>
                </div>
                <div class="collapse navbar-collapse" id="navegacion-fm">
                    <ul class="nav navbar-nav">
                        <li><a href="contactos.php"><span class="glyphicon glyphicon-home"></span>Inicio</a></li>
                        <li><a href="usuarios.php"><span class="glyphicon glyphicon-user"></span>Usuarios</a></li>
                        <li><a href="index.html"><span class="glyphicon glyphicon-remove"></span>Salir</a></li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <div class="container">
        <div class="row">
            <div class="tab-content">
                <div class="tab-pane active" id="tab_consultar">
                    <div class="row form-horizontal">
                        <div class="panel panel-default">
                            <div class="panel-heading">Usuarios Existentes</div>
                            <div class="panel-body">
                                <div class="form-group">
                                    <table class='table'>
                                        <tr>
                                            <th>Nombre</th>
                                            <th>Apellido</th>
                                            <th>Correo</th>
                                            <th>Clave</th>
                                            <th><span class="glyphicon glyphicon-wrench"></span></th>
                                        </tr>
                                        <?php
require_once('nuevoUser.php');


?>
                                    </table>


                                </div>
                                <div class="form-group">
                                    <div id="lista"></div>
                                </div>

                            </div>

                        </div>
                    </div>
                </div>



                <a class="btn btn-success" data-toggle="modal" data-target="#nuevoUser">Nuevo Usuario</a><br><br>
                

            </div>



            <div class="modal" id="nuevoUser" tabindex="-1" role="dialog" aria-labellebdy="myModalLabel"
                aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                            <h4>Nuevo Usuario</h4>
                        </div>
                        <div class="modal-body">
                            <form action="insertarUsuario.php" method="GET">
                                <div class="form-group">
                                    <label for="nombre">Nombre:</label>
                                    <input class="form-control" id="nombre" name="nombre" type="text"
                                        placeholder="Nombre"></input>
                                </div>
                                <div class="form-group">
                                    <label for="apellido">Apellido:</label>
                                    <input class="form-control" id="apellido" name="apellido" type="text"
                                        placeholder="Apellido" required></input>
                                    <script src="js/solonum.js">
                                    </script>
                                </div>
                                <div class="form-group">
                                    <label for="correo">Correo:</label>
                                    <input class="form-control" id="correo" name="correo" type="text"
                                        placeholder="correo" required></input>
                                </div>
                                <div class="form-group">
                                    <label for="pass">Contrasena:</label>
                                    <input class="form-control" id="pass" name="pass" type="password"
                                        placeholder="Contrasena" required></input>
                                </div>

                                <input type="submit" class="btn btn-success" value="Salvar">
                            </form>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-warning" data-dismiss="modal">Cerrar</button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="modal" id="editUsuario" tabindex="-1" role="dialog" aria-labellebdy="myModalLabel"
                aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                            <h4>Actualizar contrasena por correo</h4>
                        </div>
                        <div class="modal-body">
                            <form action="actualizaUsuario.php" method="POST">

                                
                            <div class="form-group">
                                    <label for="nombre">Nombre:</label>
                                    <input class="form-control" id="nombre" name="nombre" type="text"
                                        placeholder="Nombre"></input>
                                </div>
                                <div class="form-group">
                                    <label for="apellido">Apellido:</label>
                                    <input class="form-control" id="apellido" name="apellido" type="text"
                                        placeholder="Apellido" required></input>
                                    <script src="js/solonum.js">
                                    </script>
                                </div>
                                <div class="form-group">
                                    <label for="correo">Correo:</label>
                                    <input class="form-control" id="correo" name="correo" type="text"
                                        placeholder="Direccion" required></input>
                                </div>
                                <div class="form-group">
                                    <label for="pass">Contrasena:</label>
                                    <input class="form-control" id="pass" name="pass" type="password"
                                        placeholder="Contrasena" required></input>
                                </div>

                                  

                                <input type="submit" class="btn btn-success">
                            </form>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-warning" data-dismiss="modal">Cerrar</button>
                        </div>
                    </div>
                </div>
            </div>



        </div>
        <script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script>
           $('#editUsu').on('show.bs.modal', function (event) {
				var button = $(event.relatedTarget) // Button that triggered the modal
				var recipient0 = button.data('nombre')
				var recipient1 = button.data('apellido')
				var recipient2 = button.data('correo')
				var recipient3 = button.data('pass')
				// Extract info from data-* attributes
				// If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
				// Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.

				var modal = $(this)
				modal.find('.modal-body #nombre').val(recipient0)
				modal.find('.modal-body #apellido').val(recipient1)
				modal.find('.modal-body #correo').val(recipient2)
				modal.find('.modal-body #pass').val(recipient3)
			});


        </script>
        <script>
            function numeros(e) {
                key = e.keyCode || e.which;
                tecla = String.fromCharCode(key).toLowerCase();
                letras = " 0123456789";
                especiales = [8, 37, 39, 46];

                tecla_especial = false
                for (var i in especiales) {
                    if (key == especiales[i]) {
                        tecla_especial = true;
                        break;
                    }
                }

                if (letras.indexOf(tecla) == -1 && !tecla_especial)
                    return false;
            }

        </script>
</body>

</html>