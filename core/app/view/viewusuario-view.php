<?php
$usuario = UserData::getById($_GET["id"]);
$tipouser = tipoUserData::getAll();


if($usuario!=null):
?>
<div class="row">
	<div class="col-md-8">
	<h1><?php echo $usuario->nombre1." ".$usuario->apellido1 ?> <small>Consultar Usuarios</small></h1>
	<br><br>
		<form class="form-horizontal" method="post" id="vistausuario" enctype="multipart/form-data" action="index.php?view=vista" role="form">


   <div class="form-group">
    <label for="inputEmail1" class="col-lg-3 control-label">NOMBRES </label>
    <div class="col-md-6">
	<fieldset disabled>
      <input type="text" name="nombre1" class="form-control" id="nombre1" value="<?php echo $usuario->nombre1." ".$usuario->nombre2; ?>" placeholder="nombre1">
    </div>
  </div> 
  

  <div class="form-group">
    <label for="inputEmail1" class="col-lg-3 control-label">APELLIDOS</label>
    <div class="col-md-6">
	<fieldset disabled>
      <input type="text" name="apellido" class="form-control" id="apellido" value="<?php echo $usuario->apellido1." ".$usuario->apellido2; ?>" placeholder="apellido">
    </div>
  </div> 
  
  <div class="form-group">
    <label for="inputEmail1" class="col-lg-3 control-label">NOMBRE DE USUARIO</label>
    <div class="col-md-6">
	<fieldset disabled>
      <input type="text" name="username" class="form-control" id="username" value="<?php echo $usuario->username; ?>" placeholder="username">
    </div>
  </div> 
  
  <div class="form-group">
    <label for="inputEmail1" class="col-lg-3 control-label">CORREO ELECTRONICO</label>
    <div class="col-md-6">
	<fieldset disabled>
      <input type="text" name="email" class="form-control" id="email" value="<?php echo $usuario->email; ?>" placeholder="em@il">
    </div>
  </div> 
  

 <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">TIPO USUARIO*</label>
    <div class="col-md-6">
            <?php foreach($tipouser as $tipousers):?>
            <option value="<?php echo $tipousers->idtipouser;?>"><?php echo $tipousers->idtipouser." - ".$tipousers->usuario;?></option>
    <?php endforeach;?>
       </div>
  </div>   
    
  
  
 
</form>

<br><br><br><br><br><br><br><br><br>
	</div>
</div>
<?php endif; ?>