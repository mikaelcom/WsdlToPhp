<?php
/**
 * Class file for XiEnergyTypeOptionTypes
 * @date 08/07/2012
 */
/**
 * Class XiEnergyTypeOptionTypes
 * @date 08/07/2012
 */
class XiEnergyTypeOptionTypes extends XiEnergyWsdlClass
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
	 * Constructor
	 * @return XiEnergyTypeOptionTypes
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
		return in_array($_value,array(self::VALUE_CALL,self::VALUE_PUT));
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