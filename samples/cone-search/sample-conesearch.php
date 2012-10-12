<?php
/**
 * Test with ConeSearch
 * @date 13/10/2012
 */
ini_set('memory_limit','512M');
ini_set('display_errors', true);
/**
 * Load autoload
 */
require_once dirname(__FILE__) . '/ConeSearchAutoload.php';
/**
 * ConeSearch Informations
 */
define('CONESEARCH_WSDL_URL','http://skyserver.sdss.org/vo/dr2cone/sdssconesearch.asmx?WSDL');
define('CONESEARCH_USER_LOGIN','');
define('CONESEARCH_USER_PASSWORD','');
/**
 * Wsdl instanciation infos
 */
$wsdl = array();
$wsdl[ConeSearchWsdlClass::WSDL_URL] = CONESEARCH_WSDL_URL;
$wsdl[ConeSearchWsdlClass::WSDL_CACHE_WSDL] = WSDL_CACHE_NONE;
$wsdl[ConeSearchWsdlClass::WSDL_TRACE] = true;
if(CONESEARCH_USER_LOGIN !== '')
	$wsdl[ConeSearchWsdlClass::WSDL_LOGIN] = CONESEARCH_USER_LOGIN;
if(CONESEARCH_USER_PASSWORD !== '')
	$wsdl[ConeSearchWsdlClass::WSDL_PASSWD] = CONESEARCH_USER_PASSWORD;
// etc....
/**
 * Examples
 */


/****************************************
 * Example for ConeSearchServiceRevisions
 */
$ConeSearchServiceRevisions = new ConeSearchServiceRevisions($wsdl);
// sample call for ConeSearchServiceRevisions::Revisions()
if($ConeSearchServiceRevisions->Revisions(new ConeSearchTypeRevisions(/*** update parameters list ***/)))
	print_r($ConeSearchServiceRevisions->getResult());
else
	print_r($this->getLastError());

/***********************************
 * Example for ConeSearchServiceCone
 */
$ConeSearchServiceCone = new ConeSearchServiceCone($wsdl);
// sample call for ConeSearchServiceCone::ConeSearch()
if($ConeSearchServiceCone->ConeSearch(new ConeSearchTypeConeSearch(/*** update parameters list ***/)))
	print_r($ConeSearchServiceCone->getResult());
else
	print_r($this->getLastError());
?>