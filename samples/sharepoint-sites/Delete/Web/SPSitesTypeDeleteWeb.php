<?php
/**
 * Class file for SPSitesTypeDeleteWeb
 * @date 06/07/2012
 */
/**
 * Class SPSitesTypeDeleteWeb
 * @date 06/07/2012
 */
class SPSitesTypeDeleteWeb extends SPSitesWsdlClass
{
	/**
	 * The url
	 * @var string
	 */
	public $url;
	/**
	 * Constructor
	 * @param string url
	 * @return SPSitesTypeDeleteWeb
	 */
	public function __construct($_url = null)
	{
		parent::__construct(array('url'=>$_url));
	}
	/**
	 * Set url
	 * @param string url
	 * @return string
	 */
	public function setUrl($_url)
	{
		return ($this->url = $_url);
	}
	/**
	 * Get url
	 * @return string
	 */
	public function getUrl()
	{
		return $this->url;
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