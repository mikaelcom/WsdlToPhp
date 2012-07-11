<?php
/**
 * Class file for XiCurrenciesTypeGetRealTimeCrossRateTableWithBidAskResponse
 * @date 08/07/2012
 */
/**
 * Class XiCurrenciesTypeGetRealTimeCrossRateTableWithBidAskResponse
 * @date 08/07/2012
 */
class XiCurrenciesTypeGetRealTimeCrossRateTableWithBidAskResponse extends XiCurrenciesWsdlClass
{
	/**
	 * The GetRealTimeCrossRateTableWithBidAskResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiCurrenciesTypeCrossRateTableWithBidAsk
	 */
	public $GetRealTimeCrossRateTableWithBidAskResult;
	/**
	 * Constructor
	 * @param XiCurrenciesTypeCrossRateTableWithBidAsk GetRealTimeCrossRateTableWithBidAskResult
	 * @return XiCurrenciesTypeGetRealTimeCrossRateTableWithBidAskResponse
	 */
	public function __construct($_GetRealTimeCrossRateTableWithBidAskResult = null)
	{
		parent::__construct(array('GetRealTimeCrossRateTableWithBidAskResult'=>$_GetRealTimeCrossRateTableWithBidAskResult));
	}
	/**
	 * Set GetRealTimeCrossRateTableWithBidAskResult
	 * @param CrossRateTableWithBidAsk GetRealTimeCrossRateTableWithBidAskResult
	 * @return CrossRateTableWithBidAsk
	 */
	public function setGetRealTimeCrossRateTableWithBidAskResult($_GetRealTimeCrossRateTableWithBidAskResult)
	{
		return ($this->GetRealTimeCrossRateTableWithBidAskResult = $_GetRealTimeCrossRateTableWithBidAskResult);
	}
	/**
	 * Get GetRealTimeCrossRateTableWithBidAskResult
	 * @return XiCurrenciesTypeCrossRateTableWithBidAsk
	 */
	public function getGetRealTimeCrossRateTableWithBidAskResult()
	{
		return $this->GetRealTimeCrossRateTableWithBidAskResult;
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