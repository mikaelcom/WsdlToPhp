<?php
/**
 * Class file for XiHistoricalTypeGetHistoricalQuotesResponse
 * @date 08/07/2012
 */
/**
 * Class XiHistoricalTypeGetHistoricalQuotesResponse
 * @date 08/07/2012
 */
class XiHistoricalTypeGetHistoricalQuotesResponse extends XiHistoricalWsdlClass
{
	/**
	 * The GetHistoricalQuotesResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiHistoricalTypeArrayOfHistoricalQuote
	 */
	public $GetHistoricalQuotesResult;
	/**
	 * Constructor
	 * @param XiHistoricalTypeArrayOfHistoricalQuote GetHistoricalQuotesResult
	 * @return XiHistoricalTypeGetHistoricalQuotesResponse
	 */
	public function __construct($_GetHistoricalQuotesResult = null)
	{
		parent::__construct(array('GetHistoricalQuotesResult'=>new XiHistoricalTypeArrayOfHistoricalQuote($_GetHistoricalQuotesResult)));
	}
	/**
	 * Set GetHistoricalQuotesResult
	 * @param ArrayOfHistoricalQuote GetHistoricalQuotesResult
	 * @return ArrayOfHistoricalQuote
	 */
	public function setGetHistoricalQuotesResult($_GetHistoricalQuotesResult)
	{
		return ($this->GetHistoricalQuotesResult = $_GetHistoricalQuotesResult);
	}
	/**
	 * Get GetHistoricalQuotesResult
	 * @return XiHistoricalTypeArrayOfHistoricalQuote
	 */
	public function getGetHistoricalQuotesResult()
	{
		return $this->GetHistoricalQuotesResult;
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