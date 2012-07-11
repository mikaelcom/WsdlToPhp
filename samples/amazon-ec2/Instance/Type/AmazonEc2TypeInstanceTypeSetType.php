<?php
/**
 * Class file for AmazonEc2TypeInstanceTypeSetType
 * @date 10/07/2012
 */
/**
 * Class AmazonEc2TypeInstanceTypeSetType
 * @date 10/07/2012
 */
class AmazonEc2TypeInstanceTypeSetType extends AmazonEc2WsdlClass
{
	/**
	 * The item
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : unbounded
	 * @var AmazonEc2TypeInstanceTypeSetItemType
	 */
	public $item;
	/**
	 * Constructor
	 * @param AmazonEc2TypeInstanceTypeSetItemType item
	 * @return AmazonEc2TypeInstanceTypeSetType
	 */
	public function __construct($_item)
	{
		parent::__construct(array('item'=>$_item));
	}
	/**
	 * Set item
	 * @param InstanceTypeSetItemType item
	 * @return InstanceTypeSetItemType
	 */
	public function setItem($_item)
	{
		return ($this->item = $_item);
	}
	/**
	 * Get item
	 * @return AmazonEc2TypeInstanceTypeSetItemType
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