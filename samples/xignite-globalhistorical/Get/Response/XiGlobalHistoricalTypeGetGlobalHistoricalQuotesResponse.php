<?php
/**
 * Class file for XiGlobalHistoricalTypeGetGlobalHistoricalQuotesResponse
 * @date 08/07/2012
 */
/**
 * Class XiGlobalHistoricalTypeGetGlobalHistoricalQuotesResponse
 * @date 08/07/2012
 */
class XiGlobalHistoricalTypeGetGlobalHistoricalQuotesResponse extends XiGlobalHistoricalWsdlClass
{
	/**
	 * The GetGlobalHistoricalQuotesResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiGlobalHistoricalTypeArrayOfGlobalHistoricalQuote
	 */
	public $GetGlobalHistoricalQuotesResult;
	/**
	 * Constructor
	 * @param XiGlobalHistoricalTypeArrayOfGlobalHistoricalQuote GetGlobalHistoricalQuotesResult
	 * @return XiGlobalHistoricalTypeGetGlobalHistoricalQuotesResponse
	 */
	public function __construct($_GetGlobalHistoricalQuotesResult = null)
	{
		parent::__construct(array('GetGlobalHistoricalQuotesResult'=>new XiGlobalHistoricalTypeArrayOfGlobalHistoricalQuote($_GetGlobalHistoricalQuotesResult)));
	}
	/**
	 * Set GetGlobalHistoricalQuotesResult
	 * @param ArrayOfGlobalHistoricalQuote GetGlobalHistoricalQuotesResult
	 * @return ArrayOfGlobalHistoricalQuote
	 */
	public function setGetGlobalHistoricalQuotesResult($_GetGlobalHistoricalQuotesResult)
	{
		return ($this->GetGlobalHistoricalQuotesResult = $_GetGlobalHistoricalQuotesResult);
	}
	/**
	 * Get GetGlobalHistoricalQuotesResult
	 * @return XiGlobalHistoricalTypeArrayOfGlobalHistoricalQuote
	 */
	public function getGetGlobalHistoricalQuotesResult()
	{
		return $this->GetGlobalHistoricalQuotesResult;
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