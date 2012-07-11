<?php
/**
 * AutoloadFile 
 * @date 02/07/2012
 */
/**
 * AutoloadFile
 * @date 02/07/2012
 */
require_once dirname(__FILE__) . '/PPInvoiceWsdlClass.php';
require_once dirname(__FILE__) . '/Base/Address/PPInvoiceTypeBaseAddress.php';
require_once dirname(__FILE__) . '/Client/Type/PPInvoiceTypeClientDetailsType.php';
require_once dirname(__FILE__) . '/Currency/Type/PPInvoiceTypeCurrencyType.php';
require_once dirname(__FILE__) . '/Error/Data/PPInvoiceTypeErrorData.php';
require_once dirname(__FILE__) . '/Error/Parameter/PPInvoiceTypeErrorParameter.php';
require_once dirname(__FILE__) . '/Fault/Message/PPInvoiceTypeFaultMessage.php';
require_once dirname(__FILE__) . '/Phone/Type/PPInvoiceTypePhoneNumberType.php';
require_once dirname(__FILE__) . '/Request/Envelope/PPInvoiceTypeRequestEnvelope.php';
require_once dirname(__FILE__) . '/Response/Envelope/PPInvoiceTypeResponseEnvelope.php';
require_once dirname(__FILE__) . '/Business/Type/PPInvoiceTypeBusinessInfoType.php';
require_once dirname(__FILE__) . '/Invoice/Type/PPInvoiceTypeInvoiceItemType.php';
require_once dirname(__FILE__) . '/Invoice/Type/PPInvoiceTypeInvoiceItemListType.php';
require_once dirname(__FILE__) . '/Invoice/Type/PPInvoiceTypeInvoiceType.php';
require_once dirname(__FILE__) . '/Invoice/Type/PPInvoiceTypeInvoiceDetailsType.php';
require_once dirname(__FILE__) . '/Other/Type/PPInvoiceTypeOtherPaymentRefundDetailsType.php';
require_once dirname(__FILE__) . '/Pay/Type/PPInvoiceTypePayPalPaymentRefundDetailsType.php';
require_once dirname(__FILE__) . '/Pay/Type/PPInvoiceTypePayPalPaymentDetailsType.php';
require_once dirname(__FILE__) . '/Other/Type/PPInvoiceTypeOtherPaymentDetailsType.php';
require_once dirname(__FILE__) . '/Payment/Type/PPInvoiceTypePaymentDetailsType.php';
require_once dirname(__FILE__) . '/Date/Type/PPInvoiceTypeDateRangeType.php';
require_once dirname(__FILE__) . '/Search/Type/PPInvoiceTypeSearchParametersType.php';
require_once dirname(__FILE__) . '/Invoice/Type/PPInvoiceTypeInvoiceSummaryType.php';
require_once dirname(__FILE__) . '/Invoice/Type/PPInvoiceTypeInvoiceSummaryListType.php';
require_once dirname(__FILE__) . '/Create/Request/PPInvoiceTypeCreateInvoiceRequest.php';
require_once dirname(__FILE__) . '/Create/Response/PPInvoiceTypeCreateInvoiceResponse.php';
require_once dirname(__FILE__) . '/Send/Request/PPInvoiceTypeSendInvoiceRequest.php';
require_once dirname(__FILE__) . '/Send/Response/PPInvoiceTypeSendInvoiceResponse.php';
require_once dirname(__FILE__) . '/Create/Request/PPInvoiceTypeCreateAndSendInvoiceRequest.php';
require_once dirname(__FILE__) . '/Create/Response/PPInvoiceTypeCreateAndSendInvoiceResponse.php';
require_once dirname(__FILE__) . '/Update/Request/PPInvoiceTypeUpdateInvoiceRequest.php';
require_once dirname(__FILE__) . '/Update/Response/PPInvoiceTypeUpdateInvoiceResponse.php';
require_once dirname(__FILE__) . '/Get/Request/PPInvoiceTypeGetInvoiceDetailsRequest.php';
require_once dirname(__FILE__) . '/Get/Response/PPInvoiceTypeGetInvoiceDetailsResponse.php';
require_once dirname(__FILE__) . '/Cancel/Request/PPInvoiceTypeCancelInvoiceRequest.php';
require_once dirname(__FILE__) . '/Cancel/Response/PPInvoiceTypeCancelInvoiceResponse.php';
require_once dirname(__FILE__) . '/Search/Request/PPInvoiceTypeSearchInvoicesRequest.php';
require_once dirname(__FILE__) . '/Search/Response/PPInvoiceTypeSearchInvoicesResponse.php';
require_once dirname(__FILE__) . '/Mark/Request/PPInvoiceTypeMarkInvoiceAsPaidRequest.php';
require_once dirname(__FILE__) . '/Mark/Response/PPInvoiceTypeMarkInvoiceAsPaidResponse.php';
require_once dirname(__FILE__) . '/Mark/Request/PPInvoiceTypeMarkInvoiceAsRefundedRequest.php';
require_once dirname(__FILE__) . '/Mark/Response/PPInvoiceTypeMarkInvoiceAsRefundedResponse.php';
require_once dirname(__FILE__) . '/Mark/Request/PPInvoiceTypeMarkInvoiceAsUnpaidRequest.php';
require_once dirname(__FILE__) . '/Mark/Response/PPInvoiceTypeMarkInvoiceAsUnpaidResponse.php';
require_once dirname(__FILE__) . '/Payment/Type/PPInvoiceTypePaymentRefundDetailsType.php';
require_once dirname(__FILE__) . '/Ack/Code/PPInvoiceTypeAckCode.php';
require_once dirname(__FILE__) . '/Referrer/Code/PPInvoiceTypeReferrerCode.php';
require_once dirname(__FILE__) . '/Day/Week/PPInvoiceTypeDayOfWeek.php';
require_once dirname(__FILE__) . '/Detail/Code/PPInvoiceTypeDetailLevelCode.php';
require_once dirname(__FILE__) . '/Error/Category/PPInvoiceTypeErrorCategory.php';
require_once dirname(__FILE__) . '/Error/Severity/PPInvoiceTypeErrorSeverity.php';
require_once dirname(__FILE__) . '/Payment/Type/PPInvoiceTypePaymentTermsType.php';
require_once dirname(__FILE__) . '/Payment/Type/PPInvoiceTypePaymentMethodsType.php';
require_once dirname(__FILE__) . '/Status/Type/PPInvoiceTypeStatusType.php';
require_once dirname(__FILE__) . '/Origin/Type/PPInvoiceTypeOriginType.php';
require_once dirname(__FILE__) . '/Actor/Type/PPInvoiceTypeActorType.php';
require_once dirname(__FILE__) . '/Other/Type/PPInvoiceTypeOtherPaymentMethodType.php';
require_once dirname(__FILE__) . '/Create/PPInvoiceServiceCreate.php';
require_once dirname(__FILE__) . '/Send/PPInvoiceServiceSend.php';
require_once dirname(__FILE__) . '/Update/PPInvoiceServiceUpdate.php';
require_once dirname(__FILE__) . '/Get/PPInvoiceServiceGet.php';
require_once dirname(__FILE__) . '/Cancel/PPInvoiceServiceCancel.php';
require_once dirname(__FILE__) . '/Search/PPInvoiceServiceSearch.php';
require_once dirname(__FILE__) . '/Mark/PPInvoiceServiceMark.php';
require_once dirname(__FILE__) . '/PPInvoiceClassMap.php';
?>