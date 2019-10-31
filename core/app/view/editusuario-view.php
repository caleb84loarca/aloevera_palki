<?php 

$usuario = UserData::getById($_GET["id"]);


?>
<div class="row">
	<div class="col-md-12">
	<h1>Editar Usuario</h1>
	<br>
		<form class="form-horizontal" method="post" id="editusuario" action="index.php?view=updateusuario" role="form">

    <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">IDUSUARIO*</label>
    <div class="col-md-6">
      <input type="tex" name="iduser" disabled="disable" value="<?php echo $usuario->idusuario;?>" class="form-control" id="idusuarios" placeholder="IDUSUARIO">
    </div>
  </div>
  

   <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Primer Nombre*</label>
    <div class="col-md-6">
      <input type="text" name="nombres1"  required value="<?php echo $usuario->nombre1;?>" class="form-control" id="nombres1" placeholder="Primer Nombre">
    </div>
  </div>
  
  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Segundo Nombre*</label>
    <div class="col-md-6">
      <input type="text" name="nombres2"  required value="<?php echo $usuario->nombre2;?>" class="form-control" id="nombres2" placeholder="Segundo Nombre">
    </div>
  </div>

  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Primer Apellido*</label>
    <div class="col-md-6">
      <input type="text" name="apellidos1"  required value="<?php echo $usuario->apellido1;?>" class="form-control" id="apellidos1" placeholder="Primer Nombre">
    </div>
  </div>

  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Segundo Apellido*</label>
    <div class="col-md-6">
      <input type="text" name="apellidos2"  required value="<?php echo $usuario->apellido2;?>" class="form-control" id="apellidos2" placeholder="Segundo Nombre">
    </div>
  </div>


  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">UserName*</label>
    <div class="col-md-6">
      <input type="text" name="usernames" value="<?php echo $usuario->username;?>" class="form-control" id="usernames" placeholder="Username">
    </div>
  </div>
  
 

<div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Contraseña*</label>
    <div class="col-md-6">
      <input type="text" name="contrasenas" value="<?php echo $usuario->contrasena;?>" class="form-control" id="contrasenas" placeholder="Contrasena">
    </div>
  </div>
    

  <p class="alert alert-info">* Campos obligatorios</p>

  <div class="form-group">
    <div class="col-lg-offset-2 col-lg-10">
    <input type="hidden" name="iduser" value="<?php echo $usuario->idusuario;?>">
      <button type="submit" class="btn btn-primary">Actualizar Usuario</button>
    </div>
  </div>
</form>
	</div>
</div>