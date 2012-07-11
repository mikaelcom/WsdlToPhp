<?php
/**
 * Class file for XiEstimatesTypeEstimateGroups
 * @date 08/07/2012
 */
/**
 * Class XiEstimatesTypeEstimateGroups
 * @date 08/07/2012
 */
class XiEstimatesTypeEstimateGroups extends XiEstimatesWsdlClass
{
	/**
	 * Constant for value 'EarningsEstimates'
	 * @return string 'EarningsEstimates'
	 */
	const VALUE_EARNINGSESTIMATES = 'EarningsEstimates';
	/**
	 * Constant for value 'EarningsEstimatesConsensusTrend'
	 * @return string 'EarningsEstimatesConsensusTrend'
	 */
	const VALUE_EARNINGSESTIMATESCONSENSUSTREND = 'EarningsEstimatesConsensusTrend';
	/**
	 * Constant for value 'EarningsSurprise'
	 * @return string 'EarningsSurprise'
	 */
	const VALUE_EARNINGSSURPRISE = 'EarningsSurprise';
	/**
	 * Constant for value 'EPSGrowthRates'
	 * @return string 'EPSGrowthRates'
	 */
	const VALUE_EPSGROWTHRATES = 'EPSGrowthRates';
	/**
	 * Constant for value 'SectorAnalysis'
	 * @return string 'SectorAnalysis'
	 */
	const VALUE_SECTORANALYSIS = 'SectorAnalysis';
	/**
	 * Constant for value 'EPSEstimatesAndRecommendations'
	 * @return string 'EPSEstimatesAndRecommendations'
	 */
	const VALUE_EPSESTIMATESANDRECOMMENDATIONS = 'EPSEstimatesAndRecommendations';
	/**
	 * Constant for value 'All'
	 * @return string 'All'
	 */
	const VALUE_ALL = 'All';
	/**
	 * Constructor
	 * @return XiEstimatesTypeEstimateGroups
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
		return in_array($_value,array(self::VALUE_EARNINGSESTIMATES,self::VALUE_EARNINGSESTIMATESCONSENSUSTREND,self::VALUE_EARNINGSSURPRISE,self::VALUE_EPSGROWTHRATES,self::VALUE_SECTORANALYSIS,self::VALUE_EPSESTIMATESANDRECOMMENDATIONS,self::VALUE_ALL));
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