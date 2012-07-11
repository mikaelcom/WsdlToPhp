<?php
/**
 * Class file for XiSecurityTypeVariationTypes
 * @date 08/07/2012
 */
/**
 * Class XiSecurityTypeVariationTypes
 * @date 08/07/2012
 */
class XiSecurityTypeVariationTypes extends XiSecurityWsdlClass
{
	/**
	 * Constant for value 'Down'
	 * @return string 'Down'
	 */
	const VALUE_DOWN = 'Down';
	/**
	 * Constant for value 'Up'
	 * @return string 'Up'
	 */
	const VALUE_UP = 'Up';
	/**
	 * Constructor
	 * @return XiSecurityTypeVariationTypes
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
		return in_array($_value,array(self::VALUE_DOWN,self::VALUE_UP));
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