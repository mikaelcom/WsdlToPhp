<?php
/**
 * Class file for AmazonAlexaServiceCrawl
 * @date 10/07/2012
 */
/**
 * Class AmazonAlexaServiceCrawl
 * @date 10/07/2012
 */
class AmazonAlexaServiceCrawl extends AmazonAlexaWsdlClass
{
	/**
	 * Method to call Crawl
	 * @uses AmazonAlexaWsdlClass::getSoapClient()
	 * @uses AmazonAlexaWsdlClass::setResult()
	 * @uses AmazonAlexaWsdlClass::getResult()
	 * @uses AmazonAlexaWsdlClass::saveLastError()
	 * @uses AmazonAlexaTypeCrawl::getRequest()
	 * @param AmazonAlexaTypeCrawl Crawl
	 * @return AmazonAlexaTypeCrawlResponse
	 */
	public function Crawl(AmazonAlexaTypeCrawl $_AmazonAlexaTypeCrawl)
	{
		try
		{
			$this->setResult(self::getSoapClient()->Crawl(array('Request'=>$_AmazonAlexaTypeCrawl->getRequest())));
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
	 * @return AmazonAlexaTypeCrawlResponse
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