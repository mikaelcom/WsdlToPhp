<?php
/**
 * Class file for GGAdwordsTypeQuotaCheckErrorReason
 * @date 03/07/2012
 */
/**
 * Class GGAdwordsTypeQuotaCheckErrorReason
 * @date 03/07/2012
 */
class GGAdwordsTypeQuotaCheckErrorReason extends GGAdwordsWsdlClass
{
	/**
	 * Constant for value 'INVALID_TOKEN_HEADER'
	 * Meta informations :
	 * 	- documentation : Customer passed in an invalid token in the header.
	 * @return string 'INVALID_TOKEN_HEADER'
	 */
	const VALUE_INVALID_TOKEN_HEADER = 'INVALID_TOKEN_HEADER';
	/**
	 * Constant for value 'ACCOUNT_DELINQUENT'
	 * Meta informations :
	 * 	- documentation : Customer is marked delinquent.
	 * @return string 'ACCOUNT_DELINQUENT'
	 */
	const VALUE_ACCOUNT_DELINQUENT = 'ACCOUNT_DELINQUENT';
	/**
	 * Constant for value 'ACCOUNT_INACCESSIBLE'
	 * Meta informations :
	 * 	- documentation : Customer is a fraudulent.
	 * @return string 'ACCOUNT_INACCESSIBLE'
	 */
	const VALUE_ACCOUNT_INACCESSIBLE = 'ACCOUNT_INACCESSIBLE';
	/**
	 * Constant for value 'ACCOUNT_INACTIVE'
	 * Meta informations :
	 * 	- documentation : Inactive Account.
	 * @return string 'ACCOUNT_INACTIVE'
	 */
	const VALUE_ACCOUNT_INACTIVE = 'ACCOUNT_INACTIVE';
	/**
	 * Constant for value 'INCOMPLETE_SIGNUP'
	 * Meta informations :
	 * 	- documentation : Signup not complete
	 * @return string 'INCOMPLETE_SIGNUP'
	 */
	const VALUE_INCOMPLETE_SIGNUP = 'INCOMPLETE_SIGNUP';
	/**
	 * Constant for value 'INCOMPLETE_SIGNUP_LATEST_ADWORDS_API_TNC_NOT_AGREED'
	 * Meta informations :
	 * 	- documentation : Latest AdWords API T&C not agreed.
	 * @return string 'INCOMPLETE_SIGNUP_LATEST_ADWORDS_API_TNC_NOT_AGREED'
	 */
	const VALUE_INCOMPLETE_SIGNUP_LATEST_ADWORDS_API_TNC_NOT_AGREED = 'INCOMPLETE_SIGNUP_LATEST_ADWORDS_API_TNC_NOT_AGREED';
	/**
	 * Constant for value 'INCOMPLETE_SIGNUP_NO_BILLING_INFO'
	 * Meta informations :
	 * 	- documentation : No Billing Info.
	 * @return string 'INCOMPLETE_SIGNUP_NO_BILLING_INFO'
	 */
	const VALUE_INCOMPLETE_SIGNUP_NO_BILLING_INFO = 'INCOMPLETE_SIGNUP_NO_BILLING_INFO';
	/**
	 * Constant for value 'INCOMPLETE_SIGNUP_USER_INFO_MISSING'
	 * Meta informations :
	 * 	- documentation : User Info missing.
	 * @return string 'INCOMPLETE_SIGNUP_USER_INFO_MISSING'
	 */
	const VALUE_INCOMPLETE_SIGNUP_USER_INFO_MISSING = 'INCOMPLETE_SIGNUP_USER_INFO_MISSING';
	/**
	 * Constant for value 'INCOMPLETE_SIGNUP_USER_INFO_PENDING'
	 * Meta informations :
	 * 	- documentation : User Info pending.
	 * @return string 'INCOMPLETE_SIGNUP_USER_INFO_PENDING'
	 */
	const VALUE_INCOMPLETE_SIGNUP_USER_INFO_PENDING = 'INCOMPLETE_SIGNUP_USER_INFO_PENDING';
	/**
	 * Constant for value 'INCOMPLETE_SIGNUP_USER_INFO_REJECTED'
	 * Meta informations :
	 * 	- documentation : User Info rejected.
	 * @return string 'INCOMPLETE_SIGNUP_USER_INFO_REJECTED'
	 */
	const VALUE_INCOMPLETE_SIGNUP_USER_INFO_REJECTED = 'INCOMPLETE_SIGNUP_USER_INFO_REJECTED';
	/**
	 * Constant for value 'MONTHLY_BUDGET_REACHED'
	 * Meta informations :
	 * 	- documentation : Monthly budget quota reached.
	 * @return string 'MONTHLY_BUDGET_REACHED'
	 */
	const VALUE_MONTHLY_BUDGET_REACHED = 'MONTHLY_BUDGET_REACHED';
	/**
	 * Constant for value 'QUOTA_EXCEEDED'
	 * Meta informations :
	 * 	- documentation : Monthly budget quota exceeded.
	 * @return string 'QUOTA_EXCEEDED'
	 */
	const VALUE_QUOTA_EXCEEDED = 'QUOTA_EXCEEDED';
	/**
	 * Constructor
	 * @return GGAdwordsTypeQuotaCheckErrorReason
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
		return in_array($_value,array(self::VALUE_INVALID_TOKEN_HEADER,self::VALUE_ACCOUNT_DELINQUENT,self::VALUE_ACCOUNT_INACCESSIBLE,self::VALUE_ACCOUNT_INACTIVE,self::VALUE_INCOMPLETE_SIGNUP,self::VALUE_INCOMPLETE_SIGNUP_LATEST_ADWORDS_API_TNC_NOT_AGREED,self::VALUE_INCOMPLETE_SIGNUP_NO_BILLING_INFO,self::VALUE_INCOMPLETE_SIGNUP_USER_INFO_MISSING,self::VALUE_INCOMPLETE_SIGNUP_USER_INFO_PENDING,self::VALUE_INCOMPLETE_SIGNUP_USER_INFO_REJECTED,self::VALUE_MONTHLY_BUDGET_REACHED,self::VALUE_QUOTA_EXCEEDED));
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