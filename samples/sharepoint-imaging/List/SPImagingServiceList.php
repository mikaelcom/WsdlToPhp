<?php
/**
 * Class file for SPImagingServiceList
 * @date 06/07/2012
 */
/**
 * Class SPImagingServiceList
 * @date 06/07/2012
 */
class SPImagingServiceList extends SPImagingWsdlClass
{
	/**
	 * Method to call ListPictureLibrary
	 * @uses SPImagingWsdlClass::getSoapClient()
	 * @uses SPImagingWsdlClass::setResult()
	 * @uses SPImagingWsdlClass::getResult()
	 * @uses SPImagingWsdlClass::saveLastError()
	 * @param SPImagingTypeListPictureLibrary ListPictureLibrary
	 * @return SPImagingTypeListPictureLibraryResponse
	 */
	public function ListPictureLibrary(SPImagingTypeListPictureLibrary $_SPImagingTypeListPictureLibrary)
	{
		try
		{
			$this->setResult(self::getSoapClient()->ListPictureLibrary(array()));
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
	 * @return SPImagingTypeListPictureLibraryResponse
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