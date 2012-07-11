<?php
/**
 * Class file for XiHistoricalTypeGetHistoricalQuotesAdjustedResponse
 * @date 08/07/2012
 */
/**
 * Class XiHistoricalTypeGetHistoricalQuotesAdjustedResponse
 * @date 08/07/2012
 */
class XiHistoricalTypeGetHistoricalQuotesAdjustedResponse extends XiHistoricalWsdlClass
{
	/**
	 * The GetHistoricalQuotesAdjustedResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiHistoricalTypeArrayOfHistoricalQuote
	 */
	public $GetHistoricalQuotesAdjustedResult;
	/**
	 * Constructor
	 * @param XiHistoricalTypeArrayOfHistoricalQuote GetHistoricalQuotesAdjustedResult
	 * @return XiHistoricalTypeGetHistoricalQuotesAdjustedResponse
	 */
	public function __construct($_GetHistoricalQuotesAdjustedResult = null)
	{
		parent::__construct(array('GetHistoricalQuotesAdjustedResult'=>new XiHistoricalTypeArrayOfHistoricalQuote($_GetHistoricalQuotesAdjustedResult)));
	}
	/**
	 * Set GetHistoricalQuotesAdjustedResult
	 * @param ArrayOfHistoricalQuote GetHistoricalQuotesAdjustedResult
	 * @return ArrayOfHistoricalQuote
	 */
	public function setGetHistoricalQuotesAdjustedResult($_GetHistoricalQuotesAdjustedResult)
	{
		return ($this->GetHistoricalQuotesAdjustedResult = $_GetHistoricalQuotesAdjustedResult);
	}
	/**
	 * Get GetHistoricalQuotesAdjustedResult
	 * @return XiHistoricalTypeArrayOfHistoricalQuote
	 */
	public function getGetHistoricalQuotesAdjustedResult()
	{
		return $this->GetHistoricalQuotesAdjustedResult;
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