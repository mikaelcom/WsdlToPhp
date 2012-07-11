<?php
/**
 * Class file for XiCurrenciesTypeGetLatestCrossRateResponse
 * @date 08/07/2012
 */
/**
 * Class XiCurrenciesTypeGetLatestCrossRateResponse
 * @date 08/07/2012
 */
class XiCurrenciesTypeGetLatestCrossRateResponse extends XiCurrenciesWsdlClass
{
	/**
	 * The GetLatestCrossRateResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiCurrenciesTypeCrossRate
	 */
	public $GetLatestCrossRateResult;
	/**
	 * Constructor
	 * @param XiCurrenciesTypeCrossRate GetLatestCrossRateResult
	 * @return XiCurrenciesTypeGetLatestCrossRateResponse
	 */
	public function __construct($_GetLatestCrossRateResult = null)
	{
		parent::__construct(array('GetLatestCrossRateResult'=>$_GetLatestCrossRateResult));
	}
	/**
	 * Set GetLatestCrossRateResult
	 * @param CrossRate GetLatestCrossRateResult
	 * @return CrossRate
	 */
	public function setGetLatestCrossRateResult($_GetLatestCrossRateResult)
	{
		return ($this->GetLatestCrossRateResult = $_GetLatestCrossRateResult);
	}
	/**
	 * Get GetLatestCrossRateResult
	 * @return XiCurrenciesTypeCrossRate
	 */
	public function getGetLatestCrossRateResult()
	{
		return $this->GetLatestCrossRateResult;
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