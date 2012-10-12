<?php
/**
 * Class file for ScienceGovSearchServiceEstimate
 * @date 13/10/2012
 */
/**
 * Class ScienceGovSearchServiceEstimate
 * @date 13/10/2012
 */
class ScienceGovSearchServiceEstimate extends ScienceGovSearchWsdlClass
{
	/**
	 * Method to call estimateSearchTime
	 * Meta informations :
	 * 	- documentation : Estimate the amount of time that will be required to process the ContinueSearchRequest
	 * @uses ScienceGovSearchWsdlClass::getSoapClient()
	 * @uses ScienceGovSearchWsdlClass::setResult()
	 * @uses ScienceGovSearchWsdlClass::getResult()
	 * @uses ScienceGovSearchWsdlClass::saveLastError()
	 * @uses ScienceGovSearchTypeEstimateSearchTimeRequest::getCollectionCodes()
	 * @uses ScienceGovSearchTypeEstimateSearchTimeRequest::getSearchId()
	 * @uses ScienceGovSearchTypeEstimateSearchTimeRequest::getSearchTypes()
	 * @param ScienceGovSearchTypeEstimateSearchTimeRequest EstimateSearchTimeRequest
	 * @return ScienceGovSearchTypeEstimateSearchTimeResponse
	 */
	public function estimateSearchTime(ScienceGovSearchTypeEstimateSearchTimeRequest $_ScienceGovSearchTypeEstimateSearchTimeRequest)
	{
		try
		{
			$this->setResult(self::getSoapClient()->estimateSearchTime(array('collectionCodes'=>$_ScienceGovSearchTypeEstimateSearchTimeRequest->getCollectionCodes(),'searchId'=>$_ScienceGovSearchTypeEstimateSearchTimeRequest->getSearchId(),'searchTypes'=>$_ScienceGovSearchTypeEstimateSearchTimeRequest->getSearchTypes())));
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
	 * @return ScienceGovSearchTypeEstimateSearchTimeResponse
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