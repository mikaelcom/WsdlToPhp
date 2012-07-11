<?php
/**
 * Class file for SPWebsTypeGetWeb
 * @date 06/07/2012
 */
/**
 * Class SPWebsTypeGetWeb
 * @date 06/07/2012
 */
class SPWebsTypeGetWeb extends SPWebsWsdlClass
{
	/**
	 * The webUrl
	 * @var string
	 */
	public $webUrl;
	/**
	 * Constructor
	 * @param string webUrl
	 * @return SPWebsTypeGetWeb
	 */
	public function __construct($_webUrl = null)
	{
		parent::__construct(array('webUrl'=>$_webUrl));
	}
	/**
	 * Set webUrl
	 * @param string webUrl
	 * @return string
	 */
	public function setWebUrl($_webUrl)
	{
		return ($this->webUrl = $_webUrl);
	}
	/**
	 * Get webUrl
	 * @return string
	 */
	public function getWebUrl()
	{
		return $this->webUrl;
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