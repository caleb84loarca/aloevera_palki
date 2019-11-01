<?php 

$proveedor = ProveeData::getById($_GET["id"]);
$tipouser = tipoUserData::getAll();

?>
<div class="row">
	<div class="col-md-12">
	<h1>Editar Proveedor</h1>
	<br>
		<form class="form-horizontal" method="post" id="idproveedor" action="index.php?view=updateprovee" role="form">

    <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">ID PROVEEDOR*</label>
    <div class="col-md-6">
    <fieldset disabled>
      <input type="tex" name="idprove"  value="<?php echo $proveedor->idprovee;?>" class="form-control" id="idprovee" placeholder="ID PROVEEDOR">
    </div>
  </div>
  

   <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Primer Nombre*</label>
    <div class="col-md-6">
      <input type="text" name="nombres1"  required value="<?php echo $proveedor->nombre1;?>" class="form-control" id="nombres1" placeholder="Primer Nombre">
    </div>
  </div>
  
  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Segundo Nombre*</label>
    <div class="col-md-6">
      <input type="text" name="nombres2"  required value="<?php echo $proveedor->nombre2;?>" class="form-control" id="nombres2" placeholder="Segundo Nombre">
    </div>
  </div>

  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Primer Apellido*</label>
    <div class="col-md-6">
      <input type="text" name="apellidos1"  required value="<?php echo $proveedor->apellido1;?>" class="form-control" id="apellidos1" placeholder="Primer Nombre">
    </div>
  </div>

  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Segundo Apellido*</label>
    <div class="col-md-6">
      <input type="text" name="apellidos2"  required value="<?php echo $proveedor->apellido2;?>" class="form-control" id="apellidos2" placeholder="Segundo Nombre">
    </div>
  </div>


  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">N I T*</label>
    <div class="col-md-6">
      <input type="text" name="nit" value="<?php echo $proveedor->nit;?>" class="form-control" id="nit" placeholder="Numero de Identificaion Tributaria">
    </div>
  </div>
  
 

<div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">D P I*</label>
    <div class="col-md-6">
      <input type="text" name="dpi" value="<?php echo $proveedor->dpi;?>" class="form-control" id="dpi" placeholder="Documento Personal de Identificacion">
    </div>
  </div>

  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">DIRECCION*</label>
    <div class="col-md-6">
      <input type="text" name="direccion" value="<?php echo $proveedor->direccion;?>" class="form-control" id="direccion" placeholder="Direccion">
    </div>
  </div>


  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">DEPARTAMENTO*</label>
    <div class="col-md-6">
      <input type="text" name="iddepto" value="<?php echo $proveedor->iddepartamento;?>" class="form-control" id="iddepto" placeholder="DEPARTAMENTO">
    </div>
  </div>

  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">MUNICIPIO*</label>
    <div class="col-md-6">
      <input type="text" name="idmuni" value="<?php echo $proveedor->idmunicipio;?>" class="form-control" id="idmuni" placeholder="Municipio">
    </div>
  </div>

  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">TELEFONO PINCIPAL*</label>
    <div class="col-md-6">
      <input type="text" name="tel1" value="<?php echo $proveedor->telefono1;?>" class="form-control" id="tel1" placeholder="Telefono 1">
    </div>
  </div>

  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">TELEFONO OTRO*</label>
    <div class="col-md-6">
      <input type="text" name="tel2" value="<?php echo $proveedor->telefono1;?>" class="form-control" id="tel2" placeholder="Telefono 1">
    </div>
  </div>


  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">CATEGORIA DE PRECIO*</label>
    <div class="col-md-6">
      <input type="text" name="idcatprecio" value="<?php echo $proveedor->idcatprecio;?>" class="form-control" id="idcatprecio" placeholder="Telefono 1">
    </div>
  </div>


 <!-- <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Tipo de Usuario*</label>
    <div class="col-md-6">
    <select name="tipouser_id"  class="form-control">
    <option value="">-- NINGUNO --</option>
    <?php foreach($tipouser as $tipousers):?>
      <option value="<?php echo $tipousers->idtipouser;?>"><?php echo $tipousers->idtipouser." - ".$tipousers->usuario;?></option>
    <?php endforeach;?>
      </select>    </div>
  </div>   -->
    

  <p class="alert alert-info">* Campos obligatorios</p>

  <div class="form-group">
    <div class="col-lg-offset-2 col-lg-10">
    <input type="hidden" name="idproveedor" value="<?php echo $proveedor->idprovee;?>">
      <button type="submit" class="btn btn-primary">Actualizar Usuario</button>
    </div>
  </div>
</form>
	</div>
</div>