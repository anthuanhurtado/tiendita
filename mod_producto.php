<?php 
	
	require('conection/conexion.php');

	$id_producto=$_POST['id_producto'];
	$producto=$_POST['producto'];
	$descripcion= $_POST['descripcion'];
	$existencia=$_POST['existencia'];
	$precio_compra=$_POST['precio_compra'];
	$precio_venta=$_POST['precio_venta'];
	
	$query="UPDATE productos SET producto='$producto', descripcion='$descripcion', existencia='$existencia', precio_compra='$precio_compra' , precio_venta='$precio_venta'  WHERE id='$id_producto'";
	
	$resultado=$mysqli->query($query);

?>

<html>
	<head>
		<title>Modificar producto</title>
	</head>
	
	<body>
		<center>
			
			<?php 
				if($resultado>0){
				?>
				
					<?php 	}else{ ?>
				
				<h1>Error al Actualizar producto</h1>
				
			<?php	} ?>
			
			<p></p>	
			<h1>Modificación exitosa</h1>
			<a href="index.php">Regresar</a>
			
		</center>
	</body>
</html>
				
				