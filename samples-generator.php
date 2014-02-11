<?php
/**
 * Sample to show how to use WsdlToPhpGenerator class
 * @package WsdlToPhpGenerator
 * @date 01/07/2012
 */
ini_set('display_errors',true);
error_reporting(-1);
ini_set('memory_limit',-1);
/**
 * In case function lcfirst doesn't exist 
 */
if(!function_exists('lcfirst'))
{
	function lcfirst($_s)
	{
		return strtolower(substr($_s,0,1)) . substr($_s,1);
	}
}
/**
 * Librairies
 */
$localDir = dirname(__FILE__) . '/';
require_once $localDir . 'WsdlToPhpModel.php';
require_once $localDir . 'WsdlToPhpStruct.php';
require_once $localDir . 'WsdlToPhpService.php';
require_once $localDir . 'WsdlToPhpFunction.php';
require_once $localDir . 'WsdlToPhpGenerator.php';
require_once $localDir . 'WsdlToPhpStructValue.php';
require_once $localDir . 'WsdlToPhpStructAttribute.php';
/**
 * Cleaning tests
 */
if(false)
{
	echo "\r\n Clean Name for '2And'is-go54  83od+*/you=yèçés_3' is " . WsdlToPhpModel::cleanString("2And'is-go54  83od+*/you=yéçès_3") . " \r\n";
	return;
}
/**
 * OVH SOAP API
 * Lots of structs and operations
 */
if(false)
{
	$w = new WsdlToPhpGenerator('http://www.ovh.com/soapi/soapi-dlw-1.54.wsdl');
	WsdlToPhpGenerator::setOptionGenerateAutoloadFile(true);
	WsdlToPhpGenerator::setOptionGenerateWsdlClassFile(true);
	WsdlToPhpGenerator::setOptionResponseAsWsdlObject(true);
	WsdlToPhpGenerator::setOptionGenerateTutorialFile(true);
	WsdlToPhpGenerator::setOptionCategory(WsdlToPhpGenerator::OPT_CAT_START_NAME);
	WsdlToPhpGenerator::setOptionSubCategory(WsdlToPhpGenerator::OPT_SUB_CAT_END_NAME);
	$w->generateClasses('ovh',dirname(__FILE__) . '/samples/ovh/');
}
/**
 * BING Web Search API
 */
if(false)
{
	$w = new WsdlToPhpGenerator('http://api.bing.net/search.wsdl');
	WsdlToPhpGenerator::setOptionGenerateAutoloadFile(true);
	WsdlToPhpGenerator::setOptionGenerateWsdlClassFile(true);
	WsdlToPhpGenerator::setOptionSendParametersAsArray(true);
	WsdlToPhpGenerator::setOptionGenerateTutorialFile(true);
	WsdlToPhpGenerator::setOptionCategory(WsdlToPhpGenerator::OPT_CAT_START_NAME);
	WsdlToPhpGenerator::setOptionSubCategory(WsdlToPhpGenerator::OPT_SUB_CAT_END_NAME);
	$w->generateClasses('bing',dirname(__FILE__) . '/samples/bing/');
}
/**
 * AT Internet
 */
if(false)
{
	exec('rm -rf ' . __DIR__ . '/samples/at/*;');
	$w = new WsdlToPhpGenerator('http://api.atinternet-solutions.com/toolbox/reporting.asmx?WSDL');
	WsdlToPhpGenerator::setOptionGenerateAutoloadFile(true);
	WsdlToPhpGenerator::setOptionGenerateWsdlClassFile(true);
	WsdlToPhpGenerator::setOptionSendArrayAsParameter(true);
	WsdlToPhpGenerator::setOptionGenerateTutorialFile(true);
	WsdlToPhpGenerator::setOptionCategory(WsdlToPhpGenerator::OPT_CAT_START_NAME);
	WsdlToPhpGenerator::setOptionSubCategory(WsdlToPhpGenerator::OPT_SUB_CAT_END_NAME);
	$w->generateClasses('at',dirname(__FILE__) . '/samples/at/');
}
/**
 * Via michelin
 */
