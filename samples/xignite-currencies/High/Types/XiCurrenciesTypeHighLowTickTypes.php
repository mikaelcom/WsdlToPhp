<?php
/**
 * Class file for XiCurrenciesTypeHighLowTickTypes
 * @date 08/07/2012
 */
/**
 * Class XiCurrenciesTypeHighLowTickTypes
 * @date 08/07/2012
 */
class XiCurrenciesTypeHighLowTickTypes extends XiCurrenciesWsdlClass
{
	/**
	 * Constant for value 'High'
	 * @return string 'High'
	 */
	const VALUE_HIGH = 'High';
	/**
	 * Constant for value 'Low'
	 * @return string 'Low'
	 */
	const VALUE_LOW = 'Low';
	/**
	 * Constructor
	 * @return XiCurrenciesTypeHighLowTickTypes
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
		return in_array($_value,array(self::VALUE_HIGH,self::VALUE_LOW));
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