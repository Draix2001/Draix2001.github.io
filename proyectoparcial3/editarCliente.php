<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Editar Cliente</title>
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
		$id_cliente = $_GET['id'];

		$sql = "SELECT * FROM clientes WHERE id=$id_cliente LIMIT 1";
		$cliente = $conexion->query($sql)->fetch_object();
	 ?>
	 <div class="container">
		<div class="row well">
			<div class="col-md-6 col-md-offset-3">
				<form action="update.php" method="POST">
					<input type="hidden" name="id" value="<?php echo $cliente->id;  ?>">
					<div class="form-group">
						<label for="Nombre">Nombre:</label>
						<input type="text" name="nombre" class="form-control" value="<?php echo $cliente->nombre; ?>">
					</div>
					<div class="form-group">
						<label for="">Edad</label>
						<input type="number" name="edad" class="form-control" value="<?php echo $cliente->edad; ?>">
					</div>
					<div class="form-group">
						<label for="Telefono">Telefono</label>
						<input type="text" name="telefono" class="form-control" value="<?php echo $cliente->telefono; ?>">
					</div>
					<div class="form-group">
						<label for="Sexo">Sexo</label>
						<select name="sexo" id="" class="form-control">
							<?php 
								if($alumno->sexo==0){ ?>
									<option value="0" selected>Femenino</option>
									<option value="1">Masculino</option>
							<?php
								} else {
							 ?>
								<option value="0">Femenino</option>
								<option value="1" selected>Masculino</option>
							<?php } ?>
						</select>
					</div>
					<div class="form-group text-center">
						<input type="submit" class="btn btn-primary" value="Guardar">
					</div>
				</form>
			</div>
		</div>
	</div>
</body>
</html>