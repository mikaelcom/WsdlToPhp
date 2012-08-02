<?php
/**
 * Class file for BarCodeSoftServicePdf417
 * @date 02/08/2012
 */
/**
 * Class BarCodeSoftServicePdf417
 * @date 02/08/2012
 */
class BarCodeSoftServicePdf417 extends BarCodeSoftWsdlClass
{
	/**
	 * Method to call Pdf417
	 * @uses BarCodeSoftWsdlClass::getSoapClient()
	 * @uses BarCodeSoftWsdlClass::setResult()
	 * @uses BarCodeSoftWsdlClass::getResult()
	 * @uses BarCodeSoftWsdlClass::saveLastError()
	 * @uses BarCodeSoftTypePdf417::getTextToEncode()
	 * @uses BarCodeSoftTypePdf417::getImageFormat()
	 * @uses BarCodeSoftTypePdf417::getOrientation()
	 * @uses BarCodeSoftTypePdf417::getResolution()
	 * @uses BarCodeSoftTypePdf417::getMaxRow()
	 * @uses BarCodeSoftTypePdf417::getFixedColumn()
	 * @uses BarCodeSoftTypePdf417::getSecurity()
	 * @uses BarCodeSoftTypePdf417::getCompactMode()
	 * @uses BarCodeSoftTypePdf417::getTruncated()
	 * @uses BarCodeSoftTypePdf417::getWidth()
	 * @uses BarCodeSoftTypePdf417::getHeight()
	 * @uses BarCodeSoftTypePdf417::getStrToken()
	 * @param BarCodeSoftTypePdf417 Pdf417
	 * @return BarCodeSoftTypePdf417Response
	 */
	public function Pdf417(BarCodeSoftTypePdf417 $_BarCodeSoftTypePdf417)
	{
		try
		{
			$this->setResult(self::getSoapClient()->Pdf417(array('textToEncode'=>$_BarCodeSoftTypePdf417->getTextToEncode(),'ImageFormat'=>$_BarCodeSoftTypePdf417->getImageFormat(),'Orientation'=>$_BarCodeSoftTypePdf417->getOrientation(),'Resolution'=>$_BarCodeSoftTypePdf417->getResolution(),'MaxRow'=>$_BarCodeSoftTypePdf417->getMaxRow(),'FixedColumn'=>$_BarCodeSoftTypePdf417->getFixedColumn(),'Security'=>$_BarCodeSoftTypePdf417->getSecurity(),'CompactMode'=>$_BarCodeSoftTypePdf417->getCompactMode(),'Truncated'=>$_BarCodeSoftTypePdf417->getTruncated(),'Width'=>$_BarCodeSoftTypePdf417->getWidth(),'Height'=>$_BarCodeSoftTypePdf417->getHeight(),'strToken'=>$_BarCodeSoftTypePdf417->getStrToken())));
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
	 * @return BarCodeSoftTypePdf417Response
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