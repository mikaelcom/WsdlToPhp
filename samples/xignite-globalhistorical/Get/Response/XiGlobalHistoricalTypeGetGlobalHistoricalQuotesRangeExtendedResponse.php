<?php
/**
 * Class file for XiGlobalHistoricalTypeGetGlobalHistoricalQuotesRangeExtendedResponse
 * @date 08/07/2012
 */
/**
 * Class XiGlobalHistoricalTypeGetGlobalHistoricalQuotesRangeExtendedResponse
 * @date 08/07/2012
 */
class XiGlobalHistoricalTypeGetGlobalHistoricalQuotesRangeExtendedResponse extends XiGlobalHistoricalWsdlClass
{
	/**
	 * The GetGlobalHistoricalQuotesRangeExtendedResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiGlobalHistoricalTypeGlobalHistoricalQuotesExtended
	 */
	public $GetGlobalHistoricalQuotesRangeExtendedResult;
	/**
	 * Constructor
	 * @param XiGlobalHistoricalTypeGlobalHistoricalQuotesExtended GetGlobalHistoricalQuotesRangeExtendedResult
	 * @return XiGlobalHistoricalTypeGetGlobalHistoricalQuotesRangeExtendedResponse
	 */
	public function __construct($_GetGlobalHistoricalQuotesRangeExtendedResult = null)
	{
		parent::__construct(array('GetGlobalHistoricalQuotesRangeExtendedResult'=>$_GetGlobalHistoricalQuotesRangeExtendedResult));
	}
	/**
	 * Set GetGlobalHistoricalQuotesRangeExtendedResult
	 * @param GlobalHistoricalQuotesExtended GetGlobalHistoricalQuotesRangeExtendedResult
	 * @return GlobalHistoricalQuotesExtended
	 */
	public function setGetGlobalHistoricalQuotesRangeExtendedResult($_GetGlobalHistoricalQuotesRangeExtendedResult)
	{
		return ($this->GetGlobalHistoricalQuotesRangeExtendedResult = $_GetGlobalHistoricalQuotesRangeExtendedResult);
	}
	/**
	 * Get GetGlobalHistoricalQuotesRangeExtendedResult
	 * @return XiGlobalHistoricalTypeGlobalHistoricalQuotesExtended
	 */
	public function getGetGlobalHistoricalQuotesRangeExtendedResult()
	{
		return $this->GetGlobalHistoricalQuotesRangeExtendedResult;
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