<?php
/**
 * Class file for XiHistoricalTypeGetHistoricalStatisticsResponse
 * @date 08/07/2012
 */
/**
 * Class XiHistoricalTypeGetHistoricalStatisticsResponse
 * @date 08/07/2012
 */
class XiHistoricalTypeGetHistoricalStatisticsResponse extends XiHistoricalWsdlClass
{
	/**
	 * The GetHistoricalStatisticsResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiHistoricalTypeHistoricalStatistics
	 */
	public $GetHistoricalStatisticsResult;
	/**
	 * Constructor
	 * @param XiHistoricalTypeHistoricalStatistics GetHistoricalStatisticsResult
	 * @return XiHistoricalTypeGetHistoricalStatisticsResponse
	 */
	public function __construct($_GetHistoricalStatisticsResult = null)
	{
		parent::__construct(array('GetHistoricalStatisticsResult'=>$_GetHistoricalStatisticsResult));
	}
	/**
	 * Set GetHistoricalStatisticsResult
	 * @param HistoricalStatistics GetHistoricalStatisticsResult
	 * @return HistoricalStatistics
	 */
	public function setGetHistoricalStatisticsResult($_GetHistoricalStatisticsResult)
	{
		return ($this->GetHistoricalStatisticsResult = $_GetHistoricalStatisticsResult);
	}
	/**
	 * Get GetHistoricalStatisticsResult
	 * @return XiHistoricalTypeHistoricalStatistics
	 */
	public function getGetHistoricalStatisticsResult()
	{
		return $this->GetHistoricalStatisticsResult;
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