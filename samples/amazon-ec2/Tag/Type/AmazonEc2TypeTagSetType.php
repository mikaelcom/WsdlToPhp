<?php
/**
 * Class file for AmazonEc2TypeTagSetType
 * @date 10/07/2012
 */
/**
 * Class AmazonEc2TypeTagSetType
 * @date 10/07/2012
 */
class AmazonEc2TypeTagSetType extends AmazonEc2WsdlClass
{
	/**
	 * The item
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * @var AmazonEc2TypeTagSetItemType
	 */
	public $item;
	/**
	 * Constructor
	 * @param AmazonEc2TypeTagSetItemType item
	 * @return AmazonEc2TypeTagSetType
	 */
	public function __construct($_item = null)
	{
		parent::__construct(array('item'=>$_item));
	}
	/**
	 * Set item
	 * @param TagSetItemType item
	 * @return TagSetItemType
	 */
	public function setItem($_item)
	{
		return ($this->item = $_item);
	}
	/**
	 * Get item
	 * @return AmazonEc2TypeTagSetItemType
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