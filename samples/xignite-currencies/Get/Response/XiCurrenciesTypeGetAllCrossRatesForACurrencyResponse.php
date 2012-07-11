<?php
/**
 * Class file for XiCurrenciesTypeGetAllCrossRatesForACurrencyResponse
 * @date 08/07/2012
 */
/**
 * Class XiCurrenciesTypeGetAllCrossRatesForACurrencyResponse
 * @date 08/07/2012
 */
class XiCurrenciesTypeGetAllCrossRatesForACurrencyResponse extends XiCurrenciesWsdlClass
{
	/**
	 * The GetAllCrossRatesForACurrencyResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiCurrenciesTypeCrossRateTableLineWithBidAsk
	 */
	public $GetAllCrossRatesForACurrencyResult;
	/**
	 * Constructor
	 * @param XiCurrenciesTypeCrossRateTableLineWithBidAsk GetAllCrossRatesForACurrencyResult
	 * @return XiCurrenciesTypeGetAllCrossRatesForACurrencyResponse
	 */
	public function __construct($_GetAllCrossRatesForACurrencyResult = null)
	{
		parent::__construct(array('GetAllCrossRatesForACurrencyResult'=>$_GetAllCrossRatesForACurrencyResult));
	}
	/**
	 * Set GetAllCrossRatesForACurrencyResult
	 * @param CrossRateTableLineWithBidAsk GetAllCrossRatesForACurrencyResult
	 * @return CrossRateTableLineWithBidAsk
	 */
	public function setGetAllCrossRatesForACurrencyResult($_GetAllCrossRatesForACurrencyResult)
	{
		return ($this->GetAllCrossRatesForACurrencyResult = $_GetAllCrossRatesForACurrencyResult);
	}
	/**
	 * Get GetAllCrossRatesForACurrencyResult
	 * @return XiCurrenciesTypeCrossRateTableLineWithBidAsk
	 */
	public function getGetAllCrossRatesForACurrencyResult()
	{
		return $this->GetAllCrossRatesForACurrencyResult;
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