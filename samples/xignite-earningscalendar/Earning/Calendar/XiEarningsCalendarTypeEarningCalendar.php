<?php
/**
 * Class file for XiEarningsCalendarTypeEarningCalendar
 * @date 08/07/2012
 */
/**
 * Class XiEarningsCalendarTypeEarningCalendar
 * @date 08/07/2012
 */
class XiEarningsCalendarTypeEarningCalendar extends XiEarningsCalendarTypeCommon
{
	/**
	 * The StartDate
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $StartDate;
	/**
	 * The EndDate
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $EndDate;
	/**
	 * The Count
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var int
	 */
	public $Count;
	/**
	 * The EarningCalendarDays
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiEarningsCalendarTypeArrayOfEarningCalendarDay
	 */
	public $EarningCalendarDays;
	/**
	 * Constructor
	 * @param string StartDate
	 * @param string EndDate
	 * @param int Count
	 * @param XiEarningsCalendarTypeArrayOfEarningCalendarDay EarningCalendarDays
	 * @return XiEarningsCalendarTypeEarningCalendar
	 */
	public function __construct($_StartDate = null,$_EndDate = null,$_Count,$_EarningCalendarDays = null)
	{
		XiEarningsCalendarWsdlClass::__construct(array('StartDate'=>$_StartDate,'EndDate'=>$_EndDate,'Count'=>$_Count,'EarningCalendarDays'=>new XiEarningsCalendarTypeArrayOfEarningCalendarDay($_EarningCalendarDays)));
	}
	/**
	 * Set StartDate
	 * @param string StartDate
	 * @return string
	 */
	public function setStartDate($_StartDate)
	{
		return ($this->StartDate = $_StartDate);
	}
	/**
	 * Get StartDate
	 * @return string
	 */
	public function getStartDate()
	{
		return $this->StartDate;
	}
	/**
	 * Set EndDate
	 * @param string EndDate
	 * @return string
	 */
	public function setEndDate($_EndDate)
	{
		return ($this->EndDate = $_EndDate);
	}
	/**
	 * Get EndDate
	 * @return string
	 */
	public function getEndDate()
	{
		return $this->EndDate;
	}
	/**
	 * Set Count
	 * @param int Count
	 * @return int
	 */
	public function setCount($_Count)
	{
		return ($this->Count = $_Count);
	}
	/**
	 * Get Count
	 * @return int
	 */
	public function getCount()
	{
		return $this->Count;
	}
	/**
	 * Set EarningCalendarDays
	 * @param ArrayOfEarningCalendarDay EarningCalendarDays
	 * @return ArrayOfEarningCalendarDay
	 */
	public function setEarningCalendarDays($_EarningCalendarDays)
	{
		return ($this->EarningCalendarDays = $_EarningCalendarDays);
	}
	/**
	 * Get EarningCalendarDays
	 * @return XiEarningsCalendarTypeArrayOfEarningCalendarDay
	 */
	public function getEarningCalendarDays()
	{
		return $this->EarningCalendarDays;
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