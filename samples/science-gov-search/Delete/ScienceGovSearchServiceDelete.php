<?php
/**
 * Class file for ScienceGovSearchServiceDelete
 * @date 13/10/2012
 */
/**
 * Class ScienceGovSearchServiceDelete
 * @date 13/10/2012
 */
class ScienceGovSearchServiceDelete extends ScienceGovSearchWsdlClass
{
	/**
	 * Method to call deleteSavedSearch
	 * Meta informations :
	 * 	- documentation : Deletes the specified saved search
	 * @uses ScienceGovSearchWsdlClass::getSoapClient()
	 * @uses ScienceGovSearchWsdlClass::setResult()
	 * @uses ScienceGovSearchWsdlClass::getResult()
	 * @uses ScienceGovSearchWsdlClass::saveLastError()
	 * @uses ScienceGovSearchTypeDeleteSavedSearchRequest::getSearchId()
	 * @uses ScienceGovSearchTypeDeleteSavedSearchRequest::getUserId()
	 * @param ScienceGovSearchTypeDeleteSavedSearchRequest DeleteSavedSearchRequest
	 * @return ScienceGovSearchTypeSavedSearchResponse
	 */
	public function deleteSavedSearch(ScienceGovSearchTypeDeleteSavedSearchRequest $_ScienceGovSearchTypeDeleteSavedSearchRequest)
	{
		try
		{
			$this->setResult(self::getSoapClient()->deleteSavedSearch(array('searchId'=>$_ScienceGovSearchTypeDeleteSavedSearchRequest->getSearchId(),'userId'=>$_ScienceGovSearchTypeDeleteSavedSearchRequest->getUserId())));
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