<?php
/**
 * Class file for XiCurrenciesTypeGetRealTimeCrossRatesResponse
 * @date 08/07/2012
 */
/**
 * Class XiCurrenciesTypeGetRealTimeCrossRatesResponse
 * @date 08/07/2012
 */
class XiCurrenciesTypeGetRealTimeCrossRatesResponse extends XiCurrenciesWsdlClass
{
	/**
	 * The GetRealTimeCrossRatesResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiCurrenciesTypeArrayOfCrossRate
	 */
	public $GetRealTimeCrossRatesResult;
	/**
	 * Constructor
	 * @param XiCurrenciesTypeArrayOfCrossRate GetRealTimeCrossRatesResult
	 * @return XiCurrenciesTypeGetRealTimeCrossRatesResponse
	 */
	public function __construct($_GetRealTimeCrossRatesResult = null)
	{
		parent::__construct(array('GetRealTimeCrossRatesResult'=>new XiCurrenciesTypeArrayOfCrossRate($_GetRealTimeCrossRatesResult)));
	}
	/**
	 * Set GetRealTimeCrossRatesResult
	 * @param ArrayOfCrossRate GetRealTimeCrossRatesResult
	 * @return ArrayOfCrossRate
	 */
	public function setGetRealTimeCrossRatesResult($_GetRealTimeCrossRatesResult)
	{
		return ($this->GetRealTimeCrossRatesResult = $_GetRealTimeCrossRatesResult);
	}
	/**
	 * Get GetRealTimeCrossRatesResult
	 * @return XiCurrenciesTypeArrayOfCrossRate
	 */
	public function getGetRealTimeCrossRatesResult()
	{
		return $this->GetRealTimeCrossRatesResult;
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