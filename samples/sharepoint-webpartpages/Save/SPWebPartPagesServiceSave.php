<?php
/**
 * Class file for SPWebPartPagesServiceSave
 * @date 06/07/2012
 */
/**
 * Class SPWebPartPagesServiceSave
 * @date 06/07/2012
 */
class SPWebPartPagesServiceSave extends SPWebPartPagesWsdlClass
{
	/**
	 * Method to call SaveWebPart
	 * @uses SPWebPartPagesWsdlClass::getSoapClient()
	 * @uses SPWebPartPagesWsdlClass::setResult()
	 * @uses SPWebPartPagesWsdlClass::getResult()
	 * @uses SPWebPartPagesWsdlClass::saveLastError()
	 * @uses SPWebPartPagesTypeSaveWebPart::getPageUrl()
	 * @uses SPWebPartPagesTypeSaveWebPart::getStorageKey()
	 * @uses SPWebPartPagesTypeSaveWebPart::getWebPartXml()
	 * @uses SPWebPartPagesTypeSaveWebPart::getStorage()
	 * @param SPWebPartPagesTypeSaveWebPart SaveWebPart
	 * @return SPWebPartPagesTypeSaveWebPartResponse
	 */
	public function SaveWebPart(SPWebPartPagesTypeSaveWebPart $_SPWebPartPagesTypeSaveWebPart)
	{
		try
		{
			$this->setResult(self::getSoapClient()->SaveWebPart(array('pageUrl'=>$_SPWebPartPagesTypeSaveWebPart->getPageUrl(),'storageKey'=>$_SPWebPartPagesTypeSaveWebPart->getStorageKey(),'webPartXml'=>$_SPWebPartPagesTypeSaveWebPart->getWebPartXml(),'storage'=>$_SPWebPartPagesTypeSaveWebPart->getStorage())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call SaveWebPart2
	 * @uses SPWebPartPagesWsdlClass::getSoapClient()
	 * @uses SPWebPartPagesWsdlClass::setResult()
	 * @uses SPWebPartPagesWsdlClass::getResult()
	 * @uses SPWebPartPagesWsdlClass::saveLastError()
	 * @uses SPWebPartPagesTypeSaveWebPart2::getPageUrl()
	 * @uses SPWebPartPagesTypeSaveWebPart2::getStorageKey()
	 * @uses SPWebPartPagesTypeSaveWebPart2::getWebPartXml()
	 * @uses SPWebPartPagesTypeSaveWebPart2::getStorage()
	 * @uses SPWebPartPagesTypeSaveWebPart2::getAllowTypeChange()
	 * @param SPWebPartPagesTypeSaveWebPart2 SaveWebPart2
	 * @return SPWebPartPagesTypeSaveWebPart2Response
	 */
	public function SaveWebPart2(SPWebPartPagesTypeSaveWebPart2 $_SPWebPartPagesTypeSaveWebPart2)
	{
		try
		{
			$this->setResult(self::getSoapClient()->SaveWebPart2(array('pageUrl'=>$_SPWebPartPagesTypeSaveWebPart2->getPageUrl(),'storageKey'=>$_SPWebPartPagesTypeSaveWebPart2->getStorageKey(),'webPartXml'=>$_SPWebPartPagesTypeSaveWebPart2->getWebPartXml(),'storage'=>$_SPWebPartPagesTypeSaveWebPart2->getStorage(),'allowTypeChange'=>$_SPWebPartPagesTypeSaveWebPart2->getAllowTypeChange())));
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
	 * @return SPWebPartPagesTypeSaveWebPart2Response
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