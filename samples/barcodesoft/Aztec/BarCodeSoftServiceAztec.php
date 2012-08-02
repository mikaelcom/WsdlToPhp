<?php
/**
 * Class file for BarCodeSoftServiceAztec
 * @date 02/08/2012
 */
/**
 * Class BarCodeSoftServiceAztec
 * @date 02/08/2012
 */
class BarCodeSoftServiceAztec extends BarCodeSoftWsdlClass
{
	/**
	 * Method to call Aztec
	 * @uses BarCodeSoftWsdlClass::getSoapClient()
	 * @uses BarCodeSoftWsdlClass::setResult()
	 * @uses BarCodeSoftWsdlClass::getResult()
	 * @uses BarCodeSoftWsdlClass::saveLastError()
	 * @uses BarCodeSoftTypeAztec::getTextToEncode()
	 * @uses BarCodeSoftTypeAztec::getImageFormat()
	 * @uses BarCodeSoftTypeAztec::getOrientation()
	 * @uses BarCodeSoftTypeAztec::getResolution()
	 * @uses BarCodeSoftTypeAztec::getNFormat()
	 * @uses BarCodeSoftTypeAztec::getErrorLevel()
	 * @uses BarCodeSoftTypeAztec::getSize()
	 * @uses BarCodeSoftTypeAztec::getStrToken()
	 * @param BarCodeSoftTypeAztec Aztec
	 * @return BarCodeSoftTypeAztecResponse
	 */
	public function Aztec(BarCodeSoftTypeAztec $_BarCodeSoftTypeAztec)
	{
		try
		{
			$this->setResult(self::getSoapClient()->Aztec(array('textToEncode'=>$_BarCodeSoftTypeAztec->getTextToEncode(),'ImageFormat'=>$_BarCodeSoftTypeAztec->getImageFormat(),'Orientation'=>$_BarCodeSoftTypeAztec->getOrientation(),'Resolution'=>$_BarCodeSoftTypeAztec->getResolution(),'nFormat'=>$_BarCodeSoftTypeAztec->getNFormat(),'ErrorLevel'=>$_BarCodeSoftTypeAztec->getErrorLevel(),'Size'=>$_BarCodeSoftTypeAztec->getSize(),'strToken'=>$_BarCodeSoftTypeAztec->getStrToken())));
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
	 * @return BarCodeSoftTypeAztecResponse
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