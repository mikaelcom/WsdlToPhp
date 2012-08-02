<?php
/**
 * Class file for BarCodeSoftServiceUPCE
 * @date 02/08/2012
 */
/**
 * Class BarCodeSoftServiceUPCE
 * @date 02/08/2012
 */
class BarCodeSoftServiceUPCE extends BarCodeSoftWsdlClass
{
	/**
	 * Method to call UPCE
	 * @uses BarCodeSoftWsdlClass::getSoapClient()
	 * @uses BarCodeSoftWsdlClass::setResult()
	 * @uses BarCodeSoftWsdlClass::getResult()
	 * @uses BarCodeSoftWsdlClass::saveLastError()
	 * @uses BarCodeSoftTypeUPCE::getTextToEncode()
	 * @uses BarCodeSoftTypeUPCE::getStrAddon()
	 * @uses BarCodeSoftTypeUPCE::getImageFormat()
	 * @uses BarCodeSoftTypeUPCE::getOrientation()
	 * @uses BarCodeSoftTypeUPCE::getResolution()
	 * @uses BarCodeSoftTypeUPCE::getWidth()
	 * @uses BarCodeSoftTypeUPCE::getHeight()
	 * @uses BarCodeSoftTypeUPCE::getStrToken()
	 * @param BarCodeSoftTypeUPCE UPCE
	 * @return BarCodeSoftTypeUPCEResponse
	 */
	public function UPCE(BarCodeSoftTypeUPCE $_BarCodeSoftTypeUPCE)
	{
		try
		{
			$this->setResult(self::getSoapClient()->UPCE(array('textToEncode'=>$_BarCodeSoftTypeUPCE->getTextToEncode(),'strAddon'=>$_BarCodeSoftTypeUPCE->getStrAddon(),'ImageFormat'=>$_BarCodeSoftTypeUPCE->getImageFormat(),'Orientation'=>$_BarCodeSoftTypeUPCE->getOrientation(),'Resolution'=>$_BarCodeSoftTypeUPCE->getResolution(),'Width'=>$_BarCodeSoftTypeUPCE->getWidth(),'Height'=>$_BarCodeSoftTypeUPCE->getHeight(),'strToken'=>$_BarCodeSoftTypeUPCE->getStrToken())));
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
	 * @return BarCodeSoftTypeUPCEResponse
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