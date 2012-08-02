<?php
/**
 * Class file for BarCodeSoftServiceGS
 * @date 02/08/2012
 */
/**
 * Class BarCodeSoftServiceGS
 * @date 02/08/2012
 */
class BarCodeSoftServiceGS extends BarCodeSoftWsdlClass
{
	/**
	 * Method to call GS1128
	 * @uses BarCodeSoftWsdlClass::getSoapClient()
	 * @uses BarCodeSoftWsdlClass::setResult()
	 * @uses BarCodeSoftWsdlClass::getResult()
	 * @uses BarCodeSoftWsdlClass::saveLastError()
	 * @uses BarCodeSoftTypeGS1128::getTextToEncode()
	 * @uses BarCodeSoftTypeGS1128::getShowHumanReadable()
	 * @uses BarCodeSoftTypeGS1128::getShowCheckDigit()
	 * @uses BarCodeSoftTypeGS1128::getImageFormat()
	 * @uses BarCodeSoftTypeGS1128::getOrientation()
	 * @uses BarCodeSoftTypeGS1128::getResolution()
	 * @uses BarCodeSoftTypeGS1128::getWidth()
	 * @uses BarCodeSoftTypeGS1128::getHeight()
	 * @uses BarCodeSoftTypeGS1128::getStrToken()
	 * @param BarCodeSoftTypeGS1128 GS1128
	 * @return BarCodeSoftTypeGS1128Response
	 */
	public function GS1128(BarCodeSoftTypeGS1128 $_BarCodeSoftTypeGS1128)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GS1128(array('textToEncode'=>$_BarCodeSoftTypeGS1128->getTextToEncode(),'ShowHumanReadable'=>$_BarCodeSoftTypeGS1128->getShowHumanReadable(),'ShowCheckDigit'=>$_BarCodeSoftTypeGS1128->getShowCheckDigit(),'ImageFormat'=>$_BarCodeSoftTypeGS1128->getImageFormat(),'Orientation'=>$_BarCodeSoftTypeGS1128->getOrientation(),'Resolution'=>$_BarCodeSoftTypeGS1128->getResolution(),'Width'=>$_BarCodeSoftTypeGS1128->getWidth(),'Height'=>$_BarCodeSoftTypeGS1128->getHeight(),'strToken'=>$_BarCodeSoftTypeGS1128->getStrToken())));
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
	 * @return BarCodeSoftTypeGS1128Response
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