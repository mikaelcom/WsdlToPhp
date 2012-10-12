<?php
/**
 * Class file for ScienceGovSearchServiceGet
 * @date 13/10/2012
 */
/**
 * Class ScienceGovSearchServiceGet
 * @date 13/10/2012
 */
class ScienceGovSearchServiceGet extends ScienceGovSearchWsdlClass
{
	/**
	 * Method to call getSearchStatus
	 * Meta informations :
	 * 	- documentation : Returns the status of the search identified by the given searchId, applying filters to result counts
	 * @uses ScienceGovSearchWsdlClass::getSoapClient()
	 * @uses ScienceGovSearchWsdlClass::setResult()
	 * @uses ScienceGovSearchWsdlClass::getResult()
	 * @uses ScienceGovSearchWsdlClass::saveLastError()
	 * @uses ScienceGovSearchTypeGetSearchStatusRequest::getSearchId()
	 * @uses ScienceGovSearchTypeGetSearchStatusRequest::getFilters()
	 * @param ScienceGovSearchTypeGetSearchStatusRequest GetSearchStatusRequest
	 * @return ScienceGovSearchTypeSearchStatusResponse
	 */
	public function getSearchStatus(ScienceGovSearchTypeGetSearchStatusRequest $_ScienceGovSearchTypeGetSearchStatusRequest)
	{
		try
		{
			$this->setResult(self::getSoapClient()->getSearchStatus(array('searchId'=>$_ScienceGovSearchTypeGetSearchStatusRequest->getSearchId(),'filters'=>$_ScienceGovSearchTypeGetSearchStatusRequest->getFilters())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call getSavedSearches
	 * Meta informations :
	 * 	- documentation : Retrieves a map (as an array of map entries) of saved searches for the given userId
	 * @uses ScienceGovSearchWsdlClass::getSoapClient()
	 * @uses ScienceGovSearchWsdlClass::setResult()
	 * @uses ScienceGovSearchWsdlClass::getResult()
	 * @uses ScienceGovSearchWsdlClass::saveLastError()
	 * @uses ScienceGovSearchTypeGetSavedSearchesRequest::getUserId()
	 * @param ScienceGovSearchTypeGetSavedSearchesRequest GetSavedSearchesRequest
	 * @return ScienceGovSearchTypeSavedSearchesResponse
	 */
	public function getSavedSearches(ScienceGovSearchTypeGetSavedSearchesRequest $_ScienceGovSearchTypeGetSavedSearchesRequest)
	{
		try
		{
			$this->setResult(self::getSoapClient()->getSavedSearches(array('userId'=>$_ScienceGovSearchTypeGetSavedSearchesRequest->getUserId())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call getClusters
	 * Meta informations :
	 * 	- documentation : Creates clusters of search results grouped by dynamically generated categories, and/or common result fields
	 * @uses ScienceGovSearchWsdlClass::getSoapClient()
	 * @uses ScienceGovSearchWsdlClass::setResult()
	 * @uses ScienceGovSearchWsdlClass::getResult()
	 * @uses ScienceGovSearchWsdlClass::saveLastError()
	 * @uses ScienceGovSearchTypeClusterRequest::getClusterGroup()
	 * @uses ScienceGovSearchTypeClusterRequest::getClusterTypes()
	 * @uses ScienceGovSearchTypeClusterRequest::getAdditionalTypes()
	 * @uses ScienceGovSearchTypeClusterRequest::getCollectionCodes()
	 * @uses ScienceGovSearchTypeClusterRequest::getFilters()
	 * @uses ScienceGovSearchTypeClusterRequest::getMaxClusterDepth()
	 * @uses ScienceGovSearchTypeClusterRequest::getMinClusterSize()
	 * @uses ScienceGovSearchTypeClusterRequest::getSearchId()
	 * @uses ScienceGovSearchTypeClusterRequest::getSnapshotId()
	 * @param ScienceGovSearchTypeClusterRequest ClusterRequest
	 * @return ScienceGovSearchTypeClusterResponse
	 */
	public function getClusters(ScienceGovSearchTypeClusterRequest $_ScienceGovSearchTypeClusterRequest)
	{
		try
		{
			$this->setResult(self::getSoapClient()->getClusters(array('clusterGroup'=>$_ScienceGovSearchTypeClusterRequest->getClusterGroup(),'clusterTypes'=>$_ScienceGovSearchTypeClusterRequest->getClusterTypes(),'additionalTypes'=>$_ScienceGovSearchTypeClusterRequest->getAdditionalTypes(),'collectionCodes'=>$_ScienceGovSearchTypeClusterRequest->getCollectionCodes(),'filters'=>$_ScienceGovSearchTypeClusterRequest->getFilters(),'maxClusterDepth'=>$_ScienceGovSearchTypeClusterRequest->getMaxClusterDepth(),'minClusterSize'=>$_ScienceGovSearchTypeClusterRequest->getMinClusterSize(),'searchId'=>$_ScienceGovSearchTypeClusterRequest->getSearchId(),'snapshotId'=>$_ScienceGovSearchTypeClusterRequest->getSnapshotId())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call getResultByResultId
	 * Meta informations :
	 * 	- documentation : Returns a specific search result
	 * @uses ScienceGovSearchWsdlClass::getSoapClient()
	 * @uses ScienceGovSearchWsdlClass::setResult()
	 * @uses ScienceGovSearchWsdlClass::getResult()
	 * @uses ScienceGovSearchWsdlClass::saveLastError()
	 * @uses ScienceGovSearchTypeGetResultByResultIdRequest::getResultId()
	 * @uses ScienceGovSearchTypeGetResultByResultIdRequest::getSearchId()
	 * @param ScienceGovSearchTypeGetResultByResultIdRequest GetResultByResultIdRequest
	 * @return ScienceGovSearchTypeSearchResultResponse
	 */
	public function getResultByResultId(ScienceGovSearchTypeGetResultByResultIdRequest $_ScienceGovSearchTypeGetResultByResultIdRequest)
	{
		try
		{
			$this->setResult(self::getSoapClient()->getResultByResultId(array('resultId'=>$_ScienceGovSearchTypeGetResultByResultIdRequest->getResultId(),'searchId'=>$_ScienceGovSearchTypeGetResultByResultIdRequest->getSearchId())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call getResultAsCitation
	 * Meta informations :
	 * 	- documentation : Returns a specific search result in RIS format suitable for citation managers
	 * @uses ScienceGovSearchWsdlClass::getSoapClient()
	 * @uses ScienceGovSearchWsdlClass::setResult()
	 * @uses ScienceGovSearchWsdlClass::getResult()
	 * @uses ScienceGovSearchWsdlClass::saveLastError()
	 * @uses ScienceGovSearchTypeGetResultAsCitationRequest::getResultId()
	 * @uses ScienceGovSearchTypeGetResultAsCitationRequest::getSearchId()
	 * @param ScienceGovSearchTypeGetResultAsCitationRequest GetResultAsCitationRequest
	 * @return ScienceGovSearchTypeCitationResultResponse
	 */
	public function getResultAsCitation(ScienceGovSearchTypeGetResultAsCitationRequest $_ScienceGovSearchTypeGetResultAsCitationRequest)
	{
		try
		{
			$this->setResult(self::getSoapClient()->getResultAsCitation(array('resultId'=>$_ScienceGovSearchTypeGetResultAsCitationRequest->getResultId(),'searchId'=>$_ScienceGovSearchTypeGetResultAsCitationRequest->getSearchId())));
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
	 * @return ScienceGovSearchTypeSearchStatusResponse|ScienceGovSearchTypeSavedSearchesResponse|ScienceGovSearchTypeClusterResponse|ScienceGovSearchTypeSearchResultResponse|ScienceGovSearchTypeCitationResultResponse
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