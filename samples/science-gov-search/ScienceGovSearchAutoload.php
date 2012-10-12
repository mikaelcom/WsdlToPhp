<?php
/**
 * AutoloadFile 
 * @date 13/10/2012
 */
/**
 * AutoloadFile
 * @date 13/10/2012
 */
require_once dirname(__FILE__) . '/ScienceGovSearchWsdlClass.php';
require_once dirname(__FILE__) . '/Create/Request/ScienceGovSearchTypeCreateSnapshotRequest.php';
require_once dirname(__FILE__) . '/Cluster/Response/ScienceGovSearchTypeClusterResponse.php';
require_once dirname(__FILE__) . '/Snapshot/Response/ScienceGovSearchTypeSnapshotResponse.php';
require_once dirname(__FILE__) . '/Continue/Response/ScienceGovSearchTypeContinueSearchResponse.php';
require_once dirname(__FILE__) . '/Get/Request/ScienceGovSearchTypeGetResultByResultIdRequest.php';
require_once dirname(__FILE__) . '/Estimate/Response/ScienceGovSearchTypeEstimateSearchTimeResponse.php';
require_once dirname(__FILE__) . '/Update/Request/ScienceGovSearchTypeUpdateSavedSearchRequest.php';
require_once dirname(__FILE__) . '/Delete/Request/ScienceGovSearchTypeDeleteSavedSearchRequest.php';
require_once dirname(__FILE__) . '/Get/Request/ScienceGovSearchTypeGetSearchStatusRequest.php';
require_once dirname(__FILE__) . '/Incremental/Response/ScienceGovSearchTypeIncrementalResultsResponse.php';
require_once dirname(__FILE__) . '/Search/Response/ScienceGovSearchTypeSearchStatusResponse.php';
require_once dirname(__FILE__) . '/Save/Request/ScienceGovSearchTypeSaveSearchRequest.php';
require_once dirname(__FILE__) . '/Saved/Response/ScienceGovSearchTypeSavedSearchesResponse.php';
require_once dirname(__FILE__) . '/Get/Request/ScienceGovSearchTypeGetSavedSearchesRequest.php';
require_once dirname(__FILE__) . '/Search/Response/ScienceGovSearchTypeSearchResultResponse.php';
require_once dirname(__FILE__) . '/Get/Request/ScienceGovSearchTypeGetResultAsCitationRequest.php';
require_once dirname(__FILE__) . '/Email/Type/ScienceGovSearchTypeEmailPreferenceType.php';
require_once dirname(__FILE__) . '/Email/Type/ScienceGovSearchTypeEmailFormatType.php';
require_once dirname(__FILE__) . '/Period/Type/ScienceGovSearchTypePeriodType.php';
require_once dirname(__FILE__) . '/Cluster/Type/ScienceGovSearchTypeClusterType.php';
require_once dirname(__FILE__) . '/Request/Type/ScienceGovSearchTypeRequestType.php';
require_once dirname(__FILE__) . '/Search/Type/ScienceGovSearchTypeSearchType.php';
require_once dirname(__FILE__) . '/Result/Type/ScienceGovSearchTypeResultOrderFieldType.php';
require_once dirname(__FILE__) . '/Author/Type/ScienceGovSearchTypeAuthorType.php';
require_once dirname(__FILE__) . '/Boolean/Type/ScienceGovSearchTypeBooleanType.php';
require_once dirname(__FILE__) . '/Citation/Response/ScienceGovSearchTypeCitationResultResponse.php';
require_once dirname(__FILE__) . '/Field/Type/ScienceGovSearchTypeFieldNameType.php';
require_once dirname(__FILE__) . '/Filter/Type/ScienceGovSearchTypeFilterType.php';
require_once dirname(__FILE__) . '/Date/Type/ScienceGovSearchTypeDateType.php';
require_once dirname(__FILE__) . '/Source/Type/ScienceGovSearchTypeSourceType.php';
require_once dirname(__FILE__) . '/Retrieve/Request/ScienceGovSearchTypeRetrieveIncrementalResultsRequest.php';
require_once dirname(__FILE__) . '/Retrieve/Request/ScienceGovSearchTypeRetrieveSavedSearchRequest.php';
require_once dirname(__FILE__) . '/Date/ScienceGovSearchTypeDate.php';
require_once dirname(__FILE__) . '/Author/ScienceGovSearchTypeAuthor.php';
require_once dirname(__FILE__) . '/Interval/ScienceGovSearchTypeInterval.php';
require_once dirname(__FILE__) . '/Search/Result/ScienceGovSearchTypeSearchResult.php';
require_once dirname(__FILE__) . '/Snapshot/Order/ScienceGovSearchTypeSnapshotOrder.php';
require_once dirname(__FILE__) . '/Library/Record/ScienceGovSearchTypeLibraryRecord.php';
require_once dirname(__FILE__) . '/Source/ScienceGovSearchTypeSource.php';
require_once dirname(__FILE__) . '/Result/Field/ScienceGovSearchTypeResultField.php';
require_once dirname(__FILE__) . '/Query/ScienceGovSearchTypeQuery.php';
require_once dirname(__FILE__) . '/Collection/Parameter/ScienceGovSearchTypeCollectionParameter.php';
require_once dirname(__FILE__) . '/String/Entry/ScienceGovSearchTypeStringStringEntry.php';
require_once dirname(__FILE__) . '/String/Entry/ScienceGovSearchTypeStringIntEntry.php';
require_once dirname(__FILE__) . '/Cookie/ScienceGovSearchTypeCookie.php';
require_once dirname(__FILE__) . '/Attribute/ScienceGovSearchTypeAttribute.php';
require_once dirname(__FILE__) . '/Result/Order/ScienceGovSearchTypeResultOrder.php';
require_once dirname(__FILE__) . '/Free/Result/ScienceGovSearchTypeFreeFormResult.php';
require_once dirname(__FILE__) . '/Search/Response/ScienceGovSearchTypeSearchRetrieveResponse.php';
require_once dirname(__FILE__) . '/Search/Request/ScienceGovSearchTypeSearchRequest.php';
require_once dirname(__FILE__) . '/Retrieve/Response/ScienceGovSearchTypeRetrieveFreeFormResponse.php';
require_once dirname(__FILE__) . '/Saved/Response/ScienceGovSearchTypeSavedSearchResponse.php';
require_once dirname(__FILE__) . '/Retrieve/Request/ScienceGovSearchTypeRetrieveFreeFormRequest.php';
require_once dirname(__FILE__) . '/Retrieve/Request/ScienceGovSearchTypeRetrieveRequest.php';
require_once dirname(__FILE__) . '/Saved/Response/ScienceGovSearchTypeSavedSearchRetrieveResponse.php';
require_once dirname(__FILE__) . '/Cluster/Request/ScienceGovSearchTypeClusterRequest.php';
require_once dirname(__FILE__) . '/Cluster/ScienceGovSearchTypeCluster.php';
require_once dirname(__FILE__) . '/Search/Status/ScienceGovSearchTypeSearchStatus.php';
require_once dirname(__FILE__) . '/Results/Exception/ScienceGovSearchTypeResultsNotFoundException.php';
require_once dirname(__FILE__) . '/Continue/Request/ScienceGovSearchTypeContinueSearchRequest.php';
require_once dirname(__FILE__) . '/Cluster/Request/ScienceGovSearchTypeClusterRetrieveRequest.php';
require_once dirname(__FILE__) . '/Estimate/Request/ScienceGovSearchTypeEstimateSearchTimeRequest.php';
require_once dirname(__FILE__) . '/Field/ScienceGovSearchTypeField.php';
require_once dirname(__FILE__) . '/Search/ScienceGovSearchServiceSearch.php';
require_once dirname(__FILE__) . '/Retrieve/ScienceGovSearchServiceRetrieve.php';
require_once dirname(__FILE__) . '/Get/ScienceGovSearchServiceGet.php';
require_once dirname(__FILE__) . '/Save/ScienceGovSearchServiceSave.php';
require_once dirname(__FILE__) . '/Delete/ScienceGovSearchServiceDelete.php';
require_once dirname(__FILE__) . '/Update/ScienceGovSearchServiceUpdate.php';
require_once dirname(__FILE__) . '/Create/ScienceGovSearchServiceCreate.php';
require_once dirname(__FILE__) . '/Continue/ScienceGovSearchServiceContinue.php';
require_once dirname(__FILE__) . '/Estimate/ScienceGovSearchServiceEstimate.php';
require_once dirname(__FILE__) . '/ScienceGovSearchClassMap.php';
?>