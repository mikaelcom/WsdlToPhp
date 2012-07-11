<?php
/**
 * Class file for XiCurrenciesTypeGetCurrencyChartBinaryResponse
 * @date 08/07/2012
 */
/**
 * Class XiCurrenciesTypeGetCurrencyChartBinaryResponse
 * @date 08/07/2012
 */
class XiCurrenciesTypeGetCurrencyChartBinaryResponse extends XiCurrenciesWsdlClass
{
	/**
	 * The GetCurrencyChartBinaryResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiCurrenciesTypeChartBinary
	 */
	public $GetCurrencyChartBinaryResult;
	/**
	 * Constructor
	 * @param XiCurrenciesTypeChartBinary GetCurrencyChartBinaryResult
	 * @return XiCurrenciesTypeGetCurrencyChartBinaryResponse
	 */
	public function __construct($_GetCurrencyChartBinaryResult = null)
	{
		parent::__construct(array('GetCurrencyChartBinaryResult'=>$_GetCurrencyChartBinaryResult));
	}
	/**
	 * Set GetCurrencyChartBinaryResult
	 * @param ChartBinary GetCurrencyChartBinaryResult
	 * @return ChartBinary
	 */
	public function setGetCurrencyChartBinaryResult($_GetCurrencyChartBinaryResult)
	{
		return ($this->GetCurrencyChartBinaryResult = $_GetCurrencyChartBinaryResult);
	}
	/**
	 * Get GetCurrencyChartBinaryResult
	 * @return XiCurrenciesTypeChartBinary
	 */
	public function getGetCurrencyChartBinaryResult()
	{
		return $this->GetCurrencyChartBinaryResult;
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