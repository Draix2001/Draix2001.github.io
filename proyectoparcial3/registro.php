<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Registro de clientes</title>
	<link rel="stylesheet" href="css/bootstrap.css">
</head>
<body>
	<div class="container">
		<div class="row well">
			<div class="col-md-6 col-md-offset-3">
				<form action="guardar.php" method="POST">
					<div class="form-group">
						<label for="Nombre">Nombre:</label>
						<input type="text" name="nombre" class="form-control">
					</div>
					<div class="form-group">
						<label for="">Edad</label>
						<input type="number" name="edad" class="form-control">
					</div>
					<div class="form-group">
						<label for="Telefono">Telefono</label>
						<input type="text" name="telefono" class="form-control">
					</div>
					<div class="form-group">
						<label for="Sexo">Sexo</label>
						<select name="sexo" id="" class="form-control">
							<option value="0">Femenino</option>
							<option value="1">Masculino</option>
						</select>
					</div>
					<div class="form-group text-center">
						<input type="submit" class="btn btn-primary" value="Registrar">
					</div>

					<div class="row"> 
								<div class="col-xs-12"> <a class="btn btn-header btn-block" href="PaniniComics.php"> <i class="fa fa-sign-in fa-fw"></i> <span>Volver</span> </a> </div>
								
								<div class="col-xs-12"> <a class="btn btn-header btn-block" href="ConsultarClientes.php"> <i class="fa fa-sign-in fa-fw"></i> <span>Consultar Clientes</span> </a> </div>
								</div>
							
							</div>

							</div>

				</form>
			</div>
		</div>
	</div>
</body>
</html>