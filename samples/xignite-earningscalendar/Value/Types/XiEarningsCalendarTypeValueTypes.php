<?php
/**
 * Class file for XiEarningsCalendarTypeValueTypes
 * @date 08/07/2012
 */
/**
 * Class XiEarningsCalendarTypeValueTypes
 * @date 08/07/2012
 */
class XiEarningsCalendarTypeValueTypes extends XiEarningsCalendarWsdlClass
{
	/**
	 * Constant for value 'Numeric'
	 * @return string 'Numeric'
	 */
	const VALUE_NUMERIC = 'Numeric';
	/**
	 * Constant for value 'Text'
	 * @return string 'Text'
	 */
	const VALUE_TEXT = 'Text';
	/**
	 * Constant for value 'Boolean'
	 * @return string 'Boolean'
	 */
	const VALUE_BOOLEAN = 'Boolean';
	/**
	 * Constant for value 'Date'
	 * @return string 'Date'
	 */
	const VALUE_DATE = 'Date';
	/**
	 * Constructor
	 * @return XiEarningsCalendarTypeValueTypes
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
		return in_array($_value,array(self::VALUE_NUMERIC,self::VALUE_TEXT,self::VALUE_BOOLEAN,self::VALUE_DATE));
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