<?php
/**
 * Class file for XiEarningsCalendarTypeGetEarningDatesResponse
 * @date 08/07/2012
 */
/**
 * Class XiEarningsCalendarTypeGetEarningDatesResponse
 * @date 08/07/2012
 */
class XiEarningsCalendarTypeGetEarningDatesResponse extends XiEarningsCalendarWsdlClass
{
	/**
	 * The GetEarningDatesResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiEarningsCalendarTypeEarningDates
	 */
	public $GetEarningDatesResult;
	/**
	 * Constructor
	 * @param XiEarningsCalendarTypeEarningDates GetEarningDatesResult
	 * @return XiEarningsCalendarTypeGetEarningDatesResponse
	 */
	public function __construct($_GetEarningDatesResult = null)
	{
		parent::__construct(array('GetEarningDatesResult'=>$_GetEarningDatesResult));
	}
	/**
	 * Set GetEarningDatesResult
	 * @param EarningDates GetEarningDatesResult
	 * @return EarningDates
	 */
	public function setGetEarningDatesResult($_GetEarningDatesResult)
	{
		return ($this->GetEarningDatesResult = $_GetEarningDatesResult);
	}
	/**
	 * Get GetEarningDatesResult
	 * @return XiEarningsCalendarTypeEarningDates
	 */
	public function getGetEarningDatesResult()
	{
		return $this->GetEarningDatesResult;
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