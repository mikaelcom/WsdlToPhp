<?php
/**
 * Class file for AmazonEc2TypeInstanceBlockDeviceMappingType
 * @date 10/07/2012
 */
/**
 * Class AmazonEc2TypeInstanceBlockDeviceMappingType
 * @date 10/07/2012
 */
class AmazonEc2TypeInstanceBlockDeviceMappingType extends AmazonEc2WsdlClass
{
	/**
	 * The item
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * @var AmazonEc2TypeInstanceBlockDeviceMappingItemType
	 */
	public $item;
	/**
	 * Constructor
	 * @param AmazonEc2TypeInstanceBlockDeviceMappingItemType item
	 * @return AmazonEc2TypeInstanceBlockDeviceMappingType
	 */
	public function __construct($_item = null)
	{
		parent::__construct(array('item'=>$_item));
	}
	/**
	 * Set item
	 * @param InstanceBlockDeviceMappingItemType item
	 * @return InstanceBlockDeviceMappingItemType
	 */
	public function setItem($_item)
	{
		return ($this->item = $_item);
	}
	/**
	 * Get item
	 * @return AmazonEc2TypeInstanceBlockDeviceMappingItemType
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