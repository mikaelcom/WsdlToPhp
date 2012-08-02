<?php
/**
 * Class file for BarCodeSoftServiceCode93
 * @date 02/08/2012
 */
/**
 * Class BarCodeSoftServiceCode93
 * @date 02/08/2012
 */
class BarCodeSoftServiceCode93 extends BarCodeSoftWsdlClass
{
	/**
	 * Method to call Code93
	 * @uses BarCodeSoftWsdlClass::getSoapClient()
	 * @uses BarCodeSoftWsdlClass::setResult()
	 * @uses BarCodeSoftWsdlClass::getResult()
	 * @uses BarCodeSoftWsdlClass::saveLastError()
	 * @uses BarCodeSoftTypeCode93::getTextToEncode()
	 * @uses BarCodeSoftTypeCode93::getShowHumanReadable()
	 * @uses BarCodeSoftTypeCode93::getShowCheckDigit()
	 * @uses BarCodeSoftTypeCode93::getImageFormat()
	 * @uses BarCodeSoftTypeCode93::getOrientation()
	 * @uses BarCodeSoftTypeCode93::getResolution()
	 * @uses BarCodeSoftTypeCode93::getWidth()
	 * @uses BarCodeSoftTypeCode93::getHeight()
	 * @uses BarCodeSoftTypeCode93::getStrToken()
	 * @param BarCodeSoftTypeCode93 Code93
	 * @return BarCodeSoftTypeCode93Response
	 */
	public function Code93(BarCodeSoftTypeCode93 $_BarCodeSoftTypeCode93)
	{
		try
		{
			$this->setResult(self::getSoapClient()->Code93(array('textToEncode'=>$_BarCodeSoftTypeCode93->getTextToEncode(),'ShowHumanReadable'=>$_BarCodeSoftTypeCode93->getShowHumanReadable(),'ShowCheckDigit'=>$_BarCodeSoftTypeCode93->getShowCheckDigit(),'ImageFormat'=>$_BarCodeSoftTypeCode93->getImageFormat(),'Orientation'=>$_BarCodeSoftTypeCode93->getOrientation(),'Resolution'=>$_BarCodeSoftTypeCode93->getResolution(),'Width'=>$_BarCodeSoftTypeCode93->getWidth(),'Height'=>$_BarCodeSoftTypeCode93->getHeight(),'strToken'=>$_BarCodeSoftTypeCode93->getStrToken())));
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
	 * @return BarCodeSoftTypeCode93Response
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