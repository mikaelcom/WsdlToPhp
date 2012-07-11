<?php
/**
 * Class file for AmazonEc2TypeInstancePrivateIpAddressesSetType
 * @date 10/07/2012
 */
/**
 * Class AmazonEc2TypeInstancePrivateIpAddressesSetType
 * @date 10/07/2012
 */
class AmazonEc2TypeInstancePrivateIpAddressesSetType extends AmazonEc2WsdlClass
{
	/**
	 * The item
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * @var AmazonEc2TypeInstancePrivateIpAddressesSetItemType
	 */
	public $item;
	/**
	 * Constructor
	 * @param AmazonEc2TypeInstancePrivateIpAddressesSetItemType item
	 * @return AmazonEc2TypeInstancePrivateIpAddressesSetType
	 */
	public function __construct($_item = null)
	{
		parent::__construct(array('item'=>$_item));
	}
	/**
	 * Set item
	 * @param InstancePrivateIpAddressesSetItemType item
	 * @return InstancePrivateIpAddressesSetItemType
	 */
	public function setItem($_item)
	{
		return ($this->item = $_item);
	}
	/**
	 * Get item
	 * @return AmazonEc2TypeInstancePrivateIpAddressesSetItemType
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