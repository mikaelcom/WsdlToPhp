<?php
/**
 * Class file for GGAdwordsTypeAuthenticationErrorReason
 * @date 03/07/2012
 */
/**
 * Class GGAdwordsTypeAuthenticationErrorReason
 * @date 03/07/2012
 */
class GGAdwordsTypeAuthenticationErrorReason extends GGAdwordsWsdlClass
{
	/**
	 * Constant for value 'AUTHENTICATION_FAILED'
	 * Meta informations :
	 * 	- documentation : Authentication of the request failed.
	 * @return string 'AUTHENTICATION_FAILED'
	 */
	const VALUE_AUTHENTICATION_FAILED = 'AUTHENTICATION_FAILED';
	/**
	 * Constant for value 'CLIENT_CUSTOMER_ID_IS_REQUIRED'
	 * Meta informations :
	 * 	- documentation : Client Customer Id is required if CustomerIdMode is set to CLIENT_EXTERNAL_CUSTOMER_ID.
	 * @return string 'CLIENT_CUSTOMER_ID_IS_REQUIRED'
	 */
	const VALUE_CLIENT_CUSTOMER_ID_IS_REQUIRED = 'CLIENT_CUSTOMER_ID_IS_REQUIRED';
	/**
	 * Constant for value 'CLIENT_EMAIL_REQUIRED'
	 * Meta informations :
	 * 	- documentation : Client Email is required if CustomerIdMode is set to CLIENT_EXTERNAL_EMAIL_FIELD.
	 * @return string 'CLIENT_EMAIL_REQUIRED'
	 */
	const VALUE_CLIENT_EMAIL_REQUIRED = 'CLIENT_EMAIL_REQUIRED';
	/**
	 * Constant for value 'CLIENT_CUSTOMER_ID_INVALID'
	 * Meta informations :
	 * 	- documentation : Client customer Id is not a number.
	 * @return string 'CLIENT_CUSTOMER_ID_INVALID'
	 */
	const VALUE_CLIENT_CUSTOMER_ID_INVALID = 'CLIENT_CUSTOMER_ID_INVALID';
	/**
	 * Constant for value 'CLIENT_EMAIL_INVALID'
	 * Meta informations :
	 * 	- documentation : Client customer Id is not a number.
	 * @return string 'CLIENT_EMAIL_INVALID'
	 */
	const VALUE_CLIENT_EMAIL_INVALID = 'CLIENT_EMAIL_INVALID';
	/**
	 * Constant for value 'CLIENT_EMAIL_FAILED_TO_AUTHENTICATE'
	 * Meta informations :
	 * 	- documentation : Client email is not a valid customer email.
	 * @return string 'CLIENT_EMAIL_FAILED_TO_AUTHENTICATE'
	 */
	const VALUE_CLIENT_EMAIL_FAILED_TO_AUTHENTICATE = 'CLIENT_EMAIL_FAILED_TO_AUTHENTICATE';
	/**
	 * Constant for value 'CUSTOMER_NOT_FOUND'
	 * Meta informations :
	 * 	- documentation : No customer found for the customer id provided in the header.
	 * @return string 'CUSTOMER_NOT_FOUND'
	 */
	const VALUE_CUSTOMER_NOT_FOUND = 'CUSTOMER_NOT_FOUND';
	/**
	 * Constant for value 'GOOGLE_ACCOUNT_DELETED'
	 * Meta informations :
	 * 	- documentation : Client's Google Account is deleted.
	 * @return string 'GOOGLE_ACCOUNT_DELETED'
	 */
	const VALUE_GOOGLE_ACCOUNT_DELETED = 'GOOGLE_ACCOUNT_DELETED';
	/**
	 * Constant for value 'GOOGLE_ACCOUNT_COOKIE_INVALID'
	 * Meta informations :
	 * 	- documentation : Google account login token in the cookie is invalid.
	 * @return string 'GOOGLE_ACCOUNT_COOKIE_INVALID'
	 */
	const VALUE_GOOGLE_ACCOUNT_COOKIE_INVALID = 'GOOGLE_ACCOUNT_COOKIE_INVALID';
	/**
	 * Constant for value 'FAILED_TO_AUTHENTICATE_GOOGLE_ACCOUNT'
	 * Meta informations :
	 * 	- documentation : problem occurred during Google account authentication.
	 * @return string 'FAILED_TO_AUTHENTICATE_GOOGLE_ACCOUNT'
	 */
	const VALUE_FAILED_TO_AUTHENTICATE_GOOGLE_ACCOUNT = 'FAILED_TO_AUTHENTICATE_GOOGLE_ACCOUNT';
	/**
	 * Constant for value 'GOOGLE_ACCOUNT_USER_AND_ADS_USER_MISMATCH'
	 * Meta informations :
	 * 	- documentation : The user in the google account login token does not match the UserId in the cookie.
	 * @return string 'GOOGLE_ACCOUNT_USER_AND_ADS_USER_MISMATCH'
	 */
	const VALUE_GOOGLE_ACCOUNT_USER_AND_ADS_USER_MISMATCH = 'GOOGLE_ACCOUNT_USER_AND_ADS_USER_MISMATCH';
	/**
	 * Constant for value 'LOGIN_COOKIE_REQUIRED'
	 * Meta informations :
	 * 	- documentation : Login cookie is required for authentication.
	 * @return string 'LOGIN_COOKIE_REQUIRED'
	 */
	const VALUE_LOGIN_COOKIE_REQUIRED = 'LOGIN_COOKIE_REQUIRED';
	/**
	 * Constant for value 'NOT_ADS_USER'
	 * Meta informations :
	 * 	- documentation : User in the cookie is not a valid Ads user.
	 * @return string 'NOT_ADS_USER'
	 */
	const VALUE_NOT_ADS_USER = 'NOT_ADS_USER';
	/**
	 * Constant for value 'OAUTH_TOKEN_INVALID'
	 * Meta informations :
	 * 	- documentation : Oauth token in the header is not valid.
	 * @return string 'OAUTH_TOKEN_INVALID'
	 */
	const VALUE_OAUTH_TOKEN_INVALID = 'OAUTH_TOKEN_INVALID';
	/**
	 * Constant for value 'OAUTH_TOKEN_EXPIRED'
	 * Meta informations :
	 * 	- documentation : Oauth token in the header has expired.
	 * @return string 'OAUTH_TOKEN_EXPIRED'
	 */
	const VALUE_OAUTH_TOKEN_EXPIRED = 'OAUTH_TOKEN_EXPIRED';
	/**
	 * Constant for value 'OAUTH_TOKEN_DISABLED'
	 * Meta informations :
	 * 	- documentation : Oauth token in the header has been disabled.
	 * @return string 'OAUTH_TOKEN_DISABLED'
	 */
	const VALUE_OAUTH_TOKEN_DISABLED = 'OAUTH_TOKEN_DISABLED';
	/**
	 * Constant for value 'OAUTH_TOKEN_REVOKED'
	 * Meta informations :
	 * 	- documentation : Oauth token in the header has been revoked.
	 * @return string 'OAUTH_TOKEN_REVOKED'
	 */
	const VALUE_OAUTH_TOKEN_REVOKED = 'OAUTH_TOKEN_REVOKED';
	/**
	 * Constant for value 'OAUTH_TOKEN_HEADER_INVALID'
	 * Meta informations :
	 * 	- documentation : Oauth token HTTP header is malformed.
	 * @return string 'OAUTH_TOKEN_HEADER_INVALID'
	 */
	const VALUE_OAUTH_TOKEN_HEADER_INVALID = 'OAUTH_TOKEN_HEADER_INVALID';
	/**
	 * Constant for value 'LOGIN_COOKIE_INVALID'
	 * Meta informations :
	 * 	- documentation : Login cookie is not valid.
	 * @return string 'LOGIN_COOKIE_INVALID'
	 */
	const VALUE_LOGIN_COOKIE_INVALID = 'LOGIN_COOKIE_INVALID';
	/**
	 * Constant for value 'FAILED_TO_RETRIEVE_LOGIN_COOKIE'
	 * Meta informations :
	 * 	- documentation : Failed to decrypt the login cookie.
	 * @return string 'FAILED_TO_RETRIEVE_LOGIN_COOKIE'
	 */
	const VALUE_FAILED_TO_RETRIEVE_LOGIN_COOKIE = 'FAILED_TO_RETRIEVE_LOGIN_COOKIE';
	/**
	 * Constant for value 'USER_ID_INVALID'
	 * Meta informations :
	 * 	- documentation : User Id in the header is not a valid id.
	 * @return string 'USER_ID_INVALID'
	 */
	const VALUE_USER_ID_INVALID = 'USER_ID_INVALID';
	/**
	 * Constructor
	 * @return GGAdwordsTypeAuthenticationErrorReason
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
		return in_array($_value,array(self::VALUE_AUTHENTICATION_FAILED,self::VALUE_CLIENT_CUSTOMER_ID_IS_REQUIRED,self::VALUE_CLIENT_EMAIL_REQUIRED,self::VALUE_CLIENT_CUSTOMER_ID_INVALID,self::VALUE_CLIENT_EMAIL_INVALID,self::VALUE_CLIENT_EMAIL_FAILED_TO_AUTHENTICATE,self::VALUE_CUSTOMER_NOT_FOUND,self::VALUE_GOOGLE_ACCOUNT_DELETED,self::VALUE_GOOGLE_ACCOUNT_COOKIE_INVALID,self::VALUE_FAILED_TO_AUTHENTICATE_GOOGLE_ACCOUNT,self::VALUE_GOOGLE_ACCOUNT_USER_AND_ADS_USER_MISMATCH,self::VALUE_LOGIN_COOKIE_REQUIRED,self::VALUE_NOT_ADS_USER,self::VALUE_OAUTH_TOKEN_INVALID,self::VALUE_OAUTH_TOKEN_EXPIRED,self::VALUE_OAUTH_TOKEN_DISABLED,self::VALUE_OAUTH_TOKEN_REVOKED,self::VALUE_OAUTH_TOKEN_HEADER_INVALID,self::VALUE_LOGIN_COOKIE_INVALID,self::VALUE_FAILED_TO_RETRIEVE_LOGIN_COOKIE,self::VALUE_USER_ID_INVALID));
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