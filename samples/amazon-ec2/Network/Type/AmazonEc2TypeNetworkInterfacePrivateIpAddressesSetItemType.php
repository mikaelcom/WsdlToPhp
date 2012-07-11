<?php
/**
 * Class file for AmazonEc2TypeNetworkInterfacePrivateIpAddressesSetItemType
 * @date 10/07/2012
 */
/**
 * Class AmazonEc2TypeNetworkInterfacePrivateIpAddressesSetItemType
 * @date 10/07/2012
 */
class AmazonEc2TypeNetworkInterfacePrivateIpAddressesSetItemType extends AmazonEc2WsdlClass
{
	/**
	 * The privateIpAddress
	 * @var string
	 */
	public $privateIpAddress;
	/**
	 * The primary
	 * @var boolean
	 */
	public $primary;
	/**
	 * The association
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var AmazonEc2TypeNetworkInterfaceAssociationType
	 */
	public $association;
	/**
	 * Constructor
	 * @param string privateIpAddress
	 * @param boolean primary
	 * @param AmazonEc2TypeNetworkInterfaceAssociationType association
	 * @return AmazonEc2TypeNetworkInterfacePrivateIpAddressesSetItemType
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
	 * @param NetworkInterfaceAssociationType association
	 * @return NetworkInterfaceAssociationType
	 */
	public function setAssociation($_association)
	{
		return ($this->association = $_association);
	}
	/**
	 * Get association
	 * @return AmazonEc2TypeNetworkInterfaceAssociationType
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