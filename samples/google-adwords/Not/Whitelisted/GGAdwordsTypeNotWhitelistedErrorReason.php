<?php
/**
 * Class file for GGAdwordsTypeNotWhitelistedErrorReason
 * @date 03/07/2012
 */
/**
 * Class GGAdwordsTypeNotWhitelistedErrorReason
 * @date 03/07/2012
 */
class GGAdwordsTypeNotWhitelistedErrorReason extends GGAdwordsWsdlClass
{
	/**
	 * Constant for value 'CUSTOMER_NOT_WHITELISTED_FOR_API'
	 * Meta informations :
	 * 	- documentation : Customer is not whitelisted for accessing the API.
	 * @return string 'CUSTOMER_NOT_WHITELISTED_FOR_API'
	 */
	const VALUE_CUSTOMER_NOT_WHITELISTED_FOR_API = 'CUSTOMER_NOT_WHITELISTED_FOR_API';
	/**
	 * Constructor
	 * @return GGAdwordsTypeNotWhitelistedErrorReason
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
		return in_array($_value,array(self::VALUE_CUSTOMER_NOT_WHITELISTED_FOR_API));
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