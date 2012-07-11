<?php
/**
 * Class file for XiMetalsTypeGetHistoricalSpotPriceRangeInForeignCurrencyResponse
 * @date 08/07/2012
 */
/**
 * Class XiMetalsTypeGetHistoricalSpotPriceRangeInForeignCurrencyResponse
 * @date 08/07/2012
 */
class XiMetalsTypeGetHistoricalSpotPriceRangeInForeignCurrencyResponse extends XiMetalsWsdlClass
{
	/**
	 * The GetHistoricalSpotPriceRangeInForeignCurrencyResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiMetalsTypeHistoricalMetalQuotes
	 */
	public $GetHistoricalSpotPriceRangeInForeignCurrencyResult;
	/**
	 * Constructor
	 * @param XiMetalsTypeHistoricalMetalQuotes GetHistoricalSpotPriceRangeInForeignCurrencyResult
	 * @return XiMetalsTypeGetHistoricalSpotPriceRangeInForeignCurrencyResponse
	 */
	public function __construct($_GetHistoricalSpotPriceRangeInForeignCurrencyResult = null)
	{
		parent::__construct(array('GetHistoricalSpotPriceRangeInForeignCurrencyResult'=>$_GetHistoricalSpotPriceRangeInForeignCurrencyResult));
	}
	/**
	 * Set GetHistoricalSpotPriceRangeInForeignCurrencyResult
	 * @param HistoricalMetalQuotes GetHistoricalSpotPriceRangeInForeignCurrencyResult
	 * @return HistoricalMetalQuotes
	 */
	public function setGetHistoricalSpotPriceRangeInForeignCurrencyResult($_GetHistoricalSpotPriceRangeInForeignCurrencyResult)
	{
		return ($this->GetHistoricalSpotPriceRangeInForeignCurrencyResult = $_GetHistoricalSpotPriceRangeInForeignCurrencyResult);
	}
	/**
	 * Get GetHistoricalSpotPriceRangeInForeignCurrencyResult
	 * @return XiMetalsTypeHistoricalMetalQuotes
	 */
	public function getGetHistoricalSpotPriceRangeInForeignCurrencyResult()
	{
		return $this->GetHistoricalSpotPriceRangeInForeignCurrencyResult;
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