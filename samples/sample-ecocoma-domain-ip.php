<?php
/**
 * Test with eCoComa Domain Ip
 * @date 03/07/2012
 */
ini_set('display_errors',E_ALL);
require_once dirname(__FILE__) . '/ecocoma-domain-ip/EccDomainIpAutoload.php';
/**
 * eCoComa Informations
 */
define('ECC_KEY_ID','DOM-T90972994J');
define('ECC_WSDL','http://service.ecocoma.com/domain/ip.asmx?WSDL');
/**
 * init
 */
$wsdl = array(
			EccDomainIpWsdlClass::WSDL_URL=>ECC_WSDL);
$d = new EccDomainIpServiceGet($wsdl);
$d->GetURL(New EccDomainIpTypeGetURL(ECC_KEY_ID,'','216.117.130.117'));
print_r($d);
?>