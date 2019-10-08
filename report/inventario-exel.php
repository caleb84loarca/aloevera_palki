<?php
    include "../core/autoload.php"; 
    require_once '../core/app/model/productData.php';
	
    // Logica
  $operation = productData::getAll();
?>
    
<h1>Mi primer reporte</h1>
<p>Hemos creado nuestro reporte usando PHP y HTML :).</p>

<table>
    <thead>
        <tr>
		
		
            <th style="text-align:left;">Id</th>
            <th style="text-align:left;">Producto</th>
            <th style="text-align:left;">Cantidad</th>
            <th style="text-align:left;">Precio</th>
			<th style="text-align:left;">Inventario minimo</th>
			<th style="text-align:left;">Monto</th>
        </tr>
    </thead>

	
    <?php foreach($operation as $r): ?>
        <tr>
            <td><?php echo $r->id; ?></td>
            <td><?php echo $r->name; ?></td>
            <td><?php echo $r->unit; ?></td>
            <td><?php echo $r->price_in; ?></td>
			 <td><?php echo $r->inventary_min; ?></td>
			 <td><?php echo $r->unit * $r->price_in ; ?></td>
        </tr>
    <?php endforeach; ?>
</table>   