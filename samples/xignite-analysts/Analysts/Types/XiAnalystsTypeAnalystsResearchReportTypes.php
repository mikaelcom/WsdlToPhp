<?php
/**
 * Class file for XiAnalystsTypeAnalystsResearchReportTypes
 * @date 08/07/2012
 */
/**
 * Class XiAnalystsTypeAnalystsResearchReportTypes
 * @date 08/07/2012
 */
class XiAnalystsTypeAnalystsResearchReportTypes extends XiAnalystsWsdlClass
{
	/**
	 * Constant for value 'CurrentSalesConsensus'
	 * @return string 'CurrentSalesConsensus'
	 */
	const VALUE_CURRENTSALESCONSENSUS = 'CurrentSalesConsensus';
	/**
	 * Constant for value 'CurrentSalesConsensusChange'
	 * @return string 'CurrentSalesConsensusChange'
	 */
	const VALUE_CURRENTSALESCONSENSUSCHANGE = 'CurrentSalesConsensusChange';
	/**
	 * Constant for value 'SummaryCurrentStatistics'
	 * @return string 'SummaryCurrentStatistics'
	 */
	const VALUE_SUMMARYCURRENTSTATISTICS = 'SummaryCurrentStatistics';
	/**
	 * Constant for value 'SummaryCurrentStatisticsChange'
	 * @return string 'SummaryCurrentStatisticsChange'
	 */
	const VALUE_SUMMARYCURRENTSTATISTICSCHANGE = 'SummaryCurrentStatisticsChange';
	/**
	 * Constant for value 'Default'
	 * @return string 'Default'
	 */
	const VALUE_DEFAULT = 'Default';
	/**
	 * Constructor
	 * @return XiAnalystsTypeAnalystsResearchReportTypes
	 */
	public function __construct()
	{
		parent::__construct(array());
	}
	/**
	 * Return true if value is allowed
	 * @param string value
	 * @return bool true|false
	 */
	public static function valueIsValid($_value)
	{
		return in_array($_value,array(self::VALUE_CURRENTSALESCONSENSUS,self::VALUE_CURRENTSALESCONSENSUSCHANGE,self::VALUE_SUMMARYCURRENTSTATISTICS,self::VALUE_SUMMARYCURRENTSTATISTICSCHANGE,self::VALUE_DEFAULT));
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