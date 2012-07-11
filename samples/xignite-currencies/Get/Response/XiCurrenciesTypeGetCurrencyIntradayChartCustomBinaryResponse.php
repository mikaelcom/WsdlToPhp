<?php
/**
 * Class file for XiCurrenciesTypeGetCurrencyIntradayChartCustomBinaryResponse
 * @date 08/07/2012
 */
/**
 * Class XiCurrenciesTypeGetCurrencyIntradayChartCustomBinaryResponse
 * @date 08/07/2012
 */
class XiCurrenciesTypeGetCurrencyIntradayChartCustomBinaryResponse extends XiCurrenciesWsdlClass
{
	/**
	 * The GetCurrencyIntradayChartCustomBinaryResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiCurrenciesTypeChartBinary
	 */
	public $GetCurrencyIntradayChartCustomBinaryResult;
	/**
	 * Constructor
	 * @param XiCurrenciesTypeChartBinary GetCurrencyIntradayChartCustomBinaryResult
	 * @return XiCurrenciesTypeGetCurrencyIntradayChartCustomBinaryResponse
	 */
	public function __construct($_GetCurrencyIntradayChartCustomBinaryResult = null)
	{
		parent::__construct(array('GetCurrencyIntradayChartCustomBinaryResult'=>$_GetCurrencyIntradayChartCustomBinaryResult));
	}
	/**
	 * Set GetCurrencyIntradayChartCustomBinaryResult
	 * @param ChartBinary GetCurrencyIntradayChartCustomBinaryResult
	 * @return ChartBinary
	 */
	public function setGetCurrencyIntradayChartCustomBinaryResult($_GetCurrencyIntradayChartCustomBinaryResult)
	{
		return ($this->GetCurrencyIntradayChartCustomBinaryResult = $_GetCurrencyIntradayChartCustomBinaryResult);
	}
	/**
	 * Get GetCurrencyIntradayChartCustomBinaryResult
	 * @return XiCurrenciesTypeChartBinary
	 */
	public function getGetCurrencyIntradayChartCustomBinaryResult()
	{
		return $this->GetCurrencyIntradayChartCustomBinaryResult;
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