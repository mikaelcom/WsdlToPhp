<?php
/**
 * Class file for XiGlobalHistoricalTypeGetGlobalHistoricalQuotesAsOfResponse
 * @date 08/07/2012
 */
/**
 * Class XiGlobalHistoricalTypeGetGlobalHistoricalQuotesAsOfResponse
 * @date 08/07/2012
 */
class XiGlobalHistoricalTypeGetGlobalHistoricalQuotesAsOfResponse extends XiGlobalHistoricalWsdlClass
{
	/**
	 * The GetGlobalHistoricalQuotesAsOfResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiGlobalHistoricalTypeGlobalHistoricalQuotes
	 */
	public $GetGlobalHistoricalQuotesAsOfResult;
	/**
	 * Constructor
	 * @param XiGlobalHistoricalTypeGlobalHistoricalQuotes GetGlobalHistoricalQuotesAsOfResult
	 * @return XiGlobalHistoricalTypeGetGlobalHistoricalQuotesAsOfResponse
	 */
	public function __construct($_GetGlobalHistoricalQuotesAsOfResult = null)
	{
		parent::__construct(array('GetGlobalHistoricalQuotesAsOfResult'=>$_GetGlobalHistoricalQuotesAsOfResult));
	}
	/**
	 * Set GetGlobalHistoricalQuotesAsOfResult
	 * @param GlobalHistoricalQuotes GetGlobalHistoricalQuotesAsOfResult
	 * @return GlobalHistoricalQuotes
	 */
	public function setGetGlobalHistoricalQuotesAsOfResult($_GetGlobalHistoricalQuotesAsOfResult)
	{
		return ($this->GetGlobalHistoricalQuotesAsOfResult = $_GetGlobalHistoricalQuotesAsOfResult);
	}
	/**
	 * Get GetGlobalHistoricalQuotesAsOfResult
	 * @return XiGlobalHistoricalTypeGlobalHistoricalQuotes
	 */
	public function getGetGlobalHistoricalQuotesAsOfResult()
	{
		return $this->GetGlobalHistoricalQuotesAsOfResult;
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