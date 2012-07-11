<?php
/**
 * Class file for XiCurrenciesTypeGetRealTimeForwardRateResponse
 * @date 08/07/2012
 */
/**
 * Class XiCurrenciesTypeGetRealTimeForwardRateResponse
 * @date 08/07/2012
 */
class XiCurrenciesTypeGetRealTimeForwardRateResponse extends XiCurrenciesWsdlClass
{
	/**
	 * The GetRealTimeForwardRateResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiCurrenciesTypeForwardRate
	 */
	public $GetRealTimeForwardRateResult;
	/**
	 * Constructor
	 * @param XiCurrenciesTypeForwardRate GetRealTimeForwardRateResult
	 * @return XiCurrenciesTypeGetRealTimeForwardRateResponse
	 */
	public function __construct($_GetRealTimeForwardRateResult = null)
	{
		parent::__construct(array('GetRealTimeForwardRateResult'=>$_GetRealTimeForwardRateResult));
	}
	/**
	 * Set GetRealTimeForwardRateResult
	 * @param ForwardRate GetRealTimeForwardRateResult
	 * @return ForwardRate
	 */
	public function setGetRealTimeForwardRateResult($_GetRealTimeForwardRateResult)
	{
		return ($this->GetRealTimeForwardRateResult = $_GetRealTimeForwardRateResult);
	}
	/**
	 * Get GetRealTimeForwardRateResult
	 * @return XiCurrenciesTypeForwardRate
	 */
	public function getGetRealTimeForwardRateResult()
	{
		return $this->GetRealTimeForwardRateResult;
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