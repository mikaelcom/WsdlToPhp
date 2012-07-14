<?php
/**
 * Class file for PayPalTypeMobileRecipientCodeType
 * @date 14/07/2012
 */
/**
 * Class PayPalTypeMobileRecipientCodeType
 * @date 14/07/2012
 */
class PayPalTypeMobileRecipientCodeType extends PayPalWsdlClass
{
	/**
	 * Constant for value 'PhoneNumber'
	 * @return string 'PhoneNumber'
	 */
	const VALUE_PHONENUMBER = 'PhoneNumber';
	/**
	 * Constant for value 'EmailAddress'
	 * @return string 'EmailAddress'
	 */
	const VALUE_EMAILADDRESS = 'EmailAddress';
	/**
	 * Constructor
	 * @return PayPalTypeMobileRecipientCodeType
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
		return in_array($_value,array(self::VALUE_PHONENUMBER,self::VALUE_EMAILADDRESS));
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