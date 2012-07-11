<?php
/**
 * Test with eBay Shopping Service
 * https://www.x.com/developers/ebay/php-perl-and-python-developer-center
 * @date 05/07/2012
 */
ini_set('display_errors',E_ALL);
require_once dirname(__FILE__) . '/ebay-shopping/EbayShoppingAutoload.php';
/**
 * eBey Informations
 */
define('EBAY_WSDL','http://developer.ebay.com/webservices/latest/ShoppingService.wsdl');
define('EBAY_APPNAME','************************************');
/**
 * header
 */
$ebayHeaders = array(
					'X-EBAY-SOA-MESSAGE-PROTOCOL:SOAP12',
					'X-EBAY-SOA-SERVICE-NAME:ShoppingService',
					'X-EBAY-SOA-SERVICE-VERSION:713',
					'X-EBAY-SOA-GLOBAL-ID:EBAY-US',
					'X-EBAY-SOA-SECURITY-APPNAME:' . EBAY_APPNAME,
					'X-EBAY-SOA-REQUEST-DATA-FORMAT:XML',
					'X-EBAY-SOA-RESPONSE-DATA-FORMAT:XML',
					'X-EBAY-SOA-OPERATION-NAME:GetSingleItem');
$streamContextOptions = array();
$streamContextOptions['http'] = array();
$streamContextOptions['http']['method'] = 'POST';
$streamContextOptions['http']['header'] = implode("\r\n",$ebayHeaders);
$streamContext = stream_context_create($streamContextOptions);
/**
 * Init 
 */
$wsdl = array(
			EbayShoppingWsdlClass::WSDL_URL=>EBAY_WSDL,
			EbayShoppingWsdlClass::WSDL_STREAM_CONTEXT=>$streamContext);
$e = new EbayShoppingServiceGet($wsdl);
$e->GetSingleItem(new EbayShoppingTypeGetSingleItemRequestType(885909467181));
print_r($e);
?>