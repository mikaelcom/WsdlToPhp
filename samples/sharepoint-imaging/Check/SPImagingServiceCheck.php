<?php
/**
 * Class file for SPImagingServiceCheck
 * @date 06/07/2012
 */
/**
 * Class SPImagingServiceCheck
 * @date 06/07/2012
 */
class SPImagingServiceCheck extends SPImagingWsdlClass
{
	/**
	 * Method to call CheckSubwebAndList
	 * @uses SPImagingWsdlClass::getSoapClient()
	 * @uses SPImagingWsdlClass::setResult()
	 * @uses SPImagingWsdlClass::getResult()
	 * @uses SPImagingWsdlClass::saveLastError()
	 * @uses SPImagingTypeCheckSubwebAndList::getStrUrl()
	 * @param SPImagingTypeCheckSubwebAndList CheckSubwebAndList
	 * @return SPImagingTypeCheckSubwebAndListResponse
	 */
	public function CheckSubwebAndList(SPImagingTypeCheckSubwebAndList $_SPImagingTypeCheckSubwebAndList)
	{
		try
		{
			$this->setResult(self::getSoapClient()->CheckSubwebAndList(array('strUrl'=>$_SPImagingTypeCheckSubwebAndList->getStrUrl())));
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
	 * @return SPImagingTypeCheckSubwebAndListResponse
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