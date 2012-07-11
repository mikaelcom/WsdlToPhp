<?php
/**
 * Class file for XiQuotesTypeGetSingleQuoteResponse
 * @date 08/07/2012
 */
/**
 * Class XiQuotesTypeGetSingleQuoteResponse
 * @date 08/07/2012
 */
class XiQuotesTypeGetSingleQuoteResponse extends XiQuotesWsdlClass
{
	/**
	 * The GetSingleQuoteResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiQuotesTypeQuote
	 */
	public $GetSingleQuoteResult;
	/**
	 * Constructor
	 * @param XiQuotesTypeQuote GetSingleQuoteResult
	 * @return XiQuotesTypeGetSingleQuoteResponse
	 */
	public function __construct($_GetSingleQuoteResult = null)
	{
		parent::__construct(array('GetSingleQuoteResult'=>$_GetSingleQuoteResult));
	}
	/**
	 * Set GetSingleQuoteResult
	 * @param Quote GetSingleQuoteResult
	 * @return Quote
	 */
	public function setGetSingleQuoteResult($_GetSingleQuoteResult)
	{
		return ($this->GetSingleQuoteResult = $_GetSingleQuoteResult);
	}
	/**
	 * Get GetSingleQuoteResult
	 * @return XiQuotesTypeQuote
	 */
	public function getGetSingleQuoteResult()
	{
		return $this->GetSingleQuoteResult;
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