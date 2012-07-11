<?php
/**
 * Class file for XiQuotesTypeGetQuotesByIdentifiersResponse
 * @date 08/07/2012
 */
/**
 * Class XiQuotesTypeGetQuotesByIdentifiersResponse
 * @date 08/07/2012
 */
class XiQuotesTypeGetQuotesByIdentifiersResponse extends XiQuotesWsdlClass
{
	/**
	 * The GetQuotesByIdentifiersResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiQuotesTypeArrayOfQuote
	 */
	public $GetQuotesByIdentifiersResult;
	/**
	 * Constructor
	 * @param XiQuotesTypeArrayOfQuote GetQuotesByIdentifiersResult
	 * @return XiQuotesTypeGetQuotesByIdentifiersResponse
	 */
	public function __construct($_GetQuotesByIdentifiersResult = null)
	{
		parent::__construct(array('GetQuotesByIdentifiersResult'=>new XiQuotesTypeArrayOfQuote($_GetQuotesByIdentifiersResult)));
	}
	/**
	 * Set GetQuotesByIdentifiersResult
	 * @param ArrayOfQuote GetQuotesByIdentifiersResult
	 * @return ArrayOfQuote
	 */
	public function setGetQuotesByIdentifiersResult($_GetQuotesByIdentifiersResult)
	{
		return ($this->GetQuotesByIdentifiersResult = $_GetQuotesByIdentifiersResult);
	}
	/**
	 * Get GetQuotesByIdentifiersResult
	 * @return XiQuotesTypeArrayOfQuote
	 */
	public function getGetQuotesByIdentifiersResult()
	{
		return $this->GetQuotesByIdentifiersResult;
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