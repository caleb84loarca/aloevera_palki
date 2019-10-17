<?php 
$autores = AutorData::getAll();
?>

<div class="row">
	<div class="col-md-12">
	<CENTER><h1>INGRESO USUARIOS</h1></CENTER>
    <img src="image/Palki.png" width="350" height="50">
	<br>
    <br>
      <br>


    <form class="form-horizontal" method="post" id="addlibro" action="index.php?view=addlibro" role="form">
<div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Primer Nombre*</label>
    <div class="col-md-6">
      <input type="text" name="nombre" required class="form-control" id="nombre" placeholder="Primer Nombre Usuario">
    </div>
  </div>

     <form class="form-horizontal" method="post" id="addlibro" action="index.php?view=addlibro" role="form">
<div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Segundo Nombre*</label>
    <div class="col-md-6">
      <input type="text" name="nombre" required class="form-control" id="nombre" placeholder="Segundo Nombre Usuario">
    </div>
  </div>

      <form class="form-horizontal" method="post" id="addlibro" action="index.php?view=addlibro" role="form">
<div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Primer Apellido*</label>
    <div class="col-md-6">
      <input type="text" name="apellido" required class="form-control" id="apellido" placeholder="Primer Apellido Usuario">
    </div>
  </div>

        <form class="form-horizontal" method="post" id="addlibro" action="index.php?view=addlibro" role="form">
<div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Segundo Apellido*</label>
    <div class="col-md-6">
      <input type="text" name="apellido" required class="form-control" id="apellido" placeholder="Segundo Apellido Usuario">
    </div>
  </div>


      <form class="form-horizontal" method="post" id="addlibro" action="index.php?view=addlibro" role="form">
<div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label"> Nombre Usuario*</label>
    <div class="col-md-6">
      <input type="text" name="usuario" required class="form-control" id="usuario" placeholder="Usuario">
    </div>
  </div>


<form class="form-horizontal" method="post" id="addlibro" action="index.php?view=addlibro" role="form">
<div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label"> E-mail*</label>
    <div class="col-md-6">
      <input type="text" name="email" required class="form-control" id="email" placeholder="E-mail">
    </div>
  </div>


<form class="form-horizontal" method="post" id="addlibro" action="index.php?view=addlibro" role="form">
    <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Contraseña*</label>
    <div class="col-md-6">
      <input type="password" name="password" required class="form-control" id="contraseña" placeholder="Password">
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
      <button type="submit" class="btn btn-primary">Guardar Usuario</button>   
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