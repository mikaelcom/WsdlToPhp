<?php
/**
 * Test with CDYNE Phone Verify WSDL
 * @date 03/07/2012
 */
ini_set('display_errors',E_ALL);
require_once dirname(__FILE__) . '/cdyne-phone-verify/CdynePhoneVerifyAutoload.php';
/**
 * CDYNE Informations
 */
define('CDYNE_KEY',0);
define('CDYNE_WSDL','http://ws.cdyne.com/phoneverify/phoneverify.asmx?WSDL');
/**
 * License
 */
$p = new CdynePhoneVerifyServiceCheck(array(
											CdynePhoneVerifyWsdlClass::WSDL_URL=>CDYNE_WSDL));
$p->CheckPhoneNumber(new CdynePhoneVerifyTypeCheckPhoneNumber('+33(0)556080956',CDYNE_KEY));
print_r($p);
?>