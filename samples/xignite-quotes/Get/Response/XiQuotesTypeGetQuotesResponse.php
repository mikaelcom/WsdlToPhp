<?php
/**
 * Class file for XiQuotesTypeGetQuotesResponse
 * @date 08/07/2012
 */
/**
 * Class XiQuotesTypeGetQuotesResponse
 * @date 08/07/2012
 */
class XiQuotesTypeGetQuotesResponse extends XiQuotesWsdlClass
{
	/**
	 * The GetQuotesResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiQuotesTypeArrayOfQuote
	 */
	public $GetQuotesResult;
	/**
	 * Constructor
	 * @param XiQuotesTypeArrayOfQuote GetQuotesResult
	 * @return XiQuotesTypeGetQuotesResponse
	 */
	public function __construct($_GetQuotesResult = null)
	{
		parent::__construct(array('GetQuotesResult'=>new XiQuotesTypeArrayOfQuote($_GetQuotesResult)));
	}
	/**
	 * Set GetQuotesResult
	 * @param ArrayOfQuote GetQuotesResult
	 * @return ArrayOfQuote
	 */
	public function setGetQuotesResult($_GetQuotesResult)
	{
		return ($this->GetQuotesResult = $_GetQuotesResult);
	}
	/**
	 * Get GetQuotesResult
	 * @return XiQuotesTypeArrayOfQuote
	 */
	public function getGetQuotesResult()
	{
		return $this->GetQuotesResult;
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