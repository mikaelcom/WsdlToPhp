<?php
/**
 * Test with eCoComa Convert Unicode WSDL
 * @date 03/07/2012
 */
ini_set('display_errors',E_ALL);
require_once dirname(__FILE__) . '/ecocoma-convert-unicode/EccConvertUnicAutoload.php';
/**
 * eCoComa Informations
 */
define('ECC_KEY_ID','CVT-T90970441J');
define('ECC_WSDL','http://service.ecocoma.com/convert/unicode.asmx?WSDL');
/**
 * init
 */
$wsdl = array(
			EccConvertUnicWsdlClass::WSDL_URL=>ECC_WSDL);
$c = new EccConvertUnicServiceGet($wsdl);
/**
 * Unicode
 */
$c->GetUnicode(new EccConvertUnicTypeGetUnicode(ECC_KEY_ID,'','TExte Français accentué !'));
print_r($c);
/**
 * UTF8
 */
$c->GetUtf8(new EccConvertUnicTypeGetUtf8(ECC_KEY_ID,'','TExte Français accentué !'));
print_r($c);
?>