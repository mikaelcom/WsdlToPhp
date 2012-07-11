<?php
/**
 * Class file for XiMetalsTypeFixingCurrencyTypes
 * @date 08/07/2012
 */
/**
 * Class XiMetalsTypeFixingCurrencyTypes
 * @date 08/07/2012
 */
class XiMetalsTypeFixingCurrencyTypes extends XiMetalsWsdlClass
{
	/**
	 * Constant for value 'USD'
	 * @return string 'USD'
	 */
	const VALUE_USD = 'USD';
	/**
	 * Constant for value 'GBP'
	 * @return string 'GBP'
	 */
	const VALUE_GBP = 'GBP';
	/**
	 * Constant for value 'EURO'
	 * @return string 'EURO'
	 */
	const VALUE_EURO = 'EURO';
	/**
	 * Constructor
	 * @return XiMetalsTypeFixingCurrencyTypes
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
		return in_array($_value,array(self::VALUE_USD,self::VALUE_GBP,self::VALUE_EURO));
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