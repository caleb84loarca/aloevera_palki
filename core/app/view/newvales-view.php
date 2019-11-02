<?php 
$vales = valesData::getAll();
$regiones= regionData::getAll();
$proveedores = proveeData::GetAll();
$deptos = DeptoData::getAll();
$munis = MuniData::getAll();
$medidas =  medidaData::getAll();
$invers = inverData::getAll();

?>

<div class="row">
	<div class="col-md-12">
	<h1>Ingreso Vale de Compra</h1>
    <img src="image/Palki.png" width="350" height="50">
	<br>

    <form class="form-horizontal" method="post" id="addvale" action="index.php?view=addvale" role="form">


            <div class="form-group">
                <div class="col-md-4">   
                   <h2> <label for="text" class="col-lg-8 control-label">Vale Compra #</label>   </h2>   
                   <input type="text" name="vale_id" valor="vale_id">
                </div>
            </div>
 
  <div class="form-group">
            <div class="col-md-3">
                     <label for="inputEmail1" class="col-lg-6 control-label">Fecha de Ingreso*</label>
                        <input type="date" name="sd"  required value="<?php if(isset($_GET["sd"])){ echo $_GET["sd"]; }?>" class="form-control">
<br>
<br>
                    <label for="inputEmail1" class="col-lg-4 control-label">Pedido</label>
                    <input type="text" name="pedido" valor="vale_id" value="A"  placeholder="PEDIDO"> 
<br>
<br>
         
          <label for="inputEmail1" class="col-lg-2 control-label">Region*</label>       
          <select name="region_id" required class="form-control">
          <option value="">-- NINGUNO --</option>
          <?php foreach($regiones as $region):?>
          <option value="<?php echo $region->idregion;?>"><?php echo $region->idregion." - ".$region->region;?></option>
          <?php endforeach;?>
          </select>
      

        </div>

            <div class="col-md-6">
                <label for="inputEmail1" class="col-lg-6 control-label">Codigo y Proveedor*</label>
                <select name="provee_id" required class="form-control">
                <option value="">-- NINGUNO --</option>
                <?php foreach($proveedores as $proveedor):?>
                <option value="<?php echo $proveedor->idprovee;?>"><?php echo $proveedor->nombre1." ".$proveedor->nombre2." ".$proveedor->apellido1." ".$proveedor->apellido2." - ".$proveedor->idprovee;?></option>
                <?php endforeach;?>
                </select>

            </div>

      <div class="col-md-6">
          <label for="inputEmail1" class="col-lg-2 control-label">Procedencia (Depto/Muni)*</label>
      
          <select name="depto_id" required class="form-control">
          <option value="">-- NINGUNO --</option>
          <?php foreach($deptos as $depto):?>
          <option value="<?php echo $depto->iddepartamento;?>"><?php echo $depto->departamento." - ".$depto->iddepartamento;?></option>
          <?php endforeach;?>
          </select>

          <select name="autor_id" required class="form-control">
          <option value="">-- NINGUNO --</option>
          <?php foreach($munis as $muni):?>
          <option value="<?php echo $muni->idmunicipio;?>"><?php echo $muni->municipio." - ".$muni->idmunicipio;?></option>
          <?php endforeach;?>
          </select>


      </div>
</div> <!-- fin de encabezado de vale-->

<textarea name="observacion" rows="5" cols="40" placeholder="Cuadro para Observaciones"></textarea>


<!-- detalle del vale -->
<fieldset>
 <legend>Ingreso Detalle Vale</legend>
  <div class="form-group">
 
      <div class="col-md-2">
      <label for="inputEmail1" class="col-lg-10 control-label">MEDIDA DE PLANTA</label>
    
          <select name="medida_id" required class="form-control">
          <option value="">-- NINGUNO --</option>
          <?php foreach($medidas as $medida):?>
          <option value="<?php echo $medida->idmedida;?>"><?php echo $medida->medida;?></option>
          <?php endforeach;?>
          </select>
      </div>

      
      <div class="col-md-2">
          <label for="inputEmail1" class="col-lg-2 control-label">INVERNADERO</label>
          <select name="inver_id" required class="form-control">
          <option value="">-- NINGUNO --</option>
          <?php foreach($invers as $inver):?>
          <option value="<?php echo $inver->idinvernadero;?>"><?php echo $inver->invernadero;?></option>
          <?php endforeach;?>
          </select>
        </div>
          
            <div class="col-md-2">
                <label for="inputEmail1" class="col-lg-8 control-label">SECCION/CAMA</label>
                <input type="text" name="seccion" valor="seccion">
            </div>   


            <form method="POST" oninput="resultado.value=parseInt(unidades.value)*parseInt(preciou.value)">
  
            <div class="col-md-2">
                <label for="inputEmail1" class="col-lg-8 control-label">UNIDADES</label>
                <input type="number" id="unidades" valor="unidades" value="">
            </div> 
            
      <div class="col-md-2">
        <label for="inputEmail1" class="col-lg-10 control-label">PRECIO UNITARIO</label>
        <input type="number" id="preciou" valor="preciou" value="">
       </div> 


            <div class="col-md-2">
                <label for="inputEmail1" class="col-lg-10 control-label">VALOR TOTAL</label>
                <input type="text" name="valortotal" id="resultado" valor="valortotal" placeholder="operacion">
                <output name="resultado" for="unidades preciou"></output>
                
            </div>
            
            
            </form>

            
  </div>  <!--cierre ingreso detalle-->


</fieldset>

  
  <table class="table table-bordered table-hover">
			<thead>
			<th>Medida Planta</th>
			<th>Invernadero</th>
			<th>Seccion / Cama</th>
			<th>Unidades</th>
            <th>Precio Unitario</th>
            <th>Valor Total</th>
			</thead>

        <tr>
        <td>      </td>
        <td>      </td>
        <td>      </td>
        <td>      </td>
        <td>      </td>   
        <td>      </td>   
                <td style="width:50px;">
				<a href="index.php?view=delvale&id=<?php echo $vales->id;?>" class="btn btn-danger btn-xs">Eliminar</a>
                </td>

            </tr>
</table>




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