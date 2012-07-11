<?php
/**
 * Class file for GGAdwordsTypeDatabaseErrorReason
 * @date 03/07/2012
 */
/**
 * Class GGAdwordsTypeDatabaseErrorReason
 * @date 03/07/2012
 */
class GGAdwordsTypeDatabaseErrorReason extends GGAdwordsWsdlClass
{
	/**
	 * Constant for value 'CONCURRENT_MODIFICATION'
	 * Meta informations :
	 * 	- documentation : A concurrency problem occurred as two threads were attempting to modify same object.
	 * @return string 'CONCURRENT_MODIFICATION'
	 */
	const VALUE_CONCURRENT_MODIFICATION = 'CONCURRENT_MODIFICATION';
	/**
	 * Constant for value 'PERMISSION_DENIED'
	 * Meta informations :
	 * 	- documentation : The permission was denied to access an object.
	 * @return string 'PERMISSION_DENIED'
	 */
	const VALUE_PERMISSION_DENIED = 'PERMISSION_DENIED';
	/**
	 * Constant for value 'CAMPAIGN_PRODUCT_NOT_SUPPORTED'
	 * Meta informations :
	 * 	- documentation : Requested campaign belongs to a product that is not supported by the api.
	 * @return string 'CAMPAIGN_PRODUCT_NOT_SUPPORTED'
	 */
	const VALUE_CAMPAIGN_PRODUCT_NOT_SUPPORTED = 'CAMPAIGN_PRODUCT_NOT_SUPPORTED';
	/**
	 * Constant for value 'DUPLICATE_KEY'
	 * Meta informations :
	 * 	- documentation : a duplicate key was detected upon insertion
	 * @return string 'DUPLICATE_KEY'
	 */
	const VALUE_DUPLICATE_KEY = 'DUPLICATE_KEY';
	/**
	 * Constant for value 'DATABASE_ERROR'
	 * Meta informations :
	 * 	- documentation : a database error has occurred
	 * @return string 'DATABASE_ERROR'
	 */
	const VALUE_DATABASE_ERROR = 'DATABASE_ERROR';
	/**
	 * Constant for value 'UNKNOWN'
	 * Meta informations :
	 * 	- documentation : an unknown error has occurred
	 * @return string 'UNKNOWN'
	 */
	const VALUE_UNKNOWN = 'UNKNOWN';
	/**
	 * Constructor
	 * @return GGAdwordsTypeDatabaseErrorReason
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
		return in_array($_value,array(self::VALUE_CONCURRENT_MODIFICATION,self::VALUE_PERMISSION_DENIED,self::VALUE_CAMPAIGN_PRODUCT_NOT_SUPPORTED,self::VALUE_DUPLICATE_KEY,self::VALUE_DATABASE_ERROR,self::VALUE_UNKNOWN));
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