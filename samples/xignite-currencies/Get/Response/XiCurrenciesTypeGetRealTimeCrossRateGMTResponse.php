<?php
/**
 * Class file for XiCurrenciesTypeGetRealTimeCrossRateGMTResponse
 * @date 08/07/2012
 */
/**
 * Class XiCurrenciesTypeGetRealTimeCrossRateGMTResponse
 * @date 08/07/2012
 */
class XiCurrenciesTypeGetRealTimeCrossRateGMTResponse extends XiCurrenciesWsdlClass
{
	/**
	 * The GetRealTimeCrossRateGMTResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiCurrenciesTypeCrossRate
	 */
	public $GetRealTimeCrossRateGMTResult;
	/**
	 * Constructor
	 * @param XiCurrenciesTypeCrossRate GetRealTimeCrossRateGMTResult
	 * @return XiCurrenciesTypeGetRealTimeCrossRateGMTResponse
	 */
	public function __construct($_GetRealTimeCrossRateGMTResult = null)
	{
		parent::__construct(array('GetRealTimeCrossRateGMTResult'=>$_GetRealTimeCrossRateGMTResult));
	}
	/**
	 * Set GetRealTimeCrossRateGMTResult
	 * @param CrossRate GetRealTimeCrossRateGMTResult
	 * @return CrossRate
	 */
	public function setGetRealTimeCrossRateGMTResult($_GetRealTimeCrossRateGMTResult)
	{
		return ($this->GetRealTimeCrossRateGMTResult = $_GetRealTimeCrossRateGMTResult);
	}
	/**
	 * Get GetRealTimeCrossRateGMTResult
	 * @return XiCurrenciesTypeCrossRate
	 */
	public function getGetRealTimeCrossRateGMTResult()
	{
		return $this->GetRealTimeCrossRateGMTResult;
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