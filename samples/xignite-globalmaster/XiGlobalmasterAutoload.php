<?php
/**
 * AutoloadFile 
 * @date 08/07/2012
 */
/**
 * AutoloadFile
 * @date 08/07/2012
 */
require_once dirname(__FILE__) . '/XiGlobalmasterWsdlClass.php';
require_once dirname(__FILE__) . '/Common/XiGlobalmasterTypeCommon.php';
require_once dirname(__FILE__) . '/Abstract/Obj/XiGlobalmasterTypeAbstractPublicWebServiceObj.php';
require_once dirname(__FILE__) . '/List/Sectors/XiGlobalmasterTypeListSectors.php';
require_once dirname(__FILE__) . '/List/Response/XiGlobalmasterTypeListIndustriesResponse.php';
require_once dirname(__FILE__) . '/List/Response/XiGlobalmasterTypeListSectorsResponse.php';
require_once dirname(__FILE__) . '/List/Exchange/XiGlobalmasterTypeListMICToLegacyExchange.php';
require_once dirname(__FILE__) . '/Array/Mapping/XiGlobalmasterTypeArrayOfLegacyExchangeMapping.php';
require_once dirname(__FILE__) . '/List/Response/XiGlobalmasterTypeListMICToLegacyExchangeResponse.php';
require_once dirname(__FILE__) . '/List/Industries/XiGlobalmasterTypeListIndustries.php';
require_once dirname(__FILE__) . '/Legacy/Mapping/XiGlobalmasterTypeLegacyExchangeMapping.php';
require_once dirname(__FILE__) . '/Array/Value/XiGlobalmasterTypeArrayOfPossibleValue.php';
require_once dirname(__FILE__) . '/Get/Response/XiGlobalmasterTypeGetMasterByIndustryResponse.php';
require_once dirname(__FILE__) . '/Get/Industry/XiGlobalmasterTypeGetMasterByIndustry.php';
require_once dirname(__FILE__) . '/Get/Response/XiGlobalmasterTypeGetMasterBySectorResponse.php';
require_once dirname(__FILE__) . '/List/Exchanges/XiGlobalmasterTypeListExchanges.php';
require_once dirname(__FILE__) . '/List/Response/XiGlobalmasterTypeListExchangesResponse.php';
require_once dirname(__FILE__) . '/List/Suffix/XiGlobalmasterTypeListMICToLegacySuffix.php';
require_once dirname(__FILE__) . '/Possible/Values/XiGlobalmasterTypePossibleValues.php';
require_once dirname(__FILE__) . '/Possible/Value/XiGlobalmasterTypePossibleValue.php';
require_once dirname(__FILE__) . '/List/Exchange/XiGlobalmasterTypeListIdentifiersByExchange.php';
require_once dirname(__FILE__) . '/Data/Providers/XiGlobalmasterTypeDataProviders.php';
require_once dirname(__FILE__) . '/Alternate/Types/XiGlobalmasterTypeAlternateIdentifierTypes.php';
require_once dirname(__FILE__) . '/Outcome/Types/XiGlobalmasterTypeOutcomeTypes.php';
require_once dirname(__FILE__) . '/Instrument/Types/XiGlobalmasterTypeInstrumentRelatedTypes.php';
require_once dirname(__FILE__) . '/Issuer/Types/XiGlobalmasterTypeIssuerRelatedTypes.php';
require_once dirname(__FILE__) . '/Industries/XiGlobalmasterTypeIndustries.php';
require_once dirname(__FILE__) . '/Sectors/XiGlobalmasterTypeSectors.php';
require_once dirname(__FILE__) . '/Exchanges/XiGlobalmasterTypeExchanges.php';
require_once dirname(__FILE__) . '/Identifier/Types/XiGlobalmasterTypeIdentifierTypes.php';
require_once dirname(__FILE__) . '/Statistics/XiGlobalmasterTypeStatistics.php';
require_once dirname(__FILE__) . '/Identifiers/Exchange/XiGlobalmasterTypeIdentifiersByExchange.php';
require_once dirname(__FILE__) . '/List/Response/XiGlobalmasterTypeListIdentifiersByExchangeResponse.php';
require_once dirname(__FILE__) . '/Get/Sector/XiGlobalmasterTypeGetMasterBySector.php';
require_once dirname(__FILE__) . '/Array/Result/XiGlobalmasterTypeArrayOfIdentifierResult.php';
require_once dirname(__FILE__) . '/Identifier/Result/XiGlobalmasterTypeIdentifierResult.php';
require_once dirname(__FILE__) . '/Get/Response/XiGlobalmasterTypeGetMasterStatisticsByExchangeResponse.php';
require_once dirname(__FILE__) . '/Get/Exchange/XiGlobalmasterTypeGetMasterStatisticsByExchange.php';
require_once dirname(__FILE__) . '/List/Response/XiGlobalmasterTypeListMICToLegacySuffixResponse.php';
require_once dirname(__FILE__) . '/Get/Response/XiGlobalmasterTypeGetMasterByExchangeChangesResponse.php';
require_once dirname(__FILE__) . '/Get/Response/XiGlobalmasterTypeGetInstrumentResponse.php';
require_once dirname(__FILE__) . '/Get/Instrument/XiGlobalmasterTypeGetInstrument.php';
require_once dirname(__FILE__) . '/Get/Response/XiGlobalmasterTypeGetSecuritiesResponse.php';
require_once dirname(__FILE__) . '/Array/Instrument/XiGlobalmasterTypeArrayOfInstrument.php';
require_once dirname(__FILE__) . '/Instrument/XiGlobalmasterTypeInstrument.php';
require_once dirname(__FILE__) . '/Get/Issuer/XiGlobalmasterTypeGetIssuer.php';
require_once dirname(__FILE__) . '/Get/Response/XiGlobalmasterTypeGetInstrumentsResponse.php';
require_once dirname(__FILE__) . '/Get/Instruments/XiGlobalmasterTypeGetInstruments.php';
require_once dirname(__FILE__) . '/Get/Securities/XiGlobalmasterTypeGetSecurities.php';
require_once dirname(__FILE__) . '/Header/XiGlobalmasterTypeHeader.php';
require_once dirname(__FILE__) . '/Security/XiGlobalmasterTypeSecurity.php';
require_once dirname(__FILE__) . '/Array/Security/XiGlobalmasterTypeArrayOfSecurity.php';
require_once dirname(__FILE__) . '/Get/Response/XiGlobalmasterTypeGetSecurityResponse.php';
require_once dirname(__FILE__) . '/Array/Identifier/XiGlobalmasterTypeArrayOfAlternateSecurityIdentifier.php';
require_once dirname(__FILE__) . '/Alternate/Identifier/XiGlobalmasterTypeAlternateSecurityIdentifier.php';
require_once dirname(__FILE__) . '/Custom/Attribute/XiGlobalmasterTypeCustomAttribute.php';
require_once dirname(__FILE__) . '/Array/Attribute/XiGlobalmasterTypeArrayOfCustomAttribute.php';
require_once dirname(__FILE__) . '/Get/Response/XiGlobalmasterTypeGetIssuerResponse.php';
require_once dirname(__FILE__) . '/Array/Issuer/XiGlobalmasterTypeArrayOfIssuer.php';
require_once dirname(__FILE__) . '/Get/Identifiers/XiGlobalmasterTypeGetMasterByIdentifiers.php';
require_once dirname(__FILE__) . '/Record/XiGlobalmasterTypeRecord.php';
require_once dirname(__FILE__) . '/Array/Record/XiGlobalmasterTypeArrayOfRecord.php';
require_once dirname(__FILE__) . '/Get/Response/XiGlobalmasterTypeGetMasterByIdentifiersResponse.php';
require_once dirname(__FILE__) . '/Get/Exchange/XiGlobalmasterTypeGetMasterByExchange.php';
require_once dirname(__FILE__) . '/Get/Changes/XiGlobalmasterTypeGetMasterByExchangeChanges.php';
require_once dirname(__FILE__) . '/Get/Response/XiGlobalmasterTypeGetMasterByExchangeResponse.php';
require_once dirname(__FILE__) . '/Get/Response/XiGlobalmasterTypeGetMasterByIdentifierResponse.php';
require_once dirname(__FILE__) . '/Get/Identifier/XiGlobalmasterTypeGetMasterByIdentifier.php';
require_once dirname(__FILE__) . '/Classification/XiGlobalmasterTypeClassification.php';
require_once dirname(__FILE__) . '/Array/Classification/XiGlobalmasterTypeArrayOfClassification.php';
require_once dirname(__FILE__) . '/Issuer/XiGlobalmasterTypeIssuer.php';
require_once dirname(__FILE__) . '/Get/Issuers/XiGlobalmasterTypeGetIssuers.php';
require_once dirname(__FILE__) . '/Get/Response/XiGlobalmasterTypeGetIssuersResponse.php';
require_once dirname(__FILE__) . '/Get/Response/XiGlobalmasterTypeGetIssuerByCompanyIdentifierResponse.php';
require_once dirname(__FILE__) . '/Get/Identifier/XiGlobalmasterTypeGetIssuerByCompanyIdentifier.php';
require_once dirname(__FILE__) . '/Get/Security/XiGlobalmasterTypeGetSecurity.php';
require_once dirname(__FILE__) . '/Get/XiGlobalmasterServiceGet.php';
require_once dirname(__FILE__) . '/List/XiGlobalmasterServiceList.php';
require_once dirname(__FILE__) . '/XiGlobalmasterClassMap.php';
?>