<?php
/**
 * Class file for XiMoneyMarketsTypeTreasuryCurrencyTypes
 * @date 08/07/2012
 */
/**
 * Class XiMoneyMarketsTypeTreasuryCurrencyTypes
 * @date 08/07/2012
 */
class XiMoneyMarketsTypeTreasuryCurrencyTypes extends XiMoneyMarketsWsdlClass
{
	/**
	 * Constant for value 'USD'
	 * @return string 'USD'
	 */
	const VALUE_USD = 'USD';
	/**
	 * Constructor
	 * @return XiMoneyMarketsTypeTreasuryCurrencyTypes
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
		return in_array($_value,array(self::VALUE_USD));
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