<?php
/**
 * Class file for XiCalendarTypeGetEventsReleasedForRangeLength
 * @date 08/07/2012
 */
/**
 * Class XiCalendarTypeGetEventsReleasedForRangeLength
 * @date 08/07/2012
 */
class XiCalendarTypeGetEventsReleasedForRangeLength extends XiCalendarWsdlClass
{
	/**
	 * The ReleasedForStart
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $ReleasedForStart;
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
	 * @param string ReleasedForStart
	 * @param int NumberOfDays
	 * @return XiCalendarTypeGetEventsReleasedForRangeLength
	 */
	public function __construct($_ReleasedForStart = null,$_NumberOfDays)
	{
		parent::__construct(array('ReleasedForStart'=>$_ReleasedForStart,'NumberOfDays'=>$_NumberOfDays));
	}
	/**
	 * Set ReleasedForStart
	 * @param string ReleasedForStart
	 * @return string
	 */
	public function setReleasedForStart($_ReleasedForStart)
	{
		return ($this->ReleasedForStart = $_ReleasedForStart);
	}
	/**
	 * Get ReleasedForStart
	 * @return string
	 */
	public function getReleasedForStart()
	{
		return $this->ReleasedForStart;
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