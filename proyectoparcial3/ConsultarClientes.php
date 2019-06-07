<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Listas de clientes</title>
	<link rel="stylesheet" href="css/bootstrap.css">
</head>
<body>
	<?php 
		$server="localhost";
			$username = "root";
			$pass = "";
			$db= "panini clientes";

			$conexion = new mysqli ($server, $username, $pass, $db);

			if($conexion->connect_error){
					die("Error en la conexión: " . $conexion->connect_error);
			}

			$sql = "SELECT * FROM clientes";
			$data = $conexion->query($sql); 
			echo '<table class="table table-hover">';
			echo '<thead>';
			echo '<tr>';
			echo '<th>ID</th>';
			echo '<th>Nombre</th>';
			echo '<th>Edad</th>';
			echo '<th>Telefono</th>';
			echo '<th>Sexo</th>';
			echo '<th>Editar</th>';//Opcion para editar
			echo '</tr>';
			echo '</thead>';
			echo '<tbody>';
			while($obj = $data->fetch_object()){
				echo '<tr><td>'.$obj->id.'</td>';
				echo '<td>'.$obj->nombre.'</td>';
				echo '<td>'.$obj->edad.'</td>';
				echo '<td>'.$obj->telefono.'</td>';
				echo '<td>'.$obj->sexo.'</td>';
				echo '<td><a class="btn btn-xs btn-primary" href="editarCliente.php?id='.$obj->id.'">Editar</a>  <a class="btn btn-xs btn-default" href="eliminar.php?id='.$obj->id.'">Eliminar</a></td></tr>';
			}
	 ?>

	 	<div class="col-xs-12"> <a class="btn btn-header btn-block" href="registro.php"> <i class="fa fa-sign-in fa-fw"></i> <span>Regristro</span> </a> </div>
								</div>
							</div>

							<div class="row"> 
								<div class="col-xs-12"> <a class="btn btn-header btn-block" href="PaniniComics.php"> <i class="fa fa-sign-in fa-fw"></i> <span>PaniniComics</span> </a> </div>
								</div>
							</div>
</body>
</html>











