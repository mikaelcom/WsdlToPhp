<?php
/**
 * Class file for SPWebsServiceWeb
 * @date 06/07/2012
 */
/**
 * Class SPWebsServiceWeb
 * @date 06/07/2012
 */
class SPWebsServiceWeb extends SPWebsWsdlClass
{
	/**
	 * Method to call WebUrlFromPageUrl
	 * @uses SPWebsWsdlClass::getSoapClient()
	 * @uses SPWebsWsdlClass::setResult()
	 * @uses SPWebsWsdlClass::getResult()
	 * @uses SPWebsWsdlClass::saveLastError()
	 * @uses SPWebsTypeWebUrlFromPageUrl::getPageUrl()
	 * @param SPWebsTypeWebUrlFromPageUrl WebUrlFromPageUrl
	 * @return SPWebsTypeWebUrlFromPageUrlResponse
	 */
	public function WebUrlFromPageUrl(SPWebsTypeWebUrlFromPageUrl $_SPWebsTypeWebUrlFromPageUrl)
	{
		try
		{
			$this->setResult(self::getSoapClient()->WebUrlFromPageUrl(array('pageUrl'=>$_SPWebsTypeWebUrlFromPageUrl->getPageUrl())));
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
	 * @return SPWebsTypeWebUrlFromPageUrlResponse
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