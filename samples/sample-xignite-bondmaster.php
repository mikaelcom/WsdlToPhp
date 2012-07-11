<?php
/**
 * Test with Xignite BondMaster WSDL
 * @date 05/07/2012
 */
ini_set('display_errors',E_ALL);
require_once dirname(__FILE__) . '/xignite-bondmaster/XiBondMasterAutoload.php';
/**
 * Xignite Informations
 */
define('XI_WSDL','http://bondmaster.xignite.com/xBondMaster.asmx?WSDL');
define('XI_LOGIN','delsol.mikael@gmail.com');
define('XI_PASSWD','losled@m9');
/**
 * init
 */
$wsdl = array(
			XiBondMasterWsdlClass::WSDL_URL=>XI_WSDL);
$h = new SoapHeader('http://www.xignite.com/services/','Header',array(
																	"Username"=>XI_LOGIN,
																	"Password"=>XI_PASSWD));
$x = new XiBondMasterServiceGet($wsdl);
XiBondMasterWsdlClass::getSoapClient()->__setSoapHeaders($h);
$x->GetBondDescription(new XiBondMasterTypeGetBondDescription(4246324,XiBondMasterTypeIdentifierTypes::VALUE_VALOREN));
print_r($x);
?>