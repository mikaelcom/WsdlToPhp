<?php
/**
 * Class file for XiCurrenciesTypeGetCrossRateChangeResponse
 * @date 08/07/2012
 */
/**
 * Class XiCurrenciesTypeGetCrossRateChangeResponse
 * @date 08/07/2012
 */
class XiCurrenciesTypeGetCrossRateChangeResponse extends XiCurrenciesWsdlClass
{
	/**
	 * The GetCrossRateChangeResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiCurrenciesTypeCrossRateChange
	 */
	public $GetCrossRateChangeResult;
	/**
	 * Constructor
	 * @param XiCurrenciesTypeCrossRateChange GetCrossRateChangeResult
	 * @return XiCurrenciesTypeGetCrossRateChangeResponse
	 */
	public function __construct($_GetCrossRateChangeResult = null)
	{
		parent::__construct(array('GetCrossRateChangeResult'=>$_GetCrossRateChangeResult));
	}
	/**
	 * Set GetCrossRateChangeResult
	 * @param CrossRateChange GetCrossRateChangeResult
	 * @return CrossRateChange
	 */
	public function setGetCrossRateChangeResult($_GetCrossRateChangeResult)
	{
		return ($this->GetCrossRateChangeResult = $_GetCrossRateChangeResult);
	}
	/**
	 * Get GetCrossRateChangeResult
	 * @return XiCurrenciesTypeCrossRateChange
	 */
	public function getGetCrossRateChangeResult()
	{
		return $this->GetCrossRateChangeResult;
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