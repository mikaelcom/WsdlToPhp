<?php
/**
 * Class file for XiGlobalHistoricalTypeGetEndOfDayQuotesResponse
 * @date 08/07/2012
 */
/**
 * Class XiGlobalHistoricalTypeGetEndOfDayQuotesResponse
 * @date 08/07/2012
 */
class XiGlobalHistoricalTypeGetEndOfDayQuotesResponse extends XiGlobalHistoricalWsdlClass
{
	/**
	 * The GetEndOfDayQuotesResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiGlobalHistoricalTypeArrayOfEndOfDayQuote
	 */
	public $GetEndOfDayQuotesResult;
	/**
	 * Constructor
	 * @param XiGlobalHistoricalTypeArrayOfEndOfDayQuote GetEndOfDayQuotesResult
	 * @return XiGlobalHistoricalTypeGetEndOfDayQuotesResponse
	 */
	public function __construct($_GetEndOfDayQuotesResult = null)
	{
		parent::__construct(array('GetEndOfDayQuotesResult'=>new XiGlobalHistoricalTypeArrayOfEndOfDayQuote($_GetEndOfDayQuotesResult)));
	}
	/**
	 * Set GetEndOfDayQuotesResult
	 * @param ArrayOfEndOfDayQuote GetEndOfDayQuotesResult
	 * @return ArrayOfEndOfDayQuote
	 */
	public function setGetEndOfDayQuotesResult($_GetEndOfDayQuotesResult)
	{
		return ($this->GetEndOfDayQuotesResult = $_GetEndOfDayQuotesResult);
	}
	/**
	 * Get GetEndOfDayQuotesResult
	 * @return XiGlobalHistoricalTypeArrayOfEndOfDayQuote
	 */
	public function getGetEndOfDayQuotesResult()
	{
		return $this->GetEndOfDayQuotesResult;
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