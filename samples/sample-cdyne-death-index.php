<?php
/**
 * Test with CDYNE Death Index WSDL
 * @date 03/07/2012
 */
ini_set('display_errors',E_ALL);
require_once dirname(__FILE__) . '/cdyne-death-index/CdyneDeathIndexAutoload.php';
/**
 * CDYNE Informations
 */
define('CDYNE_KEY',0);
define('CDYNE_WSDL','http://di3.cdyne.com/DeathIndexService.svc?wsdl');
/**
 * Deceased
 */
$d = new CdyneDeathIndexServiceDeceased(array(
											CdyneDeathIndexWsdlClass::WSDL_URL=>CDYNE_WSDL));
$d->DeceasedBySSN(new CdyneDeathIndexTypeDeceasedBySSN(14357437454,CDYNE_KEY));
print_r($d);
?>