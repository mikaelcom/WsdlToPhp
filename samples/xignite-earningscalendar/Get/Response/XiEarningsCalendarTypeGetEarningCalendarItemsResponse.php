<?php
/**
 * Class file for XiEarningsCalendarTypeGetEarningCalendarItemsResponse
 * @date 08/07/2012
 */
/**
 * Class XiEarningsCalendarTypeGetEarningCalendarItemsResponse
 * @date 08/07/2012
 */
class XiEarningsCalendarTypeGetEarningCalendarItemsResponse extends XiEarningsCalendarWsdlClass
{
	/**
	 * The GetEarningCalendarItemsResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiEarningsCalendarTypeEarningCalendarItems
	 */
	public $GetEarningCalendarItemsResult;
	/**
	 * Constructor
	 * @param XiEarningsCalendarTypeEarningCalendarItems GetEarningCalendarItemsResult
	 * @return XiEarningsCalendarTypeGetEarningCalendarItemsResponse
	 */
	public function __construct($_GetEarningCalendarItemsResult = null)
	{
		parent::__construct(array('GetEarningCalendarItemsResult'=>$_GetEarningCalendarItemsResult));
	}
	/**
	 * Set GetEarningCalendarItemsResult
	 * @param EarningCalendarItems GetEarningCalendarItemsResult
	 * @return EarningCalendarItems
	 */
	public function setGetEarningCalendarItemsResult($_GetEarningCalendarItemsResult)
	{
		return ($this->GetEarningCalendarItemsResult = $_GetEarningCalendarItemsResult);
	}
	/**
	 * Get GetEarningCalendarItemsResult
	 * @return XiEarningsCalendarTypeEarningCalendarItems
	 */
	public function getGetEarningCalendarItemsResult()
	{
		return $this->GetEarningCalendarItemsResult;
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