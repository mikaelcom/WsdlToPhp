<?php
/**
 * Test with eCoComa Email Pop3
 * @date 03/07/2012
 */
ini_set('display_errors',E_ALL);
require_once dirname(__FILE__) . '/ecocoma-email-pop3/EccEmailPop3Autoload.php';
/**
 * eCoComa Informations
 */
define('ECC_KEY_ID','EML-T90981763J');
define('ECC_WSDL','http://service.ecocoma.com/email/pop3.asmx?WSDL');
/**
 * init
 */
$wsdl = array(
			EccEmailPop3WsdlClass::WSDL_URL=>ECC_WSDL);
$e = new EccEmailPop3ServiceCheck($wsdl);
$e->CheckPOP3(new EccEmailPop3TypeCheckPOP3(ECC_KEY_ID,'','gmail.com'));
print_r($e);
?>