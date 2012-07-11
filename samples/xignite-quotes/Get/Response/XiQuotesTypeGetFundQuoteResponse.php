<?php
/**
 * Class file for XiQuotesTypeGetFundQuoteResponse
 * @date 08/07/2012
 */
/**
 * Class XiQuotesTypeGetFundQuoteResponse
 * @date 08/07/2012
 */
class XiQuotesTypeGetFundQuoteResponse extends XiQuotesWsdlClass
{
	/**
	 * The GetFundQuoteResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiQuotesTypeExtendedFundQuote
	 */
	public $GetFundQuoteResult;
	/**
	 * Constructor
	 * @param XiQuotesTypeExtendedFundQuote GetFundQuoteResult
	 * @return XiQuotesTypeGetFundQuoteResponse
	 */
	public function __construct($_GetFundQuoteResult = null)
	{
		parent::__construct(array('GetFundQuoteResult'=>$_GetFundQuoteResult));
	}
	/**
	 * Set GetFundQuoteResult
	 * @param ExtendedFundQuote GetFundQuoteResult
	 * @return ExtendedFundQuote
	 */
	public function setGetFundQuoteResult($_GetFundQuoteResult)
	{
		return ($this->GetFundQuoteResult = $_GetFundQuoteResult);
	}
	/**
	 * Get GetFundQuoteResult
	 * @return XiQuotesTypeExtendedFundQuote
	 */
	public function getGetFundQuoteResult()
	{
		return $this->GetFundQuoteResult;
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