<?php
/**
 * Class file for BarCodeSoftServiceCode25
 * @date 02/08/2012
 */
/**
 * Class BarCodeSoftServiceCode25
 * @date 02/08/2012
 */
class BarCodeSoftServiceCode25 extends BarCodeSoftWsdlClass
{
	/**
	 * Method to call Code25
	 * @uses BarCodeSoftWsdlClass::getSoapClient()
	 * @uses BarCodeSoftWsdlClass::setResult()
	 * @uses BarCodeSoftWsdlClass::getResult()
	 * @uses BarCodeSoftWsdlClass::saveLastError()
	 * @uses BarCodeSoftTypeCode25::getTextToEncode()
	 * @uses BarCodeSoftTypeCode25::getShowHumanReadable()
	 * @uses BarCodeSoftTypeCode25::getShowCheckDigit()
	 * @uses BarCodeSoftTypeCode25::getImageFormat()
	 * @uses BarCodeSoftTypeCode25::getOrientation()
	 * @uses BarCodeSoftTypeCode25::getResolution()
	 * @uses BarCodeSoftTypeCode25::getWidth()
	 * @uses BarCodeSoftTypeCode25::getHeight()
	 * @uses BarCodeSoftTypeCode25::getStrToken()
	 * @param BarCodeSoftTypeCode25 Code25
	 * @return BarCodeSoftTypeCode25Response
	 */
	public function Code25(BarCodeSoftTypeCode25 $_BarCodeSoftTypeCode25)
	{
		try
		{
			$this->setResult(self::getSoapClient()->Code25(array('textToEncode'=>$_BarCodeSoftTypeCode25->getTextToEncode(),'ShowHumanReadable'=>$_BarCodeSoftTypeCode25->getShowHumanReadable(),'ShowCheckDigit'=>$_BarCodeSoftTypeCode25->getShowCheckDigit(),'ImageFormat'=>$_BarCodeSoftTypeCode25->getImageFormat(),'Orientation'=>$_BarCodeSoftTypeCode25->getOrientation(),'Resolution'=>$_BarCodeSoftTypeCode25->getResolution(),'Width'=>$_BarCodeSoftTypeCode25->getWidth(),'Height'=>$_BarCodeSoftTypeCode25->getHeight(),'strToken'=>$_BarCodeSoftTypeCode25->getStrToken())));
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
	 * @return BarCodeSoftTypeCode25Response
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