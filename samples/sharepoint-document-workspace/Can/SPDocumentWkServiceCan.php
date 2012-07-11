<?php
/**
 * Class file for SPDocumentWkServiceCan
 * @date 06/07/2012
 */
/**
 * Class SPDocumentWkServiceCan
 * @date 06/07/2012
 */
class SPDocumentWkServiceCan extends SPDocumentWkWsdlClass
{
	/**
	 * Method to call CanCreateDwsUrl
	 * @uses SPDocumentWkWsdlClass::getSoapClient()
	 * @uses SPDocumentWkWsdlClass::setResult()
	 * @uses SPDocumentWkWsdlClass::getResult()
	 * @uses SPDocumentWkWsdlClass::saveLastError()
	 * @uses SPDocumentWkTypeCanCreateDwsUrl::getUrl()
	 * @param SPDocumentWkTypeCanCreateDwsUrl CanCreateDwsUrl
	 * @return SPDocumentWkTypeCanCreateDwsUrlResponse
	 */
	public function CanCreateDwsUrl(SPDocumentWkTypeCanCreateDwsUrl $_SPDocumentWkTypeCanCreateDwsUrl)
	{
		try
		{
			$this->setResult(self::getSoapClient()->CanCreateDwsUrl(array('url'=>$_SPDocumentWkTypeCanCreateDwsUrl->getUrl())));
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
	 * @return SPDocumentWkTypeCanCreateDwsUrlResponse
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