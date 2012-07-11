<?php
/**
 * Test with CDYNE Ip2Geo WSDL
 * @date 01/07/2012
 */
ini_set('display_errors',E_ALL);
require_once dirname(__FILE__) . '/cdyne-ip2geo/CdyneIp2geoAutoload.php';
/**
 * CDYNE Informations
 */
define('CDYNE_KEY',0);
define('CDYNE_WSDL','http://ws.cdyne.com/ip2geo/ip2geo.asmx?wsdl');
/**
 * init
 */
$c = new CdyneIp2geoServiceResolve(array(
										CdyneIp2geoWsdlClass::WSDL_URL=>CDYNE_WSDL));
$c->ResolveIP(new CdyneIp2geoTypeResolveIP($_SERVER['REMOTE_ADDR'],CDYNE_KEY));
print_r($c->getResult()->getResolveIPResult());
?>