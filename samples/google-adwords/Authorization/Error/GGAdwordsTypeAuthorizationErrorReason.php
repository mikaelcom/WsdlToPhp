<?php
/**
 * Class file for GGAdwordsTypeAuthorizationErrorReason
 * @date 03/07/2012
 */
/**
 * Class GGAdwordsTypeAuthorizationErrorReason
 * @date 03/07/2012
 */
class GGAdwordsTypeAuthorizationErrorReason extends GGAdwordsWsdlClass
{
	/**
	 * Constant for value 'UNABLE_TO_AUTHORIZE'
	 * Meta informations :
	 * 	- documentation : Could not complete authorization due to an internal problem.
	 * @return string 'UNABLE_TO_AUTHORIZE'
	 */
	const VALUE_UNABLE_TO_AUTHORIZE = 'UNABLE_TO_AUTHORIZE';
	/**
	 * Constant for value 'NO_ADWORDS_ACCOUNT_FOR_CUSTOMER'
	 * Meta informations :
	 * 	- documentation : Customer has no AdWords account.
	 * @return string 'NO_ADWORDS_ACCOUNT_FOR_CUSTOMER'
	 */
	const VALUE_NO_ADWORDS_ACCOUNT_FOR_CUSTOMER = 'NO_ADWORDS_ACCOUNT_FOR_CUSTOMER';
	/**
	 * Constant for value 'USER_PERMISSION_DENIED'
	 * Meta informations :
	 * 	- documentation : User doesn't have permission to access customer.
	 * @return string 'USER_PERMISSION_DENIED'
	 */
	const VALUE_USER_PERMISSION_DENIED = 'USER_PERMISSION_DENIED';
	/**
	 * Constant for value 'EFFECTIVE_USER_PERMISSION_DENIED'
	 * Meta informations :
	 * 	- documentation : Effective user doesn't have permission to access this customer.
	 * @return string 'EFFECTIVE_USER_PERMISSION_DENIED'
	 */
	const VALUE_EFFECTIVE_USER_PERMISSION_DENIED = 'EFFECTIVE_USER_PERMISSION_DENIED';
	/**
	 * Constant for value 'USER_HAS_READONLY_PERMISSION'
	 * Meta informations :
	 * 	- documentation : User has read-only permission cannot mutate.
	 * @return string 'USER_HAS_READONLY_PERMISSION'
	 */
	const VALUE_USER_HAS_READONLY_PERMISSION = 'USER_HAS_READONLY_PERMISSION';
	/**
	 * Constant for value 'NO_CUSTOMER_FOUND'
	 * Meta informations :
	 * 	- documentation : No customer found.
	 * @return string 'NO_CUSTOMER_FOUND'
	 */
	const VALUE_NO_CUSTOMER_FOUND = 'NO_CUSTOMER_FOUND';
	/**
	 * Constructor
	 * @return GGAdwordsTypeAuthorizationErrorReason
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
		return in_array($_value,array(self::VALUE_UNABLE_TO_AUTHORIZE,self::VALUE_NO_ADWORDS_ACCOUNT_FOR_CUSTOMER,self::VALUE_USER_PERMISSION_DENIED,self::VALUE_EFFECTIVE_USER_PERMISSION_DENIED,self::VALUE_USER_HAS_READONLY_PERMISSION,self::VALUE_NO_CUSTOMER_FOUND));
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