<?php
/**
 * Class file for XiEarningsCalendarTypeGetEarningCalendarItemResponse
 * @date 08/07/2012
 */
/**
 * Class XiEarningsCalendarTypeGetEarningCalendarItemResponse
 * @date 08/07/2012
 */
class XiEarningsCalendarTypeGetEarningCalendarItemResponse extends XiEarningsCalendarWsdlClass
{
	/**
	 * The GetEarningCalendarItemResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiEarningsCalendarTypeEarningCalendarItem
	 */
	public $GetEarningCalendarItemResult;
	/**
	 * Constructor
	 * @param XiEarningsCalendarTypeEarningCalendarItem GetEarningCalendarItemResult
	 * @return XiEarningsCalendarTypeGetEarningCalendarItemResponse
	 */
	public function __construct($_GetEarningCalendarItemResult = null)
	{
		parent::__construct(array('GetEarningCalendarItemResult'=>$_GetEarningCalendarItemResult));
	}
	/**
	 * Set GetEarningCalendarItemResult
	 * @param EarningCalendarItem GetEarningCalendarItemResult
	 * @return EarningCalendarItem
	 */
	public function setGetEarningCalendarItemResult($_GetEarningCalendarItemResult)
	{
		return ($this->GetEarningCalendarItemResult = $_GetEarningCalendarItemResult);
	}
	/**
	 * Get GetEarningCalendarItemResult
	 * @return XiEarningsCalendarTypeEarningCalendarItem
	 */
	public function getGetEarningCalendarItemResult()
	{
		return $this->GetEarningCalendarItemResult;
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