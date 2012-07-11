<?php
/**
 * Class file for XiGlobalquotesTypeGetGlobalDelayedQuotesResponse
 * @date 08/07/2012
 */
/**
 * Class XiGlobalquotesTypeGetGlobalDelayedQuotesResponse
 * @date 08/07/2012
 */
class XiGlobalquotesTypeGetGlobalDelayedQuotesResponse extends XiGlobalquotesWsdlClass
{
	/**
	 * The GetGlobalDelayedQuotesResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiGlobalquotesTypeArrayOfGlobalQuote
	 */
	public $GetGlobalDelayedQuotesResult;
	/**
	 * Constructor
	 * @param XiGlobalquotesTypeArrayOfGlobalQuote GetGlobalDelayedQuotesResult
	 * @return XiGlobalquotesTypeGetGlobalDelayedQuotesResponse
	 */
	public function __construct($_GetGlobalDelayedQuotesResult = null)
	{
		parent::__construct(array('GetGlobalDelayedQuotesResult'=>new XiGlobalquotesTypeArrayOfGlobalQuote($_GetGlobalDelayedQuotesResult)));
	}
	/**
	 * Set GetGlobalDelayedQuotesResult
	 * @param ArrayOfGlobalQuote GetGlobalDelayedQuotesResult
	 * @return ArrayOfGlobalQuote
	 */
	public function setGetGlobalDelayedQuotesResult($_GetGlobalDelayedQuotesResult)
	{
		return ($this->GetGlobalDelayedQuotesResult = $_GetGlobalDelayedQuotesResult);
	}
	/**
	 * Get GetGlobalDelayedQuotesResult
	 * @return XiGlobalquotesTypeArrayOfGlobalQuote
	 */
	public function getGetGlobalDelayedQuotesResult()
	{
		return $this->GetGlobalDelayedQuotesResult;
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