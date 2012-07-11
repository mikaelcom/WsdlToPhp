<?php
/**
 * Class file for XiScreenerTypeChangeTypes
 * @date 08/07/2012
 */
/**
 * Class XiScreenerTypeChangeTypes
 * @date 08/07/2012
 */
class XiScreenerTypeChangeTypes extends XiScreenerWsdlClass
{
	/**
	 * Constant for value 'Up'
	 * @return string 'Up'
	 */
	const VALUE_UP = 'Up';
	/**
	 * Constant for value 'Down'
	 * @return string 'Down'
	 */
	const VALUE_DOWN = 'Down';
	/**
	 * Constant for value 'Unchanged'
	 * @return string 'Unchanged'
	 */
	const VALUE_UNCHANGED = 'Unchanged';
	/**
	 * Constructor
	 * @return XiScreenerTypeChangeTypes
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
		return in_array($_value,array(self::VALUE_UP,self::VALUE_DOWN,self::VALUE_UNCHANGED));
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