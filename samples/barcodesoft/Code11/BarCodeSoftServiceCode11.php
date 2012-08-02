<?php
/**
 * Class file for BarCodeSoftServiceCode11
 * @date 02/08/2012
 */
/**
 * Class BarCodeSoftServiceCode11
 * @date 02/08/2012
 */
class BarCodeSoftServiceCode11 extends BarCodeSoftWsdlClass
{
	/**
	 * Method to call Code11
	 * @uses BarCodeSoftWsdlClass::getSoapClient()
	 * @uses BarCodeSoftWsdlClass::setResult()
	 * @uses BarCodeSoftWsdlClass::getResult()
	 * @uses BarCodeSoftWsdlClass::saveLastError()
	 * @uses BarCodeSoftTypeCode11::getTextToEncode()
	 * @uses BarCodeSoftTypeCode11::getShowHumanReadable()
	 * @uses BarCodeSoftTypeCode11::getShowCheckDigit()
	 * @uses BarCodeSoftTypeCode11::getImageFormat()
	 * @uses BarCodeSoftTypeCode11::getOrientation()
	 * @uses BarCodeSoftTypeCode11::getResolution()
	 * @uses BarCodeSoftTypeCode11::getWidth()
	 * @uses BarCodeSoftTypeCode11::getHeight()
	 * @uses BarCodeSoftTypeCode11::getStrToken()
	 * @param BarCodeSoftTypeCode11 Code11
	 * @return BarCodeSoftTypeCode11Response
	 */
	public function Code11(BarCodeSoftTypeCode11 $_BarCodeSoftTypeCode11)
	{
		try
		{
			$this->setResult(self::getSoapClient()->Code11(array('textToEncode'=>$_BarCodeSoftTypeCode11->getTextToEncode(),'ShowHumanReadable'=>$_BarCodeSoftTypeCode11->getShowHumanReadable(),'ShowCheckDigit'=>$_BarCodeSoftTypeCode11->getShowCheckDigit(),'ImageFormat'=>$_BarCodeSoftTypeCode11->getImageFormat(),'Orientation'=>$_BarCodeSoftTypeCode11->getOrientation(),'Resolution'=>$_BarCodeSoftTypeCode11->getResolution(),'Width'=>$_BarCodeSoftTypeCode11->getWidth(),'Height'=>$_BarCodeSoftTypeCode11->getHeight(),'strToken'=>$_BarCodeSoftTypeCode11->getStrToken())));
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
	 * @return BarCodeSoftTypeCode11Response
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