<?php
/**
 * Class file for AmazonAlexaServiceUrl
 * @date 10/07/2012
 */
/**
 * Class AmazonAlexaServiceUrl
 * @date 10/07/2012
 */
class AmazonAlexaServiceUrl extends AmazonAlexaWsdlClass
{
	/**
	 * Method to call UrlInfo
	 * @uses AmazonAlexaWsdlClass::getSoapClient()
	 * @uses AmazonAlexaWsdlClass::setResult()
	 * @uses AmazonAlexaWsdlClass::getResult()
	 * @uses AmazonAlexaWsdlClass::saveLastError()
	 * @uses AmazonAlexaTypeUrlInfo::getRequest()
	 * @param AmazonAlexaTypeUrlInfo UrlInfo
	 * @return AmazonAlexaTypeUrlInfoResponse
	 */
	public function UrlInfo(AmazonAlexaTypeUrlInfo $_AmazonAlexaTypeUrlInfo)
	{
		try
		{
			$this->setResult(self::getSoapClient()->UrlInfo(array('Request'=>$_AmazonAlexaTypeUrlInfo->getRequest())));
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
	 * @return AmazonAlexaTypeUrlInfoResponse
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