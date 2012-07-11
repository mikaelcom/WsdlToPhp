<?php
/**
 * Class file for XiCurrenciesTypeGetOfficialCrossRatesResponse
 * @date 08/07/2012
 */
/**
 * Class XiCurrenciesTypeGetOfficialCrossRatesResponse
 * @date 08/07/2012
 */
class XiCurrenciesTypeGetOfficialCrossRatesResponse extends XiCurrenciesWsdlClass
{
	/**
	 * The GetOfficialCrossRatesResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiCurrenciesTypeArrayOfHistoricalCrossRate
	 */
	public $GetOfficialCrossRatesResult;
	/**
	 * Constructor
	 * @param XiCurrenciesTypeArrayOfHistoricalCrossRate GetOfficialCrossRatesResult
	 * @return XiCurrenciesTypeGetOfficialCrossRatesResponse
	 */
	public function __construct($_GetOfficialCrossRatesResult = null)
	{
		parent::__construct(array('GetOfficialCrossRatesResult'=>new XiCurrenciesTypeArrayOfHistoricalCrossRate($_GetOfficialCrossRatesResult)));
	}
	/**
	 * Set GetOfficialCrossRatesResult
	 * @param ArrayOfHistoricalCrossRate GetOfficialCrossRatesResult
	 * @return ArrayOfHistoricalCrossRate
	 */
	public function setGetOfficialCrossRatesResult($_GetOfficialCrossRatesResult)
	{
		return ($this->GetOfficialCrossRatesResult = $_GetOfficialCrossRatesResult);
	}
	/**
	 * Get GetOfficialCrossRatesResult
	 * @return XiCurrenciesTypeArrayOfHistoricalCrossRate
	 */
	public function getGetOfficialCrossRatesResult()
	{
		return $this->GetOfficialCrossRatesResult;
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