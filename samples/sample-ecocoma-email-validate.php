<?php
/**
 * Test with eCoComa Email Validate
 * @date 03/07/2012
 */
ini_set('display_errors',E_ALL);
require_once dirname(__FILE__) . '/ecocoma-email-validate/EccEmailValidateAutoload.php';
/**
 * eCoComa Informations
 */
define('ECC_KEY_ID','EML-T90981763J');
define('ECC_WSDL','http://service.ecocoma.com/email/validate.asmx?WSDL');
/**
 * init
 */
$wsdl = array(
			EccEmailValidateWsdlClass::WSDL_URL=>ECC_WSDL);
$e = new EccEmailValidateServiceValidate($wsdl);
$e->ValidateEmail(new EccEmailValidateTypeValidateEmail(ECC_KEY_ID,'','contact@google.com'));
print_r($e);
?>