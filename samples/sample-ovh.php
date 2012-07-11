<?php
/**
 * Test with OVH WSDL
 * @date 01/07/2012
 */
ini_set('memory_limit','512M');
/**
 * Load autoload
 */
require_once dirname(__FILE__) . '/ovh/OvhAutoload.php';
/**
 * OVH Informations
 */
define('OVH_USERNAME','*******-OVH');
define('OVH_PASSWORD','*******');
define('OVH_LANGUAGE','fr');
define('OVH_WSDL','http://www.ovh.com/soapi/soapi-re-1.39.wsdl');
/**
 * Init session
 */
session_start();
if(!array_key_exists('ovh_session_id',$_SESSION))
{
	$login = new OvhServiceLogin(array(
									OvhServiceLogin::WSDL_URL=>OVH_WSDL));
	$login->login(new OvhTypeLogin(OVH_USERNAME,OVH_PASSWORD,OVH_LANGUAGE,false));
	echo "<br />Session id : " . $login->getResult()->getReturn();
	$_SESSION['ovh_session_id'] = $login->getResult()->getReturn();
}
else
{
	$d = new OvhServiceDomain(array(
									OvhServiceLogin::WSDL_URL=>OVH_WSDL));
	if($r = $d->domainList(new OvhTypeDomainList($_SESSION['ovh_session_id'])))
	{
		$r->getReturn()->initInternArrayToIterate();
		while($r->getReturn()->valid())
		{
			echo '<br />' . $r->getReturn()->current();
			$r->getReturn()->next();
		}
	}
	else
		print_r($d->getLastError());
}
?>