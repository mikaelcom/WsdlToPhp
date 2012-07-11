<?php
/**
 * Test with Microsoft Ressearch WSDL
 * @date 05/07/2012
 */
ini_set('display_errors',E_ALL);
require_once dirname(__FILE__) . '/microsoft-sensormap-datahub/MicrosoftSmDhAutoload.php';
/**
 * MS SmDh Informations
 */
define('MSSMDH_WSDL','http://atom.research.microsoft.com/sensordatahub/service.asmx?WSDL');
$wsdl = array(
			MicrosoftSmDhWsdlClass::WSDL_URL=>MSSMDH_WSDL);
/**
 * Get
 */
$m = new MicrosoftSmDhServiceGet($wsdl);
$m->GetAllSensorsByPublisher(new MicrosoftSmDhTypeGetAllSensorsByPublisher('wangwenq@gmail.com'));
print_r($m);
/**
 * Is
 */
$m = new MicrosoftSmDhServiceIs($wsdl);
$m->IsDataYoungerThan(new MicrosoftSmDhTypeIsDataYoungerThan('wangwenq@gmail.com','Temperature',time()-3600*24*365));
print_r($m);
?>