<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Clientes</title>
</head>
<body>
	<<?php 
	$server = "localhost";
    $username = "root";
    $pass = "";
    $db= "panini clientes";
	 
	 $conexion = new mysqli ($server, $username, $pass, $db);
	 if($conexion->connect_error){
	 	die("Error en la conexión" . $conexion->connect_error);
	 }

	 echo "Conexión establecida";

	 $sql = "SELECT * FROM clientes";

	 $data = $conexion-> query($sql);

	 while ($obj = $data-> fetch_object()){?>

	 	<table border="1">
	 		
	 	<tr>
	 		<td><?php echo $obj->nombre; ?></td>
	 		<td><?php echo $obj->edad; ?></td>
	 		<td><?php echo $obj->telefono; ?></td>
	 		<td><?php echo $obj->sexo; ?></td>
	 	</tr>
	 	</table>

	  <?php } 

      $data-> close();
      $conexion-> close();

	  ?>

</body>
</html>