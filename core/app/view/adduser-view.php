<?php

if(count($_POST)>0){
	
	$usuario = new UserData();
	$usuario->nombre1 = $_POST["nombre1"];
	$usuario->nombre2 = $_POST["nombre2"];
	$usuario->apellido1 = $_POST["apellido1"];
	$usuario->apellido2 = $_POST["apellido2"];
	$usuario->username = $_POST["username"];
	$usuario->email = $_POST["email"];	
	$usuario->contrasena = $_POST["contrasena"];
	$usuario->idtipouser = $_POST["opcion"];
	$usuario->fechacreacion = $_POST["sd"];
		
	$usuario->add();
	
print "<script>window.location='index.php?view=usuarios';</script>";


}

?>



