<?php
/**
 * Class file for XiFuturesTypeGetHistoricalFutureChartCustomResponse
 * @date 08/07/2012
 */
/**
 * Class XiFuturesTypeGetHistoricalFutureChartCustomResponse
 * @date 08/07/2012
 */
class XiFuturesTypeGetHistoricalFutureChartCustomResponse extends XiFuturesWsdlClass
{
	/**
	 * The GetHistoricalFutureChartCustomResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiFuturesTypeHistoricalChart
	 */
	public $GetHistoricalFutureChartCustomResult;
	/**
	 * Constructor
	 * @param XiFuturesTypeHistoricalChart GetHistoricalFutureChartCustomResult
	 * @return XiFuturesTypeGetHistoricalFutureChartCustomResponse
	 */
	public function __construct($_GetHistoricalFutureChartCustomResult = null)
	{
		parent::__construct(array('GetHistoricalFutureChartCustomResult'=>$_GetHistoricalFutureChartCustomResult));
	}
	/**
	 * Set GetHistoricalFutureChartCustomResult
	 * @param HistoricalChart GetHistoricalFutureChartCustomResult
	 * @return HistoricalChart
	 */
	public function setGetHistoricalFutureChartCustomResult($_GetHistoricalFutureChartCustomResult)
	{
		return ($this->GetHistoricalFutureChartCustomResult = $_GetHistoricalFutureChartCustomResult);
	}
	/**
	 * Get GetHistoricalFutureChartCustomResult
	 * @return XiFuturesTypeHistoricalChart
	 */
	public function getGetHistoricalFutureChartCustomResult()
	{
		return $this->GetHistoricalFutureChartCustomResult;
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