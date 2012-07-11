<?php
/**
 * Class file for XiRealTimeTypeDirectionTypes
 * @date 08/07/2012
 */
/**
 * Class XiRealTimeTypeDirectionTypes
 * @date 08/07/2012
 */
class XiRealTimeTypeDirectionTypes extends XiRealTimeWsdlClass
{
	/**
	 * Constant for value 'Same'
	 * @return string 'Same'
	 */
	const VALUE_SAME = 'Same';
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
	 * Constructor
	 * @return XiRealTimeTypeDirectionTypes
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
		return in_array($_value,array(self::VALUE_SAME,self::VALUE_UP,self::VALUE_DOWN));
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