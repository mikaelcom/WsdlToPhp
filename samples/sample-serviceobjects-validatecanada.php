<?php
/**
 * Test with ServiceObjects ValidateCanada WSDL
 * @date 05/07/2012
 */
ini_set('display_errors',E_ALL);
require_once dirname(__FILE__) . '/serviceobjects-validatecanada/SOValidateCanadaAutoload.php';
/**
 * ServiceObjects Informations
 */
define('SO_KEY','**************');
define('SO_WSDL','http://trial.serviceobjects.com/avca/ValidateCanada.asmx?WSDL');
/**
 * init
 */
$wsdl = array(
			SOValidateCanadaWsdlClass::WSDL_URL=>SO_WSDL);
/**
 * Possible Matches
 */
$c = new SOValidateCanadaServiceValidate($wsdl);
$c->ValidateCanadianAddress(new SOValidateCanadaTypeValidateCanadianAddress('1 East 23rd Street','','New York','NY','10010',SO_KEY));
print_r($c);
?>