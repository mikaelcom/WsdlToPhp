<?php
/**
 * Class file for SPWebsTypeWebUrlFromPageUrlResponse
 * @date 06/07/2012
 */
/**
 * Class SPWebsTypeWebUrlFromPageUrlResponse
 * @date 06/07/2012
 */
class SPWebsTypeWebUrlFromPageUrlResponse extends SPWebsWsdlClass
{
	/**
	 * The WebUrlFromPageUrlResult
	 * @var string
	 */
	public $WebUrlFromPageUrlResult;
	/**
	 * Constructor
	 * @param string WebUrlFromPageUrlResult
	 * @return SPWebsTypeWebUrlFromPageUrlResponse
	 */
	public function __construct($_WebUrlFromPageUrlResult = null)
	{
		parent::__construct(array('WebUrlFromPageUrlResult'=>$_WebUrlFromPageUrlResult));
	}
	/**
	 * Set WebUrlFromPageUrlResult
	 * @param string WebUrlFromPageUrlResult
	 * @return string
	 */
	public function setWebUrlFromPageUrlResult($_WebUrlFromPageUrlResult)
	{
		return ($this->WebUrlFromPageUrlResult = $_WebUrlFromPageUrlResult);
	}
	/**
	 * Get WebUrlFromPageUrlResult
	 * @return string
	 */
	public function getWebUrlFromPageUrlResult()
	{
		return $this->WebUrlFromPageUrlResult;
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