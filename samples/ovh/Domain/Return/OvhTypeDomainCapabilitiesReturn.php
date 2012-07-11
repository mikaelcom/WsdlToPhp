<?php
/**
 * Class file for OvhTypeDomainCapabilitiesReturn
 * @date 02/07/2012
 */
/**
 * Class OvhTypeDomainCapabilitiesReturn
 * @date 02/07/2012
 */
class OvhTypeDomainCapabilitiesReturn extends OvhWsdlClass
{
	/**
	 * The needAuthInfo
	 * @var boolean
	 */
	public $needAuthInfo;
	/**
	 * The needZoneCheck
	 * @var boolean
	 */
	public $needZoneCheck;
	/**
	 * The owo
	 * @var boolean
	 */
	public $owo;
	/**
	 * The hostIPv4
	 * @var boolean
	 */
	public $hostIPv4;
	/**
	 * The hostIPv6
	 * @var boolean
	 */
	public $hostIPv6;
	/**
	 * The hostmultiIp
	 * @var boolean
	 */
	public $hostmultiIp;
	/**
	 * The ownerUpdateAllowed
	 * @var boolean
	 */
	public $ownerUpdateAllowed;
	/**
	 * The ownerTradeAllowed
	 * @var boolean
	 */
	public $ownerTradeAllowed;
	/**
	 * Constructor
	 * @param boolean needAuthInfo
	 * @param boolean needZoneCheck
	 * @param boolean owo
	 * @param boolean hostIPv4
	 * @param boolean hostIPv6
	 * @param boolean hostmultiIp
	 * @param boolean ownerUpdateAllowed
	 * @param boolean ownerTradeAllowed
	 * @return OvhTypeDomainCapabilitiesReturn
	 */
	public function __construct($_needAuthInfo = null,$_needZoneCheck = null,$_owo = null,$_hostIPv4 = null,$_hostIPv6 = null,$_hostmultiIp = null,$_ownerUpdateAllowed = null,$_ownerTradeAllowed = null)
	{
		parent::__construct(array('needAuthInfo'=>$_needAuthInfo,'needZoneCheck'=>$_needZoneCheck,'owo'=>$_owo,'hostIPv4'=>$_hostIPv4,'hostIPv6'=>$_hostIPv6,'hostmultiIp'=>$_hostmultiIp,'ownerUpdateAllowed'=>$_ownerUpdateAllowed,'ownerTradeAllowed'=>$_ownerTradeAllowed));
	}
	/**
	 * Set needAuthInfo
	 * @param boolean needAuthInfo
	 * @return boolean
	 */
	public function setNeedAuthInfo($_needAuthInfo)
	{
		return ($this->needAuthInfo = $_needAuthInfo);
	}
	/**
	 * Get needAuthInfo
	 * @return boolean
	 */
	public function getNeedAuthInfo()
	{
		return $this->needAuthInfo;
	}
	/**
	 * Set needZoneCheck
	 * @param boolean needZoneCheck
	 * @return boolean
	 */
	public function setNeedZoneCheck($_needZoneCheck)
	{
		return ($this->needZoneCheck = $_needZoneCheck);
	}
	/**
	 * Get needZoneCheck
	 * @return boolean
	 */
	public function getNeedZoneCheck()
	{
		return $this->needZoneCheck;
	}
	/**
	 * Set owo
	 * @param boolean owo
	 * @return boolean
	 */
	public function setOwo($_owo)
	{
		return ($this->owo = $_owo);
	}
	/**
	 * Get owo
	 * @return boolean
	 */
	public function getOwo()
	{
		return $this->owo;
	}
	/**
	 * Set hostIPv4
	 * @param boolean hostIPv4
	 * @return boolean
	 */
	public function setHostIPv4($_hostIPv4)
	{
		return ($this->hostIPv4 = $_hostIPv4);
	}
	/**
	 * Get hostIPv4
	 * @return boolean
	 */
	public function getHostIPv4()
	{
		return $this->hostIPv4;
	}
	/**
	 * Set hostIPv6
	 * @param boolean hostIPv6
	 * @return boolean
	 */
	public function setHostIPv6($_hostIPv6)
	{
		return ($this->hostIPv6 = $_hostIPv6);
	}
	/**
	 * Get hostIPv6
	 * @return boolean
	 */
	public function getHostIPv6()
	{
		return $this->hostIPv6;
	}
	/**
	 * Set hostmultiIp
	 * @param boolean hostmultiIp
	 * @return boolean
	 */
	public function setHostmultiIp($_hostmultiIp)
	{
		return ($this->hostmultiIp = $_hostmultiIp);
	}
	/**
	 * Get hostmultiIp
	 * @return boolean
	 */
	public function getHostmultiIp()
	{
		return $this->hostmultiIp;
	}
	/**
	 * Set ownerUpdateAllowed
	 * @param boolean ownerUpdateAllowed
	 * @return boolean
	 */
	public function setOwnerUpdateAllowed($_ownerUpdateAllowed)
	{
		return ($this->ownerUpdateAllowed = $_ownerUpdateAllowed);
	}
	/**
	 * Get ownerUpdateAllowed
	 * @return boolean
	 */
	public function getOwnerUpdateAllowed()
	{
		return $this->ownerUpdateAllowed;
	}
	/**
	 * Set ownerTradeAllowed
	 * @param boolean ownerTradeAllowed
	 * @return boolean
	 */
	public function setOwnerTradeAllowed($_ownerTradeAllowed)
	{
		return ($this->ownerTradeAllowed = $_ownerTradeAllowed);
	}
	/**
	 * Get ownerTradeAllowed
	 * @return boolean
	 */
	public function getOwnerTradeAllowed()
	{
		return $this->ownerTradeAllowed;
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