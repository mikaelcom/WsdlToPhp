<?php
/**
 * AutoloadFile 
 * @date 08/07/2012
 */
/**
 * AutoloadFile
 * @date 08/07/2012
 */
require_once dirname(__FILE__) . '/XiSecurityWsdlClass.php';
require_once dirname(__FILE__) . '/Common/XiSecurityTypeCommon.php';
require_once dirname(__FILE__) . '/Get/Response/XiSecurityTypeGetLargestDeclinesResponse.php';
require_once dirname(__FILE__) . '/Stock/Variations/XiSecurityTypeStockGrowthVariations.php';
require_once dirname(__FILE__) . '/Get/Declines/XiSecurityTypeGetLargestDeclines.php';
require_once dirname(__FILE__) . '/Get/Response/XiSecurityTypeGetCUSIPFundResponse.php';
require_once dirname(__FILE__) . '/Array/Variation/XiSecurityTypeArrayOfVariation.php';
require_once dirname(__FILE__) . '/Variation/XiSecurityTypeVariation.php';
require_once dirname(__FILE__) . '/Get/Capitalization/XiSecurityTypeGetHistoricalMonthlyMarketCapitalization.php';
require_once dirname(__FILE__) . '/Get/Response/XiSecurityTypeGetLargestCapDeclinesResponse.php';
require_once dirname(__FILE__) . '/Get/Declines/XiSecurityTypeGetLargestCapDeclines.php';
require_once dirname(__FILE__) . '/Get/Fund/XiSecurityTypeGetCUSIPFund.php';
require_once dirname(__FILE__) . '/Get/Response/XiSecurityTypeGetCUSIPStockResponse.php';
require_once dirname(__FILE__) . '/Lookup/Stock/XiSecurityTypeLookupStock.php';
require_once dirname(__FILE__) . '/Lookup/Response/XiSecurityTypeLookupByExchangesResponse.php';
require_once dirname(__FILE__) . '/Lookup/Exchanges/XiSecurityTypeLookupByExchanges.php';
require_once dirname(__FILE__) . '/Lookup/Response/XiSecurityTypeLookupByExchangeResponse.php';
require_once dirname(__FILE__) . '/Lookup/Response/XiSecurityTypeLookupStockResponse.php';
require_once dirname(__FILE__) . '/Lookup/Fund/XiSecurityTypeLookupFund.php';
require_once dirname(__FILE__) . '/Get/Response/XiSecurityTypeGetHistoricalMonthlyMarketCapitalizationResponse.php';
require_once dirname(__FILE__) . '/Get/Stock/XiSecurityTypeGetCUSIPStock.php';
require_once dirname(__FILE__) . '/Lookup/Response/XiSecurityTypeLookupFundResponse.php';
require_once dirname(__FILE__) . '/Cusip/XiSecurityTypeCusip.php';
require_once dirname(__FILE__) . '/Historical/Capitalization/XiSecurityTypeHistoricalMarketCapitalization.php';
require_once dirname(__FILE__) . '/Payment/Types/XiSecurityTypePaymentFrequencyTypes.php';
require_once dirname(__FILE__) . '/Bond/Types/XiSecurityTypeBondTypes.php';
require_once dirname(__FILE__) . '/Outcome/Types/XiSecurityTypeOutcomeTypes.php';
require_once dirname(__FILE__) . '/Symbol/XiSecurityTypeSymbol.php';
require_once dirname(__FILE__) . '/Identifier/Types/XiSecurityTypeIdentifierTypes.php';
require_once dirname(__FILE__) . '/Lookup/Type/XiSecurityTypeLookupType.php';
require_once dirname(__FILE__) . '/Symbology/Types/XiSecurityTypeSymbologyTypes.php';
require_once dirname(__FILE__) . '/Backup/Types/XiSecurityTypeBackupOptionTypes.php';
require_once dirname(__FILE__) . '/Variation/Types/XiSecurityTypeVariationTypes.php';
require_once dirname(__FILE__) . '/Map/Response/XiSecurityTypeMapSymbolResponse.php';
require_once dirname(__FILE__) . '/Map/Symbol/XiSecurityTypeMapSymbol.php';
require_once dirname(__FILE__) . '/Get/Capitalization/XiSecurityTypeGetHistoricalMarketCapitalization.php';
require_once dirname(__FILE__) . '/Capitalization/XiSecurityTypeCapitalization.php';
require_once dirname(__FILE__) . '/Array/Capitalization/XiSecurityTypeArrayOfCapitalization.php';
require_once dirname(__FILE__) . '/Get/Response/XiSecurityTypeGetHistoricalMarketCapitalizationResponse.php';
require_once dirname(__FILE__) . '/Get/Custom/XiSecurityTypeGetHistoricalMarketCapitalizationCustom.php';
require_once dirname(__FILE__) . '/Get/Response/XiSecurityTypeGetMarketCapitalizationResponse.php';
require_once dirname(__FILE__) . '/Get/Capitalization/XiSecurityTypeGetMarketCapitalization.php';
require_once dirname(__FILE__) . '/Get/Response/XiSecurityTypeGetHistoricalMarketCapitalizationCustomResponse.php';
require_once dirname(__FILE__) . '/Lookup/Exchange/XiSecurityTypeLookupByExchange.php';
require_once dirname(__FILE__) . '/Array/Item/XiSecurityTypeArrayOfLookupItem.php';
require_once dirname(__FILE__) . '/Map/Details/XiSecurityTypeMapSecurityDetails.php';
require_once dirname(__FILE__) . '/Map/Response/XiSecurityTypeMapSecuritiesResponse.php';
require_once dirname(__FILE__) . '/Map/Securities/XiSecurityTypeMapSecurities.php';
require_once dirname(__FILE__) . '/Array/Security/XiSecurityTypeArrayOfSecurity.php';
require_once dirname(__FILE__) . '/Map/Response/XiSecurityTypeMapSecurityDetailsResponse.php';
require_once dirname(__FILE__) . '/Array/Record/XiSecurityTypeArrayOfRecord.php';
require_once dirname(__FILE__) . '/Dividend/History/XiSecurityTypeDividendHistory.php';
require_once dirname(__FILE__) . '/Get/Response/XiSecurityTypeGetDividendHistoryResponse.php';
require_once dirname(__FILE__) . '/Get/History/XiSecurityTypeGetDividendHistory.php';
require_once dirname(__FILE__) . '/List/Response/XiSecurityTypeListSecuritiesResponse.php';
require_once dirname(__FILE__) . '/List/Securities/XiSecurityTypeListSecurities.php';
require_once dirname(__FILE__) . '/Map/Security/XiSecurityTypeMapSecurity.php';
require_once dirname(__FILE__) . '/Header/XiSecurityTypeHeader.php';
require_once dirname(__FILE__) . '/Bond/Lookup/XiSecurityTypeBondLookup.php';
require_once dirname(__FILE__) . '/Lookup/Response/XiSecurityTypeLookupBondResponse.php';
require_once dirname(__FILE__) . '/Map/Response/XiSecurityTypeMapSecurityResponse.php';
require_once dirname(__FILE__) . '/Security/XiSecurityTypeSecurity.php';
require_once dirname(__FILE__) . '/Record/XiSecurityTypeRecord.php';
require_once dirname(__FILE__) . '/Map/Response/XiSecurityTypeMapSecurityDetailResponse.php';
require_once dirname(__FILE__) . '/Map/Detail/XiSecurityTypeMapSecurityDetail.php';
require_once dirname(__FILE__) . '/Array/Dividend/XiSecurityTypeArrayOfDividend.php';
require_once dirname(__FILE__) . '/Dividend/XiSecurityTypeDividend.php';
require_once dirname(__FILE__) . '/Get/Ratio/XiSecurityTypeGetSplitRatio.php';
require_once dirname(__FILE__) . '/Split/XiSecurityTypeSplit.php';
require_once dirname(__FILE__) . '/Array/Split/XiSecurityTypeArrayOfSplit.php';
require_once dirname(__FILE__) . '/Split/History/XiSecurityTypeSplitHistory.php';
require_once dirname(__FILE__) . '/Get/Response/XiSecurityTypeGetSplitRatioResponse.php';
require_once dirname(__FILE__) . '/Stock/Split/XiSecurityTypeStockSplit.php';
require_once dirname(__FILE__) . '/Lookup/Bond/XiSecurityTypeLookupBond.php';
require_once dirname(__FILE__) . '/Lookup/Response/XiSecurityTypeLookupResponse.php';
require_once dirname(__FILE__) . '/Lookup/XiSecurityTypeLookup.php';
require_once dirname(__FILE__) . '/Get/Response/XiSecurityTypeGetSplitHistoryResponse.php';
require_once dirname(__FILE__) . '/Get/History/XiSecurityTypeGetSplitHistory.php';
require_once dirname(__FILE__) . '/Array/History/XiSecurityTypeArrayOfDividendHistory.php';
require_once dirname(__FILE__) . '/Get/Response/XiSecurityTypeGetDividendHistoriesResponse.php';
require_once dirname(__FILE__) . '/Get/Histories/XiSecurityTypeGetDividendHistories.php';
require_once dirname(__FILE__) . '/Get/History/XiSecurityTypeGetExtendedDividendHistory.php';
require_once dirname(__FILE__) . '/Get/Response/XiSecurityTypeGetExtendedDividendHistoryResponse.php';
require_once dirname(__FILE__) . '/Extended/Dividend/XiSecurityTypeExtendedDividend.php';
require_once dirname(__FILE__) . '/Array/Dividend/XiSecurityTypeArrayOfExtendedDividend.php';
require_once dirname(__FILE__) . '/Extended/History/XiSecurityTypeExtendedDividendHistory.php';
require_once dirname(__FILE__) . '/Lookup/Item/XiSecurityTypeLookupItem.php';
require_once dirname(__FILE__) . '/Lookup/XiSecurityServiceLookup.php';
require_once dirname(__FILE__) . '/Map/XiSecurityServiceMap.php';
require_once dirname(__FILE__) . '/List/XiSecurityServiceList.php';
require_once dirname(__FILE__) . '/Get/XiSecurityServiceGet.php';
require_once dirname(__FILE__) . '/XiSecurityClassMap.php';
?>