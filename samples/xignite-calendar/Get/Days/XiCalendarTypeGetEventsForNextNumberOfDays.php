<?php
/**
 * Class file for XiCalendarTypeGetEventsForNextNumberOfDays
 * @date 08/07/2012
 */
/**
 * Class XiCalendarTypeGetEventsForNextNumberOfDays
 * @date 08/07/2012
 */
class XiCalendarTypeGetEventsForNextNumberOfDays extends XiCalendarWsdlClass
{
	/**
	 * The NextNumberOfDays
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var int
	 */
	public $NextNumberOfDays;
	/**
	 * Constructor
	 * @param int NextNumberOfDays
	 * @return XiCalendarTypeGetEventsForNextNumberOfDays
	 */
	public function __construct($_NextNumberOfDays)
	{
		parent::__construct(array('NextNumberOfDays'=>$_NextNumberOfDays));
	}
	/**
	 * Set NextNumberOfDays
	 * @param int NextNumberOfDays
	 * @return int
	 */
	public function setNextNumberOfDays($_NextNumberOfDays)
	{
		return ($this->NextNumberOfDays = $_NextNumberOfDays);
	}
	/**
	 * Get NextNumberOfDays
	 * @return int
	 */
	public function getNextNumberOfDays()
	{
		return $this->NextNumberOfDays;
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