<?php
/**
 * Class file for PayPalTypeSchedulingInfoType
 * @date 14/07/2012
 */
/**
 * Class PayPalTypeSchedulingInfoType
 * Documentation : Contains information for Scheduling limits for the user. All dtails must be present,unless we will have revise call one day, just in case we might let's make min occur = 0
 * @date 14/07/2012
 */
class PayPalTypeSchedulingInfoType extends PayPalWsdlClass
{
	/**
	 * The MaxScheduledMinutes
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var int
	 */
	public $MaxScheduledMinutes;
	/**
	 * The MinScheduledMinutes
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var int
	 */
	public $MinScheduledMinutes;
	/**
	 * The MaxScheduledItems
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var int
	 */
	public $MaxScheduledItems;
	/**
	 * Constructor
	 * @param int MaxScheduledMinutes
	 * @param int MinScheduledMinutes
	 * @param int MaxScheduledItems
	 * @return PayPalTypeSchedulingInfoType
	 */
	public function __construct($_MaxScheduledMinutes = null,$_MinScheduledMinutes = null,$_MaxScheduledItems = null)
	{
		parent::__construct(array('MaxScheduledMinutes'=>$_MaxScheduledMinutes,'MinScheduledMinutes'=>$_MinScheduledMinutes,'MaxScheduledItems'=>$_MaxScheduledItems));
	}
	/**
	 * Set MaxScheduledMinutes
	 * @param int MaxScheduledMinutes
	 * @return int
	 */
	public function setMaxScheduledMinutes($_MaxScheduledMinutes)
	{
		return ($this->MaxScheduledMinutes = $_MaxScheduledMinutes);
	}
	/**
	 * Get MaxScheduledMinutes
	 * @return int
	 */
	public function getMaxScheduledMinutes()
	{
		return $this->MaxScheduledMinutes;
	}
	/**
	 * Set MinScheduledMinutes
	 * @param int MinScheduledMinutes
	 * @return int
	 */
	public function setMinScheduledMinutes($_MinScheduledMinutes)
	{
		return ($this->MinScheduledMinutes = $_MinScheduledMinutes);
	}
	/**
	 * Get MinScheduledMinutes
	 * @return int
	 */
	public function getMinScheduledMinutes()
	{
		return $this->MinScheduledMinutes;
	}
	/**
	 * Set MaxScheduledItems
	 * @param int MaxScheduledItems
	 * @return int
	 */
	public function setMaxScheduledItems($_MaxScheduledItems)
	{
		return ($this->MaxScheduledItems = $_MaxScheduledItems);
	}
	/**
	 * Get MaxScheduledItems
	 * @return int
	 */
	public function getMaxScheduledItems()
	{
		return $this->MaxScheduledItems;
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