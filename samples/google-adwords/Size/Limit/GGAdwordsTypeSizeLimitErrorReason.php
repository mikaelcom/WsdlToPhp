<?php
/**
 * Class file for GGAdwordsTypeSizeLimitErrorReason
 * @date 03/07/2012
 */
/**
 * Class GGAdwordsTypeSizeLimitErrorReason
 * @date 03/07/2012
 */
class GGAdwordsTypeSizeLimitErrorReason extends GGAdwordsWsdlClass
{
	/**
	 * Constant for value 'REQUEST_SIZE_LIMIT_EXCEEDED'
	 * Meta informations :
	 * 	- documentation : The number of entries in the request exceeds the system limit.
	 * @return string 'REQUEST_SIZE_LIMIT_EXCEEDED'
	 */
	const VALUE_REQUEST_SIZE_LIMIT_EXCEEDED = 'REQUEST_SIZE_LIMIT_EXCEEDED';
	/**
	 * Constant for value 'RESPONSE_SIZE_LIMIT_EXCEEDED'
	 * Meta informations :
	 * 	- documentation : The number of entries in the response exceeds the system limit.
	 * @return string 'RESPONSE_SIZE_LIMIT_EXCEEDED'
	 */
	const VALUE_RESPONSE_SIZE_LIMIT_EXCEEDED = 'RESPONSE_SIZE_LIMIT_EXCEEDED';
	/**
	 * Constant for value 'UNKNOWN'
	 * Meta informations :
	 * 	- documentation : <span class="constraint Rejected">Used for return value only. An enumeration could not be processed, typically due to incompatibility with your WSDL version.</span>
	 * @return string 'UNKNOWN'
	 */
	const VALUE_UNKNOWN = 'UNKNOWN';
	/**
	 * Constructor
	 * @return GGAdwordsTypeSizeLimitErrorReason
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
		return in_array($_value,array(self::VALUE_REQUEST_SIZE_LIMIT_EXCEEDED,self::VALUE_RESPONSE_SIZE_LIMIT_EXCEEDED,self::VALUE_UNKNOWN));
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