<?php
/**
 * Class file for XiCurrenciesTypeGetRealTimeCrossRateAsStringResponse
 * @date 08/07/2012
 */
/**
 * Class XiCurrenciesTypeGetRealTimeCrossRateAsStringResponse
 * @date 08/07/2012
 */
class XiCurrenciesTypeGetRealTimeCrossRateAsStringResponse extends XiCurrenciesWsdlClass
{
	/**
	 * The GetRealTimeCrossRateAsStringResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiCurrenciesTypeCrossRate
	 */
	public $GetRealTimeCrossRateAsStringResult;
	/**
	 * Constructor
	 * @param XiCurrenciesTypeCrossRate GetRealTimeCrossRateAsStringResult
	 * @return XiCurrenciesTypeGetRealTimeCrossRateAsStringResponse
	 */
	public function __construct($_GetRealTimeCrossRateAsStringResult = null)
	{
		parent::__construct(array('GetRealTimeCrossRateAsStringResult'=>$_GetRealTimeCrossRateAsStringResult));
	}
	/**
	 * Set GetRealTimeCrossRateAsStringResult
	 * @param CrossRate GetRealTimeCrossRateAsStringResult
	 * @return CrossRate
	 */
	public function setGetRealTimeCrossRateAsStringResult($_GetRealTimeCrossRateAsStringResult)
	{
		return ($this->GetRealTimeCrossRateAsStringResult = $_GetRealTimeCrossRateAsStringResult);
	}
	/**
	 * Get GetRealTimeCrossRateAsStringResult
	 * @return XiCurrenciesTypeCrossRate
	 */
	public function getGetRealTimeCrossRateAsStringResult()
	{
		return $this->GetRealTimeCrossRateAsStringResult;
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