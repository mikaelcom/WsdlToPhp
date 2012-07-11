<?php
/**
 * Class file for SPSitedataTypeGetSiteAndWebResponse
 * @date 06/07/2012
 */
/**
 * Class SPSitedataTypeGetSiteAndWebResponse
 * @date 06/07/2012
 */
class SPSitedataTypeGetSiteAndWebResponse extends SPSitedataWsdlClass
{
	/**
	 * The GetSiteAndWebResult
	 * @var unsignedInt
	 */
	public $GetSiteAndWebResult;
	/**
	 * The strSite
	 * @var string
	 */
	public $strSite;
	/**
	 * The strWeb
	 * @var string
	 */
	public $strWeb;
	/**
	 * Constructor
	 * @param unsignedInt GetSiteAndWebResult
	 * @param string strSite
	 * @param string strWeb
	 * @return SPSitedataTypeGetSiteAndWebResponse
	 */
	public function __construct($_GetSiteAndWebResult = null,$_strSite = null,$_strWeb = null)
	{
		parent::__construct(array('GetSiteAndWebResult'=>$_GetSiteAndWebResult,'strSite'=>$_strSite,'strWeb'=>$_strWeb));
	}
	/**
	 * Set GetSiteAndWebResult
	 * @param unsignedInt GetSiteAndWebResult
	 * @return unsignedInt
	 */
	public function setGetSiteAndWebResult($_GetSiteAndWebResult)
	{
		return ($this->GetSiteAndWebResult = $_GetSiteAndWebResult);
	}
	/**
	 * Get GetSiteAndWebResult
	 * @return unsignedInt
	 */
	public function getGetSiteAndWebResult()
	{
		return $this->GetSiteAndWebResult;
	}
	/**
	 * Set strSite
	 * @param string strSite
	 * @return string
	 */
	public function setStrSite($_strSite)
	{
		return ($this->strSite = $_strSite);
	}
	/**
	 * Get strSite
	 * @return string
	 */
	public function getStrSite()
	{
		return $this->strSite;
	}
	/**
	 * Set strWeb
	 * @param string strWeb
	 * @return string
	 */
	public function setStrWeb($_strWeb)
	{
		return ($this->strWeb = $_strWeb);
	}
	/**
	 * Get strWeb
	 * @return string
	 */
	public function getStrWeb()
	{
		return $this->strWeb;
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