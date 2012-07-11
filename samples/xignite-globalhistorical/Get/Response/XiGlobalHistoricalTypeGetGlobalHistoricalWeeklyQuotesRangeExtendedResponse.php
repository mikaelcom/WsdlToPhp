<?php
/**
 * Class file for XiGlobalHistoricalTypeGetGlobalHistoricalWeeklyQuotesRangeExtendedResponse
 * @date 08/07/2012
 */
/**
 * Class XiGlobalHistoricalTypeGetGlobalHistoricalWeeklyQuotesRangeExtendedResponse
 * @date 08/07/2012
 */
class XiGlobalHistoricalTypeGetGlobalHistoricalWeeklyQuotesRangeExtendedResponse extends XiGlobalHistoricalWsdlClass
{
	/**
	 * The GetGlobalHistoricalWeeklyQuotesRangeExtendedResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiGlobalHistoricalTypeGlobalHistoricalQuotesExtended
	 */
	public $GetGlobalHistoricalWeeklyQuotesRangeExtendedResult;
	/**
	 * Constructor
	 * @param XiGlobalHistoricalTypeGlobalHistoricalQuotesExtended GetGlobalHistoricalWeeklyQuotesRangeExtendedResult
	 * @return XiGlobalHistoricalTypeGetGlobalHistoricalWeeklyQuotesRangeExtendedResponse
	 */
	public function __construct($_GetGlobalHistoricalWeeklyQuotesRangeExtendedResult = null)
	{
		parent::__construct(array('GetGlobalHistoricalWeeklyQuotesRangeExtendedResult'=>$_GetGlobalHistoricalWeeklyQuotesRangeExtendedResult));
	}
	/**
	 * Set GetGlobalHistoricalWeeklyQuotesRangeExtendedResult
	 * @param GlobalHistoricalQuotesExtended GetGlobalHistoricalWeeklyQuotesRangeExtendedResult
	 * @return GlobalHistoricalQuotesExtended
	 */
	public function setGetGlobalHistoricalWeeklyQuotesRangeExtendedResult($_GetGlobalHistoricalWeeklyQuotesRangeExtendedResult)
	{
		return ($this->GetGlobalHistoricalWeeklyQuotesRangeExtendedResult = $_GetGlobalHistoricalWeeklyQuotesRangeExtendedResult);
	}
	/**
	 * Get GetGlobalHistoricalWeeklyQuotesRangeExtendedResult
	 * @return XiGlobalHistoricalTypeGlobalHistoricalQuotesExtended
	 */
	public function getGetGlobalHistoricalWeeklyQuotesRangeExtendedResult()
	{
		return $this->GetGlobalHistoricalWeeklyQuotesRangeExtendedResult;
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