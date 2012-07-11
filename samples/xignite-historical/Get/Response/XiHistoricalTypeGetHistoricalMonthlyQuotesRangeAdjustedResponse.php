<?php
/**
 * Class file for XiHistoricalTypeGetHistoricalMonthlyQuotesRangeAdjustedResponse
 * @date 08/07/2012
 */
/**
 * Class XiHistoricalTypeGetHistoricalMonthlyQuotesRangeAdjustedResponse
 * @date 08/07/2012
 */
class XiHistoricalTypeGetHistoricalMonthlyQuotesRangeAdjustedResponse extends XiHistoricalWsdlClass
{
	/**
	 * The GetHistoricalMonthlyQuotesRangeAdjustedResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiHistoricalTypeHistoricalQuotes
	 */
	public $GetHistoricalMonthlyQuotesRangeAdjustedResult;
	/**
	 * Constructor
	 * @param XiHistoricalTypeHistoricalQuotes GetHistoricalMonthlyQuotesRangeAdjustedResult
	 * @return XiHistoricalTypeGetHistoricalMonthlyQuotesRangeAdjustedResponse
	 */
	public function __construct($_GetHistoricalMonthlyQuotesRangeAdjustedResult = null)
	{
		parent::__construct(array('GetHistoricalMonthlyQuotesRangeAdjustedResult'=>$_GetHistoricalMonthlyQuotesRangeAdjustedResult));
	}
	/**
	 * Set GetHistoricalMonthlyQuotesRangeAdjustedResult
	 * @param HistoricalQuotes GetHistoricalMonthlyQuotesRangeAdjustedResult
	 * @return HistoricalQuotes
	 */
	public function setGetHistoricalMonthlyQuotesRangeAdjustedResult($_GetHistoricalMonthlyQuotesRangeAdjustedResult)
	{
		return ($this->GetHistoricalMonthlyQuotesRangeAdjustedResult = $_GetHistoricalMonthlyQuotesRangeAdjustedResult);
	}
	/**
	 * Get GetHistoricalMonthlyQuotesRangeAdjustedResult
	 * @return XiHistoricalTypeHistoricalQuotes
	 */
	public function getGetHistoricalMonthlyQuotesRangeAdjustedResult()
	{
		return $this->GetHistoricalMonthlyQuotesRangeAdjustedResult;
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