if(false)
{
	$wsdls = array(
				'Geocoding'=>'http://webservices.viamichelin.com/ws2/services/Geocoding?wsdl',
				'ReverseGeocoding'=>'http://webservices.viamichelin.com/ws2/services/ReverseGeocoding?wsdl',
				'RouteCalculation'=>'http://webservices.viamichelin.com/ws2/services/RouteCalculation?wsdl',
				'FindPOI'=>'http://webservices.viamichelin.com/ws2/services/FindPOI?wsdl',
				'DistanceCalculation'=>'http://webservices.viamichelin.com/ws2/services/DistanceCalculation?wsdl',
				'MapManagement'=>'http://webservices.viamichelin.com/ws2/services/MapManagement?wsdl',
				'AccessManagement'=>'https://webservices.viamichelin.com/ws2/services/AccessManagement?wsdl');
	foreach($wsdls as $name=>$wsdl)
	{
		$name = 'ViaMichelin' . $name;
		exec('rm -rf ' . __DIR__ . '/samples/' . $name . '/*;');
		$w = new WsdlToPhpGenerator($wsdl);
		WsdlToPhpGenerator::setOptionGenerateAutoloadFile(true);
		WsdlToPhpGenerator::setOptionGenerateWsdlClassFile(true);
		WsdlToPhpGenerator::setOptionResponseAsWsdlObject(true);
		WsdlToPhpGenerator::setOptionGenerateTutorialFile(true);
		WsdlToPhpGenerator::setOptionSendArrayAsParameter(false);
		WsdlToPhpGenerator::setOptionSendParametersAsArray(false);
		WsdlToPhpGenerator::setOptionCategory(WsdlToPhpGenerator::OPT_CAT_START_NAME);
		WsdlToPhpGenerator::setOptionSubCategory(WsdlToPhpGenerator::OPT_SUB_CAT_END_NAME);
		$w->generateClasses($name,dirname(__FILE__) . '/samples/' . $name . '/');
	}
}
/**
 * Any
 */
if(true)
{
	$name = 'PayPal';
	$wsdl = 'https://www.paypalobjects.com/wsdl/PayPalSvc.wsdl';
	exec('rm -rf ' . __DIR__ . '/samples/' . $name . '/*;');
	echo "\r\nStart at " . date('H:i:s');
	$w = new WsdlToPhpGenerator($wsdl);
	WsdlToPhpGenerator::setOptionGenerateAutoloadFile(true);
	WsdlToPhpGenerator::setOptionGenerateWsdlClassFile(true);
	WsdlToPhpGenerator::setOptionGenerateTutorialFile(true);
	WsdlToPhpGenerator::setOptionCategory(WsdlToPhpGenerator::OPT_CAT_TYPE);
	WsdlToPhpGenerator::setOptionSubCategory(WsdlToPhpGenerator::OPT_SUB_CAT_END_NAME);
	WsdlToPhpGenerator::setOptionAddComments(array('date'=>date('Y-m-d'),'author'=>'Mikaël DELSOL','version'=>1));
	echo "\r\nStart generation at " . date('H:i:s');
	$w->generateClasses($name,dirname(__FILE__) . '/samples/' . $name . '/');
	echo "\r\nEnd generation at " . date('H:i:s');
	echo "\r\nGenerate doc start " . date('H:i:s');
	$ouputs = array();
	exec('rm -rf ' . __DIR__ . '/docs/' . $name . '/* && clear && phpdoc --sourcecode on -d ' . __DIR__ . '/samples/' . $name . ' -t ' . __DIR__ . '/docs/' . $name . ' -pp -ti "' . ucfirst($name) . ' package documentation" -o HTML:frames:DOM/earthli;',$ouputs);
	print_r($ouputs);
	echo "\r\nGenerate doc end " . date('H:i:s');
	print_r($w->getAudit());
}