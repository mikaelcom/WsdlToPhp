<?php
/**
 * Class file for AmazonEc2TypeDescribeSecurityGroupsSetType
 * @date 10/07/2012
 */
/**
 * Class AmazonEc2TypeDescribeSecurityGroupsSetType
 * @date 10/07/2012
 */
class AmazonEc2TypeDescribeSecurityGroupsSetType extends AmazonEc2WsdlClass
{
	/**
	 * The item
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * @var AmazonEc2TypeDescribeSecurityGroupsSetItemType
	 */
	public $item;
	/**
	 * Constructor
	 * @param AmazonEc2TypeDescribeSecurityGroupsSetItemType item
	 * @return AmazonEc2TypeDescribeSecurityGroupsSetType
	 */
	public function __construct($_item = null)
	{
		parent::__construct(array('item'=>$_item));
	}
	/**
	 * Set item
	 * @param DescribeSecurityGroupsSetItemType item
	 * @return DescribeSecurityGroupsSetItemType
	 */
	public function setItem($_item)
	{
		return ($this->item = $_item);
	}
	/**
	 * Get item
	 * @return AmazonEc2TypeDescribeSecurityGroupsSetItemType
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