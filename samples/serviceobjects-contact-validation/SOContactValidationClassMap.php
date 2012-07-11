<?php
/**
 * ClassMap 
 * @date 08/07/2012
 */
/**
 * ClassMap
 * @date 08/07/2012
 */
class SOContactValidationClassMap
{
	final public static function classMap()
	{
		return array (
  'ValidateContact' => 'SOContactValidationTypeValidateContact',
  'ValidateContactResponse' => 'SOContactValidationTypeValidateContactResponse',
  'Contact' => 'SOContactValidationTypeContact',
  'Err' => 'SOContactValidationTypeErr',
  'ValidateContactNoEmailCheck' => 'SOContactValidationTypeValidateContactNoEmailCheck',
  'ValidateContactNoEmailCheckResponse' => 'SOContactValidationTypeValidateContactNoEmailCheckResponse',
  'ValidateContactNoNameToEmailCheck' => 'SOContactValidationTypeValidateContactNoNameToEmailCheck',
  'ValidateContactNoNameToEmailCheckResponse' => 'SOContactValidationTypeValidateContactNoNameToEmailCheckResponse',
  'ValidateContactLite' => 'SOContactValidationTypeValidateContactLite',
  'ValidateContactLiteResponse' => 'SOContactValidationTypeValidateContactLiteResponse',
  'ValidateContactLiteExtraPhone' => 'SOContactValidationTypeValidateContactLiteExtraPhone',
  'ValidateContactLiteExtraPhoneResponse' => 'SOContactValidationTypeValidateContactLiteExtraPhoneResponse',
  'ReturnAllOutcomes' => 'SOContactValidationTypeReturnAllOutcomes',
  'ReturnAllOutcomesResponse' => 'SOContactValidationTypeReturnAllOutcomesResponse',
  'ArrayOfContact' => 'SOContactValidationTypeArrayOfContact',
);
	}
}
?>