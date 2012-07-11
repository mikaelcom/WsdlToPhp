<?php
/**
 * Class file for XiEarningsCalendarTypeQuarterTypes
 * @date 08/07/2012
 */
/**
 * Class XiEarningsCalendarTypeQuarterTypes
 * @date 08/07/2012
 */
class XiEarningsCalendarTypeQuarterTypes extends XiEarningsCalendarWsdlClass
{
	/**
	 * Constant for value 'Q1'
	 * @return string 'Q1'
	 */
	const VALUE_Q1 = 'Q1';
	/**
	 * Constant for value 'Q2'
	 * @return string 'Q2'
	 */
	const VALUE_Q2 = 'Q2';
	/**
	 * Constant for value 'Q3'
	 * @return string 'Q3'
	 */
	const VALUE_Q3 = 'Q3';
	/**
	 * Constant for value 'Q4'
	 * @return string 'Q4'
	 */
	const VALUE_Q4 = 'Q4';
	/**
	 * Constructor
	 * @return XiEarningsCalendarTypeQuarterTypes
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
		return in_array($_value,array(self::VALUE_Q1,self::VALUE_Q2,self::VALUE_Q3,self::VALUE_Q4));
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