<?php
/**
 * Test with seismicportal Quakeml Service WSDL
 * @date 10/07/2012
 */
ini_set('display_errors',E_ALL);
require_once dirname(__FILE__) . '/seismicportal-quakeml/QuakemlAutoload.php';
/**
 * seismicportal Informations
 */
define('SEISMIC_WSDL','http://www.seismicportal.eu/services/ws/quakeml?wsdl');
/**
 * init
 */
$wsdl = array(
			QuakemlWsdlClass::WSDL_URL=>SEISMIC_WSDL);
/**
 * Events
 */
$q = new QuakemlServiceEvents($wsdl);
$q->events(new QuakemlTypeEvents(null,time() - 3600 * 24 * 365,time()));
print_r($q);
/**
 * Latest
 */
$l = new QuakemlServiceLatest($wsdl);
$l->latestEvents(new QuakemlTypeLatestEvents());
print_r($l);
?>