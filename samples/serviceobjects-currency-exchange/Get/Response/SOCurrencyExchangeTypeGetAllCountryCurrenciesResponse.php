<?php
/**
 * Class file for SOCurrencyExchangeTypeGetAllCountryCurrenciesResponse
 * @date 08/07/2012
 */
/**
 * Class SOCurrencyExchangeTypeGetAllCountryCurrenciesResponse
 * @date 08/07/2012
 */
class SOCurrencyExchangeTypeGetAllCountryCurrenciesResponse extends SOCurrencyExchangeWsdlClass
{
	/**
	 * The GetAllCountryCurrenciesResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var SOCurrencyExchangeTypeArrayOfCountryCurrencyResponse
	 */
	public $GetAllCountryCurrenciesResult;
	/**
	 * Constructor
	 * @param SOCurrencyExchangeTypeArrayOfCountryCurrencyResponse GetAllCountryCurrenciesResult
	 * @return SOCurrencyExchangeTypeGetAllCountryCurrenciesResponse
	 */
	public function __construct($_GetAllCountryCurrenciesResult = null)
	{
		parent::__construct(array('GetAllCountryCurrenciesResult'=>new SOCurrencyExchangeTypeArrayOfCountryCurrencyResponse($_GetAllCountryCurrenciesResult)));
	}
	/**
	 * Set GetAllCountryCurrenciesResult
	 * @param ArrayOfCountryCurrencyResponse GetAllCountryCurrenciesResult
	 * @return ArrayOfCountryCurrencyResponse
	 */
	public function setGetAllCountryCurrenciesResult($_GetAllCountryCurrenciesResult)
	{
		return ($this->GetAllCountryCurrenciesResult = $_GetAllCountryCurrenciesResult);
	}
	/**
	 * Get GetAllCountryCurrenciesResult
	 * @return SOCurrencyExchangeTypeArrayOfCountryCurrencyResponse
	 */
	public function getGetAllCountryCurrenciesResult()
	{
		return $this->GetAllCountryCurrenciesResult;
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