<?php
/**
 * Class file for XiCurrenciesTypeGetRawCrossRateResponse
 * @date 08/07/2012
 */
/**
 * Class XiCurrenciesTypeGetRawCrossRateResponse
 * @date 08/07/2012
 */
class XiCurrenciesTypeGetRawCrossRateResponse extends XiCurrenciesWsdlClass
{
	/**
	 * The GetRawCrossRateResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiCurrenciesTypeCrossRate
	 */
	public $GetRawCrossRateResult;
	/**
	 * Constructor
	 * @param XiCurrenciesTypeCrossRate GetRawCrossRateResult
	 * @return XiCurrenciesTypeGetRawCrossRateResponse
	 */
	public function __construct($_GetRawCrossRateResult = null)
	{
		parent::__construct(array('GetRawCrossRateResult'=>$_GetRawCrossRateResult));
	}
	/**
	 * Set GetRawCrossRateResult
	 * @param CrossRate GetRawCrossRateResult
	 * @return CrossRate
	 */
	public function setGetRawCrossRateResult($_GetRawCrossRateResult)
	{
		return ($this->GetRawCrossRateResult = $_GetRawCrossRateResult);
	}
	/**
	 * Get GetRawCrossRateResult
	 * @return XiCurrenciesTypeCrossRate
	 */
	public function getGetRawCrossRateResult()
	{
		return $this->GetRawCrossRateResult;
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