<?php
/**
 * Class file for AmazonEc2TypeDescribeAddressesResponseItemType
 * @date 10/07/2012
 */
/**
 * Class AmazonEc2TypeDescribeAddressesResponseItemType
 * @date 10/07/2012
 */
class AmazonEc2TypeDescribeAddressesResponseItemType extends AmazonEc2WsdlClass
{
	/**
	 * The publicIp
	 * @var string
	 */
	public $publicIp;
	/**
	 * The allocationId
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var string
	 */
	public $allocationId;
	/**
	 * The domain
	 * @var string
	 */
	public $domain;
	/**
	 * The instanceId
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var string
	 */
	public $instanceId;
	/**
	 * The associationId
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var string
	 */
	public $associationId;
	/**
	 * The networkInterfaceId
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var string
	 */
	public $networkInterfaceId;
	/**
	 * The networkInterfaceOwnerId
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var string
	 */
	public $networkInterfaceOwnerId;
	/**
	 * The privateIpAddress
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var string
	 */
	public $privateIpAddress;
	/**
	 * Constructor
	 * @param string publicIp
	 * @param string allocationId
	 * @param string domain
	 * @param string instanceId
	 * @param string associationId
	 * @param string networkInterfaceId
	 * @param string networkInterfaceOwnerId
	 * @param string privateIpAddress
	 * @return AmazonEc2TypeDescribeAddressesResponseItemType
	 */
	public function __construct($_publicIp = null,$_allocationId = null,$_domain = null,$_instanceId = null,$_associationId = null,$_networkInterfaceId = null,$_networkInterfaceOwnerId = null,$_privateIpAddress = null)
	{
		parent::__construct(array('publicIp'=>$_publicIp,'allocationId'=>$_allocationId,'domain'=>$_domain,'instanceId'=>$_instanceId,'associationId'=>$_associationId,'networkInterfaceId'=>$_networkInterfaceId,'networkInterfaceOwnerId'=>$_networkInterfaceOwnerId,'privateIpAddress'=>$_privateIpAddress));
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
	 * Set domain
	 * @param string domain
	 * @return string
	 */
	public function setDomain($_domain)
	{
		return ($this->domain = $_domain);
	}
	/**
	 * Get domain
	 * @return string
	 */
	public function getDomain()
	{
		return $this->domain;
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
	 * Set associationId
	 * @param string associationId
	 * @return string
	 */
	public function setAssociationId($_associationId)
	{
		return ($this->associationId = $_associationId);
	}
	/**
	 * Get associationId
	 * @return string
	 */
	public function getAssociationId()
	{
		return $this->associationId;
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
	 * Set networkInterfaceOwnerId
	 * @param string networkInterfaceOwnerId
	 * @return string
	 */
	public function setNetworkInterfaceOwnerId($_networkInterfaceOwnerId)
	{
		return ($this->networkInterfaceOwnerId = $_networkInterfaceOwnerId);
	}
	/**
	 * Get networkInterfaceOwnerId
	 * @return string
	 */
	public function getNetworkInterfaceOwnerId()
	{
		return $this->networkInterfaceOwnerId;
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