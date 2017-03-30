
<?php
	
	require('conection/conexion.php');
	
	$id=$_GET['id'];
	$query="SELECT producto, descripcion, existencia, precio_compra, precio_venta FROM productos WHERE id='$id' ";
	
	$resultado=$mysqli->query($query);
	
	$row=$resultado->fetch_assoc();

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
						<a href="index.php" data-toggle="tab">Home</a>
					</li>
					<li class="active">
						<a href="" data-toggle="tab">Actualizacion de producto</a>
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
							Actualiza tu producto...
						</p>
					</div>
				</div>
			</div>
		
		<form name="modificar_usuario" method="POST" action="mod_producto.php">
			
			<table width="50%" class="table table-striped table-condensed">
				<tr>
					<input type="hidden" name="id_producto" value="<?php echo $id; ?>">
					<td width="20"><b>Producto</b></td>
					<td width="30"><input type="text" name="producto"  class="form-control"  size="25" value="<?php echo $row['producto']; ?>" /></td>
				</tr>	
				<tr>
					<td><b>Descripcion</b></td>
					<td><input type="text" name="descripcion" class="form-control"  size="25" value="<?php echo $row['descripcion']; ?>" /></td>
				</tr>
				<tr>
					<td><b>Existencia</b></td>
					<td><input type="text" name="existencia" class="form-control"  size="25" value="<?php echo $row['existencia']; ?>" /></td>
				</tr>
				<tr>
					<td><b>Precio compra</b></td>
					<td><input type="text" name="precio_compra" class="form-control"  size="25" value="<?php echo $row['precio_compra']; ?>" /></td>
				</tr>
				<tr>
					<td><b>Precio Venta</b></td>
					<td><input type="text" name="precio_venta" class="form-control"  size="25" value="<?php echo $row['precio_venta']; ?>" /></td>
				</tr>
				<tr>
					<td colspan="2"><center><input type="submit" name="Guardar" value="Guardar" /></center></td>
				</tr>
			</table>
		</form>
	</body>
</html>	
