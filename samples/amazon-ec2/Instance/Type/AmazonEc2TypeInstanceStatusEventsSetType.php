<?php
/**
 * Class file for AmazonEc2TypeInstanceStatusEventsSetType
 * @date 10/07/2012
 */
/**
 * Class AmazonEc2TypeInstanceStatusEventsSetType
 * @date 10/07/2012
 */
class AmazonEc2TypeInstanceStatusEventsSetType extends AmazonEc2WsdlClass
{
	/**
	 * The item
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * @var AmazonEc2TypeInstanceStatusEventType
	 */
	public $item;
	/**
	 * Constructor
	 * @param AmazonEc2TypeInstanceStatusEventType item
	 * @return AmazonEc2TypeInstanceStatusEventsSetType
	 */
	public function __construct($_item = null)
	{
		parent::__construct(array('item'=>$_item));
	}
	/**
	 * Set item
	 * @param InstanceStatusEventType item
	 * @return InstanceStatusEventType
	 */
	public function setItem($_item)
	{
		return ($this->item = $_item);
	}
	/**
	 * Get item
	 * @return AmazonEc2TypeInstanceStatusEventType
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