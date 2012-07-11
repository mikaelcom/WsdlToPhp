<?php
/**
 * Class file for AmazonEc2TypeDescribeReservedInstancesResponseSetType
 * @date 10/07/2012
 */
/**
 * Class AmazonEc2TypeDescribeReservedInstancesResponseSetType
 * @date 10/07/2012
 */
class AmazonEc2TypeDescribeReservedInstancesResponseSetType extends AmazonEc2WsdlClass
{
	/**
	 * The item
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * @var AmazonEc2TypeDescribeReservedInstancesResponseSetItemType
	 */
	public $item;
	/**
	 * Constructor
	 * @param AmazonEc2TypeDescribeReservedInstancesResponseSetItemType item
	 * @return AmazonEc2TypeDescribeReservedInstancesResponseSetType
	 */
	public function __construct($_item = null)
	{
		parent::__construct(array('item'=>$_item));
	}
	/**
	 * Set item
	 * @param DescribeReservedInstancesResponseSetItemType item
	 * @return DescribeReservedInstancesResponseSetItemType
	 */
	public function setItem($_item)
	{
		return ($this->item = $_item);
	}
	/**
	 * Get item
	 * @return AmazonEc2TypeDescribeReservedInstancesResponseSetItemType
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