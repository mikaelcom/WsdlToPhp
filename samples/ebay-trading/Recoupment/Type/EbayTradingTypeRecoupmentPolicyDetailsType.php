<?php
/**
 * Class file for EbayTradingTypeRecoupmentPolicyDetailsType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeRecoupmentPolicyDetailsType
 * Documentation : Details the recoupment policy on this site. There are two sites involved in recoupment - the listing site and the user registration site, each of which must agree before eBay enforces recoupment for a seller and listing.
 * @date 04/07/2012
 */
class EbayTradingTypeRecoupmentPolicyDetailsType extends EbayTradingWsdlClass
{
	/**
	 * The EnforcedOnListingSite
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Indicates whether recoupment policy is enforced on the site on which the item is listed.
	 * @var boolean
	 */
	public $EnforcedOnListingSite;
	/**
	 * The EnforcedOnRegistrationSite
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Indicates whether recoupment policy is enforced on the registration site for which the call is made.
	 * @var boolean
	 */
	public $EnforcedOnRegistrationSite;
	/**
	 * The DetailVersion
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Returns the latest version number for this field. The version can be used to determine if and when to refresh cached client data.
	 * @var string
	 */
	public $DetailVersion;
	/**
	 * The UpdateTime
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Gives the time in GMT that the feature flags for the details were last updated. This timestamp can be used to determine if and when to refresh cached client data.
	 * @var dateTime
	 */
	public $UpdateTime;
	/**
	 * The any
	 * @var DOMDocument
	 */
	public $any;
	/**
	 * Constructor
	 * @param boolean EnforcedOnListingSite
	 * @param boolean EnforcedOnRegistrationSite
	 * @param string DetailVersion
	 * @param dateTime UpdateTime
	 * @param DOMDocument any
	 * @return EbayTradingTypeRecoupmentPolicyDetailsType
	 */
	public function __construct($_EnforcedOnListingSite = null,$_EnforcedOnRegistrationSite = null,$_DetailVersion = null,$_UpdateTime = null,$_any = null)
	{
		parent::__construct(array('EnforcedOnListingSite'=>$_EnforcedOnListingSite,'EnforcedOnRegistrationSite'=>$_EnforcedOnRegistrationSite,'DetailVersion'=>$_DetailVersion,'UpdateTime'=>$_UpdateTime,'any'=>$_any));
	}
	/**
	 * Set EnforcedOnListingSite
	 * @param boolean EnforcedOnListingSite
	 * @return boolean
	 */
	public function setEnforcedOnListingSite($_EnforcedOnListingSite)
	{
		return ($this->EnforcedOnListingSite = $_EnforcedOnListingSite);
	}
	/**
	 * Get EnforcedOnListingSite
	 * @return boolean
	 */
	public function getEnforcedOnListingSite()
	{
		return $this->EnforcedOnListingSite;
	}
	/**
	 * Set EnforcedOnRegistrationSite
	 * @param boolean EnforcedOnRegistrationSite
	 * @return boolean
	 */
	public function setEnforcedOnRegistrationSite($_EnforcedOnRegistrationSite)
	{
		return ($this->EnforcedOnRegistrationSite = $_EnforcedOnRegistrationSite);
	}
	/**
	 * Get EnforcedOnRegistrationSite
	 * @return boolean
	 */
	public function getEnforcedOnRegistrationSite()
	{
		return $this->EnforcedOnRegistrationSite;
	}
	/**
	 * Set DetailVersion
	 * @param string DetailVersion
	 * @return string
	 */
	public function setDetailVersion($_DetailVersion)
	{
		return ($this->DetailVersion = $_DetailVersion);
	}
	/**
	 * Get DetailVersion
	 * @return string
	 */
	public function getDetailVersion()
	{
		return $this->DetailVersion;
	}
	/**
	 * Set UpdateTime
	 * @param dateTime UpdateTime
	 * @return dateTime
	 */
	public function setUpdateTime($_UpdateTime)
	{
		return ($this->UpdateTime = $_UpdateTime);
	}
	/**
	 * Get UpdateTime
	 * @return dateTime
	 */
	public function getUpdateTime()
	{
		return $this->UpdateTime;
	}
	/**
	 * Set any
	 * @param DOMDocument any
	 * @return DOMDocument
	 */
	public function setAny($_any)
	{
		return ($this->any = $_any);
	}
	/**
	 * Get any
	 * @return DOMDocument
	 */
	public function getAny()
	{
		if(!($this->any instanceof DOMDocument))
		{
			$dom = new DOMDocument('1.0','UTF-8');
			$dom->formatOutput = true;
			$dom->loadXML($this->any);
			$this->setAny($dom);
		}
		return $this->any;
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