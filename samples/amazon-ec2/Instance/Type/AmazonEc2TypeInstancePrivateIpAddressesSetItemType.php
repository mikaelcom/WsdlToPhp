<?php
/**
 * Class file for AmazonEc2TypeInstancePrivateIpAddressesSetItemType
 * @date 10/07/2012
 */
/**
 * Class AmazonEc2TypeInstancePrivateIpAddressesSetItemType
 * @date 10/07/2012
 */
class AmazonEc2TypeInstancePrivateIpAddressesSetItemType extends AmazonEc2WsdlClass
{
	/**
	 * The privateIpAddress
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var string
	 */
	public $privateIpAddress;
	/**
	 * The primary
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var boolean
	 */
	public $primary;
	/**
	 * The association
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var AmazonEc2TypeInstanceNetworkInterfaceAssociationType
	 */
	public $association;
	/**
	 * Constructor
	 * @param string privateIpAddress
	 * @param boolean primary
	 * @param AmazonEc2TypeInstanceNetworkInterfaceAssociationType association
	 * @return AmazonEc2TypeInstancePrivateIpAddressesSetItemType
	 */
	public function __construct($_privateIpAddress = null,$_primary = null,$_association = null)
	{
		parent::__construct(array('privateIpAddress'=>$_privateIpAddress,'primary'=>$_primary,'association'=>$_association));
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
	 * Set primary
	 * @param boolean primary
	 * @return boolean
	 */
	public function setPrimary($_primary)
	{
		return ($this->primary = $_primary);
	}
	/**
	 * Get primary
	 * @return boolean
	 */
	public function getPrimary()
	{
		return $this->primary;
	}
	/**
	 * Set association
	 * @param InstanceNetworkInterfaceAssociationType association
	 * @return InstanceNetworkInterfaceAssociationType
	 */
	public function setAssociation($_association)
	{
		return ($this->association = $_association);
	}
	/**
	 * Get association
	 * @return AmazonEc2TypeInstanceNetworkInterfaceAssociationType
	 */
	public function getAssociation()
	{
		return $this->association;
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