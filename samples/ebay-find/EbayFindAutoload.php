<?php
/**
 * AutoloadFile 
 * @date 04/07/2012
 */
/**
 * AutoloadFile
 * @date 04/07/2012
 */
require_once dirname(__FILE__) . '/EbayFindWsdlClass.php';
require_once dirname(__FILE__) . '/Base/Request/EbayFindTypeBaseServiceRequest.php';
require_once dirname(__FILE__) . '/Base/Response/EbayFindTypeBaseServiceResponse.php';
require_once dirname(__FILE__) . '/Base/Response/EbayFindTypeBaseFindingServiceResponse.php';
require_once dirname(__FILE__) . '/Best/Request/EbayFindTypeBestMatchFindingServiceRequest.php';
require_once dirname(__FILE__) . '/Base/Request/EbayFindTypeBaseFindingServiceRequest.php';
require_once dirname(__FILE__) . '/Shipping/Info/EbayFindTypeShippingInfo.php';
require_once dirname(__FILE__) . '/Search/Item/EbayFindTypeSearchItem.php';
require_once dirname(__FILE__) . '/Seller/Info/EbayFindTypeSellerInfo.php';
require_once dirname(__FILE__) . '/Listing/Info/EbayFindTypeListingInfo.php';
require_once dirname(__FILE__) . '/Condition/Histogram/EbayFindTypeConditionHistogram.php';
require_once dirname(__FILE__) . '/Condition/Container/EbayFindTypeConditionHistogramContainer.php';
require_once dirname(__FILE__) . '/Item/Filter/EbayFindTypeItemFilter.php';
require_once dirname(__FILE__) . '/Selling/Status/EbayFindTypeSellingStatus.php';
require_once dirname(__FILE__) . '/Gallery/EbayFindTypeGalleryURL.php';
require_once dirname(__FILE__) . '/Discount/Info/EbayFindTypeDiscountPriceInfo.php';
require_once dirname(__FILE__) . '/Distance/EbayFindTypeDistance.php';
require_once dirname(__FILE__) . '/Condition/EbayFindTypeCondition.php';
require_once dirname(__FILE__) . '/Domain/Filter/EbayFindTypeDomainFilter.php';
require_once dirname(__FILE__) . '/Product/Id/EbayFindTypeProductId.php';
require_once dirname(__FILE__) . '/Storefront/EbayFindTypeStorefront.php';
require_once dirname(__FILE__) . '/Error/Parameter/EbayFindTypeErrorParameter.php';
require_once dirname(__FILE__) . '/Output/Type/EbayFindTypeOutputSelectorType.php';
require_once dirname(__FILE__) . '/Sort/Type/EbayFindTypeSortOrderType.php';
require_once dirname(__FILE__) . '/Item/Type/EbayFindTypeItemFilterType.php';
require_once dirname(__FILE__) . '/Ack/Value/EbayFindTypeAckValue.php';
require_once dirname(__FILE__) . '/Error/Category/EbayFindTypeErrorCategory.php';
require_once dirname(__FILE__) . '/Error/Severity/EbayFindTypeErrorSeverity.php';
require_once dirname(__FILE__) . '/Price/Enum/EbayFindTypePriceTreatmentEnum.php';
require_once dirname(__FILE__) . '/Map/Enum/EbayFindTypeMapExposureEnum.php';
require_once dirname(__FILE__) . '/Error/Data/EbayFindTypeErrorData.php';
require_once dirname(__FILE__) . '/Error/Message/EbayFindTypeErrorMessage.php';
require_once dirname(__FILE__) . '/Gallery/Container/EbayFindTypeGalleryInfoContainer.php';
require_once dirname(__FILE__) . '/Pagination/Input/EbayFindTypePaginationInput.php';
require_once dirname(__FILE__) . '/Gallery/Enum/EbayFindTypeGallerySizeEnum.php';
require_once dirname(__FILE__) . '/Pagination/Output/EbayFindTypePaginationOutput.php';
require_once dirname(__FILE__) . '/Amount/EbayFindTypeAmount.php';
require_once dirname(__FILE__) . '/Aspect/Container/EbayFindTypeAspectHistogramContainer.php';
require_once dirname(__FILE__) . '/Find/Request/EbayFindTypeFindItemsByCategoryRequest.php';
require_once dirname(__FILE__) . '/Find/Response/EbayFindTypeFindItemsByKeywordsResponse.php';
require_once dirname(__FILE__) . '/Find/Response/EbayFindTypeFindItemsByCategoryResponse.php';
require_once dirname(__FILE__) . '/Find/Request/EbayFindTypeFindItemsAdvancedRequest.php';
require_once dirname(__FILE__) . '/Find/Request/EbayFindTypeFindItemsByProductRequest.php';
require_once dirname(__FILE__) . '/Find/Response/EbayFindTypeFindItemsAdvancedResponse.php';
require_once dirname(__FILE__) . '/Find/Request/EbayFindTypeFindItemsByKeywordsRequest.php';
require_once dirname(__FILE__) . '/Get/Response/EbayFindTypeGetSearchKeywordsRecommendationResponse.php';
require_once dirname(__FILE__) . '/Find/Request/EbayFindTypeFindItemsForFavoriteSearchRequest.php';
require_once dirname(__FILE__) . '/Get/Response/EbayFindTypeGetVersionResponse.php';
require_once dirname(__FILE__) . '/Find/Response/EbayFindTypeFindItemsForFavoriteSearchResponse.php';
require_once dirname(__FILE__) . '/Find/Request/EbayFindTypeFindCompletedItemsRequest.php';
require_once dirname(__FILE__) . '/Get/Request/EbayFindTypeGetSearchKeywordsRecommendationRequest.php';
require_once dirname(__FILE__) . '/Find/Response/EbayFindTypeFindCompletedItemsResponse.php';
require_once dirname(__FILE__) . '/Find/Response/EbayFindTypeFindItemsByProductResponse.php';
require_once dirname(__FILE__) . '/Find/Request/EbayFindTypeFindItemsIneBayStoresRequest.php';
require_once dirname(__FILE__) . '/Category/Container/EbayFindTypeCategoryHistogramContainer.php';
require_once dirname(__FILE__) . '/Category/EbayFindTypeCategory.php';
require_once dirname(__FILE__) . '/Aspect/Histogram/EbayFindTypeAspectValueHistogram.php';
require_once dirname(__FILE__) . '/Get/Request/EbayFindTypeGetVersionRequest.php';
require_once dirname(__FILE__) . '/Aspect/Filter/EbayFindTypeAspectFilter.php';
require_once dirname(__FILE__) . '/Aspect/EbayFindTypeAspect.php';
require_once dirname(__FILE__) . '/Category/Histogram/EbayFindTypeCategoryHistogram.php';
require_once dirname(__FILE__) . '/Affiliate/EbayFindTypeAffiliate.php';
require_once dirname(__FILE__) . '/Find/Request/EbayFindTypeFindItemsByImageRequest.php';
require_once dirname(__FILE__) . '/Find/Response/EbayFindTypeFindItemsIneBayStoresResponse.php';
require_once dirname(__FILE__) . '/Find/Response/EbayFindTypeFindItemsByImageResponse.php';
require_once dirname(__FILE__) . '/Get/Request/EbayFindTypeGetHistogramsRequest.php';
require_once dirname(__FILE__) . '/Extension/Type/EbayFindTypeExtensionType.php';
require_once dirname(__FILE__) . '/Get/Response/EbayFindTypeGetHistogramsResponse.php';
require_once dirname(__FILE__) . '/Search/Result/EbayFindTypeSearchResult.php';
require_once dirname(__FILE__) . '/Get/EbayFindServiceGet.php';
require_once dirname(__FILE__) . '/Find/EbayFindServiceFind.php';
require_once dirname(__FILE__) . '/EbayFindClassMap.php';
?>