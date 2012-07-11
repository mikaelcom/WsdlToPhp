<?php
/**
 * Class file for SPWebsServiceGet
 * @date 06/07/2012
 */
/**
 * Class SPWebsServiceGet
 * @date 06/07/2012
 */
class SPWebsServiceGet extends SPWebsWsdlClass
{
	/**
	 * Method to call GetWebCollection
	 * @uses SPWebsWsdlClass::getSoapClient()
	 * @uses SPWebsWsdlClass::setResult()
	 * @uses SPWebsWsdlClass::getResult()
	 * @uses SPWebsWsdlClass::saveLastError()
	 * @param SPWebsTypeGetWebCollection GetWebCollection
	 * @return SPWebsTypeGetWebCollectionResponse
	 */
	public function GetWebCollection(SPWebsTypeGetWebCollection $_SPWebsTypeGetWebCollection)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetWebCollection(array()));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetWeb
	 * @uses SPWebsWsdlClass::getSoapClient()
	 * @uses SPWebsWsdlClass::setResult()
	 * @uses SPWebsWsdlClass::getResult()
	 * @uses SPWebsWsdlClass::saveLastError()
	 * @uses SPWebsTypeGetWeb::getWebUrl()
	 * @param SPWebsTypeGetWeb GetWeb
	 * @return SPWebsTypeGetWebResponse
	 */
	public function GetWeb(SPWebsTypeGetWeb $_SPWebsTypeGetWeb)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetWeb(array('webUrl'=>$_SPWebsTypeGetWeb->getWebUrl())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetListTemplates
	 * @uses SPWebsWsdlClass::getSoapClient()
	 * @uses SPWebsWsdlClass::setResult()
	 * @uses SPWebsWsdlClass::getResult()
	 * @uses SPWebsWsdlClass::saveLastError()
	 * @param SPWebsTypeGetListTemplates GetListTemplates
	 * @return SPWebsTypeGetListTemplatesResponse
	 */
	public function GetListTemplates(SPWebsTypeGetListTemplates $_SPWebsTypeGetListTemplates)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetListTemplates(array()));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetAllSubWebCollection
	 * @uses SPWebsWsdlClass::getSoapClient()
	 * @uses SPWebsWsdlClass::setResult()
	 * @uses SPWebsWsdlClass::getResult()
	 * @uses SPWebsWsdlClass::saveLastError()
	 * @param SPWebsTypeGetAllSubWebCollection GetAllSubWebCollection
	 * @return SPWebsTypeGetAllSubWebCollectionResponse
	 */
	public function GetAllSubWebCollection(SPWebsTypeGetAllSubWebCollection $_SPWebsTypeGetAllSubWebCollection)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetAllSubWebCollection(array()));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetContentTypes
	 * @uses SPWebsWsdlClass::getSoapClient()
	 * @uses SPWebsWsdlClass::setResult()
	 * @uses SPWebsWsdlClass::getResult()
	 * @uses SPWebsWsdlClass::saveLastError()
	 * @param SPWebsTypeGetContentTypes GetContentTypes
	 * @return SPWebsTypeGetContentTypesResponse
	 */
	public function GetContentTypes(SPWebsTypeGetContentTypes $_SPWebsTypeGetContentTypes)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetContentTypes(array()));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetContentType
	 * @uses SPWebsWsdlClass::getSoapClient()
	 * @uses SPWebsWsdlClass::setResult()
	 * @uses SPWebsWsdlClass::getResult()
	 * @uses SPWebsWsdlClass::saveLastError()
	 * @uses SPWebsTypeGetContentType::getContentTypeId()
	 * @param SPWebsTypeGetContentType GetContentType
	 * @return SPWebsTypeGetContentTypeResponse
	 */
	public function GetContentType(SPWebsTypeGetContentType $_SPWebsTypeGetContentType)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetContentType(array('contentTypeId'=>$_SPWebsTypeGetContentType->getContentTypeId())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetColumns
	 * @uses SPWebsWsdlClass::getSoapClient()
	 * @uses SPWebsWsdlClass::setResult()
	 * @uses SPWebsWsdlClass::getResult()
	 * @uses SPWebsWsdlClass::saveLastError()
	 * @param SPWebsTypeGetColumns GetColumns
	 * @return SPWebsTypeGetColumnsResponse
	 */
	public function GetColumns(SPWebsTypeGetColumns $_SPWebsTypeGetColumns)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetColumns(array()));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetCustomizedPageStatus
	 * @uses SPWebsWsdlClass::getSoapClient()
	 * @uses SPWebsWsdlClass::setResult()
	 * @uses SPWebsWsdlClass::getResult()
	 * @uses SPWebsWsdlClass::saveLastError()
	 * @uses SPWebsTypeGetCustomizedPageStatus::getFileUrl()
	 * @param SPWebsTypeGetCustomizedPageStatus GetCustomizedPageStatus
	 * @return SPWebsTypeGetCustomizedPageStatusResponse
	 */
	public function GetCustomizedPageStatus(SPWebsTypeGetCustomizedPageStatus $_SPWebsTypeGetCustomizedPageStatus)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetCustomizedPageStatus(array('fileUrl'=>$_SPWebsTypeGetCustomizedPageStatus->getFileUrl())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetActivatedFeatures
	 * @uses SPWebsWsdlClass::getSoapClient()
	 * @uses SPWebsWsdlClass::setResult()
	 * @uses SPWebsWsdlClass::getResult()
	 * @uses SPWebsWsdlClass::saveLastError()
	 * @param SPWebsTypeGetActivatedFeatures GetActivatedFeatures
	 * @return SPWebsTypeGetActivatedFeaturesResponse
	 */
	public function GetActivatedFeatures(SPWebsTypeGetActivatedFeatures $_SPWebsTypeGetActivatedFeatures)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetActivatedFeatures(array()));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetObjectIdFromUrl
	 * @uses SPWebsWsdlClass::getSoapClient()
	 * @uses SPWebsWsdlClass::setResult()
	 * @uses SPWebsWsdlClass::getResult()
	 * @uses SPWebsWsdlClass::saveLastError()
	 * @uses SPWebsTypeGetObjectIdFromUrl::getObjectUrl()
	 * @param SPWebsTypeGetObjectIdFromUrl GetObjectIdFromUrl
	 * @return SPWebsTypeGetObjectIdFromUrlResponse
	 */
	public function GetObjectIdFromUrl(SPWebsTypeGetObjectIdFromUrl $_SPWebsTypeGetObjectIdFromUrl)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetObjectIdFromUrl(array('objectUrl'=>$_SPWebsTypeGetObjectIdFromUrl->getObjectUrl())));
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
	 * @return SPWebsTypeGetObjectIdFromUrlResponse
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