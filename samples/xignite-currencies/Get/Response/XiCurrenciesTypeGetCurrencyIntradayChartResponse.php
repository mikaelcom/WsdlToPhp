<?php
/**
 * Class file for XiCurrenciesTypeGetCurrencyIntradayChartResponse
 * @date 08/07/2012
 */
/**
 * Class XiCurrenciesTypeGetCurrencyIntradayChartResponse
 * @date 08/07/2012
 */
class XiCurrenciesTypeGetCurrencyIntradayChartResponse extends XiCurrenciesWsdlClass
{
	/**
	 * The GetCurrencyIntradayChartResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiCurrenciesTypeCurrencyChartIntraday
	 */
	public $GetCurrencyIntradayChartResult;
	/**
	 * Constructor
	 * @param XiCurrenciesTypeCurrencyChartIntraday GetCurrencyIntradayChartResult
	 * @return XiCurrenciesTypeGetCurrencyIntradayChartResponse
	 */
	public function __construct($_GetCurrencyIntradayChartResult = null)
	{
		parent::__construct(array('GetCurrencyIntradayChartResult'=>$_GetCurrencyIntradayChartResult));
	}
	/**
	 * Set GetCurrencyIntradayChartResult
	 * @param CurrencyChartIntraday GetCurrencyIntradayChartResult
	 * @return CurrencyChartIntraday
	 */
	public function setGetCurrencyIntradayChartResult($_GetCurrencyIntradayChartResult)
	{
		return ($this->GetCurrencyIntradayChartResult = $_GetCurrencyIntradayChartResult);
	}
	/**
	 * Get GetCurrencyIntradayChartResult
	 * @return XiCurrenciesTypeCurrencyChartIntraday
	 */
	public function getGetCurrencyIntradayChartResult()
	{
		return $this->GetCurrencyIntradayChartResult;
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