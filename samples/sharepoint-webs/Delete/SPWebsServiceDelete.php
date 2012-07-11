<?php
/**
 * Class file for SPWebsServiceDelete
 * @date 06/07/2012
 */
/**
 * Class SPWebsServiceDelete
 * @date 06/07/2012
 */
class SPWebsServiceDelete extends SPWebsWsdlClass
{
	/**
	 * Method to call DeleteContentType
	 * @uses SPWebsWsdlClass::getSoapClient()
	 * @uses SPWebsWsdlClass::setResult()
	 * @uses SPWebsWsdlClass::getResult()
	 * @uses SPWebsWsdlClass::saveLastError()
	 * @uses SPWebsTypeDeleteContentType::getContentTypeId()
	 * @param SPWebsTypeDeleteContentType DeleteContentType
	 * @return SPWebsTypeDeleteContentTypeResponse
	 */
	public function DeleteContentType(SPWebsTypeDeleteContentType $_SPWebsTypeDeleteContentType)
	{
		try
		{
			$this->setResult(self::getSoapClient()->DeleteContentType(array('contentTypeId'=>$_SPWebsTypeDeleteContentType->getContentTypeId())));
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
	 * @return SPWebsTypeDeleteContentTypeResponse
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