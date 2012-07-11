<?php
/**
 * Class file for XiHistoricalTypeGetHistoricalQuoteAdjustedResponse
 * @date 08/07/2012
 */
/**
 * Class XiHistoricalTypeGetHistoricalQuoteAdjustedResponse
 * @date 08/07/2012
 */
class XiHistoricalTypeGetHistoricalQuoteAdjustedResponse extends XiHistoricalWsdlClass
{
	/**
	 * The GetHistoricalQuoteAdjustedResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiHistoricalTypeHistoricalQuote
	 */
	public $GetHistoricalQuoteAdjustedResult;
	/**
	 * Constructor
	 * @param XiHistoricalTypeHistoricalQuote GetHistoricalQuoteAdjustedResult
	 * @return XiHistoricalTypeGetHistoricalQuoteAdjustedResponse
	 */
	public function __construct($_GetHistoricalQuoteAdjustedResult = null)
	{
		parent::__construct(array('GetHistoricalQuoteAdjustedResult'=>$_GetHistoricalQuoteAdjustedResult));
	}
	/**
	 * Set GetHistoricalQuoteAdjustedResult
	 * @param HistoricalQuote GetHistoricalQuoteAdjustedResult
	 * @return HistoricalQuote
	 */
	public function setGetHistoricalQuoteAdjustedResult($_GetHistoricalQuoteAdjustedResult)
	{
		return ($this->GetHistoricalQuoteAdjustedResult = $_GetHistoricalQuoteAdjustedResult);
	}
	/**
	 * Get GetHistoricalQuoteAdjustedResult
	 * @return XiHistoricalTypeHistoricalQuote
	 */
	public function getGetHistoricalQuoteAdjustedResult()
	{
		return $this->GetHistoricalQuoteAdjustedResult;
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