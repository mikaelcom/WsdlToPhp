<?php
/**
 * Class file for ScienceGovSearchServiceContinue
 * @date 13/10/2012
 */
/**
 * Class ScienceGovSearchServiceContinue
 * @date 13/10/2012
 */
class ScienceGovSearchServiceContinue extends ScienceGovSearchWsdlClass
{
	/**
	 * Method to call continueSearch
	 * Meta informations :
	 * 	- documentation : Perform additional work on the specified search. This may include running more continuations, metarank, and deepRank
	 * @uses ScienceGovSearchWsdlClass::getSoapClient()
	 * @uses ScienceGovSearchWsdlClass::setResult()
	 * @uses ScienceGovSearchWsdlClass::getResult()
	 * @uses ScienceGovSearchWsdlClass::saveLastError()
	 * @uses ScienceGovSearchTypeContinueSearchRequest::getCollectionCodes()
	 * @uses ScienceGovSearchTypeContinueSearchRequest::getSearchId()
	 * @uses ScienceGovSearchTypeContinueSearchRequest::getSearchTypes()
	 * @uses ScienceGovSearchTypeContinueSearchRequest::getTimeAllotted()
	 * @param ScienceGovSearchTypeContinueSearchRequest ContinueSearchRequest
	 * @return ScienceGovSearchTypeContinueSearchResponse
	 */
	public function continueSearch(ScienceGovSearchTypeContinueSearchRequest $_ScienceGovSearchTypeContinueSearchRequest)
	{
		try
		{
			$this->setResult(self::getSoapClient()->continueSearch(array('collectionCodes'=>$_ScienceGovSearchTypeContinueSearchRequest->getCollectionCodes(),'searchId'=>$_ScienceGovSearchTypeContinueSearchRequest->getSearchId(),'searchTypes'=>$_ScienceGovSearchTypeContinueSearchRequest->getSearchTypes(),'timeAllotted'=>$_ScienceGovSearchTypeContinueSearchRequest->getTimeAllotted())));
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
	 * @return ScienceGovSearchTypeContinueSearchResponse
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