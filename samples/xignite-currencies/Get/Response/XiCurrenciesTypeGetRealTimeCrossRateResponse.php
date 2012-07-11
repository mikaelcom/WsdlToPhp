<?php
/**
 * Class file for XiCurrenciesTypeGetRealTimeCrossRateResponse
 * @date 08/07/2012
 */
/**
 * Class XiCurrenciesTypeGetRealTimeCrossRateResponse
 * @date 08/07/2012
 */
class XiCurrenciesTypeGetRealTimeCrossRateResponse extends XiCurrenciesWsdlClass
{
	/**
	 * The GetRealTimeCrossRateResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiCurrenciesTypeCrossRate
	 */
	public $GetRealTimeCrossRateResult;
	/**
	 * Constructor
	 * @param XiCurrenciesTypeCrossRate GetRealTimeCrossRateResult
	 * @return XiCurrenciesTypeGetRealTimeCrossRateResponse
	 */
	public function __construct($_GetRealTimeCrossRateResult = null)
	{
		parent::__construct(array('GetRealTimeCrossRateResult'=>$_GetRealTimeCrossRateResult));
	}
	/**
	 * Set GetRealTimeCrossRateResult
	 * @param CrossRate GetRealTimeCrossRateResult
	 * @return CrossRate
	 */
	public function setGetRealTimeCrossRateResult($_GetRealTimeCrossRateResult)
	{
		return ($this->GetRealTimeCrossRateResult = $_GetRealTimeCrossRateResult);
	}
	/**
	 * Get GetRealTimeCrossRateResult
	 * @return XiCurrenciesTypeCrossRate
	 */
	public function getGetRealTimeCrossRateResult()
	{
		return $this->GetRealTimeCrossRateResult;
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