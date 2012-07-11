<?php
/**
 * Class file for SPImagingServiceCreate
 * @date 06/07/2012
 */
/**
 * Class SPImagingServiceCreate
 * @date 06/07/2012
 */
class SPImagingServiceCreate extends SPImagingWsdlClass
{
	/**
	 * Method to call CreateNewFolder
	 * @uses SPImagingWsdlClass::getSoapClient()
	 * @uses SPImagingWsdlClass::setResult()
	 * @uses SPImagingWsdlClass::getResult()
	 * @uses SPImagingWsdlClass::saveLastError()
	 * @uses SPImagingTypeCreateNewFolder::getStrListName()
	 * @uses SPImagingTypeCreateNewFolder::getStrParentFolder()
	 * @param SPImagingTypeCreateNewFolder CreateNewFolder
	 * @return SPImagingTypeCreateNewFolderResponse
	 */
	public function CreateNewFolder(SPImagingTypeCreateNewFolder $_SPImagingTypeCreateNewFolder)
	{
		try
		{
			$this->setResult(self::getSoapClient()->CreateNewFolder(array('strListName'=>$_SPImagingTypeCreateNewFolder->getStrListName(),'strParentFolder'=>$_SPImagingTypeCreateNewFolder->getStrParentFolder())));
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
	 * @return SPImagingTypeCreateNewFolderResponse
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