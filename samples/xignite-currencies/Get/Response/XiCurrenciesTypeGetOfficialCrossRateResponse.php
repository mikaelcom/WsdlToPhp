<?php
/**
 * Class file for XiCurrenciesTypeGetOfficialCrossRateResponse
 * @date 08/07/2012
 */
/**
 * Class XiCurrenciesTypeGetOfficialCrossRateResponse
 * @date 08/07/2012
 */
class XiCurrenciesTypeGetOfficialCrossRateResponse extends XiCurrenciesWsdlClass
{
	/**
	 * The GetOfficialCrossRateResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiCurrenciesTypeHistoricalCrossRate
	 */
	public $GetOfficialCrossRateResult;
	/**
	 * Constructor
	 * @param XiCurrenciesTypeHistoricalCrossRate GetOfficialCrossRateResult
	 * @return XiCurrenciesTypeGetOfficialCrossRateResponse
	 */
	public function __construct($_GetOfficialCrossRateResult = null)
	{
		parent::__construct(array('GetOfficialCrossRateResult'=>$_GetOfficialCrossRateResult));
	}
	/**
	 * Set GetOfficialCrossRateResult
	 * @param HistoricalCrossRate GetOfficialCrossRateResult
	 * @return HistoricalCrossRate
	 */
	public function setGetOfficialCrossRateResult($_GetOfficialCrossRateResult)
	{
		return ($this->GetOfficialCrossRateResult = $_GetOfficialCrossRateResult);
	}
	/**
	 * Get GetOfficialCrossRateResult
	 * @return XiCurrenciesTypeHistoricalCrossRate
	 */
	public function getGetOfficialCrossRateResult()
	{
		return $this->GetOfficialCrossRateResult;
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