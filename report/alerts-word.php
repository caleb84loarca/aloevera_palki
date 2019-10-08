<?php
include "../core/autoload.php";
include "../core/app/model/ProductData.php";
include "../core/app/model/OperationData.php";
include "../core/app/model/OperationTypeData.php";
include "../core/app/model/umedidaData.php";


require_once '../PhpWord/Autoloader.php';
use PhpOffice\PhpWord\Autoloader;
use PhpOffice\PhpWord\Settings;

Autoloader::register();

$word = new  PhpOffice\PhpWord\PhpWord();
$products = ProductData::getAll();


$section1 = $word->AddSection();
$section1->addText("ALERTAS DE INVENTARIO",array("size"=>22,"bold"=>true,"align"=>"right"));


$styleTable = array('borderSize' => 6, 'borderColor' => '888888', 'cellMargin' => 40);
$styleFirstRow = array('borderBottomColor' => '0000FF', 'bgColor' => 'AAAAAA');

$table1 = $section1->addTable("table1");
$table1->addRow();
$table1->addCell()->addText("Id");
$table1->addCell()->addText("Nombre");
$table1->addCell()->addText("Presentacion");
$table1->addCell()->addText("Minima");
$table1->addCell()->addText("Dispobible");
foreach($products as $product){
    $medida =    $product->getumedida();
    if($product->unit<=$product->inventary_min){
    $table1->addRow();
    $table1->addCell(300)->addText($product->id);
    $table1->addCell(11000)->addText($product->name." ".$product->description);
	$table1->addCell(5000)->addText($medida->name);
    $table1->addCell(2000)->addText($product->inventary_min);
    $table1->addCell(2000)->addText($product->unit);
}

}

$word->addTableStyle('table1', $styleTable,$styleFirstRow);
/// datos bancarios

$filename = "alerts-".time().".docx";
#$word->setReadDataOnly(true);
$word->save($filename,"Word2007");
//chmod($filename,0444);
header("Content-Disposition: attachment; filename='$filename'");
readfile($filename); // or echo file_get_contents($filename);
unlink($filename);  // remove temp file



?>