<?php
/**
 * Class file for BarCodeSoftServiceCode39
 * @date 02/08/2012
 */
/**
 * Class BarCodeSoftServiceCode39
 * @date 02/08/2012
 */
class BarCodeSoftServiceCode39 extends BarCodeSoftWsdlClass
{
	/**
	 * Method to call Code39
	 * @uses BarCodeSoftWsdlClass::getSoapClient()
	 * @uses BarCodeSoftWsdlClass::setResult()
	 * @uses BarCodeSoftWsdlClass::getResult()
	 * @uses BarCodeSoftWsdlClass::saveLastError()
	 * @uses BarCodeSoftTypeCode39::getTextToEncode()
	 * @uses BarCodeSoftTypeCode39::getShowHumanReadable()
	 * @uses BarCodeSoftTypeCode39::getShowCheckDigit()
	 * @uses BarCodeSoftTypeCode39::getImageFormat()
	 * @uses BarCodeSoftTypeCode39::getOrientation()
	 * @uses BarCodeSoftTypeCode39::getResolution()
	 * @uses BarCodeSoftTypeCode39::getWidth()
	 * @uses BarCodeSoftTypeCode39::getHeight()
	 * @uses BarCodeSoftTypeCode39::getStrToken()
	 * @param BarCodeSoftTypeCode39 Code39
	 * @return BarCodeSoftTypeCode39Response
	 */
	public function Code39(BarCodeSoftTypeCode39 $_BarCodeSoftTypeCode39)
	{
		try
		{
			$this->setResult(self::getSoapClient()->Code39(array('textToEncode'=>$_BarCodeSoftTypeCode39->getTextToEncode(),'ShowHumanReadable'=>$_BarCodeSoftTypeCode39->getShowHumanReadable(),'ShowCheckDigit'=>$_BarCodeSoftTypeCode39->getShowCheckDigit(),'ImageFormat'=>$_BarCodeSoftTypeCode39->getImageFormat(),'Orientation'=>$_BarCodeSoftTypeCode39->getOrientation(),'Resolution'=>$_BarCodeSoftTypeCode39->getResolution(),'Width'=>$_BarCodeSoftTypeCode39->getWidth(),'Height'=>$_BarCodeSoftTypeCode39->getHeight(),'strToken'=>$_BarCodeSoftTypeCode39->getStrToken())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call Code39Ext
	 * @uses BarCodeSoftWsdlClass::getSoapClient()
	 * @uses BarCodeSoftWsdlClass::setResult()
	 * @uses BarCodeSoftWsdlClass::getResult()
	 * @uses BarCodeSoftWsdlClass::saveLastError()
	 * @uses BarCodeSoftTypeCode39Ext::getTextToEncode()
	 * @uses BarCodeSoftTypeCode39Ext::getShowHumanReadable()
	 * @uses BarCodeSoftTypeCode39Ext::getShowCheckDigit()
	 * @uses BarCodeSoftTypeCode39Ext::getImageFormat()
	 * @uses BarCodeSoftTypeCode39Ext::getOrientation()
	 * @uses BarCodeSoftTypeCode39Ext::getResolution()
	 * @uses BarCodeSoftTypeCode39Ext::getWidth()
	 * @uses BarCodeSoftTypeCode39Ext::getHeight()
	 * @uses BarCodeSoftTypeCode39Ext::getStrToken()
	 * @param BarCodeSoftTypeCode39Ext Code39Ext
	 * @return BarCodeSoftTypeCode39ExtResponse
	 */
	public function Code39Ext(BarCodeSoftTypeCode39Ext $_BarCodeSoftTypeCode39Ext)
	{
		try
		{
			$this->setResult(self::getSoapClient()->Code39Ext(array('textToEncode'=>$_BarCodeSoftTypeCode39Ext->getTextToEncode(),'ShowHumanReadable'=>$_BarCodeSoftTypeCode39Ext->getShowHumanReadable(),'ShowCheckDigit'=>$_BarCodeSoftTypeCode39Ext->getShowCheckDigit(),'ImageFormat'=>$_BarCodeSoftTypeCode39Ext->getImageFormat(),'Orientation'=>$_BarCodeSoftTypeCode39Ext->getOrientation(),'Resolution'=>$_BarCodeSoftTypeCode39Ext->getResolution(),'Width'=>$_BarCodeSoftTypeCode39Ext->getWidth(),'Height'=>$_BarCodeSoftTypeCode39Ext->getHeight(),'strToken'=>$_BarCodeSoftTypeCode39Ext->getStrToken())));
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
	 * @return BarCodeSoftTypeCode39Response|BarCodeSoftTypeCode39ExtResponse
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