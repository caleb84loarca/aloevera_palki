<?php


if(count($_POST)>0){
	$proveedor = ProveeData::getById($_POST["idproveedor"]);
	$proveedor->nombre1 = $_POST["nombres1"];
	$proveedor->nombre2 = $_POST["nombres2"];
	$proveedor->apellido1 = $_POST["apellidos1"];
	$proveedor->apellido2 = $_POST["apellidos2"];
	$proveedor->username = $_POST["nit"];
	$proveedor->contrasena = $_POST["dpi"];
	$proveedor->contrasena = $_POST["direccion"];
	$proveedor->idtipouser = $_POST["tipouser_id"];
	
	$proveedor->update();


print "<script>window.location='index.php?view=proveedores';</script>";


}


?>