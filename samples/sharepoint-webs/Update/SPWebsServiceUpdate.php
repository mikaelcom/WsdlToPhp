<?php
/**
 * Class file for SPWebsServiceUpdate
 * @date 06/07/2012
 */
/**
 * Class SPWebsServiceUpdate
 * @date 06/07/2012
 */
class SPWebsServiceUpdate extends SPWebsWsdlClass
{
	/**
	 * Method to call UpdateContentType
	 * @uses SPWebsWsdlClass::getSoapClient()
	 * @uses SPWebsWsdlClass::setResult()
	 * @uses SPWebsWsdlClass::getResult()
	 * @uses SPWebsWsdlClass::saveLastError()
	 * @uses SPWebsTypeUpdateContentType::getContentTypeId()
	 * @uses SPWebsTypeUpdateContentType::getContentTypeProperties()
	 * @uses SPWebsTypeUpdateContentType::getNewFields()
	 * @uses SPWebsTypeUpdateContentType::getUpdateFields()
	 * @uses SPWebsTypeUpdateContentType::getDeleteFields()
	 * @param SPWebsTypeUpdateContentType UpdateContentType
	 * @return SPWebsTypeUpdateContentTypeResponse
	 */
	public function UpdateContentType(SPWebsTypeUpdateContentType $_SPWebsTypeUpdateContentType)
	{
		try
		{
			$this->setResult(self::getSoapClient()->UpdateContentType(array('contentTypeId'=>$_SPWebsTypeUpdateContentType->getContentTypeId(),'contentTypeProperties'=>$_SPWebsTypeUpdateContentType->getContentTypeProperties(),'newFields'=>$_SPWebsTypeUpdateContentType->getNewFields(),'updateFields'=>$_SPWebsTypeUpdateContentType->getUpdateFields(),'deleteFields'=>$_SPWebsTypeUpdateContentType->getDeleteFields())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call UpdateContentTypeXmlDocument
	 * @uses SPWebsWsdlClass::getSoapClient()
	 * @uses SPWebsWsdlClass::setResult()
	 * @uses SPWebsWsdlClass::getResult()
	 * @uses SPWebsWsdlClass::saveLastError()
	 * @uses SPWebsTypeUpdateContentTypeXmlDocument::getContentTypeId()
	 * @uses SPWebsTypeUpdateContentTypeXmlDocument::getNewDocument()
	 * @param SPWebsTypeUpdateContentTypeXmlDocument UpdateContentTypeXmlDocument
	 * @return SPWebsTypeUpdateContentTypeXmlDocumentResponse
	 */
	public function UpdateContentTypeXmlDocument(SPWebsTypeUpdateContentTypeXmlDocument $_SPWebsTypeUpdateContentTypeXmlDocument)
	{
		try
		{
			$this->setResult(self::getSoapClient()->UpdateContentTypeXmlDocument(array('contentTypeId'=>$_SPWebsTypeUpdateContentTypeXmlDocument->getContentTypeId(),'newDocument'=>$_SPWebsTypeUpdateContentTypeXmlDocument->getNewDocument())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call UpdateColumns
	 * @uses SPWebsWsdlClass::getSoapClient()
	 * @uses SPWebsWsdlClass::setResult()
	 * @uses SPWebsWsdlClass::getResult()
	 * @uses SPWebsWsdlClass::saveLastError()
	 * @uses SPWebsTypeUpdateColumns::getNewFields()
	 * @uses SPWebsTypeUpdateColumns::getUpdateFields()
	 * @uses SPWebsTypeUpdateColumns::getDeleteFields()
	 * @param SPWebsTypeUpdateColumns UpdateColumns
	 * @return SPWebsTypeUpdateColumnsResponse
	 */
	public function UpdateColumns(SPWebsTypeUpdateColumns $_SPWebsTypeUpdateColumns)
	{
		try
		{
			$this->setResult(self::getSoapClient()->UpdateColumns(array('newFields'=>$_SPWebsTypeUpdateColumns->getNewFields(),'updateFields'=>$_SPWebsTypeUpdateColumns->getUpdateFields(),'deleteFields'=>$_SPWebsTypeUpdateColumns->getDeleteFields())));
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
	 * @return SPWebsTypeUpdateColumnsResponse
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