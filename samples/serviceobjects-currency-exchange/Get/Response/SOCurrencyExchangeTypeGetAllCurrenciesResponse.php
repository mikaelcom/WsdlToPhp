<?php
/**
 * Class file for SOCurrencyExchangeTypeGetAllCurrenciesResponse
 * @date 08/07/2012
 */
/**
 * Class SOCurrencyExchangeTypeGetAllCurrenciesResponse
 * @date 08/07/2012
 */
class SOCurrencyExchangeTypeGetAllCurrenciesResponse extends SOCurrencyExchangeWsdlClass
{
	/**
	 * The GetAllCurrenciesResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var SOCurrencyExchangeTypeArrayOfCurrencyNameResponse
	 */
	public $GetAllCurrenciesResult;
	/**
	 * Constructor
	 * @param SOCurrencyExchangeTypeArrayOfCurrencyNameResponse GetAllCurrenciesResult
	 * @return SOCurrencyExchangeTypeGetAllCurrenciesResponse
	 */
	public function __construct($_GetAllCurrenciesResult = null)
	{
		parent::__construct(array('GetAllCurrenciesResult'=>new SOCurrencyExchangeTypeArrayOfCurrencyNameResponse($_GetAllCurrenciesResult)));
	}
	/**
	 * Set GetAllCurrenciesResult
	 * @param ArrayOfCurrencyNameResponse GetAllCurrenciesResult
	 * @return ArrayOfCurrencyNameResponse
	 */
	public function setGetAllCurrenciesResult($_GetAllCurrenciesResult)
	{
		return ($this->GetAllCurrenciesResult = $_GetAllCurrenciesResult);
	}
	/**
	 * Get GetAllCurrenciesResult
	 * @return SOCurrencyExchangeTypeArrayOfCurrencyNameResponse
	 */
	public function getGetAllCurrenciesResult()
	{
		return $this->GetAllCurrenciesResult;
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