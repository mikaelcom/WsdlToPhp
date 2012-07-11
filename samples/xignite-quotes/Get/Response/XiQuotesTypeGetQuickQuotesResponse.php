<?php
/**
 * Class file for XiQuotesTypeGetQuickQuotesResponse
 * @date 08/07/2012
 */
/**
 * Class XiQuotesTypeGetQuickQuotesResponse
 * @date 08/07/2012
 */
class XiQuotesTypeGetQuickQuotesResponse extends XiQuotesWsdlClass
{
	/**
	 * The GetQuickQuotesResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiQuotesTypeArrayOfQuickQuote
	 */
	public $GetQuickQuotesResult;
	/**
	 * Constructor
	 * @param XiQuotesTypeArrayOfQuickQuote GetQuickQuotesResult
	 * @return XiQuotesTypeGetQuickQuotesResponse
	 */
	public function __construct($_GetQuickQuotesResult = null)
	{
		parent::__construct(array('GetQuickQuotesResult'=>new XiQuotesTypeArrayOfQuickQuote($_GetQuickQuotesResult)));
	}
	/**
	 * Set GetQuickQuotesResult
	 * @param ArrayOfQuickQuote GetQuickQuotesResult
	 * @return ArrayOfQuickQuote
	 */
	public function setGetQuickQuotesResult($_GetQuickQuotesResult)
	{
		return ($this->GetQuickQuotesResult = $_GetQuickQuotesResult);
	}
	/**
	 * Get GetQuickQuotesResult
	 * @return XiQuotesTypeArrayOfQuickQuote
	 */
	public function getGetQuickQuotesResult()
	{
		return $this->GetQuickQuotesResult;
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