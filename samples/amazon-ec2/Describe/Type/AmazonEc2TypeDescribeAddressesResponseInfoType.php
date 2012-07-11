<?php
/**
 * Class file for AmazonEc2TypeDescribeAddressesResponseInfoType
 * @date 10/07/2012
 */
/**
 * Class AmazonEc2TypeDescribeAddressesResponseInfoType
 * @date 10/07/2012
 */
class AmazonEc2TypeDescribeAddressesResponseInfoType extends AmazonEc2WsdlClass
{
	/**
	 * The item
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * @var AmazonEc2TypeDescribeAddressesResponseItemType
	 */
	public $item;
	/**
	 * Constructor
	 * @param AmazonEc2TypeDescribeAddressesResponseItemType item
	 * @return AmazonEc2TypeDescribeAddressesResponseInfoType
	 */
	public function __construct($_item = null)
	{
		parent::__construct(array('item'=>$_item));
	}
	/**
	 * Set item
	 * @param DescribeAddressesResponseItemType item
	 * @return DescribeAddressesResponseItemType
	 */
	public function setItem($_item)
	{
		return ($this->item = $_item);
	}
	/**
	 * Get item
	 * @return AmazonEc2TypeDescribeAddressesResponseItemType
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