<?php 
	
	require('conection/conexion.php');

	$id_producto=$_GET['id'];
	$visible= 1;
	
	$query="UPDATE productos SET  visible='$visible'  WHERE id='$id_producto'";
	
	$resultado=$mysqli->query($query);

?>

<html>
	<head>
		<title>Delete</title>
	</head>
	
	<body>
		<center>
			
			<?php 
				if($resultado>0){
				?>
				
					<?php 	}else{ ?>
				
				<h1>Error al restaurar producto</h1>
				
			<?php	} ?>
			
			<p></p>	
			<h1>Restauracion  exitosa</h1>
			
			<a href="index.php">Regresar</a>
			
		</center>
	</body>
</html>