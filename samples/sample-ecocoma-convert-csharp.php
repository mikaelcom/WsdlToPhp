<?php
/**
 * Test with eCoComa Convert Csharp WSDL
 * @date 03/07/2012
 */
ini_set('display_errors',E_ALL);
require_once dirname(__FILE__) . '/ecocoma-convert-csharp/EccConvertCsharpAutoload.php';
/**
 * eCoComa Informations
 */
define('ECC_KEY_ID','CVT-T90970441J');
define('ECC_WSDL','http://service.ecocoma.com/convert/csharp.asmx?WSDL');
/**
 * init
 */
$wsdl = array(
			EccConvertCsharpWsdlClass::WSDL_URL=>ECC_WSDL);
$c = new EccConvertCsharpServiceGet($wsdl);
/**
 * Csharp
 */
$c->GetCsharp(new EccConvertCsharpTypeGetCsharp(ECC_KEY_ID,'','<?php if(true){return true;} ?>'));
print_r($c);
/**
 * VB
 */
$c->GetVB(new EccConvertCsharpTypeGetVB(ECC_KEY_ID,'','<?php if(true){return true;} ?>'));
print_r($c);
?>