<?php
/**
 * Class file for BarCodeSoftServiceTelepen
 * @date 02/08/2012
 */
/**
 * Class BarCodeSoftServiceTelepen
 * @date 02/08/2012
 */
class BarCodeSoftServiceTelepen extends BarCodeSoftWsdlClass
{
	/**
	 * Method to call Telepen
	 * @uses BarCodeSoftWsdlClass::getSoapClient()
	 * @uses BarCodeSoftWsdlClass::setResult()
	 * @uses BarCodeSoftWsdlClass::getResult()
	 * @uses BarCodeSoftWsdlClass::saveLastError()
	 * @uses BarCodeSoftTypeTelepen::getTextToEncode()
	 * @uses BarCodeSoftTypeTelepen::getShowHumanReadable()
	 * @uses BarCodeSoftTypeTelepen::getShowCheckDigit()
	 * @uses BarCodeSoftTypeTelepen::getImageFormat()
	 * @uses BarCodeSoftTypeTelepen::getOrientation()
	 * @uses BarCodeSoftTypeTelepen::getResolution()
	 * @uses BarCodeSoftTypeTelepen::getWidth()
	 * @uses BarCodeSoftTypeTelepen::getHeight()
	 * @uses BarCodeSoftTypeTelepen::getStrToken()
	 * @param BarCodeSoftTypeTelepen Telepen
	 * @return BarCodeSoftTypeTelepenResponse
	 */
	public function Telepen(BarCodeSoftTypeTelepen $_BarCodeSoftTypeTelepen)
	{
		try
		{
			$this->setResult(self::getSoapClient()->Telepen(array('textToEncode'=>$_BarCodeSoftTypeTelepen->getTextToEncode(),'ShowHumanReadable'=>$_BarCodeSoftTypeTelepen->getShowHumanReadable(),'ShowCheckDigit'=>$_BarCodeSoftTypeTelepen->getShowCheckDigit(),'ImageFormat'=>$_BarCodeSoftTypeTelepen->getImageFormat(),'Orientation'=>$_BarCodeSoftTypeTelepen->getOrientation(),'Resolution'=>$_BarCodeSoftTypeTelepen->getResolution(),'Width'=>$_BarCodeSoftTypeTelepen->getWidth(),'Height'=>$_BarCodeSoftTypeTelepen->getHeight(),'strToken'=>$_BarCodeSoftTypeTelepen->getStrToken())));
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
	 * @return BarCodeSoftTypeTelepenResponse
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