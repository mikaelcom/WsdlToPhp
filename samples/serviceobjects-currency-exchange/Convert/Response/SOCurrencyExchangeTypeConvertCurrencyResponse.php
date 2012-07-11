<?php
/**
 * Class file for SOCurrencyExchangeTypeConvertCurrencyResponse
 * @date 08/07/2012
 */
/**
 * Class SOCurrencyExchangeTypeConvertCurrencyResponse
 * @date 08/07/2012
 */
class SOCurrencyExchangeTypeConvertCurrencyResponse extends SOCurrencyExchangeWsdlClass
{
	/**
	 * The ConvertCurrencyResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var SOCurrencyExchangeTypeCurrencyConversionResponse
	 */
	public $ConvertCurrencyResult;
	/**
	 * Constructor
	 * @param SOCurrencyExchangeTypeCurrencyConversionResponse ConvertCurrencyResult
	 * @return SOCurrencyExchangeTypeConvertCurrencyResponse
	 */
	public function __construct($_ConvertCurrencyResult = null)
	{
		parent::__construct(array('ConvertCurrencyResult'=>$_ConvertCurrencyResult));
	}
	/**
	 * Set ConvertCurrencyResult
	 * @param CurrencyConversionResponse ConvertCurrencyResult
	 * @return CurrencyConversionResponse
	 */
	public function setConvertCurrencyResult($_ConvertCurrencyResult)
	{
		return ($this->ConvertCurrencyResult = $_ConvertCurrencyResult);
	}
	/**
	 * Get ConvertCurrencyResult
	 * @return SOCurrencyExchangeTypeCurrencyConversionResponse
	 */
	public function getConvertCurrencyResult()
	{
		return $this->ConvertCurrencyResult;
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