<?php
/**
 * Class file for SPSitedataTypeGetSiteUrl
 * @date 06/07/2012
 */
/**
 * Class SPSitedataTypeGetSiteUrl
 * @date 06/07/2012
 */
class SPSitedataTypeGetSiteUrl extends SPSitedataWsdlClass
{
	/**
	 * The Url
	 * @var string
	 */
	public $Url;
	/**
	 * Constructor
	 * @param string Url
	 * @return SPSitedataTypeGetSiteUrl
	 */
	public function __construct($_Url = null)
	{
		parent::__construct(array('Url'=>$_Url));
	}
	/**
	 * Set Url
	 * @param string Url
	 * @return string
	 */
	public function setUrl($_Url)
	{
		return ($this->Url = $_Url);
	}
	/**
	 * Get Url
	 * @return string
	 */
	public function getUrl()
	{
		return $this->Url;
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