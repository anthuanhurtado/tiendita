<!DOCTYPE html>
<?php
	require('conection/conexion.php');
	$visible = 1;
	$query="SELECT id, producto, descripcion, existencia, precio_compra, precio_venta FROM productos WHERE visible='$visible' ";
	
	$resultado=$mysqli->query($query);
	
?>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Acme Store</title>

    <meta name="description" content="Source code generated using layoutit.com">
    <meta name="author" content="LayoutIt!">

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

  </head>
  <body>

    <div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
			<nav class="navbar navbar-default navbar-inverse" role="navigation">
				<div class="navbar-header">
					 
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
						 <span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span>
					</button> <a class="navbar-brand" href="#">Home</a>
				</div>
				
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					<ul class="nav navbar-nav">
						<li class="active">
							<a href="index.php">Productos</a>
						</li>

						<li class="active">
							<a href="Registro.php">Nuevo</a>
						</li>
						<li class="active">
							<a href="restauracion_producto.php">Restauración</a>
						</li>
					</ul>
					<form class="navbar-form navbar-left" role="search">
						<div class="form-group">
							<input type="text" class="form-control">
						</div> 
						<button type="submit" class="btn btn-default">
							Busqueda
						</button>
					</form>
					<ul class="nav navbar-nav navbar-right">
						<li>
							<a href="#">Acerca de </a>
						</li>
					</ul>
				</div>
				
			</nav>
			<div class="tabbable" id="tabs-963848">
				<ul class="nav nav-tabs">
					<li>
						<a href="#panel-53749" data-toggle="tab">Home</a>
					</li>
					<li class="active">
						<a href="#panel-354701" data-toggle="tab">Productos</a>
					</li>
				</ul>
				<div class="tab-content">
					<div class="tab-pane" id="panel-53749">
						<p>
							Home
						</p>
					</div>
					<div class="tab-pane active" id="panel-354701">
						<p>
							Descripción de productos
						</p>
					</div>
				</div>
			</div>
			<table class="table table-striped table-condensed">
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<thead>
				<tr>
					
					<td><b>Producto</b></td>
					<td><b>Descripcion</b></td>
					<td><b>Existencia</b></td>
					<td><b>Precio compra</b></td>
					
				</tr>
				<tbody>
					<?php while($row=$resultado->fetch_assoc()){ ?>
					<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
						<tr>
							
							<td>
								<?php echo $row['producto'];?>
							</td>
							<td>
							  <?php echo $row['descripcion'];?>
							</td>
							<td>
								<?php echo $row['existencia'];?>
							</td>
							<td>
							  <?php echo $row['precio_compra'];?>
							</td>
							
							<td>
								<a href="modificar.php?id=<?php echo $row['id'];?>"><img src="imagenes/modificacion.png"></a>
							</td>
							<td>
								<a href="eliminar.php?id=<?php echo $row['id'];?>"><img src="imagenes/eliminar.png"></a>
							</td>
						</tr>
					<?php } ?>
				</tbody>
			</table>
		</div>
	</div>
	

    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/scripts.js"></script>
  </body>
</html>