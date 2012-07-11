<?php
/**
 * Test with ServiceObjects GeoCensus WSDL
 * @date 06/07/2012
 */
ini_set('display_errors',E_ALL);
require_once dirname(__FILE__) . '/serviceobjects-geocensus/SOGeoCensusAutoload.php';
/**
 * ServiceObjects Informations
 */
define('SO_KEY','WS22-UWQ4-KHI1');
define('SO_WSDL','http://trial.serviceobjects.com/gce/GeoCensus.asmx?WSDL');
/**
 * init
 */
$wsdl = array(
			SOGeoCensusWsdlClass::WSDL_URL=>SO_WSDL);
$g = new SOGeoCensusServiceGet($wsdl);
/**
 * Profil
 */
$g->GetLocalAreaProfileByZip(new SOGeoCensusTypeGetLocalAreaProfileByZip(10025,SO_KEY));
print_r($g);
/**
 * Profil
 */
$g->GetLocalAreaIncomeByZip(new SOGeoCensusTypeGetLocalAreaIncomeByZip(10025,SO_KEY));
print_r($g);
?>