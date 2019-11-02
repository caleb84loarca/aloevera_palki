<div class="row">
	<div class="col-md-12">
		<div class="btn-group pull-right">
			<a href="index.php?view=newvale" class="btn btn-default"><i class='fa fa-book'></i> Nuevo Vale</a>
												
				<div class="btn-group pull-right">
					<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
						<i class="fa fa-download"></i> Descargar <span class="caret"></span>
					</button>
					<ul class="dropdown-menu" role="menu">
						<li><a href="report/providers-word.php">Word 2007 (.docx)</a></li>
					</ul>
				</div>
		</div>  


		<h1>Listado de Vales</h1>
		<br>
		<?php
         
		$vales = valesData::getAll();
		if(count($vales)>0){
			// si hay usuarios
			?>

			<table class="table table-bordered table-hover">
			<thead>
            <th>Id Usuario</th>
			<th>Nombre</th>
			<th>Apellido</th>
			<th>UserName</th>
			<th>Fecha Creacion</th>
			</thead>
			<?php
				foreach($vales as $vale){
					$vale;
			?>
				<tr>
                <td><?php echo $vale->numvale; ?></td>
                <td><?php echo $vale->fechacompra; ?></td>
				<td><?php echo $vale->pedido." ".$vale->idprovee; ?></td>
				<td><?php echo $vale->idregion." ".$vale->iddetalle; ?></td>
				<td><?php echo $vale->observacion; ?></td>
				<td><?php echo $vale->idusuario; ?></td>
				<td style="width:150px;">
				<a href="index.php?view=editvale&id=<?php echo $vale->numvale;?>" class="btn btn-warning btn-xs">Editar</a>
				<a href="index.php?view=delvale&id=<?php echo $vale->numvale;?>" class="btn btn-danger btn-xs">Eliminar</a>
                <a href="index.php?view=viewvale&id=<?php echo $vale->numvale; ?>" class="btn btn-xs btn-default"><i class="glyphicon glyphicon-eye-open"></i></a></td>

				</td>
				</tr>
				<?php

			}
			echo "</table>";

		}else{
			echo "<p class='alert alert-info'><strong>No hay vales en el sistema</strong></p>";
		}


		?>

	
	</div>
</div>


