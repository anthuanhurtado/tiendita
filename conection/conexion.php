<?php
	  
	
	$mysqli=new mysqli("if0ck476y7axojpg.cbetxkdyhwsb.us-east-1.rds.amazonaws.com","uca3dxim5bydkjkx","jqqn4wok0sr54b2h","ln83qpa6cvznkb4f"); //servidor, usuario de base de datos, contraseña del usuario, nombre de base de datos
	
	if(mysqli_connect_errno()){
		echo 'Conexion Fallida : ', mysqli_connect_error();
		exit();
	}
?>