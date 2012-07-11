<?php
/**
 * Class file for SPWebsServiceCreate
 * @date 06/07/2012
 */
/**
 * Class SPWebsServiceCreate
 * @date 06/07/2012
 */
class SPWebsServiceCreate extends SPWebsWsdlClass
{
	/**
	 * Method to call CreateContentType
	 * @uses SPWebsWsdlClass::getSoapClient()
	 * @uses SPWebsWsdlClass::setResult()
	 * @uses SPWebsWsdlClass::getResult()
	 * @uses SPWebsWsdlClass::saveLastError()
	 * @uses SPWebsTypeCreateContentType::getDisplayName()
	 * @uses SPWebsTypeCreateContentType::getParentType()
	 * @uses SPWebsTypeCreateContentType::getNewFields()
	 * @uses SPWebsTypeCreateContentType::getContentTypeProperties()
	 * @param SPWebsTypeCreateContentType CreateContentType
	 * @return SPWebsTypeCreateContentTypeResponse
	 */
	public function CreateContentType(SPWebsTypeCreateContentType $_SPWebsTypeCreateContentType)
	{
		try
		{
			$this->setResult(self::getSoapClient()->CreateContentType(array('displayName'=>$_SPWebsTypeCreateContentType->getDisplayName(),'parentType'=>$_SPWebsTypeCreateContentType->getParentType(),'newFields'=>$_SPWebsTypeCreateContentType->getNewFields(),'contentTypeProperties'=>$_SPWebsTypeCreateContentType->getContentTypeProperties())));
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
	 * @return SPWebsTypeCreateContentTypeResponse
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