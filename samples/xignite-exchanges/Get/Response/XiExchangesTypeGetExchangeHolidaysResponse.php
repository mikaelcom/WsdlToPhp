<?php
/**
 * Class file for XiExchangesTypeGetExchangeHolidaysResponse
 * @date 08/07/2012
 */
/**
 * Class XiExchangesTypeGetExchangeHolidaysResponse
 * @date 08/07/2012
 */
class XiExchangesTypeGetExchangeHolidaysResponse extends XiExchangesWsdlClass
{
	/**
	 * The GetExchangeHolidaysResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiExchangesTypeArrayOfExchangeHoliday
	 */
	public $GetExchangeHolidaysResult;
	/**
	 * Constructor
	 * @param XiExchangesTypeArrayOfExchangeHoliday GetExchangeHolidaysResult
	 * @return XiExchangesTypeGetExchangeHolidaysResponse
	 */
	public function __construct($_GetExchangeHolidaysResult = null)
	{
		parent::__construct(array('GetExchangeHolidaysResult'=>new XiExchangesTypeArrayOfExchangeHoliday($_GetExchangeHolidaysResult)));
	}
	/**
	 * Set GetExchangeHolidaysResult
	 * @param ArrayOfExchangeHoliday GetExchangeHolidaysResult
	 * @return ArrayOfExchangeHoliday
	 */
	public function setGetExchangeHolidaysResult($_GetExchangeHolidaysResult)
	{
		return ($this->GetExchangeHolidaysResult = $_GetExchangeHolidaysResult);
	}
	/**
	 * Get GetExchangeHolidaysResult
	 * @return XiExchangesTypeArrayOfExchangeHoliday
	 */
	public function getGetExchangeHolidaysResult()
	{
		return $this->GetExchangeHolidaysResult;
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