<?php
/**
 * Test with eCoComa Convert UnixTimeStamp WSDL
 * @date 03/07/2012
 */
ini_set('display_errors',E_ALL);
require_once dirname(__FILE__) . '/ecocoma-convert-unixtimestamp/EccConvertUnixTmpAutoload.php';
/**
 * eCoComa Informations
 */
define('ECC_KEY_ID','CVT-T90970441J');
define('ECC_WSDL','http://service.ecocoma.com/convert/unixtimestamp.asmx?WSDL');
/**
 * init
 */
$wsdl = array(
			EccConvertUnixTmpWsdlClass::WSDL_URL=>ECC_WSDL);
$c = new EccConvertUnixTmpServiceGet($wsdl);
/**
 * UnixTmp
 */
$c->GetUnixTime(new EccConvertUnixTmpTypeGetUnixTime(ECC_KEY_ID,'','2012-07-03 22:09:07'));
print_r($c);
/**
 * System time
 */
$c->GetSystemTime(new EccConvertUnixTmpTypeGetSystemTime(ECC_KEY_ID,'',time()));
print_r($c);
?>