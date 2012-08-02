<?php
/**
 * Class file for BarCodeSoftServiceCodabar
 * @date 02/08/2012
 */
/**
 * Class BarCodeSoftServiceCodabar
 * @date 02/08/2012
 */
class BarCodeSoftServiceCodabar extends BarCodeSoftWsdlClass
{
	/**
	 * Method to call Codabar
	 * @uses BarCodeSoftWsdlClass::getSoapClient()
	 * @uses BarCodeSoftWsdlClass::setResult()
	 * @uses BarCodeSoftWsdlClass::getResult()
	 * @uses BarCodeSoftWsdlClass::saveLastError()
	 * @uses BarCodeSoftTypeCodabar::getTextToEncode()
	 * @uses BarCodeSoftTypeCodabar::getShowHumanReadable()
	 * @uses BarCodeSoftTypeCodabar::getShowCheckDigit()
	 * @uses BarCodeSoftTypeCodabar::getImageFormat()
	 * @uses BarCodeSoftTypeCodabar::getOrientation()
	 * @uses BarCodeSoftTypeCodabar::getResolution()
	 * @uses BarCodeSoftTypeCodabar::getWidth()
	 * @uses BarCodeSoftTypeCodabar::getHeight()
	 * @uses BarCodeSoftTypeCodabar::getStrToken()
	 * @param BarCodeSoftTypeCodabar Codabar
	 * @return BarCodeSoftTypeCodabarResponse
	 */
	public function Codabar(BarCodeSoftTypeCodabar $_BarCodeSoftTypeCodabar)
	{
		try
		{
			$this->setResult(self::getSoapClient()->Codabar(array('textToEncode'=>$_BarCodeSoftTypeCodabar->getTextToEncode(),'ShowHumanReadable'=>$_BarCodeSoftTypeCodabar->getShowHumanReadable(),'ShowCheckDigit'=>$_BarCodeSoftTypeCodabar->getShowCheckDigit(),'ImageFormat'=>$_BarCodeSoftTypeCodabar->getImageFormat(),'Orientation'=>$_BarCodeSoftTypeCodabar->getOrientation(),'Resolution'=>$_BarCodeSoftTypeCodabar->getResolution(),'Width'=>$_BarCodeSoftTypeCodabar->getWidth(),'Height'=>$_BarCodeSoftTypeCodabar->getHeight(),'strToken'=>$_BarCodeSoftTypeCodabar->getStrToken())));
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
	 * @return BarCodeSoftTypeCodabarResponse
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