<?php
/**
 * Test with Microsoft Research WSDL
 * @date 05/07/2012
 */
ini_set('display_errors',E_ALL);
require_once dirname(__FILE__) . '/microsoft-research/MicrosoftResearchAutoload.php';
/**
 * MS Research Informations
 */
define('MSRESEARCH_WSDL','http://office.microsoft.com/Research/query.asmx?WSDL');
$wsdl = array(
			MicrosoftResearchWsdlClass::WSDL_URL=>MSRESEARCH_WSDL);
/**
 * Status
 */
$m = new MicrosoftResearchServiceStatus($wsdl);
$m->Status(new MicrosoftResearchTypeStatus());
print_r($m);
/**
 * Query
 */
$q = new MicrosoftResearchServiceQuery($wsdl);
$q->Query(new MicrosoftResearchTypeQuery(''));
print_r($q);
/**
 * Discovery
 */
$d = new MicrosoftResearchServiceDiscovery($wsdl);
$d->Discovery(new MicrosoftResearchTypeDiscovery(''));
print_r($d);
/**
 * Discovery
 */
$r = new MicrosoftResearchServiceRegistration($wsdl);
$r->Registration(new MicrosoftResearchTypeRegistration(''));
print_r($r);
?>