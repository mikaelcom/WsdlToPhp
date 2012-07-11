<?php
/**
 * Class file for AmazonEc2TypeUnassignPrivateIpAddressesType
 * @date 10/07/2012
 */
/**
 * Class AmazonEc2TypeUnassignPrivateIpAddressesType
 * @date 10/07/2012
 */
class AmazonEc2TypeUnassignPrivateIpAddressesType extends AmazonEc2WsdlClass
{
	/**
	 * The networkInterfaceId
	 * @var string
	 */
	public $networkInterfaceId;
	/**
	 * The privateIpAddressesSet
	 * @var AmazonEc2TypeAssignPrivateIpAddressesSetRequestType
	 */
	public $privateIpAddressesSet;
	/**
	 * Constructor
	 * @param string networkInterfaceId
	 * @param AmazonEc2TypeAssignPrivateIpAddressesSetRequestType privateIpAddressesSet
	 * @return AmazonEc2TypeUnassignPrivateIpAddressesType
	 */
	public function __construct($_networkInterfaceId = null,$_privateIpAddressesSet = null)
	{
		parent::__construct(array('networkInterfaceId'=>$_networkInterfaceId,'privateIpAddressesSet'=>$_privateIpAddressesSet));
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
	 * Method returning the class name
	 * @return string __CLASS__
	 */
	public function __toString()
	{
		return __CLASS__;
	}
}
?>