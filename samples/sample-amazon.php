<?php
/**
 * Test with Amazon Service WSDL
 * @date 10/07/2012
 */
ini_set('display_errors',E_ALL);
$services = array(
				'http://webservices.amazon.com/AWSECommerceService/AWSECommerceService.wsdl',
				'http://s3.amazonaws.com/ec2-downloads/ec2.wsdl',
				'http://elasticloadbalancing.amazonaws.com/doc/2012-06-01/ElasticLoadBalancing.wsdl',
				'http://sdb.amazonaws.com/doc/2009-04-15/AmazonSimpleDB.wsdl',
				'https://fps.amazonaws.com/doc/2010-08-28/AmazonFPS.wsdl',
				'https://ls.amazonaws.com/doc/2008-04-28/AmazonLS.wsdl',
				'http://soap.amazon.com/schemas2/AmazonWebServices.wsdl',
				'http://queue.amazonaws.com/doc/2011-10-01/QueueService.wsdl',
				'http://awis.amazonaws.com/doc/2005-07-11/AWSAlexa.wsdl');
foreach($services as $serviceUrl)
{
	$pathinfo = pathinfo($serviceUrl);
	$serviceName = str_replace('.wsdl','',$pathinfo['basename']);
	$serviceName = str_replace(array(
									'Amazon',
									'AWS'),'',$serviceName);
	require_once dirname(__FILE__) . '/amazon-' . strtolower($serviceName) . '/Amazon' . ucfirst($serviceName) . 'Autoload.php';
}
?>