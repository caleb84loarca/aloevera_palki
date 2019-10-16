<?php 
$autores = AutorData::getAll();
?>

<div class="row">
	<div class="col-md-12">
	<CENTER><h1>INGRESO PROVEEDOR</h1></CENTER>
    <img src="image/Palki.png" width="350" height="50">
	<br>
    <br>
      <br>


    <form class="form-horizontal" method="post" id="addlibro" action="index.php?view=addlibro" role="form">
<div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Primer Nombre*</label>
    <div class="col-md-6">
      <input type="text" name="nombre" required class="form-control" id="nombre" placeholder="Primer Nombre Proveedor">
    </div>
  </div>

     <form class="form-horizontal" method="post" id="addlibro" action="index.php?view=addlibro" role="form">
<div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Segundo Nombre*</label>
    <div class="col-md-6">
      <input type="text" name="nombre" required class="form-control" id="nombre" placeholder="Segundo Nombre Proveedor">
    </div>
  </div>

      <form class="form-horizontal" method="post" id="addlibro" action="index.php?view=addlibro" role="form">
<div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Primer Apellido*</label>
    <div class="col-md-6">
      <input type="text" name="apellido" required class="form-control" id="apellido" placeholder="Primer Apellido Proveedor">
    </div>
  </div>

        <form class="form-horizontal" method="post" id="addlibro" action="index.php?view=addlibro" role="form">
<div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Segundo Apellido*</label>
    <div class="col-md-6">
      <input type="text" name="apellido" required class="form-control" id="apellido" placeholder="Segundo Apellido Proveedor">
    </div>
  </div>


      <form class="form-horizontal" method="post" id="addlibro" action="index.php?view=addlibro" role="form">
<div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Direccion*</label>
    <div class="col-md-6">
      <input type="text" name="direccion" required class="form-control" id="direccion" placeholder="Direccion del Proveedor">
    </div>
  </div>

<form class="form-horizontal" method="post" id="addlibro" action="index.php?view=addlibro" role="form">
    <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Telefono*</label>
    <div class="col-md-6">
      <input type="text" name="telefono" required class="form-control" id="telefono" placeholder="Telefono del Proveedor">
    </div>
  </div>

  <div class="col-md-6">
          <label for="inputEmail1" class="col-lg-2 control-label">Departamento*</label>       
          <select name="autor_id" required class="form-control">
          <option value="">-- NINGUNO --</option>
          <?php foreach($autores as $autor):?>
          <option value="<?php echo $autor->id;?>"><?php echo $autor->nombre." ".$autor->apellido;?></option>
          <?php endforeach;?>
          </select>

          <label for="inputEmail1" class="col-lg-2 control-label">Municipio*</label>       
          <select name="autor_id" required class="form-control">
          <option value="">-- NINGUNO --</option>
          <?php foreach($autores as $autor):?>
          <option value="<?php echo $autor->id;?>"><?php echo $autor->nombre." ".$autor->apellido;?></option>
          <?php endforeach;?>
          </select>

          <label for="inputEmail1" class="col-lg-2 control-label">Categoria Precio*</label>       
          <select name="autor_id" required class="form-control">
          <option value="">-- NINGUNO --</option>
          <?php foreach($autores as $autor):?>
          <option value="<?php echo $autor->id;?>"><?php echo $autor->nombre." ".$autor->apellido;?></option>
          <?php endforeach;?>
          </select>
    </div>
     <br> 
  <br> 
<input type='hidden' name='insertar' value='insertar'>
 
 </div>
  </div>
   
   


<!-- boton y alerta-->

  <div class="form-group">
    <div class="col-lg-offset-2 col-lg-10">
      <button type="submit" class="btn btn-primary">Guardar Proveedor</button>   
    </div>
     </div>
 </div>



    <div>   
        <p class="alert alert-info">* Campos obligatorios</p>        
    </div>     

  </div>
</form>
	</div>
</div>