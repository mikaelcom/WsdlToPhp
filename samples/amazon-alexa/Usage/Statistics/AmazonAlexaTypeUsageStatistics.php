<?php
/**
 * Class file for AmazonAlexaTypeUsageStatistics
 * @date 10/07/2012
 */
/**
 * Class AmazonAlexaTypeUsageStatistics
 * @date 10/07/2012
 */
class AmazonAlexaTypeUsageStatistics extends AmazonAlexaWsdlClass
{
	/**
	 * The UsageStatistic
	 * @var AmazonAlexaTypeUsageStatisticType
	 */
	public $UsageStatistic;
	/**
	 * Constructor
	 * @param AmazonAlexaTypeUsageStatisticType UsageStatistic
	 * @return AmazonAlexaTypeUsageStatistics
	 */
	public function __construct($_UsageStatistic = null)
	{
		parent::__construct(array('UsageStatistic'=>$_UsageStatistic));
	}
	/**
	 * Set UsageStatistic
	 * @param UsageStatisticType UsageStatistic
	 * @return UsageStatisticType
	 */
	public function setUsageStatistic($_UsageStatistic)
	{
		return ($this->UsageStatistic = $_UsageStatistic);
	}
	/**
	 * Get UsageStatistic
	 * @return AmazonAlexaTypeUsageStatisticType
	 */
	public function getUsageStatistic()
	{
		return $this->UsageStatistic;
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