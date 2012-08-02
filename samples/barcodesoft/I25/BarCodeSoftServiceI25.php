<?php
/**
 * Class file for BarCodeSoftServiceI25
 * @date 02/08/2012
 */
/**
 * Class BarCodeSoftServiceI25
 * @date 02/08/2012
 */
class BarCodeSoftServiceI25 extends BarCodeSoftWsdlClass
{
	/**
	 * Method to call I25
	 * @uses BarCodeSoftWsdlClass::getSoapClient()
	 * @uses BarCodeSoftWsdlClass::setResult()
	 * @uses BarCodeSoftWsdlClass::getResult()
	 * @uses BarCodeSoftWsdlClass::saveLastError()
	 * @uses BarCodeSoftTypeI25::getTextToEncode()
	 * @uses BarCodeSoftTypeI25::getShowHumanReadable()
	 * @uses BarCodeSoftTypeI25::getShowCheckDigit()
	 * @uses BarCodeSoftTypeI25::getImageFormat()
	 * @uses BarCodeSoftTypeI25::getOrientation()
	 * @uses BarCodeSoftTypeI25::getResolution()
	 * @uses BarCodeSoftTypeI25::getWidth()
	 * @uses BarCodeSoftTypeI25::getHeight()
	 * @uses BarCodeSoftTypeI25::getStrToken()
	 * @param BarCodeSoftTypeI25 I25
	 * @return BarCodeSoftTypeI25Response
	 */
	public function I25(BarCodeSoftTypeI25 $_BarCodeSoftTypeI25)
	{
		try
		{
			$this->setResult(self::getSoapClient()->I25(array('textToEncode'=>$_BarCodeSoftTypeI25->getTextToEncode(),'ShowHumanReadable'=>$_BarCodeSoftTypeI25->getShowHumanReadable(),'ShowCheckDigit'=>$_BarCodeSoftTypeI25->getShowCheckDigit(),'ImageFormat'=>$_BarCodeSoftTypeI25->getImageFormat(),'Orientation'=>$_BarCodeSoftTypeI25->getOrientation(),'Resolution'=>$_BarCodeSoftTypeI25->getResolution(),'Width'=>$_BarCodeSoftTypeI25->getWidth(),'Height'=>$_BarCodeSoftTypeI25->getHeight(),'strToken'=>$_BarCodeSoftTypeI25->getStrToken())));
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
	 * @return BarCodeSoftTypeI25Response
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