<?php
/**
 * Class file for ScienceGovSearchServiceUpdate
 * @date 13/10/2012
 */
/**
 * Class ScienceGovSearchServiceUpdate
 * @date 13/10/2012
 */
class ScienceGovSearchServiceUpdate extends ScienceGovSearchWsdlClass
{
	/**
	 * Method to call updateSavedSearch
	 * Meta informations :
	 * 	- documentation : Changes the name of a specified saved search
	 * @uses ScienceGovSearchWsdlClass::getSoapClient()
	 * @uses ScienceGovSearchWsdlClass::setResult()
	 * @uses ScienceGovSearchWsdlClass::getResult()
	 * @uses ScienceGovSearchWsdlClass::saveLastError()
	 * @uses ScienceGovSearchTypeUpdateSavedSearchRequest::getOldName()
	 * @uses ScienceGovSearchTypeUpdateSavedSearchRequest::getNewName()
	 * @uses ScienceGovSearchTypeUpdateSavedSearchRequest::getUserId()
	 * @param ScienceGovSearchTypeUpdateSavedSearchRequest UpdateSavedSearchRequest
	 * @return ScienceGovSearchTypeSavedSearchResponse
	 */
	public function updateSavedSearch(ScienceGovSearchTypeUpdateSavedSearchRequest $_ScienceGovSearchTypeUpdateSavedSearchRequest)
	{
		try
		{
			$this->setResult(self::getSoapClient()->updateSavedSearch(array('oldName'=>$_ScienceGovSearchTypeUpdateSavedSearchRequest->getOldName(),'newName'=>$_ScienceGovSearchTypeUpdateSavedSearchRequest->getNewName(),'userId'=>$_ScienceGovSearchTypeUpdateSavedSearchRequest->getUserId())));
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