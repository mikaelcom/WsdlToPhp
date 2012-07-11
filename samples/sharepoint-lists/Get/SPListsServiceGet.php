<?php
/**
 * Class file for SPListsServiceGet
 * @date 07/07/2012
 */
/**
 * Class SPListsServiceGet
 * @date 07/07/2012
 */
class SPListsServiceGet extends SPListsWsdlClass
{
	/**
	 * Method to call GetList
	 * @uses SPListsWsdlClass::getSoapClient()
	 * @uses SPListsWsdlClass::setResult()
	 * @uses SPListsWsdlClass::getResult()
	 * @uses SPListsWsdlClass::saveLastError()
	 * @uses SPListsTypeGetList::getListName()
	 * @param SPListsTypeGetList GetList
	 * @return SPListsTypeGetListResponse
	 */
	public function GetList(SPListsTypeGetList $_SPListsTypeGetList)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetList(array('listName'=>$_SPListsTypeGetList->getListName())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetListAndView
	 * @uses SPListsWsdlClass::getSoapClient()
	 * @uses SPListsWsdlClass::setResult()
	 * @uses SPListsWsdlClass::getResult()
	 * @uses SPListsWsdlClass::saveLastError()
	 * @uses SPListsTypeGetListAndView::getListName()
	 * @uses SPListsTypeGetListAndView::getViewName()
	 * @param SPListsTypeGetListAndView GetListAndView
	 * @return SPListsTypeGetListAndViewResponse
	 */
	public function GetListAndView(SPListsTypeGetListAndView $_SPListsTypeGetListAndView)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetListAndView(array('listName'=>$_SPListsTypeGetListAndView->getListName(),'viewName'=>$_SPListsTypeGetListAndView->getViewName())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetListCollection
	 * @uses SPListsWsdlClass::getSoapClient()
	 * @uses SPListsWsdlClass::setResult()
	 * @uses SPListsWsdlClass::getResult()
	 * @uses SPListsWsdlClass::saveLastError()
	 * @param SPListsTypeGetListCollection GetListCollection
	 * @return SPListsTypeGetListCollectionResponse
	 */
	public function GetListCollection(SPListsTypeGetListCollection $_SPListsTypeGetListCollection)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetListCollection(array()));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetListItems
	 * @uses SPListsWsdlClass::getSoapClient()
	 * @uses SPListsWsdlClass::setResult()
	 * @uses SPListsWsdlClass::getResult()
	 * @uses SPListsWsdlClass::saveLastError()
	 * @uses SPListsTypeGetListItems::getListName()
	 * @uses SPListsTypeGetListItems::getViewName()
	 * @uses SPListsTypeGetListItems::getQuery()
	 * @uses SPListsTypeGetListItems::getViewFields()
	 * @uses SPListsTypeGetListItems::getRowLimit()
	 * @uses SPListsTypeGetListItems::getQueryOptions()
	 * @uses SPListsTypeGetListItems::getWebID()
	 * @param SPListsTypeGetListItems GetListItems
	 * @return SPListsTypeGetListItemsResponse
	 */
	public function GetListItems(SPListsTypeGetListItems $_SPListsTypeGetListItems)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetListItems(array('listName'=>$_SPListsTypeGetListItems->getListName(),'viewName'=>$_SPListsTypeGetListItems->getViewName(),'query'=>$_SPListsTypeGetListItems->getQuery(),'viewFields'=>$_SPListsTypeGetListItems->getViewFields(),'rowLimit'=>$_SPListsTypeGetListItems->getRowLimit(),'queryOptions'=>$_SPListsTypeGetListItems->getQueryOptions(),'webID'=>$_SPListsTypeGetListItems->getWebID())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetListItemChanges
	 * @uses SPListsWsdlClass::getSoapClient()
	 * @uses SPListsWsdlClass::setResult()
	 * @uses SPListsWsdlClass::getResult()
	 * @uses SPListsWsdlClass::saveLastError()
	 * @uses SPListsTypeGetListItemChanges::getListName()
	 * @uses SPListsTypeGetListItemChanges::getViewFields()
	 * @uses SPListsTypeGetListItemChanges::getSince()
	 * @uses SPListsTypeGetListItemChanges::getContains()
	 * @param SPListsTypeGetListItemChanges GetListItemChanges
	 * @return SPListsTypeGetListItemChangesResponse
	 */
	public function GetListItemChanges(SPListsTypeGetListItemChanges $_SPListsTypeGetListItemChanges)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetListItemChanges(array('listName'=>$_SPListsTypeGetListItemChanges->getListName(),'viewFields'=>$_SPListsTypeGetListItemChanges->getViewFields(),'since'=>$_SPListsTypeGetListItemChanges->getSince(),'contains'=>$_SPListsTypeGetListItemChanges->getContains())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetListItemChangesWithKnowledge
	 * @uses SPListsWsdlClass::getSoapClient()
	 * @uses SPListsWsdlClass::setResult()
	 * @uses SPListsWsdlClass::getResult()
	 * @uses SPListsWsdlClass::saveLastError()
	 * @uses SPListsTypeGetListItemChangesWithKnowledge::getListName()
	 * @uses SPListsTypeGetListItemChangesWithKnowledge::getViewName()
	 * @uses SPListsTypeGetListItemChangesWithKnowledge::getQuery()
	 * @uses SPListsTypeGetListItemChangesWithKnowledge::getViewFields()
	 * @uses SPListsTypeGetListItemChangesWithKnowledge::getRowLimit()
	 * @uses SPListsTypeGetListItemChangesWithKnowledge::getQueryOptions()
	 * @uses SPListsTypeGetListItemChangesWithKnowledge::getSyncScope()
	 * @uses SPListsTypeGetListItemChangesWithKnowledge::getKnowledge()
	 * @uses SPListsTypeGetListItemChangesWithKnowledge::getContains()
	 * @param SPListsTypeGetListItemChangesWithKnowledge GetListItemChangesWithKnowledge
	 * @return SPListsTypeGetListItemChangesWithKnowledgeResponse
	 */
	public function GetListItemChangesWithKnowledge(SPListsTypeGetListItemChangesWithKnowledge $_SPListsTypeGetListItemChangesWithKnowledge)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetListItemChangesWithKnowledge(array('listName'=>$_SPListsTypeGetListItemChangesWithKnowledge->getListName(),'viewName'=>$_SPListsTypeGetListItemChangesWithKnowledge->getViewName(),'query'=>$_SPListsTypeGetListItemChangesWithKnowledge->getQuery(),'viewFields'=>$_SPListsTypeGetListItemChangesWithKnowledge->getViewFields(),'rowLimit'=>$_SPListsTypeGetListItemChangesWithKnowledge->getRowLimit(),'queryOptions'=>$_SPListsTypeGetListItemChangesWithKnowledge->getQueryOptions(),'syncScope'=>$_SPListsTypeGetListItemChangesWithKnowledge->getSyncScope(),'knowledge'=>$_SPListsTypeGetListItemChangesWithKnowledge->getKnowledge(),'contains'=>$_SPListsTypeGetListItemChangesWithKnowledge->getContains())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetListItemChangesSinceToken
	 * @uses SPListsWsdlClass::getSoapClient()
	 * @uses SPListsWsdlClass::setResult()
	 * @uses SPListsWsdlClass::getResult()
	 * @uses SPListsWsdlClass::saveLastError()
	 * @uses SPListsTypeGetListItemChangesSinceToken::getListName()
	 * @uses SPListsTypeGetListItemChangesSinceToken::getViewName()
	 * @uses SPListsTypeGetListItemChangesSinceToken::getQuery()
	 * @uses SPListsTypeGetListItemChangesSinceToken::getViewFields()
	 * @uses SPListsTypeGetListItemChangesSinceToken::getRowLimit()
	 * @uses SPListsTypeGetListItemChangesSinceToken::getQueryOptions()
	 * @uses SPListsTypeGetListItemChangesSinceToken::getChangeToken()
	 * @uses SPListsTypeGetListItemChangesSinceToken::getContains()
	 * @param SPListsTypeGetListItemChangesSinceToken GetListItemChangesSinceToken
	 * @return SPListsTypeGetListItemChangesSinceTokenResponse
	 */
	public function GetListItemChangesSinceToken(SPListsTypeGetListItemChangesSinceToken $_SPListsTypeGetListItemChangesSinceToken)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetListItemChangesSinceToken(array('listName'=>$_SPListsTypeGetListItemChangesSinceToken->getListName(),'viewName'=>$_SPListsTypeGetListItemChangesSinceToken->getViewName(),'query'=>$_SPListsTypeGetListItemChangesSinceToken->getQuery(),'viewFields'=>$_SPListsTypeGetListItemChangesSinceToken->getViewFields(),'rowLimit'=>$_SPListsTypeGetListItemChangesSinceToken->getRowLimit(),'queryOptions'=>$_SPListsTypeGetListItemChangesSinceToken->getQueryOptions(),'changeToken'=>$_SPListsTypeGetListItemChangesSinceToken->getChangeToken(),'contains'=>$_SPListsTypeGetListItemChangesSinceToken->getContains())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetVersionCollection
	 * @uses SPListsWsdlClass::getSoapClient()
	 * @uses SPListsWsdlClass::setResult()
	 * @uses SPListsWsdlClass::getResult()
	 * @uses SPListsWsdlClass::saveLastError()
	 * @uses SPListsTypeGetVersionCollection::getStrlistID()
	 * @uses SPListsTypeGetVersionCollection::getStrlistItemID()
	 * @uses SPListsTypeGetVersionCollection::getStrFieldName()
	 * @param SPListsTypeGetVersionCollection GetVersionCollection
	 * @return SPListsTypeGetVersionCollectionResponse
	 */
	public function GetVersionCollection(SPListsTypeGetVersionCollection $_SPListsTypeGetVersionCollection)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetVersionCollection(array('strlistID'=>$_SPListsTypeGetVersionCollection->getStrlistID(),'strlistItemID'=>$_SPListsTypeGetVersionCollection->getStrlistItemID(),'strFieldName'=>$_SPListsTypeGetVersionCollection->getStrFieldName())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetAttachmentCollection
	 * @uses SPListsWsdlClass::getSoapClient()
	 * @uses SPListsWsdlClass::setResult()
	 * @uses SPListsWsdlClass::getResult()
	 * @uses SPListsWsdlClass::saveLastError()
	 * @uses SPListsTypeGetAttachmentCollection::getListName()
	 * @uses SPListsTypeGetAttachmentCollection::getListItemID()
	 * @param SPListsTypeGetAttachmentCollection GetAttachmentCollection
	 * @return SPListsTypeGetAttachmentCollectionResponse
	 */
	public function GetAttachmentCollection(SPListsTypeGetAttachmentCollection $_SPListsTypeGetAttachmentCollection)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetAttachmentCollection(array('listName'=>$_SPListsTypeGetAttachmentCollection->getListName(),'listItemID'=>$_SPListsTypeGetAttachmentCollection->getListItemID())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetListContentTypes
	 * @uses SPListsWsdlClass::getSoapClient()
	 * @uses SPListsWsdlClass::setResult()
	 * @uses SPListsWsdlClass::getResult()
	 * @uses SPListsWsdlClass::saveLastError()
	 * @uses SPListsTypeGetListContentTypes::getListName()
	 * @uses SPListsTypeGetListContentTypes::getContentTypeId()
	 * @param SPListsTypeGetListContentTypes GetListContentTypes
	 * @return SPListsTypeGetListContentTypesResponse
	 */
	public function GetListContentTypes(SPListsTypeGetListContentTypes $_SPListsTypeGetListContentTypes)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetListContentTypes(array('listName'=>$_SPListsTypeGetListContentTypes->getListName(),'contentTypeId'=>$_SPListsTypeGetListContentTypes->getContentTypeId())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetListContentTypesAndProperties
	 * @uses SPListsWsdlClass::getSoapClient()
	 * @uses SPListsWsdlClass::setResult()
	 * @uses SPListsWsdlClass::getResult()
	 * @uses SPListsWsdlClass::saveLastError()
	 * @uses SPListsTypeGetListContentTypesAndProperties::getListName()
	 * @uses SPListsTypeGetListContentTypesAndProperties::getContentTypeId()
	 * @uses SPListsTypeGetListContentTypesAndProperties::getPropertyPrefix()
	 * @uses SPListsTypeGetListContentTypesAndProperties::getIncludeWebProperties()
	 * @param SPListsTypeGetListContentTypesAndProperties GetListContentTypesAndProperties
	 * @return SPListsTypeGetListContentTypesAndPropertiesResponse
	 */
	public function GetListContentTypesAndProperties(SPListsTypeGetListContentTypesAndProperties $_SPListsTypeGetListContentTypesAndProperties)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetListContentTypesAndProperties(array('listName'=>$_SPListsTypeGetListContentTypesAndProperties->getListName(),'contentTypeId'=>$_SPListsTypeGetListContentTypesAndProperties->getContentTypeId(),'propertyPrefix'=>$_SPListsTypeGetListContentTypesAndProperties->getPropertyPrefix(),'includeWebProperties'=>$_SPListsTypeGetListContentTypesAndProperties->getIncludeWebProperties())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetListContentType
	 * @uses SPListsWsdlClass::getSoapClient()
	 * @uses SPListsWsdlClass::setResult()
	 * @uses SPListsWsdlClass::getResult()
	 * @uses SPListsWsdlClass::saveLastError()
	 * @uses SPListsTypeGetListContentType::getListName()
	 * @uses SPListsTypeGetListContentType::getContentTypeId()
	 * @param SPListsTypeGetListContentType GetListContentType
	 * @return SPListsTypeGetListContentTypeResponse
	 */
	public function GetListContentType(SPListsTypeGetListContentType $_SPListsTypeGetListContentType)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetListContentType(array('listName'=>$_SPListsTypeGetListContentType->getListName(),'contentTypeId'=>$_SPListsTypeGetListContentType->getContentTypeId())));
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
	 * @return SPListsTypeGetListContentTypeResponse
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