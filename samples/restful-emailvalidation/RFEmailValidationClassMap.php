<?php
/**
 * ClassMap 
 * @date 15/08/2012
 */
/**
 * ClassMap
 * @date 15/08/2012
 */
class RFEmailValidationClassMap
{
	final public static function classMap()
	{
		return array (
  'Validate' => 'RFEmailValidationTypeValidate',
  'ValidateResponse' => 'RFEmailValidationTypeValidateResponse',
  'DefaultFaultContract' => 'RFEmailValidationTypeDefaultFaultContract',
  'char' => 'RFEmailValidationTypeChar',
  'duration' => 'RFEmailValidationTypeDuration',
  'guid' => 'RFEmailValidationTypeGuid',
);
	}
}
?>