<?php
/**
 * Class file for AmazonEc2TypeAssignPrivateIpAddressesSetItemRequestType
 * @date 10/07/2012
 */
/**
 * Class AmazonEc2TypeAssignPrivateIpAddressesSetItemRequestType
 * @date 10/07/2012
 */
class AmazonEc2TypeAssignPrivateIpAddressesSetItemRequestType extends AmazonEc2WsdlClass
{
	/**
	 * The privateIpAddress
	 * @var string
	 */
	public $privateIpAddress;
	/**
	 * Constructor
	 * @param string privateIpAddress
	 * @return AmazonEc2TypeAssignPrivateIpAddressesSetItemRequestType
	 */
	public function __construct($_privateIpAddress = null)
	{
		parent::__construct(array('privateIpAddress'=>$_privateIpAddress));
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
	 * Method returning the class name
	 * @return string __CLASS__
	 */
	public function __toString()
	{
		return __CLASS__;
	}
}
?>