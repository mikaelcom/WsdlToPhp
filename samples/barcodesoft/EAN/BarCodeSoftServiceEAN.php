<?php
/**
 * Class file for BarCodeSoftServiceEAN
 * @date 02/08/2012
 */
/**
 * Class BarCodeSoftServiceEAN
 * @date 02/08/2012
 */
class BarCodeSoftServiceEAN extends BarCodeSoftWsdlClass
{
	/**
	 * Method to call EAN13
	 * @uses BarCodeSoftWsdlClass::getSoapClient()
	 * @uses BarCodeSoftWsdlClass::setResult()
	 * @uses BarCodeSoftWsdlClass::getResult()
	 * @uses BarCodeSoftWsdlClass::saveLastError()
	 * @uses BarCodeSoftTypeEAN13::getTextToEncode()
	 * @uses BarCodeSoftTypeEAN13::getStrAddon()
	 * @uses BarCodeSoftTypeEAN13::getImageFormat()
	 * @uses BarCodeSoftTypeEAN13::getOrientation()
	 * @uses BarCodeSoftTypeEAN13::getResolution()
	 * @uses BarCodeSoftTypeEAN13::getWidth()
	 * @uses BarCodeSoftTypeEAN13::getHeight()
	 * @uses BarCodeSoftTypeEAN13::getStrToken()
	 * @param BarCodeSoftTypeEAN13 EAN13
	 * @return BarCodeSoftTypeEAN13Response
	 */
	public function EAN13(BarCodeSoftTypeEAN13 $_BarCodeSoftTypeEAN13)
	{
		try
		{
			$this->setResult(self::getSoapClient()->EAN13(array('textToEncode'=>$_BarCodeSoftTypeEAN13->getTextToEncode(),'strAddon'=>$_BarCodeSoftTypeEAN13->getStrAddon(),'ImageFormat'=>$_BarCodeSoftTypeEAN13->getImageFormat(),'Orientation'=>$_BarCodeSoftTypeEAN13->getOrientation(),'Resolution'=>$_BarCodeSoftTypeEAN13->getResolution(),'Width'=>$_BarCodeSoftTypeEAN13->getWidth(),'Height'=>$_BarCodeSoftTypeEAN13->getHeight(),'strToken'=>$_BarCodeSoftTypeEAN13->getStrToken())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call EAN8
	 * @uses BarCodeSoftWsdlClass::getSoapClient()
	 * @uses BarCodeSoftWsdlClass::setResult()
	 * @uses BarCodeSoftWsdlClass::getResult()
	 * @uses BarCodeSoftWsdlClass::saveLastError()
	 * @uses BarCodeSoftTypeEAN8::getTextToEncode()
	 * @uses BarCodeSoftTypeEAN8::getStrAddon()
	 * @uses BarCodeSoftTypeEAN8::getImageFormat()
	 * @uses BarCodeSoftTypeEAN8::getOrientation()
	 * @uses BarCodeSoftTypeEAN8::getResolution()
	 * @uses BarCodeSoftTypeEAN8::getWidth()
	 * @uses BarCodeSoftTypeEAN8::getHeight()
	 * @uses BarCodeSoftTypeEAN8::getStrToken()
	 * @param BarCodeSoftTypeEAN8 EAN8
	 * @return BarCodeSoftTypeEAN8Response
	 */
	public function EAN8(BarCodeSoftTypeEAN8 $_BarCodeSoftTypeEAN8)
	{
		try
		{
			$this->setResult(self::getSoapClient()->EAN8(array('textToEncode'=>$_BarCodeSoftTypeEAN8->getTextToEncode(),'strAddon'=>$_BarCodeSoftTypeEAN8->getStrAddon(),'ImageFormat'=>$_BarCodeSoftTypeEAN8->getImageFormat(),'Orientation'=>$_BarCodeSoftTypeEAN8->getOrientation(),'Resolution'=>$_BarCodeSoftTypeEAN8->getResolution(),'Width'=>$_BarCodeSoftTypeEAN8->getWidth(),'Height'=>$_BarCodeSoftTypeEAN8->getHeight(),'strToken'=>$_BarCodeSoftTypeEAN8->getStrToken())));
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
	 * @return BarCodeSoftTypeEAN13Response|BarCodeSoftTypeEAN8Response
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