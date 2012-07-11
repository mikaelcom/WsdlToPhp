<?php
/**
 * AutoloadFile 
 * @date 06/07/2012
 */
/**
 * AutoloadFile
 * @date 06/07/2012
 */
require_once dirname(__FILE__) . '/SPWebPartPagesWsdlClass.php';
require_once dirname(__FILE__) . '/Get/Result/SPWebPartPagesTypeGetCustomControlListResult.php';
require_once dirname(__FILE__) . '/Get/Response/SPWebPartPagesTypeGetCustomControlListResponse.php';
require_once dirname(__FILE__) . '/Get/Info/SPWebPartPagesTypeGetSafeAssemblyInfo.php';
require_once dirname(__FILE__) . '/Get/Response/SPWebPartPagesTypeGetSafeAssemblyInfoResponse.php';
require_once dirname(__FILE__) . '/Get/Properties/SPWebPartPagesTypeGetWebPartProperties.php';
require_once dirname(__FILE__) . '/Get/Result/SPWebPartPagesTypeGetSafeAssemblyInfoResult.php';
require_once dirname(__FILE__) . '/Get/List/SPWebPartPagesTypeGetCustomControlList.php';
require_once dirname(__FILE__) . '/Get/Response/SPWebPartPagesTypeGetWebPart2Response.php';
require_once dirname(__FILE__) . '/Add/Part/SPWebPartPagesTypeAddWebPart.php';
require_once dirname(__FILE__) . '/Add/Response/SPWebPartPagesTypeAddWebPartToZoneResponse.php';
require_once dirname(__FILE__) . '/Add/Response/SPWebPartPagesTypeAddWebPartResponse.php';
require_once dirname(__FILE__) . '/Get/Part/SPWebPartPagesTypeGetWebPart.php';
require_once dirname(__FILE__) . '/Get/Part2/SPWebPartPagesTypeGetWebPart2.php';
require_once dirname(__FILE__) . '/Get/Response/SPWebPartPagesTypeGetWebPartResponse.php';
require_once dirname(__FILE__) . '/Get/Response/SPWebPartPagesTypeGetWebPartPropertiesResponse.php';
require_once dirname(__FILE__) . '/Get/Result/SPWebPartPagesTypeGetWebPartPropertiesResult.php';
require_once dirname(__FILE__) . '/Delete/Response/SPWebPartPagesTypeDeleteWebPartResponse.php';
require_once dirname(__FILE__) . '/Delete/Part/SPWebPartPagesTypeDeleteWebPart.php';
require_once dirname(__FILE__) . '/Get/Info/SPWebPartPagesTypeGetWebPartPageConnectionInfo.php';
require_once dirname(__FILE__) . '/Get/Response/SPWebPartPagesTypeGetWebPartPageConnectionInfoResponse.php';
require_once dirname(__FILE__) . '/Get/Response/SPWebPartPagesTypeGetWebPartCrossPageCompatibilityResponse.php';
require_once dirname(__FILE__) . '/Get/Compatibility/SPWebPartPagesTypeGetWebPartCrossPageCompatibility.php';
require_once dirname(__FILE__) . '/Save/Response/SPWebPartPagesTypeSaveWebPart2Response.php';
require_once dirname(__FILE__) . '/Save/Part2/SPWebPartPagesTypeSaveWebPart2.php';
require_once dirname(__FILE__) . '/Get/Response/SPWebPartPagesTypeGetWebPartProperties2Response.php';
require_once dirname(__FILE__) . '/Get/Properties2/SPWebPartPagesTypeGetWebPartProperties2.php';
require_once dirname(__FILE__) . '/Get/Result/SPWebPartPagesTypeGetWebPartProperties2Result.php';
require_once dirname(__FILE__) . '/Save/Part/SPWebPartPagesTypeSaveWebPart.php';
require_once dirname(__FILE__) . '/Save/Response/SPWebPartPagesTypeSaveWebPartResponse.php';
require_once dirname(__FILE__) . '/Add/Zone/SPWebPartPagesTypeAddWebPartToZone.php';
require_once dirname(__FILE__) . '/Execute/Response/SPWebPartPagesTypeExecuteProxyUpdatesResponse.php';
require_once dirname(__FILE__) . '/Get/Response/SPWebPartPagesTypeGetFormCapabilityFromDataSourceControlResponse.php';
require_once dirname(__FILE__) . '/Get/Control/SPWebPartPagesTypeGetFormCapabilityFromDataSourceControl.php';
require_once dirname(__FILE__) . '/Get/Xml/SPWebPartPagesTypeGetExpandedListViewXml.php';
require_once dirname(__FILE__) . '/Get/Response/SPWebPartPagesTypeGetExpandedListViewXmlResponse.php';
require_once dirname(__FILE__) . '/Get/Response/SPWebPartPagesTypeGetDataFromDataSourceControlResponse.php';
require_once dirname(__FILE__) . '/Get/Control/SPWebPartPagesTypeGetDataFromDataSourceControl.php';
require_once dirname(__FILE__) . '/Get/Response/SPWebPartPagesTypeGetXmlDataFromDataSourceResponse.php';
require_once dirname(__FILE__) . '/Get/Source/SPWebPartPagesTypeGetXmlDataFromDataSource.php';
require_once dirname(__FILE__) . '/Get/Page/SPWebPartPagesTypeGetWebPartPage.php';
require_once dirname(__FILE__) . '/Get/Response/SPWebPartPagesTypeGetWebPartPageDocumentResponse.php';
require_once dirname(__FILE__) . '/Get/Response/SPWebPartPagesTypeGetWebPartPageResponse.php';
require_once dirname(__FILE__) . '/Render/Edit/SPWebPartPagesTypeRenderWebPartForEdit.php';
require_once dirname(__FILE__) . '/Render/Response/SPWebPartPagesTypeRenderWebPartForEditResponse.php';
require_once dirname(__FILE__) . '/Fetch/Actions/SPWebPartPagesTypeFetchLegalWorkflowActions.php';
require_once dirname(__FILE__) . '/Fetch/Response/SPWebPartPagesTypeFetchLegalWorkflowActionsResponse.php';
require_once dirname(__FILE__) . '/Get/Data/SPWebPartPagesTypeGetAssemblyMetaData.php';
require_once dirname(__FILE__) . '/Convert/Response/SPWebPartPagesTypeConvertWebPartFormatResponse.php';
require_once dirname(__FILE__) . '/Get/Response/SPWebPartPagesTypeGetAssemblyMetaDataResponse.php';
require_once dirname(__FILE__) . '/Get/Data/SPWebPartPagesTypeGetBindingResourceData.php';
require_once dirname(__FILE__) . '/Execute/Updates/SPWebPartPagesTypeExecuteProxyUpdates.php';
require_once dirname(__FILE__) . '/Get/Response/SPWebPartPagesTypeGetBindingResourceDataResponse.php';
require_once dirname(__FILE__) . '/Convert/Format/SPWebPartPagesTypeConvertWebPartFormat.php';
require_once dirname(__FILE__) . '/Remove/Response/SPWebPartPagesTypeRemoveWorkflowAssociationResponse.php';
require_once dirname(__FILE__) . '/Validate/Response/SPWebPartPagesTypeValidateWorkflowMarkupAndCreateSupportObjectsResponse.php';
require_once dirname(__FILE__) . '/Validate/Objects/SPWebPartPagesTypeValidateWorkflowMarkupAndCreateSupportObjects.php';
require_once dirname(__FILE__) . '/Associate/Markup/SPWebPartPagesTypeAssociateWorkflowMarkup.php';
require_once dirname(__FILE__) . '/Associate/Response/SPWebPartPagesTypeAssociateWorkflowMarkupResponse.php';
require_once dirname(__FILE__) . '/Remove/Association/SPWebPartPagesTypeRemoveWorkflowAssociation.php';
require_once dirname(__FILE__) . '/Get/Document/SPWebPartPagesTypeGetWebPartPageDocument.php';
require_once dirname(__FILE__) . '/Get/SPWebPartPagesServiceGet.php';
require_once dirname(__FILE__) . '/Render/SPWebPartPagesServiceRender.php';
require_once dirname(__FILE__) . '/Fetch/SPWebPartPagesServiceFetch.php';
require_once dirname(__FILE__) . '/Validate/SPWebPartPagesServiceValidate.php';
require_once dirname(__FILE__) . '/Associate/SPWebPartPagesServiceAssociate.php';
require_once dirname(__FILE__) . '/Remove/SPWebPartPagesServiceRemove.php';
require_once dirname(__FILE__) . '/Convert/SPWebPartPagesServiceConvert.php';
require_once dirname(__FILE__) . '/Execute/SPWebPartPagesServiceExecute.php';
require_once dirname(__FILE__) . '/Add/SPWebPartPagesServiceAdd.php';
require_once dirname(__FILE__) . '/Save/SPWebPartPagesServiceSave.php';
require_once dirname(__FILE__) . '/Delete/SPWebPartPagesServiceDelete.php';
require_once dirname(__FILE__) . '/SPWebPartPagesClassMap.php';
?>