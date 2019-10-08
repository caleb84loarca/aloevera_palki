

<?php if(isset($_GET["concepto"]) && $_GET["concepto"]!=""):?>
	<?php
$conceptos = ConceptoData::getLike($_GET["concepto"]);
if(count($conceptos)>0){
	?>
	
<h3>Resultados de la Busqueda</h3>
<table class="table table-bordered table-hover">
	<thead>
		<th>Codigo</th>
		<th>Descripcion</th>
		<th>Cuenta Contable</th>
		<th>Tipo Transaccion</th>
		<th>Cantidad</th>
	</thead>
	<?php

	 foreach($conceptos as $concepto):

	?>

		<td style="width:80px;"><?php echo $concepto->codigo; ?></td>
		<td><?php echo $concepto->descripcion; ?></td>
		<td><?php echo $concepto->cuentaContable; ?></td>
		<td><?php echo $concepto->tipoTransacion; ?></td>
		<td style="width:250px;"><form method="post" action="index.php?view=gasto">
		<input type="hidden" name="concepto_id" value="<?php echo $concepto->codigo; ?>">

<div class="input-group">
		<input type="" class="form-control" required name="q" placeholder="Cantidad ...">
      <span class="input-group-btn">
		<button type="submit" class="btn btn-primary"><i class="glyphicon glyphicon-plus-sign"></i> Agregar</button>
      </span>
    </div>


		</form></td>
	</tr>
	

	<?php endforeach;?>
</table>

	<?php
}else{
	
	echo "<br><p class='alert alert-danger'>No se encontro el concepto de gasto</p>";
}

?>

<hr><br>
<?php else:
?>
<?php endif; ?>


	
