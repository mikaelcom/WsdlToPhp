<?php
/**
 * Test with DirectSmile WSDL
 * @date 02/08/2012
 */
ini_set('display_errors',E_ALL);

require_once dirname(__FILE__) . '/directsmile/DirectSmileAutoload.php';
/**
 * DirectSmile Informations
 */
define('DIRECTSMILE_WSDL','http://dsmo.directsmile.de/dsmo/lb.asmx?WSDL');
define('DIRECTSMILE_USER','Help');
define('DIRECTSMILE_PASS','help');
define('DIRECTSMILE_LANG','en');
/**
 * init
*/
$wsdl = array(
		DirectSmileWsdlClass::WSDL_URL=>DIRECTSMILE_WSDL);
$d = new DirectSmileServiceAuthenticate($wsdl);
$d->Authenticate(new DirectSmileTypeAuthenticate(DIRECTSMILE_USER,DIRECTSMILE_PASS,DIRECTSMILE_LANG));
echo "\r\nAuthentication : ".($authentication = $d->getResult()->getAuthenticateResult())."\r\n";
/**
 * GetAuthenticationCode
 */
$d = new DirectSmileServiceGet($wsdl);
$d->GetAuthenticationCode(new DirectSmileTypeGetAuthenticationCode(DIRECTSMILE_USER,DIRECTSMILE_PASS));
print_r($d);
/**
 * GetGeneratorSystemInfo
 */
$d->GetGeneratorSystemInfo(new DirectSmileTypeGetGeneratorSystemInfo());
print_r($d);
?>