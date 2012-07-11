<?php
/**
 * Class file for SPWebPartPagesServiceAdd
 * @date 06/07/2012
 */
/**
 * Class SPWebPartPagesServiceAdd
 * @date 06/07/2012
 */
class SPWebPartPagesServiceAdd extends SPWebPartPagesWsdlClass
{
	/**
	 * Method to call AddWebPartToZone
	 * @uses SPWebPartPagesWsdlClass::getSoapClient()
	 * @uses SPWebPartPagesWsdlClass::setResult()
	 * @uses SPWebPartPagesWsdlClass::getResult()
	 * @uses SPWebPartPagesWsdlClass::saveLastError()
	 * @uses SPWebPartPagesTypeAddWebPartToZone::getPageUrl()
	 * @uses SPWebPartPagesTypeAddWebPartToZone::getWebPartXml()
	 * @uses SPWebPartPagesTypeAddWebPartToZone::getStorage()
	 * @uses SPWebPartPagesTypeAddWebPartToZone::getZoneId()
	 * @uses SPWebPartPagesTypeAddWebPartToZone::getZoneIndex()
	 * @param SPWebPartPagesTypeAddWebPartToZone AddWebPartToZone
	 * @return SPWebPartPagesTypeAddWebPartToZoneResponse
	 */
	public function AddWebPartToZone(SPWebPartPagesTypeAddWebPartToZone $_SPWebPartPagesTypeAddWebPartToZone)
	{
		try
		{
			$this->setResult(self::getSoapClient()->AddWebPartToZone(array('pageUrl'=>$_SPWebPartPagesTypeAddWebPartToZone->getPageUrl(),'webPartXml'=>$_SPWebPartPagesTypeAddWebPartToZone->getWebPartXml(),'storage'=>$_SPWebPartPagesTypeAddWebPartToZone->getStorage(),'zoneId'=>$_SPWebPartPagesTypeAddWebPartToZone->getZoneId(),'zoneIndex'=>$_SPWebPartPagesTypeAddWebPartToZone->getZoneIndex())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call AddWebPart
	 * @uses SPWebPartPagesWsdlClass::getSoapClient()
	 * @uses SPWebPartPagesWsdlClass::setResult()
	 * @uses SPWebPartPagesWsdlClass::getResult()
	 * @uses SPWebPartPagesWsdlClass::saveLastError()
	 * @uses SPWebPartPagesTypeAddWebPart::getPageUrl()
	 * @uses SPWebPartPagesTypeAddWebPart::getWebPartXml()
	 * @uses SPWebPartPagesTypeAddWebPart::getStorage()
	 * @param SPWebPartPagesTypeAddWebPart AddWebPart
	 * @return SPWebPartPagesTypeAddWebPartResponse
	 */
	public function AddWebPart(SPWebPartPagesTypeAddWebPart $_SPWebPartPagesTypeAddWebPart)
	{
		try
		{
			$this->setResult(self::getSoapClient()->AddWebPart(array('pageUrl'=>$_SPWebPartPagesTypeAddWebPart->getPageUrl(),'webPartXml'=>$_SPWebPartPagesTypeAddWebPart->getWebPartXml(),'storage'=>$_SPWebPartPagesTypeAddWebPart->getStorage())));
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
	 * @return SPWebPartPagesTypeAddWebPartResponse
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