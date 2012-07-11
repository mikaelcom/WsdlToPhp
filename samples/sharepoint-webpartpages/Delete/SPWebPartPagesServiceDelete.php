<?php
/**
 * Class file for SPWebPartPagesServiceDelete
 * @date 06/07/2012
 */
/**
 * Class SPWebPartPagesServiceDelete
 * @date 06/07/2012
 */
class SPWebPartPagesServiceDelete extends SPWebPartPagesWsdlClass
{
	/**
	 * Method to call DeleteWebPart
	 * @uses SPWebPartPagesWsdlClass::getSoapClient()
	 * @uses SPWebPartPagesWsdlClass::setResult()
	 * @uses SPWebPartPagesWsdlClass::getResult()
	 * @uses SPWebPartPagesWsdlClass::saveLastError()
	 * @uses SPWebPartPagesTypeDeleteWebPart::getPageUrl()
	 * @uses SPWebPartPagesTypeDeleteWebPart::getStorageKey()
	 * @uses SPWebPartPagesTypeDeleteWebPart::getStorage()
	 * @param SPWebPartPagesTypeDeleteWebPart DeleteWebPart
	 * @return SPWebPartPagesTypeDeleteWebPartResponse
	 */
	public function DeleteWebPart(SPWebPartPagesTypeDeleteWebPart $_SPWebPartPagesTypeDeleteWebPart)
	{
		try
		{
			$this->setResult(self::getSoapClient()->DeleteWebPart(array('pageUrl'=>$_SPWebPartPagesTypeDeleteWebPart->getPageUrl(),'storageKey'=>$_SPWebPartPagesTypeDeleteWebPart->getStorageKey(),'storage'=>$_SPWebPartPagesTypeDeleteWebPart->getStorage())));
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
	 * @return SPWebPartPagesTypeDeleteWebPartResponse
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