<?php
/**
 * Class file for AmazonFPSTypeTimeUnit
 * @date 10/07/2012
 */
/**
 * Class AmazonFPSTypeTimeUnit
 * @date 10/07/2012
 */
class AmazonFPSTypeTimeUnit extends AmazonFPSWsdlClass
{
	/**
	 * Constant for value 'day'
	 * @return string 'day'
	 */
	const VALUE_DAY = 'day';
	/**
	 * Constant for value 'month'
	 * @return string 'month'
	 */
	const VALUE_MONTH = 'month';
	/**
	 * Constant for value 'week'
	 * @return string 'week'
	 */
	const VALUE_WEEK = 'week';
	/**
	 * Constant for value 'year'
	 * @return string 'year'
	 */
	const VALUE_YEAR = 'year';
	/**
	 * Constructor
	 * @return AmazonFPSTypeTimeUnit
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
		return in_array($_value,array(self::VALUE_DAY,self::VALUE_MONTH,self::VALUE_WEEK,self::VALUE_YEAR));
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