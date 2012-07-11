<?php
/**
 * Class file for XiCurrenciesTypeGetCurrencyChartCustomResponse
 * @date 08/07/2012
 */
/**
 * Class XiCurrenciesTypeGetCurrencyChartCustomResponse
 * @date 08/07/2012
 */
class XiCurrenciesTypeGetCurrencyChartCustomResponse extends XiCurrenciesWsdlClass
{
	/**
	 * The GetCurrencyChartCustomResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiCurrenciesTypeHistoricalChart
	 */
	public $GetCurrencyChartCustomResult;
	/**
	 * Constructor
	 * @param XiCurrenciesTypeHistoricalChart GetCurrencyChartCustomResult
	 * @return XiCurrenciesTypeGetCurrencyChartCustomResponse
	 */
	public function __construct($_GetCurrencyChartCustomResult = null)
	{
		parent::__construct(array('GetCurrencyChartCustomResult'=>$_GetCurrencyChartCustomResult));
	}
	/**
	 * Set GetCurrencyChartCustomResult
	 * @param HistoricalChart GetCurrencyChartCustomResult
	 * @return HistoricalChart
	 */
	public function setGetCurrencyChartCustomResult($_GetCurrencyChartCustomResult)
	{
		return ($this->GetCurrencyChartCustomResult = $_GetCurrencyChartCustomResult);
	}
	/**
	 * Get GetCurrencyChartCustomResult
	 * @return XiCurrenciesTypeHistoricalChart
	 */
	public function getGetCurrencyChartCustomResult()
	{
		return $this->GetCurrencyChartCustomResult;
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