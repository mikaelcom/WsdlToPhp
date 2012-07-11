<?php
/**
 * Test with eCoComa Convert Chinese WSDL
 * @date 03/07/2012
 */
ini_set('display_errors',E_ALL);
require_once dirname(__FILE__) . '/ecocoma-convert-chinese/EccConvertChineseAutoload.php';
/**
 * eCoComa Informations
 */
define('ECC_KEY_ID','CVT-T90970441J');
define('ECC_WSDL','http://service.ecocoma.com/convert/chinese.asmx?WSDL');
/**
 * init
 */
$wsdl = array(
			EccConvertChineseWsdlClass::WSDL_URL=>ECC_WSDL);
$c = new EccConvertChineseServiceGet($wsdl);
/**
 * Chinese
 */
$c->GetSimplifiedChinese(new EccConvertChineseTypeGetSimplifiedChinese(ECC_KEY_ID,'','我的英語是不錯的！'));
print_r($c);
?>