<?php


if(count($_POST)>0){
	$usuario = UserData::getById($_POST["iduser"]);
	$usuario->nombre1 = $_POST["nombres1"];
	$usuario->nombre2 = $_POST["nombres2"];
	$usuario->apellido1 = $_POST["apellidos1"];
	$usuario->apellido2 = $_POST["apellidos2"];
	$usuario->username = $_POST["usernames"];
	$usuario->contrasena = $_POST["contrasenas"];
	$usuario->idtipouser = $_POST["tipouser_id"];
	
	$usuario->update();


print "<script>window.location='index.php?view=usuarios';</script>";


}


?>