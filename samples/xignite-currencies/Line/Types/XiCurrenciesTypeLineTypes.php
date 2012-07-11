<?php
/**
 * Class file for XiCurrenciesTypeLineTypes
 * @date 08/07/2012
 */
/**
 * Class XiCurrenciesTypeLineTypes
 * @date 08/07/2012
 */
class XiCurrenciesTypeLineTypes extends XiCurrenciesWsdlClass
{
	/**
	 * Constant for value 'Header'
	 * @return string 'Header'
	 */
	const VALUE_HEADER = 'Header';
	/**
	 * Constant for value 'Line'
	 * @return string 'Line'
	 */
	const VALUE_LINE = 'Line';
	/**
	 * Constructor
	 * @return XiCurrenciesTypeLineTypes
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
		return in_array($_value,array(self::VALUE_HEADER,self::VALUE_LINE));
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