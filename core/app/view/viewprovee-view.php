<?php
$proveedor = ProveeData::getById($_GET["id"]);

if($proveedor!=null):
?>
<div class="row">
	<div class="col-md-8">
	<h1><?php echo $proveedor->nombre1." ".$proveedor->apellido1 ?> <small>Consultar Proveedores</small></h1>
	<br><br>
		<form class="form-horizontal" method="post" id="vistaprovee" enctype="multipart/form-data" action="index.php?view=vista" role="form">


   <div class="form-group">
    <label for="inputEmail1" class="col-lg-3 control-label">NOMBRES </label>
    <div class="col-md-6">
	<fieldset disabled>
      <input type="text" name="nombre1" class="form-control" id="nombre1" value="<?php echo $proveedor->nombre1." ".$proveedor->nombre2; ?>" placeholder="nombre1">
    </div>
  </div> 
  

  <div class="form-group">
    <label for="inputEmail1" class="col-lg-3 control-label">APELLIDOS</label>
    <div class="col-md-6">
	<fieldset disabled>
      <input type="text" name="apellido" class="form-control" id="apellido" value="<?php echo $proveedor->apellido1." ".$proveedor->apellido2; ?>" placeholder="apellido">
    </div>
  </div> 
  
  <div class="form-group">
    <label for="inputEmail1" class="col-lg-3 control-label">DIRECCION</label>
    <div class="col-md-6">
	<fieldset disabled>
      <input type="text" name="direccion" class="form-control" id="direccion" value="<?php echo $proveedor->direccion; ?>" placeholder="direccion">
    </div>
  </div> 
  



  <div class="form-group">
    <label for="inputEmail1" class="col-lg-3 control-label">TELEFONOS</label>
    <div class="col-md-6">
	<fieldset disabled>
      <input type="text" name="telefonos" value="<?php echo $proveedor->telefono1." / ".$proveedor->telefono2;?>" class="form-control" id="name" placeholder="telefonos">
    </div>
  </div>
  
  
 
</form>

<br><br><br><br><br><br><br><br><br>
	</div>
</div>
<?php endif; ?>