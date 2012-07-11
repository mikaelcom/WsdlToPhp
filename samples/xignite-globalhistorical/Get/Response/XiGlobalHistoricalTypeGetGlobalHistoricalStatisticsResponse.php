<?php
/**
 * Class file for XiGlobalHistoricalTypeGetGlobalHistoricalStatisticsResponse
 * @date 08/07/2012
 */
/**
 * Class XiGlobalHistoricalTypeGetGlobalHistoricalStatisticsResponse
 * @date 08/07/2012
 */
class XiGlobalHistoricalTypeGetGlobalHistoricalStatisticsResponse extends XiGlobalHistoricalWsdlClass
{
	/**
	 * The GetGlobalHistoricalStatisticsResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiGlobalHistoricalTypeGlobalHistoricalStatistics
	 */
	public $GetGlobalHistoricalStatisticsResult;
	/**
	 * Constructor
	 * @param XiGlobalHistoricalTypeGlobalHistoricalStatistics GetGlobalHistoricalStatisticsResult
	 * @return XiGlobalHistoricalTypeGetGlobalHistoricalStatisticsResponse
	 */
	public function __construct($_GetGlobalHistoricalStatisticsResult = null)
	{
		parent::__construct(array('GetGlobalHistoricalStatisticsResult'=>$_GetGlobalHistoricalStatisticsResult));
	}
	/**
	 * Set GetGlobalHistoricalStatisticsResult
	 * @param GlobalHistoricalStatistics GetGlobalHistoricalStatisticsResult
	 * @return GlobalHistoricalStatistics
	 */
	public function setGetGlobalHistoricalStatisticsResult($_GetGlobalHistoricalStatisticsResult)
	{
		return ($this->GetGlobalHistoricalStatisticsResult = $_GetGlobalHistoricalStatisticsResult);
	}
	/**
	 * Get GetGlobalHistoricalStatisticsResult
	 * @return XiGlobalHistoricalTypeGlobalHistoricalStatistics
	 */
	public function getGetGlobalHistoricalStatisticsResult()
	{
		return $this->GetGlobalHistoricalStatisticsResult;
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