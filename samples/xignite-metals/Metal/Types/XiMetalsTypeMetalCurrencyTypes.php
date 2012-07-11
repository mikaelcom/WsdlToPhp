<?php
/**
 * Class file for XiMetalsTypeMetalCurrencyTypes
 * @date 08/07/2012
 */
/**
 * Class XiMetalsTypeMetalCurrencyTypes
 * @date 08/07/2012
 */
class XiMetalsTypeMetalCurrencyTypes extends XiMetalsWsdlClass
{
	/**
	 * Constant for value 'USD'
	 * @return string 'USD'
	 */
	const VALUE_USD = 'USD';
	/**
	 * Constant for value 'AUD'
	 * @return string 'AUD'
	 */
	const VALUE_AUD = 'AUD';
	/**
	 * Constant for value 'CAD'
	 * @return string 'CAD'
	 */
	const VALUE_CAD = 'CAD';
	/**
	 * Constant for value 'CHF'
	 * @return string 'CHF'
	 */
	const VALUE_CHF = 'CHF';
	/**
	 * Constant for value 'EUR'
	 * @return string 'EUR'
	 */
	const VALUE_EUR = 'EUR';
	/**
	 * Constant for value 'GBP'
	 * @return string 'GBP'
	 */
	const VALUE_GBP = 'GBP';
	/**
	 * Constant for value 'HKD'
	 * @return string 'HKD'
	 */
	const VALUE_HKD = 'HKD';
	/**
	 * Constant for value 'ZAR'
	 * @return string 'ZAR'
	 */
	const VALUE_ZAR = 'ZAR';
	/**
	 * Constructor
	 * @return XiMetalsTypeMetalCurrencyTypes
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
		return in_array($_value,array(self::VALUE_USD,self::VALUE_AUD,self::VALUE_CAD,self::VALUE_CHF,self::VALUE_EUR,self::VALUE_GBP,self::VALUE_HKD,self::VALUE_ZAR));
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