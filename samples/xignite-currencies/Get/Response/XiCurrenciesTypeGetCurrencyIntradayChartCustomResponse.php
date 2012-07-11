<?php
/**
 * Class file for XiCurrenciesTypeGetCurrencyIntradayChartCustomResponse
 * @date 08/07/2012
 */
/**
 * Class XiCurrenciesTypeGetCurrencyIntradayChartCustomResponse
 * @date 08/07/2012
 */
class XiCurrenciesTypeGetCurrencyIntradayChartCustomResponse extends XiCurrenciesWsdlClass
{
	/**
	 * The GetCurrencyIntradayChartCustomResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiCurrenciesTypeCurrencyChartIntraday
	 */
	public $GetCurrencyIntradayChartCustomResult;
	/**
	 * Constructor
	 * @param XiCurrenciesTypeCurrencyChartIntraday GetCurrencyIntradayChartCustomResult
	 * @return XiCurrenciesTypeGetCurrencyIntradayChartCustomResponse
	 */
	public function __construct($_GetCurrencyIntradayChartCustomResult = null)
	{
		parent::__construct(array('GetCurrencyIntradayChartCustomResult'=>$_GetCurrencyIntradayChartCustomResult));
	}
	/**
	 * Set GetCurrencyIntradayChartCustomResult
	 * @param CurrencyChartIntraday GetCurrencyIntradayChartCustomResult
	 * @return CurrencyChartIntraday
	 */
	public function setGetCurrencyIntradayChartCustomResult($_GetCurrencyIntradayChartCustomResult)
	{
		return ($this->GetCurrencyIntradayChartCustomResult = $_GetCurrencyIntradayChartCustomResult);
	}
	/**
	 * Get GetCurrencyIntradayChartCustomResult
	 * @return XiCurrenciesTypeCurrencyChartIntraday
	 */
	public function getGetCurrencyIntradayChartCustomResult()
	{
		return $this->GetCurrencyIntradayChartCustomResult;
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