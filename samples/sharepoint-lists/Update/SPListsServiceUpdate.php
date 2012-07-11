<?php
/**
 * Class file for SPListsServiceUpdate
 * @date 07/07/2012
 */
/**
 * Class SPListsServiceUpdate
 * @date 07/07/2012
 */
class SPListsServiceUpdate extends SPListsWsdlClass
{
	/**
	 * Method to call UpdateList
	 * @uses SPListsWsdlClass::getSoapClient()
	 * @uses SPListsWsdlClass::setResult()
	 * @uses SPListsWsdlClass::getResult()
	 * @uses SPListsWsdlClass::saveLastError()
	 * @uses SPListsTypeUpdateList::getListName()
	 * @uses SPListsTypeUpdateList::getListProperties()
	 * @uses SPListsTypeUpdateList::getNewFields()
	 * @uses SPListsTypeUpdateList::getUpdateFields()
	 * @uses SPListsTypeUpdateList::getDeleteFields()
	 * @uses SPListsTypeUpdateList::getListVersion()
	 * @param SPListsTypeUpdateList UpdateList
	 * @return SPListsTypeUpdateListResponse
	 */
	public function UpdateList(SPListsTypeUpdateList $_SPListsTypeUpdateList)
	{
		try
		{
			$this->setResult(self::getSoapClient()->UpdateList(array('listName'=>$_SPListsTypeUpdateList->getListName(),'listProperties'=>$_SPListsTypeUpdateList->getListProperties(),'newFields'=>$_SPListsTypeUpdateList->getNewFields(),'updateFields'=>$_SPListsTypeUpdateList->getUpdateFields(),'deleteFields'=>$_SPListsTypeUpdateList->getDeleteFields(),'listVersion'=>$_SPListsTypeUpdateList->getListVersion())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call UpdateListItems
	 * @uses SPListsWsdlClass::getSoapClient()
	 * @uses SPListsWsdlClass::setResult()
	 * @uses SPListsWsdlClass::getResult()
	 * @uses SPListsWsdlClass::saveLastError()
	 * @uses SPListsTypeUpdateListItems::getListName()
	 * @uses SPListsTypeUpdateListItems::getUpdates()
	 * @param SPListsTypeUpdateListItems UpdateListItems
	 * @return SPListsTypeUpdateListItemsResponse
	 */
	public function UpdateListItems(SPListsTypeUpdateListItems $_SPListsTypeUpdateListItems)
	{
		try
		{
			$this->setResult(self::getSoapClient()->UpdateListItems(array('listName'=>$_SPListsTypeUpdateListItems->getListName(),'updates'=>$_SPListsTypeUpdateListItems->getUpdates())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call UpdateListItemsWithKnowledge
	 * @uses SPListsWsdlClass::getSoapClient()
	 * @uses SPListsWsdlClass::setResult()
	 * @uses SPListsWsdlClass::getResult()
	 * @uses SPListsWsdlClass::saveLastError()
	 * @uses SPListsTypeUpdateListItemsWithKnowledge::getListName()
	 * @uses SPListsTypeUpdateListItemsWithKnowledge::getUpdates()
	 * @uses SPListsTypeUpdateListItemsWithKnowledge::getSyncScope()
	 * @uses SPListsTypeUpdateListItemsWithKnowledge::getKnowledge()
	 * @param SPListsTypeUpdateListItemsWithKnowledge UpdateListItemsWithKnowledge
	 * @return SPListsTypeUpdateListItemsWithKnowledgeResponse
	 */
	public function UpdateListItemsWithKnowledge(SPListsTypeUpdateListItemsWithKnowledge $_SPListsTypeUpdateListItemsWithKnowledge)
	{
		try
		{
			$this->setResult(self::getSoapClient()->UpdateListItemsWithKnowledge(array('listName'=>$_SPListsTypeUpdateListItemsWithKnowledge->getListName(),'updates'=>$_SPListsTypeUpdateListItemsWithKnowledge->getUpdates(),'syncScope'=>$_SPListsTypeUpdateListItemsWithKnowledge->getSyncScope(),'knowledge'=>$_SPListsTypeUpdateListItemsWithKnowledge->getKnowledge())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call UpdateContentType
	 * @uses SPListsWsdlClass::getSoapClient()
	 * @uses SPListsWsdlClass::setResult()
	 * @uses SPListsWsdlClass::getResult()
	 * @uses SPListsWsdlClass::saveLastError()
	 * @uses SPListsTypeUpdateContentType::getListName()
	 * @uses SPListsTypeUpdateContentType::getContentTypeId()
	 * @uses SPListsTypeUpdateContentType::getContentTypeProperties()
	 * @uses SPListsTypeUpdateContentType::getNewFields()
	 * @uses SPListsTypeUpdateContentType::getUpdateFields()
	 * @uses SPListsTypeUpdateContentType::getDeleteFields()
	 * @uses SPListsTypeUpdateContentType::getAddToView()
	 * @param SPListsTypeUpdateContentType UpdateContentType
	 * @return SPListsTypeUpdateContentTypeResponse
	 */
	public function UpdateContentType(SPListsTypeUpdateContentType $_SPListsTypeUpdateContentType)
	{
		try
		{
			$this->setResult(self::getSoapClient()->UpdateContentType(array('listName'=>$_SPListsTypeUpdateContentType->getListName(),'contentTypeId'=>$_SPListsTypeUpdateContentType->getContentTypeId(),'contentTypeProperties'=>$_SPListsTypeUpdateContentType->getContentTypeProperties(),'newFields'=>$_SPListsTypeUpdateContentType->getNewFields(),'updateFields'=>$_SPListsTypeUpdateContentType->getUpdateFields(),'deleteFields'=>$_SPListsTypeUpdateContentType->getDeleteFields(),'addToView'=>$_SPListsTypeUpdateContentType->getAddToView())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call UpdateContentTypeXmlDocument
	 * @uses SPListsWsdlClass::getSoapClient()
	 * @uses SPListsWsdlClass::setResult()
	 * @uses SPListsWsdlClass::getResult()
	 * @uses SPListsWsdlClass::saveLastError()
	 * @uses SPListsTypeUpdateContentTypeXmlDocument::getListName()
	 * @uses SPListsTypeUpdateContentTypeXmlDocument::getContentTypeId()
	 * @uses SPListsTypeUpdateContentTypeXmlDocument::getNewDocument()
	 * @param SPListsTypeUpdateContentTypeXmlDocument UpdateContentTypeXmlDocument
	 * @return SPListsTypeUpdateContentTypeXmlDocumentResponse
	 */
	public function UpdateContentTypeXmlDocument(SPListsTypeUpdateContentTypeXmlDocument $_SPListsTypeUpdateContentTypeXmlDocument)
	{
		try
		{
			$this->setResult(self::getSoapClient()->UpdateContentTypeXmlDocument(array('listName'=>$_SPListsTypeUpdateContentTypeXmlDocument->getListName(),'contentTypeId'=>$_SPListsTypeUpdateContentTypeXmlDocument->getContentTypeId(),'newDocument'=>$_SPListsTypeUpdateContentTypeXmlDocument->getNewDocument())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call UpdateContentTypesXmlDocument
	 * @uses SPListsWsdlClass::getSoapClient()
	 * @uses SPListsWsdlClass::setResult()
	 * @uses SPListsWsdlClass::getResult()
	 * @uses SPListsWsdlClass::saveLastError()
	 * @uses SPListsTypeUpdateContentTypesXmlDocument::getListName()
	 * @uses SPListsTypeUpdateContentTypesXmlDocument::getNewDocument()
	 * @param SPListsTypeUpdateContentTypesXmlDocument UpdateContentTypesXmlDocument
	 * @return SPListsTypeUpdateContentTypesXmlDocumentResponse
	 */
	public function UpdateContentTypesXmlDocument(SPListsTypeUpdateContentTypesXmlDocument $_SPListsTypeUpdateContentTypesXmlDocument)
	{
		try
		{
			$this->setResult(self::getSoapClient()->UpdateContentTypesXmlDocument(array('listName'=>$_SPListsTypeUpdateContentTypesXmlDocument->getListName(),'newDocument'=>$_SPListsTypeUpdateContentTypesXmlDocument->getNewDocument())));
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
	 * @return SPListsTypeUpdateContentTypesXmlDocumentResponse
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