<?php
/**
 * ClassMap 
 * @date 08/07/2012
 */
/**
 * ClassMap
 * @date 08/07/2012
 */
class SOTelVerificationClassMap
{
	final public static function classMap()
	{
		return array (
  'PlaceCall' => 'SOTelVerificationTypePlaceCall',
  'PlaceCallResponse' => 'SOTelVerificationTypePlaceCallResponse',
  'TelephoneInfo' => 'SOTelVerificationTypeTelephoneInfo',
  'ProviderInfo' => 'SOTelVerificationTypeProviderInfo',
  'ContactInfo' => 'SOTelVerificationTypeContactInfo',
  'Error' => 'SOTelVerificationTypeError',
  'SendSMS' => 'SOTelVerificationTypeSendSMS',
  'SendSMSResponse' => 'SOTelVerificationTypeSendSMSResponse',
  'GetExchangeInfo' => 'SOTelVerificationTypeGetExchangeInfo',
  'GetExchangeInfoResponse' => 'SOTelVerificationTypeGetExchangeInfoResponse',
  'GetPhoneInfo' => 'SOTelVerificationTypeGetPhoneInfo',
  'GetPhoneInfoResponse' => 'SOTelVerificationTypeGetPhoneInfoResponse',
  'GetTransactionDetail' => 'SOTelVerificationTypeGetTransactionDetail',
  'GetTransactionDetailResponse' => 'SOTelVerificationTypeGetTransactionDetailResponse',
  'TransactionInfo' => 'SOTelVerificationTypeTransactionInfo',
);
	}
}
?>