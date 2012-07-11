<?php
/**
 * Class file for SOCurrencyExchangeTypeGetExchangeRateResponse
 * @date 08/07/2012
 */
/**
 * Class SOCurrencyExchangeTypeGetExchangeRateResponse
 * @date 08/07/2012
 */
class SOCurrencyExchangeTypeGetExchangeRateResponse extends SOCurrencyExchangeWsdlClass
{
	/**
	 * The GetExchangeRateResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var SOCurrencyExchangeTypeExchangeRateResponse
	 */
	public $GetExchangeRateResult;
	/**
	 * Constructor
	 * @param SOCurrencyExchangeTypeExchangeRateResponse GetExchangeRateResult
	 * @return SOCurrencyExchangeTypeGetExchangeRateResponse
	 */
	public function __construct($_GetExchangeRateResult = null)
	{
		parent::__construct(array('GetExchangeRateResult'=>$_GetExchangeRateResult));
	}
	/**
	 * Set GetExchangeRateResult
	 * @param ExchangeRateResponse GetExchangeRateResult
	 * @return ExchangeRateResponse
	 */
	public function setGetExchangeRateResult($_GetExchangeRateResult)
	{
		return ($this->GetExchangeRateResult = $_GetExchangeRateResult);
	}
	/**
	 * Get GetExchangeRateResult
	 * @return SOCurrencyExchangeTypeExchangeRateResponse
	 */
	public function getGetExchangeRateResult()
	{
		return $this->GetExchangeRateResult;
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