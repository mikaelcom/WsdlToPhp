<?php
/**
 * Class file for AmazonEc2TypeDescribePlacementGroupsInfoType
 * @date 10/07/2012
 */
/**
 * Class AmazonEc2TypeDescribePlacementGroupsInfoType
 * @date 10/07/2012
 */
class AmazonEc2TypeDescribePlacementGroupsInfoType extends AmazonEc2WsdlClass
{
	/**
	 * The item
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * @var AmazonEc2TypeDescribePlacementGroupItemType
	 */
	public $item;
	/**
	 * Constructor
	 * @param AmazonEc2TypeDescribePlacementGroupItemType item
	 * @return AmazonEc2TypeDescribePlacementGroupsInfoType
	 */
	public function __construct($_item = null)
	{
		parent::__construct(array('item'=>$_item));
	}
	/**
	 * Set item
	 * @param DescribePlacementGroupItemType item
	 * @return DescribePlacementGroupItemType
	 */
	public function setItem($_item)
	{
		return ($this->item = $_item);
	}
	/**
	 * Get item
	 * @return AmazonEc2TypeDescribePlacementGroupItemType
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