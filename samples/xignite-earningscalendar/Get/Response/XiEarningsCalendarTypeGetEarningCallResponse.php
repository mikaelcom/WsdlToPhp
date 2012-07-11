<?php
/**
 * Class file for XiEarningsCalendarTypeGetEarningCallResponse
 * @date 08/07/2012
 */
/**
 * Class XiEarningsCalendarTypeGetEarningCallResponse
 * @date 08/07/2012
 */
class XiEarningsCalendarTypeGetEarningCallResponse extends XiEarningsCalendarWsdlClass
{
	/**
	 * The GetEarningCallResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiEarningsCalendarTypeEarningCall
	 */
	public $GetEarningCallResult;
	/**
	 * Constructor
	 * @param XiEarningsCalendarTypeEarningCall GetEarningCallResult
	 * @return XiEarningsCalendarTypeGetEarningCallResponse
	 */
	public function __construct($_GetEarningCallResult = null)
	{
		parent::__construct(array('GetEarningCallResult'=>$_GetEarningCallResult));
	}
	/**
	 * Set GetEarningCallResult
	 * @param EarningCall GetEarningCallResult
	 * @return EarningCall
	 */
	public function setGetEarningCallResult($_GetEarningCallResult)
	{
		return ($this->GetEarningCallResult = $_GetEarningCallResult);
	}
	/**
	 * Get GetEarningCallResult
	 * @return XiEarningsCalendarTypeEarningCall
	 */
	public function getGetEarningCallResult()
	{
		return $this->GetEarningCallResult;
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