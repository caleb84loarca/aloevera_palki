<?php
$found=true;
$usuario = UserData::getAll();
	?>

	
<div class="row">
	<div class="col-md-12 text-white bg-blue">
	    <h1>Bienvenido a Sistema de Compra Aloe Vera - PALKI, S.A.</h1>
        <div>
          <img src="image/Palki.png" width="380" height="50">
        </div>
</div>
</div>
<br><br><br><br>
  <div class="row">
    
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-black">
            <div class="inner">
              <h3><?php echo count(valesData::getAll());?></h3>

              <p>Vales de Compra</p>
            </div>
            <div class="icon">
              <i class="ion ion-stats-bars"></i>
            </div>
            <a href="./?view=vales" class="small-box-footer">Ver mas <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
		
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-purple">
            <div class="inner">
              <h3><?php echo count(ProveeData::getAll());?></h3>
             <p>Proveedores</p>
            </div>
            <div class="icon">
              <i class="ion ion-stats-bars"></i>
            </div>
            <a href="./?view=proveedores" class="small-box-footer">Ver mas <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
              		
		
    <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-yellow">
            <div class="inner">
              <h3><?php echo count(UserData::getAll());?></h3>
             <p>Usuarios</p>
            </div>
            <div class="icon">
              <i class="ion ion-stats-bars"></i>
            </div>
            <a href="./?view=usuarios" class="small-box-footer">Ver mas <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
                
        <!-- ./col -->
		
      </div>
      <!-- /.row -->

<div class="row">
	<div class="col-md-12">
<?php if($found):?>
<div class="btn-group pull-right">
  <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
    <i class="fa fa-download"></i> Descargar <span class="caret"></span>
  </button>
  <ul class="dropdown-menu" role="menu">
    <li><a href="report/alerts-word.php">Word 2007 (.docx)</a></li>
  </ul>
</div>
<?php endif;?>

</div>
<div class="clearfix"></div>
<?php if(count($usuario)>0){?>
<br><table class="table table-bordered table-hover">
	<thead>
		<th >Id</th>
		<th>Nombre</th>
		<th>Autor</th>
		<th>Anio Edicion</th>		
	</thead>
	<?php
foreach($usuario as $usuarios):
	   $usuario;
	?>

	<tr>
		<td><?php echo $usuarios->idusuario; ?></td>
		<td><?php echo $usuarios->nombre1; ?></td>
		<td><?php echo $usuarios->apellido1." ".$usuarios->apellido2; ?></td>
		<td><?php echo $usuarios->fechacreacion; ?></td>

	</tr>

<?php
endforeach;
?>
</table>

<div class="clearfix"></div>

	<?php
}else{
	?>
	<div class="jumbotron">
		<h2>No hay existencia de vales</h2>
		<p>No hay existencia de vales en el sistema....</p>
	</div>
	<?php
}

?>
<br><br><br><br><br><br><br><br><br><br>
	</div>
</div>