<?php
/**
 * Test with CDYNE Email WSDL
 * @date 01/07/2012
 */
ini_set('display_errors',E_ALL);
require_once dirname(__FILE__) . '/cdyne-email/CdyneEmailAutoload.php';
/**
 * CDYNE Informations
 */
define('CDYNE_KEY',0);
define('CDYNE_WSDL','http://ws.cdyne.com/emailverify/Emailvernotestemail.asmx?wsdl');
/**
 * init
 */
$e = new CdyneEmailServiceVerify(array(
									CdyneEmailWsdlClass::WSDL_URL=>CDYNE_WSDL));
$e->VerifyEmail(new CdyneEmailTypeVerifyEmail('google@gmail.com',0));
print_r($e);
?>