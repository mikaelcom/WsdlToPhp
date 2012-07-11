<?php
/**
 * Class file for XiHistoricalTypeGetHistoricalQuotesAsOfResponse
 * @date 08/07/2012
 */
/**
 * Class XiHistoricalTypeGetHistoricalQuotesAsOfResponse
 * @date 08/07/2012
 */
class XiHistoricalTypeGetHistoricalQuotesAsOfResponse extends XiHistoricalWsdlClass
{
	/**
	 * The GetHistoricalQuotesAsOfResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiHistoricalTypeHistoricalQuotes
	 */
	public $GetHistoricalQuotesAsOfResult;
	/**
	 * Constructor
	 * @param XiHistoricalTypeHistoricalQuotes GetHistoricalQuotesAsOfResult
	 * @return XiHistoricalTypeGetHistoricalQuotesAsOfResponse
	 */
	public function __construct($_GetHistoricalQuotesAsOfResult = null)
	{
		parent::__construct(array('GetHistoricalQuotesAsOfResult'=>$_GetHistoricalQuotesAsOfResult));
	}
	/**
	 * Set GetHistoricalQuotesAsOfResult
	 * @param HistoricalQuotes GetHistoricalQuotesAsOfResult
	 * @return HistoricalQuotes
	 */
	public function setGetHistoricalQuotesAsOfResult($_GetHistoricalQuotesAsOfResult)
	{
		return ($this->GetHistoricalQuotesAsOfResult = $_GetHistoricalQuotesAsOfResult);
	}
	/**
	 * Get GetHistoricalQuotesAsOfResult
	 * @return XiHistoricalTypeHistoricalQuotes
	 */
	public function getGetHistoricalQuotesAsOfResult()
	{
		return $this->GetHistoricalQuotesAsOfResult;
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