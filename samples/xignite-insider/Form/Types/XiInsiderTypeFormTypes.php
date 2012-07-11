<?php
/**
 * Class file for XiInsiderTypeFormTypes
 * @date 08/07/2012
 */
/**
 * Class XiInsiderTypeFormTypes
 * @date 08/07/2012
 */
class XiInsiderTypeFormTypes extends XiInsiderWsdlClass
{
	/**
	 * Constant for value 'Schedule4'
	 * @return string 'Schedule4'
	 */
	const VALUE_SCHEDULE4 = 'Schedule4';
	/**
	 * Constant for value 'Schedule5'
	 * @return string 'Schedule5'
	 */
	const VALUE_SCHEDULE5 = 'Schedule5';
	/**
	 * Constant for value 'Schedule3'
	 * @return string 'Schedule3'
	 */
	const VALUE_SCHEDULE3 = 'Schedule3';
	/**
	 * Constant for value 'All'
	 * @return string 'All'
	 */
	const VALUE_ALL = 'All';
	/**
	 * Constructor
	 * @return XiInsiderTypeFormTypes
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
		return in_array($_value,array(self::VALUE_SCHEDULE4,self::VALUE_SCHEDULE5,self::VALUE_SCHEDULE3,self::VALUE_ALL));
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