<?php
/**
 * Class file for SPWebsTypeWebUrlFromPageUrl
 * @date 06/07/2012
 */
/**
 * Class SPWebsTypeWebUrlFromPageUrl
 * @date 06/07/2012
 */
class SPWebsTypeWebUrlFromPageUrl extends SPWebsWsdlClass
{
	/**
	 * The pageUrl
	 * @var string
	 */
	public $pageUrl;
	/**
	 * Constructor
	 * @param string pageUrl
	 * @return SPWebsTypeWebUrlFromPageUrl
	 */
	public function __construct($_pageUrl = null)
	{
		parent::__construct(array('pageUrl'=>$_pageUrl));
	}
	/**
	 * Set pageUrl
	 * @param string pageUrl
	 * @return string
	 */
	public function setPageUrl($_pageUrl)
	{
		return ($this->pageUrl = $_pageUrl);
	}
	/**
	 * Get pageUrl
	 * @return string
	 */
	public function getPageUrl()
	{
		return $this->pageUrl;
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