<?php
/**
 * Class file for SPListsServiceAdd
 * @date 07/07/2012
 */
/**
 * Class SPListsServiceAdd
 * @date 07/07/2012
 */
class SPListsServiceAdd extends SPListsWsdlClass
{
	/**
	 * Method to call AddList
	 * @uses SPListsWsdlClass::getSoapClient()
	 * @uses SPListsWsdlClass::setResult()
	 * @uses SPListsWsdlClass::getResult()
	 * @uses SPListsWsdlClass::saveLastError()
	 * @uses SPListsTypeAddList::getListName()
	 * @uses SPListsTypeAddList::getDescription()
	 * @uses SPListsTypeAddList::getTemplateID()
	 * @param SPListsTypeAddList AddList
	 * @return SPListsTypeAddListResponse
	 */
	public function AddList(SPListsTypeAddList $_SPListsTypeAddList)
	{
		try
		{
			$this->setResult(self::getSoapClient()->AddList(array('listName'=>$_SPListsTypeAddList->getListName(),'description'=>$_SPListsTypeAddList->getDescription(),'templateID'=>$_SPListsTypeAddList->getTemplateID())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call AddListFromFeature
	 * @uses SPListsWsdlClass::getSoapClient()
	 * @uses SPListsWsdlClass::setResult()
	 * @uses SPListsWsdlClass::getResult()
	 * @uses SPListsWsdlClass::saveLastError()
	 * @uses SPListsTypeAddListFromFeature::getListName()
	 * @uses SPListsTypeAddListFromFeature::getDescription()
	 * @uses SPListsTypeAddListFromFeature::getFeatureID()
	 * @uses SPListsTypeAddListFromFeature::getTemplateID()
	 * @param SPListsTypeAddListFromFeature AddListFromFeature
	 * @return SPListsTypeAddListFromFeatureResponse
	 */
	public function AddListFromFeature(SPListsTypeAddListFromFeature $_SPListsTypeAddListFromFeature)
	{
		try
		{
			$this->setResult(self::getSoapClient()->AddListFromFeature(array('listName'=>$_SPListsTypeAddListFromFeature->getListName(),'description'=>$_SPListsTypeAddListFromFeature->getDescription(),'featureID'=>$_SPListsTypeAddListFromFeature->getFeatureID(),'templateID'=>$_SPListsTypeAddListFromFeature->getTemplateID())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call AddDiscussionBoardItem
	 * @uses SPListsWsdlClass::getSoapClient()
	 * @uses SPListsWsdlClass::setResult()
	 * @uses SPListsWsdlClass::getResult()
	 * @uses SPListsWsdlClass::saveLastError()
	 * @uses SPListsTypeAddDiscussionBoardItem::getListName()
	 * @uses SPListsTypeAddDiscussionBoardItem::getMessage()
	 * @param SPListsTypeAddDiscussionBoardItem AddDiscussionBoardItem
	 * @return SPListsTypeAddDiscussionBoardItemResponse
	 */
	public function AddDiscussionBoardItem(SPListsTypeAddDiscussionBoardItem $_SPListsTypeAddDiscussionBoardItem)
	{
		try
		{
			$this->setResult(self::getSoapClient()->AddDiscussionBoardItem(array('listName'=>$_SPListsTypeAddDiscussionBoardItem->getListName(),'message'=>$_SPListsTypeAddDiscussionBoardItem->getMessage())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call AddWikiPage
	 * @uses SPListsWsdlClass::getSoapClient()
	 * @uses SPListsWsdlClass::setResult()
	 * @uses SPListsWsdlClass::getResult()
	 * @uses SPListsWsdlClass::saveLastError()
	 * @uses SPListsTypeAddWikiPage::getStrListName()
	 * @uses SPListsTypeAddWikiPage::getListRelPageUrl()
	 * @uses SPListsTypeAddWikiPage::getWikiContent()
	 * @param SPListsTypeAddWikiPage AddWikiPage
	 * @return SPListsTypeAddWikiPageResponse
	 */
	public function AddWikiPage(SPListsTypeAddWikiPage $_SPListsTypeAddWikiPage)
	{
		try
		{
			$this->setResult(self::getSoapClient()->AddWikiPage(array('strListName'=>$_SPListsTypeAddWikiPage->getStrListName(),'listRelPageUrl'=>$_SPListsTypeAddWikiPage->getListRelPageUrl(),'wikiContent'=>$_SPListsTypeAddWikiPage->getWikiContent())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call AddAttachment
	 * @uses SPListsWsdlClass::getSoapClient()
	 * @uses SPListsWsdlClass::setResult()
	 * @uses SPListsWsdlClass::getResult()
	 * @uses SPListsWsdlClass::saveLastError()
	 * @uses SPListsTypeAddAttachment::getListName()
	 * @uses SPListsTypeAddAttachment::getListItemID()
	 * @uses SPListsTypeAddAttachment::getFileName()
	 * @uses SPListsTypeAddAttachment::getAttachment()
	 * @param SPListsTypeAddAttachment AddAttachment
	 * @return SPListsTypeAddAttachmentResponse
	 */
	public function AddAttachment(SPListsTypeAddAttachment $_SPListsTypeAddAttachment)
	{
		try
		{
			$this->setResult(self::getSoapClient()->AddAttachment(array('listName'=>$_SPListsTypeAddAttachment->getListName(),'listItemID'=>$_SPListsTypeAddAttachment->getListItemID(),'fileName'=>$_SPListsTypeAddAttachment->getFileName(),'attachment'=>$_SPListsTypeAddAttachment->getAttachment())));
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
	 * @return SPListsTypeAddAttachmentResponse
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