<?php
/**
 * Class file for AmazonEc2TypeAssignPrivateIpAddressesSetRequestType
 * @date 10/07/2012
 */
/**
 * Class AmazonEc2TypeAssignPrivateIpAddressesSetRequestType
 * @date 10/07/2012
 */
class AmazonEc2TypeAssignPrivateIpAddressesSetRequestType extends AmazonEc2WsdlClass
{
	/**
	 * The item
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : unbounded
	 * @var AmazonEc2TypeAssignPrivateIpAddressesSetItemRequestType
	 */
	public $item;
	/**
	 * Constructor
	 * @param AmazonEc2TypeAssignPrivateIpAddressesSetItemRequestType item
	 * @return AmazonEc2TypeAssignPrivateIpAddressesSetRequestType
	 */
	public function __construct($_item)
	{
		parent::__construct(array('item'=>$_item));
	}
	/**
	 * Set item
	 * @param AssignPrivateIpAddressesSetItemRequestType item
	 * @return AssignPrivateIpAddressesSetItemRequestType
	 */
	public function setItem($_item)
	{
		return ($this->item = $_item);
	}
	/**
	 * Get item
	 * @return AmazonEc2TypeAssignPrivateIpAddressesSetItemRequestType
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