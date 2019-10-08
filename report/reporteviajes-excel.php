<?php
    include "../core/autoload.php";
	include "../core/app/model/viajeData.php";
	include "../core/app/model/personData.php";
	include "../core/app/model/ConceptoData.php";
	$resultado= viajeData::getAll();
    if(count($resultado)>0){
		if (PHP_SAPI == 'cli')
			die('Este archivo solo se puede ver desde un navegador web');

		/** Se agrega la libreria PHPExcel */
		require_once 'lib/PHPExcel/PHPExcel.php';

		// Se crea el objeto PHPExcel
		$objPHPExcel = new PHPExcel();

		// Se asignan las propiedades del libro
		$objPHPExcel->getProperties()->setCreator("AlexisMoran") //Autor
							 ->setLastModifiedBy("AlexisMoran") //Ultimo usuario que lo modificó
							 ->setTitle("Reporte Viajes")
							 ->setSubject("Reporte Viajes")
							 ->setDescription("Reporte todos los viajes realizados")
							 ->setKeywords("reporte viajes") 
							->setCategory("Reporte excel");

											 
							 
		$tituloReporte = "LISTADO DE VIAJES REALIZADOS";
		$titulosColumnas = array('ID', 'TIPO FLETE', 'ORIGEN DESTINO', 'KILOMETROS', 'KILOMETRAJE TRANSPORTE', 'NUMERO DE ENVIO', 'NUMERO DE PEDIDO', 'VALE', 'FACTURA', 'MONTO DEL VIAJE', 'PLACA CABEZAL', 'PLACA REMOLQUE', 'NUMERO CISTERNA', 'PLACA CISTERNA', 'PRODUCTO ENVASAR', 'PILOTO', 'GLS AUTORIZADOS', 'VALE DESPACHO', 'GLS DESPACHADOS', 'DIF GALONES', 'VIATICO PILOTO', 'PAGO FLETE', 'VIAJE PAGADO', 'VIAJE FINALIZADO', 'FECHA', 'OBS');
		
		$objPHPExcel->setActiveSheetIndex(0)
        		    ->mergeCells('A1:Z1');
						
		// Se agregan los titulos del reporte
		$objPHPExcel->setActiveSheetIndex(0)
					->setCellValue('A1',$tituloReporte)
        		    ->setCellValue('A3',  $titulosColumnas[0])
		            ->setCellValue('B3',  $titulosColumnas[1])
        		    ->setCellValue('C3',  $titulosColumnas[2])
            		->setCellValue('D3',  $titulosColumnas[3])
					->setCellValue('E3',  $titulosColumnas[4])
					->setCellValue('F3',  $titulosColumnas[5])
					->setCellValue('G3',  $titulosColumnas[6])
					->setCellValue('H3',  $titulosColumnas[7])
					->setCellValue('I3',  $titulosColumnas[8])
					->setCellValue('J3',  $titulosColumnas[9])
					->setCellValue('K3',  $titulosColumnas[10])
					->setCellValue('L3',  $titulosColumnas[11])
					->setCellValue('M3',  $titulosColumnas[12])
					->setCellValue('N3',  $titulosColumnas[13])
					->setCellValue('O3',  $titulosColumnas[14])
					->setCellValue('P3',  $titulosColumnas[15])
					->setCellValue('Q3',  $titulosColumnas[16])
					->setCellValue('R3',  $titulosColumnas[17])
					->setCellValue('S3',  $titulosColumnas[18])
					->setCellValue('T3',  $titulosColumnas[19])
					->setCellValue('U3',  $titulosColumnas[20])
					->setCellValue('V3',  $titulosColumnas[21])
					->setCellValue('W3',  $titulosColumnas[22])
					->setCellValue('X3',  $titulosColumnas[23])
					->setCellValue('Y3',  $titulosColumnas[24])
					->setCellValue('Z3',  $titulosColumnas[25]);
					
				
		
		
		
		
		//Se agregan los datos de los alumnos
		$i = 4;
		$viajeFinalizado="";
		$viajePagado="";
		foreach($resultado as $fila):
		     if($fila->viajeFinalizado==1):
			     $viajeFinalizado = "VIAJE FINALIZADO";
			endif;	
			
			 if($fila->viajeFinalizado==0):
			     $viajeFinalizado = "-------------";
			endif;	
			 if($fila->viaje_pagado==1):
			    $viajePagado = "VIAJE PAGADO";
			endif;
			 if($fila->viaje_pagado==0):
			    $viajePagado = "------------";
			endif;
			
		    $propietario = personData::getById($fila->id_propietario);
			$piloto = personData::getById($fila->id_piloto);
		    $prdEnvazar = ConceptoData::getById($fila->producto_envasar); 
			$objPHPExcel->setActiveSheetIndex(0)
        		    ->setCellValue('A'.$i,  $fila->id)
		            ->setCellValue('B'.$i,  $fila->tipo_flete)
        		    ->setCellValue('C'.$i,  $fila->origenDestino)
					->setCellValue('D'.$i,  $fila->kilometros)
					->setCellValue('E'.$i,  $fila->kilometrajeTrans)
					->setCellValue('F'.$i,  $fila->no_envio )
					->setCellValue('G'.$i,  $fila->no_pedido )
					->setCellValue('H'.$i,  $fila->vale)
					->setCellValue('I'.$i,  $fila->factura)
					->setCellValue('J'.$i,  $fila->montoViaje )
					->setCellValue('K'.$i,  $fila->placa_cabezal )
					->setCellValue('L'.$i,  $fila->placa_remolque )
					->setCellValue('M'.$i,  $fila->no_sisterna )
					->setCellValue('N'.$i,  $fila->placa_sisterna )
					->setCellValue('O'.$i,  $prdEnvazar->descripcion )
					->setCellValue('P'.$i,  $piloto->name." ".$piloto->lastname )
					->setCellValue('Q'.$i,  $fila->gl_autorizado )
					->setCellValue('R'.$i,  $fila->valeA )
						->setCellValue('S'.$i,  $fila->gl_despachado )
					->setCellValue('T'.$i,  $fila->dif_gl )
					->setCellValue('U'.$i,  $fila->viatico_piloto )
					->setCellValue('V'.$i,  $fila->pago_flete )
					->setCellValue('W'.$i,  $viajePagado )
					->setCellValue('X'.$i,  $viajeFinalizado )
					->setCellValue('Y'.$i,  $fila->fecha )
					->setCellValue('Z'.$i,  $fila->obs );
            		
					$i++;
		 endforeach;
		
		$estiloTituloReporte = array(
        	'font' => array(
	        	'name'      => 'Verdana',
    	        'bold'      => true,
        	    'italic'    => false,
                'strike'    => false,
               	'size' =>16,
	            	'color'     => array(
    	            	'rgb' => 'FFFFFF'
        	       	)
            ),
	        'fill' => array(
				'type'	=> PHPExcel_Style_Fill::FILL_SOLID,
				'color'	=> array('argb' => 'FF220835')
			),
            'borders' => array(
               	'allborders' => array(
                	'style' => PHPExcel_Style_Border::BORDER_NONE                    
               	)
            ), 
            'alignment' =>  array(
        			'horizontal' => PHPExcel_Style_Alignment::HORIZONTAL_CENTER,
        			'vertical'   => PHPExcel_Style_Alignment::VERTICAL_CENTER,
        			'rotation'   => 0,
        			'wrap'          => TRUE
    		)
        );

		$estiloTituloColumnas = array(
            'font' => array(
                'name'      => 'Arial',
                'bold'      => true,                          
                'color'     => array(
                    'rgb' => 'FFFFFF'
                )
            ),
            'fill' 	=> array(
				'type'		=> PHPExcel_Style_Fill::FILL_GRADIENT_LINEAR,
				'rotation'   => 90,
        		'startcolor' => array(
            		'rgb' => 'c47cf2'
        		),
        		'endcolor'   => array(
            		'argb' => 'FF431a5d'
        		)
			),
            'borders' => array(
            	'top'     => array(
                    'style' => PHPExcel_Style_Border::BORDER_MEDIUM ,
                    'color' => array(
                        'rgb' => '143860'
                    )
                ),
                'bottom'     => array(
                    'style' => PHPExcel_Style_Border::BORDER_MEDIUM ,
                    'color' => array(
                        'rgb' => '143860'
                    )
                )
            ),
			'alignment' =>  array(
        			'horizontal' => PHPExcel_Style_Alignment::HORIZONTAL_CENTER,
        			'vertical'   => PHPExcel_Style_Alignment::VERTICAL_CENTER,
        			'wrap'          => TRUE
    		));
			
		$estiloInformacion = new PHPExcel_Style();
		$estiloInformacion->applyFromArray(
			array(
           		'font' => array(
               	'name'      => 'Arial',               
               	'color'     => array(
                   	'rgb' => '000000'
               	)
           	),
           	'fill' 	=> array(
				'type'		=> PHPExcel_Style_Fill::FILL_SOLID,
				'color'		=> array('argb' => 'FFd9b7f4')
			),
           	'borders' => array(
               	'left'     => array(
                   	'style' => PHPExcel_Style_Border::BORDER_THIN ,
	                'color' => array(
    	            	'rgb' => '3a2a47'
                   	)
               	)             
           	)
        ));
		 
		$objPHPExcel->getActiveSheet()->getStyle('A1:Z1')->applyFromArray($estiloTituloReporte);
		$objPHPExcel->getActiveSheet()->getStyle('A3:Z3')->applyFromArray($estiloTituloColumnas);		
		$objPHPExcel->getActiveSheet()->setSharedStyle($estiloInformacion, "A4:Z".($i-1));
				
		for($i = 'A'; $i <= 'Z'; $i++){
			$objPHPExcel->setActiveSheetIndex(0)			
				->getColumnDimension($i)->setAutoSize(TRUE);
		}
		
		// Se asigna el nombre a la hoja
		$objPHPExcel->getActiveSheet()->setTitle('Viajes');

		// Se activa la hoja para que sea la que se muestre cuando el archivo se abre
		$objPHPExcel->setActiveSheetIndex(0);
		// Inmovilizar paneles 
		//$objPHPExcel->getActiveSheet(0)->freezePane('A4');
		$objPHPExcel->getActiveSheet(0)->freezePaneByColumnAndRow(0,4);

		// Se manda el archivo al navegador web, con el nombre que se indica (Excel2007)
		header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
		header('Content-Disposition: attachment;filename="ReporteViajes.xlsx"');
		header('Cache-Control: max-age=0');

		$objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel2007');
		$objWriter->save('php://output');
		exit;
		
	}
	else{
		print_r('No hay resultados para mostrar');
	}
?>