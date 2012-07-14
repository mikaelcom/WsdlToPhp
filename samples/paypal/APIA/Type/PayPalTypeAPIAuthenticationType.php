<?php
/**
 * Class file for PayPalTypeAPIAuthenticationType
 * @date 14/07/2012
 */
/**
 * Class PayPalTypeAPIAuthenticationType
 * @date 14/07/2012
 */
class PayPalTypeAPIAuthenticationType extends PayPalWsdlClass
{
	/**
	 * Constant for value 'Auth-None'
	 * @return string 'Auth-None'
	 */
	const VALUE_AUTH_NONE = 'Auth-None';
	/**
	 * Constant for value 'Cert'
	 * @return string 'Cert'
	 */
	const VALUE_CERT = 'Cert';
	/**
	 * Constant for value 'Sign'
	 * @return string 'Sign'
	 */
	const VALUE_SIGN = 'Sign';
	/**
	 * Constructor
	 * @return PayPalTypeAPIAuthenticationType
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
		return in_array($_value,array(self::VALUE_AUTH_NONE,self::VALUE_CERT,self::VALUE_SIGN));
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