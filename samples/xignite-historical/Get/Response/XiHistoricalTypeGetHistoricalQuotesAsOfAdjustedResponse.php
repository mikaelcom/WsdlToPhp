<?php
/**
 * Class file for XiHistoricalTypeGetHistoricalQuotesAsOfAdjustedResponse
 * @date 08/07/2012
 */
/**
 * Class XiHistoricalTypeGetHistoricalQuotesAsOfAdjustedResponse
 * @date 08/07/2012
 */
class XiHistoricalTypeGetHistoricalQuotesAsOfAdjustedResponse extends XiHistoricalWsdlClass
{
	/**
	 * The GetHistoricalQuotesAsOfAdjustedResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiHistoricalTypeHistoricalQuotes
	 */
	public $GetHistoricalQuotesAsOfAdjustedResult;
	/**
	 * Constructor
	 * @param XiHistoricalTypeHistoricalQuotes GetHistoricalQuotesAsOfAdjustedResult
	 * @return XiHistoricalTypeGetHistoricalQuotesAsOfAdjustedResponse
	 */
	public function __construct($_GetHistoricalQuotesAsOfAdjustedResult = null)
	{
		parent::__construct(array('GetHistoricalQuotesAsOfAdjustedResult'=>$_GetHistoricalQuotesAsOfAdjustedResult));
	}
	/**
	 * Set GetHistoricalQuotesAsOfAdjustedResult
	 * @param HistoricalQuotes GetHistoricalQuotesAsOfAdjustedResult
	 * @return HistoricalQuotes
	 */
	public function setGetHistoricalQuotesAsOfAdjustedResult($_GetHistoricalQuotesAsOfAdjustedResult)
	{
		return ($this->GetHistoricalQuotesAsOfAdjustedResult = $_GetHistoricalQuotesAsOfAdjustedResult);
	}
	/**
	 * Get GetHistoricalQuotesAsOfAdjustedResult
	 * @return XiHistoricalTypeHistoricalQuotes
	 */
	public function getGetHistoricalQuotesAsOfAdjustedResult()
	{
		return $this->GetHistoricalQuotesAsOfAdjustedResult;
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