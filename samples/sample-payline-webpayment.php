<?php
/**
 * Test with Payline Webpayment Service WSDL
 * @date 10/07/2012
 */
ini_set('display_errors',E_ALL);
require_once dirname(__FILE__) . '/payline-webpayment/PaylineWebPaymentAppAutoload.php';
/**
 * Payline Informations
 */
define('PAYLINE_WSDL','http://www.payline.com/wsdl/v4_0/homologation/WebPaymentAPI.wsdl');
/**
 * init
 */
$wsdl = array(
			PaylineWebPaymentWsdlClass::WSDL_URL=>PAYLINE_WSDL);
$p = new PaylineWebPaymentServiceGet($wsdl);
$p->getWebWallet(new PaylineWebPaymentTypeGetWebWalletRequest());
print_r($p);
?>