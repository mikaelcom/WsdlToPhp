<?php
/**
 * Class file for XiHoldingsTypeOptionTypes
 * @date 08/07/2012
 */
/**
 * Class XiHoldingsTypeOptionTypes
 * @date 08/07/2012
 */
class XiHoldingsTypeOptionTypes extends XiHoldingsWsdlClass
{
	/**
	 * Constant for value 'Call'
	 * @return string 'Call'
	 */
	const VALUE_CALL = 'Call';
	/**
	 * Constant for value 'Put'
	 * @return string 'Put'
	 */
	const VALUE_PUT = 'Put';
	/**
	 * Constant for value 'None'
	 * @return string 'None'
	 */
	const VALUE_NONE = 'None';
	/**
	 * Constructor
	 * @return XiHoldingsTypeOptionTypes
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
		return in_array($_value,array(self::VALUE_CALL,self::VALUE_PUT,self::VALUE_NONE));
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