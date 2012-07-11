<?php
/**
 * Class file for XiExchangesTypeGetExchangeHoursResponse
 * @date 08/07/2012
 */
/**
 * Class XiExchangesTypeGetExchangeHoursResponse
 * @date 08/07/2012
 */
class XiExchangesTypeGetExchangeHoursResponse extends XiExchangesWsdlClass
{
	/**
	 * The GetExchangeHoursResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiExchangesTypeExchangeHours
	 */
	public $GetExchangeHoursResult;
	/**
	 * Constructor
	 * @param XiExchangesTypeExchangeHours GetExchangeHoursResult
	 * @return XiExchangesTypeGetExchangeHoursResponse
	 */
	public function __construct($_GetExchangeHoursResult = null)
	{
		parent::__construct(array('GetExchangeHoursResult'=>$_GetExchangeHoursResult));
	}
	/**
	 * Set GetExchangeHoursResult
	 * @param ExchangeHours GetExchangeHoursResult
	 * @return ExchangeHours
	 */
	public function setGetExchangeHoursResult($_GetExchangeHoursResult)
	{
		return ($this->GetExchangeHoursResult = $_GetExchangeHoursResult);
	}
	/**
	 * Get GetExchangeHoursResult
	 * @return XiExchangesTypeExchangeHours
	 */
	public function getGetExchangeHoursResult()
	{
		return $this->GetExchangeHoursResult;
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