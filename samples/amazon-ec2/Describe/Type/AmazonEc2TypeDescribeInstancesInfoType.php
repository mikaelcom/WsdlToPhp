<?php
/**
 * Class file for AmazonEc2TypeDescribeInstancesInfoType
 * @date 10/07/2012
 */
/**
 * Class AmazonEc2TypeDescribeInstancesInfoType
 * @date 10/07/2012
 */
class AmazonEc2TypeDescribeInstancesInfoType extends AmazonEc2WsdlClass
{
	/**
	 * The item
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * @var AmazonEc2TypeDescribeInstancesItemType
	 */
	public $item;
	/**
	 * Constructor
	 * @param AmazonEc2TypeDescribeInstancesItemType item
	 * @return AmazonEc2TypeDescribeInstancesInfoType
	 */
	public function __construct($_item = null)
	{
		parent::__construct(array('item'=>$_item));
	}
	/**
	 * Set item
	 * @param DescribeInstancesItemType item
	 * @return DescribeInstancesItemType
	 */
	public function setItem($_item)
	{
		return ($this->item = $_item);
	}
	/**
	 * Get item
	 * @return AmazonEc2TypeDescribeInstancesItemType
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