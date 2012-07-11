<?php
/**
 * Test with Microsoft Translator WSDL
 * @date 05/07/2012
 */
ini_set('display_errors',E_ALL);
require_once dirname(__FILE__) . '/microsoft-translator/MicrosoftTranslatorAutoload.php';
/**
 * MS Translator Informations
 */
define('MSTRANSLATOR_WSDL','http://api.microsofttranslator.com/V2/Soap.svc');
define('MS_KEY','**********************************************');
$wsdl = array(
			MicrosoftTranslatorWsdlClass::WSDL_URL=>MSTRANSLATOR_WSDL);
/**
 * Translate
 */
$t = new MicrosoftTranslatorServiceTranslate($wsdl);
$t->Translate(new MicrosoftTranslatorTypeTranslate(MS_KEY,'Bonjour, comment vous appelez-vous ?','fr','en'));
print_r($t);
?>