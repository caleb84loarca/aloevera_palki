<?php


if(count($_POST)>0){
	$proveedor = ProveeData::getById($_POST["idproveedor"]);
	$proveedor->nombre1 = $_POST["nombres1"];
	$proveedor->nombre2 = $_POST["nombres2"];
	$proveedor->apellido1 = $_POST["apellidos1"];
	$proveedor->apellido2 = $_POST["apellidos2"];
	$proveedor->nit = $_POST["nit"];
	$proveedor->dpi = $_POST["dpi"];
	$proveedor->direccion = $_POST["direccion"];
	$proveedor->iddepartamento = $_POST["direccion"];
	$proveedor->idmunicipio = $_POST["direccion"];
	
	//$proveedor->idtipouser = $_POST["idcatprecio"];
	
	$proveedor->update();


print "<script>window.location='index.php?view=proveedores';</script>";


}


?>