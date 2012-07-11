<?php
/**
 * Class file for AmazonEc2TypeDescribeReservedInstancesSetType
 * @date 10/07/2012
 */
/**
 * Class AmazonEc2TypeDescribeReservedInstancesSetType
 * @date 10/07/2012
 */
class AmazonEc2TypeDescribeReservedInstancesSetType extends AmazonEc2WsdlClass
{
	/**
	 * The item
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * @var AmazonEc2TypeDescribeReservedInstancesSetItemType
	 */
	public $item;
	/**
	 * Constructor
	 * @param AmazonEc2TypeDescribeReservedInstancesSetItemType item
	 * @return AmazonEc2TypeDescribeReservedInstancesSetType
	 */
	public function __construct($_item = null)
	{
		parent::__construct(array('item'=>$_item));
	}
	/**
	 * Set item
	 * @param DescribeReservedInstancesSetItemType item
	 * @return DescribeReservedInstancesSetItemType
	 */
	public function setItem($_item)
	{
		return ($this->item = $_item);
	}
	/**
	 * Get item
	 * @return AmazonEc2TypeDescribeReservedInstancesSetItemType
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