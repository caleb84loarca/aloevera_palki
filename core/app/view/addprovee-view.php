<?php

if(count($_POST)>0){
	
	$provee = new ProveeData();
	$provee->nombre1 = $_POST["nombre1"];
	$provee->nombre2 = $_POST["nombre2"];
	$provee->apellido1 = $_POST["apellido1"];
	$provee->apellido2 = $_POST["apellido2"];
	$provee->nit = $_POST["nit"];	
    $provee->dpi = $_POST["dpi"];
    $provee->direccion = $_POST["direccion"];
    $provee->iddepartamento = $_POST["depto_id"];
	$provee->idmunicipio = $_POST["muni_id"];
    $provee->telefono1 = $_POST["telefono1"];
    $provee->telefono2 = $_POST["telefono2"];
    $provee->idcatprecio = $_POST["catprecio_id"];

	$provee->add();
	
print "<script>window.location='index.php?view=proveedores';</script>";


}

?>



