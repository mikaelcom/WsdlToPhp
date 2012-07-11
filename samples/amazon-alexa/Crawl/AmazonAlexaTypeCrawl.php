<?php
/**
 * Class file for AmazonAlexaTypeCrawl
 * @date 10/07/2012
 */
/**
 * Class AmazonAlexaTypeCrawl
 * @date 10/07/2012
 */
class AmazonAlexaTypeCrawl extends AmazonAlexaWsdlClass
{
	/**
	 * The Request
	 * @var AmazonAlexaTypeCrawlRequest
	 */
	public $Request;
	/**
	 * Constructor
	 * @param AmazonAlexaTypeCrawlRequest Request
	 * @return AmazonAlexaTypeCrawl
	 */
	public function __construct($_Request = null)
	{
		parent::__construct(array('Request'=>$_Request));
	}
	/**
	 * Set Request
	 * @param CrawlRequest Request
	 * @return CrawlRequest
	 */
	public function setRequest($_Request)
	{
		return ($this->Request = $_Request);
	}
	/**
	 * Get Request
	 * @return AmazonAlexaTypeCrawlRequest
	 */
	public function getRequest()
	{
		return $this->Request;
	}
	/**
	 * Method returning the class name
	 * @return string __CLASS__
	 */
	public function __toString()
	{
		return __CLASS__;
	}
}
?>