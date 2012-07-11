<?php
/**
 * Class file for AmazonEc2TypeInstanceBlockDeviceMappingResponseType
 * @date 10/07/2012
 */
/**
 * Class AmazonEc2TypeInstanceBlockDeviceMappingResponseType
 * @date 10/07/2012
 */
class AmazonEc2TypeInstanceBlockDeviceMappingResponseType extends AmazonEc2WsdlClass
{
	/**
	 * The item
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * @var AmazonEc2TypeInstanceBlockDeviceMappingResponseItemType
	 */
	public $item;
	/**
	 * Constructor
	 * @param AmazonEc2TypeInstanceBlockDeviceMappingResponseItemType item
	 * @return AmazonEc2TypeInstanceBlockDeviceMappingResponseType
	 */
	public function __construct($_item = null)
	{
		parent::__construct(array('item'=>$_item));
	}
	/**
	 * Set item
	 * @param InstanceBlockDeviceMappingResponseItemType item
	 * @return InstanceBlockDeviceMappingResponseItemType
	 */
	public function setItem($_item)
	{
		return ($this->item = $_item);
	}
	/**
	 * Get item
	 * @return AmazonEc2TypeInstanceBlockDeviceMappingResponseItemType
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