<?php
/**
 * Class file for BarCodeSoftServiceUPCA
 * @date 02/08/2012
 */
/**
 * Class BarCodeSoftServiceUPCA
 * @date 02/08/2012
 */
class BarCodeSoftServiceUPCA extends BarCodeSoftWsdlClass
{
	/**
	 * Method to call UPCA
	 * @uses BarCodeSoftWsdlClass::getSoapClient()
	 * @uses BarCodeSoftWsdlClass::setResult()
	 * @uses BarCodeSoftWsdlClass::getResult()
	 * @uses BarCodeSoftWsdlClass::saveLastError()
	 * @uses BarCodeSoftTypeUPCA::getTextToEncode()
	 * @uses BarCodeSoftTypeUPCA::getStrAddon()
	 * @uses BarCodeSoftTypeUPCA::getImageFormat()
	 * @uses BarCodeSoftTypeUPCA::getOrientation()
	 * @uses BarCodeSoftTypeUPCA::getResolution()
	 * @uses BarCodeSoftTypeUPCA::getWidth()
	 * @uses BarCodeSoftTypeUPCA::getHeight()
	 * @uses BarCodeSoftTypeUPCA::getStrToken()
	 * @param BarCodeSoftTypeUPCA UPCA
	 * @return BarCodeSoftTypeUPCAResponse
	 */
	public function UPCA(BarCodeSoftTypeUPCA $_BarCodeSoftTypeUPCA)
	{
		try
		{
			$this->setResult(self::getSoapClient()->UPCA(array('textToEncode'=>$_BarCodeSoftTypeUPCA->getTextToEncode(),'strAddon'=>$_BarCodeSoftTypeUPCA->getStrAddon(),'ImageFormat'=>$_BarCodeSoftTypeUPCA->getImageFormat(),'Orientation'=>$_BarCodeSoftTypeUPCA->getOrientation(),'Resolution'=>$_BarCodeSoftTypeUPCA->getResolution(),'Width'=>$_BarCodeSoftTypeUPCA->getWidth(),'Height'=>$_BarCodeSoftTypeUPCA->getHeight(),'strToken'=>$_BarCodeSoftTypeUPCA->getStrToken())));
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
	 * @return BarCodeSoftTypeUPCAResponse
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