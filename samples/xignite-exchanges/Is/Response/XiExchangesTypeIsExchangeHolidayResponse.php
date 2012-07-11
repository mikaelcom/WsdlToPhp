<?php
/**
 * Class file for XiExchangesTypeIsExchangeHolidayResponse
 * @date 08/07/2012
 */
/**
 * Class XiExchangesTypeIsExchangeHolidayResponse
 * @date 08/07/2012
 */
class XiExchangesTypeIsExchangeHolidayResponse extends XiExchangesWsdlClass
{
	/**
	 * The IsExchangeHolidayResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiExchangesTypeExchangeHoliday
	 */
	public $IsExchangeHolidayResult;
	/**
	 * Constructor
	 * @param XiExchangesTypeExchangeHoliday IsExchangeHolidayResult
	 * @return XiExchangesTypeIsExchangeHolidayResponse
	 */
	public function __construct($_IsExchangeHolidayResult = null)
	{
		parent::__construct(array('IsExchangeHolidayResult'=>$_IsExchangeHolidayResult));
	}
	/**
	 * Set IsExchangeHolidayResult
	 * @param ExchangeHoliday IsExchangeHolidayResult
	 * @return ExchangeHoliday
	 */
	public function setIsExchangeHolidayResult($_IsExchangeHolidayResult)
	{
		return ($this->IsExchangeHolidayResult = $_IsExchangeHolidayResult);
	}
	/**
	 * Get IsExchangeHolidayResult
	 * @return XiExchangesTypeExchangeHoliday
	 */
	public function getIsExchangeHolidayResult()
	{
		return $this->IsExchangeHolidayResult;
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