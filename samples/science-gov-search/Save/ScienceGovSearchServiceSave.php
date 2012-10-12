<?php
/**
 * Class file for ScienceGovSearchServiceSave
 * @date 13/10/2012
 */
/**
 * Class ScienceGovSearchServiceSave
 * @date 13/10/2012
 */
class ScienceGovSearchServiceSave extends ScienceGovSearchWsdlClass
{
	/**
	 * Method to call saveSearch
	 * Meta informations :
	 * 	- documentation : Saves the specified search for later retrieval
	 * @uses ScienceGovSearchWsdlClass::getSoapClient()
	 * @uses ScienceGovSearchWsdlClass::setResult()
	 * @uses ScienceGovSearchWsdlClass::getResult()
	 * @uses ScienceGovSearchWsdlClass::saveLastError()
	 * @uses ScienceGovSearchTypeSaveSearchRequest::getSearchId()
	 * @uses ScienceGovSearchTypeSaveSearchRequest::getSearchName()
	 * @uses ScienceGovSearchTypeSaveSearchRequest::getUserId()
	 * @param ScienceGovSearchTypeSaveSearchRequest SaveSearchRequest
	 * @return ScienceGovSearchTypeSavedSearchResponse
	 */
	public function saveSearch(ScienceGovSearchTypeSaveSearchRequest $_ScienceGovSearchTypeSaveSearchRequest)
	{
		try
		{
			$this->setResult(self::getSoapClient()->saveSearch(array('searchId'=>$_ScienceGovSearchTypeSaveSearchRequest->getSearchId(),'searchName'=>$_ScienceGovSearchTypeSaveSearchRequest->getSearchName(),'userId'=>$_ScienceGovSearchTypeSaveSearchRequest->getUserId())));
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
	 * @return ScienceGovSearchTypeSavedSearchResponse
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