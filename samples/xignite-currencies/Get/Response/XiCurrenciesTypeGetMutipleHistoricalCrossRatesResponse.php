<?php
/**
 * Class file for XiCurrenciesTypeGetMutipleHistoricalCrossRatesResponse
 * @date 08/07/2012
 */
/**
 * Class XiCurrenciesTypeGetMutipleHistoricalCrossRatesResponse
 * @date 08/07/2012
 */
class XiCurrenciesTypeGetMutipleHistoricalCrossRatesResponse extends XiCurrenciesWsdlClass
{
	/**
	 * The GetMutipleHistoricalCrossRatesResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiCurrenciesTypeMultipleHistoricalCrossRates
	 */
	public $GetMutipleHistoricalCrossRatesResult;
	/**
	 * Constructor
	 * @param XiCurrenciesTypeMultipleHistoricalCrossRates GetMutipleHistoricalCrossRatesResult
	 * @return XiCurrenciesTypeGetMutipleHistoricalCrossRatesResponse
	 */
	public function __construct($_GetMutipleHistoricalCrossRatesResult = null)
	{
		parent::__construct(array('GetMutipleHistoricalCrossRatesResult'=>$_GetMutipleHistoricalCrossRatesResult));
	}
	/**
	 * Set GetMutipleHistoricalCrossRatesResult
	 * @param MultipleHistoricalCrossRates GetMutipleHistoricalCrossRatesResult
	 * @return MultipleHistoricalCrossRates
	 */
	public function setGetMutipleHistoricalCrossRatesResult($_GetMutipleHistoricalCrossRatesResult)
	{
		return ($this->GetMutipleHistoricalCrossRatesResult = $_GetMutipleHistoricalCrossRatesResult);
	}
	/**
	 * Get GetMutipleHistoricalCrossRatesResult
	 * @return XiCurrenciesTypeMultipleHistoricalCrossRates
	 */
	public function getGetMutipleHistoricalCrossRatesResult()
	{
		return $this->GetMutipleHistoricalCrossRatesResult;
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