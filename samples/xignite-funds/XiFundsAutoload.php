<?php
/**
 * AutoloadFile 
 * @date 08/07/2012
 */
/**
 * AutoloadFile
 * @date 08/07/2012
 */
require_once dirname(__FILE__) . '/XiFundsWsdlClass.php';
require_once dirname(__FILE__) . '/Common/XiFundsTypeCommon.php';
require_once dirname(__FILE__) . '/Stock/Chart/XiFundsTypeStockChart.php';
require_once dirname(__FILE__) . '/Get/Response/XiFundsTypeGetLastNAVAdjustedResponse.php';
require_once dirname(__FILE__) . '/Get/Adjusted/XiFundsTypeGetLastNAVAdjusted.php';
require_once dirname(__FILE__) . '/New/Fund/XiFundsTypeNewFund.php';
require_once dirname(__FILE__) . '/Get/Adjusted/XiFundsTypeGetLastNAVsAdjusted.php';
require_once dirname(__FILE__) . '/Get/Response/XiFundsTypeGetLastNAVsAdjustedResponse.php';
require_once dirname(__FILE__) . '/Get/Adjusted/XiFundsTypeGetLatestNAVsAdjusted.php';
require_once dirname(__FILE__) . '/Get/Adjusted/XiFundsTypeGetLatestNAVAdjusted.php';
require_once dirname(__FILE__) . '/Array/Fund/XiFundsTypeArrayOfNewFund.php';
require_once dirname(__FILE__) . '/Get/Response/XiFundsTypeGetLatestNAVAdjustedResponse.php';
require_once dirname(__FILE__) . '/Get/Symbols/XiFundsTypeGetNewSymbols.php';
require_once dirname(__FILE__) . '/Get/History/XiFundsTypeGetDividendHistory.php';
require_once dirname(__FILE__) . '/Get/Response/XiFundsTypeGetChartDesignResponse.php';
require_once dirname(__FILE__) . '/Get/Design/XiFundsTypeGetChartDesign.php';
require_once dirname(__FILE__) . '/Get/Response/XiFundsTypeGetDividendHistoryResponse.php';
require_once dirname(__FILE__) . '/Dividend/History/XiFundsTypeDividendHistory.php';
require_once dirname(__FILE__) . '/Get/Response/XiFundsTypeGetLatestNAVsAdjustedResponse.php';
require_once dirname(__FILE__) . '/Dividend/XiFundsTypeDividend.php';
require_once dirname(__FILE__) . '/Array/Dividend/XiFundsTypeArrayOfDividend.php';
require_once dirname(__FILE__) . '/Get/Response/XiFundsTypeGetNewSymbolsResponse.php';
require_once dirname(__FILE__) . '/Get/Response/XiFundsTypeGetHistoricalNAVAdjustedResponse.php';
require_once dirname(__FILE__) . '/Line/Pattern/XiFundsTypeLinePattern.php';
require_once dirname(__FILE__) . '/Stock/Styles/XiFundsTypeStockChartStyles.php';
require_once dirname(__FILE__) . '/Top/Types/XiFundsTypeTopTypes.php';
require_once dirname(__FILE__) . '/Period/Types/XiFundsTypePeriodTypes.php';
require_once dirname(__FILE__) . '/Image/Type/XiFundsTypeImageFrameType.php';
require_once dirname(__FILE__) . '/Predefined/Projection/XiFundsTypePredefinedProjection.php';
require_once dirname(__FILE__) . '/Predefined/Model/XiFundsTypePredefinedLightModel.php';
require_once dirname(__FILE__) . '/Horz/Align/XiFundsTypeHorzAlign.php';
require_once dirname(__FILE__) . '/Tick/Period/XiFundsTypeTickPeriod.php';
require_once dirname(__FILE__) . '/Identifier/Types/XiFundsTypeIdentifierTypes.php';
require_once dirname(__FILE__) . '/Mutual/Countries/XiFundsTypeMutualFundCountries.php';
require_once dirname(__FILE__) . '/Get/Response/XiFundsTypeGetHistoricalNAVsAdjustedResponse.php';
require_once dirname(__FILE__) . '/Get/Adjusted/XiFundsTypeGetHistoricalNAVsAdjusted.php';
require_once dirname(__FILE__) . '/Draw/Response/XiFundsTypeDrawFundChartPresetResponse.php';
require_once dirname(__FILE__) . '/Get/Adjusted/XiFundsTypeGetHistoricalNAVsAsOfAdjusted.php';
require_once dirname(__FILE__) . '/Get/Response/XiFundsTypeGetHistoricalNAVsAsOfAdjustedResponse.php';
require_once dirname(__FILE__) . '/Outcome/Types/XiFundsTypeOutcomeTypes.php';
require_once dirname(__FILE__) . '/Get/Response/XiFundsTypeGetHistoricalNAVsRangeAdjustedResponse.php';
require_once dirname(__FILE__) . '/Get/Adjusted/XiFundsTypeGetHistoricalNAVsRangeAdjusted.php';
require_once dirname(__FILE__) . '/Get/Adjusted/XiFundsTypeGetHistoricalNAVAdjusted.php';
require_once dirname(__FILE__) . '/Draw/Response/XiFundsTypeDrawFundChartResponse.php';
require_once dirname(__FILE__) . '/Get/Vs/XiFundsTypeGetLastNAVs.php';
require_once dirname(__FILE__) . '/Get/Response/XiFundsTypeGetLastNAVResponse.php';
require_once dirname(__FILE__) . '/Get/NAV/XiFundsTypeGetLastNAV.php';
require_once dirname(__FILE__) . '/Get/Response/XiFundsTypeGetLastNAVsResponse.php';
require_once dirname(__FILE__) . '/Array/NAV/XiFundsTypeArrayOfFundNAV.php';
require_once dirname(__FILE__) . '/Get/NAV/XiFundsTypeGetHistoricalNAV.php';
require_once dirname(__FILE__) . '/Get/Response/XiFundsTypeGetLatestNAVsResponse.php';
require_once dirname(__FILE__) . '/Get/Vs/XiFundsTypeGetLatestNAVs.php';
require_once dirname(__FILE__) . '/Security/XiFundsTypeSecurity.php';
require_once dirname(__FILE__) . '/Fund/NAV/XiFundsTypeFundNAV.php';
require_once dirname(__FILE__) . '/Array/String/XiFundsTypeArrayOfString.php';
require_once dirname(__FILE__) . '/Symbol/List/XiFundsTypeSymbolList.php';
require_once dirname(__FILE__) . '/Get/Response/XiFundsTypeGetSymbolsResponse.php';
require_once dirname(__FILE__) . '/Header/XiFundsTypeHeader.php';
require_once dirname(__FILE__) . '/Get/Country/XiFundsTypeGetSymbolsByCountry.php';
require_once dirname(__FILE__) . '/Get/Response/XiFundsTypeGetLatestNAVResponse.php';
require_once dirname(__FILE__) . '/Get/NAV/XiFundsTypeGetLatestNAV.php';
require_once dirname(__FILE__) . '/Get/Response/XiFundsTypeGetSymbolsByCountryResponse.php';
require_once dirname(__FILE__) . '/Get/Response/XiFundsTypeGetHistoricalNAVResponse.php';
require_once dirname(__FILE__) . '/Get/Vs/XiFundsTypeGetHistoricalNAVs.php';
require_once dirname(__FILE__) . '/Draw/Custom/XiFundsTypeDrawFundChartCustom.php';
require_once dirname(__FILE__) . '/Get/Response/XiFundsTypeGetTopLosersResponse.php';
require_once dirname(__FILE__) . '/Get/Losers/XiFundsTypeGetTopLosers.php';
require_once dirname(__FILE__) . '/Chart/Design/XiFundsTypeChartDesign.php';
require_once dirname(__FILE__) . '/Draw/Response/XiFundsTypeDrawFundChartCustomResponse.php';
require_once dirname(__FILE__) . '/Get/Symbols/XiFundsTypeGetSymbols.php';
require_once dirname(__FILE__) . '/Draw/Chart/XiFundsTypeDrawFundChart.php';
require_once dirname(__FILE__) . '/Fund/Chart/XiFundsTypeFundChart.php';
require_once dirname(__FILE__) . '/Top/XiFundsTypeTop.php';
require_once dirname(__FILE__) . '/Array/Top/XiFundsTypeArrayOfTop.php';
require_once dirname(__FILE__) . '/Get/Response/XiFundsTypeGetHistoricalNAVsAsOfResponse.php';
require_once dirname(__FILE__) . '/Get/Of/XiFundsTypeGetHistoricalNAVsAsOf.php';
require_once dirname(__FILE__) . '/Get/Response/XiFundsTypeGetHistoricalNAVsResponse.php';
require_once dirname(__FILE__) . '/Fund/Vs/XiFundsTypeFundNAVs.php';
require_once dirname(__FILE__) . '/Get/Range/XiFundsTypeGetHistoricalNAVsRange.php';
require_once dirname(__FILE__) . '/Get/Response/XiFundsTypeGetTopGainersResponse.php';
require_once dirname(__FILE__) . '/Get/Gainers/XiFundsTypeGetTopGainers.php';
require_once dirname(__FILE__) . '/Get/Response/XiFundsTypeGetHistoricalNAVsRangeResponse.php';
require_once dirname(__FILE__) . '/Draw/Preset/XiFundsTypeDrawFundChartPreset.php';
require_once dirname(__FILE__) . '/Get/XiFundsServiceGet.php';
require_once dirname(__FILE__) . '/Draw/XiFundsServiceDraw.php';
require_once dirname(__FILE__) . '/XiFundsClassMap.php';
?>