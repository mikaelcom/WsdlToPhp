<?php
/**
 * Class file for GGAdwordsTypeStringLengthErrorReason
 * @date 03/07/2012
 */
/**
 * Class GGAdwordsTypeStringLengthErrorReason
 * @date 03/07/2012
 */
class GGAdwordsTypeStringLengthErrorReason extends GGAdwordsWsdlClass
{
	/**
	 * Constant for value 'TOO_SHORT'
	 * @return string 'TOO_SHORT'
	 */
	const VALUE_TOO_SHORT = 'TOO_SHORT';
	/**
	 * Constant for value 'TOO_LONG'
	 * @return string 'TOO_LONG'
	 */
	const VALUE_TOO_LONG = 'TOO_LONG';
	/**
	 * Constructor
	 * @return GGAdwordsTypeStringLengthErrorReason
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
		return in_array($_value,array(self::VALUE_TOO_SHORT,self::VALUE_TOO_LONG));
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