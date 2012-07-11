<?php
/**
 * Class file for XiEarningsCalendarTypeGetEarningCalendarRangeResponse
 * @date 08/07/2012
 */
/**
 * Class XiEarningsCalendarTypeGetEarningCalendarRangeResponse
 * @date 08/07/2012
 */
class XiEarningsCalendarTypeGetEarningCalendarRangeResponse extends XiEarningsCalendarWsdlClass
{
	/**
	 * The GetEarningCalendarRangeResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiEarningsCalendarTypeEarningCalendar
	 */
	public $GetEarningCalendarRangeResult;
	/**
	 * Constructor
	 * @param XiEarningsCalendarTypeEarningCalendar GetEarningCalendarRangeResult
	 * @return XiEarningsCalendarTypeGetEarningCalendarRangeResponse
	 */
	public function __construct($_GetEarningCalendarRangeResult = null)
	{
		parent::__construct(array('GetEarningCalendarRangeResult'=>$_GetEarningCalendarRangeResult));
	}
	/**
	 * Set GetEarningCalendarRangeResult
	 * @param EarningCalendar GetEarningCalendarRangeResult
	 * @return EarningCalendar
	 */
	public function setGetEarningCalendarRangeResult($_GetEarningCalendarRangeResult)
	{
		return ($this->GetEarningCalendarRangeResult = $_GetEarningCalendarRangeResult);
	}
	/**
	 * Get GetEarningCalendarRangeResult
	 * @return XiEarningsCalendarTypeEarningCalendar
	 */
	public function getGetEarningCalendarRangeResult()
	{
		return $this->GetEarningCalendarRangeResult;
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