<?php
/**
 * Class file for XiCurrenciesTypeGetHistoricalCrossRateTableResponse
 * @date 08/07/2012
 */
/**
 * Class XiCurrenciesTypeGetHistoricalCrossRateTableResponse
 * @date 08/07/2012
 */
class XiCurrenciesTypeGetHistoricalCrossRateTableResponse extends XiCurrenciesWsdlClass
{
	/**
	 * The GetHistoricalCrossRateTableResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiCurrenciesTypeCrossRateTable
	 */
	public $GetHistoricalCrossRateTableResult;
	/**
	 * Constructor
	 * @param XiCurrenciesTypeCrossRateTable GetHistoricalCrossRateTableResult
	 * @return XiCurrenciesTypeGetHistoricalCrossRateTableResponse
	 */
	public function __construct($_GetHistoricalCrossRateTableResult = null)
	{
		parent::__construct(array('GetHistoricalCrossRateTableResult'=>$_GetHistoricalCrossRateTableResult));
	}
	/**
	 * Set GetHistoricalCrossRateTableResult
	 * @param CrossRateTable GetHistoricalCrossRateTableResult
	 * @return CrossRateTable
	 */
	public function setGetHistoricalCrossRateTableResult($_GetHistoricalCrossRateTableResult)
	{
		return ($this->GetHistoricalCrossRateTableResult = $_GetHistoricalCrossRateTableResult);
	}
	/**
	 * Get GetHistoricalCrossRateTableResult
	 * @return XiCurrenciesTypeCrossRateTable
	 */
	public function getGetHistoricalCrossRateTableResult()
	{
		return $this->GetHistoricalCrossRateTableResult;
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