<?php
/**
 * Class file for XiFuturesTypeGetHistoricalFutureChartBinaryResponse
 * @date 08/07/2012
 */
/**
 * Class XiFuturesTypeGetHistoricalFutureChartBinaryResponse
 * @date 08/07/2012
 */
class XiFuturesTypeGetHistoricalFutureChartBinaryResponse extends XiFuturesWsdlClass
{
	/**
	 * The GetHistoricalFutureChartBinaryResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiFuturesTypeChartBinary
	 */
	public $GetHistoricalFutureChartBinaryResult;
	/**
	 * Constructor
	 * @param XiFuturesTypeChartBinary GetHistoricalFutureChartBinaryResult
	 * @return XiFuturesTypeGetHistoricalFutureChartBinaryResponse
	 */
	public function __construct($_GetHistoricalFutureChartBinaryResult = null)
	{
		parent::__construct(array('GetHistoricalFutureChartBinaryResult'=>$_GetHistoricalFutureChartBinaryResult));
	}
	/**
	 * Set GetHistoricalFutureChartBinaryResult
	 * @param ChartBinary GetHistoricalFutureChartBinaryResult
	 * @return ChartBinary
	 */
	public function setGetHistoricalFutureChartBinaryResult($_GetHistoricalFutureChartBinaryResult)
	{
		return ($this->GetHistoricalFutureChartBinaryResult = $_GetHistoricalFutureChartBinaryResult);
	}
	/**
	 * Get GetHistoricalFutureChartBinaryResult
	 * @return XiFuturesTypeChartBinary
	 */
	public function getGetHistoricalFutureChartBinaryResult()
	{
		return $this->GetHistoricalFutureChartBinaryResult;
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