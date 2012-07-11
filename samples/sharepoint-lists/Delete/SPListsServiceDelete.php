<?php
/**
 * Class file for SPListsServiceDelete
 * @date 07/07/2012
 */
/**
 * Class SPListsServiceDelete
 * @date 07/07/2012
 */
class SPListsServiceDelete extends SPListsWsdlClass
{
	/**
	 * Method to call DeleteList
	 * @uses SPListsWsdlClass::getSoapClient()
	 * @uses SPListsWsdlClass::setResult()
	 * @uses SPListsWsdlClass::getResult()
	 * @uses SPListsWsdlClass::saveLastError()
	 * @uses SPListsTypeDeleteList::getListName()
	 * @param SPListsTypeDeleteList DeleteList
	 * @return SPListsTypeDeleteListResponse
	 */
	public function DeleteList(SPListsTypeDeleteList $_SPListsTypeDeleteList)
	{
		try
		{
			$this->setResult(self::getSoapClient()->DeleteList(array('listName'=>$_SPListsTypeDeleteList->getListName())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call DeleteAttachment
	 * @uses SPListsWsdlClass::getSoapClient()
	 * @uses SPListsWsdlClass::setResult()
	 * @uses SPListsWsdlClass::getResult()
	 * @uses SPListsWsdlClass::saveLastError()
	 * @uses SPListsTypeDeleteAttachment::getListName()
	 * @uses SPListsTypeDeleteAttachment::getListItemID()
	 * @uses SPListsTypeDeleteAttachment::getUrl()
	 * @param SPListsTypeDeleteAttachment DeleteAttachment
	 * @return SPListsTypeDeleteAttachmentResponse
	 */
	public function DeleteAttachment(SPListsTypeDeleteAttachment $_SPListsTypeDeleteAttachment)
	{
		try
		{
			$this->setResult(self::getSoapClient()->DeleteAttachment(array('listName'=>$_SPListsTypeDeleteAttachment->getListName(),'listItemID'=>$_SPListsTypeDeleteAttachment->getListItemID(),'url'=>$_SPListsTypeDeleteAttachment->getUrl())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call DeleteContentType
	 * @uses SPListsWsdlClass::getSoapClient()
	 * @uses SPListsWsdlClass::setResult()
	 * @uses SPListsWsdlClass::getResult()
	 * @uses SPListsWsdlClass::saveLastError()
	 * @uses SPListsTypeDeleteContentType::getListName()
	 * @uses SPListsTypeDeleteContentType::getContentTypeId()
	 * @param SPListsTypeDeleteContentType DeleteContentType
	 * @return SPListsTypeDeleteContentTypeResponse
	 */
	public function DeleteContentType(SPListsTypeDeleteContentType $_SPListsTypeDeleteContentType)
	{
		try
		{
			$this->setResult(self::getSoapClient()->DeleteContentType(array('listName'=>$_SPListsTypeDeleteContentType->getListName(),'contentTypeId'=>$_SPListsTypeDeleteContentType->getContentTypeId())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call DeleteContentTypeXmlDocument
	 * @uses SPListsWsdlClass::getSoapClient()
	 * @uses SPListsWsdlClass::setResult()
	 * @uses SPListsWsdlClass::getResult()
	 * @uses SPListsWsdlClass::saveLastError()
	 * @uses SPListsTypeDeleteContentTypeXmlDocument::getListName()
	 * @uses SPListsTypeDeleteContentTypeXmlDocument::getContentTypeId()
	 * @uses SPListsTypeDeleteContentTypeXmlDocument::getDocumentUri()
	 * @param SPListsTypeDeleteContentTypeXmlDocument DeleteContentTypeXmlDocument
	 * @return SPListsTypeDeleteContentTypeXmlDocumentResponse
	 */
	public function DeleteContentTypeXmlDocument(SPListsTypeDeleteContentTypeXmlDocument $_SPListsTypeDeleteContentTypeXmlDocument)
	{
		try
		{
			$this->setResult(self::getSoapClient()->DeleteContentTypeXmlDocument(array('listName'=>$_SPListsTypeDeleteContentTypeXmlDocument->getListName(),'contentTypeId'=>$_SPListsTypeDeleteContentTypeXmlDocument->getContentTypeId(),'documentUri'=>$_SPListsTypeDeleteContentTypeXmlDocument->getDocumentUri())));
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
	 * @return SPListsTypeDeleteContentTypeXmlDocumentResponse
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