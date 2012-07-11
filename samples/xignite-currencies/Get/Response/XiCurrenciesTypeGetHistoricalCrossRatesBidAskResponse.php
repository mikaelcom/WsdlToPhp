<?php
/**
 * Class file for XiCurrenciesTypeGetHistoricalCrossRatesBidAskResponse
 * @date 08/07/2012
 */
/**
 * Class XiCurrenciesTypeGetHistoricalCrossRatesBidAskResponse
 * @date 08/07/2012
 */
class XiCurrenciesTypeGetHistoricalCrossRatesBidAskResponse extends XiCurrenciesWsdlClass
{
	/**
	 * The GetHistoricalCrossRatesBidAskResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiCurrenciesTypeArrayOfFullHistoricalCrossRate
	 */
	public $GetHistoricalCrossRatesBidAskResult;
	/**
	 * Constructor
	 * @param XiCurrenciesTypeArrayOfFullHistoricalCrossRate GetHistoricalCrossRatesBidAskResult
	 * @return XiCurrenciesTypeGetHistoricalCrossRatesBidAskResponse
	 */
	public function __construct($_GetHistoricalCrossRatesBidAskResult = null)
	{
		parent::__construct(array('GetHistoricalCrossRatesBidAskResult'=>new XiCurrenciesTypeArrayOfFullHistoricalCrossRate($_GetHistoricalCrossRatesBidAskResult)));
	}
	/**
	 * Set GetHistoricalCrossRatesBidAskResult
	 * @param ArrayOfFullHistoricalCrossRate GetHistoricalCrossRatesBidAskResult
	 * @return ArrayOfFullHistoricalCrossRate
	 */
	public function setGetHistoricalCrossRatesBidAskResult($_GetHistoricalCrossRatesBidAskResult)
	{
		return ($this->GetHistoricalCrossRatesBidAskResult = $_GetHistoricalCrossRatesBidAskResult);
	}
	/**
	 * Get GetHistoricalCrossRatesBidAskResult
	 * @return XiCurrenciesTypeArrayOfFullHistoricalCrossRate
	 */
	public function getGetHistoricalCrossRatesBidAskResult()
	{
		return $this->GetHistoricalCrossRatesBidAskResult;
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