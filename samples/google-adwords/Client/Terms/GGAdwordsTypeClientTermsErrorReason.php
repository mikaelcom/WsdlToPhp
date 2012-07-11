<?php
/**
 * Class file for GGAdwordsTypeClientTermsErrorReason
 * @date 03/07/2012
 */
/**
 * Class GGAdwordsTypeClientTermsErrorReason
 * @date 03/07/2012
 */
class GGAdwordsTypeClientTermsErrorReason extends GGAdwordsWsdlClass
{
	/**
	 * Constant for value 'INCOMPLETE_SIGNUP_CURRENT_ADWORDS_TNC_NOT_AGREED'
	 * Meta informations :
	 * 	- documentation : Customer has not agreed to the latest AdWords Terms & Conditions
	 * @return string 'INCOMPLETE_SIGNUP_CURRENT_ADWORDS_TNC_NOT_AGREED'
	 */
	const VALUE_INCOMPLETE_SIGNUP_CURRENT_ADWORDS_TNC_NOT_AGREED = 'INCOMPLETE_SIGNUP_CURRENT_ADWORDS_TNC_NOT_AGREED';
	/**
	 * Constructor
	 * @return GGAdwordsTypeClientTermsErrorReason
	 */
	public function __construct()
	{
		parent::__construct(array());
	}
	/**
	 * Return true if value is allowed
	 * @param string value
	 * @return bool true|false
	 */
	public static function valueIsValid($_value)
	{
		return in_array($_value,array(self::VALUE_INCOMPLETE_SIGNUP_CURRENT_ADWORDS_TNC_NOT_AGREED));
	}
	/**
	 * Method returning the class name
	 * @return string __CLASS__
	 */
	public function __toString()
	{
		return __CLASS__;
	}
}
?>