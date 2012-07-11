<?php
/**
 * Class file for AmazonEc2TypeAssociateAddressType
 * @date 10/07/2012
 */
/**
 * Class AmazonEc2TypeAssociateAddressType
 * @date 10/07/2012
 */
class AmazonEc2TypeAssociateAddressType extends AmazonEc2WsdlClass
{
	/**
	 * The publicIp
	 * @var string
	 */
	public $publicIp;
	/**
	 * The allocationId
	 * @var string
	 */
	public $allocationId;
	/**
	 * The networkInterfaceId
	 * @var string
	 */
	public $networkInterfaceId;
	/**
	 * The instanceId
	 * @var string
	 */
	public $instanceId;
	/**
	 * The privateIpAddress
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var string
	 */
	public $privateIpAddress;
	/**
	 * The allowReassociation
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var boolean
	 */
	public $allowReassociation;
	/**
	 * Constructor
	 * @param string publicIp
	 * @param string allocationId
	 * @param string networkInterfaceId
	 * @param string instanceId
	 * @param string privateIpAddress
	 * @param boolean allowReassociation
	 * @return AmazonEc2TypeAssociateAddressType
	 */
	public function __construct($_publicIp = null,$_allocationId = null,$_networkInterfaceId = null,$_instanceId = null,$_privateIpAddress = null,$_allowReassociation = null)
	{
		parent::__construct(array('publicIp'=>$_publicIp,'allocationId'=>$_allocationId,'networkInterfaceId'=>$_networkInterfaceId,'instanceId'=>$_instanceId,'privateIpAddress'=>$_privateIpAddress,'allowReassociation'=>$_allowReassociation));
	}
	/**
	 * Set publicIp
	 * @param string publicIp
	 * @return string
	 */
	public function setPublicIp($_publicIp)
	{
		return ($this->publicIp = $_publicIp);
	}
	/**
	 * Get publicIp
	 * @return string
	 */
	public function getPublicIp()
	{
		return $this->publicIp;
	}
	/**
	 * Set allocationId
	 * @param string allocationId
	 * @return string
	 */
	public function setAllocationId($_allocationId)
	{
		return ($this->allocationId = $_allocationId);
	}
	/**
	 * Get allocationId
	 * @return string
	 */
	public function getAllocationId()
	{
		return $this->allocationId;
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
	 * Set instanceId
	 * @param string instanceId
	 * @return string
	 */
	public function setInstanceId($_instanceId)
	{
		return ($this->instanceId = $_instanceId);
	}
	/**
	 * Get instanceId
	 * @return string
	 */
	public function getInstanceId()
	{
		return $this->instanceId;
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
	 * Set allowReassociation
	 * @param boolean allowReassociation
	 * @return boolean
	 */
	public function setAllowReassociation($_allowReassociation)
	{
		return ($this->allowReassociation = $_allowReassociation);
	}
	/**
	 * Get allowReassociation
	 * @return boolean
	 */
	public function getAllowReassociation()
	{
		return $this->allowReassociation;
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