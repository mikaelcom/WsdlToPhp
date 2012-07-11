<?php
/**
 * AutoloadFile 
 * @date 08/07/2012
 */
/**
 * AutoloadFile
 * @date 08/07/2012
 */
require_once dirname(__FILE__) . '/XiBondsRealTimeWsdlClass.php';
require_once dirname(__FILE__) . '/Common/XiBondsRealTimeTypeCommon.php';
require_once dirname(__FILE__) . '/Get/Prices/XiBondsRealTimeTypeGetDailyOpenHighLowClosePrices.php';
require_once dirname(__FILE__) . '/Array/Sale/XiBondsRealTimeTypeArrayOfLastSale.php';
require_once dirname(__FILE__) . '/Get/Response/XiBondsRealTimeTypeGetDailyOpenHighLowClosePricesResponse.php';
require_once dirname(__FILE__) . '/Array/Price/XiBondsRealTimeTypeArrayOfDailyOpenHighLowClosePrice.php';
require_once dirname(__FILE__) . '/Get/Prices/XiBondsRealTimeTypeGetYearlyHighLowPrices.php';
require_once dirname(__FILE__) . '/Get/Response/XiBondsRealTimeTypeGetLastSalesResponse.php';
require_once dirname(__FILE__) . '/Get/Response/XiBondsRealTimeTypeGetYearlyHighLowPricesResponse.php';
require_once dirname(__FILE__) . '/Array/Composite/XiBondsRealTimeTypeArrayOfPriceComposite.php';
require_once dirname(__FILE__) . '/Bond/Calculation/XiBondsRealTimeTypeBondCalculation.php';
require_once dirname(__FILE__) . '/Get/Response/XiBondsRealTimeTypeGetBondCalculationResponse.php';
require_once dirname(__FILE__) . '/Bond/Spread/XiBondsRealTimeTypeBondOptionAdjustedSpread.php';
require_once dirname(__FILE__) . '/Get/Composites/XiBondsRealTimeTypeGetPriceComposites.php';
require_once dirname(__FILE__) . '/Array/Price/XiBondsRealTimeTypeArrayOfYearlyHighLowPrice.php';
require_once dirname(__FILE__) . '/Get/Response/XiBondsRealTimeTypeGetPriceCompositesResponse.php';
require_once dirname(__FILE__) . '/Get/Sales/XiBondsRealTimeTypeGetLastSales.php';
require_once dirname(__FILE__) . '/Get/Response/XiBondsRealTimeTypeGetYieldsResponse.php';
require_once dirname(__FILE__) . '/Get/Response/XiBondsRealTimeTypeGetBondCalculationsResponse.php';
require_once dirname(__FILE__) . '/Get/Calculations/XiBondsRealTimeTypeGetBondCalculations.php';
require_once dirname(__FILE__) . '/Array/Calculation/XiBondsRealTimeTypeArrayOfBondCalculation.php';
require_once dirname(__FILE__) . '/Identifier/Types/XiBondsRealTimeTypeIdentifierTypes.php';
require_once dirname(__FILE__) . '/Outcome/Types/XiBondsRealTimeTypeOutcomeTypes.php';
require_once dirname(__FILE__) . '/Price/Sources/XiBondsRealTimeTypePriceSources.php';
require_once dirname(__FILE__) . '/Array/Convexity/XiBondsRealTimeTypeArrayOfDurationAndConvexity.php';
require_once dirname(__FILE__) . '/Get/Response/XiBondsRealTimeTypeGetDurationAndConvexitiesResponse.php';
require_once dirname(__FILE__) . '/Array/Yield/XiBondsRealTimeTypeArrayOfYield.php';
require_once dirname(__FILE__) . '/Get/Calculation/XiBondsRealTimeTypeGetBondCalculation.php';
require_once dirname(__FILE__) . '/Get/Interests/XiBondsRealTimeTypeGetAccruedInterests.php';
require_once dirname(__FILE__) . '/Get/Response/XiBondsRealTimeTypeGetAccruedInterestsResponse.php';
require_once dirname(__FILE__) . '/Get/Convexities/XiBondsRealTimeTypeGetDurationAndConvexities.php';
require_once dirname(__FILE__) . '/Array/Interest/XiBondsRealTimeTypeArrayOfAccruedInterest.php';
require_once dirname(__FILE__) . '/Get/Yields/XiBondsRealTimeTypeGetYields.php';
require_once dirname(__FILE__) . '/Bond/Convexity/XiBondsRealTimeTypeBondConvexity.php';
require_once dirname(__FILE__) . '/Get/Price/XiBondsRealTimeTypeGetDailyOpenHighLowClosePrice.php';
require_once dirname(__FILE__) . '/Bond/Sale/XiBondsRealTimeTypeBondLastSale.php';
require_once dirname(__FILE__) . '/Get/Response/XiBondsRealTimeTypeGetDailyOpenHighLowClosePriceResponse.php';
require_once dirname(__FILE__) . '/Daily/Price/XiBondsRealTimeTypeDailyOpenHighLowClosePrice.php';
require_once dirname(__FILE__) . '/Get/Price/XiBondsRealTimeTypeGetYearlyHighLowPrice.php';
require_once dirname(__FILE__) . '/Daily/Close/XiBondsRealTimeTypeDailyOpenHighLowClose.php';
require_once dirname(__FILE__) . '/Last/Sale/XiBondsRealTimeTypeLastSale.php';
require_once dirname(__FILE__) . '/Get/Response/XiBondsRealTimeTypeGetLastSaleResponse.php';
require_once dirname(__FILE__) . '/Price/Composite/XiBondsRealTimeTypePriceComposite.php';
require_once dirname(__FILE__) . '/Get/Response/XiBondsRealTimeTypeGetPriceCompositeResponse.php';
require_once dirname(__FILE__) . '/Instrument/Brief/XiBondsRealTimeTypeInstrumentIdentifierBrief.php';
require_once dirname(__FILE__) . '/Traded/Price/XiBondsRealTimeTypeTradedPrice.php';
require_once dirname(__FILE__) . '/Get/Sale/XiBondsRealTimeTypeGetLastSale.php';
require_once dirname(__FILE__) . '/Header/XiBondsRealTimeTypeHeader.php';
require_once dirname(__FILE__) . '/Get/Response/XiBondsRealTimeTypeGetYearlyHighLowPriceResponse.php';
require_once dirname(__FILE__) . '/Yearly/Price/XiBondsRealTimeTypeYearlyHighLowPrice.php';
require_once dirname(__FILE__) . '/Bond/Interest/XiBondsRealTimeTypeBondAccruedInterest.php';
require_once dirname(__FILE__) . '/Accrued/Interest/XiBondsRealTimeTypeAccruedInterest.php';
require_once dirname(__FILE__) . '/Get/Convexity/XiBondsRealTimeTypeGetDurationAndConvexity.php';
require_once dirname(__FILE__) . '/Get/Response/XiBondsRealTimeTypeGetDurationAndConvexityResponse.php';
require_once dirname(__FILE__) . '/Bond/Duration/XiBondsRealTimeTypeBondDuration.php';
require_once dirname(__FILE__) . '/Duration/Convexity/XiBondsRealTimeTypeDurationAndConvexity.php';
require_once dirname(__FILE__) . '/Get/Response/XiBondsRealTimeTypeGetAccruedInterestResponse.php';
require_once dirname(__FILE__) . '/Get/Interest/XiBondsRealTimeTypeGetAccruedInterest.php';
require_once dirname(__FILE__) . '/Get/Yield/XiBondsRealTimeTypeGetYield.php';
require_once dirname(__FILE__) . '/Yearly/Low/XiBondsRealTimeTypeYearlyHighLow.php';
require_once dirname(__FILE__) . '/Get/Response/XiBondsRealTimeTypeGetYieldResponse.php';
require_once dirname(__FILE__) . '/Yield/XiBondsRealTimeTypeYield.php';
require_once dirname(__FILE__) . '/Bond/Yield/XiBondsRealTimeTypeBondYield.php';
require_once dirname(__FILE__) . '/Get/Composite/XiBondsRealTimeTypeGetPriceComposite.php';
require_once dirname(__FILE__) . '/Get/XiBondsRealTimeServiceGet.php';
require_once dirname(__FILE__) . '/XiBondsRealTimeClassMap.php';
?>