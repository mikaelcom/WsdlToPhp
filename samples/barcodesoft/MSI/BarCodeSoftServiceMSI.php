<?php
/**
 * Class file for BarCodeSoftServiceMSI
 * @date 02/08/2012
 */
/**
 * Class BarCodeSoftServiceMSI
 * @date 02/08/2012
 */
class BarCodeSoftServiceMSI extends BarCodeSoftWsdlClass
{
	/**
	 * Method to call MSI
	 * @uses BarCodeSoftWsdlClass::getSoapClient()
	 * @uses BarCodeSoftWsdlClass::setResult()
	 * @uses BarCodeSoftWsdlClass::getResult()
	 * @uses BarCodeSoftWsdlClass::saveLastError()
	 * @uses BarCodeSoftTypeMSI::getTextToEncode()
	 * @uses BarCodeSoftTypeMSI::getShowHumanReadable()
	 * @uses BarCodeSoftTypeMSI::getShowCheckDigit()
	 * @uses BarCodeSoftTypeMSI::getImageFormat()
	 * @uses BarCodeSoftTypeMSI::getOrientation()
	 * @uses BarCodeSoftTypeMSI::getResolution()
	 * @uses BarCodeSoftTypeMSI::getWidth()
	 * @uses BarCodeSoftTypeMSI::getHeight()
	 * @uses BarCodeSoftTypeMSI::getStrToken()
	 * @param BarCodeSoftTypeMSI MSI
	 * @return BarCodeSoftTypeMSIResponse
	 */
	public function MSI(BarCodeSoftTypeMSI $_BarCodeSoftTypeMSI)
	{
		try
		{
			$this->setResult(self::getSoapClient()->MSI(array('textToEncode'=>$_BarCodeSoftTypeMSI->getTextToEncode(),'ShowHumanReadable'=>$_BarCodeSoftTypeMSI->getShowHumanReadable(),'ShowCheckDigit'=>$_BarCodeSoftTypeMSI->getShowCheckDigit(),'ImageFormat'=>$_BarCodeSoftTypeMSI->getImageFormat(),'Orientation'=>$_BarCodeSoftTypeMSI->getOrientation(),'Resolution'=>$_BarCodeSoftTypeMSI->getResolution(),'Width'=>$_BarCodeSoftTypeMSI->getWidth(),'Height'=>$_BarCodeSoftTypeMSI->getHeight(),'strToken'=>$_BarCodeSoftTypeMSI->getStrToken())));
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
	 * @return BarCodeSoftTypeMSIResponse
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