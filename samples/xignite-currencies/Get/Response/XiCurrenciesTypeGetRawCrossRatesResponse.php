<?php
/**
 * Class file for XiCurrenciesTypeGetRawCrossRatesResponse
 * @date 08/07/2012
 */
/**
 * Class XiCurrenciesTypeGetRawCrossRatesResponse
 * @date 08/07/2012
 */
class XiCurrenciesTypeGetRawCrossRatesResponse extends XiCurrenciesWsdlClass
{
	/**
	 * The GetRawCrossRatesResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiCurrenciesTypeArrayOfCrossRate
	 */
	public $GetRawCrossRatesResult;
	/**
	 * Constructor
	 * @param XiCurrenciesTypeArrayOfCrossRate GetRawCrossRatesResult
	 * @return XiCurrenciesTypeGetRawCrossRatesResponse
	 */
	public function __construct($_GetRawCrossRatesResult = null)
	{
		parent::__construct(array('GetRawCrossRatesResult'=>new XiCurrenciesTypeArrayOfCrossRate($_GetRawCrossRatesResult)));
	}
	/**
	 * Set GetRawCrossRatesResult
	 * @param ArrayOfCrossRate GetRawCrossRatesResult
	 * @return ArrayOfCrossRate
	 */
	public function setGetRawCrossRatesResult($_GetRawCrossRatesResult)
	{
		return ($this->GetRawCrossRatesResult = $_GetRawCrossRatesResult);
	}
	/**
	 * Get GetRawCrossRatesResult
	 * @return XiCurrenciesTypeArrayOfCrossRate
	 */
	public function getGetRawCrossRatesResult()
	{
		return $this->GetRawCrossRatesResult;
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