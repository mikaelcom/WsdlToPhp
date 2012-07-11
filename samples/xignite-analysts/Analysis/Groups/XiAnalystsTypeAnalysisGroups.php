<?php
/**
 * Class file for XiAnalystsTypeAnalysisGroups
 * @date 08/07/2012
 */
/**
 * Class XiAnalystsTypeAnalysisGroups
 * @date 08/07/2012
 */
class XiAnalystsTypeAnalysisGroups extends XiAnalystsWsdlClass
{
	/**
	 * Constant for value 'AnalystRecommendations'
	 * @return string 'AnalystRecommendations'
	 */
	const VALUE_ANALYSTRECOMMENDATIONS = 'AnalystRecommendations';
	/**
	 * Constant for value 'AnalystRecommendationsAndHistogram'
	 * @return string 'AnalystRecommendationsAndHistogram'
	 */
	const VALUE_ANALYSTRECOMMENDATIONSANDHISTOGRAM = 'AnalystRecommendationsAndHistogram';
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
	 * Constant for value 'All'
	 * @return string 'All'
	 */
	const VALUE_ALL = 'All';
	/**
	 * Constructor
	 * @return XiAnalystsTypeAnalysisGroups
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
		return in_array($_value,array(self::VALUE_ANALYSTRECOMMENDATIONS,self::VALUE_ANALYSTRECOMMENDATIONSANDHISTOGRAM,self::VALUE_CURRENTSALESCONSENSUS,self::VALUE_CURRENTSALESCONSENSUSCHANGE,self::VALUE_SUMMARYCURRENTSTATISTICS,self::VALUE_SUMMARYCURRENTSTATISTICSCHANGE,self::VALUE_ALL));
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