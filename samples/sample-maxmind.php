<?php
/**
 * Test with MaxMind WSDL
 * @date 05/07/2012
 */
ini_set('display_errors',E_ALL);
require_once dirname(__FILE__) . '/maxmind/MaxMindAutoload.php';
/**
 * MaxMind Informations
 */
define('MAXMIND_KEY','XSMlmTT00fvT');
define('MAXMIND_I','80.24.24.24');
define('MAXMIND_WSDL','http://www.maxmind.com/app/minfraud_soap_wsdl14');
/**
 * init
 */
$wsdl = array(
			MaxMindWsdlClass::WSDL_URL=>MAXMIND_WSDL);
$m = new MaxMindServiceMinfraud_soap14($wsdl);
$p = new MaxMindTypeMinfraud_soap14(null,MAXMIND_I,null,null,null,MAXMIND_KEY,null,null,null,null,null,'FRANCE');
$m->minfraud_soap14($p);
print_r($m);
?>