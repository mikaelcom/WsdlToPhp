<?php
/**
 * Class file for XiGlobalHistoricalTypeGetGlobalHistoricalMonthlyQuotesRangeExtendedResponse
 * @date 08/07/2012
 */
/**
 * Class XiGlobalHistoricalTypeGetGlobalHistoricalMonthlyQuotesRangeExtendedResponse
 * @date 08/07/2012
 */
class XiGlobalHistoricalTypeGetGlobalHistoricalMonthlyQuotesRangeExtendedResponse extends XiGlobalHistoricalWsdlClass
{
	/**
	 * The GetGlobalHistoricalMonthlyQuotesRangeExtendedResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiGlobalHistoricalTypeGlobalHistoricalQuotesExtended
	 */
	public $GetGlobalHistoricalMonthlyQuotesRangeExtendedResult;
	/**
	 * Constructor
	 * @param XiGlobalHistoricalTypeGlobalHistoricalQuotesExtended GetGlobalHistoricalMonthlyQuotesRangeExtendedResult
	 * @return XiGlobalHistoricalTypeGetGlobalHistoricalMonthlyQuotesRangeExtendedResponse
	 */
	public function __construct($_GetGlobalHistoricalMonthlyQuotesRangeExtendedResult = null)
	{
		parent::__construct(array('GetGlobalHistoricalMonthlyQuotesRangeExtendedResult'=>$_GetGlobalHistoricalMonthlyQuotesRangeExtendedResult));
	}
	/**
	 * Set GetGlobalHistoricalMonthlyQuotesRangeExtendedResult
	 * @param GlobalHistoricalQuotesExtended GetGlobalHistoricalMonthlyQuotesRangeExtendedResult
	 * @return GlobalHistoricalQuotesExtended
	 */
	public function setGetGlobalHistoricalMonthlyQuotesRangeExtendedResult($_GetGlobalHistoricalMonthlyQuotesRangeExtendedResult)
	{
		return ($this->GetGlobalHistoricalMonthlyQuotesRangeExtendedResult = $_GetGlobalHistoricalMonthlyQuotesRangeExtendedResult);
	}
	/**
	 * Get GetGlobalHistoricalMonthlyQuotesRangeExtendedResult
	 * @return XiGlobalHistoricalTypeGlobalHistoricalQuotesExtended
	 */
	public function getGetGlobalHistoricalMonthlyQuotesRangeExtendedResult()
	{
		return $this->GetGlobalHistoricalMonthlyQuotesRangeExtendedResult;
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