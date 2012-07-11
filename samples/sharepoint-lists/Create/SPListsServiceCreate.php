<?php
/**
 * Class file for SPListsServiceCreate
 * @date 07/07/2012
 */
/**
 * Class SPListsServiceCreate
 * @date 07/07/2012
 */
class SPListsServiceCreate extends SPListsWsdlClass
{
	/**
	 * Method to call CreateContentType
	 * @uses SPListsWsdlClass::getSoapClient()
	 * @uses SPListsWsdlClass::setResult()
	 * @uses SPListsWsdlClass::getResult()
	 * @uses SPListsWsdlClass::saveLastError()
	 * @uses SPListsTypeCreateContentType::getListName()
	 * @uses SPListsTypeCreateContentType::getDisplayName()
	 * @uses SPListsTypeCreateContentType::getParentType()
	 * @uses SPListsTypeCreateContentType::getFields()
	 * @uses SPListsTypeCreateContentType::getContentTypeProperties()
	 * @uses SPListsTypeCreateContentType::getAddToView()
	 * @param SPListsTypeCreateContentType CreateContentType
	 * @return SPListsTypeCreateContentTypeResponse
	 */
	public function CreateContentType(SPListsTypeCreateContentType $_SPListsTypeCreateContentType)
	{
		try
		{
			$this->setResult(self::getSoapClient()->CreateContentType(array('listName'=>$_SPListsTypeCreateContentType->getListName(),'displayName'=>$_SPListsTypeCreateContentType->getDisplayName(),'parentType'=>$_SPListsTypeCreateContentType->getParentType(),'fields'=>$_SPListsTypeCreateContentType->getFields(),'contentTypeProperties'=>$_SPListsTypeCreateContentType->getContentTypeProperties(),'addToView'=>$_SPListsTypeCreateContentType->getAddToView())));
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
	 * @return SPListsTypeCreateContentTypeResponse
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