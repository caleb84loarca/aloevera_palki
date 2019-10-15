<?php 
$autores = AutorData::getAll();
?>

<div class="row">
	<div class="col-md-12">
	<h1>Ingreso Vale de Compra</h1>
    <img src="image/Palki.png" width="350" height="50">
	<br>

    <form class="form-horizontal" method="post" id="addlibro" action="index.php?view=addlibro" role="form">


            <div class="form-group">
                <div class="col-md-4">   
                   <h2> <label for="text" class="col-lg-8 control-label">Vale Compra #</label>   </h2>   
                    <select name="autor_id" required class="form-control">
                        <?php 
                            foreach($autores as $autor):?>      
                            <option value="<?php echo $autor->id;
                                ?>">
                                <?php echo $autor->id." "?>
                            </option>
                        <?php endforeach;?>
                    </select>   
                </div>
            </div>
 
  <div class="form-group">
            <div class="col-md-3">
                     <label for="inputEmail1" class="col-lg-6 control-label">Fecha de Compra*</label>
                        <input type="date" name="sd"  required value="<?php if(isset($_GET["sd"])){ echo $_GET["sd"]; }?>" class="form-control">

                    <label for="inputEmail1" class="col-lg-2 control-label">Pedido</label>
                    <select name="autor_id" required class="form-control">
                                <option value="">-- NINGUNO --</option>
                        <?php foreach($autores as $autor):?>
                            <option value="<?php echo $autor->id;?>"><?php echo $autor->id;?></option>
                        <?php endforeach;?>
                    </select>

         
          <label for="inputEmail1" class="col-lg-2 control-label">Region*</label>       
          <select name="autor_id" required class="form-control">
          <option value="">-- NINGUNO --</option>
          <?php foreach($autores as $autor):?>
          <option value="<?php echo $autor->id;?>"><?php echo $autor->nombre." ".$autor->apellido;?></option>
          <?php endforeach;?>
          </select>
      

        </div>

            <div class="col-md-6">
                <label for="inputEmail1" class="col-lg-6 control-label">Codigo Proveedor*</label>
                <select name="autor_id" required class="form-control">
                <option value="">-- NINGUNO --</option>
                <?php foreach($autores as $autor):?>
                <option value="<?php echo $autor->id;?>"><?php echo $autor->id;?></option>
                <?php endforeach;?>
                </select>

                <label for="inputEmail1" class="col-lg-2 control-label">Proveedor*</label>
                <select name="autor_id" required class="form-control">
                <option value="">-- NINGUNO --</option>
                <?php foreach($autores as $autor):?>
                <option value="<?php echo $autor->id;?>"><?php echo $autor->nombre." ".$autor->apellido;?></option>
                <?php endforeach;?>
                </select>

            </div>

      <div class="col-md-6">
          <label for="inputEmail1" class="col-lg-2 control-label">Procedencia*</label>
      
          <select name="autor_id" required class="form-control">
          <option value="">-- NINGUNO --</option>
          <?php foreach($autores as $autor):?>
          <option value="<?php echo $autor->id;?>"><?php echo $autor->nombre." ".$autor->apellido;?></option>
          <?php endforeach;?>
          </select>
      </div>
</div> <!-- fin de encabezado de vale-->

<!-- detalle del vale -->
  <div class="form-group">
      
      <div class="col-md-2">
      <label for="inputEmail1" class="col-lg-10 control-label">MEDIDA DE PLANTA</label>
    
          <select name="autor_id" required class="form-control">
          <option value="">-- NINGUNO --</option>
          <?php foreach($autores as $autor):?>
          <option value="<?php echo $autor->id;?>"><?php echo $autor->nombre." ".$autor->apellido;?></option>
          <?php endforeach;?>
          </select>
      </div>

      
      <div class="col-md-2">
          <label for="inputEmail1" class="col-lg-2 control-label">INVERNADERO</label>
          <select name="autor_id" required class="form-control">
          <option value="">-- NINGUNO --</option>
          <?php foreach($autores as $autor):?>
          <option value="<?php echo $autor->id;?>"><?php echo $autor->nombre." ".$autor->apellido;?></option>
          <?php endforeach;?>
          </select>
        </div>
          
            <div class="col-md-2">
                <label for="inputEmail1" class="col-lg-8 control-label">SECCION/CAMA</label>
                <input type="text" name="seccion" valor="seccion">
            </div>   
            <div class="col-md-2">
                <label for="inputEmail1" class="col-lg-8 control-label">UNIDADES</label>
                <input type="text" name="unidades" valor="unidades">
            </div> 
      <div class="col-md-2">
        <label for="inputEmail1" class="col-lg-10 control-label">PRECIO UNITARIO</label>
        <input type="text" name="precio" valor="precio">
      </div> 

            <div class="col-md-2">
                <label for="inputEmail1" class="col-lg-10 control-label">VALOR TOTAL</label>
                    <select name="autor_id" required class="form-control">
                    <option value="">-- NINGUNO --</option>
                    <?php foreach($autores as $autor):?>
                    <option value="<?php echo $autor->id;?>"><?php echo $autor->nombre." ".$autor->apellido;?></option>
                    <?php endforeach;?>
                    </select>
            
            </div>

  </div>  

<!-- boton y alerta-->
    <div>
        <p class="alert alert-info">* Campos obligatorios</p>
    </div>
  <div class="form-group">
    <div class="col-lg-offset-2 col-lg-10">
      <button type="submit" class="btn btn-primary">Guardar Vale</button>
    </div>
  </div>
</form>
	</div>
</div>