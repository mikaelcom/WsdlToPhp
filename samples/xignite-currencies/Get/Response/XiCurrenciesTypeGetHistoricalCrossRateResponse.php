<?php
/**
 * Class file for XiCurrenciesTypeGetHistoricalCrossRateResponse
 * @date 08/07/2012
 */
/**
 * Class XiCurrenciesTypeGetHistoricalCrossRateResponse
 * @date 08/07/2012
 */
class XiCurrenciesTypeGetHistoricalCrossRateResponse extends XiCurrenciesWsdlClass
{
	/**
	 * The GetHistoricalCrossRateResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiCurrenciesTypeHistoricalCrossRate
	 */
	public $GetHistoricalCrossRateResult;
	/**
	 * Constructor
	 * @param XiCurrenciesTypeHistoricalCrossRate GetHistoricalCrossRateResult
	 * @return XiCurrenciesTypeGetHistoricalCrossRateResponse
	 */
	public function __construct($_GetHistoricalCrossRateResult = null)
	{
		parent::__construct(array('GetHistoricalCrossRateResult'=>$_GetHistoricalCrossRateResult));
	}
	/**
	 * Set GetHistoricalCrossRateResult
	 * @param HistoricalCrossRate GetHistoricalCrossRateResult
	 * @return HistoricalCrossRate
	 */
	public function setGetHistoricalCrossRateResult($_GetHistoricalCrossRateResult)
	{
		return ($this->GetHistoricalCrossRateResult = $_GetHistoricalCrossRateResult);
	}
	/**
	 * Get GetHistoricalCrossRateResult
	 * @return XiCurrenciesTypeHistoricalCrossRate
	 */
	public function getGetHistoricalCrossRateResult()
	{
		return $this->GetHistoricalCrossRateResult;
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