<?php
/**
 * Class file for AmazonEc2TypeDescribeSecurityGroupsIdSetType
 * @date 10/07/2012
 */
/**
 * Class AmazonEc2TypeDescribeSecurityGroupsIdSetType
 * @date 10/07/2012
 */
class AmazonEc2TypeDescribeSecurityGroupsIdSetType extends AmazonEc2WsdlClass
{
	/**
	 * The item
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * @var AmazonEc2TypeDescribeSecurityGroupsIdSetItemType
	 */
	public $item;
	/**
	 * Constructor
	 * @param AmazonEc2TypeDescribeSecurityGroupsIdSetItemType item
	 * @return AmazonEc2TypeDescribeSecurityGroupsIdSetType
	 */
	public function __construct($_item = null)
	{
		parent::__construct(array('item'=>$_item));
	}
	/**
	 * Set item
	 * @param DescribeSecurityGroupsIdSetItemType item
	 * @return DescribeSecurityGroupsIdSetItemType
	 */
	public function setItem($_item)
	{
		return ($this->item = $_item);
	}
	/**
	 * Get item
	 * @return AmazonEc2TypeDescribeSecurityGroupsIdSetItemType
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