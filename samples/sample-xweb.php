<?php
/**
 * Test with Xweb Checkout WSDL
 * @date 09/07/2012
 */
ini_set('display_errors',E_ALL);
$services = array(
				'http://ws.xwebservices.com/XWebEmailValidation/V2/XWebEmailValidation.wsdl',
				'http://ws.xwebservices.com/XWeb1003/V2.1/XWeb1003.wsdl',
				'http://ws.xwebservices.com/XWebACHDirectory/V1/XWebACHDirectory.wsdl',
				'http://ws.xwebservices.com/XWebCheckOut/V2/XWebCheckOut.wsdl',
				'http://ws.xwebservices.com/XWebTD/V1/Availability.wsdl',
				'http://ws.xwebservices.com/XWebTD/V1/PriceAvailability.wsdl',
				'http://ws.xwebservices.com/XWebTD/V1/Order.wsdl',
				'http://ws.xwebservices.com/XWebTD/V1/OrderStatus.wsdl',
				'http://ws.xwebservices.com/XWebTD/V1/ShipVia.wsdl',
				'http://ws.xwebservices.com/XWebTD/V1/PriceList.wsdl',
				'http://ws.xwebservices.com/XWebTD/V1/InvoiceDetailByPO.wsdl',
				'http://ws.xwebservices.com/XWebBlog/V2/XWebBlog.wsdl',
				'http://ws.xwebservices.com/XWebFAQs/V2/XWebFAQs.wsdl',
				'http://ws.xwebservices.com/XWebForum/V2/XWebForum.wsdl',
				'http://ws.xwebservices.com/XWebNews/V2/XWebNews.wsdl',
				'http://ws.xwebservices.com/XWebSurvey/V2/XWebSurvey.wsdl',
				'http://ws.xwebservices.com/XWebLead/V2/XWebLead.wsdl');
foreach($services as $serviceUrl)
{
	$pathinfo = pathinfo($serviceUrl);
	$serviceName = str_replace('.wsdl','',$pathinfo['basename']);
	if(strpos($serviceName,'XWeb') === false)
		$serviceName = 'XWeb' . $serviceName;
	require_once dirname(__FILE__) . '/xweb-' . strtolower(str_replace('XWeb','',$serviceName)) . '/XWeb' . str_replace('XWeb','',$serviceName) . 'Autoload.php';
}
/**
 * Xweb Informations
 */
define('XWEB_WSDL','http://ws.xwebservices.com/XWeb1003/V2.1/XWeb1003.wsdl');
/**
 * init
 */
$wsdl = array(
			XWebOrderStatusWsdlClass::WSDL_URL=>XWEB_WSDL);
$o = new XWeb1003ServiceGet($wsdl);
$o->GetMISMOApplication(new XWeb1003TypeGetMISMOApplicationRequest(153748));
print_r($o);
?>