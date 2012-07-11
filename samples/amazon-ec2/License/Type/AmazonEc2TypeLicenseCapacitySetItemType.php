<?php
/**
 * Class file for AmazonEc2TypeLicenseCapacitySetItemType
 * @date 10/07/2012
 */
/**
 * Class AmazonEc2TypeLicenseCapacitySetItemType
 * @date 10/07/2012
 */
class AmazonEc2TypeLicenseCapacitySetItemType extends AmazonEc2WsdlClass
{
	/**
	 * The capacity
	 * @var int
	 */
	public $capacity;
	/**
	 * The instanceCapacity
	 * @var int
	 */
	public $instanceCapacity;
	/**
	 * The state
	 * @var string
	 */
	public $state;
	/**
	 * The earliestAllowedDeactivationTime
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var dateTime
	 */
	public $earliestAllowedDeactivationTime;
	/**
	 * Constructor
	 * @param int capacity
	 * @param int instanceCapacity
	 * @param string state
	 * @param dateTime earliestAllowedDeactivationTime
	 * @return AmazonEc2TypeLicenseCapacitySetItemType
	 */
	public function __construct($_capacity = null,$_instanceCapacity = null,$_state = null,$_earliestAllowedDeactivationTime = null)
	{
		parent::__construct(array('capacity'=>$_capacity,'instanceCapacity'=>$_instanceCapacity,'state'=>$_state,'earliestAllowedDeactivationTime'=>$_earliestAllowedDeactivationTime));
	}
	/**
	 * Set capacity
	 * @param int capacity
	 * @return int
	 */
	public function setCapacity($_capacity)
	{
		return ($this->capacity = $_capacity);
	}
	/**
	 * Get capacity
	 * @return int
	 */
	public function getCapacity()
	{
		return $this->capacity;
	}
	/**
	 * Set instanceCapacity
	 * @param int instanceCapacity
	 * @return int
	 */
	public function setInstanceCapacity($_instanceCapacity)
	{
		return ($this->instanceCapacity = $_instanceCapacity);
	}
	/**
	 * Get instanceCapacity
	 * @return int
	 */
	public function getInstanceCapacity()
	{
		return $this->instanceCapacity;
	}
	/**
	 * Set state
	 * @param string state
	 * @return string
	 */
	public function setState($_state)
	{
		return ($this->state = $_state);
	}
	/**
	 * Get state
	 * @return string
	 */
	public function getState()
	{
		return $this->state;
	}
	/**
	 * Set earliestAllowedDeactivationTime
	 * @param dateTime earliestAllowedDeactivationTime
	 * @return dateTime
	 */
	public function setEarliestAllowedDeactivationTime($_earliestAllowedDeactivationTime)
	{
		return ($this->earliestAllowedDeactivationTime = $_earliestAllowedDeactivationTime);
	}
	/**
	 * Get earliestAllowedDeactivationTime
	 * @return dateTime
	 */
	public function getEarliestAllowedDeactivationTime()
	{
		return $this->earliestAllowedDeactivationTime;
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