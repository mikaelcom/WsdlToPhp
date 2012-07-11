<?php
/**
 * Class file for XiCurrenciesTypeGetCurrencyChartCustomBinaryResponse
 * @date 08/07/2012
 */
/**
 * Class XiCurrenciesTypeGetCurrencyChartCustomBinaryResponse
 * @date 08/07/2012
 */
class XiCurrenciesTypeGetCurrencyChartCustomBinaryResponse extends XiCurrenciesWsdlClass
{
	/**
	 * The GetCurrencyChartCustomBinaryResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiCurrenciesTypeChartBinary
	 */
	public $GetCurrencyChartCustomBinaryResult;
	/**
	 * Constructor
	 * @param XiCurrenciesTypeChartBinary GetCurrencyChartCustomBinaryResult
	 * @return XiCurrenciesTypeGetCurrencyChartCustomBinaryResponse
	 */
	public function __construct($_GetCurrencyChartCustomBinaryResult = null)
	{
		parent::__construct(array('GetCurrencyChartCustomBinaryResult'=>$_GetCurrencyChartCustomBinaryResult));
	}
	/**
	 * Set GetCurrencyChartCustomBinaryResult
	 * @param ChartBinary GetCurrencyChartCustomBinaryResult
	 * @return ChartBinary
	 */
	public function setGetCurrencyChartCustomBinaryResult($_GetCurrencyChartCustomBinaryResult)
	{
		return ($this->GetCurrencyChartCustomBinaryResult = $_GetCurrencyChartCustomBinaryResult);
	}
	/**
	 * Get GetCurrencyChartCustomBinaryResult
	 * @return XiCurrenciesTypeChartBinary
	 */
	public function getGetCurrencyChartCustomBinaryResult()
	{
		return $this->GetCurrencyChartCustomBinaryResult;
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