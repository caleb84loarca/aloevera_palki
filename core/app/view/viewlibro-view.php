<?php
$usuario = UserData::getById($_GET["id"]);
$autor =  $usuario->getAutor();
if($usuario!=null):
?>
<div class="row">
	<div class="col-md-8">
	<h1><?php echo $usuario->nombre ?> <small>Consultar Libro</small></h1>
	<br><br>
		<form class="form-horizontal" method="post" id="vistalibro" enctype="multipart/form-data" action="index.php?view=vista" role="form">


   <div class="form-group">
    <label for="inputEmail1" class="col-lg-3 control-label">Libro</label>
    <div class="col-md-6">
	<fieldset disabled>
      <input type="text" name="nombre" class="form-control" id="nombre" value="<?php echo $usuario->nombre; ?>" placeholder="Libro">
    </div>
  </div> 
  
  <div class="form-group">
    <label for="inputEmail1" class="col-lg-3 control-label">Autor</label>
    <div class="col-md-6">
	<fieldset disabled>
      <input type="text" name="autor" value="<?php echo $autor->nombre." ".$autor->apellido;?>" class="form-control" id="name" placeholder="Nombre">
    </div>
  </div>
  
  <div class="form-group">
    <label for="inputEmail1" class="col-lg-3 control-label">Fecha Edicion</label>
    <div class="col-md-6">
	<fieldset disabled>
      <input type="text" name="fecha" value="<?php echo $usuario->anio_edicion;?>" class="form-control" id="fecha" placeholder="Fecha Registrada">
    </div>
  </div>
  
 
</form>

<br><br><br><br><br><br><br><br><br>
	</div>
</div>
<?php endif; ?>