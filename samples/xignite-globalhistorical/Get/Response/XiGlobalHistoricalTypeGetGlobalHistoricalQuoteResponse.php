<?php
/**
 * Class file for XiGlobalHistoricalTypeGetGlobalHistoricalQuoteResponse
 * @date 08/07/2012
 */
/**
 * Class XiGlobalHistoricalTypeGetGlobalHistoricalQuoteResponse
 * @date 08/07/2012
 */
class XiGlobalHistoricalTypeGetGlobalHistoricalQuoteResponse extends XiGlobalHistoricalWsdlClass
{
	/**
	 * The GetGlobalHistoricalQuoteResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiGlobalHistoricalTypeGlobalHistoricalQuote
	 */
	public $GetGlobalHistoricalQuoteResult;
	/**
	 * Constructor
	 * @param XiGlobalHistoricalTypeGlobalHistoricalQuote GetGlobalHistoricalQuoteResult
	 * @return XiGlobalHistoricalTypeGetGlobalHistoricalQuoteResponse
	 */
	public function __construct($_GetGlobalHistoricalQuoteResult = null)
	{
		parent::__construct(array('GetGlobalHistoricalQuoteResult'=>$_GetGlobalHistoricalQuoteResult));
	}
	/**
	 * Set GetGlobalHistoricalQuoteResult
	 * @param GlobalHistoricalQuote GetGlobalHistoricalQuoteResult
	 * @return GlobalHistoricalQuote
	 */
	public function setGetGlobalHistoricalQuoteResult($_GetGlobalHistoricalQuoteResult)
	{
		return ($this->GetGlobalHistoricalQuoteResult = $_GetGlobalHistoricalQuoteResult);
	}
	/**
	 * Get GetGlobalHistoricalQuoteResult
	 * @return XiGlobalHistoricalTypeGlobalHistoricalQuote
	 */
	public function getGetGlobalHistoricalQuoteResult()
	{
		return $this->GetGlobalHistoricalQuoteResult;
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