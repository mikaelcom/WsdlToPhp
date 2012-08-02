<?php
/**
 * Class file for BarCodeSoftServiceCode128
 * @date 02/08/2012
 */
/**
 * Class BarCodeSoftServiceCode128
 * @date 02/08/2012
 */
class BarCodeSoftServiceCode128 extends BarCodeSoftWsdlClass
{
	/**
	 * Method to call Code128A
	 * @uses BarCodeSoftWsdlClass::getSoapClient()
	 * @uses BarCodeSoftWsdlClass::setResult()
	 * @uses BarCodeSoftWsdlClass::getResult()
	 * @uses BarCodeSoftWsdlClass::saveLastError()
	 * @uses BarCodeSoftTypeCode128A::getTextToEncode()
	 * @uses BarCodeSoftTypeCode128A::getShowHumanReadable()
	 * @uses BarCodeSoftTypeCode128A::getShowCheckDigit()
	 * @uses BarCodeSoftTypeCode128A::getImageFormat()
	 * @uses BarCodeSoftTypeCode128A::getOrientation()
	 * @uses BarCodeSoftTypeCode128A::getResolution()
	 * @uses BarCodeSoftTypeCode128A::getWidth()
	 * @uses BarCodeSoftTypeCode128A::getHeight()
	 * @uses BarCodeSoftTypeCode128A::getStrToken()
	 * @param BarCodeSoftTypeCode128A Code128A
	 * @return BarCodeSoftTypeCode128AResponse
	 */
	public function Code128A(BarCodeSoftTypeCode128A $_BarCodeSoftTypeCode128A)
	{
		try
		{
			$this->setResult(self::getSoapClient()->Code128A(array('textToEncode'=>$_BarCodeSoftTypeCode128A->getTextToEncode(),'ShowHumanReadable'=>$_BarCodeSoftTypeCode128A->getShowHumanReadable(),'ShowCheckDigit'=>$_BarCodeSoftTypeCode128A->getShowCheckDigit(),'ImageFormat'=>$_BarCodeSoftTypeCode128A->getImageFormat(),'Orientation'=>$_BarCodeSoftTypeCode128A->getOrientation(),'Resolution'=>$_BarCodeSoftTypeCode128A->getResolution(),'Width'=>$_BarCodeSoftTypeCode128A->getWidth(),'Height'=>$_BarCodeSoftTypeCode128A->getHeight(),'strToken'=>$_BarCodeSoftTypeCode128A->getStrToken())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call Code128B
	 * @uses BarCodeSoftWsdlClass::getSoapClient()
	 * @uses BarCodeSoftWsdlClass::setResult()
	 * @uses BarCodeSoftWsdlClass::getResult()
	 * @uses BarCodeSoftWsdlClass::saveLastError()
	 * @uses BarCodeSoftTypeCode128B::getTextToEncode()
	 * @uses BarCodeSoftTypeCode128B::getShowHumanReadable()
	 * @uses BarCodeSoftTypeCode128B::getShowCheckDigit()
	 * @uses BarCodeSoftTypeCode128B::getImageFormat()
	 * @uses BarCodeSoftTypeCode128B::getOrientation()
	 * @uses BarCodeSoftTypeCode128B::getResolution()
	 * @uses BarCodeSoftTypeCode128B::getWidth()
	 * @uses BarCodeSoftTypeCode128B::getHeight()
	 * @uses BarCodeSoftTypeCode128B::getStrToken()
	 * @param BarCodeSoftTypeCode128B Code128B
	 * @return BarCodeSoftTypeCode128BResponse
	 */
	public function Code128B(BarCodeSoftTypeCode128B $_BarCodeSoftTypeCode128B)
	{
		try
		{
			$this->setResult(self::getSoapClient()->Code128B(array('textToEncode'=>$_BarCodeSoftTypeCode128B->getTextToEncode(),'ShowHumanReadable'=>$_BarCodeSoftTypeCode128B->getShowHumanReadable(),'ShowCheckDigit'=>$_BarCodeSoftTypeCode128B->getShowCheckDigit(),'ImageFormat'=>$_BarCodeSoftTypeCode128B->getImageFormat(),'Orientation'=>$_BarCodeSoftTypeCode128B->getOrientation(),'Resolution'=>$_BarCodeSoftTypeCode128B->getResolution(),'Width'=>$_BarCodeSoftTypeCode128B->getWidth(),'Height'=>$_BarCodeSoftTypeCode128B->getHeight(),'strToken'=>$_BarCodeSoftTypeCode128B->getStrToken())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call Code128C
	 * @uses BarCodeSoftWsdlClass::getSoapClient()
	 * @uses BarCodeSoftWsdlClass::setResult()
	 * @uses BarCodeSoftWsdlClass::getResult()
	 * @uses BarCodeSoftWsdlClass::saveLastError()
	 * @uses BarCodeSoftTypeCode128C::getTextToEncode()
	 * @uses BarCodeSoftTypeCode128C::getShowHumanReadable()
	 * @uses BarCodeSoftTypeCode128C::getShowCheckDigit()
	 * @uses BarCodeSoftTypeCode128C::getImageFormat()
	 * @uses BarCodeSoftTypeCode128C::getOrientation()
	 * @uses BarCodeSoftTypeCode128C::getResolution()
	 * @uses BarCodeSoftTypeCode128C::getWidth()
	 * @uses BarCodeSoftTypeCode128C::getHeight()
	 * @uses BarCodeSoftTypeCode128C::getStrToken()
	 * @param BarCodeSoftTypeCode128C Code128C
	 * @return BarCodeSoftTypeCode128CResponse
	 */
	public function Code128C(BarCodeSoftTypeCode128C $_BarCodeSoftTypeCode128C)
	{
		try
		{
			$this->setResult(self::getSoapClient()->Code128C(array('textToEncode'=>$_BarCodeSoftTypeCode128C->getTextToEncode(),'ShowHumanReadable'=>$_BarCodeSoftTypeCode128C->getShowHumanReadable(),'ShowCheckDigit'=>$_BarCodeSoftTypeCode128C->getShowCheckDigit(),'ImageFormat'=>$_BarCodeSoftTypeCode128C->getImageFormat(),'Orientation'=>$_BarCodeSoftTypeCode128C->getOrientation(),'Resolution'=>$_BarCodeSoftTypeCode128C->getResolution(),'Width'=>$_BarCodeSoftTypeCode128C->getWidth(),'Height'=>$_BarCodeSoftTypeCode128C->getHeight(),'strToken'=>$_BarCodeSoftTypeCode128C->getStrToken())));
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
	 * @return BarCodeSoftTypeCode128AResponse|BarCodeSoftTypeCode128BResponse|BarCodeSoftTypeCode128CResponse
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