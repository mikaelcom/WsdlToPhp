<?php
/**
 * Class file for AmazonEc2TypeRegionSetType
 * @date 10/07/2012
 */
/**
 * Class AmazonEc2TypeRegionSetType
 * @date 10/07/2012
 */
class AmazonEc2TypeRegionSetType extends AmazonEc2WsdlClass
{
	/**
	 * The item
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * @var AmazonEc2TypeRegionItemType
	 */
	public $item;
	/**
	 * Constructor
	 * @param AmazonEc2TypeRegionItemType item
	 * @return AmazonEc2TypeRegionSetType
	 */
	public function __construct($_item = null)
	{
		parent::__construct(array('item'=>$_item));
	}
	/**
	 * Set item
	 * @param RegionItemType item
	 * @return RegionItemType
	 */
	public function setItem($_item)
	{
		return ($this->item = $_item);
	}
	/**
	 * Get item
	 * @return AmazonEc2TypeRegionItemType
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