<?php
/**
 * Class file for XiGlobalquotesTypeGetGlobalDelayedQuoteResponse
 * @date 08/07/2012
 */
/**
 * Class XiGlobalquotesTypeGetGlobalDelayedQuoteResponse
 * @date 08/07/2012
 */
class XiGlobalquotesTypeGetGlobalDelayedQuoteResponse extends XiGlobalquotesWsdlClass
{
	/**
	 * The GetGlobalDelayedQuoteResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiGlobalquotesTypeGlobalQuote
	 */
	public $GetGlobalDelayedQuoteResult;
	/**
	 * Constructor
	 * @param XiGlobalquotesTypeGlobalQuote GetGlobalDelayedQuoteResult
	 * @return XiGlobalquotesTypeGetGlobalDelayedQuoteResponse
	 */
	public function __construct($_GetGlobalDelayedQuoteResult = null)
	{
		parent::__construct(array('GetGlobalDelayedQuoteResult'=>$_GetGlobalDelayedQuoteResult));
	}
	/**
	 * Set GetGlobalDelayedQuoteResult
	 * @param GlobalQuote GetGlobalDelayedQuoteResult
	 * @return GlobalQuote
	 */
	public function setGetGlobalDelayedQuoteResult($_GetGlobalDelayedQuoteResult)
	{
		return ($this->GetGlobalDelayedQuoteResult = $_GetGlobalDelayedQuoteResult);
	}
	/**
	 * Get GetGlobalDelayedQuoteResult
	 * @return XiGlobalquotesTypeGlobalQuote
	 */
	public function getGetGlobalDelayedQuoteResult()
	{
		return $this->GetGlobalDelayedQuoteResult;
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