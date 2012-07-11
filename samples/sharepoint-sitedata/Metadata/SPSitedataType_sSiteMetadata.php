<?php
/**
 * Class file for SPSitedataType_sSiteMetadata
 * @date 06/07/2012
 */
/**
 * Class SPSitedataType_sSiteMetadata
 * @date 06/07/2012
 */
class SPSitedataType_sSiteMetadata extends SPSitedataWsdlClass
{
	/**
	 * The LastModified
	 * @var dateTime
	 */
	public $LastModified;
	/**
	 * The LastModifiedForceRecrawl
	 * @var dateTime
	 */
	public $LastModifiedForceRecrawl;
	/**
	 * The SmallSite
	 * @var boolean
	 */
	public $SmallSite;
	/**
	 * The PortalUrl
	 * @var string
	 */
	public $PortalUrl;
	/**
	 * The UserProfileGUID
	 * @var string
	 */
	public $UserProfileGUID;
	/**
	 * The ValidSecurityInfo
	 * @var boolean
	 */
	public $ValidSecurityInfo;
	/**
	 * Constructor
	 * @param dateTime LastModified
	 * @param dateTime LastModifiedForceRecrawl
	 * @param boolean SmallSite
	 * @param string PortalUrl
	 * @param string UserProfileGUID
	 * @param boolean ValidSecurityInfo
	 * @return SPSitedataType_sSiteMetadata
	 */
	public function __construct($_LastModified = null,$_LastModifiedForceRecrawl = null,$_SmallSite = null,$_PortalUrl = null,$_UserProfileGUID = null,$_ValidSecurityInfo = null)
	{
		parent::__construct(array('LastModified'=>$_LastModified,'LastModifiedForceRecrawl'=>$_LastModifiedForceRecrawl,'SmallSite'=>$_SmallSite,'PortalUrl'=>$_PortalUrl,'UserProfileGUID'=>$_UserProfileGUID,'ValidSecurityInfo'=>$_ValidSecurityInfo));
	}
	/**
	 * Set LastModified
	 * @param dateTime LastModified
	 * @return dateTime
	 */
	public function setLastModified($_LastModified)
	{
		return ($this->LastModified = $_LastModified);
	}
	/**
	 * Get LastModified
	 * @return dateTime
	 */
	public function getLastModified()
	{
		return $this->LastModified;
	}
	/**
	 * Set LastModifiedForceRecrawl
	 * @param dateTime LastModifiedForceRecrawl
	 * @return dateTime
	 */
	public function setLastModifiedForceRecrawl($_LastModifiedForceRecrawl)
	{
		return ($this->LastModifiedForceRecrawl = $_LastModifiedForceRecrawl);
	}
	/**
	 * Get LastModifiedForceRecrawl
	 * @return dateTime
	 */
	public function getLastModifiedForceRecrawl()
	{
		return $this->LastModifiedForceRecrawl;
	}
	/**
	 * Set SmallSite
	 * @param boolean SmallSite
	 * @return boolean
	 */
	public function setSmallSite($_SmallSite)
	{
		return ($this->SmallSite = $_SmallSite);
	}
	/**
	 * Get SmallSite
	 * @return boolean
	 */
	public function getSmallSite()
	{
		return $this->SmallSite;
	}
	/**
	 * Set PortalUrl
	 * @param string PortalUrl
	 * @return string
	 */
	public function setPortalUrl($_PortalUrl)
	{
		return ($this->PortalUrl = $_PortalUrl);
	}
	/**
	 * Get PortalUrl
	 * @return string
	 */
	public function getPortalUrl()
	{
		return $this->PortalUrl;
	}
	/**
	 * Set UserProfileGUID
	 * @param string UserProfileGUID
	 * @return string
	 */
	public function setUserProfileGUID($_UserProfileGUID)
	{
		return ($this->UserProfileGUID = $_UserProfileGUID);
	}
	/**
	 * Get UserProfileGUID
	 * @return string
	 */
	public function getUserProfileGUID()
	{
		return $this->UserProfileGUID;
	}
	/**
	 * Set ValidSecurityInfo
	 * @param boolean ValidSecurityInfo
	 * @return boolean
	 */
	public function setValidSecurityInfo($_ValidSecurityInfo)
	{
		return ($this->ValidSecurityInfo = $_ValidSecurityInfo);
	}
	/**
	 * Get ValidSecurityInfo
	 * @return boolean
	 */
	public function getValidSecurityInfo()
	{
		return $this->ValidSecurityInfo;
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