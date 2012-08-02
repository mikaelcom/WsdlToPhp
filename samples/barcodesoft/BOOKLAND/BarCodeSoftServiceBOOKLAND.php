<?php
/**
 * Class file for BarCodeSoftServiceBOOKLAND
 * @date 02/08/2012
 */
/**
 * Class BarCodeSoftServiceBOOKLAND
 * @date 02/08/2012
 */
class BarCodeSoftServiceBOOKLAND extends BarCodeSoftWsdlClass
{
	/**
	 * Method to call BOOKLAND
	 * @uses BarCodeSoftWsdlClass::getSoapClient()
	 * @uses BarCodeSoftWsdlClass::setResult()
	 * @uses BarCodeSoftWsdlClass::getResult()
	 * @uses BarCodeSoftWsdlClass::saveLastError()
	 * @uses BarCodeSoftTypeBOOKLAND::getTextToEncode()
	 * @uses BarCodeSoftTypeBOOKLAND::getStrAddon()
	 * @uses BarCodeSoftTypeBOOKLAND::getImageFormat()
	 * @uses BarCodeSoftTypeBOOKLAND::getOrientation()
	 * @uses BarCodeSoftTypeBOOKLAND::getResolution()
	 * @uses BarCodeSoftTypeBOOKLAND::getWidth()
	 * @uses BarCodeSoftTypeBOOKLAND::getHeight()
	 * @uses BarCodeSoftTypeBOOKLAND::getStrToken()
	 * @param BarCodeSoftTypeBOOKLAND BOOKLAND
	 * @return BarCodeSoftTypeBOOKLANDResponse
	 */
	public function BOOKLAND(BarCodeSoftTypeBOOKLAND $_BarCodeSoftTypeBOOKLAND)
	{
		try
		{
			$this->setResult(self::getSoapClient()->BOOKLAND(array('textToEncode'=>$_BarCodeSoftTypeBOOKLAND->getTextToEncode(),'strAddon'=>$_BarCodeSoftTypeBOOKLAND->getStrAddon(),'ImageFormat'=>$_BarCodeSoftTypeBOOKLAND->getImageFormat(),'Orientation'=>$_BarCodeSoftTypeBOOKLAND->getOrientation(),'Resolution'=>$_BarCodeSoftTypeBOOKLAND->getResolution(),'Width'=>$_BarCodeSoftTypeBOOKLAND->getWidth(),'Height'=>$_BarCodeSoftTypeBOOKLAND->getHeight(),'strToken'=>$_BarCodeSoftTypeBOOKLAND->getStrToken())));
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
	 * @return BarCodeSoftTypeBOOKLANDResponse
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