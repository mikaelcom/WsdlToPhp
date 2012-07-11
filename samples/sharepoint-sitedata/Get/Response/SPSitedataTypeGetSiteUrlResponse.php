<?php
/**
 * Class file for SPSitedataTypeGetSiteUrlResponse
 * @date 06/07/2012
 */
/**
 * Class SPSitedataTypeGetSiteUrlResponse
 * @date 06/07/2012
 */
class SPSitedataTypeGetSiteUrlResponse extends SPSitedataWsdlClass
{
	/**
	 * The GetSiteUrlResult
	 * @var unsignedInt
	 */
	public $GetSiteUrlResult;
	/**
	 * The siteUrl
	 * @var string
	 */
	public $siteUrl;
	/**
	 * The siteId
	 * @var string
	 */
	public $siteId;
	/**
	 * Constructor
	 * @param unsignedInt GetSiteUrlResult
	 * @param string siteUrl
	 * @param string siteId
	 * @return SPSitedataTypeGetSiteUrlResponse
	 */
	public function __construct($_GetSiteUrlResult = null,$_siteUrl = null,$_siteId = null)
	{
		parent::__construct(array('GetSiteUrlResult'=>$_GetSiteUrlResult,'siteUrl'=>$_siteUrl,'siteId'=>$_siteId));
	}
	/**
	 * Set GetSiteUrlResult
	 * @param unsignedInt GetSiteUrlResult
	 * @return unsignedInt
	 */
	public function setGetSiteUrlResult($_GetSiteUrlResult)
	{
		return ($this->GetSiteUrlResult = $_GetSiteUrlResult);
	}
	/**
	 * Get GetSiteUrlResult
	 * @return unsignedInt
	 */
	public function getGetSiteUrlResult()
	{
		return $this->GetSiteUrlResult;
	}
	/**
	 * Set siteUrl
	 * @param string siteUrl
	 * @return string
	 */
	public function setSiteUrl($_siteUrl)
	{
		return ($this->siteUrl = $_siteUrl);
	}
	/**
	 * Get siteUrl
	 * @return string
	 */
	public function getSiteUrl()
	{
		return $this->siteUrl;
	}
	/**
	 * Set siteId
	 * @param string siteId
	 * @return string
	 */
	public function setSiteId($_siteId)
	{
		return ($this->siteId = $_siteId);
	}
	/**
	 * Get siteId
	 * @return string
	 */
	public function getSiteId()
	{
		return $this->siteId;
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