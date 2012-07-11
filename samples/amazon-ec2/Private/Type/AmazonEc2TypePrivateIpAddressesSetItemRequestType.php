<?php
/**
 * Class file for AmazonEc2TypePrivateIpAddressesSetItemRequestType
 * @date 10/07/2012
 */
/**
 * Class AmazonEc2TypePrivateIpAddressesSetItemRequestType
 * @date 10/07/2012
 */
class AmazonEc2TypePrivateIpAddressesSetItemRequestType extends AmazonEc2WsdlClass
{
	/**
	 * The privateIpAddress
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
	 * Constructor
	 * @param string privateIpAddress
	 * @param boolean primary
	 * @return AmazonEc2TypePrivateIpAddressesSetItemRequestType
	 */
	public function __construct($_privateIpAddress = null,$_primary = null)
	{
		parent::__construct(array('privateIpAddress'=>$_privateIpAddress,'primary'=>$_primary));
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
	 * Method returning the class name
	 * @return string __CLASS__
	 */
	public function __toString()
	{
		return __CLASS__;
	}
}
?>