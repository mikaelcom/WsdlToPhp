<?php
/**
 * Class file for BingGeoTypeAuthenticationResultCode
 * @date 02/07/2012
 */
/**
 * Class BingGeoTypeAuthenticationResultCode
 * @date 02/07/2012
 */
class BingGeoTypeAuthenticationResultCode extends BingGeoWsdlClass
{
	/**
	 * Constant for value 'None'
	 * @return string 'None'
	 */
	const VALUE_NONE = 'None';
	/**
	 * Constant for value 'NoCredentials'
	 * @return string 'NoCredentials'
	 */
	const VALUE_NOCREDENTIALS = 'NoCredentials';
	/**
	 * Constant for value 'ValidCredentials'
	 * @return string 'ValidCredentials'
	 */
	const VALUE_VALIDCREDENTIALS = 'ValidCredentials';
	/**
	 * Constant for value 'InvalidCredentials'
	 * @return string 'InvalidCredentials'
	 */
	const VALUE_INVALIDCREDENTIALS = 'InvalidCredentials';
	/**
	 * Constant for value 'CredentialsExpired'
	 * @return string 'CredentialsExpired'
	 */
	const VALUE_CREDENTIALSEXPIRED = 'CredentialsExpired';
	/**
	 * Constant for value 'NotAuthorized'
	 * @return string 'NotAuthorized'
	 */
	const VALUE_NOTAUTHORIZED = 'NotAuthorized';
	/**
	 * Constructor
	 * @return BingGeoTypeAuthenticationResultCode
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
		return in_array($_value,array(self::VALUE_NONE,self::VALUE_NOCREDENTIALS,self::VALUE_VALIDCREDENTIALS,self::VALUE_INVALIDCREDENTIALS,self::VALUE_CREDENTIALSEXPIRED,self::VALUE_NOTAUTHORIZED));
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