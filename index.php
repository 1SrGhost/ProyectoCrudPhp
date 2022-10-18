
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<title>CRUD php Mysql + bootstrap</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/estilos.css">	
	<script src="js/metodos.js"></script>
</head>
<body>
	<header>
		<nav class="navbar navbar-default navbar-static-top" role="navigation">
			<div class="container">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navegacion-fm">
						<span class="sr-only">Desplegar / Ocultar Menu</span>	
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a href="#" class="navbar-brand">Contactos</a>
				</div>
				<div class="collapse navbar-collapse" id="navegacion-fm">
					<ul class="nav navbar-nav">
						<li><a href="login.html"><span class="glyphicon glyphicon-home"></span>Home</a></li>							
						<li><a href="cerrars.php"><span class="glyphicon glyphicon-remove"></span>Salir</a></li>						
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
                                <div class="col-xs-4  text-right">
                                    <label for="buscar" class="control-label">Buscar:</label>
                                </div>
                                <div class="col-xs-4" >
                                    <input  type="text" name="buscqueda" id="busqueda" class="form-control"  placeholder="Ingrese nombre o descripcion"/>
                                    <button onclick="buscar_contactos()" class="" id="contactos" vale="buscar"></button> 
                                </div>
                                <script>
                                    function buscar_contactos(){
                                     
                                        var busqueda=$("#busqueda").val();
                                        var tabla="<thead><th>name<th>";
                                        $.ajax({
                                            type:'post',
                                            URL:
                                            
                                            
                                            ;
                                        
                                    }
                                
                                </script>
                            </div>
                            <div class="form-group">
                                <div id="lista"></div> 
                            </div> 
                            
                        </div>
                        
                    </div>
                </div>
            </div>

	
				
			<a class="btn btn-success" data-toggle="modal" data-target="#nuevoUsu">Nuevo Contacto</a><br><br>
			<table class='table'>
				<tr>
					<th>Id</th><th>Nombre</th><th>Edad</th><th>Direccion</th><th><span class="glyphicon glyphicon-wrench"></span></th>
				</tr>			
<?php
 require_once('nuevo.php');		
	

?>
	        </table>
		</div> 



		<div class="modal" id="nuevoUsu" tabindex="-1" role="dialog" aria-labellebdy="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4>Nuevo Contacto</h4>                       
                    </div>
                    <div class="modal-body">
                       <form action="insertar.php" method="GET">              		
                       		<div class="form-group">
                       			<label for="nombre">Nombre:</label>
                       			<input class="form-control" id="nombre" name="nombre" type="text" placeholder="Nombre"></input>
                       		</div>
                       		<div class="form-group">
                       			<label for="edad">Edad:</label>
                       			<input class="form-control" id="edad" name="edad" type="text" onkeypress="return numeros(event)" placeholder="Edad" required></input>
                                <script src="js/solonum.js">
                                </script>
                       		</div>
                       		<div class="form-group">
                       			<label for="direccion">Direccion:</label>
                       			<input class="form-control" id="direccion" name="direccion" type="text" placeholder="Direccion" required></input>
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

        <div class="modal" id="editUsu" tabindex="-1" role="dialog" aria-labellebdy="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4>Editar Contacto</h4>
                    </div>
                    <div class="modal-body">                      
                       <form action="actualiza.php" method="POST">                       		
                       		        
                       		        <input  id="id" name="id" type="hidden" ></input>   		
		                       		<div class="form-group">
		                       			<label for="nombre">Nombre:</label>
		                       			<input class="form-control" id="nombre" name="nombre" type="text" ></input>
		                       		</div>
		                       		<div class="form-group">
		                       			<label for="edad">Edad:</label>
		                       			<input class="form-control" id="edad" required name="edad" onkeypress="return numeros(event)" type="text" ></input>
		                       		
		                       		</div>
		                       		<div class="form-group">
		                       			<label for="direccion">Direccion:</label>
		                       			<input class="form-control" id="direccion" name="direccion" type="text" ></input>
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
		  var recipient0 = button.data('id')
		  var recipient1 = button.data('nombre')
		  var recipient2 = button.data('edad')
		  var recipient3 = button.data('direccion')
		   // Extract info from data-* attributes
		  // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
		  // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
		 
		  var modal = $(this)		 
		  modal.find('.modal-body #id').val(recipient0)
		  modal.find('.modal-body #nombre').val(recipient1)
		  modal.find('.modal-body #edad').val(recipient2)
		  modal.find('.modal-body #direccion').val(recipient3)		 
		});
		
	</script>
     <script>
	     function numeros(e){
                                            key = e.keyCode || e.which;
                                            tecla = String.fromCharCode(key).toLowerCase();
                                            letras = " 0123456789";
                                            especiales = [8,37,39,46];

                                            tecla_especial = false
                                            for(var i in especiales){
                                         if(key == especiales[i]){
                                             tecla_especial = true;
                                             break;
                                                } 
                                            }

                                            if(letras.indexOf(tecla)==-1 && !tecla_especial)
                                                return false;
                                        }
                           
	</script>
</body>
</html>
