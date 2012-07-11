<?php
/**
 * Class file for GGAdwordsTypeRequestErrorReason
 * @date 03/07/2012
 */
/**
 * Class GGAdwordsTypeRequestErrorReason
 * @date 03/07/2012
 */
class GGAdwordsTypeRequestErrorReason extends GGAdwordsWsdlClass
{
	/**
	 * Constant for value 'UNKNOWN'
	 * Meta informations :
	 * 	- documentation : Error reason is unknown.
	 * @return string 'UNKNOWN'
	 */
	const VALUE_UNKNOWN = 'UNKNOWN';
	/**
	 * Constant for value 'INVALID_INPUT'
	 * Meta informations :
	 * 	- documentation : Invalid input.
	 * @return string 'INVALID_INPUT'
	 */
	const VALUE_INVALID_INPUT = 'INVALID_INPUT';
	/**
	 * Constructor
	 * @return GGAdwordsTypeRequestErrorReason
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
		return in_array($_value,array(self::VALUE_UNKNOWN,self::VALUE_INVALID_INPUT));
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