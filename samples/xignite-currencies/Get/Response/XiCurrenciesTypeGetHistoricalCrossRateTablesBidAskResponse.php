<?php
/**
 * Class file for XiCurrenciesTypeGetHistoricalCrossRateTablesBidAskResponse
 * @date 08/07/2012
 */
/**
 * Class XiCurrenciesTypeGetHistoricalCrossRateTablesBidAskResponse
 * @date 08/07/2012
 */
class XiCurrenciesTypeGetHistoricalCrossRateTablesBidAskResponse extends XiCurrenciesWsdlClass
{
	/**
	 * The GetHistoricalCrossRateTablesBidAskResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiCurrenciesTypeArrayOfCrossRateTableWithBidAsk
	 */
	public $GetHistoricalCrossRateTablesBidAskResult;
	/**
	 * Constructor
	 * @param XiCurrenciesTypeArrayOfCrossRateTableWithBidAsk GetHistoricalCrossRateTablesBidAskResult
	 * @return XiCurrenciesTypeGetHistoricalCrossRateTablesBidAskResponse
	 */
	public function __construct($_GetHistoricalCrossRateTablesBidAskResult = null)
	{
		parent::__construct(array('GetHistoricalCrossRateTablesBidAskResult'=>new XiCurrenciesTypeArrayOfCrossRateTableWithBidAsk($_GetHistoricalCrossRateTablesBidAskResult)));
	}
	/**
	 * Set GetHistoricalCrossRateTablesBidAskResult
	 * @param ArrayOfCrossRateTableWithBidAsk GetHistoricalCrossRateTablesBidAskResult
	 * @return ArrayOfCrossRateTableWithBidAsk
	 */
	public function setGetHistoricalCrossRateTablesBidAskResult($_GetHistoricalCrossRateTablesBidAskResult)
	{
		return ($this->GetHistoricalCrossRateTablesBidAskResult = $_GetHistoricalCrossRateTablesBidAskResult);
	}
	/**
	 * Get GetHistoricalCrossRateTablesBidAskResult
	 * @return XiCurrenciesTypeArrayOfCrossRateTableWithBidAsk
	 */
	public function getGetHistoricalCrossRateTablesBidAskResult()
	{
		return $this->GetHistoricalCrossRateTablesBidAskResult;
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