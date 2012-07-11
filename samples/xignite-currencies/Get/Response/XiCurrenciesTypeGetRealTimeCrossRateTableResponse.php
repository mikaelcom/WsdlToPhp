<?php
/**
 * Class file for XiCurrenciesTypeGetRealTimeCrossRateTableResponse
 * @date 08/07/2012
 */
/**
 * Class XiCurrenciesTypeGetRealTimeCrossRateTableResponse
 * @date 08/07/2012
 */
class XiCurrenciesTypeGetRealTimeCrossRateTableResponse extends XiCurrenciesWsdlClass
{
	/**
	 * The GetRealTimeCrossRateTableResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiCurrenciesTypeCrossRateTable
	 */
	public $GetRealTimeCrossRateTableResult;
	/**
	 * Constructor
	 * @param XiCurrenciesTypeCrossRateTable GetRealTimeCrossRateTableResult
	 * @return XiCurrenciesTypeGetRealTimeCrossRateTableResponse
	 */
	public function __construct($_GetRealTimeCrossRateTableResult = null)
	{
		parent::__construct(array('GetRealTimeCrossRateTableResult'=>$_GetRealTimeCrossRateTableResult));
	}
	/**
	 * Set GetRealTimeCrossRateTableResult
	 * @param CrossRateTable GetRealTimeCrossRateTableResult
	 * @return CrossRateTable
	 */
	public function setGetRealTimeCrossRateTableResult($_GetRealTimeCrossRateTableResult)
	{
		return ($this->GetRealTimeCrossRateTableResult = $_GetRealTimeCrossRateTableResult);
	}
	/**
	 * Get GetRealTimeCrossRateTableResult
	 * @return XiCurrenciesTypeCrossRateTable
	 */
	public function getGetRealTimeCrossRateTableResult()
	{
		return $this->GetRealTimeCrossRateTableResult;
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