<?php
/**
 * Class file for SPSitedataTypeGetSiteAndWeb
 * @date 06/07/2012
 */
/**
 * Class SPSitedataTypeGetSiteAndWeb
 * @date 06/07/2012
 */
class SPSitedataTypeGetSiteAndWeb extends SPSitedataWsdlClass
{
	/**
	 * The strUrl
	 * @var string
	 */
	public $strUrl;
	/**
	 * Constructor
	 * @param string strUrl
	 * @return SPSitedataTypeGetSiteAndWeb
	 */
	public function __construct($_strUrl = null)
	{
		parent::__construct(array('strUrl'=>$_strUrl));
	}
	/**
	 * Set strUrl
	 * @param string strUrl
	 * @return string
	 */
	public function setStrUrl($_strUrl)
	{
		return ($this->strUrl = $_strUrl);
	}
	/**
	 * Get strUrl
	 * @return string
	 */
	public function getStrUrl()
	{
		return $this->strUrl;
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