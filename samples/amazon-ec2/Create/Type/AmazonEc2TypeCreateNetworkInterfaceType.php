<?php
/**
 * Class file for AmazonEc2TypeCreateNetworkInterfaceType
 * @date 10/07/2012
 */
/**
 * Class AmazonEc2TypeCreateNetworkInterfaceType
 * @date 10/07/2012
 */
class AmazonEc2TypeCreateNetworkInterfaceType extends AmazonEc2WsdlClass
{
	/**
	 * The subnetId
	 * @var string
	 */
	public $subnetId;
	/**
	 * The description
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var string
	 */
	public $description;
	/**
	 * The privateIpAddress
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var string
	 */
	public $privateIpAddress;
	/**
	 * The groupSet
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var AmazonEc2TypeSecurityGroupIdSetType
	 */
	public $groupSet;
	/**
	 * The privateIpAddressesSet
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var AmazonEc2TypePrivateIpAddressesSetRequestType
	 */
	public $privateIpAddressesSet;
	/**
	 * The secondaryPrivateIpAddressCount
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var int
	 */
	public $secondaryPrivateIpAddressCount;
	/**
	 * Constructor
	 * @param string subnetId
	 * @param string description
	 * @param string privateIpAddress
	 * @param AmazonEc2TypeSecurityGroupIdSetType groupSet
	 * @param AmazonEc2TypePrivateIpAddressesSetRequestType privateIpAddressesSet
	 * @param int secondaryPrivateIpAddressCount
	 * @return AmazonEc2TypeCreateNetworkInterfaceType
	 */
	public function __construct($_subnetId = null,$_description = null,$_privateIpAddress = null,$_groupSet = null,$_privateIpAddressesSet = null,$_secondaryPrivateIpAddressCount = null)
	{
		parent::__construct(array('subnetId'=>$_subnetId,'description'=>$_description,'privateIpAddress'=>$_privateIpAddress,'groupSet'=>$_groupSet,'privateIpAddressesSet'=>$_privateIpAddressesSet,'secondaryPrivateIpAddressCount'=>$_secondaryPrivateIpAddressCount));
	}
	/**
	 * Set subnetId
	 * @param string subnetId
	 * @return string
	 */
	public function setSubnetId($_subnetId)
	{
		return ($this->subnetId = $_subnetId);
	}
	/**
	 * Get subnetId
	 * @return string
	 */
	public function getSubnetId()
	{
		return $this->subnetId;
	}
	/**
	 * Set description
	 * @param string description
	 * @return string
	 */
	public function setDescription($_description)
	{
		return ($this->description = $_description);
	}
	/**
	 * Get description
	 * @return string
	 */
	public function getDescription()
	{
		return $this->description;
	}
	/**
	 * Set privateIpAddress
	 * @param string privateIpAddress
	 * @return string
	 */
	public function setPrivateIpAddress($_privateIpAddress)
	{
		return ($this->privateIpAddress = $_privateIpAddress);
	}
	/**
	 * Get privateIpAddress
	 * @return string
	 */
	public function getPrivateIpAddress()
	{
		return $this->privateIpAddress;
	}
	/**
	 * Set groupSet
	 * @param SecurityGroupIdSetType groupSet
	 * @return SecurityGroupIdSetType
	 */
	public function setGroupSet($_groupSet)
	{
		return ($this->groupSet = $_groupSet);
	}
	/**
	 * Get groupSet
	 * @return AmazonEc2TypeSecurityGroupIdSetType
	 */
	public function getGroupSet()
	{
		return $this->groupSet;
	}
	/**
	 * Set privateIpAddressesSet
	 * @param PrivateIpAddressesSetRequestType privateIpAddressesSet
	 * @return PrivateIpAddressesSetRequestType
	 */
	public function setPrivateIpAddressesSet($_privateIpAddressesSet)
	{
		return ($this->privateIpAddressesSet = $_privateIpAddressesSet);
	}
	/**
	 * Get privateIpAddressesSet
	 * @return AmazonEc2TypePrivateIpAddressesSetRequestType
	 */
	public function getPrivateIpAddressesSet()
	{
		return $this->privateIpAddressesSet;
	}
	/**
	 * Set secondaryPrivateIpAddressCount
	 * @param int secondaryPrivateIpAddressCount
	 * @return int
	 */
	public function setSecondaryPrivateIpAddressCount($_secondaryPrivateIpAddressCount)
	{
		return ($this->secondaryPrivateIpAddressCount = $_secondaryPrivateIpAddressCount);
	}
	/**
	 * Get secondaryPrivateIpAddressCount
	 * @return int
	 */
	public function getSecondaryPrivateIpAddressCount()
	{
		return $this->secondaryPrivateIpAddressCount;
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