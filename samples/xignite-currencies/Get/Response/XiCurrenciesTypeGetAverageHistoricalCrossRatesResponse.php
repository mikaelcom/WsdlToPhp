<?php
/**
 * Class file for XiCurrenciesTypeGetAverageHistoricalCrossRatesResponse
 * @date 08/07/2012
 */
/**
 * Class XiCurrenciesTypeGetAverageHistoricalCrossRatesResponse
 * @date 08/07/2012
 */
class XiCurrenciesTypeGetAverageHistoricalCrossRatesResponse extends XiCurrenciesWsdlClass
{
	/**
	 * The GetAverageHistoricalCrossRatesResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiCurrenciesTypeArrayOfAverageHistoricalCrossRate
	 */
	public $GetAverageHistoricalCrossRatesResult;
	/**
	 * Constructor
	 * @param XiCurrenciesTypeArrayOfAverageHistoricalCrossRate GetAverageHistoricalCrossRatesResult
	 * @return XiCurrenciesTypeGetAverageHistoricalCrossRatesResponse
	 */
	public function __construct($_GetAverageHistoricalCrossRatesResult = null)
	{
		parent::__construct(array('GetAverageHistoricalCrossRatesResult'=>new XiCurrenciesTypeArrayOfAverageHistoricalCrossRate($_GetAverageHistoricalCrossRatesResult)));
	}
	/**
	 * Set GetAverageHistoricalCrossRatesResult
	 * @param ArrayOfAverageHistoricalCrossRate GetAverageHistoricalCrossRatesResult
	 * @return ArrayOfAverageHistoricalCrossRate
	 */
	public function setGetAverageHistoricalCrossRatesResult($_GetAverageHistoricalCrossRatesResult)
	{
		return ($this->GetAverageHistoricalCrossRatesResult = $_GetAverageHistoricalCrossRatesResult);
	}
	/**
	 * Get GetAverageHistoricalCrossRatesResult
	 * @return XiCurrenciesTypeArrayOfAverageHistoricalCrossRate
	 */
	public function getGetAverageHistoricalCrossRatesResult()
	{
		return $this->GetAverageHistoricalCrossRatesResult;
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