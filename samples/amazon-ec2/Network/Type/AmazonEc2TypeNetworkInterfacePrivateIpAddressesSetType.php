<?php
/**
 * Class file for AmazonEc2TypeNetworkInterfacePrivateIpAddressesSetType
 * @date 10/07/2012
 */
/**
 * Class AmazonEc2TypeNetworkInterfacePrivateIpAddressesSetType
 * @date 10/07/2012
 */
class AmazonEc2TypeNetworkInterfacePrivateIpAddressesSetType extends AmazonEc2WsdlClass
{
	/**
	 * The item
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * @var AmazonEc2TypeNetworkInterfacePrivateIpAddressesSetItemType
	 */
	public $item;
	/**
	 * Constructor
	 * @param AmazonEc2TypeNetworkInterfacePrivateIpAddressesSetItemType item
	 * @return AmazonEc2TypeNetworkInterfacePrivateIpAddressesSetType
	 */
	public function __construct($_item = null)
	{
		parent::__construct(array('item'=>$_item));
	}
	/**
	 * Set item
	 * @param NetworkInterfacePrivateIpAddressesSetItemType item
	 * @return NetworkInterfacePrivateIpAddressesSetItemType
	 */
	public function setItem($_item)
	{
		return ($this->item = $_item);
	}
	/**
	 * Get item
	 * @return AmazonEc2TypeNetworkInterfacePrivateIpAddressesSetItemType
	 */
	public function getItem()
	{
		return $this->item;
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