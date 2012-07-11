<?php
/**
 * Class file for XiExchangesTypeGetExchangeHoursUTCResponse
 * @date 08/07/2012
 */
/**
 * Class XiExchangesTypeGetExchangeHoursUTCResponse
 * @date 08/07/2012
 */
class XiExchangesTypeGetExchangeHoursUTCResponse extends XiExchangesWsdlClass
{
	/**
	 * The GetExchangeHoursUTCResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiExchangesTypeExchangeHours
	 */
	public $GetExchangeHoursUTCResult;
	/**
	 * Constructor
	 * @param XiExchangesTypeExchangeHours GetExchangeHoursUTCResult
	 * @return XiExchangesTypeGetExchangeHoursUTCResponse
	 */
	public function __construct($_GetExchangeHoursUTCResult = null)
	{
		parent::__construct(array('GetExchangeHoursUTCResult'=>$_GetExchangeHoursUTCResult));
	}
	/**
	 * Set GetExchangeHoursUTCResult
	 * @param ExchangeHours GetExchangeHoursUTCResult
	 * @return ExchangeHours
	 */
	public function setGetExchangeHoursUTCResult($_GetExchangeHoursUTCResult)
	{
		return ($this->GetExchangeHoursUTCResult = $_GetExchangeHoursUTCResult);
	}
	/**
	 * Get GetExchangeHoursUTCResult
	 * @return XiExchangesTypeExchangeHours
	 */
	public function getGetExchangeHoursUTCResult()
	{
		return $this->GetExchangeHoursUTCResult;
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