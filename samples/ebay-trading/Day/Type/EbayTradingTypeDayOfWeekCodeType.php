<?php
/**
 * Class file for EbayTradingTypeDayOfWeekCodeType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeDayOfWeekCodeType
 * @date 04/07/2012
 */
class EbayTradingTypeDayOfWeekCodeType extends EbayTradingWsdlClass
{
	/**
	 * Constant for value 'Sunday'
	 * Meta informations :
	 * 	- documentation : Sunday
	 * @return string 'Sunday'
	 */
	const VALUE_SUNDAY = 'Sunday';
	/**
	 * Constant for value 'Monday'
	 * Meta informations :
	 * 	- documentation : Monday
	 * @return string 'Monday'
	 */
	const VALUE_MONDAY = 'Monday';
	/**
	 * Constant for value 'Tuesday'
	 * Meta informations :
	 * 	- documentation : Tuesday
	 * @return string 'Tuesday'
	 */
	const VALUE_TUESDAY = 'Tuesday';
	/**
	 * Constant for value 'Wednesday'
	 * Meta informations :
	 * 	- documentation : Wednesday
	 * @return string 'Wednesday'
	 */
	const VALUE_WEDNESDAY = 'Wednesday';
	/**
	 * Constant for value 'Thursday'
	 * Meta informations :
	 * 	- documentation : Thursday
	 * @return string 'Thursday'
	 */
	const VALUE_THURSDAY = 'Thursday';
	/**
	 * Constant for value 'Friday'
	 * Meta informations :
	 * 	- documentation : Friday
	 * @return string 'Friday'
	 */
	const VALUE_FRIDAY = 'Friday';
	/**
	 * Constant for value 'Saturday'
	 * Meta informations :
	 * 	- documentation : Saturday
	 * @return string 'Saturday'
	 */
	const VALUE_SATURDAY = 'Saturday';
	/**
	 * Constant for value 'CustomCode'
	 * Meta informations :
	 * 	- documentation : (out) Reserved for internal or future use.
	 * @return string 'CustomCode'
	 */
	const VALUE_CUSTOMCODE = 'CustomCode';
	/**
	 * Constructor
	 * @return EbayTradingTypeDayOfWeekCodeType
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
		return in_array($_value,array(self::VALUE_SUNDAY,self::VALUE_MONDAY,self::VALUE_TUESDAY,self::VALUE_WEDNESDAY,self::VALUE_THURSDAY,self::VALUE_FRIDAY,self::VALUE_SATURDAY,self::VALUE_CUSTOMCODE));
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