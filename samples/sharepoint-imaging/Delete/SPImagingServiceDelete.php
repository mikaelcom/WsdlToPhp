<?php
/**
 * Class file for SPImagingServiceDelete
 * @date 06/07/2012
 */
/**
 * Class SPImagingServiceDelete
 * @date 06/07/2012
 */
class SPImagingServiceDelete extends SPImagingWsdlClass
{
	/**
	 * Method to call Delete
	 * @uses SPImagingWsdlClass::getSoapClient()
	 * @uses SPImagingWsdlClass::setResult()
	 * @uses SPImagingWsdlClass::getResult()
	 * @uses SPImagingWsdlClass::saveLastError()
	 * @uses SPImagingTypeDelete::getStrListName()
	 * @uses SPImagingTypeDelete::getStrFolder()
	 * @uses SPImagingTypeDelete::getItemFileNames()
	 * @param SPImagingTypeDelete Delete
	 * @return SPImagingTypeDeleteResponse
	 */
	public function Delete(SPImagingTypeDelete $_SPImagingTypeDelete)
	{
		try
		{
			$this->setResult(self::getSoapClient()->Delete(array('strListName'=>$_SPImagingTypeDelete->getStrListName(),'strFolder'=>$_SPImagingTypeDelete->getStrFolder(),'itemFileNames'=>$_SPImagingTypeDelete->getItemFileNames())));
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
	 * @return SPImagingTypeDeleteResponse
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