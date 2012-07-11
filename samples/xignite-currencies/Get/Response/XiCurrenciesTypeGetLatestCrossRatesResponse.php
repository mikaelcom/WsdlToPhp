<?php
/**
 * Class file for XiCurrenciesTypeGetLatestCrossRatesResponse
 * @date 08/07/2012
 */
/**
 * Class XiCurrenciesTypeGetLatestCrossRatesResponse
 * @date 08/07/2012
 */
class XiCurrenciesTypeGetLatestCrossRatesResponse extends XiCurrenciesWsdlClass
{
	/**
	 * The GetLatestCrossRatesResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiCurrenciesTypeArrayOfCrossRate
	 */
	public $GetLatestCrossRatesResult;
	/**
	 * Constructor
	 * @param XiCurrenciesTypeArrayOfCrossRate GetLatestCrossRatesResult
	 * @return XiCurrenciesTypeGetLatestCrossRatesResponse
	 */
	public function __construct($_GetLatestCrossRatesResult = null)
	{
		parent::__construct(array('GetLatestCrossRatesResult'=>new XiCurrenciesTypeArrayOfCrossRate($_GetLatestCrossRatesResult)));
	}
	/**
	 * Set GetLatestCrossRatesResult
	 * @param ArrayOfCrossRate GetLatestCrossRatesResult
	 * @return ArrayOfCrossRate
	 */
	public function setGetLatestCrossRatesResult($_GetLatestCrossRatesResult)
	{
		return ($this->GetLatestCrossRatesResult = $_GetLatestCrossRatesResult);
	}
	/**
	 * Get GetLatestCrossRatesResult
	 * @return XiCurrenciesTypeArrayOfCrossRate
	 */
	public function getGetLatestCrossRatesResult()
	{
		return $this->GetLatestCrossRatesResult;
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