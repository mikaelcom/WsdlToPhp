<?php
/**
 * Class file for BarCodeSoftServiceDatamatrix
 * @date 02/08/2012
 */
/**
 * Class BarCodeSoftServiceDatamatrix
 * @date 02/08/2012
 */
class BarCodeSoftServiceDatamatrix extends BarCodeSoftWsdlClass
{
	/**
	 * Method to call Datamatrix
	 * @uses BarCodeSoftWsdlClass::getSoapClient()
	 * @uses BarCodeSoftWsdlClass::setResult()
	 * @uses BarCodeSoftWsdlClass::getResult()
	 * @uses BarCodeSoftWsdlClass::saveLastError()
	 * @uses BarCodeSoftTypeDatamatrix::getTextToEncode()
	 * @uses BarCodeSoftTypeDatamatrix::getFormat()
	 * @uses BarCodeSoftTypeDatamatrix::getImageFormat()
	 * @uses BarCodeSoftTypeDatamatrix::getOrientation()
	 * @uses BarCodeSoftTypeDatamatrix::getResolution()
	 * @uses BarCodeSoftTypeDatamatrix::getWidth()
	 * @uses BarCodeSoftTypeDatamatrix::getHeight()
	 * @uses BarCodeSoftTypeDatamatrix::getStrToken()
	 * @param BarCodeSoftTypeDatamatrix Datamatrix
	 * @return BarCodeSoftTypeDatamatrixResponse
	 */
	public function Datamatrix(BarCodeSoftTypeDatamatrix $_BarCodeSoftTypeDatamatrix)
	{
		try
		{
			$this->setResult(self::getSoapClient()->Datamatrix(array('textToEncode'=>$_BarCodeSoftTypeDatamatrix->getTextToEncode(),'Format'=>$_BarCodeSoftTypeDatamatrix->getFormat(),'ImageFormat'=>$_BarCodeSoftTypeDatamatrix->getImageFormat(),'Orientation'=>$_BarCodeSoftTypeDatamatrix->getOrientation(),'Resolution'=>$_BarCodeSoftTypeDatamatrix->getResolution(),'Width'=>$_BarCodeSoftTypeDatamatrix->getWidth(),'Height'=>$_BarCodeSoftTypeDatamatrix->getHeight(),'strToken'=>$_BarCodeSoftTypeDatamatrix->getStrToken())));
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
	 * @return BarCodeSoftTypeDatamatrixResponse
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