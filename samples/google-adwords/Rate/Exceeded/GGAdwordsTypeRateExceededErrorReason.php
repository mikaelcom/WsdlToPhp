<?php
/**
 * Class file for GGAdwordsTypeRateExceededErrorReason
 * @date 03/07/2012
 */
/**
 * Class GGAdwordsTypeRateExceededErrorReason
 * @date 03/07/2012
 */
class GGAdwordsTypeRateExceededErrorReason extends GGAdwordsWsdlClass
{
	/**
	 * Constant for value 'RATE_EXCEEDED'
	 * Meta informations :
	 * 	- documentation : Rate exceeded.
	 * @return string 'RATE_EXCEEDED'
	 */
	const VALUE_RATE_EXCEEDED = 'RATE_EXCEEDED';
	/**
	 * Constructor
	 * @return GGAdwordsTypeRateExceededErrorReason
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
		return in_array($_value,array(self::VALUE_RATE_EXCEEDED));
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