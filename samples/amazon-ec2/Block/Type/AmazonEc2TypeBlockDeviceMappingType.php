<?php
/**
 * Class file for AmazonEc2TypeBlockDeviceMappingType
 * @date 10/07/2012
 */
/**
 * Class AmazonEc2TypeBlockDeviceMappingType
 * @date 10/07/2012
 */
class AmazonEc2TypeBlockDeviceMappingType extends AmazonEc2WsdlClass
{
	/**
	 * The item
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * @var AmazonEc2TypeBlockDeviceMappingItemType
	 */
	public $item;
	/**
	 * Constructor
	 * @param AmazonEc2TypeBlockDeviceMappingItemType item
	 * @return AmazonEc2TypeBlockDeviceMappingType
	 */
	public function __construct($_item = null)
	{
		parent::__construct(array('item'=>$_item));
	}
	/**
	 * Set item
	 * @param BlockDeviceMappingItemType item
	 * @return BlockDeviceMappingItemType
	 */
	public function setItem($_item)
	{
		return ($this->item = $_item);
	}
	/**
	 * Get item
	 * @return AmazonEc2TypeBlockDeviceMappingItemType
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