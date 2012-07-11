<?php
/**
 * AutoloadFile 
 * @date 08/07/2012
 */
/**
 * AutoloadFile
 * @date 08/07/2012
 */
require_once dirname(__FILE__) . '/XiEdgarWsdlClass.php';
require_once dirname(__FILE__) . '/Common/XiEdgarTypeCommon.php';
require_once dirname(__FILE__) . '/Document/XiEdgarTypeDocument.php';
require_once dirname(__FILE__) . '/Array/Document/XiEdgarTypeArrayOfDocument.php';
require_once dirname(__FILE__) . '/Filing/Details/XiEdgarTypeFilingDetails.php';
require_once dirname(__FILE__) . '/Get/Response/XiEdgarTypeGetFilingDetailsResponse.php';
require_once dirname(__FILE__) . '/Read/Document/XiEdgarTypeReadDocument.php';
require_once dirname(__FILE__) . '/Read/Response/XiEdgarTypeReadDocumentResponse.php';
require_once dirname(__FILE__) . '/Get/Response/XiEdgarTypeGetPDFDocumentResponse.php';
require_once dirname(__FILE__) . '/Get/Document/XiEdgarTypeGetPDFDocument.php';
require_once dirname(__FILE__) . '/File/XiEdgarTypeFile.php';
require_once dirname(__FILE__) . '/Get/Details/XiEdgarTypeGetFilingDetails.php';
require_once dirname(__FILE__) . '/Array/Name/XiEdgarTypeArrayOfSECFormerCompanyName.php';
require_once dirname(__FILE__) . '/SECH/Eader/XiEdgarTypeSECHeader.php';
require_once dirname(__FILE__) . '/Filing/Text/XiEdgarTypeFilingAsText.php';
require_once dirname(__FILE__) . '/Get/Response/XiEdgarTypeGetFilingAsTextResponse.php';
require_once dirname(__FILE__) . '/Get/Text/XiEdgarTypeGetFilingAsText.php';
require_once dirname(__FILE__) . '/SECF/Iler/XiEdgarTypeSECFiler.php';
require_once dirname(__FILE__) . '/SECC/Data/XiEdgarTypeSECCompanyData.php';
require_once dirname(__FILE__) . '/PDFF/Ile/XiEdgarTypePDFFile.php';
require_once dirname(__FILE__) . '/SECB/Address/XiEdgarTypeSECBusinessAddress.php';
require_once dirname(__FILE__) . '/SECF/Values/XiEdgarTypeSECFilingValues.php';
require_once dirname(__FILE__) . '/SECF/Name/XiEdgarTypeSECFormerCompanyName.php';
require_once dirname(__FILE__) . '/Get/Ownership/XiEdgarTypeGetManagementOwnership.php';
require_once dirname(__FILE__) . '/Identifier/Types/XiEdgarTypeIdentifierTypes.php';
require_once dirname(__FILE__) . '/Recent/Types/XiEdgarTypeRecentFormTypes.php';
require_once dirname(__FILE__) . '/Day/Types/XiEdgarTypeDayTypes.php';
require_once dirname(__FILE__) . '/Outcome/Types/XiEdgarTypeOutcomeTypes.php';
require_once dirname(__FILE__) . '/Ownership/Types/XiEdgarTypeOwnershipFormTypes.php';
require_once dirname(__FILE__) . '/Predefined/Types/XiEdgarTypePredefinedQueryTypes.php';
require_once dirname(__FILE__) . '/Last/Types/XiEdgarTypeLastFormTypes.php';
require_once dirname(__FILE__) . '/Output/Types/XiEdgarTypeOutputTypes.php';
require_once dirname(__FILE__) . '/File/Types/XiEdgarTypeFileTypes.php';
require_once dirname(__FILE__) . '/Total/Assets/XiEdgarTypeTotalAssets.php';
require_once dirname(__FILE__) . '/Get/Response/XiEdgarTypeGetTotalAssetsResponse.php';
require_once dirname(__FILE__) . '/Get/Outstanding/XiEdgarTypeGetSharesOutstanding.php';
require_once dirname(__FILE__) . '/Management/Ownership/XiEdgarTypeManagementOwnership.php';
require_once dirname(__FILE__) . '/Get/Response/XiEdgarTypeGetManagementOwnershipResponse.php';
require_once dirname(__FILE__) . '/Get/Response/XiEdgarTypeGetSharesOutstandingResponse.php';
require_once dirname(__FILE__) . '/Shares/Outstanding/XiEdgarTypeSharesOutstanding.php';
require_once dirname(__FILE__) . '/Get/Assets/XiEdgarTypeGetTotalAssets.php';
require_once dirname(__FILE__) . '/Shares/Of/XiEdgarTypeSharesAsOf.php';
require_once dirname(__FILE__) . '/Array/Of/XiEdgarTypeArrayOfSharesAsOf.php';
require_once dirname(__FILE__) . '/Get/Response/XiEdgarTypeGetLastFilingResponse.php';
require_once dirname(__FILE__) . '/Get/Filing/XiEdgarTypeGetLastFiling.php';
require_once dirname(__FILE__) . '/Array/Code/XiEdgarTypeArrayOfSICCode.php';
require_once dirname(__FILE__) . '/List/Response/XiEdgarTypeListSICCodesResponse.php';
require_once dirname(__FILE__) . '/List/Codes/XiEdgarTypeListSICCodes.php';
require_once dirname(__FILE__) . '/Security/XiEdgarTypeSecurity.php';
require_once dirname(__FILE__) . '/SICC/Ode/XiEdgarTypeSICCode.php';
require_once dirname(__FILE__) . '/Get/Filings/XiEdgarTypeGetRecentFilings.php';
require_once dirname(__FILE__) . '/Filing/XiEdgarTypeFiling.php';
require_once dirname(__FILE__) . '/Array/Filing/XiEdgarTypeArrayOfFiling.php';
require_once dirname(__FILE__) . '/Get/Response/XiEdgarTypeGetRecentFilingsResponse.php';
require_once dirname(__FILE__) . '/Get/Response/XiEdgarTypeGetCIKResponse.php';
require_once dirname(__FILE__) . '/Get/CIK/XiEdgarTypeGetCIK.php';
require_once dirname(__FILE__) . '/Submission/XiEdgarTypeSubmission.php';
require_once dirname(__FILE__) . '/Array/Submission/XiEdgarTypeArrayOfSubmission.php';
require_once dirname(__FILE__) . '/List/Response/XiEdgarTypeListSECFilingTypesResponse.php';
require_once dirname(__FILE__) . '/Header/XiEdgarTypeHeader.php';
require_once dirname(__FILE__) . '/Lookup/CIK/XiEdgarTypeLookupCIK.php';
require_once dirname(__FILE__) . '/CIKL/Ookup/XiEdgarTypeCIKLookup.php';
require_once dirname(__FILE__) . '/Array/Lookup/XiEdgarTypeArrayOfCIKLookup.php';
require_once dirname(__FILE__) . '/Lookup/Response/XiEdgarTypeLookupCIKResponse.php';
require_once dirname(__FILE__) . '/Query/Filings/XiEdgarTypeQueryFilings.php';
require_once dirname(__FILE__) . '/Query/Response/XiEdgarTypeQueryFilingsResponse.php';
require_once dirname(__FILE__) . '/Master/Result/XiEdgarTypeMasterDocumentsResult.php';
require_once dirname(__FILE__) . '/Query/Response/XiEdgarTypeQueryMasterDocumentsResponse.php';
require_once dirname(__FILE__) . '/Query/Documents/XiEdgarTypeQueryMasterDocuments.php';
require_once dirname(__FILE__) . '/Predefined/Response/XiEdgarTypePredefinedQueryFilingsResponse.php';
require_once dirname(__FILE__) . '/Array/Document/XiEdgarTypeArrayOfMasterDocument.php';
require_once dirname(__FILE__) . '/Master/Document/XiEdgarTypeMasterDocument.php';
require_once dirname(__FILE__) . '/Search/Result/XiEdgarTypeSearchResult.php';
require_once dirname(__FILE__) . '/Search/Response/XiEdgarTypeSearchFilingsResponse.php';
require_once dirname(__FILE__) . '/Search/Filings/XiEdgarTypeSearchFilings.php';
require_once dirname(__FILE__) . '/Predefined/Filings/XiEdgarTypePredefinedQueryFilings.php';
require_once dirname(__FILE__) . '/Filing/Occurrence/XiEdgarTypeFilingOccurrence.php';
require_once dirname(__FILE__) . '/Short/Filing/XiEdgarTypeShortFiling.php';
require_once dirname(__FILE__) . '/Array/Filing/XiEdgarTypeArrayOfShortFiling.php';
require_once dirname(__FILE__) . '/Query/Result/XiEdgarTypeQueryResult.php';
require_once dirname(__FILE__) . '/Query/Period/XiEdgarTypeQueryFilingsByReportingPeriod.php';
require_once dirname(__FILE__) . '/Query/Response/XiEdgarTypeQueryFilingsByReportingPeriodResponse.php';
require_once dirname(__FILE__) . '/Array/Occurrence/XiEdgarTypeArrayOfFilingOccurrence.php';
require_once dirname(__FILE__) . '/Get/Response/XiEdgarTypeGetFilingOccurrencesResponse.php';
require_once dirname(__FILE__) . '/Get/Occurrences/XiEdgarTypeGetFilingOccurrences.php';
require_once dirname(__FILE__) . '/List/Types/XiEdgarTypeListSECFilingTypes.php';
require_once dirname(__FILE__) . '/List/XiEdgarServiceList.php';
require_once dirname(__FILE__) . '/Lookup/XiEdgarServiceLookup.php';
require_once dirname(__FILE__) . '/Get/XiEdgarServiceGet.php';
require_once dirname(__FILE__) . '/Query/XiEdgarServiceQuery.php';
require_once dirname(__FILE__) . '/Predefined/XiEdgarServicePredefined.php';
require_once dirname(__FILE__) . '/Search/XiEdgarServiceSearch.php';
require_once dirname(__FILE__) . '/Read/XiEdgarServiceRead.php';
require_once dirname(__FILE__) . '/XiEdgarClassMap.php';
?>