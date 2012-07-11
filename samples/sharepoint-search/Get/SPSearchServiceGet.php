<?php
/**
 * Class file for SPSearchServiceGet
 * @date 06/07/2012
 */
/**
 * Class SPSearchServiceGet
 * @date 06/07/2012
 */
class SPSearchServiceGet extends SPSearchWsdlClass
{
	/**
	 * Method to call GetPortalSearchInfo
	 * @uses SPSearchWsdlClass::getSoapClient()
	 * @uses SPSearchWsdlClass::setResult()
	 * @uses SPSearchWsdlClass::getResult()
	 * @uses SPSearchWsdlClass::saveLastError()
	 * @param SPSearchTypeGetPortalSearchInfo GetPortalSearchInfo
	 * @return SPSearchTypeGetPortalSearchInfoResponse
	 */
	public function GetPortalSearchInfo(SPSearchTypeGetPortalSearchInfo $_SPSearchTypeGetPortalSearchInfo)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetPortalSearchInfo(array()));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetSearchMetadata
	 * @uses SPSearchWsdlClass::getSoapClient()
	 * @uses SPSearchWsdlClass::setResult()
	 * @uses SPSearchWsdlClass::getResult()
	 * @uses SPSearchWsdlClass::saveLastError()
	 * @param SPSearchTypeGetSearchMetadata GetSearchMetadata
	 * @return SPSearchTypeGetSearchMetadataResponse
	 */
	public function GetSearchMetadata(SPSearchTypeGetSearchMetadata $_SPSearchTypeGetSearchMetadata)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetSearchMetadata(array()));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetQuerySuggestions
	 * @uses SPSearchWsdlClass::getSoapClient()
	 * @uses SPSearchWsdlClass::setResult()
	 * @uses SPSearchWsdlClass::getResult()
	 * @uses SPSearchWsdlClass::saveLastError()
	 * @uses SPSearchTypeGetQuerySuggestions::getQueryXml()
	 * @param SPSearchTypeGetQuerySuggestions GetQuerySuggestions
	 * @return SPSearchTypeGetQuerySuggestionsResponse
	 */
	public function GetQuerySuggestions(SPSearchTypeGetQuerySuggestions $_SPSearchTypeGetQuerySuggestions)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetQuerySuggestions(array('queryXml'=>$_SPSearchTypeGetQuerySuggestions->getQueryXml())));
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
	 * @return SPSearchTypeGetQuerySuggestionsResponse
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