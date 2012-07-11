<?php
/**
 * Class file for SPImagingServiceDownload
 * @date 06/07/2012
 */
/**
 * Class SPImagingServiceDownload
 * @date 06/07/2012
 */
class SPImagingServiceDownload extends SPImagingWsdlClass
{
	/**
	 * Method to call Download
	 * @uses SPImagingWsdlClass::getSoapClient()
	 * @uses SPImagingWsdlClass::setResult()
	 * @uses SPImagingWsdlClass::getResult()
	 * @uses SPImagingWsdlClass::saveLastError()
	 * @uses SPImagingTypeDownload::getStrListName()
	 * @uses SPImagingTypeDownload::getStrFolder()
	 * @uses SPImagingTypeDownload::getItemFileNames()
	 * @uses SPImagingTypeDownload::getType()
	 * @uses SPImagingTypeDownload::getFFetchOriginalIfNotAvailable()
	 * @param SPImagingTypeDownload Download
	 * @return SPImagingTypeDownloadResponse
	 */
	public function Download(SPImagingTypeDownload $_SPImagingTypeDownload)
	{
		try
		{
			$this->setResult(self::getSoapClient()->Download(array('strListName'=>$_SPImagingTypeDownload->getStrListName(),'strFolder'=>$_SPImagingTypeDownload->getStrFolder(),'itemFileNames'=>$_SPImagingTypeDownload->getItemFileNames(),'type'=>$_SPImagingTypeDownload->getType(),'fFetchOriginalIfNotAvailable'=>$_SPImagingTypeDownload->getFFetchOriginalIfNotAvailable())));
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
	 * @return SPImagingTypeDownloadResponse
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