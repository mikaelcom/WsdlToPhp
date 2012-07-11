<?php
/**
 * Class file for XiCurrenciesTypeGetHistoricalCrossRateBidAskResponse
 * @date 08/07/2012
 */
/**
 * Class XiCurrenciesTypeGetHistoricalCrossRateBidAskResponse
 * @date 08/07/2012
 */
class XiCurrenciesTypeGetHistoricalCrossRateBidAskResponse extends XiCurrenciesWsdlClass
{
	/**
	 * The GetHistoricalCrossRateBidAskResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiCurrenciesTypeFullHistoricalCrossRate
	 */
	public $GetHistoricalCrossRateBidAskResult;
	/**
	 * Constructor
	 * @param XiCurrenciesTypeFullHistoricalCrossRate GetHistoricalCrossRateBidAskResult
	 * @return XiCurrenciesTypeGetHistoricalCrossRateBidAskResponse
	 */
	public function __construct($_GetHistoricalCrossRateBidAskResult = null)
	{
		parent::__construct(array('GetHistoricalCrossRateBidAskResult'=>$_GetHistoricalCrossRateBidAskResult));
	}
	/**
	 * Set GetHistoricalCrossRateBidAskResult
	 * @param FullHistoricalCrossRate GetHistoricalCrossRateBidAskResult
	 * @return FullHistoricalCrossRate
	 */
	public function setGetHistoricalCrossRateBidAskResult($_GetHistoricalCrossRateBidAskResult)
	{
		return ($this->GetHistoricalCrossRateBidAskResult = $_GetHistoricalCrossRateBidAskResult);
	}
	/**
	 * Get GetHistoricalCrossRateBidAskResult
	 * @return XiCurrenciesTypeFullHistoricalCrossRate
	 */
	public function getGetHistoricalCrossRateBidAskResult()
	{
		return $this->GetHistoricalCrossRateBidAskResult;
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