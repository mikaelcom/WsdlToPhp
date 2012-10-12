<?php
/**
 * Test with ScienceGovSearch
 * @date 13/10/2012
 */
ini_set('memory_limit','512M');
ini_set('display_errors', true);
/**
 * Load autoload
 */
require_once dirname(__FILE__) . '/ScienceGovSearchAutoload.php';
/**
 * ScienceGovSearch Informations
 */
define('SCIENCEGOVSEARCH_WSDL_URL','http://www.science.gov/strata_scigov/services/searchService.wsdl');
define('SCIENCEGOVSEARCH_USER_LOGIN','');
define('SCIENCEGOVSEARCH_USER_PASSWORD','');
/**
 * Wsdl instanciation infos
 */
$wsdl = array();
$wsdl[ScienceGovSearchWsdlClass::WSDL_URL] = SCIENCEGOVSEARCH_WSDL_URL;
$wsdl[ScienceGovSearchWsdlClass::WSDL_CACHE_WSDL] = WSDL_CACHE_NONE;
$wsdl[ScienceGovSearchWsdlClass::WSDL_TRACE] = true;
if(SCIENCEGOVSEARCH_USER_LOGIN !== '')
	$wsdl[ScienceGovSearchWsdlClass::WSDL_LOGIN] = SCIENCEGOVSEARCH_USER_LOGIN;
if(SCIENCEGOVSEARCH_USER_PASSWORD !== '')
	$wsdl[ScienceGovSearchWsdlClass::WSDL_PASSWD] = SCIENCEGOVSEARCH_USER_PASSWORD;
// etc....
/**
 * Examples
 */


/*******************************************
 * Example for ScienceGovSearchServiceSearch
 */
$ScienceGovSearchServiceSearch = new ScienceGovSearchServiceSearch($wsdl);
// sample call for ScienceGovSearchServiceSearch::search()
if($ScienceGovSearchServiceSearch->search(new ScienceGovSearchTypeSearchRequest(/*** update parameters list ***/)))
	print_r($ScienceGovSearchServiceSearch->getResult());
else
	print_r($this->getLastError());

/*********************************************
 * Example for ScienceGovSearchServiceRetrieve
 */
$ScienceGovSearchServiceRetrieve = new ScienceGovSearchServiceRetrieve($wsdl);
// sample call for ScienceGovSearchServiceRetrieve::retrieve()
if($ScienceGovSearchServiceRetrieve->retrieve(new ScienceGovSearchTypeRetrieveRequest(/*** update parameters list ***/)))
	print_r($ScienceGovSearchServiceRetrieve->getResult());
else
	print_r($this->getLastError());
// sample call for ScienceGovSearchServiceRetrieve::retrieveFreeFormResults()
if($ScienceGovSearchServiceRetrieve->retrieveFreeFormResults(new ScienceGovSearchTypeRetrieveFreeFormRequest(/*** update parameters list ***/)))
	print_r($ScienceGovSearchServiceRetrieve->getResult());
else
	print_r($this->getLastError());
// sample call for ScienceGovSearchServiceRetrieve::retrieveIncrementalResults()
if($ScienceGovSearchServiceRetrieve->retrieveIncrementalResults(new ScienceGovSearchTypeRetrieveIncrementalResultsRequest(/*** update parameters list ***/)))
	print_r($ScienceGovSearchServiceRetrieve->getResult());
else
	print_r($this->getLastError());
// sample call for ScienceGovSearchServiceRetrieve::retrieveSavedSearch()
if($ScienceGovSearchServiceRetrieve->retrieveSavedSearch(new ScienceGovSearchTypeRetrieveSavedSearchRequest(/*** update parameters list ***/)))
	print_r($ScienceGovSearchServiceRetrieve->getResult());
else
	print_r($this->getLastError());
// sample call for ScienceGovSearchServiceRetrieve::retrieveForCluster()
if($ScienceGovSearchServiceRetrieve->retrieveForCluster(new ScienceGovSearchTypeClusterRetrieveRequest(/*** update parameters list ***/)))
	print_r($ScienceGovSearchServiceRetrieve->getResult());
else
	print_r($this->getLastError());

/****************************************
 * Example for ScienceGovSearchServiceGet
 */
$ScienceGovSearchServiceGet = new ScienceGovSearchServiceGet($wsdl);
// sample call for ScienceGovSearchServiceGet::getSearchStatus()
if($ScienceGovSearchServiceGet->getSearchStatus(new ScienceGovSearchTypeGetSearchStatusRequest(/*** update parameters list ***/)))
	print_r($ScienceGovSearchServiceGet->getResult());
