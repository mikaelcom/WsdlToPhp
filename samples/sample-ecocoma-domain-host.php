<?php
/**
 * Test with eCoComa Domain Host
 * @date 03/07/2012
 */
ini_set('display_errors',E_ALL);
require_once dirname(__FILE__) . '/ecocoma-domain-host/EccDomainHostAutoload.php';
/**
 * eCoComa Informations
 */
define('ECC_KEY_ID','DOM-T90972994J');
define('ECC_WSDL','http://service.ecocoma.com/domain/host.asmx?WSDL');
/**
 * init
 */
$wsdl = array(
			EccDomainHostWsdlClass::WSDL_URL=>ECC_WSDL);
$d = new EccDomainHostServiceGet($wsdl);
$d->GetHostInfo(new EccDomainHostTypeGetHostInfo(ECC_KEY_ID,'','www.mikael-delsol.fr'));
print_r($d);
?>