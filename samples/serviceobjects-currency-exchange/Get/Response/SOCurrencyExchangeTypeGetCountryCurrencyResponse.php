<?php
/**
 * Class file for SOCurrencyExchangeTypeGetCountryCurrencyResponse
 * @date 08/07/2012
 */
/**
 * Class SOCurrencyExchangeTypeGetCountryCurrencyResponse
 * @date 08/07/2012
 */
class SOCurrencyExchangeTypeGetCountryCurrencyResponse extends SOCurrencyExchangeWsdlClass
{
	/**
	 * The GetCountryCurrencyResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var SOCurrencyExchangeTypeCountryCurrencyResponse
	 */
	public $GetCountryCurrencyResult;
	/**
	 * Constructor
	 * @param SOCurrencyExchangeTypeCountryCurrencyResponse GetCountryCurrencyResult
	 * @return SOCurrencyExchangeTypeGetCountryCurrencyResponse
	 */
	public function __construct($_GetCountryCurrencyResult = null)
	{
		parent::__construct(array('GetCountryCurrencyResult'=>$_GetCountryCurrencyResult));
	}
	/**
	 * Set GetCountryCurrencyResult
	 * @param CountryCurrencyResponse GetCountryCurrencyResult
	 * @return CountryCurrencyResponse
	 */
	public function setGetCountryCurrencyResult($_GetCountryCurrencyResult)
	{
		return ($this->GetCountryCurrencyResult = $_GetCountryCurrencyResult);
	}
	/**
	 * Get GetCountryCurrencyResult
	 * @return SOCurrencyExchangeTypeCountryCurrencyResponse
	 */
	public function getGetCountryCurrencyResult()
	{
		return $this->GetCountryCurrencyResult;
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