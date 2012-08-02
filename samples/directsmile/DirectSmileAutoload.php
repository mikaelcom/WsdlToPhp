<?php
/**
 * AutoloadFile 
 * @date 02/08/2012
 */
/**
 * AutoloadFile
 * @date 02/08/2012
 */
require_once dirname(__FILE__) . '/DirectSmileWsdlClass.php';
require_once dirname(__FILE__) . '/Start/Prio/DirectSmileTypeStartDocPrio.php';
require_once dirname(__FILE__) . '/Start/Response/DirectSmileTypeStartDocResponse.php';
require_once dirname(__FILE__) . '/Start/Doc/DirectSmileTypeStartDoc.php';
require_once dirname(__FILE__) . '/Get/Response/DirectSmileTypeGetAvailableDocListAuthResponse.php';
require_once dirname(__FILE__) . '/Start/Response/DirectSmileTypeStartDocPrioResponse.php';
require_once dirname(__FILE__) . '/Start/DSM/DirectSmileTypeStartDocDSM.php';
require_once dirname(__FILE__) . '/Restart/Response/DirectSmileTypeRestartJobResponse.php';
require_once dirname(__FILE__) . '/Restart/Job/DirectSmileTypeRestartJob.php';
require_once dirname(__FILE__) . '/Start/Response/DirectSmileTypeStartDocDSMResponse.php';
require_once dirname(__FILE__) . '/Get/Auth/DirectSmileTypeGetAvailableDocListAuth.php';
require_once dirname(__FILE__) . '/Get/Response/DirectSmileTypeGetAvailableDocListDSMResponse.php';
require_once dirname(__FILE__) . '/Get/Response/DirectSmileTypeGetAvailableSetListXMLAuthResponse.php';
require_once dirname(__FILE__) . '/Get/Auth/DirectSmileTypeGetAvailableSetListXMLAuth.php';
require_once dirname(__FILE__) . '/Get/Response/DirectSmileTypeGetAvailableSetListXMLResponse.php';
require_once dirname(__FILE__) . '/Get/XML/DirectSmileTypeGetAvailableSetListXML.php';
require_once dirname(__FILE__) . '/Get/XMLDSM/DirectSmileTypeGetAvailableSetListXMLDSM.php';
require_once dirname(__FILE__) . '/Get/Response/DirectSmileTypeGetAvailableSetListXMLDSMResponse.php';
require_once dirname(__FILE__) . '/Get/DSM/DirectSmileTypeGetAvailableDocListDSM.php';
require_once dirname(__FILE__) . '/Get/Response/DirectSmileTypeGetAvailableDocListResponse.php';
require_once dirname(__FILE__) . '/Get/List/DirectSmileTypeGetAvailableDocList.php';
require_once dirname(__FILE__) . '/Delete/ID/DirectSmileTypeDeleteDocOrderByDocID.php';
require_once dirname(__FILE__) . '/Delete/Response/DirectSmileTypeDeleteDocOrderByDocIDResponse.php';
require_once dirname(__FILE__) . '/Getd/Url/DirectSmileTypeGetdHttUrl.php';
require_once dirname(__FILE__) . '/Get/Response/DirectSmileTypeGetAvailableDhttListAuthResponse.php';
require_once dirname(__FILE__) . '/Get/Auth/DirectSmileTypeGetAvailableDhttListAuth.php';
require_once dirname(__FILE__) . '/Get/Response/DirectSmileTypeGetAvailableDhttListResponse.php';
require_once dirname(__FILE__) . '/Getd/Response/DirectSmileTypeGetdHttUrlResponse.php';
require_once dirname(__FILE__) . '/Get/Attributes/DirectSmileTypeGetDocAttributes.php';
require_once dirname(__FILE__) . '/Get/Response/DirectSmileTypeGetGeneratorSystemInfoResponse.php';
require_once dirname(__FILE__) . '/Get/Info/DirectSmileTypeGetGeneratorSystemInfo.php';
require_once dirname(__FILE__) . '/Get/Response/DirectSmileTypeGetDocAttributesResponse.php';
require_once dirname(__FILE__) . '/Get/List/DirectSmileTypeGetAvailableDhttList.php';
require_once dirname(__FILE__) . '/Get/Response/DirectSmileTypeGetDocDataInterfaceURLResponse.php';
require_once dirname(__FILE__) . '/Get/Response/DirectSmileTypeGetDocStatusResponse.php';
require_once dirname(__FILE__) . '/Get/Status/DirectSmileTypeGetDocStatus.php';
require_once dirname(__FILE__) . '/Delete/Response/DirectSmileTypeDeleteDocOrderByDocIDDSMResponse.php';
require_once dirname(__FILE__) . '/Delete/IDDSM/DirectSmileTypeDeleteDocOrderByDocIDDSM.php';
require_once dirname(__FILE__) . '/Get/DSM/DirectSmileTypeGetDocStatusDSM.php';
require_once dirname(__FILE__) . '/Get/Response/DirectSmileTypeGetDocStatusDSMResponse.php';
require_once dirname(__FILE__) . '/Get/URL/DirectSmileTypeGetDocDataInterfaceURL.php';
require_once dirname(__FILE__) . '/Send/Response/DirectSmileTypeSendEmailTemplateResponse.php';
require_once dirname(__FILE__) . '/Send/Template/DirectSmileTypeSendEmailTemplate.php';
require_once dirname(__FILE__) . '/Get/Response/DirectSmileTypeGetAvailableSetListDSMResponse.php';
require_once dirname(__FILE__) . '/Get/DSM/DirectSmileTypeGetAvailableSetListDSM.php';
require_once dirname(__FILE__) . '/Get/Response/DirectSmileTypeGetImageUrlAuthResponse.php';
require_once dirname(__FILE__) . '/Get/Auth/DirectSmileTypeGetImageUrlAuth.php';
require_once dirname(__FILE__) . '/Get/Response/DirectSmileTypeGetImageUrlResponse.php';
require_once dirname(__FILE__) . '/Get/Url/DirectSmileTypeGetImageUrl.php';
require_once dirname(__FILE__) . '/Get/DSM/DirectSmileTypeGetImageUrlDSM.php';
require_once dirname(__FILE__) . '/Get/Response/DirectSmileTypeGetImageUrlDSMResponse.php';
require_once dirname(__FILE__) . '/Delete/ID/DirectSmileTypeDeleteAllByAcccountID.php';
require_once dirname(__FILE__) . '/Delete/Response/DirectSmileTypeDeleteJobByOrderIDResponse.php';
require_once dirname(__FILE__) . '/Delete/ID/DirectSmileTypeDeleteJobByOrderID.php';
require_once dirname(__FILE__) . '/Get/Response/DirectSmileTypeGetImageResponse.php';
require_once dirname(__FILE__) . '/Get/Image/DirectSmileTypeGetImage.php';
require_once dirname(__FILE__) . '/Authenticate/DSM/DirectSmileTypeAuthenticateDSM.php';
require_once dirname(__FILE__) . '/Authenticate/Response/DirectSmileTypeAuthenticateResponse.php';
require_once dirname(__FILE__) . '/Authenticate/DirectSmileTypeAuthenticate.php';
require_once dirname(__FILE__) . '/Get/Response/DirectSmileTypeGetInterfaceVersionResponse.php';
require_once dirname(__FILE__) . '/Authenticate/Response/DirectSmileTypeAuthenticateDSMResponse.php';
require_once dirname(__FILE__) . '/Get/Code/DirectSmileTypeGetAuthenticationCode.php';
require_once dirname(__FILE__) . '/Get/Response/DirectSmileTypeGetAccountInfoDSMResponse.php';
require_once dirname(__FILE__) . '/Get/DSM/DirectSmileTypeGetAccountInfoDSM.php';
require_once dirname(__FILE__) . '/Get/Response/DirectSmileTypeGetAuthenticationCodeResponse.php';
require_once dirname(__FILE__) . '/Delete/Response/DirectSmileTypeDeleteAllByAcccountIDResponse.php';
require_once dirname(__FILE__) . '/Cancel/DSM/DirectSmileTypeCancelJobOrderDSM.php';
require_once dirname(__FILE__) . '/Get/DSM/DirectSmileTypeGetJobStatusPercentDSM.php';
require_once dirname(__FILE__) . '/Get/Response/DirectSmileTypeGetJobStatusDSMResponse.php';
require_once dirname(__FILE__) . '/Get/DSM/DirectSmileTypeGetJobStatusDSM.php';
require_once dirname(__FILE__) . '/Get/Response/DirectSmileTypeGetJobStatusAuthResponse.php';
require_once dirname(__FILE__) . '/Get/Response/DirectSmileTypeGetJobStatusPercentDSMResponse.php';
require_once dirname(__FILE__) . '/Get/List/DirectSmileTypeGetAvailableSetList.php';
require_once dirname(__FILE__) . '/Get/Response/DirectSmileTypeGetAvailableSetListAuthResponse.php';
require_once dirname(__FILE__) . '/Get/Auth/DirectSmileTypeGetAvailableSetListAuth.php';
require_once dirname(__FILE__) . '/Get/Response/DirectSmileTypeGetAvailableSetListResponse.php';
require_once dirname(__FILE__) . '/Get/Auth/DirectSmileTypeGetJobStatusAuth.php';
require_once dirname(__FILE__) . '/Get/Response/DirectSmileTypeGetJobStatusResponse.php';
require_once dirname(__FILE__) . '/Place/Response/DirectSmileTypePlaceOrderResponse.php';
require_once dirname(__FILE__) . '/Place/Order/DirectSmileTypePlaceOrder.php';
require_once dirname(__FILE__) . '/Cancel/Response/DirectSmileTypeCancelJobOrderDSMResponse.php';
require_once dirname(__FILE__) . '/Place/Auth/DirectSmileTypePlaceOrderAuth.php';
require_once dirname(__FILE__) . '/Place/Response/DirectSmileTypePlaceOrderAuthResponse.php';
require_once dirname(__FILE__) . '/Get/Status/DirectSmileTypeGetJobStatus.php';
require_once dirname(__FILE__) . '/Place/Response/DirectSmileTypePlaceOrderDSMResponse.php';
require_once dirname(__FILE__) . '/Place/DSM/DirectSmileTypePlaceOrderDSM.php';
require_once dirname(__FILE__) . '/Get/Version/DirectSmileTypeGetInterfaceVersion.php';
require_once dirname(__FILE__) . '/Get/DirectSmileServiceGet.php';
require_once dirname(__FILE__) . '/Authenticate/DirectSmileServiceAuthenticate.php';
require_once dirname(__FILE__) . '/Delete/DirectSmileServiceDelete.php';
require_once dirname(__FILE__) . '/Place/DirectSmileServicePlace.php';
require_once dirname(__FILE__) . '/Start/DirectSmileServiceStart.php';
require_once dirname(__FILE__) . '/Restart/DirectSmileServiceRestart.php';
require_once dirname(__FILE__) . '/Send/DirectSmileServiceSend.php';
require_once dirname(__FILE__) . '/Getd/DirectSmileServiceGetd.php';
require_once dirname(__FILE__) . '/DirectSmileClassMap.php';
?>