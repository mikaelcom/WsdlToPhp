<?php
/**
 * Class file for PayPalTypeRecurringFlagType
 * @date 14/07/2012
 */
/**
 * Class PayPalTypeRecurringFlagType
 * @date 14/07/2012
 */
class PayPalTypeRecurringFlagType extends PayPalWsdlClass
{
	/**
	 * Constant for value 'Y'
	 * @return string 'Y'
	 */
	const VALUE_Y = 'Y';
	/**
	 * Constant for value 'y'
	 * @return string 'y'
	 */
	const VALUE_Y_1 = 'y';
	/**
	 * Constructor
	 * @return PayPalTypeRecurringFlagType
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
		return in_array($_value,array(self::VALUE_Y,self::VALUE_Y_1));
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