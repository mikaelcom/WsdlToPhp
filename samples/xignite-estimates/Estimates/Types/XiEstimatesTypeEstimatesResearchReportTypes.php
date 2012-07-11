<?php
/**
 * Class file for XiEstimatesTypeEstimatesResearchReportTypes
 * @date 08/07/2012
 */
/**
 * Class XiEstimatesTypeEstimatesResearchReportTypes
 * @date 08/07/2012
 */
class XiEstimatesTypeEstimatesResearchReportTypes extends XiEstimatesWsdlClass
{
	/**
	 * Constant for value 'EarningsEstimates'
	 * @return string 'EarningsEstimates'
	 */
	const VALUE_EARNINGSESTIMATES = 'EarningsEstimates';
	/**
	 * Constant for value 'EstimatesRecommendations'
	 * @return string 'EstimatesRecommendations'
	 */
	const VALUE_ESTIMATESRECOMMENDATIONS = 'EstimatesRecommendations';
	/**
	 * Constant for value 'YahooFinanceEstimates'
	 * @return string 'YahooFinanceEstimates'
	 */
	const VALUE_YAHOOFINANCEESTIMATES = 'YahooFinanceEstimates';
	/**
	 * Constant for value 'EarningsSurprise'
	 * @return string 'EarningsSurprise'
	 */
	const VALUE_EARNINGSSURPRISE = 'EarningsSurprise';
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
	 * Constant for value 'SectorAnalysis'
	 * @return string 'SectorAnalysis'
	 */
	const VALUE_SECTORANALYSIS = 'SectorAnalysis';
	/**
	 * Constant for value 'EPSGrowthRates'
	 * @return string 'EPSGrowthRates'
	 */
	const VALUE_EPSGROWTHRATES = 'EPSGrowthRates';
	/**
	 * Constant for value 'EarningsEstimatesConsensusTrend'
	 * @return string 'EarningsEstimatesConsensusTrend'
	 */
	const VALUE_EARNINGSESTIMATESCONSENSUSTREND = 'EarningsEstimatesConsensusTrend';
	/**
	 * Constant for value 'Default'
	 * @return string 'Default'
	 */
	const VALUE_DEFAULT = 'Default';
	/**
	 * Constructor
	 * @return XiEstimatesTypeEstimatesResearchReportTypes
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
		return in_array($_value,array(self::VALUE_EARNINGSESTIMATES,self::VALUE_ESTIMATESRECOMMENDATIONS,self::VALUE_YAHOOFINANCEESTIMATES,self::VALUE_EARNINGSSURPRISE,self::VALUE_ANALYSTRECOMMENDATIONS,self::VALUE_ANALYSTRECOMMENDATIONSANDHISTOGRAM,self::VALUE_SECTORANALYSIS,self::VALUE_EPSGROWTHRATES,self::VALUE_EARNINGSESTIMATESCONSENSUSTREND,self::VALUE_DEFAULT));
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