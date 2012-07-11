<?php
/**
 * Class file for AmazonEc2TypeGroupSetType
 * @date 10/07/2012
 */
/**
 * Class AmazonEc2TypeGroupSetType
 * @date 10/07/2012
 */
class AmazonEc2TypeGroupSetType extends AmazonEc2WsdlClass
{
	/**
	 * The item
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * @var AmazonEc2TypeGroupItemType
	 */
	public $item;
	/**
	 * Constructor
	 * @param AmazonEc2TypeGroupItemType item
	 * @return AmazonEc2TypeGroupSetType
	 */
	public function __construct($_item = null)
	{
		parent::__construct(array('item'=>$_item));
	}
	/**
	 * Set item
	 * @param GroupItemType item
	 * @return GroupItemType
	 */
	public function setItem($_item)
	{
		return ($this->item = $_item);
	}
	/**
	 * Get item
	 * @return AmazonEc2TypeGroupItemType
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