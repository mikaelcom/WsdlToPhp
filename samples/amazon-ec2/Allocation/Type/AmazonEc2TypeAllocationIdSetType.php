<?php
/**
 * Class file for AmazonEc2TypeAllocationIdSetType
 * @date 10/07/2012
 */
/**
 * Class AmazonEc2TypeAllocationIdSetType
 * @date 10/07/2012
 */
class AmazonEc2TypeAllocationIdSetType extends AmazonEc2WsdlClass
{
	/**
	 * The item
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * @var AmazonEc2TypeAllocationIdSetItemType
	 */
	public $item;
	/**
	 * Constructor
	 * @param AmazonEc2TypeAllocationIdSetItemType item
	 * @return AmazonEc2TypeAllocationIdSetType
	 */
	public function __construct($_item = null)
	{
		parent::__construct(array('item'=>$_item));
	}
	/**
	 * Set item
	 * @param AllocationIdSetItemType item
	 * @return AllocationIdSetItemType
	 */
	public function setItem($_item)
	{
		return ($this->item = $_item);
	}
	/**
	 * Get item
	 * @return AmazonEc2TypeAllocationIdSetItemType
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