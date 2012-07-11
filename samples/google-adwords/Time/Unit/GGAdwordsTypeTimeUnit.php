<?php
/**
 * Class file for GGAdwordsTypeTimeUnit
 * @date 03/07/2012
 */
/**
 * Class GGAdwordsTypeTimeUnit
 * @date 03/07/2012
 */
class GGAdwordsTypeTimeUnit extends GGAdwordsWsdlClass
{
	/**
	 * Constant for value 'MINUTE'
	 * @return string 'MINUTE'
	 */
	const VALUE_MINUTE = 'MINUTE';
	/**
	 * Constant for value 'HOUR'
	 * @return string 'HOUR'
	 */
	const VALUE_HOUR = 'HOUR';
	/**
	 * Constant for value 'DAY'
	 * @return string 'DAY'
	 */
	const VALUE_DAY = 'DAY';
	/**
	 * Constant for value 'WEEK'
	 * @return string 'WEEK'
	 */
	const VALUE_WEEK = 'WEEK';
	/**
	 * Constant for value 'MONTH'
	 * @return string 'MONTH'
	 */
	const VALUE_MONTH = 'MONTH';
	/**
	 * Constant for value 'LIFETIME'
	 * @return string 'LIFETIME'
	 */
	const VALUE_LIFETIME = 'LIFETIME';
	/**
	 * Constructor
	 * @return GGAdwordsTypeTimeUnit
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
		return in_array($_value,array(self::VALUE_MINUTE,self::VALUE_HOUR,self::VALUE_DAY,self::VALUE_WEEK,self::VALUE_MONTH,self::VALUE_LIFETIME));
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