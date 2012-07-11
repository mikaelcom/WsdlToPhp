<?php
/**
 * Class file for XiCurrenciesTypeGetHistoricalCrossRateTablesResponse
 * @date 08/07/2012
 */
/**
 * Class XiCurrenciesTypeGetHistoricalCrossRateTablesResponse
 * @date 08/07/2012
 */
class XiCurrenciesTypeGetHistoricalCrossRateTablesResponse extends XiCurrenciesWsdlClass
{
	/**
	 * The GetHistoricalCrossRateTablesResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiCurrenciesTypeArrayOfCrossRateTable
	 */
	public $GetHistoricalCrossRateTablesResult;
	/**
	 * Constructor
	 * @param XiCurrenciesTypeArrayOfCrossRateTable GetHistoricalCrossRateTablesResult
	 * @return XiCurrenciesTypeGetHistoricalCrossRateTablesResponse
	 */
	public function __construct($_GetHistoricalCrossRateTablesResult = null)
	{
		parent::__construct(array('GetHistoricalCrossRateTablesResult'=>new XiCurrenciesTypeArrayOfCrossRateTable($_GetHistoricalCrossRateTablesResult)));
	}
	/**
	 * Set GetHistoricalCrossRateTablesResult
	 * @param ArrayOfCrossRateTable GetHistoricalCrossRateTablesResult
	 * @return ArrayOfCrossRateTable
	 */
	public function setGetHistoricalCrossRateTablesResult($_GetHistoricalCrossRateTablesResult)
	{
		return ($this->GetHistoricalCrossRateTablesResult = $_GetHistoricalCrossRateTablesResult);
	}
	/**
	 * Get GetHistoricalCrossRateTablesResult
	 * @return XiCurrenciesTypeArrayOfCrossRateTable
	 */
	public function getGetHistoricalCrossRateTablesResult()
	{
		return $this->GetHistoricalCrossRateTablesResult;
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