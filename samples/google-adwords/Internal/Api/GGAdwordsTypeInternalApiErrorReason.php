<?php
/**
 * Class file for GGAdwordsTypeInternalApiErrorReason
 * @date 03/07/2012
 */
/**
 * Class GGAdwordsTypeInternalApiErrorReason
 * @date 03/07/2012
 */
class GGAdwordsTypeInternalApiErrorReason extends GGAdwordsWsdlClass
{
	/**
	 * Constant for value 'UNEXPECTED_INTERNAL_API_ERROR'
	 * Meta informations :
	 * 	- documentation : API encountered an unexpected internal error.
	 * @return string 'UNEXPECTED_INTERNAL_API_ERROR'
	 */
	const VALUE_UNEXPECTED_INTERNAL_API_ERROR = 'UNEXPECTED_INTERNAL_API_ERROR';
	/**
	 * Constant for value 'UNKNOWN'
	 * Meta informations :
	 * 	- documentation : The cause of the error is not known or only defined in newer versions.
	 * @return string 'UNKNOWN'
	 */
	const VALUE_UNKNOWN = 'UNKNOWN';
	/**
	 * Constructor
	 * @return GGAdwordsTypeInternalApiErrorReason
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
		return in_array($_value,array(self::VALUE_UNEXPECTED_INTERNAL_API_ERROR,self::VALUE_UNKNOWN));
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