<?php
/**
 * Class file for XiCurrenciesTypeGetHistoricalCrossRatesResponse
 * @date 08/07/2012
 */
/**
 * Class XiCurrenciesTypeGetHistoricalCrossRatesResponse
 * @date 08/07/2012
 */
class XiCurrenciesTypeGetHistoricalCrossRatesResponse extends XiCurrenciesWsdlClass
{
	/**
	 * The GetHistoricalCrossRatesResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiCurrenciesTypeArrayOfHistoricalCrossRate
	 */
	public $GetHistoricalCrossRatesResult;
	/**
	 * Constructor
	 * @param XiCurrenciesTypeArrayOfHistoricalCrossRate GetHistoricalCrossRatesResult
	 * @return XiCurrenciesTypeGetHistoricalCrossRatesResponse
	 */
	public function __construct($_GetHistoricalCrossRatesResult = null)
	{
		parent::__construct(array('GetHistoricalCrossRatesResult'=>new XiCurrenciesTypeArrayOfHistoricalCrossRate($_GetHistoricalCrossRatesResult)));
	}
	/**
	 * Set GetHistoricalCrossRatesResult
	 * @param ArrayOfHistoricalCrossRate GetHistoricalCrossRatesResult
	 * @return ArrayOfHistoricalCrossRate
	 */
	public function setGetHistoricalCrossRatesResult($_GetHistoricalCrossRatesResult)
	{
		return ($this->GetHistoricalCrossRatesResult = $_GetHistoricalCrossRatesResult);
	}
	/**
	 * Get GetHistoricalCrossRatesResult
	 * @return XiCurrenciesTypeArrayOfHistoricalCrossRate
	 */
	public function getGetHistoricalCrossRatesResult()
	{
		return $this->GetHistoricalCrossRatesResult;
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