<?php
/**
 * Class file for XiAnalystsTypeAnalystFieldTypes
 * @date 08/07/2012
 */
/**
 * Class XiAnalystsTypeAnalystFieldTypes
 * @date 08/07/2012
 */
class XiAnalystsTypeAnalystFieldTypes extends XiAnalystsWsdlClass
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
	 * Constant for value 'AnalystRecommendations_NumberOfStrongBuysCurrent'
	 * @return string 'AnalystRecommendations_NumberOfStrongBuysCurrent'
	 */
	const VALUE_ANALYSTRECOMMENDATIONS_NUMBEROFSTRONGBUYSCURRENT = 'AnalystRecommendations_NumberOfStrongBuysCurrent';
	/**
	 * Constant for value 'AnalystRecommendations_NumberOfStrongBuys1MonthAgo'
	 * @return string 'AnalystRecommendations_NumberOfStrongBuys1MonthAgo'
	 */
	const VALUE_ANALYSTRECOMMENDATIONS_NUMBEROFSTRONGBUYS1MONTHAGO = 'AnalystRecommendations_NumberOfStrongBuys1MonthAgo';
	/**
	 * Constant for value 'AnalystRecommendations_NumberOfStrongBuys2MonthsAgo'
	 * @return string 'AnalystRecommendations_NumberOfStrongBuys2MonthsAgo'
	 */
	const VALUE_ANALYSTRECOMMENDATIONS_NUMBEROFSTRONGBUYS2MONTHSAGO = 'AnalystRecommendations_NumberOfStrongBuys2MonthsAgo';
	/**
	 * Constant for value 'AnalystRecommendations_NumberOfStrongBuys3MonthsAgo'
	 * @return string 'AnalystRecommendations_NumberOfStrongBuys3MonthsAgo'
	 */
	const VALUE_ANALYSTRECOMMENDATIONS_NUMBEROFSTRONGBUYS3MONTHSAGO = 'AnalystRecommendations_NumberOfStrongBuys3MonthsAgo';
	/**
	 * Constant for value 'AnalystRecommendations_NumberOfModerateBuysCurrent'
	 * @return string 'AnalystRecommendations_NumberOfModerateBuysCurrent'
	 */
	const VALUE_ANALYSTRECOMMENDATIONS_NUMBEROFMODERATEBUYSCURRENT = 'AnalystRecommendations_NumberOfModerateBuysCurrent';
	/**
	 * Constant for value 'AnalystRecommendations_NumberOfModerateBuys1MonthAgo'
	 * @return string 'AnalystRecommendations_NumberOfModerateBuys1MonthAgo'
	 */
	const VALUE_ANALYSTRECOMMENDATIONS_NUMBEROFMODERATEBUYS1MONTHAGO = 'AnalystRecommendations_NumberOfModerateBuys1MonthAgo';
	/**
	 * Constant for value 'AnalystRecommendations_NumberOfModerateBuys2MonthsAgo'
	 * @return string 'AnalystRecommendations_NumberOfModerateBuys2MonthsAgo'
	 */
	const VALUE_ANALYSTRECOMMENDATIONS_NUMBEROFMODERATEBUYS2MONTHSAGO = 'AnalystRecommendations_NumberOfModerateBuys2MonthsAgo';
	/**
	 * Constant for value 'AnalystRecommendations_NumberOfModerateBuys3MonthsAgo'
	 * @return string 'AnalystRecommendations_NumberOfModerateBuys3MonthsAgo'
	 */
	const VALUE_ANALYSTRECOMMENDATIONS_NUMBEROFMODERATEBUYS3MONTHSAGO = 'AnalystRecommendations_NumberOfModerateBuys3MonthsAgo';
	/**
	 * Constant for value 'AnalystRecommendations_NumberOfHoldsCurrent'
	 * @return string 'AnalystRecommendations_NumberOfHoldsCurrent'
	 */
	const VALUE_ANALYSTRECOMMENDATIONS_NUMBEROFHOLDSCURRENT = 'AnalystRecommendations_NumberOfHoldsCurrent';
	/**
	 * Constant for value 'AnalystRecommendations_NumberOfHolds1MonthAgo'
	 * @return string 'AnalystRecommendations_NumberOfHolds1MonthAgo'
	 */
	const VALUE_ANALYSTRECOMMENDATIONS_NUMBEROFHOLDS1MONTHAGO = 'AnalystRecommendations_NumberOfHolds1MonthAgo';
	/**
	 * Constant for value 'AnalystRecommendations_NumberOfHolds2MonthsAgo'
	 * @return string 'AnalystRecommendations_NumberOfHolds2MonthsAgo'
	 */
	const VALUE_ANALYSTRECOMMENDATIONS_NUMBEROFHOLDS2MONTHSAGO = 'AnalystRecommendations_NumberOfHolds2MonthsAgo';
	/**
	 * Constant for value 'AnalystRecommendations_NumberOfHolds3MonthsAgo'
	 * @return string 'AnalystRecommendations_NumberOfHolds3MonthsAgo'
	 */
	const VALUE_ANALYSTRECOMMENDATIONS_NUMBEROFHOLDS3MONTHSAGO = 'AnalystRecommendations_NumberOfHolds3MonthsAgo';
	/**
	 * Constant for value 'AnalystRecommendations_NumberOfModerateSellsCurrent'
	 * @return string 'AnalystRecommendations_NumberOfModerateSellsCurrent'
	 */
	const VALUE_ANALYSTRECOMMENDATIONS_NUMBEROFMODERATESELLSCURRENT = 'AnalystRecommendations_NumberOfModerateSellsCurrent';
	/**
	 * Constant for value 'AnalystRecommendations_NumberOfModerateSells1MonthAgo'
	 * @return string 'AnalystRecommendations_NumberOfModerateSells1MonthAgo'
	 */
	const VALUE_ANALYSTRECOMMENDATIONS_NUMBEROFMODERATESELLS1MONTHAGO = 'AnalystRecommendations_NumberOfModerateSells1MonthAgo';
	/**
	 * Constant for value 'AnalystRecommendations_NumberOfModerateSells2MonthsAgo'
	 * @return string 'AnalystRecommendations_NumberOfModerateSells2MonthsAgo'
	 */
	const VALUE_ANALYSTRECOMMENDATIONS_NUMBEROFMODERATESELLS2MONTHSAGO = 'AnalystRecommendations_NumberOfModerateSells2MonthsAgo';
	/**
	 * Constant for value 'AnalystRecommendations_NumberOfModerateSells3MonthsAgo'
	 * @return string 'AnalystRecommendations_NumberOfModerateSells3MonthsAgo'
	 */
	const VALUE_ANALYSTRECOMMENDATIONS_NUMBEROFMODERATESELLS3MONTHSAGO = 'AnalystRecommendations_NumberOfModerateSells3MonthsAgo';
	/**
	 * Constant for value 'AnalystRecommendations_NumberOfStrongSellsCurrent'
	 * @return string 'AnalystRecommendations_NumberOfStrongSellsCurrent'
	 */
	const VALUE_ANALYSTRECOMMENDATIONS_NUMBEROFSTRONGSELLSCURRENT = 'AnalystRecommendations_NumberOfStrongSellsCurrent';
	/**
	 * Constant for value 'AnalystRecommendations_NumberOfStrongSells1MonthAgo'
	 * @return string 'AnalystRecommendations_NumberOfStrongSells1MonthAgo'
	 */
	const VALUE_ANALYSTRECOMMENDATIONS_NUMBEROFSTRONGSELLS1MONTHAGO = 'AnalystRecommendations_NumberOfStrongSells1MonthAgo';
	/**
	 * Constant for value 'AnalystRecommendations_NumberOfStrongSells2MonthsAgo'
	 * @return string 'AnalystRecommendations_NumberOfStrongSells2MonthsAgo'
	 */
	const VALUE_ANALYSTRECOMMENDATIONS_NUMBEROFSTRONGSELLS2MONTHSAGO = 'AnalystRecommendations_NumberOfStrongSells2MonthsAgo';
	/**
	 * Constant for value 'AnalystRecommendations_NumberOfStrongSells3MonthsAgo'
	 * @return string 'AnalystRecommendations_NumberOfStrongSells3MonthsAgo'
	 */
	const VALUE_ANALYSTRECOMMENDATIONS_NUMBEROFSTRONGSELLS3MONTHSAGO = 'AnalystRecommendations_NumberOfStrongSells3MonthsAgo';
	/**
	 * Constant for value 'AnalystRecommendations_MeanRecommendationCurrent'
	 * @return string 'AnalystRecommendations_MeanRecommendationCurrent'
	 */
	const VALUE_ANALYSTRECOMMENDATIONS_MEANRECOMMENDATIONCURRENT = 'AnalystRecommendations_MeanRecommendationCurrent';
	/**
	 * Constant for value 'AnalystRecommendations_MeanRecommendation1MonthAgo'
	 * @return string 'AnalystRecommendations_MeanRecommendation1MonthAgo'
	 */
	const VALUE_ANALYSTRECOMMENDATIONS_MEANRECOMMENDATION1MONTHAGO = 'AnalystRecommendations_MeanRecommendation1MonthAgo';
	/**
	 * Constant for value 'AnalystRecommendations_MeanRecommendation2MonthAgo'
	 * @return string 'AnalystRecommendations_MeanRecommendation2MonthAgo'
	 */
	const VALUE_ANALYSTRECOMMENDATIONS_MEANRECOMMENDATION2MONTHAGO = 'AnalystRecommendations_MeanRecommendation2MonthAgo';
	/**
	 * Constant for value 'AnalystRecommendations_MeanRecommendation3MonthAgo'
	 * @return string 'AnalystRecommendations_MeanRecommendation3MonthAgo'
	 */
	const VALUE_ANALYSTRECOMMENDATIONS_MEANRECOMMENDATION3MONTHAGO = 'AnalystRecommendations_MeanRecommendation3MonthAgo';
	/**
	 * Constant for value 'AnalystRecommendationsAndHistogram_FileProductionDate'
	 * @return string 'AnalystRecommendationsAndHistogram_FileProductionDate'
	 */
	const VALUE_ANALYSTRECOMMENDATIONSANDHISTOGRAM_FILEPRODUCTIONDATE = 'AnalystRecommendationsAndHistogram_FileProductionDate';
	/**
	 * Constant for value 'AnalystRecommendationsAndHistogram_MostRecentFiscalYearEnd'
	 * @return string 'AnalystRecommendationsAndHistogram_MostRecentFiscalYearEnd'
	 */
	const VALUE_ANALYSTRECOMMENDATIONSANDHISTOGRAM_MOSTRECENTFISCALYEAREND = 'AnalystRecommendationsAndHistogram_MostRecentFiscalYearEnd';
	/**
	 * Constant for value 'AnalystRecommendationsAndHistogram_MostRecentFiscalQuarterEnd'
	 * @return string 'AnalystRecommendationsAndHistogram_MostRecentFiscalQuarterEnd'
	 */
	const VALUE_ANALYSTRECOMMENDATIONSANDHISTOGRAM_MOSTRECENTFISCALQUARTEREND = 'AnalystRecommendationsAndHistogram_MostRecentFiscalQuarterEnd';
	/**
	 * Constant for value 'AnalystRecommendationsAndHistogram_CurrentQuarterExpectedReportDate'
	 * @return string 'AnalystRecommendationsAndHistogram_CurrentQuarterExpectedReportDate'
	 */
	const VALUE_ANALYSTRECOMMENDATIONSANDHISTOGRAM_CURRENTQUARTEREXPECTEDREPORTDATE = 'AnalystRecommendationsAndHistogram_CurrentQuarterExpectedReportDate';
	/**
	 * Constant for value 'AnalystRecommendationsAndHistogram_NextQuarterExpectedReportDate'
	 * @return string 'AnalystRecommendationsAndHistogram_NextQuarterExpectedReportDate'
	 */
	const VALUE_ANALYSTRECOMMENDATIONSANDHISTOGRAM_NEXTQUARTEREXPECTEDREPORTDATE = 'AnalystRecommendationsAndHistogram_NextQuarterExpectedReportDate';
	/**
	 * Constant for value 'AnalystRecommendationsAndHistogram_CurrentFiscalYearExpectedReportDate'
	 * @return string 'AnalystRecommendationsAndHistogram_CurrentFiscalYearExpectedReportDate'
	 */
	const VALUE_ANALYSTRECOMMENDATIONSANDHISTOGRAM_CURRENTFISCALYEAREXPECTEDREPORTDATE = 'AnalystRecommendationsAndHistogram_CurrentFiscalYearExpectedReportDate';
	/**
	 * Constant for value 'AnalystRecommendationsAndHistogram_NextFiscalYearExpectedReportDate'
	 * @return string 'AnalystRecommendationsAndHistogram_NextFiscalYearExpectedReportDate'
	 */
	const VALUE_ANALYSTRECOMMENDATIONSANDHISTOGRAM_NEXTFISCALYEAREXPECTEDREPORTDATE = 'AnalystRecommendationsAndHistogram_NextFiscalYearExpectedReportDate';
	/**
	 * Constant for value 'AnalystRecommendationsAndHistogram_CurrentQuarterStandardDeviation'
	 * @return string 'AnalystRecommendationsAndHistogram_CurrentQuarterStandardDeviation'
	 */
	const VALUE_ANALYSTRECOMMENDATIONSANDHISTOGRAM_CURRENTQUARTERSTANDARDDEVIATION = 'AnalystRecommendationsAndHistogram_CurrentQuarterStandardDeviation';
	/**
	 * Constant for value 'AnalystRecommendationsAndHistogram_NextQuarterStandardDeviation'
	 * @return string 'AnalystRecommendationsAndHistogram_NextQuarterStandardDeviation'
	 */
	const VALUE_ANALYSTRECOMMENDATIONSANDHISTOGRAM_NEXTQUARTERSTANDARDDEVIATION = 'AnalystRecommendationsAndHistogram_NextQuarterStandardDeviation';
	/**
	 * Constant for value 'AnalystRecommendationsAndHistogram_CurrentFiscalYearStandardDeviation'
	 * @return string 'AnalystRecommendationsAndHistogram_CurrentFiscalYearStandardDeviation'
	 */
	const VALUE_ANALYSTRECOMMENDATIONSANDHISTOGRAM_CURRENTFISCALYEARSTANDARDDEVIATION = 'AnalystRecommendationsAndHistogram_CurrentFiscalYearStandardDeviation';
	/**
	 * Constant for value 'AnalystRecommendationsAndHistogram_NextFiscalYearStandardDeviation'
	 * @return string 'AnalystRecommendationsAndHistogram_NextFiscalYearStandardDeviation'
	 */
	const VALUE_ANALYSTRECOMMENDATIONSANDHISTOGRAM_NEXTFISCALYEARSTANDARDDEVIATION = 'AnalystRecommendationsAndHistogram_NextFiscalYearStandardDeviation';
	/**
	 * Constant for value 'AnalystRecommendationsAndHistogram_LongTermGrowthStandardDeviation'
	 * @return string 'AnalystRecommendationsAndHistogram_LongTermGrowthStandardDeviation'
	 */
	const VALUE_ANALYSTRECOMMENDATIONSANDHISTOGRAM_LONGTERMGROWTHSTANDARDDEVIATION = 'AnalystRecommendationsAndHistogram_LongTermGrowthStandardDeviation';
	/**
	 * Constant for value 'AnalystRecommendationsAndHistogram_CurrentQuarterMedian'
	 * @return string 'AnalystRecommendationsAndHistogram_CurrentQuarterMedian'
	 */
	const VALUE_ANALYSTRECOMMENDATIONSANDHISTOGRAM_CURRENTQUARTERMEDIAN = 'AnalystRecommendationsAndHistogram_CurrentQuarterMedian';
	/**
	 * Constant for value 'AnalystRecommendationsAndHistogram_NextQuarterMedian'
	 * @return string 'AnalystRecommendationsAndHistogram_NextQuarterMedian'
	 */
	const VALUE_ANALYSTRECOMMENDATIONSANDHISTOGRAM_NEXTQUARTERMEDIAN = 'AnalystRecommendationsAndHistogram_NextQuarterMedian';
	/**
	 * Constant for value 'AnalystRecommendationsAndHistogram_CurrentFiscalYearMedian'
	 * @return string 'AnalystRecommendationsAndHistogram_CurrentFiscalYearMedian'
	 */
	const VALUE_ANALYSTRECOMMENDATIONSANDHISTOGRAM_CURRENTFISCALYEARMEDIAN = 'AnalystRecommendationsAndHistogram_CurrentFiscalYearMedian';
	/**
	 * Constant for value 'AnalystRecommendationsAndHistogram_NextFiscalYearMedian'
	 * @return string 'AnalystRecommendationsAndHistogram_NextFiscalYearMedian'
	 */
	const VALUE_ANALYSTRECOMMENDATIONSANDHISTOGRAM_NEXTFISCALYEARMEDIAN = 'AnalystRecommendationsAndHistogram_NextFiscalYearMedian';
	/**
	 * Constant for value 'AnalystRecommendationsAndHistogram_LongTermGrowthMedian'
	 * @return string 'AnalystRecommendationsAndHistogram_LongTermGrowthMedian'
	 */
	const VALUE_ANALYSTRECOMMENDATIONSANDHISTOGRAM_LONGTERMGROWTHMEDIAN = 'AnalystRecommendationsAndHistogram_LongTermGrowthMedian';
	/**
	 * Constant for value 'AnalystRecommendationsAndHistogram_CurrentQuarterNumberRevisionsUpLast7Days'
	 * @return string 'AnalystRecommendationsAndHistogram_CurrentQuarterNumberRevisionsUpLast7Days'
	 */
	const VALUE_ANALYSTRECOMMENDATIONSANDHISTOGRAM_CURRENTQUARTERNUMBERREVISIONSUPLAST7DAYS = 'AnalystRecommendationsAndHistogram_CurrentQuarterNumberRevisionsUpLast7Days';
	/**
	 * Constant for value 'AnalystRecommendationsAndHistogram_CurrentQuarterNumberRevisionsDownLast7Days'
	 * @return string 'AnalystRecommendationsAndHistogram_CurrentQuarterNumberRevisionsDownLast7Days'
	 */
	const VALUE_ANALYSTRECOMMENDATIONSANDHISTOGRAM_CURRENTQUARTERNUMBERREVISIONSDOWNLAST7DAYS = 'AnalystRecommendationsAndHistogram_CurrentQuarterNumberRevisionsDownLast7Days';
	/**
	 * Constant for value 'AnalystRecommendationsAndHistogram_NextQuarterNumberRevisionsUpLast7Days'
	 * @return string 'AnalystRecommendationsAndHistogram_NextQuarterNumberRevisionsUpLast7Days'
	 */
	const VALUE_ANALYSTRECOMMENDATIONSANDHISTOGRAM_NEXTQUARTERNUMBERREVISIONSUPLAST7DAYS = 'AnalystRecommendationsAndHistogram_NextQuarterNumberRevisionsUpLast7Days';
	/**
	 * Constant for value 'AnalystRecommendationsAndHistogram_NextQuarterNumberRevisionsDownLast7Days'
	 * @return string 'AnalystRecommendationsAndHistogram_NextQuarterNumberRevisionsDownLast7Days'
	 */
	const VALUE_ANALYSTRECOMMENDATIONSANDHISTOGRAM_NEXTQUARTERNUMBERREVISIONSDOWNLAST7DAYS = 'AnalystRecommendationsAndHistogram_NextQuarterNumberRevisionsDownLast7Days';
	/**
	 * Constant for value 'AnalystRecommendationsAndHistogram_CurrentFiscalYearNumberRevisionsUpLast7Days'
	 * @return string 'AnalystRecommendationsAndHistogram_CurrentFiscalYearNumberRevisionsUpLast7Days'
	 */
	const VALUE_ANALYSTRECOMMENDATIONSANDHISTOGRAM_CURRENTFISCALYEARNUMBERREVISIONSUPLAST7DAYS = 'AnalystRecommendationsAndHistogram_CurrentFiscalYearNumberRevisionsUpLast7Days';
	/**
	 * Constant for value 'AnalystRecommendationsAndHistogram_CurrentFiscalYearNumberRevisionsDownLast7Days'
	 * @return string 'AnalystRecommendationsAndHistogram_CurrentFiscalYearNumberRevisionsDownLast7Days'
	 */
	const VALUE_ANALYSTRECOMMENDATIONSANDHISTOGRAM_CURRENTFISCALYEARNUMBERREVISIONSDOWNLAST7DAYS = 'AnalystRecommendationsAndHistogram_CurrentFiscalYearNumberRevisionsDownLast7Days';
	/**
	 * Constant for value 'AnalystRecommendationsAndHistogram_NextFiscalYearNumberRevisionsUpLast7Days'
	 * @return string 'AnalystRecommendationsAndHistogram_NextFiscalYearNumberRevisionsUpLast7Days'
	 */
	const VALUE_ANALYSTRECOMMENDATIONSANDHISTOGRAM_NEXTFISCALYEARNUMBERREVISIONSUPLAST7DAYS = 'AnalystRecommendationsAndHistogram_NextFiscalYearNumberRevisionsUpLast7Days';
	/**
	 * Constant for value 'AnalystRecommendationsAndHistogram_NextFiscalYearNumberRevisionsDownLast7Days'
	 * @return string 'AnalystRecommendationsAndHistogram_NextFiscalYearNumberRevisionsDownLast7Days'
	 */
	const VALUE_ANALYSTRECOMMENDATIONSANDHISTOGRAM_NEXTFISCALYEARNUMBERREVISIONSDOWNLAST7DAYS = 'AnalystRecommendationsAndHistogram_NextFiscalYearNumberRevisionsDownLast7Days';
	/**
	 * Constant for value 'AnalystRecommendationsAndHistogram_CurrentQuarterNumberRevisionsUpLast30Days'
	 * @return string 'AnalystRecommendationsAndHistogram_CurrentQuarterNumberRevisionsUpLast30Days'
	 */
	const VALUE_ANALYSTRECOMMENDATIONSANDHISTOGRAM_CURRENTQUARTERNUMBERREVISIONSUPLAST30DAYS = 'AnalystRecommendationsAndHistogram_CurrentQuarterNumberRevisionsUpLast30Days';
	/**
	 * Constant for value 'AnalystRecommendationsAndHistogram_CurrentQuarterNumberRevisionsDownLast30Days'
	 * @return string 'AnalystRecommendationsAndHistogram_CurrentQuarterNumberRevisionsDownLast30Days'
	 */
	const VALUE_ANALYSTRECOMMENDATIONSANDHISTOGRAM_CURRENTQUARTERNUMBERREVISIONSDOWNLAST30DAYS = 'AnalystRecommendationsAndHistogram_CurrentQuarterNumberRevisionsDownLast30Days';
	/**
	 * Constant for value 'AnalystRecommendationsAndHistogram_NextQuarterNumberRevisionsUpLast30Days'
	 * @return string 'AnalystRecommendationsAndHistogram_NextQuarterNumberRevisionsUpLast30Days'
	 */
	const VALUE_ANALYSTRECOMMENDATIONSANDHISTOGRAM_NEXTQUARTERNUMBERREVISIONSUPLAST30DAYS = 'AnalystRecommendationsAndHistogram_NextQuarterNumberRevisionsUpLast30Days';
	/**
	 * Constant for value 'AnalystRecommendationsAndHistogram_NextQuarterNumberRevisionsDownLast30Days'
	 * @return string 'AnalystRecommendationsAndHistogram_NextQuarterNumberRevisionsDownLast30Days'
	 */
	const VALUE_ANALYSTRECOMMENDATIONSANDHISTOGRAM_NEXTQUARTERNUMBERREVISIONSDOWNLAST30DAYS = 'AnalystRecommendationsAndHistogram_NextQuarterNumberRevisionsDownLast30Days';
	/**
	 * Constant for value 'AnalystRecommendationsAndHistogram_CurrentFiscalYearNumberRevisionsUpLast30Days'
	 * @return string 'AnalystRecommendationsAndHistogram_CurrentFiscalYearNumberRevisionsUpLast30Days'
	 */
	const VALUE_ANALYSTRECOMMENDATIONSANDHISTOGRAM_CURRENTFISCALYEARNUMBERREVISIONSUPLAST30DAYS = 'AnalystRecommendationsAndHistogram_CurrentFiscalYearNumberRevisionsUpLast30Days';
	/**
	 * Constant for value 'AnalystRecommendationsAndHistogram_CurrentFiscalYearNumberRevisionsDownLast30Days'
	 * @return string 'AnalystRecommendationsAndHistogram_CurrentFiscalYearNumberRevisionsDownLast30Days'
	 */
	const VALUE_ANALYSTRECOMMENDATIONSANDHISTOGRAM_CURRENTFISCALYEARNUMBERREVISIONSDOWNLAST30DAYS = 'AnalystRecommendationsAndHistogram_CurrentFiscalYearNumberRevisionsDownLast30Days';
	/**
	 * Constant for value 'AnalystRecommendationsAndHistogram_NextFiscalYearNumberRevisionsUpLast30Days'
	 * @return string 'AnalystRecommendationsAndHistogram_NextFiscalYearNumberRevisionsUpLast30Days'
	 */
	const VALUE_ANALYSTRECOMMENDATIONSANDHISTOGRAM_NEXTFISCALYEARNUMBERREVISIONSUPLAST30DAYS = 'AnalystRecommendationsAndHistogram_NextFiscalYearNumberRevisionsUpLast30Days';
	/**
	 * Constant for value 'AnalystRecommendationsAndHistogram_NextFiscalYearNumberRevisionsDownLast30Days'
	 * @return string 'AnalystRecommendationsAndHistogram_NextFiscalYearNumberRevisionsDownLast30Days'
	 */
	const VALUE_ANALYSTRECOMMENDATIONSANDHISTOGRAM_NEXTFISCALYEARNUMBERREVISIONSDOWNLAST30DAYS = 'AnalystRecommendationsAndHistogram_NextFiscalYearNumberRevisionsDownLast30Days';
	/**
	 * Constant for value 'AnalystRecommendationsAndHistogram_ConsensusRecommendationCurrent'
	 * @return string 'AnalystRecommendationsAndHistogram_ConsensusRecommendationCurrent'
	 */
	const VALUE_ANALYSTRECOMMENDATIONSANDHISTOGRAM_CONSENSUSRECOMMENDATIONCURRENT = 'AnalystRecommendationsAndHistogram_ConsensusRecommendationCurrent';
	/**
	 * Constant for value 'AnalystRecommendationsAndHistogram_ConsensusRecommendation7DaysAgo'
	 * @return string 'AnalystRecommendationsAndHistogram_ConsensusRecommendation7DaysAgo'
	 */
	const VALUE_ANALYSTRECOMMENDATIONSANDHISTOGRAM_CONSENSUSRECOMMENDATION7DAYSAGO = 'AnalystRecommendationsAndHistogram_ConsensusRecommendation7DaysAgo';
	/**
	 * Constant for value 'AnalystRecommendationsAndHistogram_ConsensusRecommendation14DaysAgo'
	 * @return string 'AnalystRecommendationsAndHistogram_ConsensusRecommendation14DaysAgo'
	 */
	const VALUE_ANALYSTRECOMMENDATIONSANDHISTOGRAM_CONSENSUSRECOMMENDATION14DAYSAGO = 'AnalystRecommendationsAndHistogram_ConsensusRecommendation14DaysAgo';
	/**
	 * Constant for value 'AnalystRecommendationsAndHistogram_ConsensusRecommendation21DaysAgo'
	 * @return string 'AnalystRecommendationsAndHistogram_ConsensusRecommendation21DaysAgo'
	 */
	const VALUE_ANALYSTRECOMMENDATIONSANDHISTOGRAM_CONSENSUSRECOMMENDATION21DAYSAGO = 'AnalystRecommendationsAndHistogram_ConsensusRecommendation21DaysAgo';
	/**
	 * Constant for value 'AnalystRecommendationsAndHistogram_ConsensusRecommendation28DaysAgo'
	 * @return string 'AnalystRecommendationsAndHistogram_ConsensusRecommendation28DaysAgo'
	 */
	const VALUE_ANALYSTRECOMMENDATIONSANDHISTOGRAM_CONSENSUSRECOMMENDATION28DAYSAGO = 'AnalystRecommendationsAndHistogram_ConsensusRecommendation28DaysAgo';
	/**
	 * Constant for value 'AnalystRecommendationsAndHistogram_ConsensusRecommendation35DaysAgo'
	 * @return string 'AnalystRecommendationsAndHistogram_ConsensusRecommendation35DaysAgo'
	 */
	const VALUE_ANALYSTRECOMMENDATIONSANDHISTOGRAM_CONSENSUSRECOMMENDATION35DAYSAGO = 'AnalystRecommendationsAndHistogram_ConsensusRecommendation35DaysAgo';
	/**
	 * Constant for value 'AnalystRecommendationsAndHistogram_ExchangeCode'
	 * @return string 'AnalystRecommendationsAndHistogram_ExchangeCode'
	 */
	const VALUE_ANALYSTRECOMMENDATIONSANDHISTOGRAM_EXCHANGECODE = 'AnalystRecommendationsAndHistogram_ExchangeCode';
	/**
	 * Constant for value 'AnalystRecommendationsAndHistogram_LongTermGrowthNumberRevisionsUpLast7Days'
	 * @return string 'AnalystRecommendationsAndHistogram_LongTermGrowthNumberRevisionsUpLast7Days'
	 */
	const VALUE_ANALYSTRECOMMENDATIONSANDHISTOGRAM_LONGTERMGROWTHNUMBERREVISIONSUPLAST7DAYS = 'AnalystRecommendationsAndHistogram_LongTermGrowthNumberRevisionsUpLast7Days';
	/**
	 * Constant for value 'AnalystRecommendationsAndHistogram_LongTermGrowthNumberRevisionsDownLast7Days'
	 * @return string 'AnalystRecommendationsAndHistogram_LongTermGrowthNumberRevisionsDownLast7Days'
	 */
	const VALUE_ANALYSTRECOMMENDATIONSANDHISTOGRAM_LONGTERMGROWTHNUMBERREVISIONSDOWNLAST7DAYS = 'AnalystRecommendationsAndHistogram_LongTermGrowthNumberRevisionsDownLast7Days';
	/**
	 * Constant for value 'AnalystRecommendationsAndHistogram_LongTermGrowthNumberRevisionsUpLast30Days'
	 * @return string 'AnalystRecommendationsAndHistogram_LongTermGrowthNumberRevisionsUpLast30Days'
	 */
	const VALUE_ANALYSTRECOMMENDATIONSANDHISTOGRAM_LONGTERMGROWTHNUMBERREVISIONSUPLAST30DAYS = 'AnalystRecommendationsAndHistogram_LongTermGrowthNumberRevisionsUpLast30Days';
	/**
	 * Constant for value 'AnalystRecommendationsAndHistogram_LongTermGrowthNumberRevisionsDownLast30Days'
	 * @return string 'AnalystRecommendationsAndHistogram_LongTermGrowthNumberRevisionsDownLast30Days'
	 */
	const VALUE_ANALYSTRECOMMENDATIONSANDHISTOGRAM_LONGTERMGROWTHNUMBERREVISIONSDOWNLAST30DAYS = 'AnalystRecommendationsAndHistogram_LongTermGrowthNumberRevisionsDownLast30Days';
	/**
	 * Constant for value 'AnalystRecommendationsAndHistogram_NumberOfStrongBuyRecommendations7DaysAgo'
	 * @return string 'AnalystRecommendationsAndHistogram_NumberOfStrongBuyRecommendations7DaysAgo'
	 */
	const VALUE_ANALYSTRECOMMENDATIONSANDHISTOGRAM_NUMBEROFSTRONGBUYRECOMMENDATIONS7DAYSAGO = 'AnalystRecommendationsAndHistogram_NumberOfStrongBuyRecommendations7DaysAgo';
	/**
	 * Constant for value 'AnalystRecommendationsAndHistogram_NumberOfModerateBuyRecommendations7DaysAgo'
	 * @return string 'AnalystRecommendationsAndHistogram_NumberOfModerateBuyRecommendations7DaysAgo'
	 */
	const VALUE_ANALYSTRECOMMENDATIONSANDHISTOGRAM_NUMBEROFMODERATEBUYRECOMMENDATIONS7DAYSAGO = 'AnalystRecommendationsAndHistogram_NumberOfModerateBuyRecommendations7DaysAgo';
	/**
	 * Constant for value 'AnalystRecommendationsAndHistogram_NumberOfHoldRecommendations7DaysAgo'
	 * @return string 'AnalystRecommendationsAndHistogram_NumberOfHoldRecommendations7DaysAgo'
	 */
	const VALUE_ANALYSTRECOMMENDATIONSANDHISTOGRAM_NUMBEROFHOLDRECOMMENDATIONS7DAYSAGO = 'AnalystRecommendationsAndHistogram_NumberOfHoldRecommendations7DaysAgo';
	/**
	 * Constant for value 'AnalystRecommendationsAndHistogram_NumberOfModerateSellRecommendations7DaysAgo'
	 * @return string 'AnalystRecommendationsAndHistogram_NumberOfModerateSellRecommendations7DaysAgo'
	 */
	const VALUE_ANALYSTRECOMMENDATIONSANDHISTOGRAM_NUMBEROFMODERATESELLRECOMMENDATIONS7DAYSAGO = 'AnalystRecommendationsAndHistogram_NumberOfModerateSellRecommendations7DaysAgo';
	/**
	 * Constant for value 'AnalystRecommendationsAndHistogram_NumberOfStrongSellRecommendations7DaysAgo'
	 * @return string 'AnalystRecommendationsAndHistogram_NumberOfStrongSellRecommendations7DaysAgo'
	 */
	const VALUE_ANALYSTRECOMMENDATIONSANDHISTOGRAM_NUMBEROFSTRONGSELLRECOMMENDATIONS7DAYSAGO = 'AnalystRecommendationsAndHistogram_NumberOfStrongSellRecommendations7DaysAgo';
	/**
	 * Constant for value 'AnalystRecommendationsAndHistogram_SourceCodeForCurrentQuarterExpectedReportDate'
	 * @return string 'AnalystRecommendationsAndHistogram_SourceCodeForCurrentQuarterExpectedReportDate'
	 */
	const VALUE_ANALYSTRECOMMENDATIONSANDHISTOGRAM_SOURCECODEFORCURRENTQUARTEREXPECTEDREPORTDATE = 'AnalystRecommendationsAndHistogram_SourceCodeForCurrentQuarterExpectedReportDate';
	/**
	 * Constant for value 'AnalystRecommendationsAndHistogram_SourceCodeForNextQuarterExpectedReportDate'
	 * @return string 'AnalystRecommendationsAndHistogram_SourceCodeForNextQuarterExpectedReportDate'
	 */
	const VALUE_ANALYSTRECOMMENDATIONSANDHISTOGRAM_SOURCECODEFORNEXTQUARTEREXPECTEDREPORTDATE = 'AnalystRecommendationsAndHistogram_SourceCodeForNextQuarterExpectedReportDate';
	/**
	 * Constant for value 'AnalystRecommendationsAndHistogram_SourceCodeForCurrentFiscalYearExpectedReportDate'
	 * @return string 'AnalystRecommendationsAndHistogram_SourceCodeForCurrentFiscalYearExpectedReportDate'
	 */
	const VALUE_ANALYSTRECOMMENDATIONSANDHISTOGRAM_SOURCECODEFORCURRENTFISCALYEAREXPECTEDREPORTDATE = 'AnalystRecommendationsAndHistogram_SourceCodeForCurrentFiscalYearExpectedReportDate';
	/**
	 * Constant for value 'AnalystRecommendationsAndHistogram_SourceCodeForNextFiscalYearExpectedReportDate'
	 * @return string 'AnalystRecommendationsAndHistogram_SourceCodeForNextFiscalYearExpectedReportDate'
	 */
	const VALUE_ANALYSTRECOMMENDATIONSANDHISTOGRAM_SOURCECODEFORNEXTFISCALYEAREXPECTEDREPORTDATE = 'AnalystRecommendationsAndHistogram_SourceCodeForNextFiscalYearExpectedReportDate';
	/**
	 * Constant for value 'CurrentSalesConsensus_DataIdentificationCode'
	 * @return string 'CurrentSalesConsensus_DataIdentificationCode'
	 */
	const VALUE_CURRENTSALESCONSENSUS_DATAIDENTIFICATIONCODE = 'CurrentSalesConsensus_DataIdentificationCode';
	/**
	 * Constant for value 'CurrentSalesConsensus_ZacksMasterCode'
	 * @return string 'CurrentSalesConsensus_ZacksMasterCode'
	 */
	const VALUE_CURRENTSALESCONSENSUS_ZACKSMASTERCODE = 'CurrentSalesConsensus_ZacksMasterCode';
	/**
	 * Constant for value 'CurrentSalesConsensus_ZacksExpandedIndustryCode'
	 * @return string 'CurrentSalesConsensus_ZacksExpandedIndustryCode'
	 */
	const VALUE_CURRENTSALESCONSENSUS_ZACKSEXPANDEDINDUSTRYCODE = 'CurrentSalesConsensus_ZacksExpandedIndustryCode';
	/**
	 * Constant for value 'CurrentSalesConsensus_CurrentFiscalYearPeriodDate'
	 * @return string 'CurrentSalesConsensus_CurrentFiscalYearPeriodDate'
	 */
	const VALUE_CURRENTSALESCONSENSUS_CURRENTFISCALYEARPERIODDATE = 'CurrentSalesConsensus_CurrentFiscalYearPeriodDate';
	/**
	 * Constant for value 'CurrentSalesConsensus_CurrentFiscalYearHighSalesEstimate'
	 * @return string 'CurrentSalesConsensus_CurrentFiscalYearHighSalesEstimate'
	 */
	const VALUE_CURRENTSALESCONSENSUS_CURRENTFISCALYEARHIGHSALESESTIMATE = 'CurrentSalesConsensus_CurrentFiscalYearHighSalesEstimate';
	/**
	 * Constant for value 'CurrentSalesConsensus_CurrentFiscalYearLowSalesEstimate'
	 * @return string 'CurrentSalesConsensus_CurrentFiscalYearLowSalesEstimate'
	 */
	const VALUE_CURRENTSALESCONSENSUS_CURRENTFISCALYEARLOWSALESESTIMATE = 'CurrentSalesConsensus_CurrentFiscalYearLowSalesEstimate';
	/**
	 * Constant for value 'CurrentSalesConsensus_CurrentFiscalYearMeanSalesEstimate'
	 * @return string 'CurrentSalesConsensus_CurrentFiscalYearMeanSalesEstimate'
	 */
	const VALUE_CURRENTSALESCONSENSUS_CURRENTFISCALYEARMEANSALESESTIMATE = 'CurrentSalesConsensus_CurrentFiscalYearMeanSalesEstimate';
	/**
	 * Constant for value 'CurrentSalesConsensus_CurrentFiscalYearStandardDeviation'
	 * @return string 'CurrentSalesConsensus_CurrentFiscalYearStandardDeviation'
	 */
	const VALUE_CURRENTSALESCONSENSUS_CURRENTFISCALYEARSTANDARDDEVIATION = 'CurrentSalesConsensus_CurrentFiscalYearStandardDeviation';
	/**
	 * Constant for value 'CurrentSalesConsensus_CurrentFiscalYearNumberOfEstimatesInConsensus'
	 * @return string 'CurrentSalesConsensus_CurrentFiscalYearNumberOfEstimatesInConsensus'
	 */
	const VALUE_CURRENTSALESCONSENSUS_CURRENTFISCALYEARNUMBEROFESTIMATESINCONSENSUS = 'CurrentSalesConsensus_CurrentFiscalYearNumberOfEstimatesInConsensus';
	/**
	 * Constant for value 'CurrentSalesConsensus_CurrentFiscalYearDateOfLatestEstimate'
	 * @return string 'CurrentSalesConsensus_CurrentFiscalYearDateOfLatestEstimate'
	 */
	const VALUE_CURRENTSALESCONSENSUS_CURRENTFISCALYEARDATEOFLATESTESTIMATE = 'CurrentSalesConsensus_CurrentFiscalYearDateOfLatestEstimate';
	/**
	 * Constant for value 'CurrentSalesConsensus_NextFiscalYearPeriodDate'
	 * @return string 'CurrentSalesConsensus_NextFiscalYearPeriodDate'
	 */
	const VALUE_CURRENTSALESCONSENSUS_NEXTFISCALYEARPERIODDATE = 'CurrentSalesConsensus_NextFiscalYearPeriodDate';
	/**
	 * Constant for value 'CurrentSalesConsensus_NextFiscalYearHighSalesEstimate'
	 * @return string 'CurrentSalesConsensus_NextFiscalYearHighSalesEstimate'
	 */
	const VALUE_CURRENTSALESCONSENSUS_NEXTFISCALYEARHIGHSALESESTIMATE = 'CurrentSalesConsensus_NextFiscalYearHighSalesEstimate';
	/**
	 * Constant for value 'CurrentSalesConsensus_NextFiscalYearLowSalesEstimate'
	 * @return string 'CurrentSalesConsensus_NextFiscalYearLowSalesEstimate'
	 */
	const VALUE_CURRENTSALESCONSENSUS_NEXTFISCALYEARLOWSALESESTIMATE = 'CurrentSalesConsensus_NextFiscalYearLowSalesEstimate';
	/**
	 * Constant for value 'CurrentSalesConsensus_NextFiscalYearMeanSalesEstimate'
	 * @return string 'CurrentSalesConsensus_NextFiscalYearMeanSalesEstimate'
	 */
	const VALUE_CURRENTSALESCONSENSUS_NEXTFISCALYEARMEANSALESESTIMATE = 'CurrentSalesConsensus_NextFiscalYearMeanSalesEstimate';
	/**
	 * Constant for value 'CurrentSalesConsensus_NextFiscalYearStandardDeviation'
	 * @return string 'CurrentSalesConsensus_NextFiscalYearStandardDeviation'
	 */
	const VALUE_CURRENTSALESCONSENSUS_NEXTFISCALYEARSTANDARDDEVIATION = 'CurrentSalesConsensus_NextFiscalYearStandardDeviation';
	/**
	 * Constant for value 'CurrentSalesConsensus_NextFiscalYearNumberOfEstimatesInConsensus'
	 * @return string 'CurrentSalesConsensus_NextFiscalYearNumberOfEstimatesInConsensus'
	 */
	const VALUE_CURRENTSALESCONSENSUS_NEXTFISCALYEARNUMBEROFESTIMATESINCONSENSUS = 'CurrentSalesConsensus_NextFiscalYearNumberOfEstimatesInConsensus';
	/**
	 * Constant for value 'CurrentSalesConsensus_NextFiscalYearDateOfLatestEstimate'
	 * @return string 'CurrentSalesConsensus_NextFiscalYearDateOfLatestEstimate'
	 */
	const VALUE_CURRENTSALESCONSENSUS_NEXTFISCALYEARDATEOFLATESTESTIMATE = 'CurrentSalesConsensus_NextFiscalYearDateOfLatestEstimate';
	/**
	 * Constant for value 'CurrentSalesConsensus_CurrentQuarterPeriodDate'
	 * @return string 'CurrentSalesConsensus_CurrentQuarterPeriodDate'
	 */
	const VALUE_CURRENTSALESCONSENSUS_CURRENTQUARTERPERIODDATE = 'CurrentSalesConsensus_CurrentQuarterPeriodDate';
	/**
	 * Constant for value 'CurrentSalesConsensus_CurrentQuarterHighSalesEstimate'
	 * @return string 'CurrentSalesConsensus_CurrentQuarterHighSalesEstimate'
	 */
	const VALUE_CURRENTSALESCONSENSUS_CURRENTQUARTERHIGHSALESESTIMATE = 'CurrentSalesConsensus_CurrentQuarterHighSalesEstimate';
	/**
	 * Constant for value 'CurrentSalesConsensus_CurrentQuarterLowSalesEstimate'
	 * @return string 'CurrentSalesConsensus_CurrentQuarterLowSalesEstimate'
	 */
	const VALUE_CURRENTSALESCONSENSUS_CURRENTQUARTERLOWSALESESTIMATE = 'CurrentSalesConsensus_CurrentQuarterLowSalesEstimate';
	/**
	 * Constant for value 'CurrentSalesConsensus_CurrentQuarterMeanSalesEstimate'
	 * @return string 'CurrentSalesConsensus_CurrentQuarterMeanSalesEstimate'
	 */
	const VALUE_CURRENTSALESCONSENSUS_CURRENTQUARTERMEANSALESESTIMATE = 'CurrentSalesConsensus_CurrentQuarterMeanSalesEstimate';
	/**
	 * Constant for value 'CurrentSalesConsensus_CurrentQuarterStandardDeviation'
	 * @return string 'CurrentSalesConsensus_CurrentQuarterStandardDeviation'
	 */
	const VALUE_CURRENTSALESCONSENSUS_CURRENTQUARTERSTANDARDDEVIATION = 'CurrentSalesConsensus_CurrentQuarterStandardDeviation';
	/**
	 * Constant for value 'CurrentSalesConsensus_CurrentQuarterNumberOfEstimatesInConsensus'
	 * @return string 'CurrentSalesConsensus_CurrentQuarterNumberOfEstimatesInConsensus'
	 */
	const VALUE_CURRENTSALESCONSENSUS_CURRENTQUARTERNUMBEROFESTIMATESINCONSENSUS = 'CurrentSalesConsensus_CurrentQuarterNumberOfEstimatesInConsensus';
	/**
	 * Constant for value 'CurrentSalesConsensus_CurrentQuarterDateOfLatestEstimate'
	 * @return string 'CurrentSalesConsensus_CurrentQuarterDateOfLatestEstimate'
	 */
	const VALUE_CURRENTSALESCONSENSUS_CURRENTQUARTERDATEOFLATESTESTIMATE = 'CurrentSalesConsensus_CurrentQuarterDateOfLatestEstimate';
	/**
	 * Constant for value 'CurrentSalesConsensus_TwoQuartersOutPeriodDate'
	 * @return string 'CurrentSalesConsensus_TwoQuartersOutPeriodDate'
	 */
	const VALUE_CURRENTSALESCONSENSUS_TWOQUARTERSOUTPERIODDATE = 'CurrentSalesConsensus_TwoQuartersOutPeriodDate';
	/**
	 * Constant for value 'CurrentSalesConsensus_TwoQuartersOutHighSalesEstimate'
	 * @return string 'CurrentSalesConsensus_TwoQuartersOutHighSalesEstimate'
	 */
	const VALUE_CURRENTSALESCONSENSUS_TWOQUARTERSOUTHIGHSALESESTIMATE = 'CurrentSalesConsensus_TwoQuartersOutHighSalesEstimate';
	/**
	 * Constant for value 'CurrentSalesConsensus_TwoQuartersOutLowSalesEstimate'
	 * @return string 'CurrentSalesConsensus_TwoQuartersOutLowSalesEstimate'
	 */
	const VALUE_CURRENTSALESCONSENSUS_TWOQUARTERSOUTLOWSALESESTIMATE = 'CurrentSalesConsensus_TwoQuartersOutLowSalesEstimate';
	/**
	 * Constant for value 'CurrentSalesConsensus_TwoQuartersOutMeanSalesEstimate'
	 * @return string 'CurrentSalesConsensus_TwoQuartersOutMeanSalesEstimate'
	 */
	const VALUE_CURRENTSALESCONSENSUS_TWOQUARTERSOUTMEANSALESESTIMATE = 'CurrentSalesConsensus_TwoQuartersOutMeanSalesEstimate';
	/**
	 * Constant for value 'CurrentSalesConsensus_TwoQuartersOutStandardDeviation'
	 * @return string 'CurrentSalesConsensus_TwoQuartersOutStandardDeviation'
	 */
	const VALUE_CURRENTSALESCONSENSUS_TWOQUARTERSOUTSTANDARDDEVIATION = 'CurrentSalesConsensus_TwoQuartersOutStandardDeviation';
	/**
	 * Constant for value 'CurrentSalesConsensus_TwoQuartersOutNumberOfEstimatesInConsensus'
	 * @return string 'CurrentSalesConsensus_TwoQuartersOutNumberOfEstimatesInConsensus'
	 */
	const VALUE_CURRENTSALESCONSENSUS_TWOQUARTERSOUTNUMBEROFESTIMATESINCONSENSUS = 'CurrentSalesConsensus_TwoQuartersOutNumberOfEstimatesInConsensus';
	/**
	 * Constant for value 'CurrentSalesConsensus_TwoQuartersOutDateOfLatestEstimate'
	 * @return string 'CurrentSalesConsensus_TwoQuartersOutDateOfLatestEstimate'
	 */
	const VALUE_CURRENTSALESCONSENSUS_TWOQUARTERSOUTDATEOFLATESTESTIMATE = 'CurrentSalesConsensus_TwoQuartersOutDateOfLatestEstimate';
	/**
	 * Constant for value 'CurrentSalesConsensus_ThreeQuartersOutPeriodDate'
	 * @return string 'CurrentSalesConsensus_ThreeQuartersOutPeriodDate'
	 */
	const VALUE_CURRENTSALESCONSENSUS_THREEQUARTERSOUTPERIODDATE = 'CurrentSalesConsensus_ThreeQuartersOutPeriodDate';
	/**
	 * Constant for value 'CurrentSalesConsensus_ThreeQuartersOutHighSalesEstimate'
	 * @return string 'CurrentSalesConsensus_ThreeQuartersOutHighSalesEstimate'
	 */
	const VALUE_CURRENTSALESCONSENSUS_THREEQUARTERSOUTHIGHSALESESTIMATE = 'CurrentSalesConsensus_ThreeQuartersOutHighSalesEstimate';
	/**
	 * Constant for value 'CurrentSalesConsensus_ThreeQuartersOutLowSalesEstimate'
	 * @return string 'CurrentSalesConsensus_ThreeQuartersOutLowSalesEstimate'
	 */
	const VALUE_CURRENTSALESCONSENSUS_THREEQUARTERSOUTLOWSALESESTIMATE = 'CurrentSalesConsensus_ThreeQuartersOutLowSalesEstimate';
	/**
	 * Constant for value 'CurrentSalesConsensus_ThreeQuartersOutMeanSalesEstimate'
	 * @return string 'CurrentSalesConsensus_ThreeQuartersOutMeanSalesEstimate'
	 */
	const VALUE_CURRENTSALESCONSENSUS_THREEQUARTERSOUTMEANSALESESTIMATE = 'CurrentSalesConsensus_ThreeQuartersOutMeanSalesEstimate';
	/**
	 * Constant for value 'CurrentSalesConsensus_ThreeQuartersOutStandardDeviation'
	 * @return string 'CurrentSalesConsensus_ThreeQuartersOutStandardDeviation'
	 */
	const VALUE_CURRENTSALESCONSENSUS_THREEQUARTERSOUTSTANDARDDEVIATION = 'CurrentSalesConsensus_ThreeQuartersOutStandardDeviation';
	/**
	 * Constant for value 'CurrentSalesConsensus_ThreeQuartersOutNumberOfEstimatesInConsensus'
	 * @return string 'CurrentSalesConsensus_ThreeQuartersOutNumberOfEstimatesInConsensus'
	 */
	const VALUE_CURRENTSALESCONSENSUS_THREEQUARTERSOUTNUMBEROFESTIMATESINCONSENSUS = 'CurrentSalesConsensus_ThreeQuartersOutNumberOfEstimatesInConsensus';
	/**
	 * Constant for value 'CurrentSalesConsensus_ThreeQuartersOutDateOfLatestEstimate'
	 * @return string 'CurrentSalesConsensus_ThreeQuartersOutDateOfLatestEstimate'
	 */
	const VALUE_CURRENTSALESCONSENSUS_THREEQUARTERSOUTDATEOFLATESTESTIMATE = 'CurrentSalesConsensus_ThreeQuartersOutDateOfLatestEstimate';
	/**
	 * Constant for value 'CurrentSalesConsensus_FourQuartersOutPeriodDate'
	 * @return string 'CurrentSalesConsensus_FourQuartersOutPeriodDate'
	 */
	const VALUE_CURRENTSALESCONSENSUS_FOURQUARTERSOUTPERIODDATE = 'CurrentSalesConsensus_FourQuartersOutPeriodDate';
	/**
	 * Constant for value 'CurrentSalesConsensus_FourQuartersOutHighSalesEstimate'
	 * @return string 'CurrentSalesConsensus_FourQuartersOutHighSalesEstimate'
	 */
	const VALUE_CURRENTSALESCONSENSUS_FOURQUARTERSOUTHIGHSALESESTIMATE = 'CurrentSalesConsensus_FourQuartersOutHighSalesEstimate';
	/**
	 * Constant for value 'CurrentSalesConsensus_FourQuartersOutLowSalesEstimate'
	 * @return string 'CurrentSalesConsensus_FourQuartersOutLowSalesEstimate'
	 */
	const VALUE_CURRENTSALESCONSENSUS_FOURQUARTERSOUTLOWSALESESTIMATE = 'CurrentSalesConsensus_FourQuartersOutLowSalesEstimate';
	/**
	 * Constant for value 'CurrentSalesConsensus_FourQuartersOutMeanSalesEstimate'
	 * @return string 'CurrentSalesConsensus_FourQuartersOutMeanSalesEstimate'
	 */
	const VALUE_CURRENTSALESCONSENSUS_FOURQUARTERSOUTMEANSALESESTIMATE = 'CurrentSalesConsensus_FourQuartersOutMeanSalesEstimate';
	/**
	 * Constant for value 'CurrentSalesConsensus_FourQuartersOutStandardDeviation'
	 * @return string 'CurrentSalesConsensus_FourQuartersOutStandardDeviation'
	 */
	const VALUE_CURRENTSALESCONSENSUS_FOURQUARTERSOUTSTANDARDDEVIATION = 'CurrentSalesConsensus_FourQuartersOutStandardDeviation';
	/**
	 * Constant for value 'CurrentSalesConsensus_FourQuartersOutNumberOfEstimatesInConsensus'
	 * @return string 'CurrentSalesConsensus_FourQuartersOutNumberOfEstimatesInConsensus'
	 */
	const VALUE_CURRENTSALESCONSENSUS_FOURQUARTERSOUTNUMBEROFESTIMATESINCONSENSUS = 'CurrentSalesConsensus_FourQuartersOutNumberOfEstimatesInConsensus';
	/**
	 * Constant for value 'CurrentSalesConsensus_FourQuartersOutDateOfLatestEstimate'
	 * @return string 'CurrentSalesConsensus_FourQuartersOutDateOfLatestEstimate'
	 */
	const VALUE_CURRENTSALESCONSENSUS_FOURQUARTERSOUTDATEOFLATESTESTIMATE = 'CurrentSalesConsensus_FourQuartersOutDateOfLatestEstimate';
	/**
	 * Constant for value 'CurrentSalesConsensus_FiveQuartersOutPeriodDate'
	 * @return string 'CurrentSalesConsensus_FiveQuartersOutPeriodDate'
	 */
	const VALUE_CURRENTSALESCONSENSUS_FIVEQUARTERSOUTPERIODDATE = 'CurrentSalesConsensus_FiveQuartersOutPeriodDate';
	/**
	 * Constant for value 'CurrentSalesConsensus_FiveQuartersOutHighSalesEstimate'
	 * @return string 'CurrentSalesConsensus_FiveQuartersOutHighSalesEstimate'
	 */
	const VALUE_CURRENTSALESCONSENSUS_FIVEQUARTERSOUTHIGHSALESESTIMATE = 'CurrentSalesConsensus_FiveQuartersOutHighSalesEstimate';
	/**
	 * Constant for value 'CurrentSalesConsensus_FiveQuartersOutLowSalesEstimate'
	 * @return string 'CurrentSalesConsensus_FiveQuartersOutLowSalesEstimate'
	 */
	const VALUE_CURRENTSALESCONSENSUS_FIVEQUARTERSOUTLOWSALESESTIMATE = 'CurrentSalesConsensus_FiveQuartersOutLowSalesEstimate';
	/**
	 * Constant for value 'CurrentSalesConsensus_FiveQuartersOutMeanSalesEstimate'
	 * @return string 'CurrentSalesConsensus_FiveQuartersOutMeanSalesEstimate'
	 */
	const VALUE_CURRENTSALESCONSENSUS_FIVEQUARTERSOUTMEANSALESESTIMATE = 'CurrentSalesConsensus_FiveQuartersOutMeanSalesEstimate';
	/**
	 * Constant for value 'CurrentSalesConsensus_FiveQuartersOutStandardDeviation'
	 * @return string 'CurrentSalesConsensus_FiveQuartersOutStandardDeviation'
	 */
	const VALUE_CURRENTSALESCONSENSUS_FIVEQUARTERSOUTSTANDARDDEVIATION = 'CurrentSalesConsensus_FiveQuartersOutStandardDeviation';
	/**
	 * Constant for value 'CurrentSalesConsensus_FiveQuartersOutNumberOfEstimatesInConsensus'
	 * @return string 'CurrentSalesConsensus_FiveQuartersOutNumberOfEstimatesInConsensus'
	 */
	const VALUE_CURRENTSALESCONSENSUS_FIVEQUARTERSOUTNUMBEROFESTIMATESINCONSENSUS = 'CurrentSalesConsensus_FiveQuartersOutNumberOfEstimatesInConsensus';
	/**
	 * Constant for value 'CurrentSalesConsensus_FiveQuartersOutDateOfLatestEstimate'
	 * @return string 'CurrentSalesConsensus_FiveQuartersOutDateOfLatestEstimate'
	 */
	const VALUE_CURRENTSALESCONSENSUS_FIVEQUARTERSOUTDATEOFLATESTESTIMATE = 'CurrentSalesConsensus_FiveQuartersOutDateOfLatestEstimate';
	/**
	 * Constant for value 'CurrentSalesConsensus_SixQuartersOutPeriodDate'
	 * @return string 'CurrentSalesConsensus_SixQuartersOutPeriodDate'
	 */
	const VALUE_CURRENTSALESCONSENSUS_SIXQUARTERSOUTPERIODDATE = 'CurrentSalesConsensus_SixQuartersOutPeriodDate';
	/**
	 * Constant for value 'CurrentSalesConsensus_SixQuartersOutHighSalesEstimate'
	 * @return string 'CurrentSalesConsensus_SixQuartersOutHighSalesEstimate'
	 */
	const VALUE_CURRENTSALESCONSENSUS_SIXQUARTERSOUTHIGHSALESESTIMATE = 'CurrentSalesConsensus_SixQuartersOutHighSalesEstimate';
	/**
	 * Constant for value 'CurrentSalesConsensus_SixQuartersOutLowSalesEstimate'
	 * @return string 'CurrentSalesConsensus_SixQuartersOutLowSalesEstimate'
	 */
	const VALUE_CURRENTSALESCONSENSUS_SIXQUARTERSOUTLOWSALESESTIMATE = 'CurrentSalesConsensus_SixQuartersOutLowSalesEstimate';
	/**
	 * Constant for value 'CurrentSalesConsensus_SixQuartersOutMeanSalesEstimate'
	 * @return string 'CurrentSalesConsensus_SixQuartersOutMeanSalesEstimate'
	 */
	const VALUE_CURRENTSALESCONSENSUS_SIXQUARTERSOUTMEANSALESESTIMATE = 'CurrentSalesConsensus_SixQuartersOutMeanSalesEstimate';
	/**
	 * Constant for value 'CurrentSalesConsensus_SixQuartersOutStandardDeviation'
	 * @return string 'CurrentSalesConsensus_SixQuartersOutStandardDeviation'
	 */
	const VALUE_CURRENTSALESCONSENSUS_SIXQUARTERSOUTSTANDARDDEVIATION = 'CurrentSalesConsensus_SixQuartersOutStandardDeviation';
	/**
	 * Constant for value 'CurrentSalesConsensus_SixQuartersOutNumberOfEstimatesInConsensus'
	 * @return string 'CurrentSalesConsensus_SixQuartersOutNumberOfEstimatesInConsensus'
	 */
	const VALUE_CURRENTSALESCONSENSUS_SIXQUARTERSOUTNUMBEROFESTIMATESINCONSENSUS = 'CurrentSalesConsensus_SixQuartersOutNumberOfEstimatesInConsensus';
	/**
	 * Constant for value 'CurrentSalesConsensus_SixQuartersOutDateOfLatestEstimate'
	 * @return string 'CurrentSalesConsensus_SixQuartersOutDateOfLatestEstimate'
	 */
	const VALUE_CURRENTSALESCONSENSUS_SIXQUARTERSOUTDATEOFLATESTESTIMATE = 'CurrentSalesConsensus_SixQuartersOutDateOfLatestEstimate';
	/**
	 * Constant for value 'CurrentSalesConsensus_SevenQuartersOutPeriodDate'
	 * @return string 'CurrentSalesConsensus_SevenQuartersOutPeriodDate'
	 */
	const VALUE_CURRENTSALESCONSENSUS_SEVENQUARTERSOUTPERIODDATE = 'CurrentSalesConsensus_SevenQuartersOutPeriodDate';
	/**
	 * Constant for value 'CurrentSalesConsensus_SevenQuartersOutHighSalesEstimate'
	 * @return string 'CurrentSalesConsensus_SevenQuartersOutHighSalesEstimate'
	 */
	const VALUE_CURRENTSALESCONSENSUS_SEVENQUARTERSOUTHIGHSALESESTIMATE = 'CurrentSalesConsensus_SevenQuartersOutHighSalesEstimate';
	/**
	 * Constant for value 'CurrentSalesConsensus_SevenQuartersOutLowSalesEstimate'
	 * @return string 'CurrentSalesConsensus_SevenQuartersOutLowSalesEstimate'
	 */
	const VALUE_CURRENTSALESCONSENSUS_SEVENQUARTERSOUTLOWSALESESTIMATE = 'CurrentSalesConsensus_SevenQuartersOutLowSalesEstimate';
	/**
	 * Constant for value 'CurrentSalesConsensus_SevenQuartersOutMeanSalesEstimate'
	 * @return string 'CurrentSalesConsensus_SevenQuartersOutMeanSalesEstimate'
	 */
	const VALUE_CURRENTSALESCONSENSUS_SEVENQUARTERSOUTMEANSALESESTIMATE = 'CurrentSalesConsensus_SevenQuartersOutMeanSalesEstimate';
	/**
	 * Constant for value 'CurrentSalesConsensus_SevenQuartersOutStandardDeviation'
	 * @return string 'CurrentSalesConsensus_SevenQuartersOutStandardDeviation'
	 */
	const VALUE_CURRENTSALESCONSENSUS_SEVENQUARTERSOUTSTANDARDDEVIATION = 'CurrentSalesConsensus_SevenQuartersOutStandardDeviation';
	/**
	 * Constant for value 'CurrentSalesConsensus_SevenQuartersOutNumberOfEstimatesInConsensus'
	 * @return string 'CurrentSalesConsensus_SevenQuartersOutNumberOfEstimatesInConsensus'
	 */
	const VALUE_CURRENTSALESCONSENSUS_SEVENQUARTERSOUTNUMBEROFESTIMATESINCONSENSUS = 'CurrentSalesConsensus_SevenQuartersOutNumberOfEstimatesInConsensus';
	/**
	 * Constant for value 'CurrentSalesConsensus_SevenQuartersOutDateOfLatestEstimate'
	 * @return string 'CurrentSalesConsensus_SevenQuartersOutDateOfLatestEstimate'
	 */
	const VALUE_CURRENTSALESCONSENSUS_SEVENQUARTERSOUTDATEOFLATESTESTIMATE = 'CurrentSalesConsensus_SevenQuartersOutDateOfLatestEstimate';
	/**
	 * Constant for value 'CurrentSalesConsensus_EightQuartersOutPeriodDate'
	 * @return string 'CurrentSalesConsensus_EightQuartersOutPeriodDate'
	 */
	const VALUE_CURRENTSALESCONSENSUS_EIGHTQUARTERSOUTPERIODDATE = 'CurrentSalesConsensus_EightQuartersOutPeriodDate';
	/**
	 * Constant for value 'CurrentSalesConsensus_EightQuartersOutHighSalesEstimate'
	 * @return string 'CurrentSalesConsensus_EightQuartersOutHighSalesEstimate'
	 */
	const VALUE_CURRENTSALESCONSENSUS_EIGHTQUARTERSOUTHIGHSALESESTIMATE = 'CurrentSalesConsensus_EightQuartersOutHighSalesEstimate';
	/**
	 * Constant for value 'CurrentSalesConsensus_EightQuartersOutLowSalesEstimate'
	 * @return string 'CurrentSalesConsensus_EightQuartersOutLowSalesEstimate'
	 */
	const VALUE_CURRENTSALESCONSENSUS_EIGHTQUARTERSOUTLOWSALESESTIMATE = 'CurrentSalesConsensus_EightQuartersOutLowSalesEstimate';
	/**
	 * Constant for value 'CurrentSalesConsensus_EightQuartersOutMeanSalesEstimate'
	 * @return string 'CurrentSalesConsensus_EightQuartersOutMeanSalesEstimate'
	 */
	const VALUE_CURRENTSALESCONSENSUS_EIGHTQUARTERSOUTMEANSALESESTIMATE = 'CurrentSalesConsensus_EightQuartersOutMeanSalesEstimate';
	/**
	 * Constant for value 'CurrentSalesConsensus_EightQuartersOutStandardDeviation'
	 * @return string 'CurrentSalesConsensus_EightQuartersOutStandardDeviation'
	 */
	const VALUE_CURRENTSALESCONSENSUS_EIGHTQUARTERSOUTSTANDARDDEVIATION = 'CurrentSalesConsensus_EightQuartersOutStandardDeviation';
	/**
	 * Constant for value 'CurrentSalesConsensus_EightQuartersOutNumberOfEstimatesInConsensus'
	 * @return string 'CurrentSalesConsensus_EightQuartersOutNumberOfEstimatesInConsensus'
	 */
	const VALUE_CURRENTSALESCONSENSUS_EIGHTQUARTERSOUTNUMBEROFESTIMATESINCONSENSUS = 'CurrentSalesConsensus_EightQuartersOutNumberOfEstimatesInConsensus';
	/**
	 * Constant for value 'CurrentSalesConsensus_EightQuartersOutDateOfLatestEstimate'
	 * @return string 'CurrentSalesConsensus_EightQuartersOutDateOfLatestEstimate'
	 */
	const VALUE_CURRENTSALESCONSENSUS_EIGHTQUARTERSOUTDATEOFLATESTESTIMATE = 'CurrentSalesConsensus_EightQuartersOutDateOfLatestEstimate';
	/**
	 * Constant for value 'CurrentSalesConsensusChange_DataIdentificationCode'
	 * @return string 'CurrentSalesConsensusChange_DataIdentificationCode'
	 */
	const VALUE_CURRENTSALESCONSENSUSCHANGE_DATAIDENTIFICATIONCODE = 'CurrentSalesConsensusChange_DataIdentificationCode';
	/**
	 * Constant for value 'CurrentSalesConsensusChange_ZacksMasterCode'
	 * @return string 'CurrentSalesConsensusChange_ZacksMasterCode'
	 */
	const VALUE_CURRENTSALESCONSENSUSCHANGE_ZACKSMASTERCODE = 'CurrentSalesConsensusChange_ZacksMasterCode';
	/**
	 * Constant for value 'CurrentSalesConsensusChange_ZacksExpandedIndustryCode'
	 * @return string 'CurrentSalesConsensusChange_ZacksExpandedIndustryCode'
	 */
	const VALUE_CURRENTSALESCONSENSUSCHANGE_ZACKSEXPANDEDINDUSTRYCODE = 'CurrentSalesConsensusChange_ZacksExpandedIndustryCode';
	/**
	 * Constant for value 'CurrentSalesConsensusChange_CurrentFiscalYearPeriodDate'
	 * @return string 'CurrentSalesConsensusChange_CurrentFiscalYearPeriodDate'
	 */
	const VALUE_CURRENTSALESCONSENSUSCHANGE_CURRENTFISCALYEARPERIODDATE = 'CurrentSalesConsensusChange_CurrentFiscalYearPeriodDate';
	/**
	 * Constant for value 'CurrentSalesConsensusChange_CurrentFiscalYearMeanEstimate'
	 * @return string 'CurrentSalesConsensusChange_CurrentFiscalYearMeanEstimate'
	 */
	const VALUE_CURRENTSALESCONSENSUSCHANGE_CURRENTFISCALYEARMEANESTIMATE = 'CurrentSalesConsensusChange_CurrentFiscalYearMeanEstimate';
	/**
	 * Constant for value 'CurrentSalesConsensusChange_CurrentFiscalYear1WeekPercentageChangeInConsensusMean'
	 * @return string 'CurrentSalesConsensusChange_CurrentFiscalYear1WeekPercentageChangeInConsensusMean'
	 */
	const VALUE_CURRENTSALESCONSENSUSCHANGE_CURRENTFISCALYEAR1WEEKPERCENTAGECHANGEINCONSENSUSMEAN = 'CurrentSalesConsensusChange_CurrentFiscalYear1WeekPercentageChangeInConsensusMean';
	/**
	 * Constant for value 'CurrentSalesConsensusChange_CurrentFiscalYearNumberAnalystsEstimatesIncreased1WeekToCurrent'
	 * @return string 'CurrentSalesConsensusChange_CurrentFiscalYearNumberAnalystsEstimatesIncreased1WeekToCurrent'
	 */
	const VALUE_CURRENTSALESCONSENSUSCHANGE_CURRENTFISCALYEARNUMBERANALYSTSESTIMATESINCREASED1WEEKTOCURRENT = 'CurrentSalesConsensusChange_CurrentFiscalYearNumberAnalystsEstimatesIncreased1WeekToCurrent';
	/**
	 * Constant for value 'CurrentSalesConsensusChange_CurrentFiscalYearNumberAnalystsEstimatesDecreased1WeekToCurrent'
	 * @return string 'CurrentSalesConsensusChange_CurrentFiscalYearNumberAnalystsEstimatesDecreased1WeekToCurrent'
	 */
	const VALUE_CURRENTSALESCONSENSUSCHANGE_CURRENTFISCALYEARNUMBERANALYSTSESTIMATESDECREASED1WEEKTOCURRENT = 'CurrentSalesConsensusChange_CurrentFiscalYearNumberAnalystsEstimatesDecreased1WeekToCurrent';
	/**
	 * Constant for value 'CurrentSalesConsensusChange_CurrentFiscalYear1MonthPercentageChangeInConsensusMean'
	 * @return string 'CurrentSalesConsensusChange_CurrentFiscalYear1MonthPercentageChangeInConsensusMean'
	 */
	const VALUE_CURRENTSALESCONSENSUSCHANGE_CURRENTFISCALYEAR1MONTHPERCENTAGECHANGEINCONSENSUSMEAN = 'CurrentSalesConsensusChange_CurrentFiscalYear1MonthPercentageChangeInConsensusMean';
	/**
	 * Constant for value 'CurrentSalesConsensusChange_CurrentFiscalYearNumberAnalystsEstimatesIncreased1MonthToCurrent'
	 * @return string 'CurrentSalesConsensusChange_CurrentFiscalYearNumberAnalystsEstimatesIncreased1MonthToCurrent'
	 */
	const VALUE_CURRENTSALESCONSENSUSCHANGE_CURRENTFISCALYEARNUMBERANALYSTSESTIMATESINCREASED1MONTHTOCURRENT = 'CurrentSalesConsensusChange_CurrentFiscalYearNumberAnalystsEstimatesIncreased1MonthToCurrent';
	/**
	 * Constant for value 'CurrentSalesConsensusChange_CurrentFiscalYearNumberAnalystsEstimatesDecreased1MonthToCurrent'
	 * @return string 'CurrentSalesConsensusChange_CurrentFiscalYearNumberAnalystsEstimatesDecreased1MonthToCurrent'
	 */
	const VALUE_CURRENTSALESCONSENSUSCHANGE_CURRENTFISCALYEARNUMBERANALYSTSESTIMATESDECREASED1MONTHTOCURRENT = 'CurrentSalesConsensusChange_CurrentFiscalYearNumberAnalystsEstimatesDecreased1MonthToCurrent';
	/**
	 * Constant for value 'CurrentSalesConsensusChange_CurrentFiscalYear3MonthPercentageChangeInConsensusMean'
	 * @return string 'CurrentSalesConsensusChange_CurrentFiscalYear3MonthPercentageChangeInConsensusMean'
	 */
	const VALUE_CURRENTSALESCONSENSUSCHANGE_CURRENTFISCALYEAR3MONTHPERCENTAGECHANGEINCONSENSUSMEAN = 'CurrentSalesConsensusChange_CurrentFiscalYear3MonthPercentageChangeInConsensusMean';
	/**
	 * Constant for value 'CurrentSalesConsensusChange_CurrentFiscalYearNumberAnalystsEstimatesIncreased3MonthsToCurrent'
	 * @return string 'CurrentSalesConsensusChange_CurrentFiscalYearNumberAnalystsEstimatesIncreased3MonthsToCurrent'
	 */
	const VALUE_CURRENTSALESCONSENSUSCHANGE_CURRENTFISCALYEARNUMBERANALYSTSESTIMATESINCREASED3MONTHSTOCURRENT = 'CurrentSalesConsensusChange_CurrentFiscalYearNumberAnalystsEstimatesIncreased3MonthsToCurrent';
	/**
	 * Constant for value 'CurrentSalesConsensusChange_CurrentFiscalYearNumberAnalystsEstimatesDecreased3MonthsToCurrent'
	 * @return string 'CurrentSalesConsensusChange_CurrentFiscalYearNumberAnalystsEstimatesDecreased3MonthsToCurrent'
	 */
	const VALUE_CURRENTSALESCONSENSUSCHANGE_CURRENTFISCALYEARNUMBERANALYSTSESTIMATESDECREASED3MONTHSTOCURRENT = 'CurrentSalesConsensusChange_CurrentFiscalYearNumberAnalystsEstimatesDecreased3MonthsToCurrent';
	/**
	 * Constant for value 'CurrentSalesConsensusChange_CurrentFiscalYearMedianEstimate'
	 * @return string 'CurrentSalesConsensusChange_CurrentFiscalYearMedianEstimate'
	 */
	const VALUE_CURRENTSALESCONSENSUSCHANGE_CURRENTFISCALYEARMEDIANESTIMATE = 'CurrentSalesConsensusChange_CurrentFiscalYearMedianEstimate';
	/**
	 * Constant for value 'CurrentSalesConsensusChange_CurrentFiscalYearDateOfLatestEstimate'
	 * @return string 'CurrentSalesConsensusChange_CurrentFiscalYearDateOfLatestEstimate'
	 */
	const VALUE_CURRENTSALESCONSENSUSCHANGE_CURRENTFISCALYEARDATEOFLATESTESTIMATE = 'CurrentSalesConsensusChange_CurrentFiscalYearDateOfLatestEstimate';
	/**
	 * Constant for value 'CurrentSalesConsensusChange_NextFiscalYearPeriodDate'
	 * @return string 'CurrentSalesConsensusChange_NextFiscalYearPeriodDate'
	 */
	const VALUE_CURRENTSALESCONSENSUSCHANGE_NEXTFISCALYEARPERIODDATE = 'CurrentSalesConsensusChange_NextFiscalYearPeriodDate';
	/**
	 * Constant for value 'CurrentSalesConsensusChange_NextFiscalYearMeanEstimate'
	 * @return string 'CurrentSalesConsensusChange_NextFiscalYearMeanEstimate'
	 */
	const VALUE_CURRENTSALESCONSENSUSCHANGE_NEXTFISCALYEARMEANESTIMATE = 'CurrentSalesConsensusChange_NextFiscalYearMeanEstimate';
	/**
	 * Constant for value 'CurrentSalesConsensusChange_NextFiscalYear1WeekPercentageChangeInConsensusMean'
	 * @return string 'CurrentSalesConsensusChange_NextFiscalYear1WeekPercentageChangeInConsensusMean'
	 */
	const VALUE_CURRENTSALESCONSENSUSCHANGE_NEXTFISCALYEAR1WEEKPERCENTAGECHANGEINCONSENSUSMEAN = 'CurrentSalesConsensusChange_NextFiscalYear1WeekPercentageChangeInConsensusMean';
	/**
	 * Constant for value 'CurrentSalesConsensusChange_NextFiscalYearNumberAnalystsEstimatesIncreased1WeekToCurrent'
	 * @return string 'CurrentSalesConsensusChange_NextFiscalYearNumberAnalystsEstimatesIncreased1WeekToCurrent'
	 */
	const VALUE_CURRENTSALESCONSENSUSCHANGE_NEXTFISCALYEARNUMBERANALYSTSESTIMATESINCREASED1WEEKTOCURRENT = 'CurrentSalesConsensusChange_NextFiscalYearNumberAnalystsEstimatesIncreased1WeekToCurrent';
	/**
	 * Constant for value 'CurrentSalesConsensusChange_NextFiscalYearNumberAnalystsEstimatesDecreased1WeekToCurrent'
	 * @return string 'CurrentSalesConsensusChange_NextFiscalYearNumberAnalystsEstimatesDecreased1WeekToCurrent'
	 */
	const VALUE_CURRENTSALESCONSENSUSCHANGE_NEXTFISCALYEARNUMBERANALYSTSESTIMATESDECREASED1WEEKTOCURRENT = 'CurrentSalesConsensusChange_NextFiscalYearNumberAnalystsEstimatesDecreased1WeekToCurrent';
	/**
	 * Constant for value 'CurrentSalesConsensusChange_NextFiscalYear1MonthPercentageChangeInConsensusMean'
	 * @return string 'CurrentSalesConsensusChange_NextFiscalYear1MonthPercentageChangeInConsensusMean'
	 */
	const VALUE_CURRENTSALESCONSENSUSCHANGE_NEXTFISCALYEAR1MONTHPERCENTAGECHANGEINCONSENSUSMEAN = 'CurrentSalesConsensusChange_NextFiscalYear1MonthPercentageChangeInConsensusMean';
	/**
	 * Constant for value 'CurrentSalesConsensusChange_NextFiscalYearNumberAnalystsEstimatesIncreased1MonthToCurrent'
	 * @return string 'CurrentSalesConsensusChange_NextFiscalYearNumberAnalystsEstimatesIncreased1MonthToCurrent'
	 */
	const VALUE_CURRENTSALESCONSENSUSCHANGE_NEXTFISCALYEARNUMBERANALYSTSESTIMATESINCREASED1MONTHTOCURRENT = 'CurrentSalesConsensusChange_NextFiscalYearNumberAnalystsEstimatesIncreased1MonthToCurrent';
	/**
	 * Constant for value 'CurrentSalesConsensusChange_NextFiscalYearNumberAnalystsEstimatesDecreased1MonthToCurrent'
	 * @return string 'CurrentSalesConsensusChange_NextFiscalYearNumberAnalystsEstimatesDecreased1MonthToCurrent'
	 */
	const VALUE_CURRENTSALESCONSENSUSCHANGE_NEXTFISCALYEARNUMBERANALYSTSESTIMATESDECREASED1MONTHTOCURRENT = 'CurrentSalesConsensusChange_NextFiscalYearNumberAnalystsEstimatesDecreased1MonthToCurrent';
	/**
	 * Constant for value 'CurrentSalesConsensusChange_NextFiscalYear3MonthPercentageChangeInConsensusMean'
	 * @return string 'CurrentSalesConsensusChange_NextFiscalYear3MonthPercentageChangeInConsensusMean'
	 */
	const VALUE_CURRENTSALESCONSENSUSCHANGE_NEXTFISCALYEAR3MONTHPERCENTAGECHANGEINCONSENSUSMEAN = 'CurrentSalesConsensusChange_NextFiscalYear3MonthPercentageChangeInConsensusMean';
	/**
	 * Constant for value 'CurrentSalesConsensusChange_NextFiscalYearNumberAnalystsEstimatesIncreased3MonthsToCurrent'
	 * @return string 'CurrentSalesConsensusChange_NextFiscalYearNumberAnalystsEstimatesIncreased3MonthsToCurrent'
	 */
	const VALUE_CURRENTSALESCONSENSUSCHANGE_NEXTFISCALYEARNUMBERANALYSTSESTIMATESINCREASED3MONTHSTOCURRENT = 'CurrentSalesConsensusChange_NextFiscalYearNumberAnalystsEstimatesIncreased3MonthsToCurrent';
	/**
	 * Constant for value 'CurrentSalesConsensusChange_NextFiscalYearNumberAnalystsEstimatesDecreased3MonthsToCurrent'
	 * @return string 'CurrentSalesConsensusChange_NextFiscalYearNumberAnalystsEstimatesDecreased3MonthsToCurrent'
	 */
	const VALUE_CURRENTSALESCONSENSUSCHANGE_NEXTFISCALYEARNUMBERANALYSTSESTIMATESDECREASED3MONTHSTOCURRENT = 'CurrentSalesConsensusChange_NextFiscalYearNumberAnalystsEstimatesDecreased3MonthsToCurrent';
	/**
	 * Constant for value 'CurrentSalesConsensusChange_NextFiscalYearMedianEstimate'
	 * @return string 'CurrentSalesConsensusChange_NextFiscalYearMedianEstimate'
	 */
	const VALUE_CURRENTSALESCONSENSUSCHANGE_NEXTFISCALYEARMEDIANESTIMATE = 'CurrentSalesConsensusChange_NextFiscalYearMedianEstimate';
	/**
	 * Constant for value 'CurrentSalesConsensusChange_NextFiscalYearDateOfLatestEstimate'
	 * @return string 'CurrentSalesConsensusChange_NextFiscalYearDateOfLatestEstimate'
	 */
	const VALUE_CURRENTSALESCONSENSUSCHANGE_NEXTFISCALYEARDATEOFLATESTESTIMATE = 'CurrentSalesConsensusChange_NextFiscalYearDateOfLatestEstimate';
	/**
	 * Constant for value 'CurrentSalesConsensusChange_CurrentQuarterPeriodDate'
	 * @return string 'CurrentSalesConsensusChange_CurrentQuarterPeriodDate'
	 */
	const VALUE_CURRENTSALESCONSENSUSCHANGE_CURRENTQUARTERPERIODDATE = 'CurrentSalesConsensusChange_CurrentQuarterPeriodDate';
	/**
	 * Constant for value 'CurrentSalesConsensusChange_CurrentQuarterMeanEstimate'
	 * @return string 'CurrentSalesConsensusChange_CurrentQuarterMeanEstimate'
	 */
	const VALUE_CURRENTSALESCONSENSUSCHANGE_CURRENTQUARTERMEANESTIMATE = 'CurrentSalesConsensusChange_CurrentQuarterMeanEstimate';
	/**
	 * Constant for value 'CurrentSalesConsensusChange_CurrentQuarter1WeekPercentageChangeInConsensusMean'
	 * @return string 'CurrentSalesConsensusChange_CurrentQuarter1WeekPercentageChangeInConsensusMean'
	 */
	const VALUE_CURRENTSALESCONSENSUSCHANGE_CURRENTQUARTER1WEEKPERCENTAGECHANGEINCONSENSUSMEAN = 'CurrentSalesConsensusChange_CurrentQuarter1WeekPercentageChangeInConsensusMean';
	/**
	 * Constant for value 'CurrentSalesConsensusChange_CurrentQuarterNumberAnalystsEstimatesIncreased1WeekToCurrent'
	 * @return string 'CurrentSalesConsensusChange_CurrentQuarterNumberAnalystsEstimatesIncreased1WeekToCurrent'
	 */
	const VALUE_CURRENTSALESCONSENSUSCHANGE_CURRENTQUARTERNUMBERANALYSTSESTIMATESINCREASED1WEEKTOCURRENT = 'CurrentSalesConsensusChange_CurrentQuarterNumberAnalystsEstimatesIncreased1WeekToCurrent';
	/**
	 * Constant for value 'CurrentSalesConsensusChange_CurrentQuarterNumberAnalystsEstimatesDecreased1WeekToCurrent'
	 * @return string 'CurrentSalesConsensusChange_CurrentQuarterNumberAnalystsEstimatesDecreased1WeekToCurrent'
	 */
	const VALUE_CURRENTSALESCONSENSUSCHANGE_CURRENTQUARTERNUMBERANALYSTSESTIMATESDECREASED1WEEKTOCURRENT = 'CurrentSalesConsensusChange_CurrentQuarterNumberAnalystsEstimatesDecreased1WeekToCurrent';
	/**
	 * Constant for value 'CurrentSalesConsensusChange_CurrentQuarter1MonthPercentageChangeInConsensusMean'
	 * @return string 'CurrentSalesConsensusChange_CurrentQuarter1MonthPercentageChangeInConsensusMean'
	 */
	const VALUE_CURRENTSALESCONSENSUSCHANGE_CURRENTQUARTER1MONTHPERCENTAGECHANGEINCONSENSUSMEAN = 'CurrentSalesConsensusChange_CurrentQuarter1MonthPercentageChangeInConsensusMean';
	/**
	 * Constant for value 'CurrentSalesConsensusChange_CurrentQuarterNumberAnalystsEstimatesIncreased1MonthToCurrent'
	 * @return string 'CurrentSalesConsensusChange_CurrentQuarterNumberAnalystsEstimatesIncreased1MonthToCurrent'
	 */
	const VALUE_CURRENTSALESCONSENSUSCHANGE_CURRENTQUARTERNUMBERANALYSTSESTIMATESINCREASED1MONTHTOCURRENT = 'CurrentSalesConsensusChange_CurrentQuarterNumberAnalystsEstimatesIncreased1MonthToCurrent';
	/**
	 * Constant for value 'CurrentSalesConsensusChange_CurrentQuarterNumberAnalystsEstimatesDecreased1MonthToCurrent'
	 * @return string 'CurrentSalesConsensusChange_CurrentQuarterNumberAnalystsEstimatesDecreased1MonthToCurrent'
	 */
	const VALUE_CURRENTSALESCONSENSUSCHANGE_CURRENTQUARTERNUMBERANALYSTSESTIMATESDECREASED1MONTHTOCURRENT = 'CurrentSalesConsensusChange_CurrentQuarterNumberAnalystsEstimatesDecreased1MonthToCurrent';
	/**
	 * Constant for value 'CurrentSalesConsensusChange_CurrentQuarter3MonthPercentageChangeInConsensusMean'
	 * @return string 'CurrentSalesConsensusChange_CurrentQuarter3MonthPercentageChangeInConsensusMean'
	 */
	const VALUE_CURRENTSALESCONSENSUSCHANGE_CURRENTQUARTER3MONTHPERCENTAGECHANGEINCONSENSUSMEAN = 'CurrentSalesConsensusChange_CurrentQuarter3MonthPercentageChangeInConsensusMean';
	/**
	 * Constant for value 'CurrentSalesConsensusChange_CurrentQuarterNumberAnalystsEstimatesIncreased3MonthsToCurrent'
	 * @return string 'CurrentSalesConsensusChange_CurrentQuarterNumberAnalystsEstimatesIncreased3MonthsToCurrent'
	 */
	const VALUE_CURRENTSALESCONSENSUSCHANGE_CURRENTQUARTERNUMBERANALYSTSESTIMATESINCREASED3MONTHSTOCURRENT = 'CurrentSalesConsensusChange_CurrentQuarterNumberAnalystsEstimatesIncreased3MonthsToCurrent';
	/**
	 * Constant for value 'CurrentSalesConsensusChange_CurrentQuarterNumberAnalystsEstimatesDecreased3MonthsToCurrent'
	 * @return string 'CurrentSalesConsensusChange_CurrentQuarterNumberAnalystsEstimatesDecreased3MonthsToCurrent'
	 */
	const VALUE_CURRENTSALESCONSENSUSCHANGE_CURRENTQUARTERNUMBERANALYSTSESTIMATESDECREASED3MONTHSTOCURRENT = 'CurrentSalesConsensusChange_CurrentQuarterNumberAnalystsEstimatesDecreased3MonthsToCurrent';
	/**
	 * Constant for value 'CurrentSalesConsensusChange_CurrentQuarterMedianEstimate'
	 * @return string 'CurrentSalesConsensusChange_CurrentQuarterMedianEstimate'
	 */
	const VALUE_CURRENTSALESCONSENSUSCHANGE_CURRENTQUARTERMEDIANESTIMATE = 'CurrentSalesConsensusChange_CurrentQuarterMedianEstimate';
	/**
	 * Constant for value 'CurrentSalesConsensusChange_CurrentQuarterDateOfLatestEstimate'
	 * @return string 'CurrentSalesConsensusChange_CurrentQuarterDateOfLatestEstimate'
	 */
	const VALUE_CURRENTSALESCONSENSUSCHANGE_CURRENTQUARTERDATEOFLATESTESTIMATE = 'CurrentSalesConsensusChange_CurrentQuarterDateOfLatestEstimate';
	/**
	 * Constant for value 'CurrentSalesConsensusChange_TwoQuartersOutPeriodDate'
	 * @return string 'CurrentSalesConsensusChange_TwoQuartersOutPeriodDate'
	 */
	const VALUE_CURRENTSALESCONSENSUSCHANGE_TWOQUARTERSOUTPERIODDATE = 'CurrentSalesConsensusChange_TwoQuartersOutPeriodDate';
	/**
	 * Constant for value 'CurrentSalesConsensusChange_TwoQuartersOutMeanEstimate'
	 * @return string 'CurrentSalesConsensusChange_TwoQuartersOutMeanEstimate'
	 */
	const VALUE_CURRENTSALESCONSENSUSCHANGE_TWOQUARTERSOUTMEANESTIMATE = 'CurrentSalesConsensusChange_TwoQuartersOutMeanEstimate';
	/**
	 * Constant for value 'CurrentSalesConsensusChange_TwoQuartersOut1WeekPercentageChangeInConsensusMean'
	 * @return string 'CurrentSalesConsensusChange_TwoQuartersOut1WeekPercentageChangeInConsensusMean'
	 */
	const VALUE_CURRENTSALESCONSENSUSCHANGE_TWOQUARTERSOUT1WEEKPERCENTAGECHANGEINCONSENSUSMEAN = 'CurrentSalesConsensusChange_TwoQuartersOut1WeekPercentageChangeInConsensusMean';
	/**
	 * Constant for value 'CurrentSalesConsensusChange_TwoQuartersOutNumberAnalystsEstimatesIncreased1WeekToCurrent'
	 * @return string 'CurrentSalesConsensusChange_TwoQuartersOutNumberAnalystsEstimatesIncreased1WeekToCurrent'
	 */
	const VALUE_CURRENTSALESCONSENSUSCHANGE_TWOQUARTERSOUTNUMBERANALYSTSESTIMATESINCREASED1WEEKTOCURRENT = 'CurrentSalesConsensusChange_TwoQuartersOutNumberAnalystsEstimatesIncreased1WeekToCurrent';
	/**
	 * Constant for value 'CurrentSalesConsensusChange_TwoQuartersOutNumberAnalystsEstimatesDecreased1WeekToCurrent'
	 * @return string 'CurrentSalesConsensusChange_TwoQuartersOutNumberAnalystsEstimatesDecreased1WeekToCurrent'
	 */
	const VALUE_CURRENTSALESCONSENSUSCHANGE_TWOQUARTERSOUTNUMBERANALYSTSESTIMATESDECREASED1WEEKTOCURRENT = 'CurrentSalesConsensusChange_TwoQuartersOutNumberAnalystsEstimatesDecreased1WeekToCurrent';
	/**
	 * Constant for value 'CurrentSalesConsensusChange_TwoQuartersOut1MonthPercentageChangeInConsensusMean'
	 * @return string 'CurrentSalesConsensusChange_TwoQuartersOut1MonthPercentageChangeInConsensusMean'
	 */
	const VALUE_CURRENTSALESCONSENSUSCHANGE_TWOQUARTERSOUT1MONTHPERCENTAGECHANGEINCONSENSUSMEAN = 'CurrentSalesConsensusChange_TwoQuartersOut1MonthPercentageChangeInConsensusMean';
	/**
	 * Constant for value 'CurrentSalesConsensusChange_TwoQuartersOutNumberAnalystsEstimatesIncreased1MonthToCurrent'
	 * @return string 'CurrentSalesConsensusChange_TwoQuartersOutNumberAnalystsEstimatesIncreased1MonthToCurrent'
	 */
	const VALUE_CURRENTSALESCONSENSUSCHANGE_TWOQUARTERSOUTNUMBERANALYSTSESTIMATESINCREASED1MONTHTOCURRENT = 'CurrentSalesConsensusChange_TwoQuartersOutNumberAnalystsEstimatesIncreased1MonthToCurrent';
	/**
	 * Constant for value 'CurrentSalesConsensusChange_TwoQuartersOutNumberAnalystsEstimatesDecreased1MonthToCurrent'
	 * @return string 'CurrentSalesConsensusChange_TwoQuartersOutNumberAnalystsEstimatesDecreased1MonthToCurrent'
	 */
	const VALUE_CURRENTSALESCONSENSUSCHANGE_TWOQUARTERSOUTNUMBERANALYSTSESTIMATESDECREASED1MONTHTOCURRENT = 'CurrentSalesConsensusChange_TwoQuartersOutNumberAnalystsEstimatesDecreased1MonthToCurrent';
	/**
	 * Constant for value 'CurrentSalesConsensusChange_TwoQuartersOut3MonthPercentageChangeInConsensusMean'
	 * @return string 'CurrentSalesConsensusChange_TwoQuartersOut3MonthPercentageChangeInConsensusMean'
	 */
	const VALUE_CURRENTSALESCONSENSUSCHANGE_TWOQUARTERSOUT3MONTHPERCENTAGECHANGEINCONSENSUSMEAN = 'CurrentSalesConsensusChange_TwoQuartersOut3MonthPercentageChangeInConsensusMean';
	/**
	 * Constant for value 'CurrentSalesConsensusChange_TwoQuartersOutNumberAnalystsEstimatesIncreased3MonthsToCurrent'
	 * @return string 'CurrentSalesConsensusChange_TwoQuartersOutNumberAnalystsEstimatesIncreased3MonthsToCurrent'
	 */
	const VALUE_CURRENTSALESCONSENSUSCHANGE_TWOQUARTERSOUTNUMBERANALYSTSESTIMATESINCREASED3MONTHSTOCURRENT = 'CurrentSalesConsensusChange_TwoQuartersOutNumberAnalystsEstimatesIncreased3MonthsToCurrent';
	/**
	 * Constant for value 'CurrentSalesConsensusChange_TwoQuartersOutNumberAnalystsEstimatesDecreased3MonthsToCurrent'
	 * @return string 'CurrentSalesConsensusChange_TwoQuartersOutNumberAnalystsEstimatesDecreased3MonthsToCurrent'
	 */
	const VALUE_CURRENTSALESCONSENSUSCHANGE_TWOQUARTERSOUTNUMBERANALYSTSESTIMATESDECREASED3MONTHSTOCURRENT = 'CurrentSalesConsensusChange_TwoQuartersOutNumberAnalystsEstimatesDecreased3MonthsToCurrent';
	/**
	 * Constant for value 'CurrentSalesConsensusChange_TwoQuartersOutMedianEstimate'
	 * @return string 'CurrentSalesConsensusChange_TwoQuartersOutMedianEstimate'
	 */
	const VALUE_CURRENTSALESCONSENSUSCHANGE_TWOQUARTERSOUTMEDIANESTIMATE = 'CurrentSalesConsensusChange_TwoQuartersOutMedianEstimate';
	/**
	 * Constant for value 'CurrentSalesConsensusChange_TwoQuartersOutDateOfLatestEstimate'
	 * @return string 'CurrentSalesConsensusChange_TwoQuartersOutDateOfLatestEstimate'
	 */
	const VALUE_CURRENTSALESCONSENSUSCHANGE_TWOQUARTERSOUTDATEOFLATESTESTIMATE = 'CurrentSalesConsensusChange_TwoQuartersOutDateOfLatestEstimate';
	/**
	 * Constant for value 'CurrentSalesConsensusChange_ThreeQuartersOutPeriodDate'
	 * @return string 'CurrentSalesConsensusChange_ThreeQuartersOutPeriodDate'
	 */
	const VALUE_CURRENTSALESCONSENSUSCHANGE_THREEQUARTERSOUTPERIODDATE = 'CurrentSalesConsensusChange_ThreeQuartersOutPeriodDate';
	/**
	 * Constant for value 'CurrentSalesConsensusChange_ThreeQuartersOutMeanEstimate'
	 * @return string 'CurrentSalesConsensusChange_ThreeQuartersOutMeanEstimate'
	 */
	const VALUE_CURRENTSALESCONSENSUSCHANGE_THREEQUARTERSOUTMEANESTIMATE = 'CurrentSalesConsensusChange_ThreeQuartersOutMeanEstimate';
	/**
	 * Constant for value 'CurrentSalesConsensusChange_ThreeQuartersOut1WeekPercentageChangeInConsensusMean'
	 * @return string 'CurrentSalesConsensusChange_ThreeQuartersOut1WeekPercentageChangeInConsensusMean'
	 */
	const VALUE_CURRENTSALESCONSENSUSCHANGE_THREEQUARTERSOUT1WEEKPERCENTAGECHANGEINCONSENSUSMEAN = 'CurrentSalesConsensusChange_ThreeQuartersOut1WeekPercentageChangeInConsensusMean';
	/**
	 * Constant for value 'CurrentSalesConsensusChange_ThreeQuartersOutNumberAnalystsEstimatesIncreased1WeekToCurrent'
	 * @return string 'CurrentSalesConsensusChange_ThreeQuartersOutNumberAnalystsEstimatesIncreased1WeekToCurrent'
	 */
	const VALUE_CURRENTSALESCONSENSUSCHANGE_THREEQUARTERSOUTNUMBERANALYSTSESTIMATESINCREASED1WEEKTOCURRENT = 'CurrentSalesConsensusChange_ThreeQuartersOutNumberAnalystsEstimatesIncreased1WeekToCurrent';
	/**
	 * Constant for value 'CurrentSalesConsensusChange_ThreeQuartersOutNumberAnalystsEstimatesDecreased1WeekToCurrent'
	 * @return string 'CurrentSalesConsensusChange_ThreeQuartersOutNumberAnalystsEstimatesDecreased1WeekToCurrent'
	 */
	const VALUE_CURRENTSALESCONSENSUSCHANGE_THREEQUARTERSOUTNUMBERANALYSTSESTIMATESDECREASED1WEEKTOCURRENT = 'CurrentSalesConsensusChange_ThreeQuartersOutNumberAnalystsEstimatesDecreased1WeekToCurrent';
	/**
	 * Constant for value 'CurrentSalesConsensusChange_ThreeQuartersOut1MonthPercentageChangeInConsensusMean'
	 * @return string 'CurrentSalesConsensusChange_ThreeQuartersOut1MonthPercentageChangeInConsensusMean'
	 */
	const VALUE_CURRENTSALESCONSENSUSCHANGE_THREEQUARTERSOUT1MONTHPERCENTAGECHANGEINCONSENSUSMEAN = 'CurrentSalesConsensusChange_ThreeQuartersOut1MonthPercentageChangeInConsensusMean';
	/**
	 * Constant for value 'CurrentSalesConsensusChange_ThreeQuartersOutNumberAnalystsEstimatesIncreased1MonthToCurrent'
	 * @return string 'CurrentSalesConsensusChange_ThreeQuartersOutNumberAnalystsEstimatesIncreased1MonthToCurrent'
	 */
	const VALUE_CURRENTSALESCONSENSUSCHANGE_THREEQUARTERSOUTNUMBERANALYSTSESTIMATESINCREASED1MONTHTOCURRENT = 'CurrentSalesConsensusChange_ThreeQuartersOutNumberAnalystsEstimatesIncreased1MonthToCurrent';
	/**
	 * Constant for value 'CurrentSalesConsensusChange_ThreeQuartersOutNumberAnalystsEstimatesDecreased1MonthToCurrent'
	 * @return string 'CurrentSalesConsensusChange_ThreeQuartersOutNumberAnalystsEstimatesDecreased1MonthToCurrent'
	 */
	const VALUE_CURRENTSALESCONSENSUSCHANGE_THREEQUARTERSOUTNUMBERANALYSTSESTIMATESDECREASED1MONTHTOCURRENT = 'CurrentSalesConsensusChange_ThreeQuartersOutNumberAnalystsEstimatesDecreased1MonthToCurrent';
	/**
	 * Constant for value 'CurrentSalesConsensusChange_ThreeQuartersOut3MonthPercentageChangeInConsensusMean'
	 * @return string 'CurrentSalesConsensusChange_ThreeQuartersOut3MonthPercentageChangeInConsensusMean'
	 */
	const VALUE_CURRENTSALESCONSENSUSCHANGE_THREEQUARTERSOUT3MONTHPERCENTAGECHANGEINCONSENSUSMEAN = 'CurrentSalesConsensusChange_ThreeQuartersOut3MonthPercentageChangeInConsensusMean';
	/**
	 * Constant for value 'CurrentSalesConsensusChange_ThreeQuartersOutNumberAnalystsEstimatesIncreased3MonthsToCurrent'
	 * @return string 'CurrentSalesConsensusChange_ThreeQuartersOutNumberAnalystsEstimatesIncreased3MonthsToCurrent'
	 */
	const VALUE_CURRENTSALESCONSENSUSCHANGE_THREEQUARTERSOUTNUMBERANALYSTSESTIMATESINCREASED3MONTHSTOCURRENT = 'CurrentSalesConsensusChange_ThreeQuartersOutNumberAnalystsEstimatesIncreased3MonthsToCurrent';
	/**
	 * Constant for value 'CurrentSalesConsensusChange_ThreeQuartersOutNumberAnalystsEstimatesDecreased3MonthsToCurrent'
	 * @return string 'CurrentSalesConsensusChange_ThreeQuartersOutNumberAnalystsEstimatesDecreased3MonthsToCurrent'
	 */
	const VALUE_CURRENTSALESCONSENSUSCHANGE_THREEQUARTERSOUTNUMBERANALYSTSESTIMATESDECREASED3MONTHSTOCURRENT = 'CurrentSalesConsensusChange_ThreeQuartersOutNumberAnalystsEstimatesDecreased3MonthsToCurrent';
	/**
	 * Constant for value 'CurrentSalesConsensusChange_ThreeQuartersOutMedianEstimate'
	 * @return string 'CurrentSalesConsensusChange_ThreeQuartersOutMedianEstimate'
	 */
	const VALUE_CURRENTSALESCONSENSUSCHANGE_THREEQUARTERSOUTMEDIANESTIMATE = 'CurrentSalesConsensusChange_ThreeQuartersOutMedianEstimate';
	/**
	 * Constant for value 'CurrentSalesConsensusChange_ThreeQuartersOutDateOfLatestEstimate'
	 * @return string 'CurrentSalesConsensusChange_ThreeQuartersOutDateOfLatestEstimate'
	 */
	const VALUE_CURRENTSALESCONSENSUSCHANGE_THREEQUARTERSOUTDATEOFLATESTESTIMATE = 'CurrentSalesConsensusChange_ThreeQuartersOutDateOfLatestEstimate';
	/**
	 * Constant for value 'CurrentSalesConsensusChange_FourQuartersOutPeriodDate'
	 * @return string 'CurrentSalesConsensusChange_FourQuartersOutPeriodDate'
	 */
	const VALUE_CURRENTSALESCONSENSUSCHANGE_FOURQUARTERSOUTPERIODDATE = 'CurrentSalesConsensusChange_FourQuartersOutPeriodDate';
	/**
	 * Constant for value 'CurrentSalesConsensusChange_FourQuartersOutMeanEstimate'
	 * @return string 'CurrentSalesConsensusChange_FourQuartersOutMeanEstimate'
	 */
	const VALUE_CURRENTSALESCONSENSUSCHANGE_FOURQUARTERSOUTMEANESTIMATE = 'CurrentSalesConsensusChange_FourQuartersOutMeanEstimate';
	/**
	 * Constant for value 'CurrentSalesConsensusChange_FourQuartersOut1WeekPercentageChangeInConsensusMean'
	 * @return string 'CurrentSalesConsensusChange_FourQuartersOut1WeekPercentageChangeInConsensusMean'
	 */
	const VALUE_CURRENTSALESCONSENSUSCHANGE_FOURQUARTERSOUT1WEEKPERCENTAGECHANGEINCONSENSUSMEAN = 'CurrentSalesConsensusChange_FourQuartersOut1WeekPercentageChangeInConsensusMean';
	/**
	 * Constant for value 'CurrentSalesConsensusChange_FourQuartersOutNumberAnalystsEstimatesIncreased1WeekToCurrent'
	 * @return string 'CurrentSalesConsensusChange_FourQuartersOutNumberAnalystsEstimatesIncreased1WeekToCurrent'
	 */
	const VALUE_CURRENTSALESCONSENSUSCHANGE_FOURQUARTERSOUTNUMBERANALYSTSESTIMATESINCREASED1WEEKTOCURRENT = 'CurrentSalesConsensusChange_FourQuartersOutNumberAnalystsEstimatesIncreased1WeekToCurrent';
	/**
	 * Constant for value 'CurrentSalesConsensusChange_FourQuartersOutNumberAnalystsEstimatesDecreased1WeekToCurrent'
	 * @return string 'CurrentSalesConsensusChange_FourQuartersOutNumberAnalystsEstimatesDecreased1WeekToCurrent'
	 */
	const VALUE_CURRENTSALESCONSENSUSCHANGE_FOURQUARTERSOUTNUMBERANALYSTSESTIMATESDECREASED1WEEKTOCURRENT = 'CurrentSalesConsensusChange_FourQuartersOutNumberAnalystsEstimatesDecreased1WeekToCurrent';
	/**
	 * Constant for value 'CurrentSalesConsensusChange_FourQuartersOut1MonthPercentageChangeInConsensusMean'
	 * @return string 'CurrentSalesConsensusChange_FourQuartersOut1MonthPercentageChangeInConsensusMean'
	 */
	const VALUE_CURRENTSALESCONSENSUSCHANGE_FOURQUARTERSOUT1MONTHPERCENTAGECHANGEINCONSENSUSMEAN = 'CurrentSalesConsensusChange_FourQuartersOut1MonthPercentageChangeInConsensusMean';
	/**
	 * Constant for value 'CurrentSalesConsensusChange_FourQuartersOutNumberAnalystsEstimatesIncreased1MonthToCurrent'
	 * @return string 'CurrentSalesConsensusChange_FourQuartersOutNumberAnalystsEstimatesIncreased1MonthToCurrent'
	 */
	const VALUE_CURRENTSALESCONSENSUSCHANGE_FOURQUARTERSOUTNUMBERANALYSTSESTIMATESINCREASED1MONTHTOCURRENT = 'CurrentSalesConsensusChange_FourQuartersOutNumberAnalystsEstimatesIncreased1MonthToCurrent';
	/**
	 * Constant for value 'CurrentSalesConsensusChange_FourQuartersOutNumberAnalystsEstimatesDecreased1MonthToCurrent'
	 * @return string 'CurrentSalesConsensusChange_FourQuartersOutNumberAnalystsEstimatesDecreased1MonthToCurrent'
	 */
	const VALUE_CURRENTSALESCONSENSUSCHANGE_FOURQUARTERSOUTNUMBERANALYSTSESTIMATESDECREASED1MONTHTOCURRENT = 'CurrentSalesConsensusChange_FourQuartersOutNumberAnalystsEstimatesDecreased1MonthToCurrent';
	/**
	 * Constant for value 'CurrentSalesConsensusChange_FourQuartersOut3MonthPercentageChangeInConsensusMean'
	 * @return string 'CurrentSalesConsensusChange_FourQuartersOut3MonthPercentageChangeInConsensusMean'
	 */
	const VALUE_CURRENTSALESCONSENSUSCHANGE_FOURQUARTERSOUT3MONTHPERCENTAGECHANGEINCONSENSUSMEAN = 'CurrentSalesConsensusChange_FourQuartersOut3MonthPercentageChangeInConsensusMean';
	/**
	 * Constant for value 'CurrentSalesConsensusChange_FourQuartersOutNumberAnalystsEstimatesIncreased3MonthsToCurrent'
	 * @return string 'CurrentSalesConsensusChange_FourQuartersOutNumberAnalystsEstimatesIncreased3MonthsToCurrent'
	 */
	const VALUE_CURRENTSALESCONSENSUSCHANGE_FOURQUARTERSOUTNUMBERANALYSTSESTIMATESINCREASED3MONTHSTOCURRENT = 'CurrentSalesConsensusChange_FourQuartersOutNumberAnalystsEstimatesIncreased3MonthsToCurrent';
	/**
	 * Constant for value 'CurrentSalesConsensusChange_FourQuartersOutNumberAnalystsEstimatesDecreased3MonthsToCurrent'
	 * @return string 'CurrentSalesConsensusChange_FourQuartersOutNumberAnalystsEstimatesDecreased3MonthsToCurrent'
	 */
	const VALUE_CURRENTSALESCONSENSUSCHANGE_FOURQUARTERSOUTNUMBERANALYSTSESTIMATESDECREASED3MONTHSTOCURRENT = 'CurrentSalesConsensusChange_FourQuartersOutNumberAnalystsEstimatesDecreased3MonthsToCurrent';
	/**
	 * Constant for value 'CurrentSalesConsensusChange_FourQuartersOutMedianEstimate'
	 * @return string 'CurrentSalesConsensusChange_FourQuartersOutMedianEstimate'
	 */
	const VALUE_CURRENTSALESCONSENSUSCHANGE_FOURQUARTERSOUTMEDIANESTIMATE = 'CurrentSalesConsensusChange_FourQuartersOutMedianEstimate';
	/**
	 * Constant for value 'CurrentSalesConsensusChange_FourQuartersOutDateOfLatestEstimate'
	 * @return string 'CurrentSalesConsensusChange_FourQuartersOutDateOfLatestEstimate'
	 */
	const VALUE_CURRENTSALESCONSENSUSCHANGE_FOURQUARTERSOUTDATEOFLATESTESTIMATE = 'CurrentSalesConsensusChange_FourQuartersOutDateOfLatestEstimate';
	/**
	 * Constant for value 'CurrentSalesConsensusChange_FiveQuartersOutPeriodDate'
	 * @return string 'CurrentSalesConsensusChange_FiveQuartersOutPeriodDate'
	 */
	const VALUE_CURRENTSALESCONSENSUSCHANGE_FIVEQUARTERSOUTPERIODDATE = 'CurrentSalesConsensusChange_FiveQuartersOutPeriodDate';
	/**
	 * Constant for value 'CurrentSalesConsensusChange_FiveQuartersOutMeanEstimate'
	 * @return string 'CurrentSalesConsensusChange_FiveQuartersOutMeanEstimate'
	 */
	const VALUE_CURRENTSALESCONSENSUSCHANGE_FIVEQUARTERSOUTMEANESTIMATE = 'CurrentSalesConsensusChange_FiveQuartersOutMeanEstimate';
	/**
	 * Constant for value 'CurrentSalesConsensusChange_FiveQuartersOut1WeekPercentageChangeInConsensusMean'
	 * @return string 'CurrentSalesConsensusChange_FiveQuartersOut1WeekPercentageChangeInConsensusMean'
	 */
	const VALUE_CURRENTSALESCONSENSUSCHANGE_FIVEQUARTERSOUT1WEEKPERCENTAGECHANGEINCONSENSUSMEAN = 'CurrentSalesConsensusChange_FiveQuartersOut1WeekPercentageChangeInConsensusMean';
	/**
	 * Constant for value 'CurrentSalesConsensusChange_FiveQuartersOutNumberAnalystsEstimatesIncreased1WeekToCurrent'
	 * @return string 'CurrentSalesConsensusChange_FiveQuartersOutNumberAnalystsEstimatesIncreased1WeekToCurrent'
	 */
	const VALUE_CURRENTSALESCONSENSUSCHANGE_FIVEQUARTERSOUTNUMBERANALYSTSESTIMATESINCREASED1WEEKTOCURRENT = 'CurrentSalesConsensusChange_FiveQuartersOutNumberAnalystsEstimatesIncreased1WeekToCurrent';
	/**
	 * Constant for value 'CurrentSalesConsensusChange_FiveQuartersOutNumberAnalystsEstimatesDecreased1WeekToCurrent'
	 * @return string 'CurrentSalesConsensusChange_FiveQuartersOutNumberAnalystsEstimatesDecreased1WeekToCurrent'
	 */
	const VALUE_CURRENTSALESCONSENSUSCHANGE_FIVEQUARTERSOUTNUMBERANALYSTSESTIMATESDECREASED1WEEKTOCURRENT = 'CurrentSalesConsensusChange_FiveQuartersOutNumberAnalystsEstimatesDecreased1WeekToCurrent';
	/**
	 * Constant for value 'CurrentSalesConsensusChange_FiveQuartersOut1MonthPercentageChangeInConsensusMean'
	 * @return string 'CurrentSalesConsensusChange_FiveQuartersOut1MonthPercentageChangeInConsensusMean'
	 */
	const VALUE_CURRENTSALESCONSENSUSCHANGE_FIVEQUARTERSOUT1MONTHPERCENTAGECHANGEINCONSENSUSMEAN = 'CurrentSalesConsensusChange_FiveQuartersOut1MonthPercentageChangeInConsensusMean';
	/**
	 * Constant for value 'CurrentSalesConsensusChange_FiveQuartersOutNumberAnalystsEstimatesIncreased1MonthToCurrent'
	 * @return string 'CurrentSalesConsensusChange_FiveQuartersOutNumberAnalystsEstimatesIncreased1MonthToCurrent'
	 */
	const VALUE_CURRENTSALESCONSENSUSCHANGE_FIVEQUARTERSOUTNUMBERANALYSTSESTIMATESINCREASED1MONTHTOCURRENT = 'CurrentSalesConsensusChange_FiveQuartersOutNumberAnalystsEstimatesIncreased1MonthToCurrent';
	/**
	 * Constant for value 'CurrentSalesConsensusChange_FiveQuartersOutNumberAnalystsEstimatesDecreased1MonthToCurrent'
	 * @return string 'CurrentSalesConsensusChange_FiveQuartersOutNumberAnalystsEstimatesDecreased1MonthToCurrent'
	 */
	const VALUE_CURRENTSALESCONSENSUSCHANGE_FIVEQUARTERSOUTNUMBERANALYSTSESTIMATESDECREASED1MONTHTOCURRENT = 'CurrentSalesConsensusChange_FiveQuartersOutNumberAnalystsEstimatesDecreased1MonthToCurrent';
	/**
	 * Constant for value 'CurrentSalesConsensusChange_FiveQuartersOut3MonthPercentageChangeInConsensusMean'
	 * @return string 'CurrentSalesConsensusChange_FiveQuartersOut3MonthPercentageChangeInConsensusMean'
	 */
	const VALUE_CURRENTSALESCONSENSUSCHANGE_FIVEQUARTERSOUT3MONTHPERCENTAGECHANGEINCONSENSUSMEAN = 'CurrentSalesConsensusChange_FiveQuartersOut3MonthPercentageChangeInConsensusMean';
	/**
	 * Constant for value 'CurrentSalesConsensusChange_FiveQuartersOutNumberAnalystsEstimatesIncreased3MonthsToCurrent'
	 * @return string 'CurrentSalesConsensusChange_FiveQuartersOutNumberAnalystsEstimatesIncreased3MonthsToCurrent'
	 */
	const VALUE_CURRENTSALESCONSENSUSCHANGE_FIVEQUARTERSOUTNUMBERANALYSTSESTIMATESINCREASED3MONTHSTOCURRENT = 'CurrentSalesConsensusChange_FiveQuartersOutNumberAnalystsEstimatesIncreased3MonthsToCurrent';
	/**
	 * Constant for value 'CurrentSalesConsensusChange_FiveQuartersOutNumberAnalystsEstimatesDecreased3MonthsToCurrent'
	 * @return string 'CurrentSalesConsensusChange_FiveQuartersOutNumberAnalystsEstimatesDecreased3MonthsToCurrent'
	 */
	const VALUE_CURRENTSALESCONSENSUSCHANGE_FIVEQUARTERSOUTNUMBERANALYSTSESTIMATESDECREASED3MONTHSTOCURRENT = 'CurrentSalesConsensusChange_FiveQuartersOutNumberAnalystsEstimatesDecreased3MonthsToCurrent';
	/**
	 * Constant for value 'CurrentSalesConsensusChange_FiveQuartersOutMedianEstimate'
	 * @return string 'CurrentSalesConsensusChange_FiveQuartersOutMedianEstimate'
	 */
	const VALUE_CURRENTSALESCONSENSUSCHANGE_FIVEQUARTERSOUTMEDIANESTIMATE = 'CurrentSalesConsensusChange_FiveQuartersOutMedianEstimate';
	/**
	 * Constant for value 'CurrentSalesConsensusChange_FiveQuartersOutDateOfLatestEstimate'
	 * @return string 'CurrentSalesConsensusChange_FiveQuartersOutDateOfLatestEstimate'
	 */
	const VALUE_CURRENTSALESCONSENSUSCHANGE_FIVEQUARTERSOUTDATEOFLATESTESTIMATE = 'CurrentSalesConsensusChange_FiveQuartersOutDateOfLatestEstimate';
	/**
	 * Constant for value 'CurrentSalesConsensusChange_SixQuartersOutPeriodDate'
	 * @return string 'CurrentSalesConsensusChange_SixQuartersOutPeriodDate'
	 */
	const VALUE_CURRENTSALESCONSENSUSCHANGE_SIXQUARTERSOUTPERIODDATE = 'CurrentSalesConsensusChange_SixQuartersOutPeriodDate';
	/**
	 * Constant for value 'CurrentSalesConsensusChange_SixQuartersOutMeanEstimate'
	 * @return string 'CurrentSalesConsensusChange_SixQuartersOutMeanEstimate'
	 */
	const VALUE_CURRENTSALESCONSENSUSCHANGE_SIXQUARTERSOUTMEANESTIMATE = 'CurrentSalesConsensusChange_SixQuartersOutMeanEstimate';
	/**
	 * Constant for value 'CurrentSalesConsensusChange_SixQuartersOut1WeekPercentageChangeInConsensusMean'
	 * @return string 'CurrentSalesConsensusChange_SixQuartersOut1WeekPercentageChangeInConsensusMean'
	 */
	const VALUE_CURRENTSALESCONSENSUSCHANGE_SIXQUARTERSOUT1WEEKPERCENTAGECHANGEINCONSENSUSMEAN = 'CurrentSalesConsensusChange_SixQuartersOut1WeekPercentageChangeInConsensusMean';
	/**
	 * Constant for value 'CurrentSalesConsensusChange_SixQuartersOutNumberAnalystsEstimatesIncreased1WeekToCurrent'
	 * @return string 'CurrentSalesConsensusChange_SixQuartersOutNumberAnalystsEstimatesIncreased1WeekToCurrent'
	 */
	const VALUE_CURRENTSALESCONSENSUSCHANGE_SIXQUARTERSOUTNUMBERANALYSTSESTIMATESINCREASED1WEEKTOCURRENT = 'CurrentSalesConsensusChange_SixQuartersOutNumberAnalystsEstimatesIncreased1WeekToCurrent';
	/**
	 * Constant for value 'CurrentSalesConsensusChange_SixQuartersOutNumberAnalystsEstimatesDecreased1WeekToCurrent'
	 * @return string 'CurrentSalesConsensusChange_SixQuartersOutNumberAnalystsEstimatesDecreased1WeekToCurrent'
	 */
	const VALUE_CURRENTSALESCONSENSUSCHANGE_SIXQUARTERSOUTNUMBERANALYSTSESTIMATESDECREASED1WEEKTOCURRENT = 'CurrentSalesConsensusChange_SixQuartersOutNumberAnalystsEstimatesDecreased1WeekToCurrent';
	/**
	 * Constant for value 'CurrentSalesConsensusChange_SixQuartersOut1MonthPercentageChangeInConsensusMean'
	 * @return string 'CurrentSalesConsensusChange_SixQuartersOut1MonthPercentageChangeInConsensusMean'
	 */
	const VALUE_CURRENTSALESCONSENSUSCHANGE_SIXQUARTERSOUT1MONTHPERCENTAGECHANGEINCONSENSUSMEAN = 'CurrentSalesConsensusChange_SixQuartersOut1MonthPercentageChangeInConsensusMean';
	/**
	 * Constant for value 'CurrentSalesConsensusChange_SixQuartersOutNumberAnalystsEstimatesIncreased1MonthToCurrent'
	 * @return string 'CurrentSalesConsensusChange_SixQuartersOutNumberAnalystsEstimatesIncreased1MonthToCurrent'
	 */
	const VALUE_CURRENTSALESCONSENSUSCHANGE_SIXQUARTERSOUTNUMBERANALYSTSESTIMATESINCREASED1MONTHTOCURRENT = 'CurrentSalesConsensusChange_SixQuartersOutNumberAnalystsEstimatesIncreased1MonthToCurrent';
	/**
	 * Constant for value 'CurrentSalesConsensusChange_SixQuartersOutNumberAnalystsEstimatesDecreased1MonthToCurrent'
	 * @return string 'CurrentSalesConsensusChange_SixQuartersOutNumberAnalystsEstimatesDecreased1MonthToCurrent'
	 */
	const VALUE_CURRENTSALESCONSENSUSCHANGE_SIXQUARTERSOUTNUMBERANALYSTSESTIMATESDECREASED1MONTHTOCURRENT = 'CurrentSalesConsensusChange_SixQuartersOutNumberAnalystsEstimatesDecreased1MonthToCurrent';
	/**
	 * Constant for value 'CurrentSalesConsensusChange_SixQuartersOut3MonthPercentageChangeInConsensusMean'
	 * @return string 'CurrentSalesConsensusChange_SixQuartersOut3MonthPercentageChangeInConsensusMean'
	 */
	const VALUE_CURRENTSALESCONSENSUSCHANGE_SIXQUARTERSOUT3MONTHPERCENTAGECHANGEINCONSENSUSMEAN = 'CurrentSalesConsensusChange_SixQuartersOut3MonthPercentageChangeInConsensusMean';
	/**
	 * Constant for value 'CurrentSalesConsensusChange_SixQuartersOutNumberAnalystsEstimatesIncreased3MonthsToCurrent'
	 * @return string 'CurrentSalesConsensusChange_SixQuartersOutNumberAnalystsEstimatesIncreased3MonthsToCurrent'
	 */
	const VALUE_CURRENTSALESCONSENSUSCHANGE_SIXQUARTERSOUTNUMBERANALYSTSESTIMATESINCREASED3MONTHSTOCURRENT = 'CurrentSalesConsensusChange_SixQuartersOutNumberAnalystsEstimatesIncreased3MonthsToCurrent';
	/**
	 * Constant for value 'CurrentSalesConsensusChange_SixQuartersOutNumberAnalystsEstimatesDecreased3MonthsToCurrent'
	 * @return string 'CurrentSalesConsensusChange_SixQuartersOutNumberAnalystsEstimatesDecreased3MonthsToCurrent'
	 */
	const VALUE_CURRENTSALESCONSENSUSCHANGE_SIXQUARTERSOUTNUMBERANALYSTSESTIMATESDECREASED3MONTHSTOCURRENT = 'CurrentSalesConsensusChange_SixQuartersOutNumberAnalystsEstimatesDecreased3MonthsToCurrent';
	/**
	 * Constant for value 'CurrentSalesConsensusChange_SixQuartersOutMedianEstimate'
	 * @return string 'CurrentSalesConsensusChange_SixQuartersOutMedianEstimate'
	 */
	const VALUE_CURRENTSALESCONSENSUSCHANGE_SIXQUARTERSOUTMEDIANESTIMATE = 'CurrentSalesConsensusChange_SixQuartersOutMedianEstimate';
	/**
	 * Constant for value 'CurrentSalesConsensusChange_SixQuartersOutDateOfLatestEstimate'
	 * @return string 'CurrentSalesConsensusChange_SixQuartersOutDateOfLatestEstimate'
	 */
	const VALUE_CURRENTSALESCONSENSUSCHANGE_SIXQUARTERSOUTDATEOFLATESTESTIMATE = 'CurrentSalesConsensusChange_SixQuartersOutDateOfLatestEstimate';
	/**
	 * Constant for value 'CurrentSalesConsensusChange_SevenQuartersOutPeriodDate'
	 * @return string 'CurrentSalesConsensusChange_SevenQuartersOutPeriodDate'
	 */
	const VALUE_CURRENTSALESCONSENSUSCHANGE_SEVENQUARTERSOUTPERIODDATE = 'CurrentSalesConsensusChange_SevenQuartersOutPeriodDate';
	/**
	 * Constant for value 'CurrentSalesConsensusChange_SevenQuartersOutMeanEstimate'
	 * @return string 'CurrentSalesConsensusChange_SevenQuartersOutMeanEstimate'
	 */
	const VALUE_CURRENTSALESCONSENSUSCHANGE_SEVENQUARTERSOUTMEANESTIMATE = 'CurrentSalesConsensusChange_SevenQuartersOutMeanEstimate';
	/**
	 * Constant for value 'CurrentSalesConsensusChange_SevenQuartersOut1WeekPercentageChangeInConsensusMean'
	 * @return string 'CurrentSalesConsensusChange_SevenQuartersOut1WeekPercentageChangeInConsensusMean'
	 */
	const VALUE_CURRENTSALESCONSENSUSCHANGE_SEVENQUARTERSOUT1WEEKPERCENTAGECHANGEINCONSENSUSMEAN = 'CurrentSalesConsensusChange_SevenQuartersOut1WeekPercentageChangeInConsensusMean';
	/**
	 * Constant for value 'CurrentSalesConsensusChange_SevenQuartersOutNumberAnalystsEstimatesIncreased1WeekToCurrent'
	 * @return string 'CurrentSalesConsensusChange_SevenQuartersOutNumberAnalystsEstimatesIncreased1WeekToCurrent'
	 */
	const VALUE_CURRENTSALESCONSENSUSCHANGE_SEVENQUARTERSOUTNUMBERANALYSTSESTIMATESINCREASED1WEEKTOCURRENT = 'CurrentSalesConsensusChange_SevenQuartersOutNumberAnalystsEstimatesIncreased1WeekToCurrent';
	/**
	 * Constant for value 'CurrentSalesConsensusChange_SevenQuartersOutNumberAnalystsEstimatesDecreased1WeekToCurrent'
	 * @return string 'CurrentSalesConsensusChange_SevenQuartersOutNumberAnalystsEstimatesDecreased1WeekToCurrent'
	 */
	const VALUE_CURRENTSALESCONSENSUSCHANGE_SEVENQUARTERSOUTNUMBERANALYSTSESTIMATESDECREASED1WEEKTOCURRENT = 'CurrentSalesConsensusChange_SevenQuartersOutNumberAnalystsEstimatesDecreased1WeekToCurrent';
	/**
	 * Constant for value 'CurrentSalesConsensusChange_SevenQuartersOut1MonthPercentageChangeInConsensusMean'
	 * @return string 'CurrentSalesConsensusChange_SevenQuartersOut1MonthPercentageChangeInConsensusMean'
	 */
	const VALUE_CURRENTSALESCONSENSUSCHANGE_SEVENQUARTERSOUT1MONTHPERCENTAGECHANGEINCONSENSUSMEAN = 'CurrentSalesConsensusChange_SevenQuartersOut1MonthPercentageChangeInConsensusMean';
	/**
	 * Constant for value 'CurrentSalesConsensusChange_SevenQuartersOutNumberAnalystsEstimatesIncreased1MonthToCurrent'
	 * @return string 'CurrentSalesConsensusChange_SevenQuartersOutNumberAnalystsEstimatesIncreased1MonthToCurrent'
	 */
	const VALUE_CURRENTSALESCONSENSUSCHANGE_SEVENQUARTERSOUTNUMBERANALYSTSESTIMATESINCREASED1MONTHTOCURRENT = 'CurrentSalesConsensusChange_SevenQuartersOutNumberAnalystsEstimatesIncreased1MonthToCurrent';
	/**
	 * Constant for value 'CurrentSalesConsensusChange_SevenQuartersOutNumberAnalystsEstimatesDecreased1MonthToCurrent'
	 * @return string 'CurrentSalesConsensusChange_SevenQuartersOutNumberAnalystsEstimatesDecreased1MonthToCurrent'
	 */
	const VALUE_CURRENTSALESCONSENSUSCHANGE_SEVENQUARTERSOUTNUMBERANALYSTSESTIMATESDECREASED1MONTHTOCURRENT = 'CurrentSalesConsensusChange_SevenQuartersOutNumberAnalystsEstimatesDecreased1MonthToCurrent';
	/**
	 * Constant for value 'CurrentSalesConsensusChange_SevenQuartersOut3MonthPercentageChangeInConsensusMean'
	 * @return string 'CurrentSalesConsensusChange_SevenQuartersOut3MonthPercentageChangeInConsensusMean'
	 */
	const VALUE_CURRENTSALESCONSENSUSCHANGE_SEVENQUARTERSOUT3MONTHPERCENTAGECHANGEINCONSENSUSMEAN = 'CurrentSalesConsensusChange_SevenQuartersOut3MonthPercentageChangeInConsensusMean';
	/**
	 * Constant for value 'CurrentSalesConsensusChange_SevenQuartersOutNumberAnalystsEstimatesIncreased3MonthsToCurrent'
	 * @return string 'CurrentSalesConsensusChange_SevenQuartersOutNumberAnalystsEstimatesIncreased3MonthsToCurrent'
	 */
	const VALUE_CURRENTSALESCONSENSUSCHANGE_SEVENQUARTERSOUTNUMBERANALYSTSESTIMATESINCREASED3MONTHSTOCURRENT = 'CurrentSalesConsensusChange_SevenQuartersOutNumberAnalystsEstimatesIncreased3MonthsToCurrent';
	/**
	 * Constant for value 'CurrentSalesConsensusChange_SevenQuartersOutNumberAnalystsEstimatesDecreased3MonthsToCurrent'
	 * @return string 'CurrentSalesConsensusChange_SevenQuartersOutNumberAnalystsEstimatesDecreased3MonthsToCurrent'
	 */
	const VALUE_CURRENTSALESCONSENSUSCHANGE_SEVENQUARTERSOUTNUMBERANALYSTSESTIMATESDECREASED3MONTHSTOCURRENT = 'CurrentSalesConsensusChange_SevenQuartersOutNumberAnalystsEstimatesDecreased3MonthsToCurrent';
	/**
	 * Constant for value 'CurrentSalesConsensusChange_SevenQuartersOutMedianEstimate'
	 * @return string 'CurrentSalesConsensusChange_SevenQuartersOutMedianEstimate'
	 */
	const VALUE_CURRENTSALESCONSENSUSCHANGE_SEVENQUARTERSOUTMEDIANESTIMATE = 'CurrentSalesConsensusChange_SevenQuartersOutMedianEstimate';
	/**
	 * Constant for value 'CurrentSalesConsensusChange_SevenQuartersOutDateOfLatestEstimate'
	 * @return string 'CurrentSalesConsensusChange_SevenQuartersOutDateOfLatestEstimate'
	 */
	const VALUE_CURRENTSALESCONSENSUSCHANGE_SEVENQUARTERSOUTDATEOFLATESTESTIMATE = 'CurrentSalesConsensusChange_SevenQuartersOutDateOfLatestEstimate';
	/**
	 * Constant for value 'CurrentSalesConsensusChange_EightQuartersOutPeriodDate'
	 * @return string 'CurrentSalesConsensusChange_EightQuartersOutPeriodDate'
	 */
	const VALUE_CURRENTSALESCONSENSUSCHANGE_EIGHTQUARTERSOUTPERIODDATE = 'CurrentSalesConsensusChange_EightQuartersOutPeriodDate';
	/**
	 * Constant for value 'CurrentSalesConsensusChange_EightQuartersOutMeanEstimate'
	 * @return string 'CurrentSalesConsensusChange_EightQuartersOutMeanEstimate'
	 */
	const VALUE_CURRENTSALESCONSENSUSCHANGE_EIGHTQUARTERSOUTMEANESTIMATE = 'CurrentSalesConsensusChange_EightQuartersOutMeanEstimate';
	/**
	 * Constant for value 'CurrentSalesConsensusChange_EightQuartersOut1WeekPercentageChangeInConsensusMean'
	 * @return string 'CurrentSalesConsensusChange_EightQuartersOut1WeekPercentageChangeInConsensusMean'
	 */
	const VALUE_CURRENTSALESCONSENSUSCHANGE_EIGHTQUARTERSOUT1WEEKPERCENTAGECHANGEINCONSENSUSMEAN = 'CurrentSalesConsensusChange_EightQuartersOut1WeekPercentageChangeInConsensusMean';
	/**
	 * Constant for value 'CurrentSalesConsensusChange_EightQuartersOutNumberAnalystsEstimatesIncreased1WeekToCurrent'
	 * @return string 'CurrentSalesConsensusChange_EightQuartersOutNumberAnalystsEstimatesIncreased1WeekToCurrent'
	 */
	const VALUE_CURRENTSALESCONSENSUSCHANGE_EIGHTQUARTERSOUTNUMBERANALYSTSESTIMATESINCREASED1WEEKTOCURRENT = 'CurrentSalesConsensusChange_EightQuartersOutNumberAnalystsEstimatesIncreased1WeekToCurrent';
	/**
	 * Constant for value 'CurrentSalesConsensusChange_EightQuartersOutNumberAnalystsEstimatesDecreased1WeekToCurrent'
	 * @return string 'CurrentSalesConsensusChange_EightQuartersOutNumberAnalystsEstimatesDecreased1WeekToCurrent'
	 */
	const VALUE_CURRENTSALESCONSENSUSCHANGE_EIGHTQUARTERSOUTNUMBERANALYSTSESTIMATESDECREASED1WEEKTOCURRENT = 'CurrentSalesConsensusChange_EightQuartersOutNumberAnalystsEstimatesDecreased1WeekToCurrent';
	/**
	 * Constant for value 'CurrentSalesConsensusChange_EightQuartersOut1MonthPercentageChangeInConsensusMean'
	 * @return string 'CurrentSalesConsensusChange_EightQuartersOut1MonthPercentageChangeInConsensusMean'
	 */
	const VALUE_CURRENTSALESCONSENSUSCHANGE_EIGHTQUARTERSOUT1MONTHPERCENTAGECHANGEINCONSENSUSMEAN = 'CurrentSalesConsensusChange_EightQuartersOut1MonthPercentageChangeInConsensusMean';
	/**
	 * Constant for value 'CurrentSalesConsensusChange_EightQuartersOutNumberAnalystsEstimatesIncreased1MonthToCurrent'
	 * @return string 'CurrentSalesConsensusChange_EightQuartersOutNumberAnalystsEstimatesIncreased1MonthToCurrent'
	 */
	const VALUE_CURRENTSALESCONSENSUSCHANGE_EIGHTQUARTERSOUTNUMBERANALYSTSESTIMATESINCREASED1MONTHTOCURRENT = 'CurrentSalesConsensusChange_EightQuartersOutNumberAnalystsEstimatesIncreased1MonthToCurrent';
	/**
	 * Constant for value 'CurrentSalesConsensusChange_EightQuartersOutNumberAnalystsEstimatesDecreased1MonthToCurrent'
	 * @return string 'CurrentSalesConsensusChange_EightQuartersOutNumberAnalystsEstimatesDecreased1MonthToCurrent'
	 */
	const VALUE_CURRENTSALESCONSENSUSCHANGE_EIGHTQUARTERSOUTNUMBERANALYSTSESTIMATESDECREASED1MONTHTOCURRENT = 'CurrentSalesConsensusChange_EightQuartersOutNumberAnalystsEstimatesDecreased1MonthToCurrent';
	/**
	 * Constant for value 'CurrentSalesConsensusChange_EightQuartersOut3MonthPercentageChangeInConsensusMean'
	 * @return string 'CurrentSalesConsensusChange_EightQuartersOut3MonthPercentageChangeInConsensusMean'
	 */
	const VALUE_CURRENTSALESCONSENSUSCHANGE_EIGHTQUARTERSOUT3MONTHPERCENTAGECHANGEINCONSENSUSMEAN = 'CurrentSalesConsensusChange_EightQuartersOut3MonthPercentageChangeInConsensusMean';
	/**
	 * Constant for value 'CurrentSalesConsensusChange_EightQuartersOutNumberAnalystsEstimatesIncreased3MonthsToCurrent'
	 * @return string 'CurrentSalesConsensusChange_EightQuartersOutNumberAnalystsEstimatesIncreased3MonthsToCurrent'
	 */
	const VALUE_CURRENTSALESCONSENSUSCHANGE_EIGHTQUARTERSOUTNUMBERANALYSTSESTIMATESINCREASED3MONTHSTOCURRENT = 'CurrentSalesConsensusChange_EightQuartersOutNumberAnalystsEstimatesIncreased3MonthsToCurrent';
	/**
	 * Constant for value 'CurrentSalesConsensusChange_EightQuartersOutNumberAnalystsEstimatesDecreased3MonthsToCurrent'
	 * @return string 'CurrentSalesConsensusChange_EightQuartersOutNumberAnalystsEstimatesDecreased3MonthsToCurrent'
	 */
	const VALUE_CURRENTSALESCONSENSUSCHANGE_EIGHTQUARTERSOUTNUMBERANALYSTSESTIMATESDECREASED3MONTHSTOCURRENT = 'CurrentSalesConsensusChange_EightQuartersOutNumberAnalystsEstimatesDecreased3MonthsToCurrent';
	/**
	 * Constant for value 'CurrentSalesConsensusChange_EightQuartersOutMedianEstimate'
	 * @return string 'CurrentSalesConsensusChange_EightQuartersOutMedianEstimate'
	 */
	const VALUE_CURRENTSALESCONSENSUSCHANGE_EIGHTQUARTERSOUTMEDIANESTIMATE = 'CurrentSalesConsensusChange_EightQuartersOutMedianEstimate';
	/**
	 * Constant for value 'CurrentSalesConsensusChange_EightQuartersOutDateOfLatestEstimate'
	 * @return string 'CurrentSalesConsensusChange_EightQuartersOutDateOfLatestEstimate'
	 */
	const VALUE_CURRENTSALESCONSENSUSCHANGE_EIGHTQUARTERSOUTDATEOFLATESTESTIMATE = 'CurrentSalesConsensusChange_EightQuartersOutDateOfLatestEstimate';
	/**
	 * Constant for value 'SummaryCurrentStatistics_CurrencyIdentificationCode'
	 * @return string 'SummaryCurrentStatistics_CurrencyIdentificationCode'
	 */
	const VALUE_SUMMARYCURRENTSTATISTICS_CURRENCYIDENTIFICATIONCODE = 'SummaryCurrentStatistics_CurrencyIdentificationCode';
	/**
	 * Constant for value 'SummaryCurrentStatistics_DateOfEstimateData'
	 * @return string 'SummaryCurrentStatistics_DateOfEstimateData'
	 */
	const VALUE_SUMMARYCURRENTSTATISTICS_DATEOFESTIMATEDATA = 'SummaryCurrentStatistics_DateOfEstimateData';
	/**
	 * Constant for value 'SummaryCurrentStatistics_MostRecentFiscalYearDateOfFiscalYearEnd'
	 * @return string 'SummaryCurrentStatistics_MostRecentFiscalYearDateOfFiscalYearEnd'
	 */
	const VALUE_SUMMARYCURRENTSTATISTICS_MOSTRECENTFISCALYEARDATEOFFISCALYEAREND = 'SummaryCurrentStatistics_MostRecentFiscalYearDateOfFiscalYearEnd';
	/**
	 * Constant for value 'SummaryCurrentStatistics_MostRecentFiscalYearMeanOfEstimates'
	 * @return string 'SummaryCurrentStatistics_MostRecentFiscalYearMeanOfEstimates'
	 */
	const VALUE_SUMMARYCURRENTSTATISTICS_MOSTRECENTFISCALYEARMEANOFESTIMATES = 'SummaryCurrentStatistics_MostRecentFiscalYearMeanOfEstimates';
	/**
	 * Constant for value 'SummaryCurrentStatistics_MostRecentFiscalYearStandardDeviation'
	 * @return string 'SummaryCurrentStatistics_MostRecentFiscalYearStandardDeviation'
	 */
	const VALUE_SUMMARYCURRENTSTATISTICS_MOSTRECENTFISCALYEARSTANDARDDEVIATION = 'SummaryCurrentStatistics_MostRecentFiscalYearStandardDeviation';
	/**
	 * Constant for value 'SummaryCurrentStatistics_MostRecentFiscalYearNumberOfEstimates'
	 * @return string 'SummaryCurrentStatistics_MostRecentFiscalYearNumberOfEstimates'
	 */
	const VALUE_SUMMARYCURRENTSTATISTICS_MOSTRECENTFISCALYEARNUMBEROFESTIMATES = 'SummaryCurrentStatistics_MostRecentFiscalYearNumberOfEstimates';
	/**
	 * Constant for value 'SummaryCurrentStatistics_CurrentFiscalYearDateOfFiscalYearEnd'
	 * @return string 'SummaryCurrentStatistics_CurrentFiscalYearDateOfFiscalYearEnd'
	 */
	const VALUE_SUMMARYCURRENTSTATISTICS_CURRENTFISCALYEARDATEOFFISCALYEAREND = 'SummaryCurrentStatistics_CurrentFiscalYearDateOfFiscalYearEnd';
	/**
	 * Constant for value 'SummaryCurrentStatistics_CurrentFiscalYearMeanOfEstimates'
	 * @return string 'SummaryCurrentStatistics_CurrentFiscalYearMeanOfEstimates'
	 */
	const VALUE_SUMMARYCURRENTSTATISTICS_CURRENTFISCALYEARMEANOFESTIMATES = 'SummaryCurrentStatistics_CurrentFiscalYearMeanOfEstimates';
	/**
	 * Constant for value 'SummaryCurrentStatistics_CurrentFiscalYearStandardDeviation'
	 * @return string 'SummaryCurrentStatistics_CurrentFiscalYearStandardDeviation'
	 */
	const VALUE_SUMMARYCURRENTSTATISTICS_CURRENTFISCALYEARSTANDARDDEVIATION = 'SummaryCurrentStatistics_CurrentFiscalYearStandardDeviation';
	/**
	 * Constant for value 'SummaryCurrentStatistics_CurrentFiscalYearNumberOfEstimates'
	 * @return string 'SummaryCurrentStatistics_CurrentFiscalYearNumberOfEstimates'
	 */
	const VALUE_SUMMARYCURRENTSTATISTICS_CURRENTFISCALYEARNUMBEROFESTIMATES = 'SummaryCurrentStatistics_CurrentFiscalYearNumberOfEstimates';
	/**
	 * Constant for value 'SummaryCurrentStatistics_NextFiscalYearDateOfFiscalYearEnd'
	 * @return string 'SummaryCurrentStatistics_NextFiscalYearDateOfFiscalYearEnd'
	 */
	const VALUE_SUMMARYCURRENTSTATISTICS_NEXTFISCALYEARDATEOFFISCALYEAREND = 'SummaryCurrentStatistics_NextFiscalYearDateOfFiscalYearEnd';
	/**
	 * Constant for value 'SummaryCurrentStatistics_NextFiscalYearMeanOfEstimates'
	 * @return string 'SummaryCurrentStatistics_NextFiscalYearMeanOfEstimates'
	 */
	const VALUE_SUMMARYCURRENTSTATISTICS_NEXTFISCALYEARMEANOFESTIMATES = 'SummaryCurrentStatistics_NextFiscalYearMeanOfEstimates';
	/**
	 * Constant for value 'SummaryCurrentStatistics_NextFiscalYearStandardDeviation'
	 * @return string 'SummaryCurrentStatistics_NextFiscalYearStandardDeviation'
	 */
	const VALUE_SUMMARYCURRENTSTATISTICS_NEXTFISCALYEARSTANDARDDEVIATION = 'SummaryCurrentStatistics_NextFiscalYearStandardDeviation';
	/**
	 * Constant for value 'SummaryCurrentStatistics_NextFiscalYearNumberOfEstimates'
	 * @return string 'SummaryCurrentStatistics_NextFiscalYearNumberOfEstimates'
	 */
	const VALUE_SUMMARYCURRENTSTATISTICS_NEXTFISCALYEARNUMBEROFESTIMATES = 'SummaryCurrentStatistics_NextFiscalYearNumberOfEstimates';
	/**
	 * Constant for value 'SummaryCurrentStatistics_MostRecentQuarterDateOfQuarterEnd'
	 * @return string 'SummaryCurrentStatistics_MostRecentQuarterDateOfQuarterEnd'
	 */
	const VALUE_SUMMARYCURRENTSTATISTICS_MOSTRECENTQUARTERDATEOFQUARTEREND = 'SummaryCurrentStatistics_MostRecentQuarterDateOfQuarterEnd';
	/**
	 * Constant for value 'SummaryCurrentStatistics_MostRecentQuarterMeanOfEstimates'
	 * @return string 'SummaryCurrentStatistics_MostRecentQuarterMeanOfEstimates'
	 */
	const VALUE_SUMMARYCURRENTSTATISTICS_MOSTRECENTQUARTERMEANOFESTIMATES = 'SummaryCurrentStatistics_MostRecentQuarterMeanOfEstimates';
	/**
	 * Constant for value 'SummaryCurrentStatistics_MostRecentQuarterStandardDeviation'
	 * @return string 'SummaryCurrentStatistics_MostRecentQuarterStandardDeviation'
	 */
	const VALUE_SUMMARYCURRENTSTATISTICS_MOSTRECENTQUARTERSTANDARDDEVIATION = 'SummaryCurrentStatistics_MostRecentQuarterStandardDeviation';
	/**
	 * Constant for value 'SummaryCurrentStatistics_MostRecentQuarterNumberOfEstimates'
	 * @return string 'SummaryCurrentStatistics_MostRecentQuarterNumberOfEstimates'
	 */
	const VALUE_SUMMARYCURRENTSTATISTICS_MOSTRECENTQUARTERNUMBEROFESTIMATES = 'SummaryCurrentStatistics_MostRecentQuarterNumberOfEstimates';
	/**
	 * Constant for value 'SummaryCurrentStatistics_CurrentQuarterDateOfQuarterEnd'
	 * @return string 'SummaryCurrentStatistics_CurrentQuarterDateOfQuarterEnd'
	 */
	const VALUE_SUMMARYCURRENTSTATISTICS_CURRENTQUARTERDATEOFQUARTEREND = 'SummaryCurrentStatistics_CurrentQuarterDateOfQuarterEnd';
	/**
	 * Constant for value 'SummaryCurrentStatistics_CurrentQuarterMeanOfEstimates'
	 * @return string 'SummaryCurrentStatistics_CurrentQuarterMeanOfEstimates'
	 */
	const VALUE_SUMMARYCURRENTSTATISTICS_CURRENTQUARTERMEANOFESTIMATES = 'SummaryCurrentStatistics_CurrentQuarterMeanOfEstimates';
	/**
	 * Constant for value 'SummaryCurrentStatistics_CurrentQuarterStandardDeviation'
	 * @return string 'SummaryCurrentStatistics_CurrentQuarterStandardDeviation'
	 */
	const VALUE_SUMMARYCURRENTSTATISTICS_CURRENTQUARTERSTANDARDDEVIATION = 'SummaryCurrentStatistics_CurrentQuarterStandardDeviation';
	/**
	 * Constant for value 'SummaryCurrentStatistics_CurrentQuarterNumberOfEstimates'
	 * @return string 'SummaryCurrentStatistics_CurrentQuarterNumberOfEstimates'
	 */
	const VALUE_SUMMARYCURRENTSTATISTICS_CURRENTQUARTERNUMBEROFESTIMATES = 'SummaryCurrentStatistics_CurrentQuarterNumberOfEstimates';
	/**
	 * Constant for value 'SummaryCurrentStatistics_TwoQuartersOutDateOfQuarterEnd'
	 * @return string 'SummaryCurrentStatistics_TwoQuartersOutDateOfQuarterEnd'
	 */
	const VALUE_SUMMARYCURRENTSTATISTICS_TWOQUARTERSOUTDATEOFQUARTEREND = 'SummaryCurrentStatistics_TwoQuartersOutDateOfQuarterEnd';
	/**
	 * Constant for value 'SummaryCurrentStatistics_TwoQuartersOutMeanOfEstimates'
	 * @return string 'SummaryCurrentStatistics_TwoQuartersOutMeanOfEstimates'
	 */
	const VALUE_SUMMARYCURRENTSTATISTICS_TWOQUARTERSOUTMEANOFESTIMATES = 'SummaryCurrentStatistics_TwoQuartersOutMeanOfEstimates';
	/**
	 * Constant for value 'SummaryCurrentStatistics_TwoQuartersOutStandardDeviation'
	 * @return string 'SummaryCurrentStatistics_TwoQuartersOutStandardDeviation'
	 */
	const VALUE_SUMMARYCURRENTSTATISTICS_TWOQUARTERSOUTSTANDARDDEVIATION = 'SummaryCurrentStatistics_TwoQuartersOutStandardDeviation';
	/**
	 * Constant for value 'SummaryCurrentStatistics_TwoQuartersOutNumberOfEstimates'
	 * @return string 'SummaryCurrentStatistics_TwoQuartersOutNumberOfEstimates'
	 */
	const VALUE_SUMMARYCURRENTSTATISTICS_TWOQUARTERSOUTNUMBEROFESTIMATES = 'SummaryCurrentStatistics_TwoQuartersOutNumberOfEstimates';
	/**
	 * Constant for value 'SummaryCurrentStatistics_ThreeQuartersOutDateOfQuarterEnd'
	 * @return string 'SummaryCurrentStatistics_ThreeQuartersOutDateOfQuarterEnd'
	 */
	const VALUE_SUMMARYCURRENTSTATISTICS_THREEQUARTERSOUTDATEOFQUARTEREND = 'SummaryCurrentStatistics_ThreeQuartersOutDateOfQuarterEnd';
	/**
	 * Constant for value 'SummaryCurrentStatistics_ThreeQuartersOutMeanOfEstimates'
	 * @return string 'SummaryCurrentStatistics_ThreeQuartersOutMeanOfEstimates'
	 */
	const VALUE_SUMMARYCURRENTSTATISTICS_THREEQUARTERSOUTMEANOFESTIMATES = 'SummaryCurrentStatistics_ThreeQuartersOutMeanOfEstimates';
	/**
	 * Constant for value 'SummaryCurrentStatistics_ThreeQuartersOutStandardDeviation'
	 * @return string 'SummaryCurrentStatistics_ThreeQuartersOutStandardDeviation'
	 */
	const VALUE_SUMMARYCURRENTSTATISTICS_THREEQUARTERSOUTSTANDARDDEVIATION = 'SummaryCurrentStatistics_ThreeQuartersOutStandardDeviation';
	/**
	 * Constant for value 'SummaryCurrentStatistics_ThreeQuartersOutNumberOfEstimates'
	 * @return string 'SummaryCurrentStatistics_ThreeQuartersOutNumberOfEstimates'
	 */
	const VALUE_SUMMARYCURRENTSTATISTICS_THREEQUARTERSOUTNUMBEROFESTIMATES = 'SummaryCurrentStatistics_ThreeQuartersOutNumberOfEstimates';
	/**
	 * Constant for value 'SummaryCurrentStatistics_FourQuartersOutDateOfQuarterEnd'
	 * @return string 'SummaryCurrentStatistics_FourQuartersOutDateOfQuarterEnd'
	 */
	const VALUE_SUMMARYCURRENTSTATISTICS_FOURQUARTERSOUTDATEOFQUARTEREND = 'SummaryCurrentStatistics_FourQuartersOutDateOfQuarterEnd';
	/**
	 * Constant for value 'SummaryCurrentStatistics_FourQuartersOutMeanOfEstimates'
	 * @return string 'SummaryCurrentStatistics_FourQuartersOutMeanOfEstimates'
	 */
	const VALUE_SUMMARYCURRENTSTATISTICS_FOURQUARTERSOUTMEANOFESTIMATES = 'SummaryCurrentStatistics_FourQuartersOutMeanOfEstimates';
	/**
	 * Constant for value 'SummaryCurrentStatistics_FourQuartersOutStandardDeviation'
	 * @return string 'SummaryCurrentStatistics_FourQuartersOutStandardDeviation'
	 */
	const VALUE_SUMMARYCURRENTSTATISTICS_FOURQUARTERSOUTSTANDARDDEVIATION = 'SummaryCurrentStatistics_FourQuartersOutStandardDeviation';
	/**
	 * Constant for value 'SummaryCurrentStatistics_FourQuartersOutNumberOfEstimates'
	 * @return string 'SummaryCurrentStatistics_FourQuartersOutNumberOfEstimates'
	 */
	const VALUE_SUMMARYCURRENTSTATISTICS_FOURQUARTERSOUTNUMBEROFESTIMATES = 'SummaryCurrentStatistics_FourQuartersOutNumberOfEstimates';
	/**
	 * Constant for value 'SummaryCurrentStatistics_DateOfMostRecentChange'
	 * @return string 'SummaryCurrentStatistics_DateOfMostRecentChange'
	 */
	const VALUE_SUMMARYCURRENTSTATISTICS_DATEOFMOSTRECENTCHANGE = 'SummaryCurrentStatistics_DateOfMostRecentChange';
	/**
	 * Constant for value 'SummaryCurrentStatistics_MostRecentQuarterReportFlag'
	 * @return string 'SummaryCurrentStatistics_MostRecentQuarterReportFlag'
	 */
	const VALUE_SUMMARYCURRENTSTATISTICS_MOSTRECENTQUARTERREPORTFLAG = 'SummaryCurrentStatistics_MostRecentQuarterReportFlag';
	/**
	 * Constant for value 'SummaryCurrentStatistics_MostRecentFiscalYearReportFlag'
	 * @return string 'SummaryCurrentStatistics_MostRecentFiscalYearReportFlag'
	 */
	const VALUE_SUMMARYCURRENTSTATISTICS_MOSTRECENTFISCALYEARREPORTFLAG = 'SummaryCurrentStatistics_MostRecentFiscalYearReportFlag';
	/**
	 * Constant for value 'SummaryCurrentStatisticsChange_CurrencyIdentificationCode'
	 * @return string 'SummaryCurrentStatisticsChange_CurrencyIdentificationCode'
	 */
	const VALUE_SUMMARYCURRENTSTATISTICSCHANGE_CURRENCYIDENTIFICATIONCODE = 'SummaryCurrentStatisticsChange_CurrencyIdentificationCode';
	/**
	 * Constant for value 'SummaryCurrentStatisticsChange_DateOfEstimateData'
	 * @return string 'SummaryCurrentStatisticsChange_DateOfEstimateData'
	 */
	const VALUE_SUMMARYCURRENTSTATISTICSCHANGE_DATEOFESTIMATEDATA = 'SummaryCurrentStatisticsChange_DateOfEstimateData';
	/**
	 * Constant for value 'SummaryCurrentStatisticsChange_MostRecentFiscalYearDateOfFiscalYearEnd'
	 * @return string 'SummaryCurrentStatisticsChange_MostRecentFiscalYearDateOfFiscalYearEnd'
	 */
	const VALUE_SUMMARYCURRENTSTATISTICSCHANGE_MOSTRECENTFISCALYEARDATEOFFISCALYEAREND = 'SummaryCurrentStatisticsChange_MostRecentFiscalYearDateOfFiscalYearEnd';
	/**
	 * Constant for value 'SummaryCurrentStatisticsChange_MostRecentFiscalYearMeanOfEstimates'
	 * @return string 'SummaryCurrentStatisticsChange_MostRecentFiscalYearMeanOfEstimates'
	 */
	const VALUE_SUMMARYCURRENTSTATISTICSCHANGE_MOSTRECENTFISCALYEARMEANOFESTIMATES = 'SummaryCurrentStatisticsChange_MostRecentFiscalYearMeanOfEstimates';
	/**
	 * Constant for value 'SummaryCurrentStatisticsChange_MostRecentFiscalYear1WeekPercentageChangeInMean'
	 * @return string 'SummaryCurrentStatisticsChange_MostRecentFiscalYear1WeekPercentageChangeInMean'
	 */
	const VALUE_SUMMARYCURRENTSTATISTICSCHANGE_MOSTRECENTFISCALYEAR1WEEKPERCENTAGECHANGEINMEAN = 'SummaryCurrentStatisticsChange_MostRecentFiscalYear1WeekPercentageChangeInMean';
	/**
	 * Constant for value 'SummaryCurrentStatisticsChange_MostRecentFiscalYearNumberAnalystsEstimatesIncreased1WeekCurrent'
	 * @return string 'SummaryCurrentStatisticsChange_MostRecentFiscalYearNumberAnalystsEstimatesIncreased1WeekCurrent'
	 */
	const VALUE_SUMMARYCURRENTSTATISTICSCHANGE_MOSTRECENTFISCALYEARNUMBERANALYSTSESTIMATESINCREASED1WEEKCURRENT = 'SummaryCurrentStatisticsChange_MostRecentFiscalYearNumberAnalystsEstimatesIncreased1WeekCurrent';
	/**
	 * Constant for value 'SummaryCurrentStatisticsChange_MostRecentFiscalYearNumberAnalystsEstimatesDecreased1WeekCurrent'
	 * @return string 'SummaryCurrentStatisticsChange_MostRecentFiscalYearNumberAnalystsEstimatesDecreased1WeekCurrent'
	 */
	const VALUE_SUMMARYCURRENTSTATISTICSCHANGE_MOSTRECENTFISCALYEARNUMBERANALYSTSESTIMATESDECREASED1WEEKCURRENT = 'SummaryCurrentStatisticsChange_MostRecentFiscalYearNumberAnalystsEstimatesDecreased1WeekCurrent';
	/**
	 * Constant for value 'SummaryCurrentStatisticsChange_MostRecentFiscalYear1MonthPercentageChangeInMean'
	 * @return string 'SummaryCurrentStatisticsChange_MostRecentFiscalYear1MonthPercentageChangeInMean'
	 */
	const VALUE_SUMMARYCURRENTSTATISTICSCHANGE_MOSTRECENTFISCALYEAR1MONTHPERCENTAGECHANGEINMEAN = 'SummaryCurrentStatisticsChange_MostRecentFiscalYear1MonthPercentageChangeInMean';
	/**
	 * Constant for value 'SummaryCurrentStatisticsChange_MostRecentFiscalYearNumberAnalystsEstimatesIncreased1MonthCurrent'
	 * @return string 'SummaryCurrentStatisticsChange_MostRecentFiscalYearNumberAnalystsEstimatesIncreased1MonthCurrent'
	 */
	const VALUE_SUMMARYCURRENTSTATISTICSCHANGE_MOSTRECENTFISCALYEARNUMBERANALYSTSESTIMATESINCREASED1MONTHCURRENT = 'SummaryCurrentStatisticsChange_MostRecentFiscalYearNumberAnalystsEstimatesIncreased1MonthCurrent';
	/**
	 * Constant for value 'SummaryCurrentStatisticsChange_MostRecentFiscalYearNumberAnalystsEstimatesDecreased1MonthCurrent'
	 * @return string 'SummaryCurrentStatisticsChange_MostRecentFiscalYearNumberAnalystsEstimatesDecreased1MonthCurrent'
	 */
	const VALUE_SUMMARYCURRENTSTATISTICSCHANGE_MOSTRECENTFISCALYEARNUMBERANALYSTSESTIMATESDECREASED1MONTHCURRENT = 'SummaryCurrentStatisticsChange_MostRecentFiscalYearNumberAnalystsEstimatesDecreased1MonthCurrent';
	/**
	 * Constant for value 'SummaryCurrentStatisticsChange_MostRecentFiscalYear3MonthPercentageChangeInMean'
	 * @return string 'SummaryCurrentStatisticsChange_MostRecentFiscalYear3MonthPercentageChangeInMean'
	 */
	const VALUE_SUMMARYCURRENTSTATISTICSCHANGE_MOSTRECENTFISCALYEAR3MONTHPERCENTAGECHANGEINMEAN = 'SummaryCurrentStatisticsChange_MostRecentFiscalYear3MonthPercentageChangeInMean';
	/**
	 * Constant for value 'SummaryCurrentStatisticsChange_MostRecentFiscalYearNumberAnalystsEstimatesIncreased3MonthsCurrent'
	 * @return string 'SummaryCurrentStatisticsChange_MostRecentFiscalYearNumberAnalystsEstimatesIncreased3MonthsCurrent'
	 */
	const VALUE_SUMMARYCURRENTSTATISTICSCHANGE_MOSTRECENTFISCALYEARNUMBERANALYSTSESTIMATESINCREASED3MONTHSCURRENT = 'SummaryCurrentStatisticsChange_MostRecentFiscalYearNumberAnalystsEstimatesIncreased3MonthsCurrent';
	/**
	 * Constant for value 'SummaryCurrentStatisticsChange_MostRecentFiscalYearNumberAnalystsEstimatesDecreased3MonthsCurrent'
	 * @return string 'SummaryCurrentStatisticsChange_MostRecentFiscalYearNumberAnalystsEstimatesDecreased3MonthsCurrent'
	 */
	const VALUE_SUMMARYCURRENTSTATISTICSCHANGE_MOSTRECENTFISCALYEARNUMBERANALYSTSESTIMATESDECREASED3MONTHSCURRENT = 'SummaryCurrentStatisticsChange_MostRecentFiscalYearNumberAnalystsEstimatesDecreased3MonthsCurrent';
	/**
	 * Constant for value 'SummaryCurrentStatisticsChange_CurrentFiscalYearDateOfFiscalYearEnd'
	 * @return string 'SummaryCurrentStatisticsChange_CurrentFiscalYearDateOfFiscalYearEnd'
	 */
	const VALUE_SUMMARYCURRENTSTATISTICSCHANGE_CURRENTFISCALYEARDATEOFFISCALYEAREND = 'SummaryCurrentStatisticsChange_CurrentFiscalYearDateOfFiscalYearEnd';
	/**
	 * Constant for value 'SummaryCurrentStatisticsChange_CurrentFiscalYearMeanOfEstimates'
	 * @return string 'SummaryCurrentStatisticsChange_CurrentFiscalYearMeanOfEstimates'
	 */
	const VALUE_SUMMARYCURRENTSTATISTICSCHANGE_CURRENTFISCALYEARMEANOFESTIMATES = 'SummaryCurrentStatisticsChange_CurrentFiscalYearMeanOfEstimates';
	/**
	 * Constant for value 'SummaryCurrentStatisticsChange_CurrentFiscalYear1WeekPercentageChangeInMean'
	 * @return string 'SummaryCurrentStatisticsChange_CurrentFiscalYear1WeekPercentageChangeInMean'
	 */
	const VALUE_SUMMARYCURRENTSTATISTICSCHANGE_CURRENTFISCALYEAR1WEEKPERCENTAGECHANGEINMEAN = 'SummaryCurrentStatisticsChange_CurrentFiscalYear1WeekPercentageChangeInMean';
	/**
	 * Constant for value 'SummaryCurrentStatisticsChange_CurrentFiscalYearNumberAnalystsEstimatesIncreased1WeekCurrent'
	 * @return string 'SummaryCurrentStatisticsChange_CurrentFiscalYearNumberAnalystsEstimatesIncreased1WeekCurrent'
	 */
	const VALUE_SUMMARYCURRENTSTATISTICSCHANGE_CURRENTFISCALYEARNUMBERANALYSTSESTIMATESINCREASED1WEEKCURRENT = 'SummaryCurrentStatisticsChange_CurrentFiscalYearNumberAnalystsEstimatesIncreased1WeekCurrent';
	/**
	 * Constant for value 'SummaryCurrentStatisticsChange_CurrentFiscalYearNumberAnalystsEstimatesDecreased1WeekCurrent'
	 * @return string 'SummaryCurrentStatisticsChange_CurrentFiscalYearNumberAnalystsEstimatesDecreased1WeekCurrent'
	 */
	const VALUE_SUMMARYCURRENTSTATISTICSCHANGE_CURRENTFISCALYEARNUMBERANALYSTSESTIMATESDECREASED1WEEKCURRENT = 'SummaryCurrentStatisticsChange_CurrentFiscalYearNumberAnalystsEstimatesDecreased1WeekCurrent';
	/**
	 * Constant for value 'SummaryCurrentStatisticsChange_CurrentFiscalYear1MonthPercentageChangeInMean'
	 * @return string 'SummaryCurrentStatisticsChange_CurrentFiscalYear1MonthPercentageChangeInMean'
	 */
	const VALUE_SUMMARYCURRENTSTATISTICSCHANGE_CURRENTFISCALYEAR1MONTHPERCENTAGECHANGEINMEAN = 'SummaryCurrentStatisticsChange_CurrentFiscalYear1MonthPercentageChangeInMean';
	/**
	 * Constant for value 'SummaryCurrentStatisticsChange_CurrentFiscalYearNumberAnalystsEstimatesIncreased1MonthCurrent'
	 * @return string 'SummaryCurrentStatisticsChange_CurrentFiscalYearNumberAnalystsEstimatesIncreased1MonthCurrent'
	 */
	const VALUE_SUMMARYCURRENTSTATISTICSCHANGE_CURRENTFISCALYEARNUMBERANALYSTSESTIMATESINCREASED1MONTHCURRENT = 'SummaryCurrentStatisticsChange_CurrentFiscalYearNumberAnalystsEstimatesIncreased1MonthCurrent';
	/**
	 * Constant for value 'SummaryCurrentStatisticsChange_CurrentFiscalYearNumberAnalystsEstimatesDecreased1MonthCurrent'
	 * @return string 'SummaryCurrentStatisticsChange_CurrentFiscalYearNumberAnalystsEstimatesDecreased1MonthCurrent'
	 */
	const VALUE_SUMMARYCURRENTSTATISTICSCHANGE_CURRENTFISCALYEARNUMBERANALYSTSESTIMATESDECREASED1MONTHCURRENT = 'SummaryCurrentStatisticsChange_CurrentFiscalYearNumberAnalystsEstimatesDecreased1MonthCurrent';
	/**
	 * Constant for value 'SummaryCurrentStatisticsChange_CurrentFiscalYear3MonthPercentageChangeInMean'
	 * @return string 'SummaryCurrentStatisticsChange_CurrentFiscalYear3MonthPercentageChangeInMean'
	 */
	const VALUE_SUMMARYCURRENTSTATISTICSCHANGE_CURRENTFISCALYEAR3MONTHPERCENTAGECHANGEINMEAN = 'SummaryCurrentStatisticsChange_CurrentFiscalYear3MonthPercentageChangeInMean';
	/**
	 * Constant for value 'SummaryCurrentStatisticsChange_CurrentFiscalYearNumberAnalystsEstimatesIncreased3MonthsCurrent'
	 * @return string 'SummaryCurrentStatisticsChange_CurrentFiscalYearNumberAnalystsEstimatesIncreased3MonthsCurrent'
	 */
	const VALUE_SUMMARYCURRENTSTATISTICSCHANGE_CURRENTFISCALYEARNUMBERANALYSTSESTIMATESINCREASED3MONTHSCURRENT = 'SummaryCurrentStatisticsChange_CurrentFiscalYearNumberAnalystsEstimatesIncreased3MonthsCurrent';
	/**
	 * Constant for value 'SummaryCurrentStatisticsChange_CurrentFiscalYearNumberAnalystsEstimatesDecreased3MonthsCurrent'
	 * @return string 'SummaryCurrentStatisticsChange_CurrentFiscalYearNumberAnalystsEstimatesDecreased3MonthsCurrent'
	 */
	const VALUE_SUMMARYCURRENTSTATISTICSCHANGE_CURRENTFISCALYEARNUMBERANALYSTSESTIMATESDECREASED3MONTHSCURRENT = 'SummaryCurrentStatisticsChange_CurrentFiscalYearNumberAnalystsEstimatesDecreased3MonthsCurrent';
	/**
	 * Constant for value 'SummaryCurrentStatisticsChange_NextFiscalYearDateOfFiscalYearEnd'
	 * @return string 'SummaryCurrentStatisticsChange_NextFiscalYearDateOfFiscalYearEnd'
	 */
	const VALUE_SUMMARYCURRENTSTATISTICSCHANGE_NEXTFISCALYEARDATEOFFISCALYEAREND = 'SummaryCurrentStatisticsChange_NextFiscalYearDateOfFiscalYearEnd';
	/**
	 * Constant for value 'SummaryCurrentStatisticsChange_NextFiscalYearMeanOfEstimates'
	 * @return string 'SummaryCurrentStatisticsChange_NextFiscalYearMeanOfEstimates'
	 */
	const VALUE_SUMMARYCURRENTSTATISTICSCHANGE_NEXTFISCALYEARMEANOFESTIMATES = 'SummaryCurrentStatisticsChange_NextFiscalYearMeanOfEstimates';
	/**
	 * Constant for value 'SummaryCurrentStatisticsChange_NextFiscalYear1WeekPercentageChangeInMean'
	 * @return string 'SummaryCurrentStatisticsChange_NextFiscalYear1WeekPercentageChangeInMean'
	 */
	const VALUE_SUMMARYCURRENTSTATISTICSCHANGE_NEXTFISCALYEAR1WEEKPERCENTAGECHANGEINMEAN = 'SummaryCurrentStatisticsChange_NextFiscalYear1WeekPercentageChangeInMean';
	/**
	 * Constant for value 'SummaryCurrentStatisticsChange_NextFiscalYearNumberAnalystsEstimatesIncreased1WeekCurrent'
	 * @return string 'SummaryCurrentStatisticsChange_NextFiscalYearNumberAnalystsEstimatesIncreased1WeekCurrent'
	 */
	const VALUE_SUMMARYCURRENTSTATISTICSCHANGE_NEXTFISCALYEARNUMBERANALYSTSESTIMATESINCREASED1WEEKCURRENT = 'SummaryCurrentStatisticsChange_NextFiscalYearNumberAnalystsEstimatesIncreased1WeekCurrent';
	/**
	 * Constant for value 'SummaryCurrentStatisticsChange_NextFiscalYearNumberAnalystsEstimatesDecreased1WeekCurrent'
	 * @return string 'SummaryCurrentStatisticsChange_NextFiscalYearNumberAnalystsEstimatesDecreased1WeekCurrent'
	 */
	const VALUE_SUMMARYCURRENTSTATISTICSCHANGE_NEXTFISCALYEARNUMBERANALYSTSESTIMATESDECREASED1WEEKCURRENT = 'SummaryCurrentStatisticsChange_NextFiscalYearNumberAnalystsEstimatesDecreased1WeekCurrent';
	/**
	 * Constant for value 'SummaryCurrentStatisticsChange_NextFiscalYear1MonthPercentageChangeInMean'
	 * @return string 'SummaryCurrentStatisticsChange_NextFiscalYear1MonthPercentageChangeInMean'
	 */
	const VALUE_SUMMARYCURRENTSTATISTICSCHANGE_NEXTFISCALYEAR1MONTHPERCENTAGECHANGEINMEAN = 'SummaryCurrentStatisticsChange_NextFiscalYear1MonthPercentageChangeInMean';
	/**
	 * Constant for value 'SummaryCurrentStatisticsChange_NextFiscalYearNumberAnalystsEstimatesIncreased1MonthCurrent'
	 * @return string 'SummaryCurrentStatisticsChange_NextFiscalYearNumberAnalystsEstimatesIncreased1MonthCurrent'
	 */
	const VALUE_SUMMARYCURRENTSTATISTICSCHANGE_NEXTFISCALYEARNUMBERANALYSTSESTIMATESINCREASED1MONTHCURRENT = 'SummaryCurrentStatisticsChange_NextFiscalYearNumberAnalystsEstimatesIncreased1MonthCurrent';
	/**
	 * Constant for value 'SummaryCurrentStatisticsChange_NextFiscalYearNumberAnalystsEstimatesDecreased1MonthCurrent'
	 * @return string 'SummaryCurrentStatisticsChange_NextFiscalYearNumberAnalystsEstimatesDecreased1MonthCurrent'
	 */
	const VALUE_SUMMARYCURRENTSTATISTICSCHANGE_NEXTFISCALYEARNUMBERANALYSTSESTIMATESDECREASED1MONTHCURRENT = 'SummaryCurrentStatisticsChange_NextFiscalYearNumberAnalystsEstimatesDecreased1MonthCurrent';
	/**
	 * Constant for value 'SummaryCurrentStatisticsChange_NextFiscalYear3MonthPercentageChangeInMean'
	 * @return string 'SummaryCurrentStatisticsChange_NextFiscalYear3MonthPercentageChangeInMean'
	 */
	const VALUE_SUMMARYCURRENTSTATISTICSCHANGE_NEXTFISCALYEAR3MONTHPERCENTAGECHANGEINMEAN = 'SummaryCurrentStatisticsChange_NextFiscalYear3MonthPercentageChangeInMean';
	/**
	 * Constant for value 'SummaryCurrentStatisticsChange_NextFiscalYearNumberAnalystsEstimatesIncreased3MonthsCurrent'
	 * @return string 'SummaryCurrentStatisticsChange_NextFiscalYearNumberAnalystsEstimatesIncreased3MonthsCurrent'
	 */
	const VALUE_SUMMARYCURRENTSTATISTICSCHANGE_NEXTFISCALYEARNUMBERANALYSTSESTIMATESINCREASED3MONTHSCURRENT = 'SummaryCurrentStatisticsChange_NextFiscalYearNumberAnalystsEstimatesIncreased3MonthsCurrent';
	/**
	 * Constant for value 'SummaryCurrentStatisticsChange_NextFiscalYearNumberAnalystsEstimatesDecreased3MonthsCurrent'
	 * @return string 'SummaryCurrentStatisticsChange_NextFiscalYearNumberAnalystsEstimatesDecreased3MonthsCurrent'
	 */
	const VALUE_SUMMARYCURRENTSTATISTICSCHANGE_NEXTFISCALYEARNUMBERANALYSTSESTIMATESDECREASED3MONTHSCURRENT = 'SummaryCurrentStatisticsChange_NextFiscalYearNumberAnalystsEstimatesDecreased3MonthsCurrent';
	/**
	 * Constant for value 'SummaryCurrentStatisticsChange_MostRecentQuarterDateOfFiscalQuarterEnd'
	 * @return string 'SummaryCurrentStatisticsChange_MostRecentQuarterDateOfFiscalQuarterEnd'
	 */
	const VALUE_SUMMARYCURRENTSTATISTICSCHANGE_MOSTRECENTQUARTERDATEOFFISCALQUARTEREND = 'SummaryCurrentStatisticsChange_MostRecentQuarterDateOfFiscalQuarterEnd';
	/**
	 * Constant for value 'SummaryCurrentStatisticsChange_MostRecentQuarterMeanOfEstimates'
	 * @return string 'SummaryCurrentStatisticsChange_MostRecentQuarterMeanOfEstimates'
	 */
	const VALUE_SUMMARYCURRENTSTATISTICSCHANGE_MOSTRECENTQUARTERMEANOFESTIMATES = 'SummaryCurrentStatisticsChange_MostRecentQuarterMeanOfEstimates';
	/**
	 * Constant for value 'SummaryCurrentStatisticsChange_MostRecentQuarter1WeekPercentageChangeInMean'
	 * @return string 'SummaryCurrentStatisticsChange_MostRecentQuarter1WeekPercentageChangeInMean'
	 */
	const VALUE_SUMMARYCURRENTSTATISTICSCHANGE_MOSTRECENTQUARTER1WEEKPERCENTAGECHANGEINMEAN = 'SummaryCurrentStatisticsChange_MostRecentQuarter1WeekPercentageChangeInMean';
	/**
	 * Constant for value 'SummaryCurrentStatisticsChange_MostRecentQuarterNumberAnalystsEstimatesIncreased1WeekCurrent'
	 * @return string 'SummaryCurrentStatisticsChange_MostRecentQuarterNumberAnalystsEstimatesIncreased1WeekCurrent'
	 */
	const VALUE_SUMMARYCURRENTSTATISTICSCHANGE_MOSTRECENTQUARTERNUMBERANALYSTSESTIMATESINCREASED1WEEKCURRENT = 'SummaryCurrentStatisticsChange_MostRecentQuarterNumberAnalystsEstimatesIncreased1WeekCurrent';
	/**
	 * Constant for value 'SummaryCurrentStatisticsChange_MostRecentQuarterNumberAnalystsEstimatesDecreased1WeekCurrent'
	 * @return string 'SummaryCurrentStatisticsChange_MostRecentQuarterNumberAnalystsEstimatesDecreased1WeekCurrent'
	 */
	const VALUE_SUMMARYCURRENTSTATISTICSCHANGE_MOSTRECENTQUARTERNUMBERANALYSTSESTIMATESDECREASED1WEEKCURRENT = 'SummaryCurrentStatisticsChange_MostRecentQuarterNumberAnalystsEstimatesDecreased1WeekCurrent';
	/**
	 * Constant for value 'SummaryCurrentStatisticsChange_MostRecentQuarter1MonthPercentageChangeInMean'
	 * @return string 'SummaryCurrentStatisticsChange_MostRecentQuarter1MonthPercentageChangeInMean'
	 */
	const VALUE_SUMMARYCURRENTSTATISTICSCHANGE_MOSTRECENTQUARTER1MONTHPERCENTAGECHANGEINMEAN = 'SummaryCurrentStatisticsChange_MostRecentQuarter1MonthPercentageChangeInMean';
	/**
	 * Constant for value 'SummaryCurrentStatisticsChange_MostRecentQuarterNumberAnalystsEstimatesIncreased1MonthCurrent'
	 * @return string 'SummaryCurrentStatisticsChange_MostRecentQuarterNumberAnalystsEstimatesIncreased1MonthCurrent'
	 */
	const VALUE_SUMMARYCURRENTSTATISTICSCHANGE_MOSTRECENTQUARTERNUMBERANALYSTSESTIMATESINCREASED1MONTHCURRENT = 'SummaryCurrentStatisticsChange_MostRecentQuarterNumberAnalystsEstimatesIncreased1MonthCurrent';
	/**
	 * Constant for value 'SummaryCurrentStatisticsChange_MostRecentQuarterNumberAnalystsEstimatesDecreased1MonthCurrent'
	 * @return string 'SummaryCurrentStatisticsChange_MostRecentQuarterNumberAnalystsEstimatesDecreased1MonthCurrent'
	 */
	const VALUE_SUMMARYCURRENTSTATISTICSCHANGE_MOSTRECENTQUARTERNUMBERANALYSTSESTIMATESDECREASED1MONTHCURRENT = 'SummaryCurrentStatisticsChange_MostRecentQuarterNumberAnalystsEstimatesDecreased1MonthCurrent';
	/**
	 * Constant for value 'SummaryCurrentStatisticsChange_MostRecentQuarter3MonthPercentageChangeInMean'
	 * @return string 'SummaryCurrentStatisticsChange_MostRecentQuarter3MonthPercentageChangeInMean'
	 */
	const VALUE_SUMMARYCURRENTSTATISTICSCHANGE_MOSTRECENTQUARTER3MONTHPERCENTAGECHANGEINMEAN = 'SummaryCurrentStatisticsChange_MostRecentQuarter3MonthPercentageChangeInMean';
	/**
	 * Constant for value 'SummaryCurrentStatisticsChange_MostRecentQuarterNumberAnalystsEstimatesIncreased3MonthsCurrent'
	 * @return string 'SummaryCurrentStatisticsChange_MostRecentQuarterNumberAnalystsEstimatesIncreased3MonthsCurrent'
	 */
	const VALUE_SUMMARYCURRENTSTATISTICSCHANGE_MOSTRECENTQUARTERNUMBERANALYSTSESTIMATESINCREASED3MONTHSCURRENT = 'SummaryCurrentStatisticsChange_MostRecentQuarterNumberAnalystsEstimatesIncreased3MonthsCurrent';
	/**
	 * Constant for value 'SummaryCurrentStatisticsChange_MostRecentQuarterNumberAnalystsEstimatesDecreased3MonthsCurrent'
	 * @return string 'SummaryCurrentStatisticsChange_MostRecentQuarterNumberAnalystsEstimatesDecreased3MonthsCurrent'
	 */
	const VALUE_SUMMARYCURRENTSTATISTICSCHANGE_MOSTRECENTQUARTERNUMBERANALYSTSESTIMATESDECREASED3MONTHSCURRENT = 'SummaryCurrentStatisticsChange_MostRecentQuarterNumberAnalystsEstimatesDecreased3MonthsCurrent';
	/**
	 * Constant for value 'SummaryCurrentStatisticsChange_CurrentQuarterDateOfFiscalQuarterEnd'
	 * @return string 'SummaryCurrentStatisticsChange_CurrentQuarterDateOfFiscalQuarterEnd'
	 */
	const VALUE_SUMMARYCURRENTSTATISTICSCHANGE_CURRENTQUARTERDATEOFFISCALQUARTEREND = 'SummaryCurrentStatisticsChange_CurrentQuarterDateOfFiscalQuarterEnd';
	/**
	 * Constant for value 'SummaryCurrentStatisticsChange_CurrentQuarterMeanOfEstimates'
	 * @return string 'SummaryCurrentStatisticsChange_CurrentQuarterMeanOfEstimates'
	 */
	const VALUE_SUMMARYCURRENTSTATISTICSCHANGE_CURRENTQUARTERMEANOFESTIMATES = 'SummaryCurrentStatisticsChange_CurrentQuarterMeanOfEstimates';
	/**
	 * Constant for value 'SummaryCurrentStatisticsChange_CurrentQuarter1WeekPercentageChangeInMean'
	 * @return string 'SummaryCurrentStatisticsChange_CurrentQuarter1WeekPercentageChangeInMean'
	 */
	const VALUE_SUMMARYCURRENTSTATISTICSCHANGE_CURRENTQUARTER1WEEKPERCENTAGECHANGEINMEAN = 'SummaryCurrentStatisticsChange_CurrentQuarter1WeekPercentageChangeInMean';
	/**
	 * Constant for value 'SummaryCurrentStatisticsChange_CurrentQuarterNumberAnalystsEstimatesIncreased1WeekCurrent'
	 * @return string 'SummaryCurrentStatisticsChange_CurrentQuarterNumberAnalystsEstimatesIncreased1WeekCurrent'
	 */
	const VALUE_SUMMARYCURRENTSTATISTICSCHANGE_CURRENTQUARTERNUMBERANALYSTSESTIMATESINCREASED1WEEKCURRENT = 'SummaryCurrentStatisticsChange_CurrentQuarterNumberAnalystsEstimatesIncreased1WeekCurrent';
	/**
	 * Constant for value 'SummaryCurrentStatisticsChange_CurrentQuarterNumberAnalystsEstimatesDecreased1WeekCurrent'
	 * @return string 'SummaryCurrentStatisticsChange_CurrentQuarterNumberAnalystsEstimatesDecreased1WeekCurrent'
	 */
	const VALUE_SUMMARYCURRENTSTATISTICSCHANGE_CURRENTQUARTERNUMBERANALYSTSESTIMATESDECREASED1WEEKCURRENT = 'SummaryCurrentStatisticsChange_CurrentQuarterNumberAnalystsEstimatesDecreased1WeekCurrent';
	/**
	 * Constant for value 'SummaryCurrentStatisticsChange_CurrentQuarter1MonthPercentageChangeInMean'
	 * @return string 'SummaryCurrentStatisticsChange_CurrentQuarter1MonthPercentageChangeInMean'
	 */
	const VALUE_SUMMARYCURRENTSTATISTICSCHANGE_CURRENTQUARTER1MONTHPERCENTAGECHANGEINMEAN = 'SummaryCurrentStatisticsChange_CurrentQuarter1MonthPercentageChangeInMean';
	/**
	 * Constant for value 'SummaryCurrentStatisticsChange_CurrentQuarterNumberAnalystsEstimatesIncreased1MonthCurrent'
	 * @return string 'SummaryCurrentStatisticsChange_CurrentQuarterNumberAnalystsEstimatesIncreased1MonthCurrent'
	 */
	const VALUE_SUMMARYCURRENTSTATISTICSCHANGE_CURRENTQUARTERNUMBERANALYSTSESTIMATESINCREASED1MONTHCURRENT = 'SummaryCurrentStatisticsChange_CurrentQuarterNumberAnalystsEstimatesIncreased1MonthCurrent';
	/**
	 * Constant for value 'SummaryCurrentStatisticsChange_CurrentQuarterNumberAnalystsEstimatesDecreased1MonthCurrent'
	 * @return string 'SummaryCurrentStatisticsChange_CurrentQuarterNumberAnalystsEstimatesDecreased1MonthCurrent'
	 */
	const VALUE_SUMMARYCURRENTSTATISTICSCHANGE_CURRENTQUARTERNUMBERANALYSTSESTIMATESDECREASED1MONTHCURRENT = 'SummaryCurrentStatisticsChange_CurrentQuarterNumberAnalystsEstimatesDecreased1MonthCurrent';
	/**
	 * Constant for value 'SummaryCurrentStatisticsChange_CurrentQuarter3MonthPercentageChangeInMean'
	 * @return string 'SummaryCurrentStatisticsChange_CurrentQuarter3MonthPercentageChangeInMean'
	 */
	const VALUE_SUMMARYCURRENTSTATISTICSCHANGE_CURRENTQUARTER3MONTHPERCENTAGECHANGEINMEAN = 'SummaryCurrentStatisticsChange_CurrentQuarter3MonthPercentageChangeInMean';
	/**
	 * Constant for value 'SummaryCurrentStatisticsChange_CurrentQuarterNumberAnalystsEstimatesIncreased3MonthsCurrent'
	 * @return string 'SummaryCurrentStatisticsChange_CurrentQuarterNumberAnalystsEstimatesIncreased3MonthsCurrent'
	 */
	const VALUE_SUMMARYCURRENTSTATISTICSCHANGE_CURRENTQUARTERNUMBERANALYSTSESTIMATESINCREASED3MONTHSCURRENT = 'SummaryCurrentStatisticsChange_CurrentQuarterNumberAnalystsEstimatesIncreased3MonthsCurrent';
	/**
	 * Constant for value 'SummaryCurrentStatisticsChange_CurrentQuarterNumberAnalystsEstimatesDecreased3MonthsCurrent'
	 * @return string 'SummaryCurrentStatisticsChange_CurrentQuarterNumberAnalystsEstimatesDecreased3MonthsCurrent'
	 */
	const VALUE_SUMMARYCURRENTSTATISTICSCHANGE_CURRENTQUARTERNUMBERANALYSTSESTIMATESDECREASED3MONTHSCURRENT = 'SummaryCurrentStatisticsChange_CurrentQuarterNumberAnalystsEstimatesDecreased3MonthsCurrent';
	/**
	 * Constant for value 'SummaryCurrentStatisticsChange_TwoQuartersOutDateOfFiscalQuarterEnd'
	 * @return string 'SummaryCurrentStatisticsChange_TwoQuartersOutDateOfFiscalQuarterEnd'
	 */
	const VALUE_SUMMARYCURRENTSTATISTICSCHANGE_TWOQUARTERSOUTDATEOFFISCALQUARTEREND = 'SummaryCurrentStatisticsChange_TwoQuartersOutDateOfFiscalQuarterEnd';
	/**
	 * Constant for value 'SummaryCurrentStatisticsChange_TwoQuartersOutMeanOfEstimates'
	 * @return string 'SummaryCurrentStatisticsChange_TwoQuartersOutMeanOfEstimates'
	 */
	const VALUE_SUMMARYCURRENTSTATISTICSCHANGE_TWOQUARTERSOUTMEANOFESTIMATES = 'SummaryCurrentStatisticsChange_TwoQuartersOutMeanOfEstimates';
	/**
	 * Constant for value 'SummaryCurrentStatisticsChange_TwoQuartersOut1WeekPercentageChangeInMean'
	 * @return string 'SummaryCurrentStatisticsChange_TwoQuartersOut1WeekPercentageChangeInMean'
	 */
	const VALUE_SUMMARYCURRENTSTATISTICSCHANGE_TWOQUARTERSOUT1WEEKPERCENTAGECHANGEINMEAN = 'SummaryCurrentStatisticsChange_TwoQuartersOut1WeekPercentageChangeInMean';
	/**
	 * Constant for value 'SummaryCurrentStatisticsChange_TwoQuartersOutNumberAnalystsEstimatesIncreased1WeekCurrent'
	 * @return string 'SummaryCurrentStatisticsChange_TwoQuartersOutNumberAnalystsEstimatesIncreased1WeekCurrent'
	 */
	const VALUE_SUMMARYCURRENTSTATISTICSCHANGE_TWOQUARTERSOUTNUMBERANALYSTSESTIMATESINCREASED1WEEKCURRENT = 'SummaryCurrentStatisticsChange_TwoQuartersOutNumberAnalystsEstimatesIncreased1WeekCurrent';
	/**
	 * Constant for value 'SummaryCurrentStatisticsChange_TwoQuartersOutNumberAnalystsEstimatesDecreased1WeekCurrent'
	 * @return string 'SummaryCurrentStatisticsChange_TwoQuartersOutNumberAnalystsEstimatesDecreased1WeekCurrent'
	 */
	const VALUE_SUMMARYCURRENTSTATISTICSCHANGE_TWOQUARTERSOUTNUMBERANALYSTSESTIMATESDECREASED1WEEKCURRENT = 'SummaryCurrentStatisticsChange_TwoQuartersOutNumberAnalystsEstimatesDecreased1WeekCurrent';
	/**
	 * Constant for value 'SummaryCurrentStatisticsChange_TwoQuartersOut1MonthPercentageChangeInMean'
	 * @return string 'SummaryCurrentStatisticsChange_TwoQuartersOut1MonthPercentageChangeInMean'
	 */
	const VALUE_SUMMARYCURRENTSTATISTICSCHANGE_TWOQUARTERSOUT1MONTHPERCENTAGECHANGEINMEAN = 'SummaryCurrentStatisticsChange_TwoQuartersOut1MonthPercentageChangeInMean';
	/**
	 * Constant for value 'SummaryCurrentStatisticsChange_TwoQuartersOutNumberAnalystsEstimatesIncreased1MonthCurrent'
	 * @return string 'SummaryCurrentStatisticsChange_TwoQuartersOutNumberAnalystsEstimatesIncreased1MonthCurrent'
	 */
	const VALUE_SUMMARYCURRENTSTATISTICSCHANGE_TWOQUARTERSOUTNUMBERANALYSTSESTIMATESINCREASED1MONTHCURRENT = 'SummaryCurrentStatisticsChange_TwoQuartersOutNumberAnalystsEstimatesIncreased1MonthCurrent';
	/**
	 * Constant for value 'SummaryCurrentStatisticsChange_TwoQuartersOutNumberAnalystsEstimatesDecreased1MonthCurrent'
	 * @return string 'SummaryCurrentStatisticsChange_TwoQuartersOutNumberAnalystsEstimatesDecreased1MonthCurrent'
	 */
	const VALUE_SUMMARYCURRENTSTATISTICSCHANGE_TWOQUARTERSOUTNUMBERANALYSTSESTIMATESDECREASED1MONTHCURRENT = 'SummaryCurrentStatisticsChange_TwoQuartersOutNumberAnalystsEstimatesDecreased1MonthCurrent';
	/**
	 * Constant for value 'SummaryCurrentStatisticsChange_TwoQuartersOut3MonthPercentageChangeInMean'
	 * @return string 'SummaryCurrentStatisticsChange_TwoQuartersOut3MonthPercentageChangeInMean'
	 */
	const VALUE_SUMMARYCURRENTSTATISTICSCHANGE_TWOQUARTERSOUT3MONTHPERCENTAGECHANGEINMEAN = 'SummaryCurrentStatisticsChange_TwoQuartersOut3MonthPercentageChangeInMean';
	/**
	 * Constant for value 'SummaryCurrentStatisticsChange_TwoQuartersOutNumberAnalystsEstimatesIncreased3MonthsCurrent'
	 * @return string 'SummaryCurrentStatisticsChange_TwoQuartersOutNumberAnalystsEstimatesIncreased3MonthsCurrent'
	 */
	const VALUE_SUMMARYCURRENTSTATISTICSCHANGE_TWOQUARTERSOUTNUMBERANALYSTSESTIMATESINCREASED3MONTHSCURRENT = 'SummaryCurrentStatisticsChange_TwoQuartersOutNumberAnalystsEstimatesIncreased3MonthsCurrent';
	/**
	 * Constant for value 'SummaryCurrentStatisticsChange_TwoQuartersOutNumberAnalystsEstimatesDecreased3MonthsCurrent'
	 * @return string 'SummaryCurrentStatisticsChange_TwoQuartersOutNumberAnalystsEstimatesDecreased3MonthsCurrent'
	 */
	const VALUE_SUMMARYCURRENTSTATISTICSCHANGE_TWOQUARTERSOUTNUMBERANALYSTSESTIMATESDECREASED3MONTHSCURRENT = 'SummaryCurrentStatisticsChange_TwoQuartersOutNumberAnalystsEstimatesDecreased3MonthsCurrent';
	/**
	 * Constant for value 'SummaryCurrentStatisticsChange_ThreeQuartersOutDateOfFiscalQuarterEnd'
	 * @return string 'SummaryCurrentStatisticsChange_ThreeQuartersOutDateOfFiscalQuarterEnd'
	 */
	const VALUE_SUMMARYCURRENTSTATISTICSCHANGE_THREEQUARTERSOUTDATEOFFISCALQUARTEREND = 'SummaryCurrentStatisticsChange_ThreeQuartersOutDateOfFiscalQuarterEnd';
	/**
	 * Constant for value 'SummaryCurrentStatisticsChange_ThreeQuartersOutMeanOfEstimates'
	 * @return string 'SummaryCurrentStatisticsChange_ThreeQuartersOutMeanOfEstimates'
	 */
	const VALUE_SUMMARYCURRENTSTATISTICSCHANGE_THREEQUARTERSOUTMEANOFESTIMATES = 'SummaryCurrentStatisticsChange_ThreeQuartersOutMeanOfEstimates';
	/**
	 * Constant for value 'SummaryCurrentStatisticsChange_ThreeQuartersOut1WeekPercentageChangeInMean'
	 * @return string 'SummaryCurrentStatisticsChange_ThreeQuartersOut1WeekPercentageChangeInMean'
	 */
	const VALUE_SUMMARYCURRENTSTATISTICSCHANGE_THREEQUARTERSOUT1WEEKPERCENTAGECHANGEINMEAN = 'SummaryCurrentStatisticsChange_ThreeQuartersOut1WeekPercentageChangeInMean';
	/**
	 * Constant for value 'SummaryCurrentStatisticsChange_ThreeQuartersOutNumberAnalystsEstimatesIncreased1WeekCurrent'
	 * @return string 'SummaryCurrentStatisticsChange_ThreeQuartersOutNumberAnalystsEstimatesIncreased1WeekCurrent'
	 */
	const VALUE_SUMMARYCURRENTSTATISTICSCHANGE_THREEQUARTERSOUTNUMBERANALYSTSESTIMATESINCREASED1WEEKCURRENT = 'SummaryCurrentStatisticsChange_ThreeQuartersOutNumberAnalystsEstimatesIncreased1WeekCurrent';
	/**
	 * Constant for value 'SummaryCurrentStatisticsChange_ThreeQuartersOutNumberAnalystsEstimatesDecreased1WeekCurrent'
	 * @return string 'SummaryCurrentStatisticsChange_ThreeQuartersOutNumberAnalystsEstimatesDecreased1WeekCurrent'
	 */
	const VALUE_SUMMARYCURRENTSTATISTICSCHANGE_THREEQUARTERSOUTNUMBERANALYSTSESTIMATESDECREASED1WEEKCURRENT = 'SummaryCurrentStatisticsChange_ThreeQuartersOutNumberAnalystsEstimatesDecreased1WeekCurrent';
	/**
	 * Constant for value 'SummaryCurrentStatisticsChange_ThreeQuartersOut1MonthPercentageChangeInMean'
	 * @return string 'SummaryCurrentStatisticsChange_ThreeQuartersOut1MonthPercentageChangeInMean'
	 */
	const VALUE_SUMMARYCURRENTSTATISTICSCHANGE_THREEQUARTERSOUT1MONTHPERCENTAGECHANGEINMEAN = 'SummaryCurrentStatisticsChange_ThreeQuartersOut1MonthPercentageChangeInMean';
	/**
	 * Constant for value 'SummaryCurrentStatisticsChange_ThreeQuartersOutNumberAnalystsEstimatesIncreased1MonthCurrent'
	 * @return string 'SummaryCurrentStatisticsChange_ThreeQuartersOutNumberAnalystsEstimatesIncreased1MonthCurrent'
	 */
	const VALUE_SUMMARYCURRENTSTATISTICSCHANGE_THREEQUARTERSOUTNUMBERANALYSTSESTIMATESINCREASED1MONTHCURRENT = 'SummaryCurrentStatisticsChange_ThreeQuartersOutNumberAnalystsEstimatesIncreased1MonthCurrent';
	/**
	 * Constant for value 'SummaryCurrentStatisticsChange_ThreeQuartersOutNumberAnalystsEstimatesDecreased1MonthCurrent'
	 * @return string 'SummaryCurrentStatisticsChange_ThreeQuartersOutNumberAnalystsEstimatesDecreased1MonthCurrent'
	 */
	const VALUE_SUMMARYCURRENTSTATISTICSCHANGE_THREEQUARTERSOUTNUMBERANALYSTSESTIMATESDECREASED1MONTHCURRENT = 'SummaryCurrentStatisticsChange_ThreeQuartersOutNumberAnalystsEstimatesDecreased1MonthCurrent';
	/**
	 * Constant for value 'SummaryCurrentStatisticsChange_ThreeQuartersOut3MonthPercentageChangeInMean'
	 * @return string 'SummaryCurrentStatisticsChange_ThreeQuartersOut3MonthPercentageChangeInMean'
	 */
	const VALUE_SUMMARYCURRENTSTATISTICSCHANGE_THREEQUARTERSOUT3MONTHPERCENTAGECHANGEINMEAN = 'SummaryCurrentStatisticsChange_ThreeQuartersOut3MonthPercentageChangeInMean';
	/**
	 * Constant for value 'SummaryCurrentStatisticsChange_ThreeQuartersOutNumberAnalystsEstimatesIncreased3MonthsCurrent'
	 * @return string 'SummaryCurrentStatisticsChange_ThreeQuartersOutNumberAnalystsEstimatesIncreased3MonthsCurrent'
	 */
	const VALUE_SUMMARYCURRENTSTATISTICSCHANGE_THREEQUARTERSOUTNUMBERANALYSTSESTIMATESINCREASED3MONTHSCURRENT = 'SummaryCurrentStatisticsChange_ThreeQuartersOutNumberAnalystsEstimatesIncreased3MonthsCurrent';
	/**
	 * Constant for value 'SummaryCurrentStatisticsChange_ThreeQuartersOutNumberAnalystsEstimatesDecreased3MonthsCurrent'
	 * @return string 'SummaryCurrentStatisticsChange_ThreeQuartersOutNumberAnalystsEstimatesDecreased3MonthsCurrent'
	 */
	const VALUE_SUMMARYCURRENTSTATISTICSCHANGE_THREEQUARTERSOUTNUMBERANALYSTSESTIMATESDECREASED3MONTHSCURRENT = 'SummaryCurrentStatisticsChange_ThreeQuartersOutNumberAnalystsEstimatesDecreased3MonthsCurrent';
	/**
	 * Constant for value 'SummaryCurrentStatisticsChange_FourQuartersOutDateOfFiscalQuarterEnd'
	 * @return string 'SummaryCurrentStatisticsChange_FourQuartersOutDateOfFiscalQuarterEnd'
	 */
	const VALUE_SUMMARYCURRENTSTATISTICSCHANGE_FOURQUARTERSOUTDATEOFFISCALQUARTEREND = 'SummaryCurrentStatisticsChange_FourQuartersOutDateOfFiscalQuarterEnd';
	/**
	 * Constant for value 'SummaryCurrentStatisticsChange_FourQuartersOutMeanOfEstimates'
	 * @return string 'SummaryCurrentStatisticsChange_FourQuartersOutMeanOfEstimates'
	 */
	const VALUE_SUMMARYCURRENTSTATISTICSCHANGE_FOURQUARTERSOUTMEANOFESTIMATES = 'SummaryCurrentStatisticsChange_FourQuartersOutMeanOfEstimates';
	/**
	 * Constant for value 'SummaryCurrentStatisticsChange_FourQuartersOut1WeekPercentageChangeInMean'
	 * @return string 'SummaryCurrentStatisticsChange_FourQuartersOut1WeekPercentageChangeInMean'
	 */
	const VALUE_SUMMARYCURRENTSTATISTICSCHANGE_FOURQUARTERSOUT1WEEKPERCENTAGECHANGEINMEAN = 'SummaryCurrentStatisticsChange_FourQuartersOut1WeekPercentageChangeInMean';
	/**
	 * Constant for value 'SummaryCurrentStatisticsChange_FourQuartersOutNumberAnalystsEstimatesIncreased1WeekCurrent'
	 * @return string 'SummaryCurrentStatisticsChange_FourQuartersOutNumberAnalystsEstimatesIncreased1WeekCurrent'
	 */
	const VALUE_SUMMARYCURRENTSTATISTICSCHANGE_FOURQUARTERSOUTNUMBERANALYSTSESTIMATESINCREASED1WEEKCURRENT = 'SummaryCurrentStatisticsChange_FourQuartersOutNumberAnalystsEstimatesIncreased1WeekCurrent';
	/**
	 * Constant for value 'SummaryCurrentStatisticsChange_FourQuartersOutNumberAnalystsEstimatesDecreased1WeekCurrent'
	 * @return string 'SummaryCurrentStatisticsChange_FourQuartersOutNumberAnalystsEstimatesDecreased1WeekCurrent'
	 */
	const VALUE_SUMMARYCURRENTSTATISTICSCHANGE_FOURQUARTERSOUTNUMBERANALYSTSESTIMATESDECREASED1WEEKCURRENT = 'SummaryCurrentStatisticsChange_FourQuartersOutNumberAnalystsEstimatesDecreased1WeekCurrent';
	/**
	 * Constant for value 'SummaryCurrentStatisticsChange_FourQuartersOut1MonthPercentageChangeInMean'
	 * @return string 'SummaryCurrentStatisticsChange_FourQuartersOut1MonthPercentageChangeInMean'
	 */
	const VALUE_SUMMARYCURRENTSTATISTICSCHANGE_FOURQUARTERSOUT1MONTHPERCENTAGECHANGEINMEAN = 'SummaryCurrentStatisticsChange_FourQuartersOut1MonthPercentageChangeInMean';
	/**
	 * Constant for value 'SummaryCurrentStatisticsChange_FourQuartersOutNumberAnalystsEstimatesIncreased1MonthCurrent'
	 * @return string 'SummaryCurrentStatisticsChange_FourQuartersOutNumberAnalystsEstimatesIncreased1MonthCurrent'
	 */
	const VALUE_SUMMARYCURRENTSTATISTICSCHANGE_FOURQUARTERSOUTNUMBERANALYSTSESTIMATESINCREASED1MONTHCURRENT = 'SummaryCurrentStatisticsChange_FourQuartersOutNumberAnalystsEstimatesIncreased1MonthCurrent';
	/**
	 * Constant for value 'SummaryCurrentStatisticsChange_FourQuartersOutNumberAnalystsEstimatesDecreased1MonthCurrent'
	 * @return string 'SummaryCurrentStatisticsChange_FourQuartersOutNumberAnalystsEstimatesDecreased1MonthCurrent'
	 */
	const VALUE_SUMMARYCURRENTSTATISTICSCHANGE_FOURQUARTERSOUTNUMBERANALYSTSESTIMATESDECREASED1MONTHCURRENT = 'SummaryCurrentStatisticsChange_FourQuartersOutNumberAnalystsEstimatesDecreased1MonthCurrent';
	/**
	 * Constant for value 'SummaryCurrentStatisticsChange_FourQuartersOut3MonthPercentageChangeInMean'
	 * @return string 'SummaryCurrentStatisticsChange_FourQuartersOut3MonthPercentageChangeInMean'
	 */
	const VALUE_SUMMARYCURRENTSTATISTICSCHANGE_FOURQUARTERSOUT3MONTHPERCENTAGECHANGEINMEAN = 'SummaryCurrentStatisticsChange_FourQuartersOut3MonthPercentageChangeInMean';
	/**
	 * Constant for value 'SummaryCurrentStatisticsChange_FourQuartersOutNumberAnalystsEstimatesIncreased3MonthsCurrent'
	 * @return string 'SummaryCurrentStatisticsChange_FourQuartersOutNumberAnalystsEstimatesIncreased3MonthsCurrent'
	 */
	const VALUE_SUMMARYCURRENTSTATISTICSCHANGE_FOURQUARTERSOUTNUMBERANALYSTSESTIMATESINCREASED3MONTHSCURRENT = 'SummaryCurrentStatisticsChange_FourQuartersOutNumberAnalystsEstimatesIncreased3MonthsCurrent';
	/**
	 * Constant for value 'SummaryCurrentStatisticsChange_FourQuartersOutNumberAnalystsEstimatesDecreased3MonthsCurrent'
	 * @return string 'SummaryCurrentStatisticsChange_FourQuartersOutNumberAnalystsEstimatesDecreased3MonthsCurrent'
	 */
	const VALUE_SUMMARYCURRENTSTATISTICSCHANGE_FOURQUARTERSOUTNUMBERANALYSTSESTIMATESDECREASED3MONTHSCURRENT = 'SummaryCurrentStatisticsChange_FourQuartersOutNumberAnalystsEstimatesDecreased3MonthsCurrent';
	/**
	 * Constant for value 'SummaryCurrentStatisticsChange_DateOfMostRecentChange'
	 * @return string 'SummaryCurrentStatisticsChange_DateOfMostRecentChange'
	 */
	const VALUE_SUMMARYCURRENTSTATISTICSCHANGE_DATEOFMOSTRECENTCHANGE = 'SummaryCurrentStatisticsChange_DateOfMostRecentChange';
	/**
	 * Constant for value 'SummaryCurrentStatisticsChange_MostRecentQuarterReportFlag'
	 * @return string 'SummaryCurrentStatisticsChange_MostRecentQuarterReportFlag'
	 */
	const VALUE_SUMMARYCURRENTSTATISTICSCHANGE_MOSTRECENTQUARTERREPORTFLAG = 'SummaryCurrentStatisticsChange_MostRecentQuarterReportFlag';
	/**
	 * Constant for value 'SummaryCurrentStatisticsChange_MostRecentFiscalYearReportFlag'
	 * @return string 'SummaryCurrentStatisticsChange_MostRecentFiscalYearReportFlag'
	 */
	const VALUE_SUMMARYCURRENTSTATISTICSCHANGE_MOSTRECENTFISCALYEARREPORTFLAG = 'SummaryCurrentStatisticsChange_MostRecentFiscalYearReportFlag';
	/**
	 * Constant for value 'SummaryCurrentStatisticsChange_MostRecentFiscalYearMedianEstimate'
	 * @return string 'SummaryCurrentStatisticsChange_MostRecentFiscalYearMedianEstimate'
	 */
	const VALUE_SUMMARYCURRENTSTATISTICSCHANGE_MOSTRECENTFISCALYEARMEDIANESTIMATE = 'SummaryCurrentStatisticsChange_MostRecentFiscalYearMedianEstimate';
	/**
	 * Constant for value 'SummaryCurrentStatisticsChange_CurrentFiscalYearMedianEstimate'
	 * @return string 'SummaryCurrentStatisticsChange_CurrentFiscalYearMedianEstimate'
	 */
	const VALUE_SUMMARYCURRENTSTATISTICSCHANGE_CURRENTFISCALYEARMEDIANESTIMATE = 'SummaryCurrentStatisticsChange_CurrentFiscalYearMedianEstimate';
	/**
	 * Constant for value 'SummaryCurrentStatisticsChange_NextFiscalYearMedianEstimate'
	 * @return string 'SummaryCurrentStatisticsChange_NextFiscalYearMedianEstimate'
	 */
	const VALUE_SUMMARYCURRENTSTATISTICSCHANGE_NEXTFISCALYEARMEDIANESTIMATE = 'SummaryCurrentStatisticsChange_NextFiscalYearMedianEstimate';
	/**
	 * Constant for value 'SummaryCurrentStatisticsChange_MostRecentQuarterMedianEstimate'
	 * @return string 'SummaryCurrentStatisticsChange_MostRecentQuarterMedianEstimate'
	 */
	const VALUE_SUMMARYCURRENTSTATISTICSCHANGE_MOSTRECENTQUARTERMEDIANESTIMATE = 'SummaryCurrentStatisticsChange_MostRecentQuarterMedianEstimate';
	/**
	 * Constant for value 'SummaryCurrentStatisticsChange_CurrentQuarterMedianEstimate'
	 * @return string 'SummaryCurrentStatisticsChange_CurrentQuarterMedianEstimate'
	 */
	const VALUE_SUMMARYCURRENTSTATISTICSCHANGE_CURRENTQUARTERMEDIANESTIMATE = 'SummaryCurrentStatisticsChange_CurrentQuarterMedianEstimate';
	/**
	 * Constant for value 'SummaryCurrentStatisticsChange_TwoQuartersOutMedianEstimate'
	 * @return string 'SummaryCurrentStatisticsChange_TwoQuartersOutMedianEstimate'
	 */
	const VALUE_SUMMARYCURRENTSTATISTICSCHANGE_TWOQUARTERSOUTMEDIANESTIMATE = 'SummaryCurrentStatisticsChange_TwoQuartersOutMedianEstimate';
	/**
	 * Constant for value 'SummaryCurrentStatisticsChange_ThreeQuartersOutMedianEstimate'
	 * @return string 'SummaryCurrentStatisticsChange_ThreeQuartersOutMedianEstimate'
	 */
	const VALUE_SUMMARYCURRENTSTATISTICSCHANGE_THREEQUARTERSOUTMEDIANESTIMATE = 'SummaryCurrentStatisticsChange_ThreeQuartersOutMedianEstimate';
	/**
	 * Constant for value 'SummaryCurrentStatisticsChange_FourQuartersOutMedianEstimate'
	 * @return string 'SummaryCurrentStatisticsChange_FourQuartersOutMedianEstimate'
	 */
	const VALUE_SUMMARYCURRENTSTATISTICSCHANGE_FOURQUARTERSOUTMEDIANESTIMATE = 'SummaryCurrentStatisticsChange_FourQuartersOutMedianEstimate';
	/**
	 * Constructor
	 * @return XiAnalystsTypeAnalystFieldTypes
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
		return in_array($_value,array(self::VALUE_SECURITY_TICKER,self::VALUE_SECURITY_CIK,self::VALUE_SECURITY_CUSIP,self::VALUE_SECURITY_ISIN,self::VALUE_SECURITY_COMPANYNAME,self::VALUE_SECURITY_MARKET,self::VALUE_SECURITY_CATEGORYORINDUSTRY,self::VALUE_ANALYSTRECOMMENDATIONS_NUMBEROFSTRONGBUYSCURRENT,self::VALUE_ANALYSTRECOMMENDATIONS_NUMBEROFSTRONGBUYS1MONTHAGO,self::VALUE_ANALYSTRECOMMENDATIONS_NUMBEROFSTRONGBUYS2MONTHSAGO,self::VALUE_ANALYSTRECOMMENDATIONS_NUMBEROFSTRONGBUYS3MONTHSAGO,self::VALUE_ANALYSTRECOMMENDATIONS_NUMBEROFMODERATEBUYSCURRENT,self::VALUE_ANALYSTRECOMMENDATIONS_NUMBEROFMODERATEBUYS1MONTHAGO,self::VALUE_ANALYSTRECOMMENDATIONS_NUMBEROFMODERATEBUYS2MONTHSAGO,self::VALUE_ANALYSTRECOMMENDATIONS_NUMBEROFMODERATEBUYS3MONTHSAGO,self::VALUE_ANALYSTRECOMMENDATIONS_NUMBEROFHOLDSCURRENT,self::VALUE_ANALYSTRECOMMENDATIONS_NUMBEROFHOLDS1MONTHAGO,self::VALUE_ANALYSTRECOMMENDATIONS_NUMBEROFHOLDS2MONTHSAGO,self::VALUE_ANALYSTRECOMMENDATIONS_NUMBEROFHOLDS3MONTHSAGO,self::VALUE_ANALYSTRECOMMENDATIONS_NUMBEROFMODERATESELLSCURRENT,self::VALUE_ANALYSTRECOMMENDATIONS_NUMBEROFMODERATESELLS1MONTHAGO,self::VALUE_ANALYSTRECOMMENDATIONS_NUMBEROFMODERATESELLS2MONTHSAGO,self::VALUE_ANALYSTRECOMMENDATIONS_NUMBEROFMODERATESELLS3MONTHSAGO,self::VALUE_ANALYSTRECOMMENDATIONS_NUMBEROFSTRONGSELLSCURRENT,self::VALUE_ANALYSTRECOMMENDATIONS_NUMBEROFSTRONGSELLS1MONTHAGO,self::VALUE_ANALYSTRECOMMENDATIONS_NUMBEROFSTRONGSELLS2MONTHSAGO,self::VALUE_ANALYSTRECOMMENDATIONS_NUMBEROFSTRONGSELLS3MONTHSAGO,self::VALUE_ANALYSTRECOMMENDATIONS_MEANRECOMMENDATIONCURRENT,self::VALUE_ANALYSTRECOMMENDATIONS_MEANRECOMMENDATION1MONTHAGO,self::VALUE_ANALYSTRECOMMENDATIONS_MEANRECOMMENDATION2MONTHAGO,self::VALUE_ANALYSTRECOMMENDATIONS_MEANRECOMMENDATION3MONTHAGO,self::VALUE_ANALYSTRECOMMENDATIONSANDHISTOGRAM_FILEPRODUCTIONDATE,self::VALUE_ANALYSTRECOMMENDATIONSANDHISTOGRAM_MOSTRECENTFISCALYEAREND,self::VALUE_ANALYSTRECOMMENDATIONSANDHISTOGRAM_MOSTRECENTFISCALQUARTEREND,self::VALUE_ANALYSTRECOMMENDATIONSANDHISTOGRAM_CURRENTQUARTEREXPECTEDREPORTDATE,self::VALUE_ANALYSTRECOMMENDATIONSANDHISTOGRAM_NEXTQUARTEREXPECTEDREPORTDATE,self::VALUE_ANALYSTRECOMMENDATIONSANDHISTOGRAM_CURRENTFISCALYEAREXPECTEDREPORTDATE,self::VALUE_ANALYSTRECOMMENDATIONSANDHISTOGRAM_NEXTFISCALYEAREXPECTEDREPORTDATE,self::VALUE_ANALYSTRECOMMENDATIONSANDHISTOGRAM_CURRENTQUARTERSTANDARDDEVIATION,self::VALUE_ANALYSTRECOMMENDATIONSANDHISTOGRAM_NEXTQUARTERSTANDARDDEVIATION,self::VALUE_ANALYSTRECOMMENDATIONSANDHISTOGRAM_CURRENTFISCALYEARSTANDARDDEVIATION,self::VALUE_ANALYSTRECOMMENDATIONSANDHISTOGRAM_NEXTFISCALYEARSTANDARDDEVIATION,self::VALUE_ANALYSTRECOMMENDATIONSANDHISTOGRAM_LONGTERMGROWTHSTANDARDDEVIATION,self::VALUE_ANALYSTRECOMMENDATIONSANDHISTOGRAM_CURRENTQUARTERMEDIAN,self::VALUE_ANALYSTRECOMMENDATIONSANDHISTOGRAM_NEXTQUARTERMEDIAN,self::VALUE_ANALYSTRECOMMENDATIONSANDHISTOGRAM_CURRENTFISCALYEARMEDIAN,self::VALUE_ANALYSTRECOMMENDATIONSANDHISTOGRAM_NEXTFISCALYEARMEDIAN,self::VALUE_ANALYSTRECOMMENDATIONSANDHISTOGRAM_LONGTERMGROWTHMEDIAN,self::VALUE_ANALYSTRECOMMENDATIONSANDHISTOGRAM_CURRENTQUARTERNUMBERREVISIONSUPLAST7DAYS,self::VALUE_ANALYSTRECOMMENDATIONSANDHISTOGRAM_CURRENTQUARTERNUMBERREVISIONSDOWNLAST7DAYS,self::VALUE_ANALYSTRECOMMENDATIONSANDHISTOGRAM_NEXTQUARTERNUMBERREVISIONSUPLAST7DAYS,self::VALUE_ANALYSTRECOMMENDATIONSANDHISTOGRAM_NEXTQUARTERNUMBERREVISIONSDOWNLAST7DAYS,self::VALUE_ANALYSTRECOMMENDATIONSANDHISTOGRAM_CURRENTFISCALYEARNUMBERREVISIONSUPLAST7DAYS,self::VALUE_ANALYSTRECOMMENDATIONSANDHISTOGRAM_CURRENTFISCALYEARNUMBERREVISIONSDOWNLAST7DAYS,self::VALUE_ANALYSTRECOMMENDATIONSANDHISTOGRAM_NEXTFISCALYEARNUMBERREVISIONSUPLAST7DAYS,self::VALUE_ANALYSTRECOMMENDATIONSANDHISTOGRAM_NEXTFISCALYEARNUMBERREVISIONSDOWNLAST7DAYS,self::VALUE_ANALYSTRECOMMENDATIONSANDHISTOGRAM_CURRENTQUARTERNUMBERREVISIONSUPLAST30DAYS,self::VALUE_ANALYSTRECOMMENDATIONSANDHISTOGRAM_CURRENTQUARTERNUMBERREVISIONSDOWNLAST30DAYS,self::VALUE_ANALYSTRECOMMENDATIONSANDHISTOGRAM_NEXTQUARTERNUMBERREVISIONSUPLAST30DAYS,self::VALUE_ANALYSTRECOMMENDATIONSANDHISTOGRAM_NEXTQUARTERNUMBERREVISIONSDOWNLAST30DAYS,self::VALUE_ANALYSTRECOMMENDATIONSANDHISTOGRAM_CURRENTFISCALYEARNUMBERREVISIONSUPLAST30DAYS,self::VALUE_ANALYSTRECOMMENDATIONSANDHISTOGRAM_CURRENTFISCALYEARNUMBERREVISIONSDOWNLAST30DAYS,self::VALUE_ANALYSTRECOMMENDATIONSANDHISTOGRAM_NEXTFISCALYEARNUMBERREVISIONSUPLAST30DAYS,self::VALUE_ANALYSTRECOMMENDATIONSANDHISTOGRAM_NEXTFISCALYEARNUMBERREVISIONSDOWNLAST30DAYS,self::VALUE_ANALYSTRECOMMENDATIONSANDHISTOGRAM_CONSENSUSRECOMMENDATIONCURRENT,self::VALUE_ANALYSTRECOMMENDATIONSANDHISTOGRAM_CONSENSUSRECOMMENDATION7DAYSAGO,self::VALUE_ANALYSTRECOMMENDATIONSANDHISTOGRAM_CONSENSUSRECOMMENDATION14DAYSAGO,self::VALUE_ANALYSTRECOMMENDATIONSANDHISTOGRAM_CONSENSUSRECOMMENDATION21DAYSAGO,self::VALUE_ANALYSTRECOMMENDATIONSANDHISTOGRAM_CONSENSUSRECOMMENDATION28DAYSAGO,self::VALUE_ANALYSTRECOMMENDATIONSANDHISTOGRAM_CONSENSUSRECOMMENDATION35DAYSAGO,self::VALUE_ANALYSTRECOMMENDATIONSANDHISTOGRAM_EXCHANGECODE,self::VALUE_ANALYSTRECOMMENDATIONSANDHISTOGRAM_LONGTERMGROWTHNUMBERREVISIONSUPLAST7DAYS,self::VALUE_ANALYSTRECOMMENDATIONSANDHISTOGRAM_LONGTERMGROWTHNUMBERREVISIONSDOWNLAST7DAYS,self::VALUE_ANALYSTRECOMMENDATIONSANDHISTOGRAM_LONGTERMGROWTHNUMBERREVISIONSUPLAST30DAYS,self::VALUE_ANALYSTRECOMMENDATIONSANDHISTOGRAM_LONGTERMGROWTHNUMBERREVISIONSDOWNLAST30DAYS,self::VALUE_ANALYSTRECOMMENDATIONSANDHISTOGRAM_NUMBEROFSTRONGBUYRECOMMENDATIONS7DAYSAGO,self::VALUE_ANALYSTRECOMMENDATIONSANDHISTOGRAM_NUMBEROFMODERATEBUYRECOMMENDATIONS7DAYSAGO,self::VALUE_ANALYSTRECOMMENDATIONSANDHISTOGRAM_NUMBEROFHOLDRECOMMENDATIONS7DAYSAGO,self::VALUE_ANALYSTRECOMMENDATIONSANDHISTOGRAM_NUMBEROFMODERATESELLRECOMMENDATIONS7DAYSAGO,self::VALUE_ANALYSTRECOMMENDATIONSANDHISTOGRAM_NUMBEROFSTRONGSELLRECOMMENDATIONS7DAYSAGO,self::VALUE_ANALYSTRECOMMENDATIONSANDHISTOGRAM_SOURCECODEFORCURRENTQUARTEREXPECTEDREPORTDATE,self::VALUE_ANALYSTRECOMMENDATIONSANDHISTOGRAM_SOURCECODEFORNEXTQUARTEREXPECTEDREPORTDATE,self::VALUE_ANALYSTRECOMMENDATIONSANDHISTOGRAM_SOURCECODEFORCURRENTFISCALYEAREXPECTEDREPORTDATE,self::VALUE_ANALYSTRECOMMENDATIONSANDHISTOGRAM_SOURCECODEFORNEXTFISCALYEAREXPECTEDREPORTDATE,self::VALUE_CURRENTSALESCONSENSUS_DATAIDENTIFICATIONCODE,self::VALUE_CURRENTSALESCONSENSUS_ZACKSMASTERCODE,self::VALUE_CURRENTSALESCONSENSUS_ZACKSEXPANDEDINDUSTRYCODE,self::VALUE_CURRENTSALESCONSENSUS_CURRENTFISCALYEARPERIODDATE,self::VALUE_CURRENTSALESCONSENSUS_CURRENTFISCALYEARHIGHSALESESTIMATE,self::VALUE_CURRENTSALESCONSENSUS_CURRENTFISCALYEARLOWSALESESTIMATE,self::VALUE_CURRENTSALESCONSENSUS_CURRENTFISCALYEARMEANSALESESTIMATE,self::VALUE_CURRENTSALESCONSENSUS_CURRENTFISCALYEARSTANDARDDEVIATION,self::VALUE_CURRENTSALESCONSENSUS_CURRENTFISCALYEARNUMBEROFESTIMATESINCONSENSUS,self::VALUE_CURRENTSALESCONSENSUS_CURRENTFISCALYEARDATEOFLATESTESTIMATE,self::VALUE_CURRENTSALESCONSENSUS_NEXTFISCALYEARPERIODDATE,self::VALUE_CURRENTSALESCONSENSUS_NEXTFISCALYEARHIGHSALESESTIMATE,self::VALUE_CURRENTSALESCONSENSUS_NEXTFISCALYEARLOWSALESESTIMATE,self::VALUE_CURRENTSALESCONSENSUS_NEXTFISCALYEARMEANSALESESTIMATE,self::VALUE_CURRENTSALESCONSENSUS_NEXTFISCALYEARSTANDARDDEVIATION,self::VALUE_CURRENTSALESCONSENSUS_NEXTFISCALYEARNUMBEROFESTIMATESINCONSENSUS,self::VALUE_CURRENTSALESCONSENSUS_NEXTFISCALYEARDATEOFLATESTESTIMATE,self::VALUE_CURRENTSALESCONSENSUS_CURRENTQUARTERPERIODDATE,self::VALUE_CURRENTSALESCONSENSUS_CURRENTQUARTERHIGHSALESESTIMATE,self::VALUE_CURRENTSALESCONSENSUS_CURRENTQUARTERLOWSALESESTIMATE,self::VALUE_CURRENTSALESCONSENSUS_CURRENTQUARTERMEANSALESESTIMATE,self::VALUE_CURRENTSALESCONSENSUS_CURRENTQUARTERSTANDARDDEVIATION,self::VALUE_CURRENTSALESCONSENSUS_CURRENTQUARTERNUMBEROFESTIMATESINCONSENSUS,self::VALUE_CURRENTSALESCONSENSUS_CURRENTQUARTERDATEOFLATESTESTIMATE,self::VALUE_CURRENTSALESCONSENSUS_TWOQUARTERSOUTPERIODDATE,self::VALUE_CURRENTSALESCONSENSUS_TWOQUARTERSOUTHIGHSALESESTIMATE,self::VALUE_CURRENTSALESCONSENSUS_TWOQUARTERSOUTLOWSALESESTIMATE,self::VALUE_CURRENTSALESCONSENSUS_TWOQUARTERSOUTMEANSALESESTIMATE,self::VALUE_CURRENTSALESCONSENSUS_TWOQUARTERSOUTSTANDARDDEVIATION,self::VALUE_CURRENTSALESCONSENSUS_TWOQUARTERSOUTNUMBEROFESTIMATESINCONSENSUS,self::VALUE_CURRENTSALESCONSENSUS_TWOQUARTERSOUTDATEOFLATESTESTIMATE,self::VALUE_CURRENTSALESCONSENSUS_THREEQUARTERSOUTPERIODDATE,self::VALUE_CURRENTSALESCONSENSUS_THREEQUARTERSOUTHIGHSALESESTIMATE,self::VALUE_CURRENTSALESCONSENSUS_THREEQUARTERSOUTLOWSALESESTIMATE,self::VALUE_CURRENTSALESCONSENSUS_THREEQUARTERSOUTMEANSALESESTIMATE,self::VALUE_CURRENTSALESCONSENSUS_THREEQUARTERSOUTSTANDARDDEVIATION,self::VALUE_CURRENTSALESCONSENSUS_THREEQUARTERSOUTNUMBEROFESTIMATESINCONSENSUS,self::VALUE_CURRENTSALESCONSENSUS_THREEQUARTERSOUTDATEOFLATESTESTIMATE,self::VALUE_CURRENTSALESCONSENSUS_FOURQUARTERSOUTPERIODDATE,self::VALUE_CURRENTSALESCONSENSUS_FOURQUARTERSOUTHIGHSALESESTIMATE,self::VALUE_CURRENTSALESCONSENSUS_FOURQUARTERSOUTLOWSALESESTIMATE,self::VALUE_CURRENTSALESCONSENSUS_FOURQUARTERSOUTMEANSALESESTIMATE,self::VALUE_CURRENTSALESCONSENSUS_FOURQUARTERSOUTSTANDARDDEVIATION,self::VALUE_CURRENTSALESCONSENSUS_FOURQUARTERSOUTNUMBEROFESTIMATESINCONSENSUS,self::VALUE_CURRENTSALESCONSENSUS_FOURQUARTERSOUTDATEOFLATESTESTIMATE,self::VALUE_CURRENTSALESCONSENSUS_FIVEQUARTERSOUTPERIODDATE,self::VALUE_CURRENTSALESCONSENSUS_FIVEQUARTERSOUTHIGHSALESESTIMATE,self::VALUE_CURRENTSALESCONSENSUS_FIVEQUARTERSOUTLOWSALESESTIMATE,self::VALUE_CURRENTSALESCONSENSUS_FIVEQUARTERSOUTMEANSALESESTIMATE,self::VALUE_CURRENTSALESCONSENSUS_FIVEQUARTERSOUTSTANDARDDEVIATION,self::VALUE_CURRENTSALESCONSENSUS_FIVEQUARTERSOUTNUMBEROFESTIMATESINCONSENSUS,self::VALUE_CURRENTSALESCONSENSUS_FIVEQUARTERSOUTDATEOFLATESTESTIMATE,self::VALUE_CURRENTSALESCONSENSUS_SIXQUARTERSOUTPERIODDATE,self::VALUE_CURRENTSALESCONSENSUS_SIXQUARTERSOUTHIGHSALESESTIMATE,self::VALUE_CURRENTSALESCONSENSUS_SIXQUARTERSOUTLOWSALESESTIMATE,self::VALUE_CURRENTSALESCONSENSUS_SIXQUARTERSOUTMEANSALESESTIMATE,self::VALUE_CURRENTSALESCONSENSUS_SIXQUARTERSOUTSTANDARDDEVIATION,self::VALUE_CURRENTSALESCONSENSUS_SIXQUARTERSOUTNUMBEROFESTIMATESINCONSENSUS,self::VALUE_CURRENTSALESCONSENSUS_SIXQUARTERSOUTDATEOFLATESTESTIMATE,self::VALUE_CURRENTSALESCONSENSUS_SEVENQUARTERSOUTPERIODDATE,self::VALUE_CURRENTSALESCONSENSUS_SEVENQUARTERSOUTHIGHSALESESTIMATE,self::VALUE_CURRENTSALESCONSENSUS_SEVENQUARTERSOUTLOWSALESESTIMATE,self::VALUE_CURRENTSALESCONSENSUS_SEVENQUARTERSOUTMEANSALESESTIMATE,self::VALUE_CURRENTSALESCONSENSUS_SEVENQUARTERSOUTSTANDARDDEVIATION,self::VALUE_CURRENTSALESCONSENSUS_SEVENQUARTERSOUTNUMBEROFESTIMATESINCONSENSUS,self::VALUE_CURRENTSALESCONSENSUS_SEVENQUARTERSOUTDATEOFLATESTESTIMATE,self::VALUE_CURRENTSALESCONSENSUS_EIGHTQUARTERSOUTPERIODDATE,self::VALUE_CURRENTSALESCONSENSUS_EIGHTQUARTERSOUTHIGHSALESESTIMATE,self::VALUE_CURRENTSALESCONSENSUS_EIGHTQUARTERSOUTLOWSALESESTIMATE,self::VALUE_CURRENTSALESCONSENSUS_EIGHTQUARTERSOUTMEANSALESESTIMATE,self::VALUE_CURRENTSALESCONSENSUS_EIGHTQUARTERSOUTSTANDARDDEVIATION,self::VALUE_CURRENTSALESCONSENSUS_EIGHTQUARTERSOUTNUMBEROFESTIMATESINCONSENSUS,self::VALUE_CURRENTSALESCONSENSUS_EIGHTQUARTERSOUTDATEOFLATESTESTIMATE,self::VALUE_CURRENTSALESCONSENSUSCHANGE_DATAIDENTIFICATIONCODE,self::VALUE_CURRENTSALESCONSENSUSCHANGE_ZACKSMASTERCODE,self::VALUE_CURRENTSALESCONSENSUSCHANGE_ZACKSEXPANDEDINDUSTRYCODE,self::VALUE_CURRENTSALESCONSENSUSCHANGE_CURRENTFISCALYEARPERIODDATE,self::VALUE_CURRENTSALESCONSENSUSCHANGE_CURRENTFISCALYEARMEANESTIMATE,self::VALUE_CURRENTSALESCONSENSUSCHANGE_CURRENTFISCALYEAR1WEEKPERCENTAGECHANGEINCONSENSUSMEAN,self::VALUE_CURRENTSALESCONSENSUSCHANGE_CURRENTFISCALYEARNUMBERANALYSTSESTIMATESINCREASED1WEEKTOCURRENT,self::VALUE_CURRENTSALESCONSENSUSCHANGE_CURRENTFISCALYEARNUMBERANALYSTSESTIMATESDECREASED1WEEKTOCURRENT,self::VALUE_CURRENTSALESCONSENSUSCHANGE_CURRENTFISCALYEAR1MONTHPERCENTAGECHANGEINCONSENSUSMEAN,self::VALUE_CURRENTSALESCONSENSUSCHANGE_CURRENTFISCALYEARNUMBERANALYSTSESTIMATESINCREASED1MONTHTOCURRENT,self::VALUE_CURRENTSALESCONSENSUSCHANGE_CURRENTFISCALYEARNUMBERANALYSTSESTIMATESDECREASED1MONTHTOCURRENT,self::VALUE_CURRENTSALESCONSENSUSCHANGE_CURRENTFISCALYEAR3MONTHPERCENTAGECHANGEINCONSENSUSMEAN,self::VALUE_CURRENTSALESCONSENSUSCHANGE_CURRENTFISCALYEARNUMBERANALYSTSESTIMATESINCREASED3MONTHSTOCURRENT,self::VALUE_CURRENTSALESCONSENSUSCHANGE_CURRENTFISCALYEARNUMBERANALYSTSESTIMATESDECREASED3MONTHSTOCURRENT,self::VALUE_CURRENTSALESCONSENSUSCHANGE_CURRENTFISCALYEARMEDIANESTIMATE,self::VALUE_CURRENTSALESCONSENSUSCHANGE_CURRENTFISCALYEARDATEOFLATESTESTIMATE,self::VALUE_CURRENTSALESCONSENSUSCHANGE_NEXTFISCALYEARPERIODDATE,self::VALUE_CURRENTSALESCONSENSUSCHANGE_NEXTFISCALYEARMEANESTIMATE,self::VALUE_CURRENTSALESCONSENSUSCHANGE_NEXTFISCALYEAR1WEEKPERCENTAGECHANGEINCONSENSUSMEAN,self::VALUE_CURRENTSALESCONSENSUSCHANGE_NEXTFISCALYEARNUMBERANALYSTSESTIMATESINCREASED1WEEKTOCURRENT,self::VALUE_CURRENTSALESCONSENSUSCHANGE_NEXTFISCALYEARNUMBERANALYSTSESTIMATESDECREASED1WEEKTOCURRENT,self::VALUE_CURRENTSALESCONSENSUSCHANGE_NEXTFISCALYEAR1MONTHPERCENTAGECHANGEINCONSENSUSMEAN,self::VALUE_CURRENTSALESCONSENSUSCHANGE_NEXTFISCALYEARNUMBERANALYSTSESTIMATESINCREASED1MONTHTOCURRENT,self::VALUE_CURRENTSALESCONSENSUSCHANGE_NEXTFISCALYEARNUMBERANALYSTSESTIMATESDECREASED1MONTHTOCURRENT,self::VALUE_CURRENTSALESCONSENSUSCHANGE_NEXTFISCALYEAR3MONTHPERCENTAGECHANGEINCONSENSUSMEAN,self::VALUE_CURRENTSALESCONSENSUSCHANGE_NEXTFISCALYEARNUMBERANALYSTSESTIMATESINCREASED3MONTHSTOCURRENT,self::VALUE_CURRENTSALESCONSENSUSCHANGE_NEXTFISCALYEARNUMBERANALYSTSESTIMATESDECREASED3MONTHSTOCURRENT,self::VALUE_CURRENTSALESCONSENSUSCHANGE_NEXTFISCALYEARMEDIANESTIMATE,self::VALUE_CURRENTSALESCONSENSUSCHANGE_NEXTFISCALYEARDATEOFLATESTESTIMATE,self::VALUE_CURRENTSALESCONSENSUSCHANGE_CURRENTQUARTERPERIODDATE,self::VALUE_CURRENTSALESCONSENSUSCHANGE_CURRENTQUARTERMEANESTIMATE,self::VALUE_CURRENTSALESCONSENSUSCHANGE_CURRENTQUARTER1WEEKPERCENTAGECHANGEINCONSENSUSMEAN,self::VALUE_CURRENTSALESCONSENSUSCHANGE_CURRENTQUARTERNUMBERANALYSTSESTIMATESINCREASED1WEEKTOCURRENT,self::VALUE_CURRENTSALESCONSENSUSCHANGE_CURRENTQUARTERNUMBERANALYSTSESTIMATESDECREASED1WEEKTOCURRENT,self::VALUE_CURRENTSALESCONSENSUSCHANGE_CURRENTQUARTER1MONTHPERCENTAGECHANGEINCONSENSUSMEAN,self::VALUE_CURRENTSALESCONSENSUSCHANGE_CURRENTQUARTERNUMBERANALYSTSESTIMATESINCREASED1MONTHTOCURRENT,self::VALUE_CURRENTSALESCONSENSUSCHANGE_CURRENTQUARTERNUMBERANALYSTSESTIMATESDECREASED1MONTHTOCURRENT,self::VALUE_CURRENTSALESCONSENSUSCHANGE_CURRENTQUARTER3MONTHPERCENTAGECHANGEINCONSENSUSMEAN,self::VALUE_CURRENTSALESCONSENSUSCHANGE_CURRENTQUARTERNUMBERANALYSTSESTIMATESINCREASED3MONTHSTOCURRENT,self::VALUE_CURRENTSALESCONSENSUSCHANGE_CURRENTQUARTERNUMBERANALYSTSESTIMATESDECREASED3MONTHSTOCURRENT,self::VALUE_CURRENTSALESCONSENSUSCHANGE_CURRENTQUARTERMEDIANESTIMATE,self::VALUE_CURRENTSALESCONSENSUSCHANGE_CURRENTQUARTERDATEOFLATESTESTIMATE,self::VALUE_CURRENTSALESCONSENSUSCHANGE_TWOQUARTERSOUTPERIODDATE,self::VALUE_CURRENTSALESCONSENSUSCHANGE_TWOQUARTERSOUTMEANESTIMATE,self::VALUE_CURRENTSALESCONSENSUSCHANGE_TWOQUARTERSOUT1WEEKPERCENTAGECHANGEINCONSENSUSMEAN,self::VALUE_CURRENTSALESCONSENSUSCHANGE_TWOQUARTERSOUTNUMBERANALYSTSESTIMATESINCREASED1WEEKTOCURRENT,self::VALUE_CURRENTSALESCONSENSUSCHANGE_TWOQUARTERSOUTNUMBERANALYSTSESTIMATESDECREASED1WEEKTOCURRENT,self::VALUE_CURRENTSALESCONSENSUSCHANGE_TWOQUARTERSOUT1MONTHPERCENTAGECHANGEINCONSENSUSMEAN,self::VALUE_CURRENTSALESCONSENSUSCHANGE_TWOQUARTERSOUTNUMBERANALYSTSESTIMATESINCREASED1MONTHTOCURRENT,self::VALUE_CURRENTSALESCONSENSUSCHANGE_TWOQUARTERSOUTNUMBERANALYSTSESTIMATESDECREASED1MONTHTOCURRENT,self::VALUE_CURRENTSALESCONSENSUSCHANGE_TWOQUARTERSOUT3MONTHPERCENTAGECHANGEINCONSENSUSMEAN,self::VALUE_CURRENTSALESCONSENSUSCHANGE_TWOQUARTERSOUTNUMBERANALYSTSESTIMATESINCREASED3MONTHSTOCURRENT,self::VALUE_CURRENTSALESCONSENSUSCHANGE_TWOQUARTERSOUTNUMBERANALYSTSESTIMATESDECREASED3MONTHSTOCURRENT,self::VALUE_CURRENTSALESCONSENSUSCHANGE_TWOQUARTERSOUTMEDIANESTIMATE,self::VALUE_CURRENTSALESCONSENSUSCHANGE_TWOQUARTERSOUTDATEOFLATESTESTIMATE,self::VALUE_CURRENTSALESCONSENSUSCHANGE_THREEQUARTERSOUTPERIODDATE,self::VALUE_CURRENTSALESCONSENSUSCHANGE_THREEQUARTERSOUTMEANESTIMATE,self::VALUE_CURRENTSALESCONSENSUSCHANGE_THREEQUARTERSOUT1WEEKPERCENTAGECHANGEINCONSENSUSMEAN,self::VALUE_CURRENTSALESCONSENSUSCHANGE_THREEQUARTERSOUTNUMBERANALYSTSESTIMATESINCREASED1WEEKTOCURRENT,self::VALUE_CURRENTSALESCONSENSUSCHANGE_THREEQUARTERSOUTNUMBERANALYSTSESTIMATESDECREASED1WEEKTOCURRENT,self::VALUE_CURRENTSALESCONSENSUSCHANGE_THREEQUARTERSOUT1MONTHPERCENTAGECHANGEINCONSENSUSMEAN,self::VALUE_CURRENTSALESCONSENSUSCHANGE_THREEQUARTERSOUTNUMBERANALYSTSESTIMATESINCREASED1MONTHTOCURRENT,self::VALUE_CURRENTSALESCONSENSUSCHANGE_THREEQUARTERSOUTNUMBERANALYSTSESTIMATESDECREASED1MONTHTOCURRENT,self::VALUE_CURRENTSALESCONSENSUSCHANGE_THREEQUARTERSOUT3MONTHPERCENTAGECHANGEINCONSENSUSMEAN,self::VALUE_CURRENTSALESCONSENSUSCHANGE_THREEQUARTERSOUTNUMBERANALYSTSESTIMATESINCREASED3MONTHSTOCURRENT,self::VALUE_CURRENTSALESCONSENSUSCHANGE_THREEQUARTERSOUTNUMBERANALYSTSESTIMATESDECREASED3MONTHSTOCURRENT,self::VALUE_CURRENTSALESCONSENSUSCHANGE_THREEQUARTERSOUTMEDIANESTIMATE,self::VALUE_CURRENTSALESCONSENSUSCHANGE_THREEQUARTERSOUTDATEOFLATESTESTIMATE,self::VALUE_CURRENTSALESCONSENSUSCHANGE_FOURQUARTERSOUTPERIODDATE,self::VALUE_CURRENTSALESCONSENSUSCHANGE_FOURQUARTERSOUTMEANESTIMATE,self::VALUE_CURRENTSALESCONSENSUSCHANGE_FOURQUARTERSOUT1WEEKPERCENTAGECHANGEINCONSENSUSMEAN,self::VALUE_CURRENTSALESCONSENSUSCHANGE_FOURQUARTERSOUTNUMBERANALYSTSESTIMATESINCREASED1WEEKTOCURRENT,self::VALUE_CURRENTSALESCONSENSUSCHANGE_FOURQUARTERSOUTNUMBERANALYSTSESTIMATESDECREASED1WEEKTOCURRENT,self::VALUE_CURRENTSALESCONSENSUSCHANGE_FOURQUARTERSOUT1MONTHPERCENTAGECHANGEINCONSENSUSMEAN,self::VALUE_CURRENTSALESCONSENSUSCHANGE_FOURQUARTERSOUTNUMBERANALYSTSESTIMATESINCREASED1MONTHTOCURRENT,self::VALUE_CURRENTSALESCONSENSUSCHANGE_FOURQUARTERSOUTNUMBERANALYSTSESTIMATESDECREASED1MONTHTOCURRENT,self::VALUE_CURRENTSALESCONSENSUSCHANGE_FOURQUARTERSOUT3MONTHPERCENTAGECHANGEINCONSENSUSMEAN,self::VALUE_CURRENTSALESCONSENSUSCHANGE_FOURQUARTERSOUTNUMBERANALYSTSESTIMATESINCREASED3MONTHSTOCURRENT,self::VALUE_CURRENTSALESCONSENSUSCHANGE_FOURQUARTERSOUTNUMBERANALYSTSESTIMATESDECREASED3MONTHSTOCURRENT,self::VALUE_CURRENTSALESCONSENSUSCHANGE_FOURQUARTERSOUTMEDIANESTIMATE,self::VALUE_CURRENTSALESCONSENSUSCHANGE_FOURQUARTERSOUTDATEOFLATESTESTIMATE,self::VALUE_CURRENTSALESCONSENSUSCHANGE_FIVEQUARTERSOUTPERIODDATE,self::VALUE_CURRENTSALESCONSENSUSCHANGE_FIVEQUARTERSOUTMEANESTIMATE,self::VALUE_CURRENTSALESCONSENSUSCHANGE_FIVEQUARTERSOUT1WEEKPERCENTAGECHANGEINCONSENSUSMEAN,self::VALUE_CURRENTSALESCONSENSUSCHANGE_FIVEQUARTERSOUTNUMBERANALYSTSESTIMATESINCREASED1WEEKTOCURRENT,self::VALUE_CURRENTSALESCONSENSUSCHANGE_FIVEQUARTERSOUTNUMBERANALYSTSESTIMATESDECREASED1WEEKTOCURRENT,self::VALUE_CURRENTSALESCONSENSUSCHANGE_FIVEQUARTERSOUT1MONTHPERCENTAGECHANGEINCONSENSUSMEAN,self::VALUE_CURRENTSALESCONSENSUSCHANGE_FIVEQUARTERSOUTNUMBERANALYSTSESTIMATESINCREASED1MONTHTOCURRENT,self::VALUE_CURRENTSALESCONSENSUSCHANGE_FIVEQUARTERSOUTNUMBERANALYSTSESTIMATESDECREASED1MONTHTOCURRENT,self::VALUE_CURRENTSALESCONSENSUSCHANGE_FIVEQUARTERSOUT3MONTHPERCENTAGECHANGEINCONSENSUSMEAN,self::VALUE_CURRENTSALESCONSENSUSCHANGE_FIVEQUARTERSOUTNUMBERANALYSTSESTIMATESINCREASED3MONTHSTOCURRENT,self::VALUE_CURRENTSALESCONSENSUSCHANGE_FIVEQUARTERSOUTNUMBERANALYSTSESTIMATESDECREASED3MONTHSTOCURRENT,self::VALUE_CURRENTSALESCONSENSUSCHANGE_FIVEQUARTERSOUTMEDIANESTIMATE,self::VALUE_CURRENTSALESCONSENSUSCHANGE_FIVEQUARTERSOUTDATEOFLATESTESTIMATE,self::VALUE_CURRENTSALESCONSENSUSCHANGE_SIXQUARTERSOUTPERIODDATE,self::VALUE_CURRENTSALESCONSENSUSCHANGE_SIXQUARTERSOUTMEANESTIMATE,self::VALUE_CURRENTSALESCONSENSUSCHANGE_SIXQUARTERSOUT1WEEKPERCENTAGECHANGEINCONSENSUSMEAN,self::VALUE_CURRENTSALESCONSENSUSCHANGE_SIXQUARTERSOUTNUMBERANALYSTSESTIMATESINCREASED1WEEKTOCURRENT,self::VALUE_CURRENTSALESCONSENSUSCHANGE_SIXQUARTERSOUTNUMBERANALYSTSESTIMATESDECREASED1WEEKTOCURRENT,self::VALUE_CURRENTSALESCONSENSUSCHANGE_SIXQUARTERSOUT1MONTHPERCENTAGECHANGEINCONSENSUSMEAN,self::VALUE_CURRENTSALESCONSENSUSCHANGE_SIXQUARTERSOUTNUMBERANALYSTSESTIMATESINCREASED1MONTHTOCURRENT,self::VALUE_CURRENTSALESCONSENSUSCHANGE_SIXQUARTERSOUTNUMBERANALYSTSESTIMATESDECREASED1MONTHTOCURRENT,self::VALUE_CURRENTSALESCONSENSUSCHANGE_SIXQUARTERSOUT3MONTHPERCENTAGECHANGEINCONSENSUSMEAN,self::VALUE_CURRENTSALESCONSENSUSCHANGE_SIXQUARTERSOUTNUMBERANALYSTSESTIMATESINCREASED3MONTHSTOCURRENT,self::VALUE_CURRENTSALESCONSENSUSCHANGE_SIXQUARTERSOUTNUMBERANALYSTSESTIMATESDECREASED3MONTHSTOCURRENT,self::VALUE_CURRENTSALESCONSENSUSCHANGE_SIXQUARTERSOUTMEDIANESTIMATE,self::VALUE_CURRENTSALESCONSENSUSCHANGE_SIXQUARTERSOUTDATEOFLATESTESTIMATE,self::VALUE_CURRENTSALESCONSENSUSCHANGE_SEVENQUARTERSOUTPERIODDATE,self::VALUE_CURRENTSALESCONSENSUSCHANGE_SEVENQUARTERSOUTMEANESTIMATE,self::VALUE_CURRENTSALESCONSENSUSCHANGE_SEVENQUARTERSOUT1WEEKPERCENTAGECHANGEINCONSENSUSMEAN,self::VALUE_CURRENTSALESCONSENSUSCHANGE_SEVENQUARTERSOUTNUMBERANALYSTSESTIMATESINCREASED1WEEKTOCURRENT,self::VALUE_CURRENTSALESCONSENSUSCHANGE_SEVENQUARTERSOUTNUMBERANALYSTSESTIMATESDECREASED1WEEKTOCURRENT,self::VALUE_CURRENTSALESCONSENSUSCHANGE_SEVENQUARTERSOUT1MONTHPERCENTAGECHANGEINCONSENSUSMEAN,self::VALUE_CURRENTSALESCONSENSUSCHANGE_SEVENQUARTERSOUTNUMBERANALYSTSESTIMATESINCREASED1MONTHTOCURRENT,self::VALUE_CURRENTSALESCONSENSUSCHANGE_SEVENQUARTERSOUTNUMBERANALYSTSESTIMATESDECREASED1MONTHTOCURRENT,self::VALUE_CURRENTSALESCONSENSUSCHANGE_SEVENQUARTERSOUT3MONTHPERCENTAGECHANGEINCONSENSUSMEAN,self::VALUE_CURRENTSALESCONSENSUSCHANGE_SEVENQUARTERSOUTNUMBERANALYSTSESTIMATESINCREASED3MONTHSTOCURRENT,self::VALUE_CURRENTSALESCONSENSUSCHANGE_SEVENQUARTERSOUTNUMBERANALYSTSESTIMATESDECREASED3MONTHSTOCURRENT,self::VALUE_CURRENTSALESCONSENSUSCHANGE_SEVENQUARTERSOUTMEDIANESTIMATE,self::VALUE_CURRENTSALESCONSENSUSCHANGE_SEVENQUARTERSOUTDATEOFLATESTESTIMATE,self::VALUE_CURRENTSALESCONSENSUSCHANGE_EIGHTQUARTERSOUTPERIODDATE,self::VALUE_CURRENTSALESCONSENSUSCHANGE_EIGHTQUARTERSOUTMEANESTIMATE,self::VALUE_CURRENTSALESCONSENSUSCHANGE_EIGHTQUARTERSOUT1WEEKPERCENTAGECHANGEINCONSENSUSMEAN,self::VALUE_CURRENTSALESCONSENSUSCHANGE_EIGHTQUARTERSOUTNUMBERANALYSTSESTIMATESINCREASED1WEEKTOCURRENT,self::VALUE_CURRENTSALESCONSENSUSCHANGE_EIGHTQUARTERSOUTNUMBERANALYSTSESTIMATESDECREASED1WEEKTOCURRENT,self::VALUE_CURRENTSALESCONSENSUSCHANGE_EIGHTQUARTERSOUT1MONTHPERCENTAGECHANGEINCONSENSUSMEAN,self::VALUE_CURRENTSALESCONSENSUSCHANGE_EIGHTQUARTERSOUTNUMBERANALYSTSESTIMATESINCREASED1MONTHTOCURRENT,self::VALUE_CURRENTSALESCONSENSUSCHANGE_EIGHTQUARTERSOUTNUMBERANALYSTSESTIMATESDECREASED1MONTHTOCURRENT,self::VALUE_CURRENTSALESCONSENSUSCHANGE_EIGHTQUARTERSOUT3MONTHPERCENTAGECHANGEINCONSENSUSMEAN,self::VALUE_CURRENTSALESCONSENSUSCHANGE_EIGHTQUARTERSOUTNUMBERANALYSTSESTIMATESINCREASED3MONTHSTOCURRENT,self::VALUE_CURRENTSALESCONSENSUSCHANGE_EIGHTQUARTERSOUTNUMBERANALYSTSESTIMATESDECREASED3MONTHSTOCURRENT,self::VALUE_CURRENTSALESCONSENSUSCHANGE_EIGHTQUARTERSOUTMEDIANESTIMATE,self::VALUE_CURRENTSALESCONSENSUSCHANGE_EIGHTQUARTERSOUTDATEOFLATESTESTIMATE,self::VALUE_SUMMARYCURRENTSTATISTICS_CURRENCYIDENTIFICATIONCODE,self::VALUE_SUMMARYCURRENTSTATISTICS_DATEOFESTIMATEDATA,self::VALUE_SUMMARYCURRENTSTATISTICS_MOSTRECENTFISCALYEARDATEOFFISCALYEAREND,self::VALUE_SUMMARYCURRENTSTATISTICS_MOSTRECENTFISCALYEARMEANOFESTIMATES,self::VALUE_SUMMARYCURRENTSTATISTICS_MOSTRECENTFISCALYEARSTANDARDDEVIATION,self::VALUE_SUMMARYCURRENTSTATISTICS_MOSTRECENTFISCALYEARNUMBEROFESTIMATES,self::VALUE_SUMMARYCURRENTSTATISTICS_CURRENTFISCALYEARDATEOFFISCALYEAREND,self::VALUE_SUMMARYCURRENTSTATISTICS_CURRENTFISCALYEARMEANOFESTIMATES,self::VALUE_SUMMARYCURRENTSTATISTICS_CURRENTFISCALYEARSTANDARDDEVIATION,self::VALUE_SUMMARYCURRENTSTATISTICS_CURRENTFISCALYEARNUMBEROFESTIMATES,self::VALUE_SUMMARYCURRENTSTATISTICS_NEXTFISCALYEARDATEOFFISCALYEAREND,self::VALUE_SUMMARYCURRENTSTATISTICS_NEXTFISCALYEARMEANOFESTIMATES,self::VALUE_SUMMARYCURRENTSTATISTICS_NEXTFISCALYEARSTANDARDDEVIATION,self::VALUE_SUMMARYCURRENTSTATISTICS_NEXTFISCALYEARNUMBEROFESTIMATES,self::VALUE_SUMMARYCURRENTSTATISTICS_MOSTRECENTQUARTERDATEOFQUARTEREND,self::VALUE_SUMMARYCURRENTSTATISTICS_MOSTRECENTQUARTERMEANOFESTIMATES,self::VALUE_SUMMARYCURRENTSTATISTICS_MOSTRECENTQUARTERSTANDARDDEVIATION,self::VALUE_SUMMARYCURRENTSTATISTICS_MOSTRECENTQUARTERNUMBEROFESTIMATES,self::VALUE_SUMMARYCURRENTSTATISTICS_CURRENTQUARTERDATEOFQUARTEREND,self::VALUE_SUMMARYCURRENTSTATISTICS_CURRENTQUARTERMEANOFESTIMATES,self::VALUE_SUMMARYCURRENTSTATISTICS_CURRENTQUARTERSTANDARDDEVIATION,self::VALUE_SUMMARYCURRENTSTATISTICS_CURRENTQUARTERNUMBEROFESTIMATES,self::VALUE_SUMMARYCURRENTSTATISTICS_TWOQUARTERSOUTDATEOFQUARTEREND,self::VALUE_SUMMARYCURRENTSTATISTICS_TWOQUARTERSOUTMEANOFESTIMATES,self::VALUE_SUMMARYCURRENTSTATISTICS_TWOQUARTERSOUTSTANDARDDEVIATION,self::VALUE_SUMMARYCURRENTSTATISTICS_TWOQUARTERSOUTNUMBEROFESTIMATES,self::VALUE_SUMMARYCURRENTSTATISTICS_THREEQUARTERSOUTDATEOFQUARTEREND,self::VALUE_SUMMARYCURRENTSTATISTICS_THREEQUARTERSOUTMEANOFESTIMATES,self::VALUE_SUMMARYCURRENTSTATISTICS_THREEQUARTERSOUTSTANDARDDEVIATION,self::VALUE_SUMMARYCURRENTSTATISTICS_THREEQUARTERSOUTNUMBEROFESTIMATES,self::VALUE_SUMMARYCURRENTSTATISTICS_FOURQUARTERSOUTDATEOFQUARTEREND,self::VALUE_SUMMARYCURRENTSTATISTICS_FOURQUARTERSOUTMEANOFESTIMATES,self::VALUE_SUMMARYCURRENTSTATISTICS_FOURQUARTERSOUTSTANDARDDEVIATION,self::VALUE_SUMMARYCURRENTSTATISTICS_FOURQUARTERSOUTNUMBEROFESTIMATES,self::VALUE_SUMMARYCURRENTSTATISTICS_DATEOFMOSTRECENTCHANGE,self::VALUE_SUMMARYCURRENTSTATISTICS_MOSTRECENTQUARTERREPORTFLAG,self::VALUE_SUMMARYCURRENTSTATISTICS_MOSTRECENTFISCALYEARREPORTFLAG,self::VALUE_SUMMARYCURRENTSTATISTICSCHANGE_CURRENCYIDENTIFICATIONCODE,self::VALUE_SUMMARYCURRENTSTATISTICSCHANGE_DATEOFESTIMATEDATA,self::VALUE_SUMMARYCURRENTSTATISTICSCHANGE_MOSTRECENTFISCALYEARDATEOFFISCALYEAREND,self::VALUE_SUMMARYCURRENTSTATISTICSCHANGE_MOSTRECENTFISCALYEARMEANOFESTIMATES,self::VALUE_SUMMARYCURRENTSTATISTICSCHANGE_MOSTRECENTFISCALYEAR1WEEKPERCENTAGECHANGEINMEAN,self::VALUE_SUMMARYCURRENTSTATISTICSCHANGE_MOSTRECENTFISCALYEARNUMBERANALYSTSESTIMATESINCREASED1WEEKCURRENT,self::VALUE_SUMMARYCURRENTSTATISTICSCHANGE_MOSTRECENTFISCALYEARNUMBERANALYSTSESTIMATESDECREASED1WEEKCURRENT,self::VALUE_SUMMARYCURRENTSTATISTICSCHANGE_MOSTRECENTFISCALYEAR1MONTHPERCENTAGECHANGEINMEAN,self::VALUE_SUMMARYCURRENTSTATISTICSCHANGE_MOSTRECENTFISCALYEARNUMBERANALYSTSESTIMATESINCREASED1MONTHCURRENT,self::VALUE_SUMMARYCURRENTSTATISTICSCHANGE_MOSTRECENTFISCALYEARNUMBERANALYSTSESTIMATESDECREASED1MONTHCURRENT,self::VALUE_SUMMARYCURRENTSTATISTICSCHANGE_MOSTRECENTFISCALYEAR3MONTHPERCENTAGECHANGEINMEAN,self::VALUE_SUMMARYCURRENTSTATISTICSCHANGE_MOSTRECENTFISCALYEARNUMBERANALYSTSESTIMATESINCREASED3MONTHSCURRENT,self::VALUE_SUMMARYCURRENTSTATISTICSCHANGE_MOSTRECENTFISCALYEARNUMBERANALYSTSESTIMATESDECREASED3MONTHSCURRENT,self::VALUE_SUMMARYCURRENTSTATISTICSCHANGE_CURRENTFISCALYEARDATEOFFISCALYEAREND,self::VALUE_SUMMARYCURRENTSTATISTICSCHANGE_CURRENTFISCALYEARMEANOFESTIMATES,self::VALUE_SUMMARYCURRENTSTATISTICSCHANGE_CURRENTFISCALYEAR1WEEKPERCENTAGECHANGEINMEAN,self::VALUE_SUMMARYCURRENTSTATISTICSCHANGE_CURRENTFISCALYEARNUMBERANALYSTSESTIMATESINCREASED1WEEKCURRENT,self::VALUE_SUMMARYCURRENTSTATISTICSCHANGE_CURRENTFISCALYEARNUMBERANALYSTSESTIMATESDECREASED1WEEKCURRENT,self::VALUE_SUMMARYCURRENTSTATISTICSCHANGE_CURRENTFISCALYEAR1MONTHPERCENTAGECHANGEINMEAN,self::VALUE_SUMMARYCURRENTSTATISTICSCHANGE_CURRENTFISCALYEARNUMBERANALYSTSESTIMATESINCREASED1MONTHCURRENT,self::VALUE_SUMMARYCURRENTSTATISTICSCHANGE_CURRENTFISCALYEARNUMBERANALYSTSESTIMATESDECREASED1MONTHCURRENT,self::VALUE_SUMMARYCURRENTSTATISTICSCHANGE_CURRENTFISCALYEAR3MONTHPERCENTAGECHANGEINMEAN,self::VALUE_SUMMARYCURRENTSTATISTICSCHANGE_CURRENTFISCALYEARNUMBERANALYSTSESTIMATESINCREASED3MONTHSCURRENT,self::VALUE_SUMMARYCURRENTSTATISTICSCHANGE_CURRENTFISCALYEARNUMBERANALYSTSESTIMATESDECREASED3MONTHSCURRENT,self::VALUE_SUMMARYCURRENTSTATISTICSCHANGE_NEXTFISCALYEARDATEOFFISCALYEAREND,self::VALUE_SUMMARYCURRENTSTATISTICSCHANGE_NEXTFISCALYEARMEANOFESTIMATES,self::VALUE_SUMMARYCURRENTSTATISTICSCHANGE_NEXTFISCALYEAR1WEEKPERCENTAGECHANGEINMEAN,self::VALUE_SUMMARYCURRENTSTATISTICSCHANGE_NEXTFISCALYEARNUMBERANALYSTSESTIMATESINCREASED1WEEKCURRENT,self::VALUE_SUMMARYCURRENTSTATISTICSCHANGE_NEXTFISCALYEARNUMBERANALYSTSESTIMATESDECREASED1WEEKCURRENT,self::VALUE_SUMMARYCURRENTSTATISTICSCHANGE_NEXTFISCALYEAR1MONTHPERCENTAGECHANGEINMEAN,self::VALUE_SUMMARYCURRENTSTATISTICSCHANGE_NEXTFISCALYEARNUMBERANALYSTSESTIMATESINCREASED1MONTHCURRENT,self::VALUE_SUMMARYCURRENTSTATISTICSCHANGE_NEXTFISCALYEARNUMBERANALYSTSESTIMATESDECREASED1MONTHCURRENT,self::VALUE_SUMMARYCURRENTSTATISTICSCHANGE_NEXTFISCALYEAR3MONTHPERCENTAGECHANGEINMEAN,self::VALUE_SUMMARYCURRENTSTATISTICSCHANGE_NEXTFISCALYEARNUMBERANALYSTSESTIMATESINCREASED3MONTHSCURRENT,self::VALUE_SUMMARYCURRENTSTATISTICSCHANGE_NEXTFISCALYEARNUMBERANALYSTSESTIMATESDECREASED3MONTHSCURRENT,self::VALUE_SUMMARYCURRENTSTATISTICSCHANGE_MOSTRECENTQUARTERDATEOFFISCALQUARTEREND,self::VALUE_SUMMARYCURRENTSTATISTICSCHANGE_MOSTRECENTQUARTERMEANOFESTIMATES,self::VALUE_SUMMARYCURRENTSTATISTICSCHANGE_MOSTRECENTQUARTER1WEEKPERCENTAGECHANGEINMEAN,self::VALUE_SUMMARYCURRENTSTATISTICSCHANGE_MOSTRECENTQUARTERNUMBERANALYSTSESTIMATESINCREASED1WEEKCURRENT,self::VALUE_SUMMARYCURRENTSTATISTICSCHANGE_MOSTRECENTQUARTERNUMBERANALYSTSESTIMATESDECREASED1WEEKCURRENT,self::VALUE_SUMMARYCURRENTSTATISTICSCHANGE_MOSTRECENTQUARTER1MONTHPERCENTAGECHANGEINMEAN,self::VALUE_SUMMARYCURRENTSTATISTICSCHANGE_MOSTRECENTQUARTERNUMBERANALYSTSESTIMATESINCREASED1MONTHCURRENT,self::VALUE_SUMMARYCURRENTSTATISTICSCHANGE_MOSTRECENTQUARTERNUMBERANALYSTSESTIMATESDECREASED1MONTHCURRENT,self::VALUE_SUMMARYCURRENTSTATISTICSCHANGE_MOSTRECENTQUARTER3MONTHPERCENTAGECHANGEINMEAN,self::VALUE_SUMMARYCURRENTSTATISTICSCHANGE_MOSTRECENTQUARTERNUMBERANALYSTSESTIMATESINCREASED3MONTHSCURRENT,self::VALUE_SUMMARYCURRENTSTATISTICSCHANGE_MOSTRECENTQUARTERNUMBERANALYSTSESTIMATESDECREASED3MONTHSCURRENT,self::VALUE_SUMMARYCURRENTSTATISTICSCHANGE_CURRENTQUARTERDATEOFFISCALQUARTEREND,self::VALUE_SUMMARYCURRENTSTATISTICSCHANGE_CURRENTQUARTERMEANOFESTIMATES,self::VALUE_SUMMARYCURRENTSTATISTICSCHANGE_CURRENTQUARTER1WEEKPERCENTAGECHANGEINMEAN,self::VALUE_SUMMARYCURRENTSTATISTICSCHANGE_CURRENTQUARTERNUMBERANALYSTSESTIMATESINCREASED1WEEKCURRENT,self::VALUE_SUMMARYCURRENTSTATISTICSCHANGE_CURRENTQUARTERNUMBERANALYSTSESTIMATESDECREASED1WEEKCURRENT,self::VALUE_SUMMARYCURRENTSTATISTICSCHANGE_CURRENTQUARTER1MONTHPERCENTAGECHANGEINMEAN,self::VALUE_SUMMARYCURRENTSTATISTICSCHANGE_CURRENTQUARTERNUMBERANALYSTSESTIMATESINCREASED1MONTHCURRENT,self::VALUE_SUMMARYCURRENTSTATISTICSCHANGE_CURRENTQUARTERNUMBERANALYSTSESTIMATESDECREASED1MONTHCURRENT,self::VALUE_SUMMARYCURRENTSTATISTICSCHANGE_CURRENTQUARTER3MONTHPERCENTAGECHANGEINMEAN,self::VALUE_SUMMARYCURRENTSTATISTICSCHANGE_CURRENTQUARTERNUMBERANALYSTSESTIMATESINCREASED3MONTHSCURRENT,self::VALUE_SUMMARYCURRENTSTATISTICSCHANGE_CURRENTQUARTERNUMBERANALYSTSESTIMATESDECREASED3MONTHSCURRENT,self::VALUE_SUMMARYCURRENTSTATISTICSCHANGE_TWOQUARTERSOUTDATEOFFISCALQUARTEREND,self::VALUE_SUMMARYCURRENTSTATISTICSCHANGE_TWOQUARTERSOUTMEANOFESTIMATES,self::VALUE_SUMMARYCURRENTSTATISTICSCHANGE_TWOQUARTERSOUT1WEEKPERCENTAGECHANGEINMEAN,self::VALUE_SUMMARYCURRENTSTATISTICSCHANGE_TWOQUARTERSOUTNUMBERANALYSTSESTIMATESINCREASED1WEEKCURRENT,self::VALUE_SUMMARYCURRENTSTATISTICSCHANGE_TWOQUARTERSOUTNUMBERANALYSTSESTIMATESDECREASED1WEEKCURRENT,self::VALUE_SUMMARYCURRENTSTATISTICSCHANGE_TWOQUARTERSOUT1MONTHPERCENTAGECHANGEINMEAN,self::VALUE_SUMMARYCURRENTSTATISTICSCHANGE_TWOQUARTERSOUTNUMBERANALYSTSESTIMATESINCREASED1MONTHCURRENT,self::VALUE_SUMMARYCURRENTSTATISTICSCHANGE_TWOQUARTERSOUTNUMBERANALYSTSESTIMATESDECREASED1MONTHCURRENT,self::VALUE_SUMMARYCURRENTSTATISTICSCHANGE_TWOQUARTERSOUT3MONTHPERCENTAGECHANGEINMEAN,self::VALUE_SUMMARYCURRENTSTATISTICSCHANGE_TWOQUARTERSOUTNUMBERANALYSTSESTIMATESINCREASED3MONTHSCURRENT,self::VALUE_SUMMARYCURRENTSTATISTICSCHANGE_TWOQUARTERSOUTNUMBERANALYSTSESTIMATESDECREASED3MONTHSCURRENT,self::VALUE_SUMMARYCURRENTSTATISTICSCHANGE_THREEQUARTERSOUTDATEOFFISCALQUARTEREND,self::VALUE_SUMMARYCURRENTSTATISTICSCHANGE_THREEQUARTERSOUTMEANOFESTIMATES,self::VALUE_SUMMARYCURRENTSTATISTICSCHANGE_THREEQUARTERSOUT1WEEKPERCENTAGECHANGEINMEAN,self::VALUE_SUMMARYCURRENTSTATISTICSCHANGE_THREEQUARTERSOUTNUMBERANALYSTSESTIMATESINCREASED1WEEKCURRENT,self::VALUE_SUMMARYCURRENTSTATISTICSCHANGE_THREEQUARTERSOUTNUMBERANALYSTSESTIMATESDECREASED1WEEKCURRENT,self::VALUE_SUMMARYCURRENTSTATISTICSCHANGE_THREEQUARTERSOUT1MONTHPERCENTAGECHANGEINMEAN,self::VALUE_SUMMARYCURRENTSTATISTICSCHANGE_THREEQUARTERSOUTNUMBERANALYSTSESTIMATESINCREASED1MONTHCURRENT,self::VALUE_SUMMARYCURRENTSTATISTICSCHANGE_THREEQUARTERSOUTNUMBERANALYSTSESTIMATESDECREASED1MONTHCURRENT,self::VALUE_SUMMARYCURRENTSTATISTICSCHANGE_THREEQUARTERSOUT3MONTHPERCENTAGECHANGEINMEAN,self::VALUE_SUMMARYCURRENTSTATISTICSCHANGE_THREEQUARTERSOUTNUMBERANALYSTSESTIMATESINCREASED3MONTHSCURRENT,self::VALUE_SUMMARYCURRENTSTATISTICSCHANGE_THREEQUARTERSOUTNUMBERANALYSTSESTIMATESDECREASED3MONTHSCURRENT,self::VALUE_SUMMARYCURRENTSTATISTICSCHANGE_FOURQUARTERSOUTDATEOFFISCALQUARTEREND,self::VALUE_SUMMARYCURRENTSTATISTICSCHANGE_FOURQUARTERSOUTMEANOFESTIMATES,self::VALUE_SUMMARYCURRENTSTATISTICSCHANGE_FOURQUARTERSOUT1WEEKPERCENTAGECHANGEINMEAN,self::VALUE_SUMMARYCURRENTSTATISTICSCHANGE_FOURQUARTERSOUTNUMBERANALYSTSESTIMATESINCREASED1WEEKCURRENT,self::VALUE_SUMMARYCURRENTSTATISTICSCHANGE_FOURQUARTERSOUTNUMBERANALYSTSESTIMATESDECREASED1WEEKCURRENT,self::VALUE_SUMMARYCURRENTSTATISTICSCHANGE_FOURQUARTERSOUT1MONTHPERCENTAGECHANGEINMEAN,self::VALUE_SUMMARYCURRENTSTATISTICSCHANGE_FOURQUARTERSOUTNUMBERANALYSTSESTIMATESINCREASED1MONTHCURRENT,self::VALUE_SUMMARYCURRENTSTATISTICSCHANGE_FOURQUARTERSOUTNUMBERANALYSTSESTIMATESDECREASED1MONTHCURRENT,self::VALUE_SUMMARYCURRENTSTATISTICSCHANGE_FOURQUARTERSOUT3MONTHPERCENTAGECHANGEINMEAN,self::VALUE_SUMMARYCURRENTSTATISTICSCHANGE_FOURQUARTERSOUTNUMBERANALYSTSESTIMATESINCREASED3MONTHSCURRENT,self::VALUE_SUMMARYCURRENTSTATISTICSCHANGE_FOURQUARTERSOUTNUMBERANALYSTSESTIMATESDECREASED3MONTHSCURRENT,self::VALUE_SUMMARYCURRENTSTATISTICSCHANGE_DATEOFMOSTRECENTCHANGE,self::VALUE_SUMMARYCURRENTSTATISTICSCHANGE_MOSTRECENTQUARTERREPORTFLAG,self::VALUE_SUMMARYCURRENTSTATISTICSCHANGE_MOSTRECENTFISCALYEARREPORTFLAG,self::VALUE_SUMMARYCURRENTSTATISTICSCHANGE_MOSTRECENTFISCALYEARMEDIANESTIMATE,self::VALUE_SUMMARYCURRENTSTATISTICSCHANGE_CURRENTFISCALYEARMEDIANESTIMATE,self::VALUE_SUMMARYCURRENTSTATISTICSCHANGE_NEXTFISCALYEARMEDIANESTIMATE,self::VALUE_SUMMARYCURRENTSTATISTICSCHANGE_MOSTRECENTQUARTERMEDIANESTIMATE,self::VALUE_SUMMARYCURRENTSTATISTICSCHANGE_CURRENTQUARTERMEDIANESTIMATE,self::VALUE_SUMMARYCURRENTSTATISTICSCHANGE_TWOQUARTERSOUTMEDIANESTIMATE,self::VALUE_SUMMARYCURRENTSTATISTICSCHANGE_THREEQUARTERSOUTMEDIANESTIMATE,self::VALUE_SUMMARYCURRENTSTATISTICSCHANGE_FOURQUARTERSOUTMEDIANESTIMATE));
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