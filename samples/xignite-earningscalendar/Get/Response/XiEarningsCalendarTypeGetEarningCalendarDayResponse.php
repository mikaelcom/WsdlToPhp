<?php
/**
 * Class file for XiEarningsCalendarTypeGetEarningCalendarDayResponse
 * @date 08/07/2012
 */
/**
 * Class XiEarningsCalendarTypeGetEarningCalendarDayResponse
 * @date 08/07/2012
 */
class XiEarningsCalendarTypeGetEarningCalendarDayResponse extends XiEarningsCalendarWsdlClass
{
	/**
	 * The GetEarningCalendarDayResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiEarningsCalendarTypeEarningCalendarDay
	 */
	public $GetEarningCalendarDayResult;
	/**
	 * Constructor
	 * @param XiEarningsCalendarTypeEarningCalendarDay GetEarningCalendarDayResult
	 * @return XiEarningsCalendarTypeGetEarningCalendarDayResponse
	 */
	public function __construct($_GetEarningCalendarDayResult = null)
	{
		parent::__construct(array('GetEarningCalendarDayResult'=>$_GetEarningCalendarDayResult));
	}
	/**
	 * Set GetEarningCalendarDayResult
	 * @param EarningCalendarDay GetEarningCalendarDayResult
	 * @return EarningCalendarDay
	 */
	public function setGetEarningCalendarDayResult($_GetEarningCalendarDayResult)
	{
		return ($this->GetEarningCalendarDayResult = $_GetEarningCalendarDayResult);
	}
	/**
	 * Get GetEarningCalendarDayResult
	 * @return XiEarningsCalendarTypeEarningCalendarDay
	 */
	public function getGetEarningCalendarDayResult()
	{
		return $this->GetEarningCalendarDayResult;
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