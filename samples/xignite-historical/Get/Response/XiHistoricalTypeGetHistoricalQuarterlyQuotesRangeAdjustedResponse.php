<?php
/**
 * Class file for XiHistoricalTypeGetHistoricalQuarterlyQuotesRangeAdjustedResponse
 * @date 08/07/2012
 */
/**
 * Class XiHistoricalTypeGetHistoricalQuarterlyQuotesRangeAdjustedResponse
 * @date 08/07/2012
 */
class XiHistoricalTypeGetHistoricalQuarterlyQuotesRangeAdjustedResponse extends XiHistoricalWsdlClass
{
	/**
	 * The GetHistoricalQuarterlyQuotesRangeAdjustedResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiHistoricalTypeHistoricalQuotes
	 */
	public $GetHistoricalQuarterlyQuotesRangeAdjustedResult;
	/**
	 * Constructor
	 * @param XiHistoricalTypeHistoricalQuotes GetHistoricalQuarterlyQuotesRangeAdjustedResult
	 * @return XiHistoricalTypeGetHistoricalQuarterlyQuotesRangeAdjustedResponse
	 */
	public function __construct($_GetHistoricalQuarterlyQuotesRangeAdjustedResult = null)
	{
		parent::__construct(array('GetHistoricalQuarterlyQuotesRangeAdjustedResult'=>$_GetHistoricalQuarterlyQuotesRangeAdjustedResult));
	}
	/**
	 * Set GetHistoricalQuarterlyQuotesRangeAdjustedResult
	 * @param HistoricalQuotes GetHistoricalQuarterlyQuotesRangeAdjustedResult
	 * @return HistoricalQuotes
	 */
	public function setGetHistoricalQuarterlyQuotesRangeAdjustedResult($_GetHistoricalQuarterlyQuotesRangeAdjustedResult)
	{
		return ($this->GetHistoricalQuarterlyQuotesRangeAdjustedResult = $_GetHistoricalQuarterlyQuotesRangeAdjustedResult);
	}
	/**
	 * Get GetHistoricalQuarterlyQuotesRangeAdjustedResult
	 * @return XiHistoricalTypeHistoricalQuotes
	 */
	public function getGetHistoricalQuarterlyQuotesRangeAdjustedResult()
	{
		return $this->GetHistoricalQuarterlyQuotesRangeAdjustedResult;
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