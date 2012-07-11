<?php
/**
 * AutoloadFile 
 * @date 08/07/2012
 */
/**
 * AutoloadFile
 * @date 08/07/2012
 */
require_once dirname(__FILE__) . '/XiRealTimeWsdlClass.php';
require_once dirname(__FILE__) . '/Common/XiRealTimeTypeCommon.php';
require_once dirname(__FILE__) . '/Stock/Chart/XiRealTimeTypeStockChart.php';
require_once dirname(__FILE__) . '/Search/Response/XiRealTimeTypeSearchByMarketCapResponse.php';
require_once dirname(__FILE__) . '/Array/Result/XiRealTimeTypeArrayOfSearchResult.php';
require_once dirname(__FILE__) . '/Search/Result/XiRealTimeTypeSearchResult.php';
require_once dirname(__FILE__) . '/Search/Cap/XiRealTimeTypeSearchByMarketCap.php';
require_once dirname(__FILE__) . '/Order/XiRealTimeTypeOrder.php';
require_once dirname(__FILE__) . '/Get/Movers/XiRealTimeTypeGetRealTopMovers.php';
require_once dirname(__FILE__) . '/Get/Response/XiRealTimeTypeGetRealTopGainersResponse.php';
require_once dirname(__FILE__) . '/Get/Gainers/XiRealTimeTypeGetRealTopGainers.php';
require_once dirname(__FILE__) . '/Top/XiRealTimeTypeTop.php';
require_once dirname(__FILE__) . '/Get/Response/XiRealTimeTypeGetRealTopMoversResponse.php';
require_once dirname(__FILE__) . '/Array/Order/XiRealTimeTypeArrayOfOrder.php';
require_once dirname(__FILE__) . '/Get/Response/XiRealTimeTypeGetBookDetailsResponse.php';
require_once dirname(__FILE__) . '/Get/Response/XiRealTimeTypeGetBookResponse.php';
require_once dirname(__FILE__) . '/Get/Book/XiRealTimeTypeGetBook.php';
require_once dirname(__FILE__) . '/Boolean/Result/XiRealTimeTypeBooleanResult.php';
require_once dirname(__FILE__) . '/Is/Response/XiRealTimeTypeIsTradedResponse.php';
require_once dirname(__FILE__) . '/Book/XiRealTimeTypeBook.php';
require_once dirname(__FILE__) . '/Array/Summary/XiRealTimeTypeArrayOfOrderSummary.php';
require_once dirname(__FILE__) . '/Get/Losers/XiRealTimeTypeGetRealTopLosers.php';
require_once dirname(__FILE__) . '/Get/Details/XiRealTimeTypeGetBookDetails.php';
require_once dirname(__FILE__) . '/Order/Summary/XiRealTimeTypeOrderSummary.php';
require_once dirname(__FILE__) . '/Detailed/Book/XiRealTimeTypeDetailedBook.php';
require_once dirname(__FILE__) . '/Get/Top/XiRealTimeTypeGetRealTop.php';
require_once dirname(__FILE__) . '/Predefined/Model/XiRealTimeTypePredefinedLightModel.php';
require_once dirname(__FILE__) . '/Horz/Align/XiRealTimeTypeHorzAlign.php';
require_once dirname(__FILE__) . '/Tick/Period/XiRealTimeTypeTickPeriod.php';
require_once dirname(__FILE__) . '/Predefined/Projection/XiRealTimeTypePredefinedProjection.php';
require_once dirname(__FILE__) . '/Identifier/Types/XiRealTimeTypeIdentifierTypes.php';
require_once dirname(__FILE__) . '/Order/Types/XiRealTimeTypeOrderTypes.php';
require_once dirname(__FILE__) . '/Top/Types/XiRealTimeTypeTopTypes.php';
require_once dirname(__FILE__) . '/Historical/Periods/XiRealTimeTypeHistoricalPeriods.php';
require_once dirname(__FILE__) . '/Direction/Types/XiRealTimeTypeDirectionTypes.php';
require_once dirname(__FILE__) . '/Image/Type/XiRealTimeTypeImageFrameType.php';
require_once dirname(__FILE__) . '/Line/Pattern/XiRealTimeTypeLinePattern.php';
require_once dirname(__FILE__) . '/Get/Time/XiRealTimeTypeGetExchangeTime.php';
require_once dirname(__FILE__) . '/Array/Top/XiRealTimeTypeArrayOfTop.php';
require_once dirname(__FILE__) . '/Get/Response/XiRealTimeTypeGetRealTopResponse.php';
require_once dirname(__FILE__) . '/Is/Traded/XiRealTimeTypeIsTraded.php';
require_once dirname(__FILE__) . '/Get/Response/XiRealTimeTypeGetExchangeTimeResponse.php';
require_once dirname(__FILE__) . '/Exchange/Time/XiRealTimeTypeExchangeTime.php';
require_once dirname(__FILE__) . '/Outcome/Types/XiRealTimeTypeOutcomeTypes.php';
require_once dirname(__FILE__) . '/Stock/Styles/XiRealTimeTypeStockChartStyles.php';
require_once dirname(__FILE__) . '/ECNT/Ypes/XiRealTimeTypeECNTypes.php';
require_once dirname(__FILE__) . '/Get/Response/XiRealTimeTypeGetRealTopLosersResponse.php';
require_once dirname(__FILE__) . '/Get/Ticks/XiRealTimeTypeGetHistoricalTicks.php';
require_once dirname(__FILE__) . '/Get/Design/XiRealTimeTypeGetChartDesign.php';
require_once dirname(__FILE__) . '/Get/Response/XiRealTimeTypeGetRealChartCustomResponse.php';
require_once dirname(__FILE__) . '/Get/Custom/XiRealTimeTypeGetRealChartCustom.php';
require_once dirname(__FILE__) . '/Get/Response/XiRealTimeTypeGetRealChartResponse.php';
require_once dirname(__FILE__) . '/Get/Response/XiRealTimeTypeGetChartDesignResponse.php';
require_once dirname(__FILE__) . '/Get/Quote/XiRealTimeTypeGetRealQuote.php';
require_once dirname(__FILE__) . '/Get/Identifier/XiRealTimeTypeGetRealQuoteByIdentifier.php';
require_once dirname(__FILE__) . '/Real/Quote/XiRealTimeTypeRealTimeQuote.php';
require_once dirname(__FILE__) . '/Get/Response/XiRealTimeTypeGetRealQuoteResponse.php';
require_once dirname(__FILE__) . '/Get/Chart/XiRealTimeTypeGetRealChart.php';
require_once dirname(__FILE__) . '/Security/XiRealTimeTypeSecurity.php';
require_once dirname(__FILE__) . '/Tick/XiRealTimeTypeTick.php';
require_once dirname(__FILE__) . '/Array/Tick/XiRealTimeTypeArrayOfTick.php';
require_once dirname(__FILE__) . '/Ticks/XiRealTimeTypeTicks.php';
require_once dirname(__FILE__) . '/Get/Response/XiRealTimeTypeGetHistoricalTicksAsOfDateResponse.php';
require_once dirname(__FILE__) . '/Header/XiRealTimeTypeHeader.php';
require_once dirname(__FILE__) . '/Get/Preset/XiRealTimeTypeGetRealChartPreset.php';
require_once dirname(__FILE__) . '/Chart/Design/XiRealTimeTypeChartDesign.php';
require_once dirname(__FILE__) . '/Intraday/Chart/XiRealTimeTypeIntradayChart.php';
require_once dirname(__FILE__) . '/Get/Response/XiRealTimeTypeGetRealChartPresetResponse.php';
require_once dirname(__FILE__) . '/Get/Response/XiRealTimeTypeGetRealQuoteByIdentifierResponse.php';
require_once dirname(__FILE__) . '/Get/Quote/XiRealTimeTypeGetExtendedRealQuote.php';
require_once dirname(__FILE__) . '/Get/Ticks/XiRealTimeTypeGetTicks.php';
require_once dirname(__FILE__) . '/Single/Tick/XiRealTimeTypeSingleTick.php';
require_once dirname(__FILE__) . '/Get/Response/XiRealTimeTypeGetTickResponse.php';
require_once dirname(__FILE__) . '/Get/Tick/XiRealTimeTypeGetTick.php';
require_once dirname(__FILE__) . '/Get/Response/XiRealTimeTypeGetTicksResponse.php';
require_once dirname(__FILE__) . '/Get/Collections/XiRealTimeTypeGetTickCollections.php';
require_once dirname(__FILE__) . '/Get/Date/XiRealTimeTypeGetHistoricalTicksAsOfDate.php';
require_once dirname(__FILE__) . '/Array/Ticks/XiRealTimeTypeArrayOfTicks.php';
require_once dirname(__FILE__) . '/Get/Response/XiRealTimeTypeGetTickCollectionsResponse.php';
require_once dirname(__FILE__) . '/Ticker/Tape/XiRealTimeTypeTickerTape.php';
require_once dirname(__FILE__) . '/Get/Response/XiRealTimeTypeGetRealQuotesTickerResponse.php';
require_once dirname(__FILE__) . '/Get/Response/XiRealTimeTypeGetRealQuotesResponse.php';
require_once dirname(__FILE__) . '/Get/Quotes/XiRealTimeTypeGetRealQuotes.php';
require_once dirname(__FILE__) . '/Extended/Quote/XiRealTimeTypeExtendedRealTimeQuote.php';
require_once dirname(__FILE__) . '/Get/Response/XiRealTimeTypeGetExtendedRealQuoteResponse.php';
require_once dirname(__FILE__) . '/Array/Quote/XiRealTimeTypeArrayOfRealTimeQuote.php';
require_once dirname(__FILE__) . '/Get/Quotes/XiRealTimeTypeGetExtendedRealQuotes.php';
require_once dirname(__FILE__) . '/Get/Ticker/XiRealTimeTypeGetRealQuotesTicker.php';
require_once dirname(__FILE__) . '/Array/Quote/XiRealTimeTypeArrayOfExtendedRealTimeQuote.php';
require_once dirname(__FILE__) . '/Get/Response/XiRealTimeTypeGetExtendedRealQuotesResponse.php';
require_once dirname(__FILE__) . '/Get/Response/XiRealTimeTypeGetHistoricalTicksResponse.php';
require_once dirname(__FILE__) . '/Get/XiRealTimeServiceGet.php';
require_once dirname(__FILE__) . '/Is/XiRealTimeServiceIs.php';
require_once dirname(__FILE__) . '/Search/XiRealTimeServiceSearch.php';
require_once dirname(__FILE__) . '/XiRealTimeClassMap.php';
?>