else
	print_r($this->getLastError());
// sample call for ScienceGovSearchServiceGet::getSavedSearches()
if($ScienceGovSearchServiceGet->getSavedSearches(new ScienceGovSearchTypeGetSavedSearchesRequest(/*** update parameters list ***/)))
	print_r($ScienceGovSearchServiceGet->getResult());
else
	print_r($this->getLastError());
// sample call for ScienceGovSearchServiceGet::getClusters()
if($ScienceGovSearchServiceGet->getClusters(new ScienceGovSearchTypeClusterRequest(/*** update parameters list ***/)))
	print_r($ScienceGovSearchServiceGet->getResult());
else
	print_r($this->getLastError());
// sample call for ScienceGovSearchServiceGet::getResultByResultId()
if($ScienceGovSearchServiceGet->getResultByResultId(new ScienceGovSearchTypeGetResultByResultIdRequest(/*** update parameters list ***/)))
	print_r($ScienceGovSearchServiceGet->getResult());
else
	print_r($this->getLastError());
// sample call for ScienceGovSearchServiceGet::getResultAsCitation()
if($ScienceGovSearchServiceGet->getResultAsCitation(new ScienceGovSearchTypeGetResultAsCitationRequest(/*** update parameters list ***/)))
	print_r($ScienceGovSearchServiceGet->getResult());
else
	print_r($this->getLastError());

/*****************************************
 * Example for ScienceGovSearchServiceSave
 */
$ScienceGovSearchServiceSave = new ScienceGovSearchServiceSave($wsdl);
// sample call for ScienceGovSearchServiceSave::saveSearch()
if($ScienceGovSearchServiceSave->saveSearch(new ScienceGovSearchTypeSaveSearchRequest(/*** update parameters list ***/)))
	print_r($ScienceGovSearchServiceSave->getResult());
else
	print_r($this->getLastError());

/*******************************************
 * Example for ScienceGovSearchServiceDelete
 */
$ScienceGovSearchServiceDelete = new ScienceGovSearchServiceDelete($wsdl);
// sample call for ScienceGovSearchServiceDelete::deleteSavedSearch()
if($ScienceGovSearchServiceDelete->deleteSavedSearch(new ScienceGovSearchTypeDeleteSavedSearchRequest(/*** update parameters list ***/)))
	print_r($ScienceGovSearchServiceDelete->getResult());
else
	print_r($this->getLastError());

/*******************************************
 * Example for ScienceGovSearchServiceUpdate
 */
$ScienceGovSearchServiceUpdate = new ScienceGovSearchServiceUpdate($wsdl);
// sample call for ScienceGovSearchServiceUpdate::updateSavedSearch()
if($ScienceGovSearchServiceUpdate->updateSavedSearch(new ScienceGovSearchTypeUpdateSavedSearchRequest(/*** update parameters list ***/)))
	print_r($ScienceGovSearchServiceUpdate->getResult());
else
	print_r($this->getLastError());

/*******************************************
 * Example for ScienceGovSearchServiceCreate
 */
$ScienceGovSearchServiceCreate = new ScienceGovSearchServiceCreate($wsdl);
// sample call for ScienceGovSearchServiceCreate::createSnapshot()
if($ScienceGovSearchServiceCreate->createSnapshot(new ScienceGovSearchTypeCreateSnapshotRequest(/*** update parameters list ***/)))
	print_r($ScienceGovSearchServiceCreate->getResult());
else
	print_r($this->getLastError());

/*********************************************
 * Example for ScienceGovSearchServiceContinue
 */
$ScienceGovSearchServiceContinue = new ScienceGovSearchServiceContinue($wsdl);
// sample call for ScienceGovSearchServiceContinue::continueSearch()
if($ScienceGovSearchServiceContinue->continueSearch(new ScienceGovSearchTypeContinueSearchRequest(/*** update parameters list ***/)))
	print_r($ScienceGovSearchServiceContinue->getResult());
else
	print_r($this->getLastError());

/*********************************************
 * Example for ScienceGovSearchServiceEstimate
 */
$ScienceGovSearchServiceEstimate = new ScienceGovSearchServiceEstimate($wsdl);
// sample call for ScienceGovSearchServiceEstimate::estimateSearchTime()
if($ScienceGovSearchServiceEstimate->estimateSearchTime(new ScienceGovSearchTypeEstimateSearchTimeRequest(/*** update parameters list ***/)))
	print_r($ScienceGovSearchServiceEstimate->getResult());
else
	print_r($this->getLastError());
?>