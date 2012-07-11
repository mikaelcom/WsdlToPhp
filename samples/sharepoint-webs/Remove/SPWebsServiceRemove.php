<?php
/**
 * Class file for SPWebsServiceRemove
 * @date 06/07/2012
 */
/**
 * Class SPWebsServiceRemove
 * @date 06/07/2012
 */
class SPWebsServiceRemove extends SPWebsWsdlClass
{
	/**
	 * Method to call RemoveContentTypeXmlDocument
	 * @uses SPWebsWsdlClass::getSoapClient()
	 * @uses SPWebsWsdlClass::setResult()
	 * @uses SPWebsWsdlClass::getResult()
	 * @uses SPWebsWsdlClass::saveLastError()
	 * @uses SPWebsTypeRemoveContentTypeXmlDocument::getContentTypeId()
	 * @uses SPWebsTypeRemoveContentTypeXmlDocument::getDocumentUri()
	 * @param SPWebsTypeRemoveContentTypeXmlDocument RemoveContentTypeXmlDocument
	 * @return SPWebsTypeRemoveContentTypeXmlDocumentResponse
	 */
	public function RemoveContentTypeXmlDocument(SPWebsTypeRemoveContentTypeXmlDocument $_SPWebsTypeRemoveContentTypeXmlDocument)
	{
		try
		{
			$this->setResult(self::getSoapClient()->RemoveContentTypeXmlDocument(array('contentTypeId'=>$_SPWebsTypeRemoveContentTypeXmlDocument->getContentTypeId(),'documentUri'=>$_SPWebsTypeRemoveContentTypeXmlDocument->getDocumentUri())));
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
	 * @return SPWebsTypeRemoveContentTypeXmlDocumentResponse
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