<?php
/**
 * Class file for AmazonEc2TypeAvailabilityZoneMessageSetType
 * @date 10/07/2012
 */
/**
 * Class AmazonEc2TypeAvailabilityZoneMessageSetType
 * @date 10/07/2012
 */
class AmazonEc2TypeAvailabilityZoneMessageSetType extends AmazonEc2WsdlClass
{
	/**
	 * The item
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * @var AmazonEc2TypeAvailabilityZoneMessageType
	 */
	public $item;
	/**
	 * Constructor
	 * @param AmazonEc2TypeAvailabilityZoneMessageType item
	 * @return AmazonEc2TypeAvailabilityZoneMessageSetType
	 */
	public function __construct($_item = null)
	{
		parent::__construct(array('item'=>$_item));
	}
	/**
	 * Set item
	 * @param AvailabilityZoneMessageType item
	 * @return AvailabilityZoneMessageType
	 */
	public function setItem($_item)
	{
		return ($this->item = $_item);
	}
	/**
	 * Get item
	 * @return AmazonEc2TypeAvailabilityZoneMessageType
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