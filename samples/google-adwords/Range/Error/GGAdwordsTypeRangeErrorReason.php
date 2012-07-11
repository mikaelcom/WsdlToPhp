<?php
/**
 * Class file for GGAdwordsTypeRangeErrorReason
 * @date 03/07/2012
 */
/**
 * Class GGAdwordsTypeRangeErrorReason
 * @date 03/07/2012
 */
class GGAdwordsTypeRangeErrorReason extends GGAdwordsWsdlClass
{
	/**
	 * Constant for value 'TOO_LOW'
	 * @return string 'TOO_LOW'
	 */
	const VALUE_TOO_LOW = 'TOO_LOW';
	/**
	 * Constant for value 'TOO_HIGH'
	 * @return string 'TOO_HIGH'
	 */
	const VALUE_TOO_HIGH = 'TOO_HIGH';
	/**
	 * Constructor
	 * @return GGAdwordsTypeRangeErrorReason
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
		return in_array($_value,array(self::VALUE_TOO_LOW,self::VALUE_TOO_HIGH));
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