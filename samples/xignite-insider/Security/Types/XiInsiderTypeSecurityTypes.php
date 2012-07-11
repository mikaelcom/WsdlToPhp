<?php
/**
 * Class file for XiInsiderTypeSecurityTypes
 * @date 08/07/2012
 */
/**
 * Class XiInsiderTypeSecurityTypes
 * @date 08/07/2012
 */
class XiInsiderTypeSecurityTypes extends XiInsiderWsdlClass
{
	/**
	 * Constant for value 'Stock'
	 * @return string 'Stock'
	 */
	const VALUE_STOCK = 'Stock';
	/**
	 * Constant for value 'Derivative'
	 * @return string 'Derivative'
	 */
	const VALUE_DERIVATIVE = 'Derivative';
	/**
	 * Constant for value 'Both'
	 * @return string 'Both'
	 */
	const VALUE_BOTH = 'Both';
	/**
	 * Constructor
	 * @return XiInsiderTypeSecurityTypes
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
		return in_array($_value,array(self::VALUE_STOCK,self::VALUE_DERIVATIVE,self::VALUE_BOTH));
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