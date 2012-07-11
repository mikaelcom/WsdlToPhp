<?php
/**
 * Class file for XiHistoricalTypeGetHistoricalQuotesRangeAdjustedResponse
 * @date 08/07/2012
 */
/**
 * Class XiHistoricalTypeGetHistoricalQuotesRangeAdjustedResponse
 * @date 08/07/2012
 */
class XiHistoricalTypeGetHistoricalQuotesRangeAdjustedResponse extends XiHistoricalWsdlClass
{
	/**
	 * The GetHistoricalQuotesRangeAdjustedResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiHistoricalTypeHistoricalQuotes
	 */
	public $GetHistoricalQuotesRangeAdjustedResult;
	/**
	 * Constructor
	 * @param XiHistoricalTypeHistoricalQuotes GetHistoricalQuotesRangeAdjustedResult
	 * @return XiHistoricalTypeGetHistoricalQuotesRangeAdjustedResponse
	 */
	public function __construct($_GetHistoricalQuotesRangeAdjustedResult = null)
	{
		parent::__construct(array('GetHistoricalQuotesRangeAdjustedResult'=>$_GetHistoricalQuotesRangeAdjustedResult));
	}
	/**
	 * Set GetHistoricalQuotesRangeAdjustedResult
	 * @param HistoricalQuotes GetHistoricalQuotesRangeAdjustedResult
	 * @return HistoricalQuotes
	 */
	public function setGetHistoricalQuotesRangeAdjustedResult($_GetHistoricalQuotesRangeAdjustedResult)
	{
		return ($this->GetHistoricalQuotesRangeAdjustedResult = $_GetHistoricalQuotesRangeAdjustedResult);
	}
	/**
	 * Get GetHistoricalQuotesRangeAdjustedResult
	 * @return XiHistoricalTypeHistoricalQuotes
	 */
	public function getGetHistoricalQuotesRangeAdjustedResult()
	{
		return $this->GetHistoricalQuotesRangeAdjustedResult;
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