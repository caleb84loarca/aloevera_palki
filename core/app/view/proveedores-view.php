<div class="row">
	<div class="col-md-12">
		<div class="btn-group pull-right">
			<a href="index.php?view=newuser" class="btn btn-default"><i class='fa fa-book'></i> Nuevo Proveedor</a>
												
				<div class="btn-group pull-right">
					<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
						<i class="fa fa-download"></i> Descargar <span class="caret"></span>
					</button>
					<ul class="dropdown-menu" role="menu">
						<li><a href="report/providers-word.php">Word 2007 (.docx)</a></li>
					</ul>
				</div>
		</div>  


		<h1>Listado de Proveedores</h1>
		<br>
		<?php
         
		$proveedor = ProveeData::getAll();
		if(count($proveedor)>0){
			// si hay usuarios
			?>

			<table class="table table-bordered table-hover">
			<thead>
            <th>CODIGO PROVEEDOR</th>
			<th>NOMBRES</th>
			<th>APELLIDOS</th>
			<th>N I T</th>
			<th>D P I</th>
            <th>DIRECCION</th>
			<th>DEPARTAMENTO</th>
            <th>MUNICIPIO</th>
            <th>TELEFONOS</th>
			
			</thead>
			<?php
				foreach($proveedor as $proveedors){
					$proveedor;
			?>
				<tr>
                <td><?php echo $proveedors->idprovee; ?></td>
				<td><?php echo $proveedors->nombre1." ".$proveedors->nombre2; ?></td>
				<td><?php echo $proveedors->apellido1." ".$proveedors->apellido2; ?></td>
				<td><?php echo $proveedors->nit; ?></td>
				<td><?php echo $proveedors->dpi; ?></td>
                <td><?php echo $proveedors->direccion; ?></td>
                <td><?php echo $proveedors->iddepartamento; ?></td>
                <td><?php echo $proveedors->idmunicipio; ?></td>
                <td><?php echo $proveedors->telefono1 ." / ".$proveedors->telefono2;?></td>
                
                <td style="width:150px;">
				<a href="index.php?view=editprovee&id=<?php echo $proveedors->idprovee;?>" class="btn btn-warning btn-xs">Editar</a>
				<a href="index.php?view=dellibro&id=<?php echo $proveedors->idprovee;?>" class="btn btn-danger btn-xs">Eliminar</a>
                <a href="index.php?view=viewlibro&id=<?php echo $proveedors->idprovee; ?>" class="btn btn-xs btn-default"><i class="glyphicon glyphicon-eye-open"></i></a></td>

				</td>
				</tr>
				<?php

			}
			echo "</table>";

		}else{
			echo "<p class='alert alert-danger'>No hay usuarios en el sistema</p>";
		}


		?>

	
	</div>
</div>