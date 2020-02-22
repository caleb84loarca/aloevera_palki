<?php

if(count($_POST)>0){
	
	$vale = new valeData();
	$vale->numvale = $_POST["vale_id"];
	$vale->fechacompra = $_POST["sd"];
	$vale->pedido = $_POST["pedido"];
	$vale->idprovee = $_POST["provee_id"];
	$vale->idregion = $_POST["username"];
	$vale->iddetallevale = $_POST["email"];	
	$vale->idrechazo = $_POST["contrasena"];
	$vale->idusuario = $_POST["opcion"];
	$vale->idplanta = $_POST["medida_id"];
	$vale->iddepartamento = $_POST["depto_id"];
    $vale->idmunicipio = $_POST["muni_id"];
    $vale->observacion = $_POST["observacion"];
		
	$vale->add();
	
print "<script>window.location='index.php?view=vales';</script>";


}

?>



