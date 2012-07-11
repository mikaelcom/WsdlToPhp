<?php
/**
 * Class file for XiEstimatesTypeEstimateFieldTypes
 * @date 08/07/2012
 */
/**
 * Class XiEstimatesTypeEstimateFieldTypes
 * @date 08/07/2012
 */
class XiEstimatesTypeEstimateFieldTypes extends XiEstimatesWsdlClass
{
	/**
	 * Constant for value 'Security_Ticker'
	 * @return string 'Security_Ticker'
	 */
	const VALUE_SECURITY_TICKER = 'Security_Ticker';
	/**
	 * Constant for value 'Security_CIK'
	 * @return string 'Security_CIK'
	 */
	const VALUE_SECURITY_CIK = 'Security_CIK';
	/**
	 * Constant for value 'Security_Cusip'
	 * @return string 'Security_Cusip'
	 */
	const VALUE_SECURITY_CUSIP = 'Security_Cusip';
	/**
	 * Constant for value 'Security_ISIN'
	 * @return string 'Security_ISIN'
	 */
	const VALUE_SECURITY_ISIN = 'Security_ISIN';
	/**
	 * Constant for value 'Security_CompanyName'
	 * @return string 'Security_CompanyName'
	 */
	const VALUE_SECURITY_COMPANYNAME = 'Security_CompanyName';
	/**
	 * Constant for value 'Security_Market'
	 * @return string 'Security_Market'
	 */
	const VALUE_SECURITY_MARKET = 'Security_Market';
	/**
	 * Constant for value 'Security_CategoryOrIndustry'
	 * @return string 'Security_CategoryOrIndustry'
	 */
	const VALUE_SECURITY_CATEGORYORINDUSTRY = 'Security_CategoryOrIndustry';
	/**
	 * Constant for value 'EarningsEstimates_CurrentQuarterEndDate'
	 * @return string 'EarningsEstimates_CurrentQuarterEndDate'
	 */
	const VALUE_EARNINGSESTIMATES_CURRENTQUARTERENDDATE = 'EarningsEstimates_CurrentQuarterEndDate';
	/**
	 * Constant for value 'EarningsEstimates_CurrentQuarterMean'
	 * @return string 'EarningsEstimates_CurrentQuarterMean'
	 */
	const VALUE_EARNINGSESTIMATES_CURRENTQUARTERMEAN = 'EarningsEstimates_CurrentQuarterMean';
	/**
	 * Constant for value 'EarningsEstimates_NextQuarterEndDate'
	 * @return string 'EarningsEstimates_NextQuarterEndDate'
	 */
	const VALUE_EARNINGSESTIMATES_NEXTQUARTERENDDATE = 'EarningsEstimates_NextQuarterEndDate';
	/**
	 * Constant for value 'EarningsEstimates_NextQuarterCurrentMean'
	 * @return string 'EarningsEstimates_NextQuarterCurrentMean'
	 */
	const VALUE_EARNINGSESTIMATES_NEXTQUARTERCURRENTMEAN = 'EarningsEstimates_NextQuarterCurrentMean';
	/**
	 * Constant for value 'EarningsEstimates_CurrentFiscalYearEndDate'
	 * @return string 'EarningsEstimates_CurrentFiscalYearEndDate'
	 */
	const VALUE_EARNINGSESTIMATES_CURRENTFISCALYEARENDDATE = 'EarningsEstimates_CurrentFiscalYearEndDate';
	/**
	 * Constant for value 'EarningsEstimates_CurrentFiscalYearMean'
	 * @return string 'EarningsEstimates_CurrentFiscalYearMean'
	 */
	const VALUE_EARNINGSESTIMATES_CURRENTFISCALYEARMEAN = 'EarningsEstimates_CurrentFiscalYearMean';
	/**
	 * Constant for value 'EarningsEstimates_NextFiscalYearEndDate'
	 * @return string 'EarningsEstimates_NextFiscalYearEndDate'
	 */
	const VALUE_EARNINGSESTIMATES_NEXTFISCALYEARENDDATE = 'EarningsEstimates_NextFiscalYearEndDate';
	/**
	 * Constant for value 'EarningsEstimates_NextFiscalYearCurrentMean'
	 * @return string 'EarningsEstimates_NextFiscalYearCurrentMean'
	 */
	const VALUE_EARNINGSESTIMATES_NEXTFISCALYEARCURRENTMEAN = 'EarningsEstimates_NextFiscalYearCurrentMean';
	/**
	 * Constant for value 'EarningsEstimates_NumberOfCurrentQuarterEstimates'
	 * @return string 'EarningsEstimates_NumberOfCurrentQuarterEstimates'
	 */
	const VALUE_EARNINGSESTIMATES_NUMBEROFCURRENTQUARTERESTIMATES = 'EarningsEstimates_NumberOfCurrentQuarterEstimates';
	/**
	 * Constant for value 'EarningsEstimates_NumberOfNextQuarterEstimates'
	 * @return string 'EarningsEstimates_NumberOfNextQuarterEstimates'
	 */
	const VALUE_EARNINGSESTIMATES_NUMBEROFNEXTQUARTERESTIMATES = 'EarningsEstimates_NumberOfNextQuarterEstimates';
	/**
	 * Constant for value 'EarningsEstimates_NumberOfCurrentFiscalYearEstimates'
	 * @return string 'EarningsEstimates_NumberOfCurrentFiscalYearEstimates'
	 */
	const VALUE_EARNINGSESTIMATES_NUMBEROFCURRENTFISCALYEARESTIMATES = 'EarningsEstimates_NumberOfCurrentFiscalYearEstimates';
	/**
	 * Constant for value 'EarningsEstimates_NumberOfNextFiscalYearEstimates'
	 * @return string 'EarningsEstimates_NumberOfNextFiscalYearEstimates'
	 */
	const VALUE_EARNINGSESTIMATES_NUMBEROFNEXTFISCALYEARESTIMATES = 'EarningsEstimates_NumberOfNextFiscalYearEstimates';
	/**
	 * Constant for value 'EarningsEstimates_CurrentQuarterHighEstimate'
	 * @return string 'EarningsEstimates_CurrentQuarterHighEstimate'
	 */
	const VALUE_EARNINGSESTIMATES_CURRENTQUARTERHIGHESTIMATE = 'EarningsEstimates_CurrentQuarterHighEstimate';
	/**
	 * Constant for value 'EarningsEstimates_NextQuarterHighEstimate'
	 * @return string 'EarningsEstimates_NextQuarterHighEstimate'
	 */
	const VALUE_EARNINGSESTIMATES_NEXTQUARTERHIGHESTIMATE = 'EarningsEstimates_NextQuarterHighEstimate';
	/**
	 * Constant for value 'EarningsEstimates_CurrentFiscalYearHighEstimate'
	 * @return string 'EarningsEstimates_CurrentFiscalYearHighEstimate'
	 */
	const VALUE_EARNINGSESTIMATES_CURRENTFISCALYEARHIGHESTIMATE = 'EarningsEstimates_CurrentFiscalYearHighEstimate';
	/**
	 * Constant for value 'EarningsEstimates_NextFiscalYearHighEstimate'
	 * @return string 'EarningsEstimates_NextFiscalYearHighEstimate'
	 */
	const VALUE_EARNINGSESTIMATES_NEXTFISCALYEARHIGHESTIMATE = 'EarningsEstimates_NextFiscalYearHighEstimate';
	/**
	 * Constant for value 'EarningsEstimates_CurrentQuarterLowEstimate'
	 * @return string 'EarningsEstimates_CurrentQuarterLowEstimate'
	 */
	const VALUE_EARNINGSESTIMATES_CURRENTQUARTERLOWESTIMATE = 'EarningsEstimates_CurrentQuarterLowEstimate';
	/**
	 * Constant for value 'EarningsEstimates_NextQuarterLowEstimate'
	 * @return string 'EarningsEstimates_NextQuarterLowEstimate'
	 */
	const VALUE_EARNINGSESTIMATES_NEXTQUARTERLOWESTIMATE = 'EarningsEstimates_NextQuarterLowEstimate';
	/**
	 * Constant for value 'EarningsEstimates_CurrentFiscalYearLowEstimate'
	 * @return string 'EarningsEstimates_CurrentFiscalYearLowEstimate'
	 */
	const VALUE_EARNINGSESTIMATES_CURRENTFISCALYEARLOWESTIMATE = 'EarningsEstimates_CurrentFiscalYearLowEstimate';
	/**
	 * Constant for value 'EarningsEstimates_NextFiscalYearLowEstimate'
	 * @return string 'EarningsEstimates_NextFiscalYearLowEstimate'
	 */
	const VALUE_EARNINGSESTIMATES_NEXTFISCALYEARLOWESTIMATE = 'EarningsEstimates_NextFiscalYearLowEstimate';
	/**
	 * Constant for value 'EarningsEstimates_CurrentQuarterYearPriorActualEarningsPerShare'
	 * @return string 'EarningsEstimates_CurrentQuarterYearPriorActualEarningsPerShare'
	 */
	const VALUE_EARNINGSESTIMATES_CURRENTQUARTERYEARPRIORACTUALEARNINGSPERSHARE = 'EarningsEstimates_CurrentQuarterYearPriorActualEarningsPerShare';
	/**
	 * Constant for value 'EarningsEstimates_NextQuarterYearPriorActualEarningsPerShare'
	 * @return string 'EarningsEstimates_NextQuarterYearPriorActualEarningsPerShare'
	 */
	const VALUE_EARNINGSESTIMATES_NEXTQUARTERYEARPRIORACTUALEARNINGSPERSHARE = 'EarningsEstimates_NextQuarterYearPriorActualEarningsPerShare';
	/**
	 * Constant for value 'EarningsEstimates_CurrentFiscalYearYearPriorActualEarningsPerShare'
	 * @return string 'EarningsEstimates_CurrentFiscalYearYearPriorActualEarningsPerShare'
	 */
	const VALUE_EARNINGSESTIMATES_CURRENTFISCALYEARYEARPRIORACTUALEARNINGSPERSHARE = 'EarningsEstimates_CurrentFiscalYearYearPriorActualEarningsPerShare';
	/**
	 * Constant for value 'EarningsEstimates_NextFiscalYearYearEstimatedEarningsPerShare'
	 * @return string 'EarningsEstimates_NextFiscalYearYearEstimatedEarningsPerShare'
	 */
	const VALUE_EARNINGSESTIMATES_NEXTFISCALYEARYEARESTIMATEDEARNINGSPERSHARE = 'EarningsEstimates_NextFiscalYearYearEstimatedEarningsPerShare';
	/**
	 * Constant for value 'EarningsEstimates_PercentGrowthCurrentQuarterMeanOverThreeQuartersAgoEarningsPerShare'
	 * @return string 'EarningsEstimates_PercentGrowthCurrentQuarterMeanOverThreeQuartersAgoEarningsPerShare'
	 */
	const VALUE_EARNINGSESTIMATES_PERCENTGROWTHCURRENTQUARTERMEANOVERTHREEQUARTERSAGOEARNINGSPERSHARE = 'EarningsEstimates_PercentGrowthCurrentQuarterMeanOverThreeQuartersAgoEarningsPerShare';
	/**
	 * Constant for value 'EarningsEstimates_PercentGrowthNextQuarterMeanOverTwoQuartersAgoEarningsPerShare'
	 * @return string 'EarningsEstimates_PercentGrowthNextQuarterMeanOverTwoQuartersAgoEarningsPerShare'
	 */
	const VALUE_EARNINGSESTIMATES_PERCENTGROWTHNEXTQUARTERMEANOVERTWOQUARTERSAGOEARNINGSPERSHARE = 'EarningsEstimates_PercentGrowthNextQuarterMeanOverTwoQuartersAgoEarningsPerShare';
	/**
	 * Constant for value 'EarningsEstimates_PercentGrowthCurrentFiscalYearMeanOverMostRecentFiscalYearEarningsPerShare'
	 * @return string 'EarningsEstimates_PercentGrowthCurrentFiscalYearMeanOverMostRecentFiscalYearEarningsPerShare'
	 */
	const VALUE_EARNINGSESTIMATES_PERCENTGROWTHCURRENTFISCALYEARMEANOVERMOSTRECENTFISCALYEAREARNINGSPERSHARE = 'EarningsEstimates_PercentGrowthCurrentFiscalYearMeanOverMostRecentFiscalYearEarningsPerShare';
	/**
	 * Constant for value 'EarningsEstimates_PercentGrowthNextFiscalYearMeanOverCurrentFiscalYearMean'
	 * @return string 'EarningsEstimates_PercentGrowthNextFiscalYearMeanOverCurrentFiscalYearMean'
	 */
	const VALUE_EARNINGSESTIMATES_PERCENTGROWTHNEXTFISCALYEARMEANOVERCURRENTFISCALYEARMEAN = 'EarningsEstimates_PercentGrowthNextFiscalYearMeanOverCurrentFiscalYearMean';
	/**
	 * Constant for value 'EarningsEstimates_LongTermGrowthCurrentMean'
	 * @return string 'EarningsEstimates_LongTermGrowthCurrentMean'
	 */
	const VALUE_EARNINGSESTIMATES_LONGTERMGROWTHCURRENTMEAN = 'EarningsEstimates_LongTermGrowthCurrentMean';
	/**
	 * Constant for value 'EarningsEstimates_NumberOfLongTermGrowthEstimates'
	 * @return string 'EarningsEstimates_NumberOfLongTermGrowthEstimates'
	 */
	const VALUE_EARNINGSESTIMATES_NUMBEROFLONGTERMGROWTHESTIMATES = 'EarningsEstimates_NumberOfLongTermGrowthEstimates';
	/**
	 * Constant for value 'EarningsEstimates_LongTermGrowthHighEstimate'
	 * @return string 'EarningsEstimates_LongTermGrowthHighEstimate'
	 */
	const VALUE_EARNINGSESTIMATES_LONGTERMGROWTHHIGHESTIMATE = 'EarningsEstimates_LongTermGrowthHighEstimate';
	/**
	 * Constant for value 'EarningsEstimates_LongTermGrowthLowEstimate'
	 * @return string 'EarningsEstimates_LongTermGrowthLowEstimate'
	 */
	const VALUE_EARNINGSESTIMATES_LONGTERMGROWTHLOWESTIMATE = 'EarningsEstimates_LongTermGrowthLowEstimate';
	/**
	 * Constant for value 'EarningsEstimatesConsensusTrend_CurrentFiscalQuarterEndDate'
	 * @return string 'EarningsEstimatesConsensusTrend_CurrentFiscalQuarterEndDate'
	 */
	const VALUE_EARNINGSESTIMATESCONSENSUSTREND_CURRENTFISCALQUARTERENDDATE = 'EarningsEstimatesConsensusTrend_CurrentFiscalQuarterEndDate';
	/**
	 * Constant for value 'EarningsEstimatesConsensusTrend_CurrentQuarterMeanCurrent'
	 * @return string 'EarningsEstimatesConsensusTrend_CurrentQuarterMeanCurrent'
	 */
	const VALUE_EARNINGSESTIMATESCONSENSUSTREND_CURRENTQUARTERMEANCURRENT = 'EarningsEstimatesConsensusTrend_CurrentQuarterMeanCurrent';
	/**
	 * Constant for value 'EarningsEstimatesConsensusTrend_CurrentQuarterMean7DaysAgo'
	 * @return string 'EarningsEstimatesConsensusTrend_CurrentQuarterMean7DaysAgo'
	 */
	const VALUE_EARNINGSESTIMATESCONSENSUSTREND_CURRENTQUARTERMEAN7DAYSAGO = 'EarningsEstimatesConsensusTrend_CurrentQuarterMean7DaysAgo';
	/**
	 * Constant for value 'EarningsEstimatesConsensusTrend_CurrentQuarterMean30DaysAgo'
	 * @return string 'EarningsEstimatesConsensusTrend_CurrentQuarterMean30DaysAgo'
	 */
	const VALUE_EARNINGSESTIMATESCONSENSUSTREND_CURRENTQUARTERMEAN30DAYSAGO = 'EarningsEstimatesConsensusTrend_CurrentQuarterMean30DaysAgo';
	/**
	 * Constant for value 'EarningsEstimatesConsensusTrend_CurrentQuarterMean60DaysAgo'
	 * @return string 'EarningsEstimatesConsensusTrend_CurrentQuarterMean60DaysAgo'
	 */
	const VALUE_EARNINGSESTIMATESCONSENSUSTREND_CURRENTQUARTERMEAN60DAYSAGO = 'EarningsEstimatesConsensusTrend_CurrentQuarterMean60DaysAgo';
	/**
	 * Constant for value 'EarningsEstimatesConsensusTrend_CurrentQuarterMean90DaysAgo'
	 * @return string 'EarningsEstimatesConsensusTrend_CurrentQuarterMean90DaysAgo'
	 */
	const VALUE_EARNINGSESTIMATESCONSENSUSTREND_CURRENTQUARTERMEAN90DAYSAGO = 'EarningsEstimatesConsensusTrend_CurrentQuarterMean90DaysAgo';
	/**
	 * Constant for value 'EarningsEstimatesConsensusTrend_NextFiscalQuarterEndDate'
	 * @return string 'EarningsEstimatesConsensusTrend_NextFiscalQuarterEndDate'
	 */
	const VALUE_EARNINGSESTIMATESCONSENSUSTREND_NEXTFISCALQUARTERENDDATE = 'EarningsEstimatesConsensusTrend_NextFiscalQuarterEndDate';
	/**
	 * Constant for value 'EarningsEstimatesConsensusTrend_NextQuarterMeanCurrent'
	 * @return string 'EarningsEstimatesConsensusTrend_NextQuarterMeanCurrent'
	 */
	const VALUE_EARNINGSESTIMATESCONSENSUSTREND_NEXTQUARTERMEANCURRENT = 'EarningsEstimatesConsensusTrend_NextQuarterMeanCurrent';
	/**
	 * Constant for value 'EarningsEstimatesConsensusTrend_NextQuarterMean7DaysAgo'
	 * @return string 'EarningsEstimatesConsensusTrend_NextQuarterMean7DaysAgo'
	 */
	const VALUE_EARNINGSESTIMATESCONSENSUSTREND_NEXTQUARTERMEAN7DAYSAGO = 'EarningsEstimatesConsensusTrend_NextQuarterMean7DaysAgo';
	/**
	 * Constant for value 'EarningsEstimatesConsensusTrend_NextQuarterMean30DaysAgo'
	 * @return string 'EarningsEstimatesConsensusTrend_NextQuarterMean30DaysAgo'
	 */
	const VALUE_EARNINGSESTIMATESCONSENSUSTREND_NEXTQUARTERMEAN30DAYSAGO = 'EarningsEstimatesConsensusTrend_NextQuarterMean30DaysAgo';
	/**
	 * Constant for value 'EarningsEstimatesConsensusTrend_NextQuarterMean60DaysAgo'
	 * @return string 'EarningsEstimatesConsensusTrend_NextQuarterMean60DaysAgo'
	 */
	const VALUE_EARNINGSESTIMATESCONSENSUSTREND_NEXTQUARTERMEAN60DAYSAGO = 'EarningsEstimatesConsensusTrend_NextQuarterMean60DaysAgo';
	/**
	 * Constant for value 'EarningsEstimatesConsensusTrend_NextQuarterMean90DaysAgo'
	 * @return string 'EarningsEstimatesConsensusTrend_NextQuarterMean90DaysAgo'
	 */
	const VALUE_EARNINGSESTIMATESCONSENSUSTREND_NEXTQUARTERMEAN90DAYSAGO = 'EarningsEstimatesConsensusTrend_NextQuarterMean90DaysAgo';
	/**
	 * Constant for value 'EarningsEstimatesConsensusTrend_CurrentFiscalYearEndDate'
	 * @return string 'EarningsEstimatesConsensusTrend_CurrentFiscalYearEndDate'
	 */
	const VALUE_EARNINGSESTIMATESCONSENSUSTREND_CURRENTFISCALYEARENDDATE = 'EarningsEstimatesConsensusTrend_CurrentFiscalYearEndDate';
	/**
	 * Constant for value 'EarningsEstimatesConsensusTrend_CurrentFiscalYearMeanCurrent'
	 * @return string 'EarningsEstimatesConsensusTrend_CurrentFiscalYearMeanCurrent'
	 */
	const VALUE_EARNINGSESTIMATESCONSENSUSTREND_CURRENTFISCALYEARMEANCURRENT = 'EarningsEstimatesConsensusTrend_CurrentFiscalYearMeanCurrent';
	/**
	 * Constant for value 'EarningsEstimatesConsensusTrend_CurrentFiscalYearMean7DaysAgo'
	 * @return string 'EarningsEstimatesConsensusTrend_CurrentFiscalYearMean7DaysAgo'
	 */
	const VALUE_EARNINGSESTIMATESCONSENSUSTREND_CURRENTFISCALYEARMEAN7DAYSAGO = 'EarningsEstimatesConsensusTrend_CurrentFiscalYearMean7DaysAgo';
	/**
	 * Constant for value 'EarningsEstimatesConsensusTrend_CurrentFiscalYearMean30DaysAgo'
	 * @return string 'EarningsEstimatesConsensusTrend_CurrentFiscalYearMean30DaysAgo'
	 */
	const VALUE_EARNINGSESTIMATESCONSENSUSTREND_CURRENTFISCALYEARMEAN30DAYSAGO = 'EarningsEstimatesConsensusTrend_CurrentFiscalYearMean30DaysAgo';
	/**
	 * Constant for value 'EarningsEstimatesConsensusTrend_CurrentFiscalYearMean60DaysAgo'
	 * @return string 'EarningsEstimatesConsensusTrend_CurrentFiscalYearMean60DaysAgo'
	 */
	const VALUE_EARNINGSESTIMATESCONSENSUSTREND_CURRENTFISCALYEARMEAN60DAYSAGO = 'EarningsEstimatesConsensusTrend_CurrentFiscalYearMean60DaysAgo';
	/**
	 * Constant for value 'EarningsEstimatesConsensusTrend_CurrentFiscalYearMean90DaysAgo'
	 * @return string 'EarningsEstimatesConsensusTrend_CurrentFiscalYearMean90DaysAgo'
	 */
	const VALUE_EARNINGSESTIMATESCONSENSUSTREND_CURRENTFISCALYEARMEAN90DAYSAGO = 'EarningsEstimatesConsensusTrend_CurrentFiscalYearMean90DaysAgo';
	/**
	 * Constant for value 'EarningsEstimatesConsensusTrend_NextFiscalYearEndDate'
	 * @return string 'EarningsEstimatesConsensusTrend_NextFiscalYearEndDate'
	 */
	const VALUE_EARNINGSESTIMATESCONSENSUSTREND_NEXTFISCALYEARENDDATE = 'EarningsEstimatesConsensusTrend_NextFiscalYearEndDate';
	/**
	 * Constant for value 'EarningsEstimatesConsensusTrend_NextFiscalYearMeanCurrent'
	 * @return string 'EarningsEstimatesConsensusTrend_NextFiscalYearMeanCurrent'
	 */
	const VALUE_EARNINGSESTIMATESCONSENSUSTREND_NEXTFISCALYEARMEANCURRENT = 'EarningsEstimatesConsensusTrend_NextFiscalYearMeanCurrent';
	/**
	 * Constant for value 'EarningsEstimatesConsensusTrend_NextFiscalYearMean7DaysAgo'
	 * @return string 'EarningsEstimatesConsensusTrend_NextFiscalYearMean7DaysAgo'
	 */
	const VALUE_EARNINGSESTIMATESCONSENSUSTREND_NEXTFISCALYEARMEAN7DAYSAGO = 'EarningsEstimatesConsensusTrend_NextFiscalYearMean7DaysAgo';
	/**
	 * Constant for value 'EarningsEstimatesConsensusTrend_NextFiscalYearMean30DaysAgo'
	 * @return string 'EarningsEstimatesConsensusTrend_NextFiscalYearMean30DaysAgo'
	 */
	const VALUE_EARNINGSESTIMATESCONSENSUSTREND_NEXTFISCALYEARMEAN30DAYSAGO = 'EarningsEstimatesConsensusTrend_NextFiscalYearMean30DaysAgo';
	/**
	 * Constant for value 'EarningsEstimatesConsensusTrend_NextFiscalYearMean60DaysAgo'
	 * @return string 'EarningsEstimatesConsensusTrend_NextFiscalYearMean60DaysAgo'
	 */
	const VALUE_EARNINGSESTIMATESCONSENSUSTREND_NEXTFISCALYEARMEAN60DAYSAGO = 'EarningsEstimatesConsensusTrend_NextFiscalYearMean60DaysAgo';
	/**
	 * Constant for value 'EarningsEstimatesConsensusTrend_NextFiscalYearMean90DaysAgo'
	 * @return string 'EarningsEstimatesConsensusTrend_NextFiscalYearMean90DaysAgo'
	 */
	const VALUE_EARNINGSESTIMATESCONSENSUSTREND_NEXTFISCALYEARMEAN90DAYSAGO = 'EarningsEstimatesConsensusTrend_NextFiscalYearMean90DaysAgo';
	/**
	 * Constant for value 'EarningsEstimatesConsensusTrend_LongTermGrowthMeanCurrent'
	 * @return string 'EarningsEstimatesConsensusTrend_LongTermGrowthMeanCurrent'
	 */
	const VALUE_EARNINGSESTIMATESCONSENSUSTREND_LONGTERMGROWTHMEANCURRENT = 'EarningsEstimatesConsensusTrend_LongTermGrowthMeanCurrent';
	/**
	 * Constant for value 'EarningsEstimatesConsensusTrend_LongTermGrowthMean7DaysAgo'
	 * @return string 'EarningsEstimatesConsensusTrend_LongTermGrowthMean7DaysAgo'
	 */
	const VALUE_EARNINGSESTIMATESCONSENSUSTREND_LONGTERMGROWTHMEAN7DAYSAGO = 'EarningsEstimatesConsensusTrend_LongTermGrowthMean7DaysAgo';
	/**
	 * Constant for value 'EarningsEstimatesConsensusTrend_LongTermGrowthMean30DaysAgo'
	 * @return string 'EarningsEstimatesConsensusTrend_LongTermGrowthMean30DaysAgo'
	 */
	const VALUE_EARNINGSESTIMATESCONSENSUSTREND_LONGTERMGROWTHMEAN30DAYSAGO = 'EarningsEstimatesConsensusTrend_LongTermGrowthMean30DaysAgo';
	/**
	 * Constant for value 'EarningsEstimatesConsensusTrend_LongTermGrowthMean60DaysAgo'
	 * @return string 'EarningsEstimatesConsensusTrend_LongTermGrowthMean60DaysAgo'
	 */
	const VALUE_EARNINGSESTIMATESCONSENSUSTREND_LONGTERMGROWTHMEAN60DAYSAGO = 'EarningsEstimatesConsensusTrend_LongTermGrowthMean60DaysAgo';
	/**
	 * Constant for value 'EarningsEstimatesConsensusTrend_LongTermGrowthMean90DaysAgo'
	 * @return string 'EarningsEstimatesConsensusTrend_LongTermGrowthMean90DaysAgo'
	 */
	const VALUE_EARNINGSESTIMATESCONSENSUSTREND_LONGTERMGROWTHMEAN90DAYSAGO = 'EarningsEstimatesConsensusTrend_LongTermGrowthMean90DaysAgo';
	/**
	 * Constant for value 'EarningsSurprise_MostRecentQuarterEndDate'
	 * @return string 'EarningsSurprise_MostRecentQuarterEndDate'
	 */
	const VALUE_EARNINGSSURPRISE_MOSTRECENTQUARTERENDDATE = 'EarningsSurprise_MostRecentQuarterEndDate';
	/**
	 * Constant for value 'EarningsSurprise_EstimatedEarningsPerShareForMostRecentQuarter'
	 * @return string 'EarningsSurprise_EstimatedEarningsPerShareForMostRecentQuarter'
	 */
	const VALUE_EARNINGSSURPRISE_ESTIMATEDEARNINGSPERSHAREFORMOSTRECENTQUARTER = 'EarningsSurprise_EstimatedEarningsPerShareForMostRecentQuarter';
	/**
	 * Constant for value 'EarningsSurprise_ActualEarningsPerShareForMostRecentQuarter'
	 * @return string 'EarningsSurprise_ActualEarningsPerShareForMostRecentQuarter'
	 */
	const VALUE_EARNINGSSURPRISE_ACTUALEARNINGSPERSHAREFORMOSTRECENTQUARTER = 'EarningsSurprise_ActualEarningsPerShareForMostRecentQuarter';
	/**
	 * Constant for value 'EarningsSurprise_MostRecentQuarterDifference'
	 * @return string 'EarningsSurprise_MostRecentQuarterDifference'
	 */
	const VALUE_EARNINGSSURPRISE_MOSTRECENTQUARTERDIFFERENCE = 'EarningsSurprise_MostRecentQuarterDifference';
	/**
	 * Constant for value 'EarningsSurprise_MostRecentQuarterSurprisePercent'
	 * @return string 'EarningsSurprise_MostRecentQuarterSurprisePercent'
	 */
	const VALUE_EARNINGSSURPRISE_MOSTRECENTQUARTERSURPRISEPERCENT = 'EarningsSurprise_MostRecentQuarterSurprisePercent';
	/**
	 * Constant for value 'EarningsSurprise_OneQuarterPriorEndDate'
	 * @return string 'EarningsSurprise_OneQuarterPriorEndDate'
	 */
	const VALUE_EARNINGSSURPRISE_ONEQUARTERPRIORENDDATE = 'EarningsSurprise_OneQuarterPriorEndDate';
	/**
	 * Constant for value 'EarningsSurprise_EstimatedEarningsPerShareForOneQuarterPrior'
	 * @return string 'EarningsSurprise_EstimatedEarningsPerShareForOneQuarterPrior'
	 */
	const VALUE_EARNINGSSURPRISE_ESTIMATEDEARNINGSPERSHAREFORONEQUARTERPRIOR = 'EarningsSurprise_EstimatedEarningsPerShareForOneQuarterPrior';
	/**
	 * Constant for value 'EarningsSurprise_ActualEarningsPerShareForOneQuarterPrior'
	 * @return string 'EarningsSurprise_ActualEarningsPerShareForOneQuarterPrior'
	 */
	const VALUE_EARNINGSSURPRISE_ACTUALEARNINGSPERSHAREFORONEQUARTERPRIOR = 'EarningsSurprise_ActualEarningsPerShareForOneQuarterPrior';
	/**
	 * Constant for value 'EarningsSurprise_OneQuarterPriorDifference'
	 * @return string 'EarningsSurprise_OneQuarterPriorDifference'
	 */
	const VALUE_EARNINGSSURPRISE_ONEQUARTERPRIORDIFFERENCE = 'EarningsSurprise_OneQuarterPriorDifference';
	/**
	 * Constant for value 'EarningsSurprise_OneQuarterPriorSurprisePercent'
	 * @return string 'EarningsSurprise_OneQuarterPriorSurprisePercent'
	 */
	const VALUE_EARNINGSSURPRISE_ONEQUARTERPRIORSURPRISEPERCENT = 'EarningsSurprise_OneQuarterPriorSurprisePercent';
	/**
	 * Constant for value 'EarningsSurprise_TwoQuartersPriorEndDate'
	 * @return string 'EarningsSurprise_TwoQuartersPriorEndDate'
	 */
	const VALUE_EARNINGSSURPRISE_TWOQUARTERSPRIORENDDATE = 'EarningsSurprise_TwoQuartersPriorEndDate';
	/**
	 * Constant for value 'EarningsSurprise_EstimatedEarningsPerShareForTwoQuartersPrior'
	 * @return string 'EarningsSurprise_EstimatedEarningsPerShareForTwoQuartersPrior'
	 */
	const VALUE_EARNINGSSURPRISE_ESTIMATEDEARNINGSPERSHAREFORTWOQUARTERSPRIOR = 'EarningsSurprise_EstimatedEarningsPerShareForTwoQuartersPrior';
	/**
	 * Constant for value 'EarningsSurprise_ActualEarningsPerShareForTwoQuartersPrior'
	 * @return string 'EarningsSurprise_ActualEarningsPerShareForTwoQuartersPrior'
	 */
	const VALUE_EARNINGSSURPRISE_ACTUALEARNINGSPERSHAREFORTWOQUARTERSPRIOR = 'EarningsSurprise_ActualEarningsPerShareForTwoQuartersPrior';
	/**
	 * Constant for value 'EarningsSurprise_TwoQuartersPriorDifference'
	 * @return string 'EarningsSurprise_TwoQuartersPriorDifference'
	 */
	const VALUE_EARNINGSSURPRISE_TWOQUARTERSPRIORDIFFERENCE = 'EarningsSurprise_TwoQuartersPriorDifference';
	/**
	 * Constant for value 'EarningsSurprise_TwoQuartersPriorSurprisePercent'
	 * @return string 'EarningsSurprise_TwoQuartersPriorSurprisePercent'
	 */
	const VALUE_EARNINGSSURPRISE_TWOQUARTERSPRIORSURPRISEPERCENT = 'EarningsSurprise_TwoQuartersPriorSurprisePercent';
	/**
	 * Constant for value 'EarningsSurprise_ThreeQuartersPriorEndDate'
	 * @return string 'EarningsSurprise_ThreeQuartersPriorEndDate'
	 */
	const VALUE_EARNINGSSURPRISE_THREEQUARTERSPRIORENDDATE = 'EarningsSurprise_ThreeQuartersPriorEndDate';
	/**
	 * Constant for value 'EarningsSurprise_EstimatedEarningsPerShareForThreeQuartersPrior'
	 * @return string 'EarningsSurprise_EstimatedEarningsPerShareForThreeQuartersPrior'
	 */
	const VALUE_EARNINGSSURPRISE_ESTIMATEDEARNINGSPERSHAREFORTHREEQUARTERSPRIOR = 'EarningsSurprise_EstimatedEarningsPerShareForThreeQuartersPrior';
	/**
	 * Constant for value 'EarningsSurprise_ActualEarningsPerShareForThreeQuartersPrior'
	 * @return string 'EarningsSurprise_ActualEarningsPerShareForThreeQuartersPrior'
	 */
	const VALUE_EARNINGSSURPRISE_ACTUALEARNINGSPERSHAREFORTHREEQUARTERSPRIOR = 'EarningsSurprise_ActualEarningsPerShareForThreeQuartersPrior';
	/**
	 * Constant for value 'EarningsSurprise_ThreeQuartersPriorDifference'
	 * @return string 'EarningsSurprise_ThreeQuartersPriorDifference'
	 */
	const VALUE_EARNINGSSURPRISE_THREEQUARTERSPRIORDIFFERENCE = 'EarningsSurprise_ThreeQuartersPriorDifference';
	/**
	 * Constant for value 'EarningsSurprise_ThreeQuartersPriorSurprisePercent'
	 * @return string 'EarningsSurprise_ThreeQuartersPriorSurprisePercent'
	 */
	const VALUE_EARNINGSSURPRISE_THREEQUARTERSPRIORSURPRISEPERCENT = 'EarningsSurprise_ThreeQuartersPriorSurprisePercent';
	/**
	 * Constant for value 'EarningsSurprise_FourQuartersPriorEndDate'
	 * @return string 'EarningsSurprise_FourQuartersPriorEndDate'
	 */
	const VALUE_EARNINGSSURPRISE_FOURQUARTERSPRIORENDDATE = 'EarningsSurprise_FourQuartersPriorEndDate';
	/**
	 * Constant for value 'EarningsSurprise_EstimatedEarningsPerShareForFourQuartersPrior'
	 * @return string 'EarningsSurprise_EstimatedEarningsPerShareForFourQuartersPrior'
	 */
	const VALUE_EARNINGSSURPRISE_ESTIMATEDEARNINGSPERSHAREFORFOURQUARTERSPRIOR = 'EarningsSurprise_EstimatedEarningsPerShareForFourQuartersPrior';
	/**
	 * Constant for value 'EarningsSurprise_ActualEarningsPerShareForFourQuartersPrior'
	 * @return string 'EarningsSurprise_ActualEarningsPerShareForFourQuartersPrior'
	 */
	const VALUE_EARNINGSSURPRISE_ACTUALEARNINGSPERSHAREFORFOURQUARTERSPRIOR = 'EarningsSurprise_ActualEarningsPerShareForFourQuartersPrior';
	/**
	 * Constant for value 'EarningsSurprise_FourQuartersPriorDifference'
	 * @return string 'EarningsSurprise_FourQuartersPriorDifference'
	 */
	const VALUE_EARNINGSSURPRISE_FOURQUARTERSPRIORDIFFERENCE = 'EarningsSurprise_FourQuartersPriorDifference';
	/**
	 * Constant for value 'EarningsSurprise_FourQuartersPriorSurprisePercent'
	 * @return string 'EarningsSurprise_FourQuartersPriorSurprisePercent'
	 */
	const VALUE_EARNINGSSURPRISE_FOURQUARTERSPRIORSURPRISEPERCENT = 'EarningsSurprise_FourQuartersPriorSurprisePercent';
	/**
	 * Constant for value 'EPSGrowthRates_FileProductionDate'
	 * @return string 'EPSGrowthRates_FileProductionDate'
	 */
	const VALUE_EPSGROWTHRATES_FILEPRODUCTIONDATE = 'EPSGrowthRates_FileProductionDate';
	/**
	 * Constant for value 'EPSGrowthRates_ZacksIndustryGroupNumber'
	 * @return string 'EPSGrowthRates_ZacksIndustryGroupNumber'
	 */
	const VALUE_EPSGROWTHRATES_ZACKSINDUSTRYGROUPNUMBER = 'EPSGrowthRates_ZacksIndustryGroupNumber';
	/**
	 * Constant for value 'EPSGrowthRates_ZacksIndustryGroupName'
	 * @return string 'EPSGrowthRates_ZacksIndustryGroupName'
	 */
	const VALUE_EPSGROWTHRATES_ZACKSINDUSTRYGROUPNAME = 'EPSGrowthRates_ZacksIndustryGroupName';
	/**
	 * Constant for value 'EPSGrowthRates_CompanyIndustryCurrentFiscalYearEnd'
	 * @return string 'EPSGrowthRates_CompanyIndustryCurrentFiscalYearEnd'
	 */
	const VALUE_EPSGROWTHRATES_COMPANYINDUSTRYCURRENTFISCALYEAREND = 'EPSGrowthRates_CompanyIndustryCurrentFiscalYearEnd';
	/**
	 * Constant for value 'EPSGrowthRates_CompanyIndustryNextFiscalYearEnd'
	 * @return string 'EPSGrowthRates_CompanyIndustryNextFiscalYearEnd'
	 */
	const VALUE_EPSGROWTHRATES_COMPANYINDUSTRYNEXTFISCALYEAREND = 'EPSGrowthRates_CompanyIndustryNextFiscalYearEnd';
	/**
	 * Constant for value 'EPSGrowthRates_CompanyIndustrySecondFiscalYearEnd'
	 * @return string 'EPSGrowthRates_CompanyIndustrySecondFiscalYearEnd'
	 */
	const VALUE_EPSGROWTHRATES_COMPANYINDUSTRYSECONDFISCALYEAREND = 'EPSGrowthRates_CompanyIndustrySecondFiscalYearEnd';
	/**
	 * Constant for value 'EPSGrowthRates_CompanyLast5YearActualPercentageGrowth'
	 * @return string 'EPSGrowthRates_CompanyLast5YearActualPercentageGrowth'
	 */
	const VALUE_EPSGROWTHRATES_COMPANYLAST5YEARACTUALPERCENTAGEGROWTH = 'EPSGrowthRates_CompanyLast5YearActualPercentageGrowth';
	/**
	 * Constant for value 'EPSGrowthRates_CompanyNextFiscalYearDividedByCurrentFiscalYearPercentage'
	 * @return string 'EPSGrowthRates_CompanyNextFiscalYearDividedByCurrentFiscalYearPercentage'
	 */
	const VALUE_EPSGROWTHRATES_COMPANYNEXTFISCALYEARDIVIDEDBYCURRENTFISCALYEARPERCENTAGE = 'EPSGrowthRates_CompanyNextFiscalYearDividedByCurrentFiscalYearPercentage';
	/**
	 * Constant for value 'EPSGrowthRates_CompanySecondFiscalYearDividedByNextFiscalYearPercentage'
	 * @return string 'EPSGrowthRates_CompanySecondFiscalYearDividedByNextFiscalYearPercentage'
	 */
	const VALUE_EPSGROWTHRATES_COMPANYSECONDFISCALYEARDIVIDEDBYNEXTFISCALYEARPERCENTAGE = 'EPSGrowthRates_CompanySecondFiscalYearDividedByNextFiscalYearPercentage';
	/**
	 * Constant for value 'EPSGrowthRates_CompanyLongTermGrowthRate'
	 * @return string 'EPSGrowthRates_CompanyLongTermGrowthRate'
	 */
	const VALUE_EPSGROWTHRATES_COMPANYLONGTERMGROWTHRATE = 'EPSGrowthRates_CompanyLongTermGrowthRate';
	/**
	 * Constant for value 'EPSGrowthRates_CompanyNextFiscalYearPERatio'
	 * @return string 'EPSGrowthRates_CompanyNextFiscalYearPERatio'
	 */
	const VALUE_EPSGROWTHRATES_COMPANYNEXTFISCALYEARPERATIO = 'EPSGrowthRates_CompanyNextFiscalYearPERatio';
	/**
	 * Constant for value 'EPSGrowthRates_IndustryLast5YearActualPercentGrowth'
	 * @return string 'EPSGrowthRates_IndustryLast5YearActualPercentGrowth'
	 */
	const VALUE_EPSGROWTHRATES_INDUSTRYLAST5YEARACTUALPERCENTGROWTH = 'EPSGrowthRates_IndustryLast5YearActualPercentGrowth';
	/**
	 * Constant for value 'EPSGrowthRates_IndustryNextFiscalYearDividedByCurrentFiscalYearPercentPercentage'
	 * @return string 'EPSGrowthRates_IndustryNextFiscalYearDividedByCurrentFiscalYearPercentPercentage'
	 */
	const VALUE_EPSGROWTHRATES_INDUSTRYNEXTFISCALYEARDIVIDEDBYCURRENTFISCALYEARPERCENTPERCENTAGE = 'EPSGrowthRates_IndustryNextFiscalYearDividedByCurrentFiscalYearPercentPercentage';
	/**
	 * Constant for value 'EPSGrowthRates_IndustrySecondFiscalYearDividedByNextFiscalYearPercentage'
	 * @return string 'EPSGrowthRates_IndustrySecondFiscalYearDividedByNextFiscalYearPercentage'
	 */
	const VALUE_EPSGROWTHRATES_INDUSTRYSECONDFISCALYEARDIVIDEDBYNEXTFISCALYEARPERCENTAGE = 'EPSGrowthRates_IndustrySecondFiscalYearDividedByNextFiscalYearPercentage';
	/**
	 * Constant for value 'EPSGrowthRates_IndustryLongTermGrowthRate'
	 * @return string 'EPSGrowthRates_IndustryLongTermGrowthRate'
	 */
	const VALUE_EPSGROWTHRATES_INDUSTRYLONGTERMGROWTHRATE = 'EPSGrowthRates_IndustryLongTermGrowthRate';
	/**
	 * Constant for value 'EPSGrowthRates_IndustryNextFiscalYearPERatio'
	 * @return string 'EPSGrowthRates_IndustryNextFiscalYearPERatio'
	 */
	const VALUE_EPSGROWTHRATES_INDUSTRYNEXTFISCALYEARPERATIO = 'EPSGrowthRates_IndustryNextFiscalYearPERatio';
	/**
	 * Constant for value 'EPSGrowthRates_SP500Last5YearActualPercentGrowth'
	 * @return string 'EPSGrowthRates_SP500Last5YearActualPercentGrowth'
	 */
	const VALUE_EPSGROWTHRATES_SP500LAST5YEARACTUALPERCENTGROWTH = 'EPSGrowthRates_SP500Last5YearActualPercentGrowth';
	/**
	 * Constant for value 'EPSGrowthRates_SP500NextFiscalYearDividedByCurrentFiscalYearPercentPercentage'
	 * @return string 'EPSGrowthRates_SP500NextFiscalYearDividedByCurrentFiscalYearPercentPercentage'
	 */
	const VALUE_EPSGROWTHRATES_SP500NEXTFISCALYEARDIVIDEDBYCURRENTFISCALYEARPERCENTPERCENTAGE = 'EPSGrowthRates_SP500NextFiscalYearDividedByCurrentFiscalYearPercentPercentage';
	/**
	 * Constant for value 'EPSGrowthRates_SP500SecondFiscalYearDividedByNextFiscalYearPercentage'
	 * @return string 'EPSGrowthRates_SP500SecondFiscalYearDividedByNextFiscalYearPercentage'
	 */
	const VALUE_EPSGROWTHRATES_SP500SECONDFISCALYEARDIVIDEDBYNEXTFISCALYEARPERCENTAGE = 'EPSGrowthRates_SP500SecondFiscalYearDividedByNextFiscalYearPercentage';
	/**
	 * Constant for value 'EPSGrowthRates_SP500LongTermGrowthRate'
	 * @return string 'EPSGrowthRates_SP500LongTermGrowthRate'
	 */
	const VALUE_EPSGROWTHRATES_SP500LONGTERMGROWTHRATE = 'EPSGrowthRates_SP500LongTermGrowthRate';
	/**
	 * Constant for value 'EPSGrowthRates_SP500NextFiscalYearPERatio'
	 * @return string 'EPSGrowthRates_SP500NextFiscalYearPERatio'
	 */
	const VALUE_EPSGROWTHRATES_SP500NEXTFISCALYEARPERATIO = 'EPSGrowthRates_SP500NextFiscalYearPERatio';
	/**
	 * Constant for value 'SectorAnalysis_FileProductionDate'
	 * @return string 'SectorAnalysis_FileProductionDate'
	 */
	const VALUE_SECTORANALYSIS_FILEPRODUCTIONDATE = 'SectorAnalysis_FileProductionDate';
	/**
	 * Constant for value 'SectorAnalysis_Price'
	 * @return string 'SectorAnalysis_Price'
	 */
	const VALUE_SECTORANALYSIS_PRICE = 'SectorAnalysis_Price';
	/**
	 * Constant for value 'SectorAnalysis_CurrentFiscalYearCompanyFiscalYearEnd'
	 * @return string 'SectorAnalysis_CurrentFiscalYearCompanyFiscalYearEnd'
	 */
	const VALUE_SECTORANALYSIS_CURRENTFISCALYEARCOMPANYFISCALYEAREND = 'SectorAnalysis_CurrentFiscalYearCompanyFiscalYearEnd';
	/**
	 * Constant for value 'SectorAnalysis_CurrentQuarterCompanyFiscalQuarterEnd'
	 * @return string 'SectorAnalysis_CurrentQuarterCompanyFiscalQuarterEnd'
	 */
	const VALUE_SECTORANALYSIS_CURRENTQUARTERCOMPANYFISCALQUARTEREND = 'SectorAnalysis_CurrentQuarterCompanyFiscalQuarterEnd';
	/**
	 * Constant for value 'SectorAnalysis_IndustrySectorFiscalYearEndForCalculations'
	 * @return string 'SectorAnalysis_IndustrySectorFiscalYearEndForCalculations'
	 */
	const VALUE_SECTORANALYSIS_INDUSTRYSECTORFISCALYEARENDFORCALCULATIONS = 'SectorAnalysis_IndustrySectorFiscalYearEndForCalculations';
	/**
	 * Constant for value 'SectorAnalysis_IndustryName'
	 * @return string 'SectorAnalysis_IndustryName'
	 */
	const VALUE_SECTORANALYSIS_INDUSTRYNAME = 'SectorAnalysis_IndustryName';
	/**
	 * Constant for value 'SectorAnalysis_SectorName'
	 * @return string 'SectorAnalysis_SectorName'
	 */
	const VALUE_SECTORANALYSIS_SECTORNAME = 'SectorAnalysis_SectorName';
	/**
	 * Constant for value 'SectorAnalysis_MeanEstimateCompanyCurrentFiscalYear'
	 * @return string 'SectorAnalysis_MeanEstimateCompanyCurrentFiscalYear'
	 */
	const VALUE_SECTORANALYSIS_MEANESTIMATECOMPANYCURRENTFISCALYEAR = 'SectorAnalysis_MeanEstimateCompanyCurrentFiscalYear';
	/**
	 * Constant for value 'SectorAnalysis_MeanLongTermGrowthEstimateCompanyCurrentFiscalYear'
	 * @return string 'SectorAnalysis_MeanLongTermGrowthEstimateCompanyCurrentFiscalYear'
	 */
	const VALUE_SECTORANALYSIS_MEANLONGTERMGROWTHESTIMATECOMPANYCURRENTFISCALYEAR = 'SectorAnalysis_MeanLongTermGrowthEstimateCompanyCurrentFiscalYear';
	/**
	 * Constant for value 'SectorAnalysis_MeanRecommendationCompany'
	 * @return string 'SectorAnalysis_MeanRecommendationCompany'
	 */
	const VALUE_SECTORANALYSIS_MEANRECOMMENDATIONCOMPANY = 'SectorAnalysis_MeanRecommendationCompany';
	/**
	 * Constant for value 'SectorAnalysis_PERatioCompanyPerCurrentFiscalYearMean'
	 * @return string 'SectorAnalysis_PERatioCompanyPerCurrentFiscalYearMean'
	 */
	const VALUE_SECTORANALYSIS_PERATIOCOMPANYPERCURRENTFISCALYEARMEAN = 'SectorAnalysis_PERatioCompanyPerCurrentFiscalYearMean';
	/**
	 * Constant for value 'SectorAnalysis_CurrentFiscalYearPriceEarningsGrowthCompanyCurrentFiscalYear'
	 * @return string 'SectorAnalysis_CurrentFiscalYearPriceEarningsGrowthCompanyCurrentFiscalYear'
	 */
	const VALUE_SECTORANALYSIS_CURRENTFISCALYEARPRICEEARNINGSGROWTHCOMPANYCURRENTFISCALYEAR = 'SectorAnalysis_CurrentFiscalYearPriceEarningsGrowthCompanyCurrentFiscalYear';
	/**
	 * Constant for value 'SectorAnalysis_ThreeQuartersPriorActualIndustry'
	 * @return string 'SectorAnalysis_ThreeQuartersPriorActualIndustry'
	 */
	const VALUE_SECTORANALYSIS_THREEQUARTERSPRIORACTUALINDUSTRY = 'SectorAnalysis_ThreeQuartersPriorActualIndustry';
	/**
	 * Constant for value 'SectorAnalysis_TwoQuartersPriorActualIndustry'
	 * @return string 'SectorAnalysis_TwoQuartersPriorActualIndustry'
	 */
	const VALUE_SECTORANALYSIS_TWOQUARTERSPRIORACTUALINDUSTRY = 'SectorAnalysis_TwoQuartersPriorActualIndustry';
	/**
	 * Constant for value 'SectorAnalysis_CurrentQuarterEstimateIndustry'
	 * @return string 'SectorAnalysis_CurrentQuarterEstimateIndustry'
	 */
	const VALUE_SECTORANALYSIS_CURRENTQUARTERESTIMATEINDUSTRY = 'SectorAnalysis_CurrentQuarterEstimateIndustry';
	/**
	 * Constant for value 'SectorAnalysis_NextQuarterEstimateIndustry'
	 * @return string 'SectorAnalysis_NextQuarterEstimateIndustry'
	 */
	const VALUE_SECTORANALYSIS_NEXTQUARTERESTIMATEINDUSTRY = 'SectorAnalysis_NextQuarterEstimateIndustry';
	/**
	 * Constant for value 'SectorAnalysis_IndustryMostRecentFiscalYearActualIndustry'
	 * @return string 'SectorAnalysis_IndustryMostRecentFiscalYearActualIndustry'
	 */
	const VALUE_SECTORANALYSIS_INDUSTRYMOSTRECENTFISCALYEARACTUALINDUSTRY = 'SectorAnalysis_IndustryMostRecentFiscalYearActualIndustry';
	/**
	 * Constant for value 'SectorAnalysis_IndustryCurrentFiscalYearEstimateIndustry'
	 * @return string 'SectorAnalysis_IndustryCurrentFiscalYearEstimateIndustry'
	 */
	const VALUE_SECTORANALYSIS_INDUSTRYCURRENTFISCALYEARESTIMATEINDUSTRY = 'SectorAnalysis_IndustryCurrentFiscalYearEstimateIndustry';
	/**
	 * Constant for value 'SectorAnalysis_IndustryNextFiscalYearEstimateIndustry'
	 * @return string 'SectorAnalysis_IndustryNextFiscalYearEstimateIndustry'
	 */
	const VALUE_SECTORANALYSIS_INDUSTRYNEXTFISCALYEARESTIMATEINDUSTRY = 'SectorAnalysis_IndustryNextFiscalYearEstimateIndustry';
	/**
	 * Constant for value 'SectorAnalysis_MeanEstimateIndustryLongTermGrowth'
	 * @return string 'SectorAnalysis_MeanEstimateIndustryLongTermGrowth'
	 */
	const VALUE_SECTORANALYSIS_MEANESTIMATEINDUSTRYLONGTERMGROWTH = 'SectorAnalysis_MeanEstimateIndustryLongTermGrowth';
	/**
	 * Constant for value 'SectorAnalysis_MeanRecommendationIndustry'
	 * @return string 'SectorAnalysis_MeanRecommendationIndustry'
	 */
	const VALUE_SECTORANALYSIS_MEANRECOMMENDATIONINDUSTRY = 'SectorAnalysis_MeanRecommendationIndustry';
	/**
	 * Constant for value 'SectorAnalysis_PERatioIndustryPerIndustryNextFiscalYearMean'
	 * @return string 'SectorAnalysis_PERatioIndustryPerIndustryNextFiscalYearMean'
	 */
	const VALUE_SECTORANALYSIS_PERATIOINDUSTRYPERINDUSTRYNEXTFISCALYEARMEAN = 'SectorAnalysis_PERatioIndustryPerIndustryNextFiscalYearMean';
	/**
	 * Constant for value 'SectorAnalysis_CurrentFiscalYearPriceEarningsGrowthIndustry'
	 * @return string 'SectorAnalysis_CurrentFiscalYearPriceEarningsGrowthIndustry'
	 */
	const VALUE_SECTORANALYSIS_CURRENTFISCALYEARPRICEEARNINGSGROWTHINDUSTRY = 'SectorAnalysis_CurrentFiscalYearPriceEarningsGrowthIndustry';
	/**
	 * Constant for value 'SectorAnalysis_PercentDifferenceCurrentQuarterVsThreeQuartersPriorIndustry'
	 * @return string 'SectorAnalysis_PercentDifferenceCurrentQuarterVsThreeQuartersPriorIndustry'
	 */
	const VALUE_SECTORANALYSIS_PERCENTDIFFERENCECURRENTQUARTERVSTHREEQUARTERSPRIORINDUSTRY = 'SectorAnalysis_PercentDifferenceCurrentQuarterVsThreeQuartersPriorIndustry';
	/**
	 * Constant for value 'SectorAnalysis_PercentDifferenceNextQuarterVsTwoQuartersPriorIndustry'
	 * @return string 'SectorAnalysis_PercentDifferenceNextQuarterVsTwoQuartersPriorIndustry'
	 */
	const VALUE_SECTORANALYSIS_PERCENTDIFFERENCENEXTQUARTERVSTWOQUARTERSPRIORINDUSTRY = 'SectorAnalysis_PercentDifferenceNextQuarterVsTwoQuartersPriorIndustry';
	/**
	 * Constant for value 'SectorAnalysis_PercentDifferenceIndustryCurrentFiscalYearVsIndustryMostRecentFiscalYearIndustry'
	 * @return string 'SectorAnalysis_PercentDifferenceIndustryCurrentFiscalYearVsIndustryMostRecentFiscalYearIndustry'
	 */
	const VALUE_SECTORANALYSIS_PERCENTDIFFERENCEINDUSTRYCURRENTFISCALYEARVSINDUSTRYMOSTRECENTFISCALYEARINDUSTRY = 'SectorAnalysis_PercentDifferenceIndustryCurrentFiscalYearVsIndustryMostRecentFiscalYearIndustry';
	/**
	 * Constant for value 'SectorAnalysis_PercentDifferenceIndustryNextFiscalYearVsIndustryCurrentFiscalYearIndustry'
	 * @return string 'SectorAnalysis_PercentDifferenceIndustryNextFiscalYearVsIndustryCurrentFiscalYearIndustry'
	 */
	const VALUE_SECTORANALYSIS_PERCENTDIFFERENCEINDUSTRYNEXTFISCALYEARVSINDUSTRYCURRENTFISCALYEARINDUSTRY = 'SectorAnalysis_PercentDifferenceIndustryNextFiscalYearVsIndustryCurrentFiscalYearIndustry';
	/**
	 * Constant for value 'SectorAnalysis_ThreeQuartersPriorActualSector'
	 * @return string 'SectorAnalysis_ThreeQuartersPriorActualSector'
	 */
	const VALUE_SECTORANALYSIS_THREEQUARTERSPRIORACTUALSECTOR = 'SectorAnalysis_ThreeQuartersPriorActualSector';
	/**
	 * Constant for value 'SectorAnalysis_TwoQuartersPriorActualSector'
	 * @return string 'SectorAnalysis_TwoQuartersPriorActualSector'
	 */
	const VALUE_SECTORANALYSIS_TWOQUARTERSPRIORACTUALSECTOR = 'SectorAnalysis_TwoQuartersPriorActualSector';
	/**
	 * Constant for value 'SectorAnalysis_CurrentQuarterEstimateSector'
	 * @return string 'SectorAnalysis_CurrentQuarterEstimateSector'
	 */
	const VALUE_SECTORANALYSIS_CURRENTQUARTERESTIMATESECTOR = 'SectorAnalysis_CurrentQuarterEstimateSector';
	/**
	 * Constant for value 'SectorAnalysis_NextQuarterEstimateSector'
	 * @return string 'SectorAnalysis_NextQuarterEstimateSector'
	 */
	const VALUE_SECTORANALYSIS_NEXTQUARTERESTIMATESECTOR = 'SectorAnalysis_NextQuarterEstimateSector';
	/**
	 * Constant for value 'SectorAnalysis_IndustryMostRecentFiscalYearActualSector'
	 * @return string 'SectorAnalysis_IndustryMostRecentFiscalYearActualSector'
	 */
	const VALUE_SECTORANALYSIS_INDUSTRYMOSTRECENTFISCALYEARACTUALSECTOR = 'SectorAnalysis_IndustryMostRecentFiscalYearActualSector';
	/**
	 * Constant for value 'SectorAnalysis_IndustryCurrentFiscalYearEstimateSector'
	 * @return string 'SectorAnalysis_IndustryCurrentFiscalYearEstimateSector'
	 */
	const VALUE_SECTORANALYSIS_INDUSTRYCURRENTFISCALYEARESTIMATESECTOR = 'SectorAnalysis_IndustryCurrentFiscalYearEstimateSector';
	/**
	 * Constant for value 'SectorAnalysis_IndustryNextFiscalYearEstimateSector'
	 * @return string 'SectorAnalysis_IndustryNextFiscalYearEstimateSector'
	 */
	const VALUE_SECTORANALYSIS_INDUSTRYNEXTFISCALYEARESTIMATESECTOR = 'SectorAnalysis_IndustryNextFiscalYearEstimateSector';
	/**
	 * Constant for value 'SectorAnalysis_MeanEstimateSectorLongTermGrowth'
	 * @return string 'SectorAnalysis_MeanEstimateSectorLongTermGrowth'
	 */
	const VALUE_SECTORANALYSIS_MEANESTIMATESECTORLONGTERMGROWTH = 'SectorAnalysis_MeanEstimateSectorLongTermGrowth';
	/**
	 * Constant for value 'SectorAnalysis_MeanRecommendationSector'
	 * @return string 'SectorAnalysis_MeanRecommendationSector'
	 */
	const VALUE_SECTORANALYSIS_MEANRECOMMENDATIONSECTOR = 'SectorAnalysis_MeanRecommendationSector';
	/**
	 * Constant for value 'SectorAnalysis_PERatioSectorPerIndustryCurrentFiscalYearMean'
	 * @return string 'SectorAnalysis_PERatioSectorPerIndustryCurrentFiscalYearMean'
	 */
	const VALUE_SECTORANALYSIS_PERATIOSECTORPERINDUSTRYCURRENTFISCALYEARMEAN = 'SectorAnalysis_PERatioSectorPerIndustryCurrentFiscalYearMean';
	/**
	 * Constant for value 'SectorAnalysis_CurrentFiscalYearPriceEarningsGrowthSector'
	 * @return string 'SectorAnalysis_CurrentFiscalYearPriceEarningsGrowthSector'
	 */
	const VALUE_SECTORANALYSIS_CURRENTFISCALYEARPRICEEARNINGSGROWTHSECTOR = 'SectorAnalysis_CurrentFiscalYearPriceEarningsGrowthSector';
	/**
	 * Constant for value 'SectorAnalysis_PercentDifferenceCurrentQuarterVsThreeQuartersPriorSector'
	 * @return string 'SectorAnalysis_PercentDifferenceCurrentQuarterVsThreeQuartersPriorSector'
	 */
	const VALUE_SECTORANALYSIS_PERCENTDIFFERENCECURRENTQUARTERVSTHREEQUARTERSPRIORSECTOR = 'SectorAnalysis_PercentDifferenceCurrentQuarterVsThreeQuartersPriorSector';
	/**
	 * Constant for value 'SectorAnalysis_PercentDifferenceNextQuarterVsTwoQuartersPriorSector'
	 * @return string 'SectorAnalysis_PercentDifferenceNextQuarterVsTwoQuartersPriorSector'
	 */
	const VALUE_SECTORANALYSIS_PERCENTDIFFERENCENEXTQUARTERVSTWOQUARTERSPRIORSECTOR = 'SectorAnalysis_PercentDifferenceNextQuarterVsTwoQuartersPriorSector';
	/**
	 * Constant for value 'SectorAnalysis_PercentDifferenceIndustryCurrentFiscalYearVsIndustryMostRecentFiscalYearSector'
	 * @return string 'SectorAnalysis_PercentDifferenceIndustryCurrentFiscalYearVsIndustryMostRecentFiscalYearSector'
	 */
	const VALUE_SECTORANALYSIS_PERCENTDIFFERENCEINDUSTRYCURRENTFISCALYEARVSINDUSTRYMOSTRECENTFISCALYEARSECTOR = 'SectorAnalysis_PercentDifferenceIndustryCurrentFiscalYearVsIndustryMostRecentFiscalYearSector';
	/**
	 * Constant for value 'SectorAnalysis_PercentDifferenceIndustryNextFiscalYearVsIndustryCurrentFiscalYearSector'
	 * @return string 'SectorAnalysis_PercentDifferenceIndustryNextFiscalYearVsIndustryCurrentFiscalYearSector'
	 */
	const VALUE_SECTORANALYSIS_PERCENTDIFFERENCEINDUSTRYNEXTFISCALYEARVSINDUSTRYCURRENTFISCALYEARSECTOR = 'SectorAnalysis_PercentDifferenceIndustryNextFiscalYearVsIndustryCurrentFiscalYearSector';
	/**
	 * Constant for value 'SectorAnalysis_ThreeQuartersPriorActualSP500'
	 * @return string 'SectorAnalysis_ThreeQuartersPriorActualSP500'
	 */
	const VALUE_SECTORANALYSIS_THREEQUARTERSPRIORACTUALSP500 = 'SectorAnalysis_ThreeQuartersPriorActualSP500';
	/**
	 * Constant for value 'SectorAnalysis_TwoQuartersPriorActualSP500'
	 * @return string 'SectorAnalysis_TwoQuartersPriorActualSP500'
	 */
	const VALUE_SECTORANALYSIS_TWOQUARTERSPRIORACTUALSP500 = 'SectorAnalysis_TwoQuartersPriorActualSP500';
	/**
	 * Constant for value 'SectorAnalysis_CurrentQuarterEstimateSP500'
	 * @return string 'SectorAnalysis_CurrentQuarterEstimateSP500'
	 */
	const VALUE_SECTORANALYSIS_CURRENTQUARTERESTIMATESP500 = 'SectorAnalysis_CurrentQuarterEstimateSP500';
	/**
	 * Constant for value 'SectorAnalysis_NextQuarterEstimateSP500'
	 * @return string 'SectorAnalysis_NextQuarterEstimateSP500'
	 */
	const VALUE_SECTORANALYSIS_NEXTQUARTERESTIMATESP500 = 'SectorAnalysis_NextQuarterEstimateSP500';
	/**
	 * Constant for value 'SectorAnalysis_MostRecentFiscalYearEstimateDividedByActualSP500'
	 * @return string 'SectorAnalysis_MostRecentFiscalYearEstimateDividedByActualSP500'
	 */
	const VALUE_SECTORANALYSIS_MOSTRECENTFISCALYEARESTIMATEDIVIDEDBYACTUALSP500 = 'SectorAnalysis_MostRecentFiscalYearEstimateDividedByActualSP500';
	/**
	 * Constant for value 'SectorAnalysis_CurrentFiscalYearEstimateSP500'
	 * @return string 'SectorAnalysis_CurrentFiscalYearEstimateSP500'
	 */
	const VALUE_SECTORANALYSIS_CURRENTFISCALYEARESTIMATESP500 = 'SectorAnalysis_CurrentFiscalYearEstimateSP500';
	/**
	 * Constant for value 'SectorAnalysis_NextFiscalYearEstimateSP500'
	 * @return string 'SectorAnalysis_NextFiscalYearEstimateSP500'
	 */
	const VALUE_SECTORANALYSIS_NEXTFISCALYEARESTIMATESP500 = 'SectorAnalysis_NextFiscalYearEstimateSP500';
	/**
	 * Constant for value 'SectorAnalysis_MeanEstimateSP500LongTermGrowth'
	 * @return string 'SectorAnalysis_MeanEstimateSP500LongTermGrowth'
	 */
	const VALUE_SECTORANALYSIS_MEANESTIMATESP500LONGTERMGROWTH = 'SectorAnalysis_MeanEstimateSP500LongTermGrowth';
	/**
	 * Constant for value 'SectorAnalysis_MeanRecommendationSP500'
	 * @return string 'SectorAnalysis_MeanRecommendationSP500'
	 */
	const VALUE_SECTORANALYSIS_MEANRECOMMENDATIONSP500 = 'SectorAnalysis_MeanRecommendationSP500';
	/**
	 * Constant for value 'SectorAnalysis_PERatioSP500PerCurrentFiscalYearMean'
	 * @return string 'SectorAnalysis_PERatioSP500PerCurrentFiscalYearMean'
	 */
	const VALUE_SECTORANALYSIS_PERATIOSP500PERCURRENTFISCALYEARMEAN = 'SectorAnalysis_PERatioSP500PerCurrentFiscalYearMean';
	/**
	 * Constant for value 'SectorAnalysis_CurrentFiscalYearPriceEarningsGrowthSP500'
	 * @return string 'SectorAnalysis_CurrentFiscalYearPriceEarningsGrowthSP500'
	 */
	const VALUE_SECTORANALYSIS_CURRENTFISCALYEARPRICEEARNINGSGROWTHSP500 = 'SectorAnalysis_CurrentFiscalYearPriceEarningsGrowthSP500';
	/**
	 * Constant for value 'SectorAnalysis_PercentDifferenceCurrentQuarterVsThreeQuartersPriorSP500'
	 * @return string 'SectorAnalysis_PercentDifferenceCurrentQuarterVsThreeQuartersPriorSP500'
	 */
	const VALUE_SECTORANALYSIS_PERCENTDIFFERENCECURRENTQUARTERVSTHREEQUARTERSPRIORSP500 = 'SectorAnalysis_PercentDifferenceCurrentQuarterVsThreeQuartersPriorSP500';
	/**
	 * Constant for value 'SectorAnalysis_PercentDifferrenceNextQuarterVsTwoQuartersPriorSP500'
	 * @return string 'SectorAnalysis_PercentDifferrenceNextQuarterVsTwoQuartersPriorSP500'
	 */
	const VALUE_SECTORANALYSIS_PERCENTDIFFERRENCENEXTQUARTERVSTWOQUARTERSPRIORSP500 = 'SectorAnalysis_PercentDifferrenceNextQuarterVsTwoQuartersPriorSP500';
	/**
	 * Constant for value 'SectorAnalysis_PercentDifferenceCurrentFiscalYearVsMostRecentFiscalYearSP500'
	 * @return string 'SectorAnalysis_PercentDifferenceCurrentFiscalYearVsMostRecentFiscalYearSP500'
	 */
	const VALUE_SECTORANALYSIS_PERCENTDIFFERENCECURRENTFISCALYEARVSMOSTRECENTFISCALYEARSP500 = 'SectorAnalysis_PercentDifferenceCurrentFiscalYearVsMostRecentFiscalYearSP500';
	/**
	 * Constant for value 'SectorAnalysis_PercentDifferenceNextFiscalYearVsCurrentFiscalYearSP500'
	 * @return string 'SectorAnalysis_PercentDifferenceNextFiscalYearVsCurrentFiscalYearSP500'
	 */
	const VALUE_SECTORANALYSIS_PERCENTDIFFERENCENEXTFISCALYEARVSCURRENTFISCALYEARSP500 = 'SectorAnalysis_PercentDifferenceNextFiscalYearVsCurrentFiscalYearSP500';
	/**
	 * Constant for value 'SectorAnalysis_FiveYearHistoricEarningsPerShareGrowthCompany'
	 * @return string 'SectorAnalysis_FiveYearHistoricEarningsPerShareGrowthCompany'
	 */
	const VALUE_SECTORANALYSIS_FIVEYEARHISTORICEARNINGSPERSHAREGROWTHCOMPANY = 'SectorAnalysis_FiveYearHistoricEarningsPerShareGrowthCompany';
	/**
	 * Constant for value 'SectorAnalysis_FiveYearHistoricEarningsPerShareGrowthIndustry'
	 * @return string 'SectorAnalysis_FiveYearHistoricEarningsPerShareGrowthIndustry'
	 */
	const VALUE_SECTORANALYSIS_FIVEYEARHISTORICEARNINGSPERSHAREGROWTHINDUSTRY = 'SectorAnalysis_FiveYearHistoricEarningsPerShareGrowthIndustry';
	/**
	 * Constant for value 'SectorAnalysis_FiveYearHistoricEarningsPerShareGrowthSector'
	 * @return string 'SectorAnalysis_FiveYearHistoricEarningsPerShareGrowthSector'
	 */
	const VALUE_SECTORANALYSIS_FIVEYEARHISTORICEARNINGSPERSHAREGROWTHSECTOR = 'SectorAnalysis_FiveYearHistoricEarningsPerShareGrowthSector';
	/**
	 * Constant for value 'SectorAnalysis_FiveYearHistoricEarningsPerShareGrowthSP500'
	 * @return string 'SectorAnalysis_FiveYearHistoricEarningsPerShareGrowthSP500'
	 */
	const VALUE_SECTORANALYSIS_FIVEYEARHISTORICEARNINGSPERSHAREGROWTHSP500 = 'SectorAnalysis_FiveYearHistoricEarningsPerShareGrowthSP500';
	/**
	 * Constant for value 'EPSEstimatesAndRecommendations_NumberOfBrokersRecommendingStock'
	 * @return string 'EPSEstimatesAndRecommendations_NumberOfBrokersRecommendingStock'
	 */
	const VALUE_EPSESTIMATESANDRECOMMENDATIONS_NUMBEROFBROKERSRECOMMENDINGSTOCK = 'EPSEstimatesAndRecommendations_NumberOfBrokersRecommendingStock';
	/**
	 * Constant for value 'EPSEstimatesAndRecommendations_NumberOfBrokersRecommendingStockAsAStrongBuy'
	 * @return string 'EPSEstimatesAndRecommendations_NumberOfBrokersRecommendingStockAsAStrongBuy'
	 */
	const VALUE_EPSESTIMATESANDRECOMMENDATIONS_NUMBEROFBROKERSRECOMMENDINGSTOCKASASTRONGBUY = 'EPSEstimatesAndRecommendations_NumberOfBrokersRecommendingStockAsAStrongBuy';
	/**
	 * Constant for value 'EPSEstimatesAndRecommendations_NumberOfBrokersRecommendingStockAsAModerateBuy'
	 * @return string 'EPSEstimatesAndRecommendations_NumberOfBrokersRecommendingStockAsAModerateBuy'
	 */
	const VALUE_EPSESTIMATESANDRECOMMENDATIONS_NUMBEROFBROKERSRECOMMENDINGSTOCKASAMODERATEBUY = 'EPSEstimatesAndRecommendations_NumberOfBrokersRecommendingStockAsAModerateBuy';
	/**
	 * Constant for value 'EPSEstimatesAndRecommendations_NumberOfBrokersRecommendingStockAsAHold'
	 * @return string 'EPSEstimatesAndRecommendations_NumberOfBrokersRecommendingStockAsAHold'
	 */
	const VALUE_EPSESTIMATESANDRECOMMENDATIONS_NUMBEROFBROKERSRECOMMENDINGSTOCKASAHOLD = 'EPSEstimatesAndRecommendations_NumberOfBrokersRecommendingStockAsAHold';
	/**
	 * Constant for value 'EPSEstimatesAndRecommendations_NumberOfBrokersRecommendingStockAsAModerateSell'
	 * @return string 'EPSEstimatesAndRecommendations_NumberOfBrokersRecommendingStockAsAModerateSell'
	 */
	const VALUE_EPSESTIMATESANDRECOMMENDATIONS_NUMBEROFBROKERSRECOMMENDINGSTOCKASAMODERATESELL = 'EPSEstimatesAndRecommendations_NumberOfBrokersRecommendingStockAsAModerateSell';
	/**
	 * Constant for value 'EPSEstimatesAndRecommendations_NumberOfBrokersRecommendingStockAsAStrongSell'
	 * @return string 'EPSEstimatesAndRecommendations_NumberOfBrokersRecommendingStockAsAStrongSell'
	 */
	const VALUE_EPSESTIMATESANDRECOMMENDATIONS_NUMBEROFBROKERSRECOMMENDINGSTOCKASASTRONGSELL = 'EPSEstimatesAndRecommendations_NumberOfBrokersRecommendingStockAsAStrongSell';
	/**
	 * Constant for value 'EPSEstimatesAndRecommendations_CurrentAverageRecommendation'
	 * @return string 'EPSEstimatesAndRecommendations_CurrentAverageRecommendation'
	 */
	const VALUE_EPSESTIMATESANDRECOMMENDATIONS_CURRENTAVERAGERECOMMENDATION = 'EPSEstimatesAndRecommendations_CurrentAverageRecommendation';
	/**
	 * Constant for value 'EPSEstimatesAndRecommendations_PreviousAverageRecommendation'
	 * @return string 'EPSEstimatesAndRecommendations_PreviousAverageRecommendation'
	 */
	const VALUE_EPSESTIMATESANDRECOMMENDATIONS_PREVIOUSAVERAGERECOMMENDATION = 'EPSEstimatesAndRecommendations_PreviousAverageRecommendation';
	/**
	 * Constant for value 'EPSEstimatesAndRecommendations_EarningsPerShareForMostRecentlyReportedQuarter'
	 * @return string 'EPSEstimatesAndRecommendations_EarningsPerShareForMostRecentlyReportedQuarter'
	 */
	const VALUE_EPSESTIMATESANDRECOMMENDATIONS_EARNINGSPERSHAREFORMOSTRECENTLYREPORTEDQUARTER = 'EPSEstimatesAndRecommendations_EarningsPerShareForMostRecentlyReportedQuarter';
	/**
	 * Constant for value 'EPSEstimatesAndRecommendations_PercentEarningsPerShareSurpriseForMostRecentlyReportedQuarter'
	 * @return string 'EPSEstimatesAndRecommendations_PercentEarningsPerShareSurpriseForMostRecentlyReportedQuarter'
	 */
	const VALUE_EPSESTIMATESANDRECOMMENDATIONS_PERCENTEARNINGSPERSHARESURPRISEFORMOSTRECENTLYREPORTEDQUARTER = 'EPSEstimatesAndRecommendations_PercentEarningsPerShareSurpriseForMostRecentlyReportedQuarter';
	/**
	 * Constant for value 'EPSEstimatesAndRecommendations_ConsensusEarningsPerShareEstimateForNextQuarterToReport'
	 * @return string 'EPSEstimatesAndRecommendations_ConsensusEarningsPerShareEstimateForNextQuarterToReport'
	 */
	const VALUE_EPSESTIMATESANDRECOMMENDATIONS_CONSENSUSEARNINGSPERSHAREESTIMATEFORNEXTQUARTERTOREPORT = 'EPSEstimatesAndRecommendations_ConsensusEarningsPerShareEstimateForNextQuarterToReport';
	/**
	 * Constant for value 'EPSEstimatesAndRecommendations_ConsensusEarningsPerShareEstimateForNextFiscalYearToReport'
	 * @return string 'EPSEstimatesAndRecommendations_ConsensusEarningsPerShareEstimateForNextFiscalYearToReport'
	 */
	const VALUE_EPSESTIMATESANDRECOMMENDATIONS_CONSENSUSEARNINGSPERSHAREESTIMATEFORNEXTFISCALYEARTOREPORT = 'EPSEstimatesAndRecommendations_ConsensusEarningsPerShareEstimateForNextFiscalYearToReport';
	/**
	 * Constant for value 'EPSEstimatesAndRecommendations_ConsensusEarningsPerShareEstimateForFiscalYearAfterFr1'
	 * @return string 'EPSEstimatesAndRecommendations_ConsensusEarningsPerShareEstimateForFiscalYearAfterFr1'
	 */
	const VALUE_EPSESTIMATESANDRECOMMENDATIONS_CONSENSUSEARNINGSPERSHAREESTIMATEFORFISCALYEARAFTERFR1 = 'EPSEstimatesAndRecommendations_ConsensusEarningsPerShareEstimateForFiscalYearAfterFr1';
	/**
	 * Constant for value 'EPSEstimatesAndRecommendations_IndustryName'
	 * @return string 'EPSEstimatesAndRecommendations_IndustryName'
	 */
	const VALUE_EPSESTIMATESANDRECOMMENDATIONS_INDUSTRYNAME = 'EPSEstimatesAndRecommendations_IndustryName';
	/**
	 * Constant for value 'EPSEstimatesAndRecommendations_NumberOfCompaniesInIndustryWithRecommendations'
	 * @return string 'EPSEstimatesAndRecommendations_NumberOfCompaniesInIndustryWithRecommendations'
	 */
	const VALUE_EPSESTIMATESANDRECOMMENDATIONS_NUMBEROFCOMPANIESININDUSTRYWITHRECOMMENDATIONS = 'EPSEstimatesAndRecommendations_NumberOfCompaniesInIndustryWithRecommendations';
	/**
	 * Constant for value 'EPSEstimatesAndRecommendations_RecommendationRankOfCompany'
	 * @return string 'EPSEstimatesAndRecommendations_RecommendationRankOfCompany'
	 */
	const VALUE_EPSESTIMATESANDRECOMMENDATIONS_RECOMMENDATIONRANKOFCOMPANY = 'EPSEstimatesAndRecommendations_RecommendationRankOfCompany';
	/**
	 * Constant for value 'EPSEstimatesAndRecommendations_MonthEndAssociatedWithMostRecentReportedQuarter'
	 * @return string 'EPSEstimatesAndRecommendations_MonthEndAssociatedWithMostRecentReportedQuarter'
	 */
	const VALUE_EPSESTIMATESANDRECOMMENDATIONS_MONTHENDASSOCIATEDWITHMOSTRECENTREPORTEDQUARTER = 'EPSEstimatesAndRecommendations_MonthEndAssociatedWithMostRecentReportedQuarter';
	/**
	 * Constant for value 'EPSEstimatesAndRecommendations_MonthEndAssociatedWithNextQuarterToReport'
	 * @return string 'EPSEstimatesAndRecommendations_MonthEndAssociatedWithNextQuarterToReport'
	 */
	const VALUE_EPSESTIMATESANDRECOMMENDATIONS_MONTHENDASSOCIATEDWITHNEXTQUARTERTOREPORT = 'EPSEstimatesAndRecommendations_MonthEndAssociatedWithNextQuarterToReport';
	/**
	 * Constant for value 'EPSEstimatesAndRecommendations_DateAssociatedWithMostRecentlyReportedFiscalYear'
	 * @return string 'EPSEstimatesAndRecommendations_DateAssociatedWithMostRecentlyReportedFiscalYear'
	 */
	const VALUE_EPSESTIMATESANDRECOMMENDATIONS_DATEASSOCIATEDWITHMOSTRECENTLYREPORTEDFISCALYEAR = 'EPSEstimatesAndRecommendations_DateAssociatedWithMostRecentlyReportedFiscalYear';
	/**
	 * Constant for value 'EPSEstimatesAndRecommendations_MostRecentlyReportedQuarterFiscalReferencePeriod'
	 * @return string 'EPSEstimatesAndRecommendations_MostRecentlyReportedQuarterFiscalReferencePeriod'
	 */
	const VALUE_EPSESTIMATESANDRECOMMENDATIONS_MOSTRECENTLYREPORTEDQUARTERFISCALREFERENCEPERIOD = 'EPSEstimatesAndRecommendations_MostRecentlyReportedQuarterFiscalReferencePeriod';
	/**
	 * Constant for value 'EPSEstimatesAndRecommendations_MostRecentlyReportedQuarterConsensusEstimate'
	 * @return string 'EPSEstimatesAndRecommendations_MostRecentlyReportedQuarterConsensusEstimate'
	 */
	const VALUE_EPSESTIMATESANDRECOMMENDATIONS_MOSTRECENTLYREPORTEDQUARTERCONSENSUSESTIMATE = 'EPSEstimatesAndRecommendations_MostRecentlyReportedQuarterConsensusEstimate';
	/**
	 * Constant for value 'EPSEstimatesAndRecommendations_MostRecentlyReportedQuarterReportDate'
	 * @return string 'EPSEstimatesAndRecommendations_MostRecentlyReportedQuarterReportDate'
	 */
	const VALUE_EPSESTIMATESANDRECOMMENDATIONS_MOSTRECENTLYREPORTEDQUARTERREPORTDATE = 'EPSEstimatesAndRecommendations_MostRecentlyReportedQuarterReportDate';
	/**
	 * Constant for value 'EPSEstimatesAndRecommendations_NextQuarterToReportFiscalReferencePeriod'
	 * @return string 'EPSEstimatesAndRecommendations_NextQuarterToReportFiscalReferencePeriod'
	 */
	const VALUE_EPSESTIMATESANDRECOMMENDATIONS_NEXTQUARTERTOREPORTFISCALREFERENCEPERIOD = 'EPSEstimatesAndRecommendations_NextQuarterToReportFiscalReferencePeriod';
	/**
	 * Constant for value 'EPSEstimatesAndRecommendations_NextQuarterToReportExpectedReportDate'
	 * @return string 'EPSEstimatesAndRecommendations_NextQuarterToReportExpectedReportDate'
	 */
	const VALUE_EPSESTIMATESANDRECOMMENDATIONS_NEXTQUARTERTOREPORTEXPECTEDREPORTDATE = 'EPSEstimatesAndRecommendations_NextQuarterToReportExpectedReportDate';
	/**
	 * Constant for value 'EPSEstimatesAndRecommendations_TwoQuartersOutFiscalReferencePeriod'
	 * @return string 'EPSEstimatesAndRecommendations_TwoQuartersOutFiscalReferencePeriod'
	 */
	const VALUE_EPSESTIMATESANDRECOMMENDATIONS_TWOQUARTERSOUTFISCALREFERENCEPERIOD = 'EPSEstimatesAndRecommendations_TwoQuartersOutFiscalReferencePeriod';
	/**
	 * Constant for value 'EPSEstimatesAndRecommendations_TwoQuartersOutConsensusEstimate'
	 * @return string 'EPSEstimatesAndRecommendations_TwoQuartersOutConsensusEstimate'
	 */
	const VALUE_EPSESTIMATESANDRECOMMENDATIONS_TWOQUARTERSOUTCONSENSUSESTIMATE = 'EPSEstimatesAndRecommendations_TwoQuartersOutConsensusEstimate';
	/**
	 * Constant for value 'EPSEstimatesAndRecommendations_NextFiscalYearFiscalReferencePeriod'
	 * @return string 'EPSEstimatesAndRecommendations_NextFiscalYearFiscalReferencePeriod'
	 */
	const VALUE_EPSESTIMATESANDRECOMMENDATIONS_NEXTFISCALYEARFISCALREFERENCEPERIOD = 'EPSEstimatesAndRecommendations_NextFiscalYearFiscalReferencePeriod';
	/**
	 * Constant for value 'EPSEstimatesAndRecommendations_TwoFiscalYearsOutFiscalReferencePeriod'
	 * @return string 'EPSEstimatesAndRecommendations_TwoFiscalYearsOutFiscalReferencePeriod'
	 */
	const VALUE_EPSESTIMATESANDRECOMMENDATIONS_TWOFISCALYEARSOUTFISCALREFERENCEPERIOD = 'EPSEstimatesAndRecommendations_TwoFiscalYearsOutFiscalReferencePeriod';
	/**
	 * Constant for value 'EPSEstimatesAndRecommendations_ThreeFiscalYearsOutFiscalReferencePeriod'
	 * @return string 'EPSEstimatesAndRecommendations_ThreeFiscalYearsOutFiscalReferencePeriod'
	 */
	const VALUE_EPSESTIMATESANDRECOMMENDATIONS_THREEFISCALYEARSOUTFISCALREFERENCEPERIOD = 'EPSEstimatesAndRecommendations_ThreeFiscalYearsOutFiscalReferencePeriod';
	/**
	 * Constant for value 'EPSEstimatesAndRecommendations_FourFiscalYearsOutFiscalReferencePeriod'
	 * @return string 'EPSEstimatesAndRecommendations_FourFiscalYearsOutFiscalReferencePeriod'
	 */
	const VALUE_EPSESTIMATESANDRECOMMENDATIONS_FOURFISCALYEARSOUTFISCALREFERENCEPERIOD = 'EPSEstimatesAndRecommendations_FourFiscalYearsOutFiscalReferencePeriod';
	/**
	 * Constructor
	 * @return XiEstimatesTypeEstimateFieldTypes
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
		return in_array($_value,array(self::VALUE_SECURITY_TICKER,self::VALUE_SECURITY_CIK,self::VALUE_SECURITY_CUSIP,self::VALUE_SECURITY_ISIN,self::VALUE_SECURITY_COMPANYNAME,self::VALUE_SECURITY_MARKET,self::VALUE_SECURITY_CATEGORYORINDUSTRY,self::VALUE_EARNINGSESTIMATES_CURRENTQUARTERENDDATE,self::VALUE_EARNINGSESTIMATES_CURRENTQUARTERMEAN,self::VALUE_EARNINGSESTIMATES_NEXTQUARTERENDDATE,self::VALUE_EARNINGSESTIMATES_NEXTQUARTERCURRENTMEAN,self::VALUE_EARNINGSESTIMATES_CURRENTFISCALYEARENDDATE,self::VALUE_EARNINGSESTIMATES_CURRENTFISCALYEARMEAN,self::VALUE_EARNINGSESTIMATES_NEXTFISCALYEARENDDATE,self::VALUE_EARNINGSESTIMATES_NEXTFISCALYEARCURRENTMEAN,self::VALUE_EARNINGSESTIMATES_NUMBEROFCURRENTQUARTERESTIMATES,self::VALUE_EARNINGSESTIMATES_NUMBEROFNEXTQUARTERESTIMATES,self::VALUE_EARNINGSESTIMATES_NUMBEROFCURRENTFISCALYEARESTIMATES,self::VALUE_EARNINGSESTIMATES_NUMBEROFNEXTFISCALYEARESTIMATES,self::VALUE_EARNINGSESTIMATES_CURRENTQUARTERHIGHESTIMATE,self::VALUE_EARNINGSESTIMATES_NEXTQUARTERHIGHESTIMATE,self::VALUE_EARNINGSESTIMATES_CURRENTFISCALYEARHIGHESTIMATE,self::VALUE_EARNINGSESTIMATES_NEXTFISCALYEARHIGHESTIMATE,self::VALUE_EARNINGSESTIMATES_CURRENTQUARTERLOWESTIMATE,self::VALUE_EARNINGSESTIMATES_NEXTQUARTERLOWESTIMATE,self::VALUE_EARNINGSESTIMATES_CURRENTFISCALYEARLOWESTIMATE,self::VALUE_EARNINGSESTIMATES_NEXTFISCALYEARLOWESTIMATE,self::VALUE_EARNINGSESTIMATES_CURRENTQUARTERYEARPRIORACTUALEARNINGSPERSHARE,self::VALUE_EARNINGSESTIMATES_NEXTQUARTERYEARPRIORACTUALEARNINGSPERSHARE,self::VALUE_EARNINGSESTIMATES_CURRENTFISCALYEARYEARPRIORACTUALEARNINGSPERSHARE,self::VALUE_EARNINGSESTIMATES_NEXTFISCALYEARYEARESTIMATEDEARNINGSPERSHARE,self::VALUE_EARNINGSESTIMATES_PERCENTGROWTHCURRENTQUARTERMEANOVERTHREEQUARTERSAGOEARNINGSPERSHARE,self::VALUE_EARNINGSESTIMATES_PERCENTGROWTHNEXTQUARTERMEANOVERTWOQUARTERSAGOEARNINGSPERSHARE,self::VALUE_EARNINGSESTIMATES_PERCENTGROWTHCURRENTFISCALYEARMEANOVERMOSTRECENTFISCALYEAREARNINGSPERSHARE,self::VALUE_EARNINGSESTIMATES_PERCENTGROWTHNEXTFISCALYEARMEANOVERCURRENTFISCALYEARMEAN,self::VALUE_EARNINGSESTIMATES_LONGTERMGROWTHCURRENTMEAN,self::VALUE_EARNINGSESTIMATES_NUMBEROFLONGTERMGROWTHESTIMATES,self::VALUE_EARNINGSESTIMATES_LONGTERMGROWTHHIGHESTIMATE,self::VALUE_EARNINGSESTIMATES_LONGTERMGROWTHLOWESTIMATE,self::VALUE_EARNINGSESTIMATESCONSENSUSTREND_CURRENTFISCALQUARTERENDDATE,self::VALUE_EARNINGSESTIMATESCONSENSUSTREND_CURRENTQUARTERMEANCURRENT,self::VALUE_EARNINGSESTIMATESCONSENSUSTREND_CURRENTQUARTERMEAN7DAYSAGO,self::VALUE_EARNINGSESTIMATESCONSENSUSTREND_CURRENTQUARTERMEAN30DAYSAGO,self::VALUE_EARNINGSESTIMATESCONSENSUSTREND_CURRENTQUARTERMEAN60DAYSAGO,self::VALUE_EARNINGSESTIMATESCONSENSUSTREND_CURRENTQUARTERMEAN90DAYSAGO,self::VALUE_EARNINGSESTIMATESCONSENSUSTREND_NEXTFISCALQUARTERENDDATE,self::VALUE_EARNINGSESTIMATESCONSENSUSTREND_NEXTQUARTERMEANCURRENT,self::VALUE_EARNINGSESTIMATESCONSENSUSTREND_NEXTQUARTERMEAN7DAYSAGO,self::VALUE_EARNINGSESTIMATESCONSENSUSTREND_NEXTQUARTERMEAN30DAYSAGO,self::VALUE_EARNINGSESTIMATESCONSENSUSTREND_NEXTQUARTERMEAN60DAYSAGO,self::VALUE_EARNINGSESTIMATESCONSENSUSTREND_NEXTQUARTERMEAN90DAYSAGO,self::VALUE_EARNINGSESTIMATESCONSENSUSTREND_CURRENTFISCALYEARENDDATE,self::VALUE_EARNINGSESTIMATESCONSENSUSTREND_CURRENTFISCALYEARMEANCURRENT,self::VALUE_EARNINGSESTIMATESCONSENSUSTREND_CURRENTFISCALYEARMEAN7DAYSAGO,self::VALUE_EARNINGSESTIMATESCONSENSUSTREND_CURRENTFISCALYEARMEAN30DAYSAGO,self::VALUE_EARNINGSESTIMATESCONSENSUSTREND_CURRENTFISCALYEARMEAN60DAYSAGO,self::VALUE_EARNINGSESTIMATESCONSENSUSTREND_CURRENTFISCALYEARMEAN90DAYSAGO,self::VALUE_EARNINGSESTIMATESCONSENSUSTREND_NEXTFISCALYEARENDDATE,self::VALUE_EARNINGSESTIMATESCONSENSUSTREND_NEXTFISCALYEARMEANCURRENT,self::VALUE_EARNINGSESTIMATESCONSENSUSTREND_NEXTFISCALYEARMEAN7DAYSAGO,self::VALUE_EARNINGSESTIMATESCONSENSUSTREND_NEXTFISCALYEARMEAN30DAYSAGO,self::VALUE_EARNINGSESTIMATESCONSENSUSTREND_NEXTFISCALYEARMEAN60DAYSAGO,self::VALUE_EARNINGSESTIMATESCONSENSUSTREND_NEXTFISCALYEARMEAN90DAYSAGO,self::VALUE_EARNINGSESTIMATESCONSENSUSTREND_LONGTERMGROWTHMEANCURRENT,self::VALUE_EARNINGSESTIMATESCONSENSUSTREND_LONGTERMGROWTHMEAN7DAYSAGO,self::VALUE_EARNINGSESTIMATESCONSENSUSTREND_LONGTERMGROWTHMEAN30DAYSAGO,self::VALUE_EARNINGSESTIMATESCONSENSUSTREND_LONGTERMGROWTHMEAN60DAYSAGO,self::VALUE_EARNINGSESTIMATESCONSENSUSTREND_LONGTERMGROWTHMEAN90DAYSAGO,self::VALUE_EARNINGSSURPRISE_MOSTRECENTQUARTERENDDATE,self::VALUE_EARNINGSSURPRISE_ESTIMATEDEARNINGSPERSHAREFORMOSTRECENTQUARTER,self::VALUE_EARNINGSSURPRISE_ACTUALEARNINGSPERSHAREFORMOSTRECENTQUARTER,self::VALUE_EARNINGSSURPRISE_MOSTRECENTQUARTERDIFFERENCE,self::VALUE_EARNINGSSURPRISE_MOSTRECENTQUARTERSURPRISEPERCENT,self::VALUE_EARNINGSSURPRISE_ONEQUARTERPRIORENDDATE,self::VALUE_EARNINGSSURPRISE_ESTIMATEDEARNINGSPERSHAREFORONEQUARTERPRIOR,self::VALUE_EARNINGSSURPRISE_ACTUALEARNINGSPERSHAREFORONEQUARTERPRIOR,self::VALUE_EARNINGSSURPRISE_ONEQUARTERPRIORDIFFERENCE,self::VALUE_EARNINGSSURPRISE_ONEQUARTERPRIORSURPRISEPERCENT,self::VALUE_EARNINGSSURPRISE_TWOQUARTERSPRIORENDDATE,self::VALUE_EARNINGSSURPRISE_ESTIMATEDEARNINGSPERSHAREFORTWOQUARTERSPRIOR,self::VALUE_EARNINGSSURPRISE_ACTUALEARNINGSPERSHAREFORTWOQUARTERSPRIOR,self::VALUE_EARNINGSSURPRISE_TWOQUARTERSPRIORDIFFERENCE,self::VALUE_EARNINGSSURPRISE_TWOQUARTERSPRIORSURPRISEPERCENT,self::VALUE_EARNINGSSURPRISE_THREEQUARTERSPRIORENDDATE,self::VALUE_EARNINGSSURPRISE_ESTIMATEDEARNINGSPERSHAREFORTHREEQUARTERSPRIOR,self::VALUE_EARNINGSSURPRISE_ACTUALEARNINGSPERSHAREFORTHREEQUARTERSPRIOR,self::VALUE_EARNINGSSURPRISE_THREEQUARTERSPRIORDIFFERENCE,self::VALUE_EARNINGSSURPRISE_THREEQUARTERSPRIORSURPRISEPERCENT,self::VALUE_EARNINGSSURPRISE_FOURQUARTERSPRIORENDDATE,self::VALUE_EARNINGSSURPRISE_ESTIMATEDEARNINGSPERSHAREFORFOURQUARTERSPRIOR,self::VALUE_EARNINGSSURPRISE_ACTUALEARNINGSPERSHAREFORFOURQUARTERSPRIOR,self::VALUE_EARNINGSSURPRISE_FOURQUARTERSPRIORDIFFERENCE,self::VALUE_EARNINGSSURPRISE_FOURQUARTERSPRIORSURPRISEPERCENT,self::VALUE_EPSGROWTHRATES_FILEPRODUCTIONDATE,self::VALUE_EPSGROWTHRATES_ZACKSINDUSTRYGROUPNUMBER,self::VALUE_EPSGROWTHRATES_ZACKSINDUSTRYGROUPNAME,self::VALUE_EPSGROWTHRATES_COMPANYINDUSTRYCURRENTFISCALYEAREND,self::VALUE_EPSGROWTHRATES_COMPANYINDUSTRYNEXTFISCALYEAREND,self::VALUE_EPSGROWTHRATES_COMPANYINDUSTRYSECONDFISCALYEAREND,self::VALUE_EPSGROWTHRATES_COMPANYLAST5YEARACTUALPERCENTAGEGROWTH,self::VALUE_EPSGROWTHRATES_COMPANYNEXTFISCALYEARDIVIDEDBYCURRENTFISCALYEARPERCENTAGE,self::VALUE_EPSGROWTHRATES_COMPANYSECONDFISCALYEARDIVIDEDBYNEXTFISCALYEARPERCENTAGE,self::VALUE_EPSGROWTHRATES_COMPANYLONGTERMGROWTHRATE,self::VALUE_EPSGROWTHRATES_COMPANYNEXTFISCALYEARPERATIO,self::VALUE_EPSGROWTHRATES_INDUSTRYLAST5YEARACTUALPERCENTGROWTH,self::VALUE_EPSGROWTHRATES_INDUSTRYNEXTFISCALYEARDIVIDEDBYCURRENTFISCALYEARPERCENTPERCENTAGE,self::VALUE_EPSGROWTHRATES_INDUSTRYSECONDFISCALYEARDIVIDEDBYNEXTFISCALYEARPERCENTAGE,self::VALUE_EPSGROWTHRATES_INDUSTRYLONGTERMGROWTHRATE,self::VALUE_EPSGROWTHRATES_INDUSTRYNEXTFISCALYEARPERATIO,self::VALUE_EPSGROWTHRATES_SP500LAST5YEARACTUALPERCENTGROWTH,self::VALUE_EPSGROWTHRATES_SP500NEXTFISCALYEARDIVIDEDBYCURRENTFISCALYEARPERCENTPERCENTAGE,self::VALUE_EPSGROWTHRATES_SP500SECONDFISCALYEARDIVIDEDBYNEXTFISCALYEARPERCENTAGE,self::VALUE_EPSGROWTHRATES_SP500LONGTERMGROWTHRATE,self::VALUE_EPSGROWTHRATES_SP500NEXTFISCALYEARPERATIO,self::VALUE_SECTORANALYSIS_FILEPRODUCTIONDATE,self::VALUE_SECTORANALYSIS_PRICE,self::VALUE_SECTORANALYSIS_CURRENTFISCALYEARCOMPANYFISCALYEAREND,self::VALUE_SECTORANALYSIS_CURRENTQUARTERCOMPANYFISCALQUARTEREND,self::VALUE_SECTORANALYSIS_INDUSTRYSECTORFISCALYEARENDFORCALCULATIONS,self::VALUE_SECTORANALYSIS_INDUSTRYNAME,self::VALUE_SECTORANALYSIS_SECTORNAME,self::VALUE_SECTORANALYSIS_MEANESTIMATECOMPANYCURRENTFISCALYEAR,self::VALUE_SECTORANALYSIS_MEANLONGTERMGROWTHESTIMATECOMPANYCURRENTFISCALYEAR,self::VALUE_SECTORANALYSIS_MEANRECOMMENDATIONCOMPANY,self::VALUE_SECTORANALYSIS_PERATIOCOMPANYPERCURRENTFISCALYEARMEAN,self::VALUE_SECTORANALYSIS_CURRENTFISCALYEARPRICEEARNINGSGROWTHCOMPANYCURRENTFISCALYEAR,self::VALUE_SECTORANALYSIS_THREEQUARTERSPRIORACTUALINDUSTRY,self::VALUE_SECTORANALYSIS_TWOQUARTERSPRIORACTUALINDUSTRY,self::VALUE_SECTORANALYSIS_CURRENTQUARTERESTIMATEINDUSTRY,self::VALUE_SECTORANALYSIS_NEXTQUARTERESTIMATEINDUSTRY,self::VALUE_SECTORANALYSIS_INDUSTRYMOSTRECENTFISCALYEARACTUALINDUSTRY,self::VALUE_SECTORANALYSIS_INDUSTRYCURRENTFISCALYEARESTIMATEINDUSTRY,self::VALUE_SECTORANALYSIS_INDUSTRYNEXTFISCALYEARESTIMATEINDUSTRY,self::VALUE_SECTORANALYSIS_MEANESTIMATEINDUSTRYLONGTERMGROWTH,self::VALUE_SECTORANALYSIS_MEANRECOMMENDATIONINDUSTRY,self::VALUE_SECTORANALYSIS_PERATIOINDUSTRYPERINDUSTRYNEXTFISCALYEARMEAN,self::VALUE_SECTORANALYSIS_CURRENTFISCALYEARPRICEEARNINGSGROWTHINDUSTRY,self::VALUE_SECTORANALYSIS_PERCENTDIFFERENCECURRENTQUARTERVSTHREEQUARTERSPRIORINDUSTRY,self::VALUE_SECTORANALYSIS_PERCENTDIFFERENCENEXTQUARTERVSTWOQUARTERSPRIORINDUSTRY,self::VALUE_SECTORANALYSIS_PERCENTDIFFERENCEINDUSTRYCURRENTFISCALYEARVSINDUSTRYMOSTRECENTFISCALYEARINDUSTRY,self::VALUE_SECTORANALYSIS_PERCENTDIFFERENCEINDUSTRYNEXTFISCALYEARVSINDUSTRYCURRENTFISCALYEARINDUSTRY,self::VALUE_SECTORANALYSIS_THREEQUARTERSPRIORACTUALSECTOR,self::VALUE_SECTORANALYSIS_TWOQUARTERSPRIORACTUALSECTOR,self::VALUE_SECTORANALYSIS_CURRENTQUARTERESTIMATESECTOR,self::VALUE_SECTORANALYSIS_NEXTQUARTERESTIMATESECTOR,self::VALUE_SECTORANALYSIS_INDUSTRYMOSTRECENTFISCALYEARACTUALSECTOR,self::VALUE_SECTORANALYSIS_INDUSTRYCURRENTFISCALYEARESTIMATESECTOR,self::VALUE_SECTORANALYSIS_INDUSTRYNEXTFISCALYEARESTIMATESECTOR,self::VALUE_SECTORANALYSIS_MEANESTIMATESECTORLONGTERMGROWTH,self::VALUE_SECTORANALYSIS_MEANRECOMMENDATIONSECTOR,self::VALUE_SECTORANALYSIS_PERATIOSECTORPERINDUSTRYCURRENTFISCALYEARMEAN,self::VALUE_SECTORANALYSIS_CURRENTFISCALYEARPRICEEARNINGSGROWTHSECTOR,self::VALUE_SECTORANALYSIS_PERCENTDIFFERENCECURRENTQUARTERVSTHREEQUARTERSPRIORSECTOR,self::VALUE_SECTORANALYSIS_PERCENTDIFFERENCENEXTQUARTERVSTWOQUARTERSPRIORSECTOR,self::VALUE_SECTORANALYSIS_PERCENTDIFFERENCEINDUSTRYCURRENTFISCALYEARVSINDUSTRYMOSTRECENTFISCALYEARSECTOR,self::VALUE_SECTORANALYSIS_PERCENTDIFFERENCEINDUSTRYNEXTFISCALYEARVSINDUSTRYCURRENTFISCALYEARSECTOR,self::VALUE_SECTORANALYSIS_THREEQUARTERSPRIORACTUALSP500,self::VALUE_SECTORANALYSIS_TWOQUARTERSPRIORACTUALSP500,self::VALUE_SECTORANALYSIS_CURRENTQUARTERESTIMATESP500,self::VALUE_SECTORANALYSIS_NEXTQUARTERESTIMATESP500,self::VALUE_SECTORANALYSIS_MOSTRECENTFISCALYEARESTIMATEDIVIDEDBYACTUALSP500,self::VALUE_SECTORANALYSIS_CURRENTFISCALYEARESTIMATESP500,self::VALUE_SECTORANALYSIS_NEXTFISCALYEARESTIMATESP500,self::VALUE_SECTORANALYSIS_MEANESTIMATESP500LONGTERMGROWTH,self::VALUE_SECTORANALYSIS_MEANRECOMMENDATIONSP500,self::VALUE_SECTORANALYSIS_PERATIOSP500PERCURRENTFISCALYEARMEAN,self::VALUE_SECTORANALYSIS_CURRENTFISCALYEARPRICEEARNINGSGROWTHSP500,self::VALUE_SECTORANALYSIS_PERCENTDIFFERENCECURRENTQUARTERVSTHREEQUARTERSPRIORSP500,self::VALUE_SECTORANALYSIS_PERCENTDIFFERRENCENEXTQUARTERVSTWOQUARTERSPRIORSP500,self::VALUE_SECTORANALYSIS_PERCENTDIFFERENCECURRENTFISCALYEARVSMOSTRECENTFISCALYEARSP500,self::VALUE_SECTORANALYSIS_PERCENTDIFFERENCENEXTFISCALYEARVSCURRENTFISCALYEARSP500,self::VALUE_SECTORANALYSIS_FIVEYEARHISTORICEARNINGSPERSHAREGROWTHCOMPANY,self::VALUE_SECTORANALYSIS_FIVEYEARHISTORICEARNINGSPERSHAREGROWTHINDUSTRY,self::VALUE_SECTORANALYSIS_FIVEYEARHISTORICEARNINGSPERSHAREGROWTHSECTOR,self::VALUE_SECTORANALYSIS_FIVEYEARHISTORICEARNINGSPERSHAREGROWTHSP500,self::VALUE_EPSESTIMATESANDRECOMMENDATIONS_NUMBEROFBROKERSRECOMMENDINGSTOCK,self::VALUE_EPSESTIMATESANDRECOMMENDATIONS_NUMBEROFBROKERSRECOMMENDINGSTOCKASASTRONGBUY,self::VALUE_EPSESTIMATESANDRECOMMENDATIONS_NUMBEROFBROKERSRECOMMENDINGSTOCKASAMODERATEBUY,self::VALUE_EPSESTIMATESANDRECOMMENDATIONS_NUMBEROFBROKERSRECOMMENDINGSTOCKASAHOLD,self::VALUE_EPSESTIMATESANDRECOMMENDATIONS_NUMBEROFBROKERSRECOMMENDINGSTOCKASAMODERATESELL,self::VALUE_EPSESTIMATESANDRECOMMENDATIONS_NUMBEROFBROKERSRECOMMENDINGSTOCKASASTRONGSELL,self::VALUE_EPSESTIMATESANDRECOMMENDATIONS_CURRENTAVERAGERECOMMENDATION,self::VALUE_EPSESTIMATESANDRECOMMENDATIONS_PREVIOUSAVERAGERECOMMENDATION,self::VALUE_EPSESTIMATESANDRECOMMENDATIONS_EARNINGSPERSHAREFORMOSTRECENTLYREPORTEDQUARTER,self::VALUE_EPSESTIMATESANDRECOMMENDATIONS_PERCENTEARNINGSPERSHARESURPRISEFORMOSTRECENTLYREPORTEDQUARTER,self::VALUE_EPSESTIMATESANDRECOMMENDATIONS_CONSENSUSEARNINGSPERSHAREESTIMATEFORNEXTQUARTERTOREPORT,self::VALUE_EPSESTIMATESANDRECOMMENDATIONS_CONSENSUSEARNINGSPERSHAREESTIMATEFORNEXTFISCALYEARTOREPORT,self::VALUE_EPSESTIMATESANDRECOMMENDATIONS_CONSENSUSEARNINGSPERSHAREESTIMATEFORFISCALYEARAFTERFR1,self::VALUE_EPSESTIMATESANDRECOMMENDATIONS_INDUSTRYNAME,self::VALUE_EPSESTIMATESANDRECOMMENDATIONS_NUMBEROFCOMPANIESININDUSTRYWITHRECOMMENDATIONS,self::VALUE_EPSESTIMATESANDRECOMMENDATIONS_RECOMMENDATIONRANKOFCOMPANY,self::VALUE_EPSESTIMATESANDRECOMMENDATIONS_MONTHENDASSOCIATEDWITHMOSTRECENTREPORTEDQUARTER,self::VALUE_EPSESTIMATESANDRECOMMENDATIONS_MONTHENDASSOCIATEDWITHNEXTQUARTERTOREPORT,self::VALUE_EPSESTIMATESANDRECOMMENDATIONS_DATEASSOCIATEDWITHMOSTRECENTLYREPORTEDFISCALYEAR,self::VALUE_EPSESTIMATESANDRECOMMENDATIONS_MOSTRECENTLYREPORTEDQUARTERFISCALREFERENCEPERIOD,self::VALUE_EPSESTIMATESANDRECOMMENDATIONS_MOSTRECENTLYREPORTEDQUARTERCONSENSUSESTIMATE,self::VALUE_EPSESTIMATESANDRECOMMENDATIONS_MOSTRECENTLYREPORTEDQUARTERREPORTDATE,self::VALUE_EPSESTIMATESANDRECOMMENDATIONS_NEXTQUARTERTOREPORTFISCALREFERENCEPERIOD,self::VALUE_EPSESTIMATESANDRECOMMENDATIONS_NEXTQUARTERTOREPORTEXPECTEDREPORTDATE,self::VALUE_EPSESTIMATESANDRECOMMENDATIONS_TWOQUARTERSOUTFISCALREFERENCEPERIOD,self::VALUE_EPSESTIMATESANDRECOMMENDATIONS_TWOQUARTERSOUTCONSENSUSESTIMATE,self::VALUE_EPSESTIMATESANDRECOMMENDATIONS_NEXTFISCALYEARFISCALREFERENCEPERIOD,self::VALUE_EPSESTIMATESANDRECOMMENDATIONS_TWOFISCALYEARSOUTFISCALREFERENCEPERIOD,self::VALUE_EPSESTIMATESANDRECOMMENDATIONS_THREEFISCALYEARSOUTFISCALREFERENCEPERIOD,self::VALUE_EPSESTIMATESANDRECOMMENDATIONS_FOURFISCALYEARSOUTFISCALREFERENCEPERIOD));
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