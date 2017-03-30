<!DOCTYPE html>

<html lang="en">
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
						 <span class="sr-only">Hci</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span>
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
						<a href="#panel-354701" data-toggle="tab">Registro</a>
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
							Registro de productos
						</p>
					</div>
				</div>
			</div>

    
			<form role="form" name="nuevo_producto" method="POST" action="guarda_producto.php">
				<div class="form-group">
					<label for="producto">
						Producto
					</label>
					<input type="text" class="form-control" name="producto">
				</div>
				<div class="form-group">
					 
					<label for="descripcion">
						Descripcion
					</label>
					<input type="text" class="form-control" name="descripcion">
				</div>
				<div class="form-group">
					<label for="existencia">
						Existencia
					</label>
					<input type="text" class="form-control" name="existencia">
				</div>
				<div class="form-group">
					 
					<label for="precio_compra">
						Precio Compra
					</label>
					<input type="text" class="form-control" name="precio_compra">
				</div>
				<div class="form-group">
					 
					<label for="precio_venta">
						Precio Venta
					</label>
					<input type="text" class="form-control" name="precio_venta">
				</div>
			
				<input type="submit" name="guardar" value="Registrar" />
			</form>
		</div>
	</div>
</div>

    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/scripts.js"></script>
  </body>
</html>