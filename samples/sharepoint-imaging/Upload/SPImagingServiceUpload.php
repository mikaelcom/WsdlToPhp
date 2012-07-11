<?php
/**
 * Class file for SPImagingServiceUpload
 * @date 06/07/2012
 */
/**
 * Class SPImagingServiceUpload
 * @date 06/07/2012
 */
class SPImagingServiceUpload extends SPImagingWsdlClass
{
	/**
	 * Method to call Upload
	 * @uses SPImagingWsdlClass::getSoapClient()
	 * @uses SPImagingWsdlClass::setResult()
	 * @uses SPImagingWsdlClass::getResult()
	 * @uses SPImagingWsdlClass::saveLastError()
	 * @uses SPImagingTypeUpload::getStrListName()
	 * @uses SPImagingTypeUpload::getStrFolder()
	 * @uses SPImagingTypeUpload::getBytes()
	 * @uses SPImagingTypeUpload::getFileName()
	 * @uses SPImagingTypeUpload::getFOverWriteIfExist()
	 * @param SPImagingTypeUpload Upload
	 * @return SPImagingTypeUploadResponse
	 */
	public function Upload(SPImagingTypeUpload $_SPImagingTypeUpload)
	{
		try
		{
			$this->setResult(self::getSoapClient()->Upload(array('strListName'=>$_SPImagingTypeUpload->getStrListName(),'strFolder'=>$_SPImagingTypeUpload->getStrFolder(),'bytes'=>$_SPImagingTypeUpload->getBytes(),'fileName'=>$_SPImagingTypeUpload->getFileName(),'fOverWriteIfExist'=>$_SPImagingTypeUpload->getFOverWriteIfExist())));
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
	 * @return SPImagingTypeUploadResponse
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