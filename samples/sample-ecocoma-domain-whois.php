<?php
/**
 * Test with eCoComa Domain Whois
 * @date 03/07/2012
 */
ini_set('display_errors',E_ALL);
require_once dirname(__FILE__) . '/ecocoma-domain-whois/EccDomainWhoisAutoload.php';
/**
 * eCoComa Informations
 */
define('ECC_KEY_ID','DOM-T90972994J');
define('ECC_WSDL','http://service.ecocoma.com/domain/whois.asmx?WSDL');
/**
 * init
 */
$wsdl = array(
			EccDomainWhoisWsdlClass::WSDL_URL=>ECC_WSDL);
$d = new EccDomainWhoisServiceGet($wsdl);
$d->GetWhois(new EccDomainWhoisTypeGetWhois(ECC_KEY_ID,'','www.ecocoma.com'));
print_r($d);
?>