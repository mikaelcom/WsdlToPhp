<?php
/**
 * Class file for AmazonEc2TypePrivateIpAddressesSetRequestType
 * @date 10/07/2012
 */
/**
 * Class AmazonEc2TypePrivateIpAddressesSetRequestType
 * @date 10/07/2012
 */
class AmazonEc2TypePrivateIpAddressesSetRequestType extends AmazonEc2WsdlClass
{
	/**
	 * The item
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * @var AmazonEc2TypePrivateIpAddressesSetItemRequestType
	 */
	public $item;
	/**
	 * Constructor
	 * @param AmazonEc2TypePrivateIpAddressesSetItemRequestType item
	 * @return AmazonEc2TypePrivateIpAddressesSetRequestType
	 */
	public function __construct($_item = null)
	{
		parent::__construct(array('item'=>$_item));
	}
	/**
	 * Set item
	 * @param PrivateIpAddressesSetItemRequestType item
	 * @return PrivateIpAddressesSetItemRequestType
	 */
	public function setItem($_item)
	{
		return ($this->item = $_item);
	}
	/**
	 * Get item
	 * @return AmazonEc2TypePrivateIpAddressesSetItemRequestType
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