<?php
/**
 * Class file for XiEarningsCalendarTypeGetEarningCalendarItemsAsStringResponse
 * @date 08/07/2012
 */
/**
 * Class XiEarningsCalendarTypeGetEarningCalendarItemsAsStringResponse
 * @date 08/07/2012
 */
class XiEarningsCalendarTypeGetEarningCalendarItemsAsStringResponse extends XiEarningsCalendarWsdlClass
{
	/**
	 * The GetEarningCalendarItemsAsStringResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiEarningsCalendarTypeEarningCalendarItems
	 */
	public $GetEarningCalendarItemsAsStringResult;
	/**
	 * Constructor
	 * @param XiEarningsCalendarTypeEarningCalendarItems GetEarningCalendarItemsAsStringResult
	 * @return XiEarningsCalendarTypeGetEarningCalendarItemsAsStringResponse
	 */
	public function __construct($_GetEarningCalendarItemsAsStringResult = null)
	{
		parent::__construct(array('GetEarningCalendarItemsAsStringResult'=>$_GetEarningCalendarItemsAsStringResult));
	}
	/**
	 * Set GetEarningCalendarItemsAsStringResult
	 * @param EarningCalendarItems GetEarningCalendarItemsAsStringResult
	 * @return EarningCalendarItems
	 */
	public function setGetEarningCalendarItemsAsStringResult($_GetEarningCalendarItemsAsStringResult)
	{
		return ($this->GetEarningCalendarItemsAsStringResult = $_GetEarningCalendarItemsAsStringResult);
	}
	/**
	 * Get GetEarningCalendarItemsAsStringResult
	 * @return XiEarningsCalendarTypeEarningCalendarItems
	 */
	public function getGetEarningCalendarItemsAsStringResult()
	{
		return $this->GetEarningCalendarItemsAsStringResult;
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