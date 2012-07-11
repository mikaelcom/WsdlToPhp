<?php
/**
 * Class file for SPSitesTypeGetSiteResponse
 * @date 06/07/2012
 */
/**
 * Class SPSitesTypeGetSiteResponse
 * @date 06/07/2012
 */
class SPSitesTypeGetSiteResponse extends SPSitesWsdlClass
{
	/**
	 * The GetSiteResult
	 * @var string
	 */
	public $GetSiteResult;
	/**
	 * Constructor
	 * @param string GetSiteResult
	 * @return SPSitesTypeGetSiteResponse
	 */
	public function __construct($_GetSiteResult = null)
	{
		parent::__construct(array('GetSiteResult'=>$_GetSiteResult));
	}
	/**
	 * Set GetSiteResult
	 * @param string GetSiteResult
	 * @return string
	 */
	public function setGetSiteResult($_GetSiteResult)
	{
		return ($this->GetSiteResult = $_GetSiteResult);
	}
	/**
	 * Get GetSiteResult
	 * @return string
	 */
	public function getGetSiteResult()
	{
		return $this->GetSiteResult;
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