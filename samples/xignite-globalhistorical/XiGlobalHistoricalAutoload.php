<?php
/**
 * AutoloadFile 
 * @date 08/07/2012
 */
/**
 * AutoloadFile
 * @date 08/07/2012
 */
require_once dirname(__FILE__) . '/XiGlobalHistoricalWsdlClass.php';
require_once dirname(__FILE__) . '/Abstract/Object/XiGlobalHistoricalTypeAbstractGlobalHistoricalObject.php';
require_once dirname(__FILE__) . '/Common/XiGlobalHistoricalTypeCommon.php';
require_once dirname(__FILE__) . '/Global/Quote/XiGlobalHistoricalTypeGlobalHistoricalQuote.php';
require_once dirname(__FILE__) . '/Array/History/XiGlobalHistoricalTypeArrayOfDividendHistory.php';
require_once dirname(__FILE__) . '/Get/Response/XiGlobalHistoricalTypeGetAllCashDividendsByExchangeResponse.php';
require_once dirname(__FILE__) . '/Get/Response/XiGlobalHistoricalTypeGetSplitHistoryResponse.php';
require_once dirname(__FILE__) . '/Dividend/History/XiGlobalHistoricalTypeDividendHistory.php';
require_once dirname(__FILE__) . '/Get/Exchange/XiGlobalHistoricalTypeGetAllCashDividendsByExchange.php';
require_once dirname(__FILE__) . '/Get/Total/XiGlobalHistoricalTypeGetCashDividendTotal.php';
require_once dirname(__FILE__) . '/Dividend/Total/XiGlobalHistoricalTypeDividendTotal.php';
require_once dirname(__FILE__) . '/Get/Response/XiGlobalHistoricalTypeGetCashDividendTotalResponse.php';
require_once dirname(__FILE__) . '/Get/History/XiGlobalHistoricalTypeGetSplitHistory.php';
require_once dirname(__FILE__) . '/Dividend/XiGlobalHistoricalTypeDividend.php';
require_once dirname(__FILE__) . '/Array/Dividend/XiGlobalHistoricalTypeArrayOfDividend.php';
require_once dirname(__FILE__) . '/Get/Response/XiGlobalHistoricalTypeGetSplitRatioResponse.php';
require_once dirname(__FILE__) . '/Array/History/XiGlobalHistoricalTypeArrayOfSplitHistory.php';
require_once dirname(__FILE__) . '/Get/Response/XiGlobalHistoricalTypeGetAllSplitsByExchangeResponse.php';
require_once dirname(__FILE__) . '/Get/Exchange/XiGlobalHistoricalTypeGetAllSplitsByExchange.php';
require_once dirname(__FILE__) . '/Get/Response/XiGlobalHistoricalTypeGetTopLosersByExchangeResponse.php';
require_once dirname(__FILE__) . '/Split/History/XiGlobalHistoricalTypeSplitHistory.php';
require_once dirname(__FILE__) . '/Array/Split/XiGlobalHistoricalTypeArrayOfSplit.php';
require_once dirname(__FILE__) . '/Get/History/XiGlobalHistoricalTypeGetCashDividendHistory.php';
require_once dirname(__FILE__) . '/Get/Ratio/XiGlobalHistoricalTypeGetSplitRatio.php';
require_once dirname(__FILE__) . '/Split/XiGlobalHistoricalTypeSplit.php';
require_once dirname(__FILE__) . '/Split/Ratio/XiGlobalHistoricalTypeSplitRatio.php';
require_once dirname(__FILE__) . '/Get/Response/XiGlobalHistoricalTypeGetAllCorporateActionsByExchangeResponse.php';
require_once dirname(__FILE__) . '/End/Sources/XiGlobalHistoricalTypeEndOfDayPriceSources.php';
require_once dirname(__FILE__) . '/End/Timings/XiGlobalHistoricalTypeEndOfDayPriceTimings.php';
require_once dirname(__FILE__) . '/End/Used/XiGlobalHistoricalTypeEndOfDayPriceMethodsUsed.php';
require_once dirname(__FILE__) . '/End/Methods/XiGlobalHistoricalTypeEndOfDayPriceMethods.php';
require_once dirname(__FILE__) . '/Period/Types/XiGlobalHistoricalTypePeriodTypes.php';
require_once dirname(__FILE__) . '/Exchange/Types/XiGlobalHistoricalTypeExchangeTypes.php';
require_once dirname(__FILE__) . '/Corporate/Types/XiGlobalHistoricalTypeCorporateActionTypes.php';
require_once dirname(__FILE__) . '/Dividend/Frequencies/XiGlobalHistoricalTypeDividendPaymentFrequencies.php';
require_once dirname(__FILE__) . '/Dividend/Types/XiGlobalHistoricalTypeDividendTypes.php';
require_once dirname(__FILE__) . '/Global/Types/XiGlobalHistoricalTypeGlobalTopTypes.php';
require_once dirname(__FILE__) . '/Currencies/XiGlobalHistoricalTypeCurrencies.php';
require_once dirname(__FILE__) . '/Outcome/Types/XiGlobalHistoricalTypeOutcomeTypes.php';
require_once dirname(__FILE__) . '/Corporate/History/XiGlobalHistoricalTypeCorporateActionHistory.php';
require_once dirname(__FILE__) . '/Array/History/XiGlobalHistoricalTypeArrayOfCorporateActionHistory.php';
require_once dirname(__FILE__) . '/Get/Exchange/XiGlobalHistoricalTypeGetTopLosersByExchange.php';
require_once dirname(__FILE__) . '/Get/Exchange/XiGlobalHistoricalTypeGetAllCorporateActionsByExchange.php';
require_once dirname(__FILE__) . '/Array/Action/XiGlobalHistoricalTypeArrayOfCorporateAction.php';
require_once dirname(__FILE__) . '/Corporate/Action/XiGlobalHistoricalTypeCorporateAction.php';
require_once dirname(__FILE__) . '/Identifier/Types/XiGlobalHistoricalTypeIdentifierTypes.php';
require_once dirname(__FILE__) . '/Get/Response/XiGlobalHistoricalTypeGetCorporateActionHistoryResponse.php';
require_once dirname(__FILE__) . '/Get/History/XiGlobalHistoricalTypeGetCorporateActionHistory.php';
require_once dirname(__FILE__) . '/Get/Response/XiGlobalHistoricalTypeGetCashDividendHistoryResponse.php';
require_once dirname(__FILE__) . '/Global/Top/XiGlobalHistoricalTypeGlobalTop.php';
require_once dirname(__FILE__) . '/Get/Quotes/XiGlobalHistoricalTypeGetGlobalHistoricalQuotes.php';
require_once dirname(__FILE__) . '/Array/Quote/XiGlobalHistoricalTypeArrayOfEndOfDayQuote.php';
require_once dirname(__FILE__) . '/Get/Response/XiGlobalHistoricalTypeGetEndOfDayQuotesResponse.php';
require_once dirname(__FILE__) . '/Get/Quotes/XiGlobalHistoricalTypeGetEndOfDayQuotes.php';
require_once dirname(__FILE__) . '/Get/Response/XiGlobalHistoricalTypeGetGlobalHistoricalQuotesResponse.php';
require_once dirname(__FILE__) . '/Get/Of/XiGlobalHistoricalTypeGetGlobalHistoricalQuotesAsOf.php';
require_once dirname(__FILE__) . '/Get/Response/XiGlobalHistoricalTypeGetGlobalHistoricalQuotesRangeResponse.php';
require_once dirname(__FILE__) . '/Get/Range/XiGlobalHistoricalTypeGetGlobalHistoricalQuotesRange.php';
require_once dirname(__FILE__) . '/Global/Quotes/XiGlobalHistoricalTypeGlobalHistoricalQuotes.php';
require_once dirname(__FILE__) . '/Get/Response/XiGlobalHistoricalTypeGetGlobalHistoricalQuotesAsOfResponse.php';
require_once dirname(__FILE__) . '/End/Quote/XiGlobalHistoricalTypeEndOfDayQuote.php';
require_once dirname(__FILE__) . '/Get/Response/XiGlobalHistoricalTypeGetEndOfDayQuoteResponse.php';
require_once dirname(__FILE__) . '/Get/Prices/XiGlobalHistoricalTypeGetGlobalLastClosingPrices.php';
require_once dirname(__FILE__) . '/Header/XiGlobalHistoricalTypeHeader.php';
require_once dirname(__FILE__) . '/Security/XiGlobalHistoricalTypeSecurity.php';
require_once dirname(__FILE__) . '/Get/Response/XiGlobalHistoricalTypeGetGlobalLastClosingPriceResponse.php';
require_once dirname(__FILE__) . '/Get/Response/XiGlobalHistoricalTypeGetGlobalLastClosingPricesResponse.php';
require_once dirname(__FILE__) . '/Array/Quote/XiGlobalHistoricalTypeArrayOfGlobalHistoricalQuote.php';
require_once dirname(__FILE__) . '/Get/Quote/XiGlobalHistoricalTypeGetEndOfDayQuote.php';
require_once dirname(__FILE__) . '/Get/Response/XiGlobalHistoricalTypeGetGlobalHistoricalQuoteResponse.php';
require_once dirname(__FILE__) . '/Get/Quote/XiGlobalHistoricalTypeGetGlobalHistoricalQuote.php';
require_once dirname(__FILE__) . '/Get/Extended/XiGlobalHistoricalTypeGetGlobalHistoricalQuotesRangeExtended.php';
require_once dirname(__FILE__) . '/Get/Response/XiGlobalHistoricalTypeGetGlobalHistoricalQuotesRangeExtendedResponse.php';
require_once dirname(__FILE__) . '/Get/Extended/XiGlobalHistoricalTypeGetGlobalHistoricalMonthlyQuotesRangeExtended.php';
require_once dirname(__FILE__) . '/Get/Response/XiGlobalHistoricalTypeGetGlobalHistoricalMonthlyQuotesRangeResponse.php';
require_once dirname(__FILE__) . '/Get/Range/XiGlobalHistoricalTypeGetGlobalHistoricalMonthlyQuotesRange.php';
require_once dirname(__FILE__) . '/Global/Statistics/XiGlobalHistoricalTypeGlobalHistoricalStatistics.php';
require_once dirname(__FILE__) . '/Get/Response/XiGlobalHistoricalTypeGetGlobalHistoricalMonthlyQuotesRangeExtendedResponse.php';
require_once dirname(__FILE__) . '/Get/Exchange/XiGlobalHistoricalTypeGetTopMoversByExchange.php';
require_once dirname(__FILE__) . '/Get/Exchange/XiGlobalHistoricalTypeGetTopGainersByExchange.php';
require_once dirname(__FILE__) . '/Get/Price/XiGlobalHistoricalTypeGetGlobalLastClosingPrice.php';
require_once dirname(__FILE__) . '/Array/Top/XiGlobalHistoricalTypeArrayOfGlobalTop.php';
require_once dirname(__FILE__) . '/Get/Response/XiGlobalHistoricalTypeGetTopMoversByExchangeResponse.php';
require_once dirname(__FILE__) . '/Get/Response/XiGlobalHistoricalTypeGetGlobalHistoricalStatisticsResponse.php';
require_once dirname(__FILE__) . '/Get/Statistics/XiGlobalHistoricalTypeGetGlobalHistoricalStatistics.php';
require_once dirname(__FILE__) . '/Get/Range/XiGlobalHistoricalTypeGetGlobalHistoricalWeeklyQuotesRange.php';
require_once dirname(__FILE__) . '/Global/Extended/XiGlobalHistoricalTypeGlobalHistoricalQuoteExtended.php';
require_once dirname(__FILE__) . '/Array/Extended/XiGlobalHistoricalTypeArrayOfGlobalHistoricalQuoteExtended.php';
require_once dirname(__FILE__) . '/Global/Extended/XiGlobalHistoricalTypeGlobalHistoricalQuotesExtended.php';
require_once dirname(__FILE__) . '/Get/Response/XiGlobalHistoricalTypeGetGlobalHistoricalWeeklyQuotesRangeResponse.php';
require_once dirname(__FILE__) . '/Get/Extended/XiGlobalHistoricalTypeGetGlobalHistoricalWeeklyQuotesRangeExtended.php';
require_once dirname(__FILE__) . '/Get/Response/XiGlobalHistoricalTypeGetGlobalHistoricalQuarterlyQuotesRangeResponse.php';
require_once dirname(__FILE__) . '/Get/Range/XiGlobalHistoricalTypeGetGlobalHistoricalQuarterlyQuotesRange.php';
require_once dirname(__FILE__) . '/Get/Response/XiGlobalHistoricalTypeGetGlobalHistoricalWeeklyQuotesRangeExtendedResponse.php';
require_once dirname(__FILE__) . '/Get/Response/XiGlobalHistoricalTypeGetTopGainersByExchangeResponse.php';
require_once dirname(__FILE__) . '/Get/XiGlobalHistoricalServiceGet.php';
require_once dirname(__FILE__) . '/XiGlobalHistoricalClassMap.php';
?>