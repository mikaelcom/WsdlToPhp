<?php
/**
 * Class file for XiQuotesTypeGetQuoteResponse
 * @date 08/07/2012
 */
/**
 * Class XiQuotesTypeGetQuoteResponse
 * @date 08/07/2012
 */
class XiQuotesTypeGetQuoteResponse extends XiQuotesWsdlClass
{
	/**
	 * The GetQuoteResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiQuotesTypeExtendedQuote
	 */
	public $GetQuoteResult;
	/**
	 * Constructor
	 * @param XiQuotesTypeExtendedQuote GetQuoteResult
	 * @return XiQuotesTypeGetQuoteResponse
	 */
	public function __construct($_GetQuoteResult = null)
	{
		parent::__construct(array('GetQuoteResult'=>$_GetQuoteResult));
	}
	/**
	 * Set GetQuoteResult
	 * @param ExtendedQuote GetQuoteResult
	 * @return ExtendedQuote
	 */
	public function setGetQuoteResult($_GetQuoteResult)
	{
		return ($this->GetQuoteResult = $_GetQuoteResult);
	}
	/**
	 * Get GetQuoteResult
	 * @return XiQuotesTypeExtendedQuote
	 */
	public function getGetQuoteResult()
	{
		return $this->GetQuoteResult;
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