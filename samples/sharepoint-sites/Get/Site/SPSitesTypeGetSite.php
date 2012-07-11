<?php
/**
 * Class file for SPSitesTypeGetSite
 * @date 06/07/2012
 */
/**
 * Class SPSitesTypeGetSite
 * @date 06/07/2012
 */
class SPSitesTypeGetSite extends SPSitesWsdlClass
{
	/**
	 * The SiteUrl
	 * @var string
	 */
	public $SiteUrl;
	/**
	 * Constructor
	 * @param string SiteUrl
	 * @return SPSitesTypeGetSite
	 */
	public function __construct($_SiteUrl = null)
	{
		parent::__construct(array('SiteUrl'=>$_SiteUrl));
	}
	/**
	 * Set SiteUrl
	 * @param string SiteUrl
	 * @return string
	 */
	public function setSiteUrl($_SiteUrl)
	{
		return ($this->SiteUrl = $_SiteUrl);
	}
	/**
	 * Get SiteUrl
	 * @return string
	 */
	public function getSiteUrl()
	{
		return $this->SiteUrl;
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