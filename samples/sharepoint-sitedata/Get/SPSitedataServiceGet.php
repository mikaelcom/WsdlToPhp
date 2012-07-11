<?php
/**
 * Class file for SPSitedataServiceGet
 * @date 06/07/2012
 */
/**
 * Class SPSitedataServiceGet
 * @date 06/07/2012
 */
class SPSitedataServiceGet extends SPSitedataWsdlClass
{
	/**
	 * Method to call GetSiteAndWeb
	 * @uses SPSitedataWsdlClass::getSoapClient()
	 * @uses SPSitedataWsdlClass::setResult()
	 * @uses SPSitedataWsdlClass::getResult()
	 * @uses SPSitedataWsdlClass::saveLastError()
	 * @uses SPSitedataTypeGetSiteAndWeb::getStrUrl()
	 * @param SPSitedataTypeGetSiteAndWeb GetSiteAndWeb
	 * @return SPSitedataTypeGetSiteAndWebResponse
	 */
	public function GetSiteAndWeb(SPSitedataTypeGetSiteAndWeb $_SPSitedataTypeGetSiteAndWeb)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetSiteAndWeb(array('strUrl'=>$_SPSitedataTypeGetSiteAndWeb->getStrUrl())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetSite
	 * @uses SPSitedataWsdlClass::getSoapClient()
	 * @uses SPSitedataWsdlClass::setResult()
	 * @uses SPSitedataWsdlClass::getResult()
	 * @uses SPSitedataWsdlClass::saveLastError()
	 * @param SPSitedataTypeGetSite GetSite
	 * @return SPSitedataTypeGetSiteResponse
	 */
	public function GetSite(SPSitedataTypeGetSite $_SPSitedataTypeGetSite)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetSite(array()));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetWeb
	 * @uses SPSitedataWsdlClass::getSoapClient()
	 * @uses SPSitedataWsdlClass::setResult()
	 * @uses SPSitedataWsdlClass::getResult()
	 * @uses SPSitedataWsdlClass::saveLastError()
	 * @param SPSitedataTypeGetWeb GetWeb
	 * @return SPSitedataTypeGetWebResponse
	 */
	public function GetWeb(SPSitedataTypeGetWeb $_SPSitedataTypeGetWeb)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetWeb(array()));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetList
	 * @uses SPSitedataWsdlClass::getSoapClient()
	 * @uses SPSitedataWsdlClass::setResult()
	 * @uses SPSitedataWsdlClass::getResult()
	 * @uses SPSitedataWsdlClass::saveLastError()
	 * @uses SPSitedataTypeGetList::getStrListName()
	 * @param SPSitedataTypeGetList GetList
	 * @return SPSitedataTypeGetListResponse
	 */
	public function GetList(SPSitedataTypeGetList $_SPSitedataTypeGetList)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetList(array('strListName'=>$_SPSitedataTypeGetList->getStrListName())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetListItems
	 * @uses SPSitedataWsdlClass::getSoapClient()
	 * @uses SPSitedataWsdlClass::setResult()
	 * @uses SPSitedataWsdlClass::getResult()
	 * @uses SPSitedataWsdlClass::saveLastError()
	 * @uses SPSitedataTypeGetListItems::getStrListName()
	 * @uses SPSitedataTypeGetListItems::getStrQuery()
	 * @uses SPSitedataTypeGetListItems::getStrViewFields()
	 * @uses SPSitedataTypeGetListItems::getURowLimit()
	 * @param SPSitedataTypeGetListItems GetListItems
	 * @return SPSitedataTypeGetListItemsResponse
	 */
	public function GetListItems(SPSitedataTypeGetListItems $_SPSitedataTypeGetListItems)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetListItems(array('strListName'=>$_SPSitedataTypeGetListItems->getStrListName(),'strQuery'=>$_SPSitedataTypeGetListItems->getStrQuery(),'strViewFields'=>$_SPSitedataTypeGetListItems->getStrViewFields(),'uRowLimit'=>$_SPSitedataTypeGetListItems->getURowLimit())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetAttachments
	 * @uses SPSitedataWsdlClass::getSoapClient()
	 * @uses SPSitedataWsdlClass::setResult()
	 * @uses SPSitedataWsdlClass::getResult()
	 * @uses SPSitedataWsdlClass::saveLastError()
	 * @uses SPSitedataTypeGetAttachments::getStrListName()
	 * @uses SPSitedataTypeGetAttachments::getStrItemId()
	 * @param SPSitedataTypeGetAttachments GetAttachments
	 * @return SPSitedataTypeGetAttachmentsResponse
	 */
	public function GetAttachments(SPSitedataTypeGetAttachments $_SPSitedataTypeGetAttachments)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetAttachments(array('strListName'=>$_SPSitedataTypeGetAttachments->getStrListName(),'strItemId'=>$_SPSitedataTypeGetAttachments->getStrItemId())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetURLSegments
	 * @uses SPSitedataWsdlClass::getSoapClient()
	 * @uses SPSitedataWsdlClass::setResult()
	 * @uses SPSitedataWsdlClass::getResult()
	 * @uses SPSitedataWsdlClass::saveLastError()
	 * @uses SPSitedataTypeGetURLSegments::getStrURL()
	 * @param SPSitedataTypeGetURLSegments GetURLSegments
	 * @return SPSitedataTypeGetURLSegmentsResponse
	 */
	public function GetURLSegments(SPSitedataTypeGetURLSegments $_SPSitedataTypeGetURLSegments)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetURLSegments(array('strURL'=>$_SPSitedataTypeGetURLSegments->getStrURL())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetListCollection
	 * @uses SPSitedataWsdlClass::getSoapClient()
	 * @uses SPSitedataWsdlClass::setResult()
	 * @uses SPSitedataWsdlClass::getResult()
	 * @uses SPSitedataWsdlClass::saveLastError()
	 * @param SPSitedataTypeGetListCollection GetListCollection
	 * @return SPSitedataTypeGetListCollectionResponse
	 */
	public function GetListCollection(SPSitedataTypeGetListCollection $_SPSitedataTypeGetListCollection)
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
	 * Method to call GetContent
	 * @uses SPSitedataWsdlClass::getSoapClient()
	 * @uses SPSitedataWsdlClass::setResult()
	 * @uses SPSitedataWsdlClass::getResult()
	 * @uses SPSitedataWsdlClass::saveLastError()
	 * @uses SPSitedataTypeGetContent::getObjectType()
	 * @uses SPSitedataTypeGetContent::getObjectId()
	 * @uses SPSitedataTypeGetContent::getFolderUrl()
	 * @uses SPSitedataTypeGetContent::getItemId()
	 * @uses SPSitedataTypeGetContent::getRetrieveChildItems()
	 * @uses SPSitedataTypeGetContent::getSecurityOnly()
	 * @uses SPSitedataTypeGetContent::getLastItemIdOnPage()
	 * @param SPSitedataTypeGetContent GetContent
	 * @return SPSitedataTypeGetContentResponse
	 */
	public function GetContent(SPSitedataTypeGetContent $_SPSitedataTypeGetContent)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetContent(array('objectType'=>$_SPSitedataTypeGetContent->getObjectType(),'objectId'=>$_SPSitedataTypeGetContent->getObjectId(),'folderUrl'=>$_SPSitedataTypeGetContent->getFolderUrl(),'itemId'=>$_SPSitedataTypeGetContent->getItemId(),'retrieveChildItems'=>$_SPSitedataTypeGetContent->getRetrieveChildItems(),'securityOnly'=>$_SPSitedataTypeGetContent->getSecurityOnly(),'lastItemIdOnPage'=>$_SPSitedataTypeGetContent->getLastItemIdOnPage())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetSiteUrl
	 * @uses SPSitedataWsdlClass::getSoapClient()
	 * @uses SPSitedataWsdlClass::setResult()
	 * @uses SPSitedataWsdlClass::getResult()
	 * @uses SPSitedataWsdlClass::saveLastError()
	 * @uses SPSitedataTypeGetSiteUrl::getUrl()
	 * @param SPSitedataTypeGetSiteUrl GetSiteUrl
	 * @return SPSitedataTypeGetSiteUrlResponse
	 */
	public function GetSiteUrl(SPSitedataTypeGetSiteUrl $_SPSitedataTypeGetSiteUrl)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetSiteUrl(array('Url'=>$_SPSitedataTypeGetSiteUrl->getUrl())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetChanges
	 * @uses SPSitedataWsdlClass::getSoapClient()
	 * @uses SPSitedataWsdlClass::setResult()
	 * @uses SPSitedataWsdlClass::getResult()
	 * @uses SPSitedataWsdlClass::saveLastError()
	 * @uses SPSitedataTypeGetChanges::getObjectType()
	 * @uses SPSitedataTypeGetChanges::getContentDatabaseId()
	 * @uses SPSitedataTypeGetChanges::getLastChangeId()
	 * @uses SPSitedataTypeGetChanges::getCurrentChangeId()
	 * @uses SPSitedataTypeGetChanges::getTimeout()
	 * @param SPSitedataTypeGetChanges GetChanges
	 * @return SPSitedataTypeGetChangesResponse
	 */
	public function GetChanges(SPSitedataTypeGetChanges $_SPSitedataTypeGetChanges)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetChanges(array('objectType'=>$_SPSitedataTypeGetChanges->getObjectType(),'contentDatabaseId'=>$_SPSitedataTypeGetChanges->getContentDatabaseId(),'LastChangeId'=>$_SPSitedataTypeGetChanges->getLastChangeId(),'CurrentChangeId'=>$_SPSitedataTypeGetChanges->getCurrentChangeId(),'Timeout'=>$_SPSitedataTypeGetChanges->getTimeout())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetChangesEx
	 * @uses SPSitedataWsdlClass::getSoapClient()
	 * @uses SPSitedataWsdlClass::setResult()
	 * @uses SPSitedataWsdlClass::getResult()
	 * @uses SPSitedataWsdlClass::saveLastError()
	 * @uses SPSitedataTypeGetChangesEx::getVersion()
	 * @uses SPSitedataTypeGetChangesEx::getXmlInput()
	 * @param SPSitedataTypeGetChangesEx GetChangesEx
	 * @return SPSitedataTypeGetChangesExResponse
	 */
	public function GetChangesEx(SPSitedataTypeGetChangesEx $_SPSitedataTypeGetChangesEx)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetChangesEx(array('version'=>$_SPSitedataTypeGetChangesEx->getVersion(),'xmlInput'=>$_SPSitedataTypeGetChangesEx->getXmlInput())));
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
	 * @return SPSitedataTypeGetChangesExResponse
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