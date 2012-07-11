<?php
/**
 * Test with PayPal Invoice WSDL
 * @date 01/07/2012
 */
ini_set('display_errors',E_ALL);
require_once dirname(__FILE__) . '/paypal-invoice/PPInvoiceAutoload.php';
/**
 * PayPal Invoice informations
 */
define('PAYPAL_WSDL','https://svcs.paypal.com/Invoice?WSDL');
define('PAYPAL_PASSWD','*********');
define('PAYPAL_APPID','APP-*****************');
/**
 * init
 */
$wsdl = array(
			PPInvoiceWsdlClass::WSDL_URL=>PAYPAL_WSDL);
$p = new PPInvoiceServiceGet($wsdl);
$p->GetInvoiceDetails(new PPInvoiceTypeGetInvoiceDetailsRequest(null,null));
print_r($p);
?>