<?php
/**
 * Class file for ScienceGovSearchServiceRetrieve
 * @date 13/10/2012
 */
/**
 * Class ScienceGovSearchServiceRetrieve
 * @date 13/10/2012
 */
class ScienceGovSearchServiceRetrieve extends ScienceGovSearchWsdlClass
{
	/**
	 * Method to call retrieve
	 * Meta informations :
	 * 	- documentation : Returns a range of results for a specfic search
	 * @uses ScienceGovSearchWsdlClass::getSoapClient()
	 * @uses ScienceGovSearchWsdlClass::setResult()
	 * @uses ScienceGovSearchWsdlClass::getResult()
	 * @uses ScienceGovSearchWsdlClass::saveLastError()
	 * @uses ScienceGovSearchTypeRetrieveRequest::getSearchId()
	 * @uses ScienceGovSearchTypeRetrieveRequest::getStartPosition()
	 * @uses ScienceGovSearchTypeRetrieveRequest::getMaxResults()
	 * @uses ScienceGovSearchTypeRetrieveRequest::getCollectionCodes()
	 * @uses ScienceGovSearchTypeRetrieveRequest::getFilters()
	 * @uses ScienceGovSearchTypeRetrieveRequest::getMaxResultsPerCollection()
	 * @uses ScienceGovSearchTypeRetrieveRequest::getOrder()
	 * @uses ScienceGovSearchTypeRetrieveRequest::getAdvancedOrder()
	 * @uses ScienceGovSearchTypeRetrieveRequest::getSnapshotId()
	 * @param ScienceGovSearchTypeRetrieveRequest RetrieveRequest
	 * @return ScienceGovSearchTypeSearchRetrieveResponse
	 */
	public function retrieve(ScienceGovSearchTypeRetrieveRequest $_ScienceGovSearchTypeRetrieveRequest)
	{
		try
		{
			$this->setResult(self::getSoapClient()->retrieve(array('searchId'=>$_ScienceGovSearchTypeRetrieveRequest->getSearchId(),'startPosition'=>$_ScienceGovSearchTypeRetrieveRequest->getStartPosition(),'maxResults'=>$_ScienceGovSearchTypeRetrieveRequest->getMaxResults(),'collectionCodes'=>$_ScienceGovSearchTypeRetrieveRequest->getCollectionCodes(),'filters'=>$_ScienceGovSearchTypeRetrieveRequest->getFilters(),'maxResultsPerCollection'=>$_ScienceGovSearchTypeRetrieveRequest->getMaxResultsPerCollection(),'order'=>$_ScienceGovSearchTypeRetrieveRequest->getOrder(),'advancedOrder'=>$_ScienceGovSearchTypeRetrieveRequest->getAdvancedOrder(),'snapshotId'=>$_ScienceGovSearchTypeRetrieveRequest->getSnapshotId())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call retrieveFreeFormResults
	 * Meta informations :
	 * 	- documentation : Similar to retrieve, but results are free form name-value pairs. Preferred for non-bibliographic data
	 * @uses ScienceGovSearchWsdlClass::getSoapClient()
	 * @uses ScienceGovSearchWsdlClass::setResult()
	 * @uses ScienceGovSearchWsdlClass::getResult()
	 * @uses ScienceGovSearchWsdlClass::saveLastError()
	 * @uses ScienceGovSearchTypeRetrieveFreeFormRequest::getSearchId()
	 * @uses ScienceGovSearchTypeRetrieveFreeFormRequest::getStartPosition()
	 * @uses ScienceGovSearchTypeRetrieveFreeFormRequest::getMaxResults()
	 * @uses ScienceGovSearchTypeRetrieveFreeFormRequest::getCollectionCodes()
	 * @uses ScienceGovSearchTypeRetrieveFreeFormRequest::getFilters()
	 * @uses ScienceGovSearchTypeRetrieveFreeFormRequest::getMaxResultsPerCollection()
	 * @uses ScienceGovSearchTypeRetrieveFreeFormRequest::getOrder()
	 * @uses ScienceGovSearchTypeRetrieveFreeFormRequest::getSnapshotId()
	 * @param ScienceGovSearchTypeRetrieveFreeFormRequest RetrieveFreeFormRequest
	 * @return ScienceGovSearchTypeRetrieveFreeFormResponse
	 */
	public function retrieveFreeFormResults(ScienceGovSearchTypeRetrieveFreeFormRequest $_ScienceGovSearchTypeRetrieveFreeFormRequest)
	{
		try
		{
			$this->setResult(self::getSoapClient()->retrieveFreeFormResults(array('searchId'=>$_ScienceGovSearchTypeRetrieveFreeFormRequest->getSearchId(),'startPosition'=>$_ScienceGovSearchTypeRetrieveFreeFormRequest->getStartPosition(),'maxResults'=>$_ScienceGovSearchTypeRetrieveFreeFormRequest->getMaxResults(),'collectionCodes'=>$_ScienceGovSearchTypeRetrieveFreeFormRequest->getCollectionCodes(),'filters'=>$_ScienceGovSearchTypeRetrieveFreeFormRequest->getFilters(),'maxResultsPerCollection'=>$_ScienceGovSearchTypeRetrieveFreeFormRequest->getMaxResultsPerCollection(),'order'=>$_ScienceGovSearchTypeRetrieveFreeFormRequest->getOrder(),'snapshotId'=>$_ScienceGovSearchTypeRetrieveFreeFormRequest->getSnapshotId())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call retrieveIncrementalResults
	 * Meta informations :
	 * 	- documentation : Returns new results since a snapshot was taken
	 * @uses ScienceGovSearchWsdlClass::getSoapClient()
	 * @uses ScienceGovSearchWsdlClass::setResult()
	 * @uses ScienceGovSearchWsdlClass::getResult()
	 * @uses ScienceGovSearchWsdlClass::saveLastError()
	 * @uses ScienceGovSearchTypeRetrieveIncrementalResultsRequest::getSearchId()
	 * @uses ScienceGovSearchTypeRetrieveIncrementalResultsRequest::getFilters()
	 * @uses ScienceGovSearchTypeRetrieveIncrementalResultsRequest::getOrder()
	 * @uses ScienceGovSearchTypeRetrieveIncrementalResultsRequest::getAdvancedOrder()
	 * @uses ScienceGovSearchTypeRetrieveIncrementalResultsRequest::getSnapshotId()
	 * @param ScienceGovSearchTypeRetrieveIncrementalResultsRequest RetrieveIncrementalResultsRequest
	 * @return ScienceGovSearchTypeIncrementalResultsResponse
	 */
	public function retrieveIncrementalResults(ScienceGovSearchTypeRetrieveIncrementalResultsRequest $_ScienceGovSearchTypeRetrieveIncrementalResultsRequest)
	{
		try
		{
			$this->setResult(self::getSoapClient()->retrieveIncrementalResults(array('searchId'=>$_ScienceGovSearchTypeRetrieveIncrementalResultsRequest->getSearchId(),'filters'=>$_ScienceGovSearchTypeRetrieveIncrementalResultsRequest->getFilters(),'order'=>$_ScienceGovSearchTypeRetrieveIncrementalResultsRequest->getOrder(),'advancedOrder'=>$_ScienceGovSearchTypeRetrieveIncrementalResultsRequest->getAdvancedOrder(),'snapshotId'=>$_ScienceGovSearchTypeRetrieveIncrementalResultsRequest->getSnapshotId())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call retrieveSavedSearch
	 * Meta informations :
	 * 	- documentation : Similar to retrieve method, but returns additional information such as original query and saved search name
	 * @uses ScienceGovSearchWsdlClass::getSoapClient()
	 * @uses ScienceGovSearchWsdlClass::setResult()
	 * @uses ScienceGovSearchWsdlClass::getResult()
	 * @uses ScienceGovSearchWsdlClass::saveLastError()
	 * @uses ScienceGovSearchTypeRetrieveSavedSearchRequest::getSearchId()
	 * @uses ScienceGovSearchTypeRetrieveSavedSearchRequest::getStartPosition()
	 * @uses ScienceGovSearchTypeRetrieveSavedSearchRequest::getMaxResults()
	 * @uses ScienceGovSearchTypeRetrieveSavedSearchRequest::getCollectionCodes()
	 * @uses ScienceGovSearchTypeRetrieveSavedSearchRequest::getFilters()
	 * @uses ScienceGovSearchTypeRetrieveSavedSearchRequest::getMaxResultsPerCollection()
	 * @uses ScienceGovSearchTypeRetrieveSavedSearchRequest::getOrder()
	 * @uses ScienceGovSearchTypeRetrieveSavedSearchRequest::getAdvancedOrder()
	 * @uses ScienceGovSearchTypeRetrieveSavedSearchRequest::getSnapshotId()
	 * @param ScienceGovSearchTypeRetrieveSavedSearchRequest RetrieveSavedSearchRequest
	 * @return ScienceGovSearchTypeSavedSearchRetrieveResponse
	 */
	public function retrieveSavedSearch(ScienceGovSearchTypeRetrieveSavedSearchRequest $_ScienceGovSearchTypeRetrieveSavedSearchRequest)
	{
		try
		{
			$this->setResult(self::getSoapClient()->retrieveSavedSearch(array('searchId'=>$_ScienceGovSearchTypeRetrieveSavedSearchRequest->getSearchId(),'startPosition'=>$_ScienceGovSearchTypeRetrieveSavedSearchRequest->getStartPosition(),'maxResults'=>$_ScienceGovSearchTypeRetrieveSavedSearchRequest->getMaxResults(),'collectionCodes'=>$_ScienceGovSearchTypeRetrieveSavedSearchRequest->getCollectionCodes(),'filters'=>$_ScienceGovSearchTypeRetrieveSavedSearchRequest->getFilters(),'maxResultsPerCollection'=>$_ScienceGovSearchTypeRetrieveSavedSearchRequest->getMaxResultsPerCollection(),'order'=>$_ScienceGovSearchTypeRetrieveSavedSearchRequest->getOrder(),'advancedOrder'=>$_ScienceGovSearchTypeRetrieveSavedSearchRequest->getAdvancedOrder(),'snapshotId'=>$_ScienceGovSearchTypeRetrieveSavedSearchRequest->getSnapshotId())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call retrieveForCluster
	 * Meta informations :
	 * 	- documentation : Returns a range of results for a specfic cluster
	 * @uses ScienceGovSearchWsdlClass::getSoapClient()
	 * @uses ScienceGovSearchWsdlClass::setResult()
	 * @uses ScienceGovSearchWsdlClass::getResult()
	 * @uses ScienceGovSearchWsdlClass::saveLastError()
	 * @uses ScienceGovSearchTypeClusterRetrieveRequest::getSearchId()
	 * @uses ScienceGovSearchTypeClusterRetrieveRequest::getClusterId()
	 * @uses ScienceGovSearchTypeClusterRetrieveRequest::getStartPosition()
	 * @uses ScienceGovSearchTypeClusterRetrieveRequest::getMaxResults()
	 * @uses ScienceGovSearchTypeClusterRetrieveRequest::getClusterGroup()
	 * @uses ScienceGovSearchTypeClusterRetrieveRequest::getFilters()
	 * @uses ScienceGovSearchTypeClusterRetrieveRequest::getOrder()
	 * @uses ScienceGovSearchTypeClusterRetrieveRequest::getAdvancedOrder()
	 * @param ScienceGovSearchTypeClusterRetrieveRequest ClusterRetrieveRequest
	 * @return ScienceGovSearchTypeSearchRetrieveResponse
	 */
	public function retrieveForCluster(ScienceGovSearchTypeClusterRetrieveRequest $_ScienceGovSearchTypeClusterRetrieveRequest)
	{
		try
		{
			$this->setResult(self::getSoapClient()->retrieveForCluster(array('searchId'=>$_ScienceGovSearchTypeClusterRetrieveRequest->getSearchId(),'clusterId'=>$_ScienceGovSearchTypeClusterRetrieveRequest->getClusterId(),'startPosition'=>$_ScienceGovSearchTypeClusterRetrieveRequest->getStartPosition(),'maxResults'=>$_ScienceGovSearchTypeClusterRetrieveRequest->getMaxResults(),'clusterGroup'=>$_ScienceGovSearchTypeClusterRetrieveRequest->getClusterGroup(),'filters'=>$_ScienceGovSearchTypeClusterRetrieveRequest->getFilters(),'order'=>$_ScienceGovSearchTypeClusterRetrieveRequest->getOrder(),'advancedOrder'=>$_ScienceGovSearchTypeClusterRetrieveRequest->getAdvancedOrder())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method returning the result content
	 *
	 * @return ScienceGovSearchTypeSearchRetrieveResponse|ScienceGovSearchTypeRetrieveFreeFormResponse|ScienceGovSearchTypeIncrementalResultsResponse|ScienceGovSearchTypeSavedSearchRetrieveResponse|ScienceGovSearchTypeSearchRetrieveResponse
	 */
	public function getResult()
	{
		return parent::getResult();
	}
	/**
	 * Method returning the class name
	 *
	 * @return string __CLASS__
	 */
	public function __toString()
	{
		return __CLASS__;
	}
}
?>