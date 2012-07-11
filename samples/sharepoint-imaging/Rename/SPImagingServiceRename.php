<?php
/**
 * Class file for SPImagingServiceRename
 * @date 06/07/2012
 */
/**
 * Class SPImagingServiceRename
 * @date 06/07/2012
 */
class SPImagingServiceRename extends SPImagingWsdlClass
{
	/**
	 * Method to call Rename
	 * @uses SPImagingWsdlClass::getSoapClient()
	 * @uses SPImagingWsdlClass::setResult()
	 * @uses SPImagingWsdlClass::getResult()
	 * @uses SPImagingWsdlClass::saveLastError()
	 * @uses SPImagingTypeRename::getStrListName()
	 * @uses SPImagingTypeRename::getStrFolder()
	 * @uses SPImagingTypeRename::getRequest()
	 * @param SPImagingTypeRename Rename
	 * @return SPImagingTypeRenameResponse
	 */
	public function Rename(SPImagingTypeRename $_SPImagingTypeRename)
	{
		try
		{
			$this->setResult(self::getSoapClient()->Rename(array('strListName'=>$_SPImagingTypeRename->getStrListName(),'strFolder'=>$_SPImagingTypeRename->getStrFolder(),'request'=>$_SPImagingTypeRename->getRequest())));
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
	 * @return SPImagingTypeRenameResponse
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