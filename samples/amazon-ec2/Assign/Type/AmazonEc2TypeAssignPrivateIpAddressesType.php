<?php
/**
 * Class file for AmazonEc2TypeAssignPrivateIpAddressesType
 * @date 10/07/2012
 */
/**
 * Class AmazonEc2TypeAssignPrivateIpAddressesType
 * @date 10/07/2012
 */
class AmazonEc2TypeAssignPrivateIpAddressesType extends AmazonEc2WsdlClass
{
	/**
	 * The networkInterfaceId
	 * @var string
	 */
	public $networkInterfaceId;
	/**
	 * The privateIpAddressesSet
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var AmazonEc2TypeAssignPrivateIpAddressesSetRequestType
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
	 * The allowReassignment
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var boolean
	 */
	public $allowReassignment;
	/**
	 * Constructor
	 * @param string networkInterfaceId
	 * @param AmazonEc2TypeAssignPrivateIpAddressesSetRequestType privateIpAddressesSet
	 * @param int secondaryPrivateIpAddressCount
	 * @param boolean allowReassignment
	 * @return AmazonEc2TypeAssignPrivateIpAddressesType
	 */
	public function __construct($_networkInterfaceId = null,$_privateIpAddressesSet = null,$_secondaryPrivateIpAddressCount = null,$_allowReassignment = null)
	{
		parent::__construct(array('networkInterfaceId'=>$_networkInterfaceId,'privateIpAddressesSet'=>$_privateIpAddressesSet,'secondaryPrivateIpAddressCount'=>$_secondaryPrivateIpAddressCount,'allowReassignment'=>$_allowReassignment));
	}
	/**
	 * Set networkInterfaceId
	 * @param string networkInterfaceId
	 * @return string
	 */
	public function setNetworkInterfaceId($_networkInterfaceId)
	{
		return ($this->networkInterfaceId = $_networkInterfaceId);
	}
	/**
	 * Get networkInterfaceId
	 * @return string
	 */
	public function getNetworkInterfaceId()
	{
		return $this->networkInterfaceId;
	}
	/**
	 * Set privateIpAddressesSet
	 * @param AssignPrivateIpAddressesSetRequestType privateIpAddressesSet
	 * @return AssignPrivateIpAddressesSetRequestType
	 */
	public function setPrivateIpAddressesSet($_privateIpAddressesSet)
	{
		return ($this->privateIpAddressesSet = $_privateIpAddressesSet);
	}
	/**
	 * Get privateIpAddressesSet
	 * @return AmazonEc2TypeAssignPrivateIpAddressesSetRequestType
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
	 * Set allowReassignment
	 * @param boolean allowReassignment
	 * @return boolean
	 */
	public function setAllowReassignment($_allowReassignment)
	{
		return ($this->allowReassignment = $_allowReassignment);
	}
	/**
	 * Get allowReassignment
	 * @return boolean
	 */
	public function getAllowReassignment()
	{
		return $this->allowReassignment;
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