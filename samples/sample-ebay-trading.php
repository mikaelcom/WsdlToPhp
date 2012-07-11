<?php
/**
 * Test with eBay Trading Service
 * https://www.x.com/developers/ebay/php-perl-and-python-developer-center
 * @date 04/07/2012
 */
ini_set('display_errors',E_ALL);
require_once dirname(__FILE__) . '/ebay-trading/EbayTradingAutoload.php';
/**
 * eBay Informations
 */
define('EBAY_WSDL','http://developer.ebay.com/webservices/latest/ebaySvc.wsdl');
define('EBAY_APPNAME','************************************');
define('EBAY_TOKEN','********************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************');
/**
 * header
 */
$ebayHeaders = array(
					'X-EBAY-SOA-MESSAGE-PROTOCOL:SOAP12',
					'X-EBAY-SOA-SERVICE-NAME:TradingingService',
					'X-EBAY-SOA-SERVICE-VERSION:1.12.0',
					'X-EBAY-SOA-GLOBAL-ID:EBAY-US',
					'X-EBAY-SOA-SECURITY-APPNAME:' . EBAY_APPNAME,
					'X-EBAY-SOA-REQUEST-DATA-FORMAT:XML',
					'X-EBAY-SOA-RESPONSE-DATA-FORMAT:XML',
					'X-EBAY-SOA-OPERATION-NAME:findItemsByCategory');
$streamContextOptions = array();
$streamContextOptions['http'] = array();
$streamContextOptions['http']['method'] = 'POST';
$streamContextOptions['http']['header'] = implode("\r\n",$ebayHeaders);
$streamContext = stream_context_create($streamContextOptions);
/**
 * Init 
 */
$header = new SoapHeader('ebl:RequesterCredentials','eBayAuthToken',EBAY_TOKEN,false);
$wsdl = array(
			EbayTradingWsdlClass::WSDL_URL=>EBAY_WSDL,
			EbayTradingWsdlClass::WSDL_STREAM_CONTEXT=>$streamContext);
$e = new EbayTradingServiceGet($wsdl);
EbayTradingWsdlClass::getSoapClient()->__setSoapHeaders($header);
$e->GetCategories(new EbayTradingTypeGetCategoriesRequestType(1574));
print_r(EbayTradingWsdlClass::getSoapClient());
?>