<?php
/**
 * Test with ServiceObjects NCOA WSDL
 * @date 06/07/2012
 */
ini_set('display_errors',E_ALL);
require_once dirname(__FILE__) . '/serviceobjects-ncoa-live/SONcoaLiveAutoload.php';
/**
 * ServiceObjects Informations
 */
define('SO_KEY','WS53-GBC2-XUO5');
define('SO_WSDL','http://trial.serviceobjects.com/nl/NCOALive.asmx?WSDL');
/**
 * init
 */
$wsdl = array(
			SONcoaLiveWsdlClass::WSDL_URL=>SO_WSDL);
$g = new SONcoaLiveServiceGet($wsdl);
/**
 * Demographics
 */
$g->GetNCOALinkSummaryReport(new SONcoaLiveTypeGetNCOALinkSummaryReport(2121,SO_KEY));
print_r($g);
?>