<?php 
$proveedor = ProveeData::getAll();
$depto = DeptoData::getAll();
$muni = MuniData::getAll();
$catprecio = catPrecioData::getAll();
?>

<div class="row">
	<div class="col-md-12">
	<CENTER><h1>INGRESO PROVEEDOR</h1></CENTER>
    <img src="image/Palki.png" width="350" height="50">
	<br>
    <br>
      <br>


    <form class="form-horizontal" method="post" id="addprovee" action="index.php?view=addprovee" role="form">
<div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Primer Nombre*</label>
    <div class="col-md-6">
      <input type="text" name="nombre1" required class="form-control" id="nombre1" placeholder="Primer Nombre Proveedor">
    </div>
  </div>

    
<div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Segundo Nombre*</label>
    <div class="col-md-6">
      <input type="text" name="nombre2" required class="form-control" id="nombre2" placeholder="Segundo Nombre Proveedor">
    </div>
  </div>

     
<div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Primer Apellido*</label>
    <div class="col-md-6">
      <input type="text" name="apellido1" required class="form-control" id="apellido1" placeholder="Primer Apellido Proveedor">
    </div>
  </div>

       
<div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Segundo Apellido*</label>
    <div class="col-md-6">
      <input type="text" name="apellido2" required class="form-control" id="apellido2" placeholder="Segundo Apellido Proveedor">
    </div>
  </div>


     
<div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Direccion*</label>
    <div class="col-md-6">
      <input type="text" name="direccion" required class="form-control" id="direccion" placeholder="Direccion del Proveedor">
    </div>
  </div>


  
<div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">N I T*</label>
    <div class="col-md-6">
      <input type="text" name="nit" required class="form-control" id="nit" placeholder="Numero de Identificacion Tributaria">
    </div>
  </div>

  
<div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">D P I*</label>
    <div class="col-md-6">
      <input type="text" name="dpi" required class="form-control" id="dpi" placeholder="Documento Personal de Identificacion">
    </div>
  </div>



    <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Telefono Principal*</label>
    <div class="col-md-6">
      <input type="text" name="telefono1" required class="form-control" id="telefono1" placeholder="Telefono del Proveedor">
    </div>
  </div>

  
    <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Telefono Otros*</label>
    <div class="col-md-6">
      <input type="text" name="telefono2"  class="form-control" id="telefono2" placeholder="Telefono del Proveedor">
    </div>
  </div>

  <div class="col-md-6">
          <label for="inputEmail1" class="col-lg-2 control-label">Departamento*</label>       
          <select name="depto_id" required class="form-control">
          <option value="">-- NINGUNO --</option>
          <?php foreach($depto as $deptos):?>
          <option value="<?php echo $deptos->iddepartamento;?>"><?php echo $deptos->departamento." - ".$deptos->iddepartamento;?></option>
          <?php endforeach;?>
          </select>

          <label for="inputEmail1" class="col-lg-2 control-label">Municipio*</label>       
          <select name="muni_id" required class="form-control">
          <option value="">-- NINGUNO --</option>
          <?php foreach($muni as $munis):?>
          <option value="<?php echo $munis->idmunicipio;?>"><?php echo $munis->municipio." ".$munis->idmunicipio;?></option>
          <?php endforeach;?>
          </select>

          <label for="inputEmail1" class="col-lg-2 control-label">Categoria Precio*</label>       
          <select name="catprecio_id" required class="form-control">
          <option value="">-- NINGUNO --</option>
          <?php foreach($catprecio as $catprecios):?>
          <option value="<?php echo $catprecios->idcatprecio;?>"><?php echo $catprecios->idcatprecio." ".$catprecios->categoriaprecio;?></option>
          <?php endforeach;?>
          </select>
    </div>
     <br> 
  <br> 
<input type='hidden' name='insertar' value='insertar'>
 
 </div>
  </div>
   
   <br>


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