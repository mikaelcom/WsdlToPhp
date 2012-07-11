<?php
/**
 * Class file for XiCurrenciesTypeGetCurrencyChartResponse
 * @date 08/07/2012
 */
/**
 * Class XiCurrenciesTypeGetCurrencyChartResponse
 * @date 08/07/2012
 */
class XiCurrenciesTypeGetCurrencyChartResponse extends XiCurrenciesWsdlClass
{
	/**
	 * The GetCurrencyChartResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiCurrenciesTypeHistoricalChart
	 */
	public $GetCurrencyChartResult;
	/**
	 * Constructor
	 * @param XiCurrenciesTypeHistoricalChart GetCurrencyChartResult
	 * @return XiCurrenciesTypeGetCurrencyChartResponse
	 */
	public function __construct($_GetCurrencyChartResult = null)
	{
		parent::__construct(array('GetCurrencyChartResult'=>$_GetCurrencyChartResult));
	}
	/**
	 * Set GetCurrencyChartResult
	 * @param HistoricalChart GetCurrencyChartResult
	 * @return HistoricalChart
	 */
	public function setGetCurrencyChartResult($_GetCurrencyChartResult)
	{
		return ($this->GetCurrencyChartResult = $_GetCurrencyChartResult);
	}
	/**
	 * Get GetCurrencyChartResult
	 * @return XiCurrenciesTypeHistoricalChart
	 */
	public function getGetCurrencyChartResult()
	{
		return $this->GetCurrencyChartResult;
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