<?php
/**
 * Class file for AmazonEc2TypeResourceIdSetType
 * @date 10/07/2012
 */
/**
 * Class AmazonEc2TypeResourceIdSetType
 * @date 10/07/2012
 */
class AmazonEc2TypeResourceIdSetType extends AmazonEc2WsdlClass
{
	/**
	 * The item
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * @var AmazonEc2TypeResourceIdSetItemType
	 */
	public $item;
	/**
	 * Constructor
	 * @param AmazonEc2TypeResourceIdSetItemType item
	 * @return AmazonEc2TypeResourceIdSetType
	 */
	public function __construct($_item = null)
	{
		parent::__construct(array('item'=>$_item));
	}
	/**
	 * Set item
	 * @param ResourceIdSetItemType item
	 * @return ResourceIdSetItemType
	 */
	public function setItem($_item)
	{
		return ($this->item = $_item);
	}
	/**
	 * Get item
	 * @return AmazonEc2TypeResourceIdSetItemType
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