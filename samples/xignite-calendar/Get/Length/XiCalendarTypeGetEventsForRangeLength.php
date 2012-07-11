<?php
/**
 * Class file for XiCalendarTypeGetEventsForRangeLength
 * @date 08/07/2012
 */
/**
 * Class XiCalendarTypeGetEventsForRangeLength
 * @date 08/07/2012
 */
class XiCalendarTypeGetEventsForRangeLength extends XiCalendarWsdlClass
{
	/**
	 * The ReleasedOnStart
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $ReleasedOnStart;
	/**
	 * The NumberOfDays
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var int
	 */
	public $NumberOfDays;
	/**
	 * Constructor
	 * @param string ReleasedOnStart
	 * @param int NumberOfDays
	 * @return XiCalendarTypeGetEventsForRangeLength
	 */
	public function __construct($_ReleasedOnStart = null,$_NumberOfDays)
	{
		parent::__construct(array('ReleasedOnStart'=>$_ReleasedOnStart,'NumberOfDays'=>$_NumberOfDays));
	}
	/**
	 * Set ReleasedOnStart
	 * @param string ReleasedOnStart
	 * @return string
	 */
	public function setReleasedOnStart($_ReleasedOnStart)
	{
		return ($this->ReleasedOnStart = $_ReleasedOnStart);
	}
	/**
	 * Get ReleasedOnStart
	 * @return string
	 */
	public function getReleasedOnStart()
	{
		return $this->ReleasedOnStart;
	}
	/**
	 * Set NumberOfDays
	 * @param int NumberOfDays
	 * @return int
	 */
	public function setNumberOfDays($_NumberOfDays)
	{
		return ($this->NumberOfDays = $_NumberOfDays);
	}
	/**
	 * Get NumberOfDays
	 * @return int
	 */
	public function getNumberOfDays()
	{
		return $this->NumberOfDays;
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