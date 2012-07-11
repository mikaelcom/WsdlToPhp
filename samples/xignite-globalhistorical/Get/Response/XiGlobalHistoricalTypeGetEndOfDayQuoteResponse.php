<?php
/**
 * Class file for XiGlobalHistoricalTypeGetEndOfDayQuoteResponse
 * @date 08/07/2012
 */
/**
 * Class XiGlobalHistoricalTypeGetEndOfDayQuoteResponse
 * @date 08/07/2012
 */
class XiGlobalHistoricalTypeGetEndOfDayQuoteResponse extends XiGlobalHistoricalWsdlClass
{
	/**
	 * The GetEndOfDayQuoteResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiGlobalHistoricalTypeEndOfDayQuote
	 */
	public $GetEndOfDayQuoteResult;
	/**
	 * Constructor
	 * @param XiGlobalHistoricalTypeEndOfDayQuote GetEndOfDayQuoteResult
	 * @return XiGlobalHistoricalTypeGetEndOfDayQuoteResponse
	 */
	public function __construct($_GetEndOfDayQuoteResult = null)
	{
		parent::__construct(array('GetEndOfDayQuoteResult'=>$_GetEndOfDayQuoteResult));
	}
	/**
	 * Set GetEndOfDayQuoteResult
	 * @param EndOfDayQuote GetEndOfDayQuoteResult
	 * @return EndOfDayQuote
	 */
	public function setGetEndOfDayQuoteResult($_GetEndOfDayQuoteResult)
	{
		return ($this->GetEndOfDayQuoteResult = $_GetEndOfDayQuoteResult);
	}
	/**
	 * Get GetEndOfDayQuoteResult
	 * @return XiGlobalHistoricalTypeEndOfDayQuote
	 */
	public function getGetEndOfDayQuoteResult()
	{
		return $this->GetEndOfDayQuoteResult;
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