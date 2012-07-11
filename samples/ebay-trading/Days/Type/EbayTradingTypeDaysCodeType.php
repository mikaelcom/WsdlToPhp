<?php
/**
 * Class file for EbayTradingTypeDaysCodeType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeDaysCodeType
 * @date 04/07/2012
 */
class EbayTradingTypeDaysCodeType extends EbayTradingWsdlClass
{
	/**
	 * Constant for value 'None'
	 * Meta informations :
	 * 	- documentation : Seller does not want to be contacted. Contact hours will not be supported for any days. If contact hours are specified, they will be ignored.
	 * @return string 'None'
	 */
	const VALUE_NONE = 'None';
	/**
	 * Constant for value 'EveryDay'
	 * Meta informations :
	 * 	- documentation : Seller can be contacted any day during the specified contact hours.
	 * @return string 'EveryDay'
	 */
	const VALUE_EVERYDAY = 'EveryDay';
	/**
	 * Constant for value 'Weekdays'
	 * Meta informations :
	 * 	- documentation : Seller can be contacted Monday through Friday during the specified contact hours.
	 * @return string 'Weekdays'
	 */
	const VALUE_WEEKDAYS = 'Weekdays';
	/**
	 * Constant for value 'Weekends'
	 * Meta informations :
	 * 	- documentation : Seller can be contacted Saturday or Sunday during the specified contact hours.
	 * @return string 'Weekends'
	 */
	const VALUE_WEEKENDS = 'Weekends';
	/**
	 * Constant for value 'CustomCode'
	 * Meta informations :
	 * 	- documentation : (out) Reserved for internal or future use.
	 * @return string 'CustomCode'
	 */
	const VALUE_CUSTOMCODE = 'CustomCode';
	/**
	 * Constructor
	 * @return EbayTradingTypeDaysCodeType
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
		return in_array($_value,array(self::VALUE_NONE,self::VALUE_EVERYDAY,self::VALUE_WEEKDAYS,self::VALUE_WEEKENDS,self::VALUE_CUSTOMCODE));
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