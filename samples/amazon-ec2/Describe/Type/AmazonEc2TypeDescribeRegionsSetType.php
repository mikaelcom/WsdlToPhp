<?php
/**
 * Class file for AmazonEc2TypeDescribeRegionsSetType
 * @date 10/07/2012
 */
/**
 * Class AmazonEc2TypeDescribeRegionsSetType
 * @date 10/07/2012
 */
class AmazonEc2TypeDescribeRegionsSetType extends AmazonEc2WsdlClass
{
	/**
	 * The item
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * @var AmazonEc2TypeDescribeRegionsSetItemType
	 */
	public $item;
	/**
	 * Constructor
	 * @param AmazonEc2TypeDescribeRegionsSetItemType item
	 * @return AmazonEc2TypeDescribeRegionsSetType
	 */
	public function __construct($_item = null)
	{
		parent::__construct(array('item'=>$_item));
	}
	/**
	 * Set item
	 * @param DescribeRegionsSetItemType item
	 * @return DescribeRegionsSetItemType
	 */
	public function setItem($_item)
	{
		return ($this->item = $_item);
	}
	/**
	 * Get item
	 * @return AmazonEc2TypeDescribeRegionsSetItemType
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