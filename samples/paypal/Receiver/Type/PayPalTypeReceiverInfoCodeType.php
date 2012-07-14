<?php
/**
 * Class file for PayPalTypeReceiverInfoCodeType
 * @date 14/07/2012
 */
/**
 * Class PayPalTypeReceiverInfoCodeType
 * @date 14/07/2012
 */
class PayPalTypeReceiverInfoCodeType extends PayPalWsdlClass
{
	/**
	 * Constant for value 'EmailAddress'
	 * @return string 'EmailAddress'
	 */
	const VALUE_EMAILADDRESS = 'EmailAddress';
	/**
	 * Constant for value 'UserID'
	 * @return string 'UserID'
	 */
	const VALUE_USERID = 'UserID';
	/**
	 * Constant for value 'PhoneNumber'
	 * @return string 'PhoneNumber'
	 */
	const VALUE_PHONENUMBER = 'PhoneNumber';
	/**
	 * Constructor
	 * @return PayPalTypeReceiverInfoCodeType
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
		return in_array($_value,array(self::VALUE_EMAILADDRESS,self::VALUE_USERID,self::VALUE_PHONENUMBER));
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