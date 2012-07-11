<?php
/**
 * Class file for XiCurrenciesTypeGetHistoricalCrossRateTableBidAskResponse
 * @date 08/07/2012
 */
/**
 * Class XiCurrenciesTypeGetHistoricalCrossRateTableBidAskResponse
 * @date 08/07/2012
 */
class XiCurrenciesTypeGetHistoricalCrossRateTableBidAskResponse extends XiCurrenciesWsdlClass
{
	/**
	 * The GetHistoricalCrossRateTableBidAskResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiCurrenciesTypeCrossRateTableWithBidAsk
	 */
	public $GetHistoricalCrossRateTableBidAskResult;
	/**
	 * Constructor
	 * @param XiCurrenciesTypeCrossRateTableWithBidAsk GetHistoricalCrossRateTableBidAskResult
	 * @return XiCurrenciesTypeGetHistoricalCrossRateTableBidAskResponse
	 */
	public function __construct($_GetHistoricalCrossRateTableBidAskResult = null)
	{
		parent::__construct(array('GetHistoricalCrossRateTableBidAskResult'=>$_GetHistoricalCrossRateTableBidAskResult));
	}
	/**
	 * Set GetHistoricalCrossRateTableBidAskResult
	 * @param CrossRateTableWithBidAsk GetHistoricalCrossRateTableBidAskResult
	 * @return CrossRateTableWithBidAsk
	 */
	public function setGetHistoricalCrossRateTableBidAskResult($_GetHistoricalCrossRateTableBidAskResult)
	{
		return ($this->GetHistoricalCrossRateTableBidAskResult = $_GetHistoricalCrossRateTableBidAskResult);
	}
	/**
	 * Get GetHistoricalCrossRateTableBidAskResult
	 * @return XiCurrenciesTypeCrossRateTableWithBidAsk
	 */
	public function getGetHistoricalCrossRateTableBidAskResult()
	{
		return $this->GetHistoricalCrossRateTableBidAskResult;
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