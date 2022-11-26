<?php
				$mysqli = new mysqli("localhost", "root", "", "bdpersona");		
			if ($mysqli->connect_errno) {
			    echo "Fallo al conectar a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
			    exit();
			}
			$consulta= "SELECT * FROM tbusuarios";
			if ($resultado = $mysqli->query($consulta)) 
			{
				while ($fila = $resultado->fetch_row()) 
				{					
					echo "<tr>";
					echo "<td>$fila[0]</td><td>$fila[1]</td><td>$fila[2]</td><td>$fila[3]</td>";	
					echo"<td>";						
				    echo "<a data-toggle='modal' data-target='#editUsuario' data-nombreUser='" .$fila[0] ."' data-ApellidoUser='" .$fila[1] ."' data-CorreoUser='" .$fila[2] ."' data-ClaveUser='" .$fila[3] ."' class='btn btn-warning'><span class='glyphicon glyphicon-pencil'></span>Editar</a> ";			
					echo "<a class='btn btn-danger' href='eliminaUser.php?correo=" .$fila[2] ."'><span class='glyphicon glyphicon-remove'></span>Eliminar</a>";		
					echo "</td>";
					echo "</tr>";
				}
				$resultado->close();
			}
			$mysqli->close();			
	?>