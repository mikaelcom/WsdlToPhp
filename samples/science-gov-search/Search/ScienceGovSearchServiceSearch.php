<?php
/**
 * Class file for ScienceGovSearchServiceSearch
 * @date 13/10/2012
 */
/**
 * Class ScienceGovSearchServiceSearch
 * @date 13/10/2012
 */
class ScienceGovSearchServiceSearch extends ScienceGovSearchWsdlClass
{
	/**
	 * Method to call search
	 * Meta informations :
	 * 	- documentation : Performs a search using a SearchRequest object
	 * @uses ScienceGovSearchWsdlClass::getSoapClient()
	 * @uses ScienceGovSearchWsdlClass::setResult()
	 * @uses ScienceGovSearchWsdlClass::getResult()
	 * @uses ScienceGovSearchWsdlClass::saveLastError()
	 * @uses ScienceGovSearchTypeSearchRequest::getQuery()
	 * @uses ScienceGovSearchTypeSearchRequest::getAppName()
	 * @uses ScienceGovSearchTypeSearchRequest::getFilters()
	 * @uses ScienceGovSearchTypeSearchRequest::getMaxResultsPerCollection()
	 * @uses ScienceGovSearchTypeSearchRequest::getOrder()
	 * @uses ScienceGovSearchTypeSearchRequest::getAdvancedOrder()
	 * @uses ScienceGovSearchTypeSearchRequest::getRefineSearchId()
	 * @uses ScienceGovSearchTypeSearchRequest::getSearchTimeout()
	 * @uses ScienceGovSearchTypeSearchRequest::getSynchronousResults()
	 * @param ScienceGovSearchTypeSearchRequest SearchRequest
	 * @return ScienceGovSearchTypeSearchRetrieveResponse
	 */
	public function search(ScienceGovSearchTypeSearchRequest $_ScienceGovSearchTypeSearchRequest)
	{
		try
		{
			$this->setResult(self::getSoapClient()->search(array('query'=>$_ScienceGovSearchTypeSearchRequest->getQuery(),'appName'=>$_ScienceGovSearchTypeSearchRequest->getAppName(),'filters'=>$_ScienceGovSearchTypeSearchRequest->getFilters(),'maxResultsPerCollection'=>$_ScienceGovSearchTypeSearchRequest->getMaxResultsPerCollection(),'order'=>$_ScienceGovSearchTypeSearchRequest->getOrder(),'advancedOrder'=>$_ScienceGovSearchTypeSearchRequest->getAdvancedOrder(),'refineSearchId'=>$_ScienceGovSearchTypeSearchRequest->getRefineSearchId(),'searchTimeout'=>$_ScienceGovSearchTypeSearchRequest->getSearchTimeout(),'synchronousResults'=>$_ScienceGovSearchTypeSearchRequest->getSynchronousResults())));
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
	 * @return ScienceGovSearchTypeSearchRetrieveResponse
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