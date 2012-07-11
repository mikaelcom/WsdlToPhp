<?php
/**
 * Class file for XiCalendarTypeGetEventsForWeek
 * @date 08/07/2012
 */
/**
 * Class XiCalendarTypeGetEventsForWeek
 * @date 08/07/2012
 */
class XiCalendarTypeGetEventsForWeek extends XiCalendarWsdlClass
{
	/**
	 * The ForDate
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $ForDate;
	/**
	 * Constructor
	 * @param string ForDate
	 * @return XiCalendarTypeGetEventsForWeek
	 */
	public function __construct($_ForDate = null)
	{
		parent::__construct(array('ForDate'=>$_ForDate));
	}
	/**
	 * Set ForDate
	 * @param string ForDate
	 * @return string
	 */
	public function setForDate($_ForDate)
	{
		return ($this->ForDate = $_ForDate);
	}
	/**
	 * Get ForDate
	 * @return string
	 */
	public function getForDate()
	{
		return $this->ForDate;
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