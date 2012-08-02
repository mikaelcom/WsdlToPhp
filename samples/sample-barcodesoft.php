<?php
/**
 * Test with BarCodeSoft WSDL
 * @date 02/08/2012
 */
ini_set('display_errors',E_ALL);

require_once dirname(__FILE__) . '/barcodesoft/BarCodeSoftAutoload.php';
/**
 * BarCodeSoft Informations
 */
define('BARCODESOFT_WSDL','http://www.barcodesoft.com/bcdgen.asmx?WSDL');
/**
 * init
*/
$wsdl = array(
		BarCodeSoftWsdlClass::WSDL_URL=>BARCODESOFT_WSDL);
$b = new BarCodeSoftServiceDatamatrix($wsdl);
$b->Datamatrix(new BarCodeSoftTypeDatamatrix('Hello, my name is John !', BarCodeSoftTypeDataMatrixFormat::VALUE__96X96, BarCodeSoftTypeBcsImageFormat::VALUE_PNG, BarCodeSoftTypeBcsOrientation::VALUE_ORIGINAL,600, 96, 96));
print_r($b);
?>