<?php
/**
 * Class file for BarCodeSoftServiceQRC
 * @date 02/08/2012
 */
/**
 * Class BarCodeSoftServiceQRC
 * @date 02/08/2012
 */
class BarCodeSoftServiceQRC extends BarCodeSoftWsdlClass
{
	/**
	 * Method to call QRCode
	 * @uses BarCodeSoftWsdlClass::getSoapClient()
	 * @uses BarCodeSoftWsdlClass::setResult()
	 * @uses BarCodeSoftWsdlClass::getResult()
	 * @uses BarCodeSoftWsdlClass::saveLastError()
	 * @uses BarCodeSoftTypeQRCode::getTextToEncode()
	 * @uses BarCodeSoftTypeQRCode::getEccLevel()
	 * @uses BarCodeSoftTypeQRCode::getQRCodeFormat()
	 * @uses BarCodeSoftTypeQRCode::getImageFormat()
	 * @uses BarCodeSoftTypeQRCode::getOrientation()
	 * @uses BarCodeSoftTypeQRCode::getResolution()
	 * @uses BarCodeSoftTypeQRCode::getSize()
	 * @uses BarCodeSoftTypeQRCode::getStrToken()
	 * @param BarCodeSoftTypeQRCode QRCode
	 * @return BarCodeSoftTypeQRCodeResponse
	 */
	public function QRCode(BarCodeSoftTypeQRCode $_BarCodeSoftTypeQRCode)
	{
		try
		{
			$this->setResult(self::getSoapClient()->QRCode(array('textToEncode'=>$_BarCodeSoftTypeQRCode->getTextToEncode(),'EccLevel'=>$_BarCodeSoftTypeQRCode->getEccLevel(),'QRCodeFormat'=>$_BarCodeSoftTypeQRCode->getQRCodeFormat(),'ImageFormat'=>$_BarCodeSoftTypeQRCode->getImageFormat(),'Orientation'=>$_BarCodeSoftTypeQRCode->getOrientation(),'Resolution'=>$_BarCodeSoftTypeQRCode->getResolution(),'Size'=>$_BarCodeSoftTypeQRCode->getSize(),'strToken'=>$_BarCodeSoftTypeQRCode->getStrToken())));
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
	 * @return BarCodeSoftTypeQRCodeResponse
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