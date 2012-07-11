<?php
/**
 * Class file for AmazonEc2TypeAvailabilityZoneSetType
 * @date 10/07/2012
 */
/**
 * Class AmazonEc2TypeAvailabilityZoneSetType
 * @date 10/07/2012
 */
class AmazonEc2TypeAvailabilityZoneSetType extends AmazonEc2WsdlClass
{
	/**
	 * The item
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * @var AmazonEc2TypeAvailabilityZoneItemType
	 */
	public $item;
	/**
	 * Constructor
	 * @param AmazonEc2TypeAvailabilityZoneItemType item
	 * @return AmazonEc2TypeAvailabilityZoneSetType
	 */
	public function __construct($_item = null)
	{
		parent::__construct(array('item'=>$_item));
	}
	/**
	 * Set item
	 * @param AvailabilityZoneItemType item
	 * @return AvailabilityZoneItemType
	 */
	public function setItem($_item)
	{
		return ($this->item = $_item);
	}
	/**
	 * Get item
	 * @return AmazonEc2TypeAvailabilityZoneItemType
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