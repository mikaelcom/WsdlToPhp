<?php
/**
 * Class file for XiRatesTypeGetRateStatisticsResponse
 * @date 08/07/2012
 */
/**
 * Class XiRatesTypeGetRateStatisticsResponse
 * @date 08/07/2012
 */
class XiRatesTypeGetRateStatisticsResponse extends XiRatesWsdlClass
{
	/**
	 * The GetRateStatisticsResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiRatesTypeArrayOfRateStatistics
	 */
	public $GetRateStatisticsResult;
	/**
	 * Constructor
	 * @param XiRatesTypeArrayOfRateStatistics GetRateStatisticsResult
	 * @return XiRatesTypeGetRateStatisticsResponse
	 */
	public function __construct($_GetRateStatisticsResult = null)
	{
		parent::__construct(array('GetRateStatisticsResult'=>new XiRatesTypeArrayOfRateStatistics($_GetRateStatisticsResult)));
	}
	/**
	 * Set GetRateStatisticsResult
	 * @param ArrayOfRateStatistics GetRateStatisticsResult
	 * @return ArrayOfRateStatistics
	 */
	public function setGetRateStatisticsResult($_GetRateStatisticsResult)
	{
		return ($this->GetRateStatisticsResult = $_GetRateStatisticsResult);
	}
	/**
	 * Get GetRateStatisticsResult
	 * @return XiRatesTypeArrayOfRateStatistics
	 */
	public function getGetRateStatisticsResult()
	{
		return $this->GetRateStatisticsResult;
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