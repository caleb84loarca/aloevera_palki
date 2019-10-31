<div class="row">
	<div class="col-md-12">
		<div class="btn-group pull-right">
			<a href="index.php?view=newvales" class="btn btn-default"><i class='fa fa-book'></i> Nuevo Vale</a>
				<div class="btn-group pull-right">
					<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
						<i class="fa fa-download"></i> Descargar <span class="caret"></span>
					</button>
					<ul class="dropdown-menu" role="menu">
						<li><a href="report/providers-word.php">Word 2007 (.docx)</a></li>
					</ul>
				</div>
		</div>  


		<h1>Listado de Usuarios</h1>
		<br>
		<?php
         
		$usuario = UserData::getAll();
		if(count($usuario)>0){
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
			foreach($usuario as $usuarios){
				$usuario;
			?>
				<tr>
                <td><?php echo $usuarios->idusuario; ?></td>
				<td><?php echo $usuarios->nombre1." ".$usuarios->nombre2; ?></td>
				<td><?php echo $usuarios->apellido1." ".$usuarios->apellido2; ?></td>
				<td><?php echo $usuarios->username; ?></td>
				<td><?php echo $usuarios->fechacreacion; ?></td>
				<td style="width:150px;">
				<a href="index.php?view=editusuario&id=<?php echo $usuarios->idusuario;?>" class="btn btn-warning btn-xs">Editar</a>
				<a href="index.php?view=dellibro&id=<?php echo $usuarios->idusuario;?>" class="btn btn-danger btn-xs">Eliminar</a>
                <a href="index.php?view=viewlibro&id=<?php echo $usuarios->idusuario; ?>" class="btn btn-xs btn-default"><i class="glyphicon glyphicon-eye-open"></i></a></td>

				</td>
				</tr>
				<?php

			}


		}else{
			echo "<p class='alert alert-danger'>No hay usuarios en el sistema</p>";
		}


		?>

	
	</div>
</div>