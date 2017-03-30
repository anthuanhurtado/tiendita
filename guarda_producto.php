<?php 
	
	require('conection/conexion.php');
	
	$producto=$_POST['producto'];
	$descripcion= $_POST['descripcion'];
	$existencia=$_POST['existencia'];
	$precio_compra=$_POST['precio_compra'];
	$precio_venta=$_POST['precio_venta'];
	$visible = 1;
	
	$query="INSERT INTO productos (id,  producto, descripcion, existencia, precio_compra, precio_venta, visible) VALUES ('','$producto','$descripcion','$existencia','$precio_compra','$precio_venta', '$visible')";
	
	$resultado=$mysqli->query($query);
	
?>

<html>
	<head>
		<title>Guardar producto</title>
	</head>
	<body>
		<center>	
			
			<?php if($resultado>0){ ?>
				<h1>Producto Guardado</h1>
				<?php }else{ ?>
				<h1>Error al Guardar Usuario</h1>		
			<?php	} ?>		
			
			<p></p>	
			
			<a href="index.php">Regresar</a>
			
		</center>
	</body>
	</html>	